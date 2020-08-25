<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactApi.php">
 *   Copyright (c) 2018-2020 Aspose.Email for Cloud
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

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Email\Model\Requests;

/**
 * MapiContactApi Aspose.Email for Cloud API.
 */
class MapiContactApi
{
    /**
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /**
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;
  
    /**
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /**
     * Initialize a new instance of EmailApi
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null)
    {
        $this->client = $client ?: new Client(['verify' => false]);
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
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
     * Operation mapiContactAsContactDto
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Requests\MapiContactAsContactDtoRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ContactDto
     */
    public function mapiContactAsContactDto(Requests\MapiContactAsContactDtoRequest $request)
    {
        try {
             list($response) = $this->mapiContactAsContactDtoWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->mapiContactAsContactDtoWithHttpInfo($request);
             return $response;
        } 
    }

    /**
     * Operation mapiContactAsContactDtoWithHttpInfo
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Requests\MapiContactAsContactDtoRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiContactAsContactDtoWithHttpInfo(Requests\MapiContactAsContactDtoRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->mapiContactAsContactDtoRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ContactDto', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /**
     * Operation mapiContactAsContactDtoAsync
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Requests\MapiContactAsContactDtoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactAsContactDtoAsync(Requests\MapiContactAsContactDtoRequest $request) 
    {
        return $this->mapiContactAsContactDtoAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactAsContactDtoAsyncWithHttpInfo
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Requests\MapiContactAsContactDtoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactAsContactDtoAsyncWithHttpInfo(Requests\MapiContactAsContactDtoRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->mapiContactAsContactDtoRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'mapiContactAsContactDto'
     *
     * @param Requests\MapiContactAsContactDtoRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function mapiContactAsContactDtoRequest(Requests\MapiContactAsContactDtoRequest $request)
    {
        // verify the required parameter 'mapi_contact_dto' is set
        if ($request->mapi_contact_dto === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mapi_contact_dto when calling mapiContactAsContactDto');
        }

        $resourcePath = '/email/MapiContact/as-contact-dto';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // body params
        $_tempBody = null;
        if (isset($request->mapi_contact_dto)) {
            if (is_string($request->mapi_contact_dto)) {
                $_tempBody = "\"" . $request->mapi_contact_dto . "\"";   
            } else {
                $_tempBody = $request->mapi_contact_dto;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
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
                    if(isset($formFiles[$formParamName]))
                    {
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
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /**
     * Operation mapiContactAsFile
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Requests\MapiContactAsFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function mapiContactAsFile(Requests\MapiContactAsFileRequest $request)
    {
        try {
             list($response) = $this->mapiContactAsFileWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->mapiContactAsFileWithHttpInfo($request);
             return $response;
        } 
    }

    /**
     * Operation mapiContactAsFileWithHttpInfo
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Requests\MapiContactAsFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiContactAsFileWithHttpInfo(Requests\MapiContactAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiContactAsFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /**
     * Operation mapiContactAsFileAsync
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Requests\MapiContactAsFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactAsFileAsync(Requests\MapiContactAsFileRequest $request) 
    {
        return $this->mapiContactAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactAsFileAsyncWithHttpInfo
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Requests\MapiContactAsFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactAsFileAsyncWithHttpInfo(Requests\MapiContactAsFileRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiContactAsFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'mapiContactAsFile'
     *
     * @param Requests\MapiContactAsFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function mapiContactAsFileRequest(Requests\MapiContactAsFileRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling mapiContactAsFile');
        }

        $resourcePath = '/email/MapiContact/as-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // body params
        $_tempBody = null;
        if (isset($request->request)) {
            if (is_string($request->request)) {
                $_tempBody = "\"" . $request->request . "\"";   
            } else {
                $_tempBody = $request->request;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
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
                    if(isset($formFiles[$formParamName]))
                    {
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
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /**
     * Operation mapiContactFromFile
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Requests\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\MapiContactDto
     */
    public function mapiContactFromFile(Requests\MapiContactFromFileRequest $request)
    {
        try {
             list($response) = $this->mapiContactFromFileWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->mapiContactFromFileWithHttpInfo($request);
             return $response;
        } 
    }

    /**
     * Operation mapiContactFromFileWithHttpInfo
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Requests\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\MapiContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiContactFromFileWithHttpInfo(Requests\MapiContactFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactFromFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\MapiContactDto', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /**
     * Operation mapiContactFromFileAsync
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Requests\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactFromFileAsync(Requests\MapiContactFromFileRequest $request) 
    {
        return $this->mapiContactFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactFromFileAsyncWithHttpInfo
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Requests\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactFromFileAsyncWithHttpInfo(Requests\MapiContactFromFileRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactFromFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'mapiContactFromFile'
     *
     * @param Requests\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function mapiContactFromFileRequest(Requests\MapiContactFromFileRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling mapiContactFromFile');
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling mapiContactFromFile');
        }

        $resourcePath = '/email/MapiContact/from-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $localValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // form params
        if ($request->file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($request->file);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['file'] = $contents;
            $formFiles['file'] = basename($filename);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
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
                    if(isset($formFiles[$formParamName]))
                    {
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
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /**
     * Operation mapiContactGet
     *
     * Get MAPI contact document.
     *
     * @param Requests\MapiContactGetRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\MapiContactDto
     */
    public function mapiContactGet(Requests\MapiContactGetRequest $request)
    {
        try {
             list($response) = $this->mapiContactGetWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->mapiContactGetWithHttpInfo($request);
             return $response;
        } 
    }

