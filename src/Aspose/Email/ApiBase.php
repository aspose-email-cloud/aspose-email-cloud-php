<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ApiBase.php">
 *   Copyright (c) 2020 Aspose.Email for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Email;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RuntimeException;
use stdClass;

class ApiBase
{
    protected $client;

    protected $config;
  
    protected $headerSelector;

    protected function __construct($client, $config, $selector)
    {
        $this->client = $client;
        $this->config = $config;
        $this->headerSelector = $selector;
    }

    /**
     * Gets the config
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Create http client option
     *
     * @throws RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    protected function writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }

    protected function writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->writeHeadersAndBody($logInfo, $headers, $body);
    }

    protected function writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . "\n";
        }

        return $logInfo . "Body: " . $body . "\n";
    }

    protected function parseURL($url, $queryParams)
    {
        // parse the url
        $UrlToSign = trim($url, "/");
        $urlQuery = http_build_query($queryParams);

        return
            parse_url($UrlToSign, PHP_URL_SCHEME) .
            ':/' .
            "v4.0/" .
            parse_url($UrlToSign, PHP_URL_HOST) .
            parse_url($UrlToSign, PHP_URL_PATH) .
            "?" .
            $urlQuery;
    }
  
    /**
     * Gets a request token from server
     */
    protected function requestToken()
    {
        $requestUrl = $this->config->getAuthUrl() . "/connect/token";
        $headers = [ 'Content-Type' => 'application/x-www-form-urlencoded' ];
        $postData =
            "grant_type=client_credentials" .
            "&client_id=" .
            $this->config->getAppSid() .
            "&client_secret=" .
            $this->config->getAppKey();
        $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
    }

    protected function processResponse($response, $returnType)
    {
        $responseBody = $response->getBody();
        if ($returnType === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
        } else {
            $content = $responseBody->getContents();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
        }
        $statusCode = $response->getStatusCode();
        if ($this->config->getDebug()) {
            $this->writeResponseLog(
                $statusCode,
                $response->getHeaders(),
                ObjectSerializer::deserialize($content, $returnType, [])
            );
        }

        return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $statusCode,
            $response->getHeaders()
        ];
    }

    protected function callClient($request)
    {
        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            if ($statusCode === 401) {
                $this->requestToken();
                throw new RepeatRequestException(
                    "Request must be retried",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }
        return $response;
    }

    protected function handleClientException($exception)
    {
        $response = $exception->getResponse();
        $statusCode = $response->getStatusCode();

        if ($exception instanceof RepeatRequestException) {
            $this->requestToken();
            throw new RepeatRequestException(
                "Request must be retried",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        }

        throw new ApiException(
            sprintf(
                '[%d] Error connecting to the API (%s)',
                $statusCode,
                $exception->getRequest()->getUri()
            ),
            $statusCode,
            $response->getHeaders(),
            $response->getBody()
        );
    }

    protected function mergeAllHeaders($headerParams, $selectedHeaders)
    {
        $auth = [];
        $currentToken = $this->config->getAccessToken();
        if (!isset($currentToken) || trim($currentToken) === '') {
            $this->requestToken();
        }

        if ($this->config->getAccessToken() !== null) {
            $auth['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        return array_merge(
            $this->getDefaultHeaders(),
            $headerParams,
            $auth,
            $selectedHeaders
        );
    }

    protected function prepareRequestBody(
        $headers,
        $bodyParam,
        $multipart,
        $formParams,
        $formFiles
    ) {
        $httpBody = "";
        if (isset($bodyParam)) {
            // $bodyParam is the method argument, if present
            $httpBody = $bodyParam;
            // stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContent = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                    if (isset($formFiles[$formParamName])) {
                        $multipartContent['filename'] = $formFiles[$formParamName];
                    }
                    $multipartContents[] = $multipartContent;
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
                $headers["Content-Type"]="multipart/form-data; boundary=".($httpBody->getBoundary());
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
        return $httpBody;
    }

    protected function processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath)
    {
        if ($paramValue !== null) {
            $localName = lcfirst($paramBaseName);
            $localValue = is_bool($paramValue)
                ? ($paramValue ? 'true' : 'false')
                : $paramValue;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace(
                    '{' . $localName . '}',
                    ObjectSerializer::toPathValue($localValue),
                    $resourcePath
                );
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        return $resourcePath;
    }

    protected function toClientRequest(
        $httpMethod,
        $bodyParam,
        $resourcePath,
        $queryParams,
        $formParams,
        $formFiles,
        $multipart,
        $headers,
        $headerParams
    ) {
        $resourcePath = $this->parseURL($resourcePath, $queryParams);
        $headers = $this->mergeAllHeaders($headerParams, $headers);
        $httpBody = $this->prepareRequestBody($headers, $bodyParam, $multipart, $formParams, $formFiles);

        $req = new Request(
            $httpMethod,
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog($req->getMethod(), $req->getUri(), $req->getHeaders(), $req->getBody());
        }

        return $req;
    }

    private function getDefaultHeaders()
    {
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }

        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();
        return $defaultHeaders;
    }
}