    /**
     * Operation mapiContactGetWithHttpInfo
     *
     * Get MAPI contact document.
     *
     * @param Requests\MapiContactGetRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\MapiContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiContactGetWithHttpInfo(Requests\MapiContactGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactGetRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\MapiContactDto', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /**
     * Operation mapiContactGetAsync
     *
     * Get MAPI contact document.
     *
     * @param Requests\MapiContactGetRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactGetAsync(Requests\MapiContactGetRequest $request) 
    {
        return $this->mapiContactGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactGetAsyncWithHttpInfo
     *
     * Get MAPI contact document.
     *
     * @param Requests\MapiContactGetRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactGetAsyncWithHttpInfo(Requests\MapiContactGetRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactGetRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'mapiContactGet'
     *
     * @param Requests\MapiContactGetRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function mapiContactGetRequest(Requests\MapiContactGetRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling mapiContactGet');
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_name when calling mapiContactGet');
        }

        $resourcePath = '/email/MapiContact';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $localValue = is_bool($request->format) ? ($request->format ? 'true' : 'false') : $request->format;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->file_name !== null) {
            $localName = lcfirst('fileName');
            $localValue = is_bool($request->file_name) ? ($request->file_name ? 'true' : 'false') : $request->file_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->folder !== null) {
            $localName = lcfirst('folder');
            $localValue = is_bool($request->folder) ? ($request->folder ? 'true' : 'false') : $request->folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->storage !== null) {
            $localName = lcfirst('storage');
            $localValue = is_bool($request->storage) ? ($request->storage ? 'true' : 'false') : $request->storage;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
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
                    if(isset($formFiles[$formParamName]))
                    {
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
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /**
     * Operation mapiContactSave
     *
     * Save MAPI Contact to storage.
     *
     * @param Requests\MapiContactSaveRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function mapiContactSave(Requests\MapiContactSaveRequest $request)
    {
        try {
             $this->mapiContactSaveWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->mapiContactSaveWithHttpInfo($request);
        } 
    }

    /**
     * Operation mapiContactSaveWithHttpInfo
     *
     * Save MAPI Contact to storage.
     *
     * @param Requests\MapiContactSaveRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiContactSaveWithHttpInfo(Requests\MapiContactSaveRequest $request)
    {
        $returnType = '';
        $request = $this->mapiContactSaveRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                if ($statusCode === 401) {
                    $this->_requestToken();
                    throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                }
          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation mapiContactSaveAsync
     *
     * Save MAPI Contact to storage.
     *
     * @param Requests\MapiContactSaveRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactSaveAsync(Requests\MapiContactSaveRequest $request) 
    {
        return $this->mapiContactSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactSaveAsyncWithHttpInfo
     *
     * Save MAPI Contact to storage.
     *
     * @param Requests\MapiContactSaveRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function mapiContactSaveAsyncWithHttpInfo(Requests\MapiContactSaveRequest $request) 
    {
        $returnType = '';
        $request = $this->mapiContactSaveRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
          
                    if ($exception instanceof RepeatRequestException) {
                        $this->_requestToken();
                        throw new RepeatRequestException("Request must be retried", $statusCode, $response->getHeaders(), $response->getBody());
                    }
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'mapiContactSave'
     *
     * @param Requests\MapiContactSaveRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function mapiContactSaveRequest(Requests\MapiContactSaveRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling mapiContactSave');
        }

        $resourcePath = '/email/MapiContact';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // body params
        $_tempBody = null;
        if (isset($request->request)) {
            if (is_string($request->request)) {
                $_tempBody = "\"" . $request->request . "\"";   
            } else {
                $_tempBody = $request->request;
            }
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
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
                    if(isset($formFiles[$formParamName]))
                    {
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
    
        $this->_requestToken();

        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['x-aspose-client'] = $this->config->getUserAgent();
        }
    
        $defaultHeaders['x-aspose-client-version'] = $this->config->getClientVersion();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption() 
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
    
    /**
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /**
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /**
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /**
     * Executes url parsing
     */
    private function _parseURL($url, $queryParams) 
    {
        // parse the url
         $UrlToSign = trim($url, "/");
         $urlQuery = http_build_query($queryParams);
 
         $urlPartToSign = parse_url($UrlToSign, PHP_URL_SCHEME) . ':/' . "v3.0/" . parse_url($UrlToSign, PHP_URL_HOST) . parse_url($UrlToSign, PHP_URL_PATH) . "?" . $urlQuery;
        
        return $urlPartToSign;
    }
  
    /**
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        $requestUrl = $this->config->getAuthUrl() . "/connect/token";
        $headers = [ 'Content-Type' => 'application/x-www-form-urlencoded' ];
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
        $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
    }
}
?>
