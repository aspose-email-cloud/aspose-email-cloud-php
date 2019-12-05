<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailApi.php">
 *   Copyright (c) 2018 Aspose.Email for Cloud
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

/*
 * EmailApi Aspose.Email for Cloud API.
 */
class EmailApi
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;
  
    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Initialize a new instance of EmailApi
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /*
     * Gets the config
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->config;
    }

    /*
     * Operation addCalendarAttachment
     *
     * Adds an attachment to iCalendar file
     *
     * @param Requests\addCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addCalendarAttachment(Requests\addCalendarAttachmentRequest $request)
    {
        try {
             $this->addCalendarAttachmentWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->addCalendarAttachmentWithHttpInfo($request);
        } 
    }

    /*
     * Operation addCalendarAttachmentWithHttpInfo
     *
     * Adds an attachment to iCalendar file
     *
     * @param Requests\addCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addCalendarAttachmentWithHttpInfo(Requests\addCalendarAttachmentRequest $request)
    {
        $returnType = '';
        $request = $this->addCalendarAttachmentRequest($request);

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

    /*
     * Operation addCalendarAttachmentAsync
     *
     * Adds an attachment to iCalendar file
     *
     * @param Requests\addCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addCalendarAttachmentAsync(Requests\addCalendarAttachmentRequest $request) 
    {
        return $this->addCalendarAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation addCalendarAttachmentAsyncWithHttpInfo
     *
     * Adds an attachment to iCalendar file
     *
     * @param Requests\addCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addCalendarAttachmentAsyncWithHttpInfo(Requests\addCalendarAttachmentRequest $request) 
    {
        $returnType = '';
        $request = $this->addCalendarAttachmentRequest($request);

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

    /*
     * Create request for operation 'addCalendarAttachment'
     *
     * @param Requests\addCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addCalendarAttachmentRequest(Requests\addCalendarAttachmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling addCalendarAttachment');
        }
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling addCalendarAttachment');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling addCalendarAttachment');
        }

        $resourcePath = '/email/Calendar/{name}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
        }

    
    
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

    /*
     * Operation addContactAttachment
     *
     * Add attachment to contact document
     *
     * @param Requests\addContactAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addContactAttachment(Requests\addContactAttachmentRequest $request)
    {
        try {
             $this->addContactAttachmentWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->addContactAttachmentWithHttpInfo($request);
        } 
    }

    /*
     * Operation addContactAttachmentWithHttpInfo
     *
     * Add attachment to contact document
     *
     * @param Requests\addContactAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addContactAttachmentWithHttpInfo(Requests\addContactAttachmentRequest $request)
    {
        $returnType = '';
        $request = $this->addContactAttachmentRequest($request);

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

    /*
     * Operation addContactAttachmentAsync
     *
     * Add attachment to contact document
     *
     * @param Requests\addContactAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addContactAttachmentAsync(Requests\addContactAttachmentRequest $request) 
    {
        return $this->addContactAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation addContactAttachmentAsyncWithHttpInfo
     *
     * Add attachment to contact document
     *
     * @param Requests\addContactAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addContactAttachmentAsyncWithHttpInfo(Requests\addContactAttachmentRequest $request) 
    {
        $returnType = '';
        $request = $this->addContactAttachmentRequest($request);

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

    /*
     * Create request for operation 'addContactAttachment'
     *
     * @param Requests\addContactAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addContactAttachmentRequest(Requests\addContactAttachmentRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling addContactAttachment');
        }
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling addContactAttachment');
        }
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling addContactAttachment');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling addContactAttachment');
        }

        $resourcePath = '/email/Contact/{format}/{name}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->format), $resourcePath);
        }
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
        }

    
    
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

    /*
     * Operation addEmailAttachment
     *
     * Adds an attachment to Email document
     *
     * @param Requests\addEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailDocumentResponse
     */
    public function addEmailAttachment(Requests\addEmailAttachmentRequest $request)
    {
        try {
             list($response) = $this->addEmailAttachmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->addEmailAttachmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation addEmailAttachmentWithHttpInfo
     *
     * Adds an attachment to Email document
     *
     * @param Requests\addEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailDocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addEmailAttachmentWithHttpInfo(Requests\addEmailAttachmentRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDocumentResponse';
        $request = $this->addEmailAttachmentRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailDocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation addEmailAttachmentAsync
     *
     * Adds an attachment to Email document
     *
     * @param Requests\addEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addEmailAttachmentAsync(Requests\addEmailAttachmentRequest $request) 
    {
        return $this->addEmailAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation addEmailAttachmentAsyncWithHttpInfo
     *
     * Adds an attachment to Email document
     *
     * @param Requests\addEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addEmailAttachmentAsyncWithHttpInfo(Requests\addEmailAttachmentRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailDocumentResponse';
        $request = $this->addEmailAttachmentRequest($request);

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

    /*
     * Create request for operation 'addEmailAttachment'
     *
     * @param Requests\addEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addEmailAttachmentRequest(Requests\addEmailAttachmentRequest $request)
    {
        // verify the required parameter 'attachment_name' is set
        if ($request->attachment_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment_name when calling addEmailAttachment');
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_name when calling addEmailAttachment');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling addEmailAttachment');
        }

        $resourcePath = '/email/{fileName}/attachments/{attachmentName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->attachment_name !== null) {
            $localName = lcfirst('attachmentName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment_name), $resourcePath);
        }
        // path params
        if ($request->file_name !== null) {
            $localName = lcfirst('fileName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->file_name), $resourcePath);
        }

    
    
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation addMapiAttachment
     *
     * Add attachment to document
     *
     * @param Requests\addMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addMapiAttachment(Requests\addMapiAttachmentRequest $request)
    {
        try {
             $this->addMapiAttachmentWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->addMapiAttachmentWithHttpInfo($request);
        } 
    }

    /*
     * Operation addMapiAttachmentWithHttpInfo
     *
     * Add attachment to document
     *
     * @param Requests\addMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addMapiAttachmentWithHttpInfo(Requests\addMapiAttachmentRequest $request)
    {
        $returnType = '';
        $request = $this->addMapiAttachmentRequest($request);

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

    /*
     * Operation addMapiAttachmentAsync
     *
     * Add attachment to document
     *
     * @param Requests\addMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addMapiAttachmentAsync(Requests\addMapiAttachmentRequest $request) 
    {
        return $this->addMapiAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation addMapiAttachmentAsyncWithHttpInfo
     *
     * Add attachment to document
     *
     * @param Requests\addMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addMapiAttachmentAsyncWithHttpInfo(Requests\addMapiAttachmentRequest $request) 
    {
        $returnType = '';
        $request = $this->addMapiAttachmentRequest($request);

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

    /*
     * Create request for operation 'addMapiAttachment'
     *
     * @param Requests\addMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addMapiAttachmentRequest(Requests\addMapiAttachmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling addMapiAttachment');
        }
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling addMapiAttachment');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling addMapiAttachment');
        }

        $resourcePath = '/email/Mapi/{name}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
        }

    
    
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

    /*
     * Operation aiBcrOcr
     *
     * Ocr images
     *
     * @param Requests\aiBcrOcrRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfAiBcrOcrData
     */
    public function aiBcrOcr(Requests\aiBcrOcrRequest $request)
    {
        try {
             list($response) = $this->aiBcrOcrWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiBcrOcrWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiBcrOcrWithHttpInfo
     *
     * Ocr images
     *
     * @param Requests\aiBcrOcrRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfAiBcrOcrData, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrOcrWithHttpInfo(Requests\aiBcrOcrRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiBcrOcrData';
        $request = $this->aiBcrOcrRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfAiBcrOcrData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiBcrOcrAsync
     *
     * Ocr images
     *
     * @param Requests\aiBcrOcrRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrOcrAsync(Requests\aiBcrOcrRequest $request) 
    {
        return $this->aiBcrOcrAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiBcrOcrAsyncWithHttpInfo
     *
     * Ocr images
     *
     * @param Requests\aiBcrOcrRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrOcrAsyncWithHttpInfo(Requests\aiBcrOcrRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiBcrOcrData';
        $request = $this->aiBcrOcrRequest($request);

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

    /*
     * Create request for operation 'aiBcrOcr'
     *
     * @param Requests\aiBcrOcrRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiBcrOcrRequest(Requests\aiBcrOcrRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiBcrOcr');
        }

        $resourcePath = '/email/AiBcr/ocr';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiBcrOcrStorage
     *
     * Ocr images from storage
     *
     * @param Requests\aiBcrOcrStorageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfAiBcrOcrData
     */
    public function aiBcrOcrStorage(Requests\aiBcrOcrStorageRequest $request)
    {
        try {
             list($response) = $this->aiBcrOcrStorageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiBcrOcrStorageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiBcrOcrStorageWithHttpInfo
     *
     * Ocr images from storage
     *
     * @param Requests\aiBcrOcrStorageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfAiBcrOcrData, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrOcrStorageWithHttpInfo(Requests\aiBcrOcrStorageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiBcrOcrData';
        $request = $this->aiBcrOcrStorageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfAiBcrOcrData', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiBcrOcrStorageAsync
     *
     * Ocr images from storage
     *
     * @param Requests\aiBcrOcrStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrOcrStorageAsync(Requests\aiBcrOcrStorageRequest $request) 
    {
        return $this->aiBcrOcrStorageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiBcrOcrStorageAsyncWithHttpInfo
     *
     * Ocr images from storage
     *
     * @param Requests\aiBcrOcrStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrOcrStorageAsyncWithHttpInfo(Requests\aiBcrOcrStorageRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiBcrOcrData';
        $request = $this->aiBcrOcrStorageRequest($request);

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

    /*
     * Create request for operation 'aiBcrOcrStorage'
     *
     * @param Requests\aiBcrOcrStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiBcrOcrStorageRequest(Requests\aiBcrOcrStorageRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiBcrOcrStorage');
        }

        $resourcePath = '/email/AiBcr/ocr-storage';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiBcrParse
     *
     * Parse images to vCard properties
     *
     * @param Requests\aiBcrParseRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfHierarchicalObject
     */
    public function aiBcrParse(Requests\aiBcrParseRequest $request)
    {
        try {
             list($response) = $this->aiBcrParseWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiBcrParseWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiBcrParseWithHttpInfo
     *
     * Parse images to vCard properties
     *
     * @param Requests\aiBcrParseRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfHierarchicalObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrParseWithHttpInfo(Requests\aiBcrParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObject';
        $request = $this->aiBcrParseRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfHierarchicalObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiBcrParseAsync
     *
     * Parse images to vCard properties
     *
     * @param Requests\aiBcrParseRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseAsync(Requests\aiBcrParseRequest $request) 
    {
        return $this->aiBcrParseAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiBcrParseAsyncWithHttpInfo
     *
     * Parse images to vCard properties
     *
     * @param Requests\aiBcrParseRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseAsyncWithHttpInfo(Requests\aiBcrParseRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObject';
        $request = $this->aiBcrParseRequest($request);

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

    /*
     * Create request for operation 'aiBcrParse'
     *
     * @param Requests\aiBcrParseRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiBcrParseRequest(Requests\aiBcrParseRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiBcrParse');
        }

        $resourcePath = '/email/AiBcr/parse';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiBcrParseOcrData
     *
     * Parse OCR data to vCard properties
     *
     * @param Requests\aiBcrParseOcrDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfHierarchicalObject
     */
    public function aiBcrParseOcrData(Requests\aiBcrParseOcrDataRequest $request)
    {
        try {
             list($response) = $this->aiBcrParseOcrDataWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiBcrParseOcrDataWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiBcrParseOcrDataWithHttpInfo
     *
     * Parse OCR data to vCard properties
     *
     * @param Requests\aiBcrParseOcrDataRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfHierarchicalObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrParseOcrDataWithHttpInfo(Requests\aiBcrParseOcrDataRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObject';
        $request = $this->aiBcrParseOcrDataRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfHierarchicalObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiBcrParseOcrDataAsync
     *
     * Parse OCR data to vCard properties
     *
     * @param Requests\aiBcrParseOcrDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseOcrDataAsync(Requests\aiBcrParseOcrDataRequest $request) 
    {
        return $this->aiBcrParseOcrDataAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiBcrParseOcrDataAsyncWithHttpInfo
     *
     * Parse OCR data to vCard properties
     *
     * @param Requests\aiBcrParseOcrDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseOcrDataAsyncWithHttpInfo(Requests\aiBcrParseOcrDataRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObject';
        $request = $this->aiBcrParseOcrDataRequest($request);

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

    /*
     * Create request for operation 'aiBcrParseOcrData'
     *
     * @param Requests\aiBcrParseOcrDataRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiBcrParseOcrDataRequest(Requests\aiBcrParseOcrDataRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiBcrParseOcrData');
        }

        $resourcePath = '/email/AiBcr/parse-ocr-data';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiBcrParseOcrDataStorage
     *
     * Parse vCards from OCR data and save them to Storage
     *
     * @param Requests\aiBcrParseOcrDataStorageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfStorageFileLocation
     */
    public function aiBcrParseOcrDataStorage(Requests\aiBcrParseOcrDataStorageRequest $request)
    {
        try {
             list($response) = $this->aiBcrParseOcrDataStorageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiBcrParseOcrDataStorageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiBcrParseOcrDataStorageWithHttpInfo
     *
     * Parse vCards from OCR data and save them to Storage
     *
     * @param Requests\aiBcrParseOcrDataStorageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfStorageFileLocation, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrParseOcrDataStorageWithHttpInfo(Requests\aiBcrParseOcrDataStorageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfStorageFileLocation';
        $request = $this->aiBcrParseOcrDataStorageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfStorageFileLocation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiBcrParseOcrDataStorageAsync
     *
     * Parse vCards from OCR data and save them to Storage
     *
     * @param Requests\aiBcrParseOcrDataStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseOcrDataStorageAsync(Requests\aiBcrParseOcrDataStorageRequest $request) 
    {
        return $this->aiBcrParseOcrDataStorageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiBcrParseOcrDataStorageAsyncWithHttpInfo
     *
     * Parse vCards from OCR data and save them to Storage
     *
     * @param Requests\aiBcrParseOcrDataStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseOcrDataStorageAsyncWithHttpInfo(Requests\aiBcrParseOcrDataStorageRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfStorageFileLocation';
        $request = $this->aiBcrParseOcrDataStorageRequest($request);

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

    /*
     * Create request for operation 'aiBcrParseOcrDataStorage'
     *
     * @param Requests\aiBcrParseOcrDataStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiBcrParseOcrDataStorageRequest(Requests\aiBcrParseOcrDataStorageRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiBcrParseOcrDataStorage');
        }

        $resourcePath = '/email/AiBcr/parse-ocr-data-storage';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiBcrParseStorage
     *
     * Parse images from storage to vCard files
     *
     * @param Requests\aiBcrParseStorageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfStorageFileLocation
     */
    public function aiBcrParseStorage(Requests\aiBcrParseStorageRequest $request)
    {
        try {
             list($response) = $this->aiBcrParseStorageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiBcrParseStorageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiBcrParseStorageWithHttpInfo
     *
     * Parse images from storage to vCard files
     *
     * @param Requests\aiBcrParseStorageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfStorageFileLocation, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrParseStorageWithHttpInfo(Requests\aiBcrParseStorageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfStorageFileLocation';
        $request = $this->aiBcrParseStorageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfStorageFileLocation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiBcrParseStorageAsync
     *
     * Parse images from storage to vCard files
     *
     * @param Requests\aiBcrParseStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseStorageAsync(Requests\aiBcrParseStorageRequest $request) 
    {
        return $this->aiBcrParseStorageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiBcrParseStorageAsyncWithHttpInfo
     *
     * Parse images from storage to vCard files
     *
     * @param Requests\aiBcrParseStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiBcrParseStorageAsyncWithHttpInfo(Requests\aiBcrParseStorageRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfStorageFileLocation';
        $request = $this->aiBcrParseStorageRequest($request);

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

    /*
     * Create request for operation 'aiBcrParseStorage'
     *
     * @param Requests\aiBcrParseStorageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiBcrParseStorageRequest(Requests\aiBcrParseStorageRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiBcrParseStorage');
        }

        $resourcePath = '/email/AiBcr/parse-storage';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiNameComplete
     *
     * The call proposes k most probable names for given starting characters
     *
     * @param Requests\aiNameCompleteRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\AiNameWeightedVariants
     */
    public function aiNameComplete(Requests\aiNameCompleteRequest $request)
    {
        try {
             list($response) = $this->aiNameCompleteWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameCompleteWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameCompleteWithHttpInfo
     *
     * The call proposes k most probable names for given starting characters
     *
     * @param Requests\aiNameCompleteRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\AiNameWeightedVariants, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameCompleteWithHttpInfo(Requests\aiNameCompleteRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameCompleteRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\AiNameWeightedVariants', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameCompleteAsync
     *
     * The call proposes k most probable names for given starting characters
     *
     * @param Requests\aiNameCompleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameCompleteAsync(Requests\aiNameCompleteRequest $request) 
    {
        return $this->aiNameCompleteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameCompleteAsyncWithHttpInfo
     *
     * The call proposes k most probable names for given starting characters
     *
     * @param Requests\aiNameCompleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameCompleteAsyncWithHttpInfo(Requests\aiNameCompleteRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameCompleteRequest($request);

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

    /*
     * Create request for operation 'aiNameComplete'
     *
     * @param Requests\aiNameCompleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameCompleteRequest(Requests\aiNameCompleteRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling aiNameComplete');
        }

        $resourcePath = '/email/AiName/complete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $localValue = is_bool($request->name) ? ($request->name ? 'true' : 'false') : $request->name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->language !== null) {
            $localName = lcfirst('language');
            $localValue = is_bool($request->language) ? ($request->language ? 'true' : 'false') : $request->language;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->location !== null) {
            $localName = lcfirst('location');
            $localValue = is_bool($request->location) ? ($request->location ? 'true' : 'false') : $request->location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->encoding !== null) {
            $localName = lcfirst('encoding');
            $localValue = is_bool($request->encoding) ? ($request->encoding ? 'true' : 'false') : $request->encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->script !== null) {
            $localName = lcfirst('script');
            $localValue = is_bool($request->script) ? ($request->script ? 'true' : 'false') : $request->script;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->style !== null) {
            $localName = lcfirst('style');
            $localValue = is_bool($request->style) ? ($request->style ? 'true' : 'false') : $request->style;
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

    /*
     * Operation aiNameExpand
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\AiNameWeightedVariants
     */
    public function aiNameExpand(Requests\aiNameExpandRequest $request)
    {
        try {
             list($response) = $this->aiNameExpandWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameExpandWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameExpandWithHttpInfo
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\AiNameWeightedVariants, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameExpandWithHttpInfo(Requests\aiNameExpandRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameExpandRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\AiNameWeightedVariants', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameExpandAsync
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameExpandAsync(Requests\aiNameExpandRequest $request) 
    {
        return $this->aiNameExpandAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameExpandAsyncWithHttpInfo
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameExpandAsyncWithHttpInfo(Requests\aiNameExpandRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameExpandRequest($request);

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

    /*
     * Create request for operation 'aiNameExpand'
     *
     * @param Requests\aiNameExpandRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameExpandRequest(Requests\aiNameExpandRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling aiNameExpand');
        }

        $resourcePath = '/email/AiName/expand';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $localValue = is_bool($request->name) ? ($request->name ? 'true' : 'false') : $request->name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->language !== null) {
            $localName = lcfirst('language');
            $localValue = is_bool($request->language) ? ($request->language ? 'true' : 'false') : $request->language;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->location !== null) {
            $localName = lcfirst('location');
            $localValue = is_bool($request->location) ? ($request->location ? 'true' : 'false') : $request->location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->encoding !== null) {
            $localName = lcfirst('encoding');
            $localValue = is_bool($request->encoding) ? ($request->encoding ? 'true' : 'false') : $request->encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->script !== null) {
            $localName = lcfirst('script');
            $localValue = is_bool($request->script) ? ($request->script ? 'true' : 'false') : $request->script;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->style !== null) {
            $localName = lcfirst('style');
            $localValue = is_bool($request->style) ? ($request->style ? 'true' : 'false') : $request->style;
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

    /*
     * Operation aiNameExpandParsed
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\AiNameWeightedVariants
     */
    public function aiNameExpandParsed(Requests\aiNameExpandParsedRequest $request)
    {
        try {
             list($response) = $this->aiNameExpandParsedWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameExpandParsedWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameExpandParsedWithHttpInfo
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\AiNameWeightedVariants, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameExpandParsedWithHttpInfo(Requests\aiNameExpandParsedRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameExpandParsedRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\AiNameWeightedVariants', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameExpandParsedAsync
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameExpandParsedAsync(Requests\aiNameExpandParsedRequest $request) 
    {
        return $this->aiNameExpandParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameExpandParsedAsyncWithHttpInfo
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions
     *
     * @param Requests\aiNameExpandParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameExpandParsedAsyncWithHttpInfo(Requests\aiNameExpandParsedRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameExpandParsedRequest($request);

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

    /*
     * Create request for operation 'aiNameExpandParsed'
     *
     * @param Requests\aiNameExpandParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameExpandParsedRequest(Requests\aiNameExpandParsedRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiNameExpandParsed');
        }

        $resourcePath = '/email/AiName/expand-parsed';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiNameFormat
     *
     * Formats a person's name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\AiNameFormatted
     */
    public function aiNameFormat(Requests\aiNameFormatRequest $request)
    {
        try {
             list($response) = $this->aiNameFormatWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameFormatWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameFormatWithHttpInfo
     *
     * Formats a person's name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\AiNameFormatted, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameFormatWithHttpInfo(Requests\aiNameFormatRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->aiNameFormatRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\AiNameFormatted', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameFormatAsync
     *
     * Formats a person's name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameFormatAsync(Requests\aiNameFormatRequest $request) 
    {
        return $this->aiNameFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameFormatAsyncWithHttpInfo
     *
     * Formats a person's name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameFormatAsyncWithHttpInfo(Requests\aiNameFormatRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->aiNameFormatRequest($request);

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

    /*
     * Create request for operation 'aiNameFormat'
     *
     * @param Requests\aiNameFormatRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameFormatRequest(Requests\aiNameFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling aiNameFormat');
        }

        $resourcePath = '/email/AiName/format';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $localValue = is_bool($request->name) ? ($request->name ? 'true' : 'false') : $request->name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->language !== null) {
            $localName = lcfirst('language');
            $localValue = is_bool($request->language) ? ($request->language ? 'true' : 'false') : $request->language;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->location !== null) {
            $localName = lcfirst('location');
            $localValue = is_bool($request->location) ? ($request->location ? 'true' : 'false') : $request->location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->encoding !== null) {
            $localName = lcfirst('encoding');
            $localValue = is_bool($request->encoding) ? ($request->encoding ? 'true' : 'false') : $request->encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->script !== null) {
            $localName = lcfirst('script');
            $localValue = is_bool($request->script) ? ($request->script ? 'true' : 'false') : $request->script;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->style !== null) {
            $localName = lcfirst('style');
            $localValue = is_bool($request->style) ? ($request->style ? 'true' : 'false') : $request->style;
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

    /*
     * Operation aiNameFormatParsed
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\AiNameFormatted
     */
    public function aiNameFormatParsed(Requests\aiNameFormatParsedRequest $request)
    {
        try {
             list($response) = $this->aiNameFormatParsedWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameFormatParsedWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameFormatParsedWithHttpInfo
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\AiNameFormatted, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameFormatParsedWithHttpInfo(Requests\aiNameFormatParsedRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->aiNameFormatParsedRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\AiNameFormatted', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameFormatParsedAsync
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameFormatParsedAsync(Requests\aiNameFormatParsedRequest $request) 
    {
        return $this->aiNameFormatParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameFormatParsedAsyncWithHttpInfo
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions
     *
     * @param Requests\aiNameFormatParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameFormatParsedAsyncWithHttpInfo(Requests\aiNameFormatParsedRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->aiNameFormatParsedRequest($request);

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

    /*
     * Create request for operation 'aiNameFormatParsed'
     *
     * @param Requests\aiNameFormatParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameFormatParsedRequest(Requests\aiNameFormatParsedRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiNameFormatParsed');
        }

        $resourcePath = '/email/AiName/format-parsed';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiNameGenderize
     *
     * Detect person's gender from name string
     *
     * @param Requests\aiNameGenderizeRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis
     */
    public function aiNameGenderize(Requests\aiNameGenderizeRequest $request)
    {
        try {
             list($response) = $this->aiNameGenderizeWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameGenderizeWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameGenderizeWithHttpInfo
     *
     * Detect person's gender from name string
     *
     * @param Requests\aiNameGenderizeRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameGenderizeWithHttpInfo(Requests\aiNameGenderizeRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis';
        $request = $this->aiNameGenderizeRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameGenderizeAsync
     *
     * Detect person's gender from name string
     *
     * @param Requests\aiNameGenderizeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameGenderizeAsync(Requests\aiNameGenderizeRequest $request) 
    {
        return $this->aiNameGenderizeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameGenderizeAsyncWithHttpInfo
     *
     * Detect person's gender from name string
     *
     * @param Requests\aiNameGenderizeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameGenderizeAsyncWithHttpInfo(Requests\aiNameGenderizeRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis';
        $request = $this->aiNameGenderizeRequest($request);

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

    /*
     * Create request for operation 'aiNameGenderize'
     *
     * @param Requests\aiNameGenderizeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameGenderizeRequest(Requests\aiNameGenderizeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling aiNameGenderize');
        }

        $resourcePath = '/email/AiName/genderize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $localValue = is_bool($request->name) ? ($request->name ? 'true' : 'false') : $request->name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->language !== null) {
            $localName = lcfirst('language');
            $localValue = is_bool($request->language) ? ($request->language ? 'true' : 'false') : $request->language;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->location !== null) {
            $localName = lcfirst('location');
            $localValue = is_bool($request->location) ? ($request->location ? 'true' : 'false') : $request->location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->encoding !== null) {
            $localName = lcfirst('encoding');
            $localValue = is_bool($request->encoding) ? ($request->encoding ? 'true' : 'false') : $request->encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->script !== null) {
            $localName = lcfirst('script');
            $localValue = is_bool($request->script) ? ($request->script ? 'true' : 'false') : $request->script;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->style !== null) {
            $localName = lcfirst('style');
            $localValue = is_bool($request->style) ? ($request->style ? 'true' : 'false') : $request->style;
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

    /*
     * Operation aiNameGenderizeParsed
     *
     * Detect person's gender from parsed name
     *
     * @param Requests\aiNameGenderizeParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis
     */
    public function aiNameGenderizeParsed(Requests\aiNameGenderizeParsedRequest $request)
    {
        try {
             list($response) = $this->aiNameGenderizeParsedWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameGenderizeParsedWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameGenderizeParsedWithHttpInfo
     *
     * Detect person's gender from parsed name
     *
     * @param Requests\aiNameGenderizeParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameGenderizeParsedWithHttpInfo(Requests\aiNameGenderizeParsedRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis';
        $request = $this->aiNameGenderizeParsedRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameGenderizeParsedAsync
     *
     * Detect person's gender from parsed name
     *
     * @param Requests\aiNameGenderizeParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameGenderizeParsedAsync(Requests\aiNameGenderizeParsedRequest $request) 
    {
        return $this->aiNameGenderizeParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameGenderizeParsedAsyncWithHttpInfo
     *
     * Detect person's gender from parsed name
     *
     * @param Requests\aiNameGenderizeParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameGenderizeParsedAsyncWithHttpInfo(Requests\aiNameGenderizeParsedRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis';
        $request = $this->aiNameGenderizeParsedRequest($request);

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

    /*
     * Create request for operation 'aiNameGenderizeParsed'
     *
     * @param Requests\aiNameGenderizeParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameGenderizeParsedRequest(Requests\aiNameGenderizeParsedRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiNameGenderizeParsed');
        }

        $resourcePath = '/email/AiName/genderize-parsed';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiNameMatch
     *
     * Compare people's names. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\AiNameMatchResult
     */
    public function aiNameMatch(Requests\aiNameMatchRequest $request)
    {
        try {
             list($response) = $this->aiNameMatchWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameMatchWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameMatchWithHttpInfo
     *
     * Compare people's names. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\AiNameMatchResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameMatchWithHttpInfo(Requests\aiNameMatchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->aiNameMatchRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\AiNameMatchResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameMatchAsync
     *
     * Compare people's names. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameMatchAsync(Requests\aiNameMatchRequest $request) 
    {
        return $this->aiNameMatchAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameMatchAsyncWithHttpInfo
     *
     * Compare people's names. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameMatchAsyncWithHttpInfo(Requests\aiNameMatchRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->aiNameMatchRequest($request);

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

    /*
     * Create request for operation 'aiNameMatch'
     *
     * @param Requests\aiNameMatchRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameMatchRequest(Requests\aiNameMatchRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling aiNameMatch');
        }
        // verify the required parameter 'other_name' is set
        if ($request->other_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $other_name when calling aiNameMatch');
        }

        $resourcePath = '/email/AiName/match';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $localValue = is_bool($request->name) ? ($request->name ? 'true' : 'false') : $request->name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->other_name !== null) {
            $localName = lcfirst('otherName');
            $localValue = is_bool($request->other_name) ? ($request->other_name ? 'true' : 'false') : $request->other_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->language !== null) {
            $localName = lcfirst('language');
            $localValue = is_bool($request->language) ? ($request->language ? 'true' : 'false') : $request->language;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->location !== null) {
            $localName = lcfirst('location');
            $localValue = is_bool($request->location) ? ($request->location ? 'true' : 'false') : $request->location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->encoding !== null) {
            $localName = lcfirst('encoding');
            $localValue = is_bool($request->encoding) ? ($request->encoding ? 'true' : 'false') : $request->encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->script !== null) {
            $localName = lcfirst('script');
            $localValue = is_bool($request->script) ? ($request->script ? 'true' : 'false') : $request->script;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->style !== null) {
            $localName = lcfirst('style');
            $localValue = is_bool($request->style) ? ($request->style ? 'true' : 'false') : $request->style;
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

    /*
     * Operation aiNameMatchParsed
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\AiNameMatchResult
     */
    public function aiNameMatchParsed(Requests\aiNameMatchParsedRequest $request)
    {
        try {
             list($response) = $this->aiNameMatchParsedWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameMatchParsedWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameMatchParsedWithHttpInfo
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchParsedRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\AiNameMatchResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameMatchParsedWithHttpInfo(Requests\aiNameMatchParsedRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->aiNameMatchParsedRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\AiNameMatchResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameMatchParsedAsync
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameMatchParsedAsync(Requests\aiNameMatchParsedRequest $request) 
    {
        return $this->aiNameMatchParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameMatchParsedAsyncWithHttpInfo
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions
     *
     * @param Requests\aiNameMatchParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameMatchParsedAsyncWithHttpInfo(Requests\aiNameMatchParsedRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->aiNameMatchParsedRequest($request);

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

    /*
     * Create request for operation 'aiNameMatchParsed'
     *
     * @param Requests\aiNameMatchParsedRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameMatchParsedRequest(Requests\aiNameMatchParsedRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling aiNameMatchParsed');
        }

        $resourcePath = '/email/AiName/match-parsed';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation aiNameParse
     *
     * Parse name to components
     *
     * @param Requests\aiNameParseRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfAiNameComponent
     */
    public function aiNameParse(Requests\aiNameParseRequest $request)
    {
        try {
             list($response) = $this->aiNameParseWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameParseWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameParseWithHttpInfo
     *
     * Parse name to components
     *
     * @param Requests\aiNameParseRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfAiNameComponent, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameParseWithHttpInfo(Requests\aiNameParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameComponent';
        $request = $this->aiNameParseRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfAiNameComponent', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameParseAsync
     *
     * Parse name to components
     *
     * @param Requests\aiNameParseRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameParseAsync(Requests\aiNameParseRequest $request) 
    {
        return $this->aiNameParseAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameParseAsyncWithHttpInfo
     *
     * Parse name to components
     *
     * @param Requests\aiNameParseRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameParseAsyncWithHttpInfo(Requests\aiNameParseRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameComponent';
        $request = $this->aiNameParseRequest($request);

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

    /*
     * Create request for operation 'aiNameParse'
     *
     * @param Requests\aiNameParseRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameParseRequest(Requests\aiNameParseRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling aiNameParse');
        }

        $resourcePath = '/email/AiName/parse';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $localValue = is_bool($request->name) ? ($request->name ? 'true' : 'false') : $request->name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->language !== null) {
            $localName = lcfirst('language');
            $localValue = is_bool($request->language) ? ($request->language ? 'true' : 'false') : $request->language;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->location !== null) {
            $localName = lcfirst('location');
            $localValue = is_bool($request->location) ? ($request->location ? 'true' : 'false') : $request->location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->encoding !== null) {
            $localName = lcfirst('encoding');
            $localValue = is_bool($request->encoding) ? ($request->encoding ? 'true' : 'false') : $request->encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->script !== null) {
            $localName = lcfirst('script');
            $localValue = is_bool($request->script) ? ($request->script ? 'true' : 'false') : $request->script;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->style !== null) {
            $localName = lcfirst('style');
            $localValue = is_bool($request->style) ? ($request->style ? 'true' : 'false') : $request->style;
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

    /*
     * Operation aiNameParseEmailAddress
     *
     * Parse person's name out of an email address
     *
     * @param Requests\aiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfAiNameExtracted
     */
    public function aiNameParseEmailAddress(Requests\aiNameParseEmailAddressRequest $request)
    {
        try {
             list($response) = $this->aiNameParseEmailAddressWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->aiNameParseEmailAddressWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation aiNameParseEmailAddressWithHttpInfo
     *
     * Parse person's name out of an email address
     *
     * @param Requests\aiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfAiNameExtracted, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameParseEmailAddressWithHttpInfo(Requests\aiNameParseEmailAddressRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameExtracted';
        $request = $this->aiNameParseEmailAddressRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfAiNameExtracted', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation aiNameParseEmailAddressAsync
     *
     * Parse person's name out of an email address
     *
     * @param Requests\aiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameParseEmailAddressAsync(Requests\aiNameParseEmailAddressRequest $request) 
    {
        return $this->aiNameParseEmailAddressAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation aiNameParseEmailAddressAsyncWithHttpInfo
     *
     * Parse person's name out of an email address
     *
     * @param Requests\aiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aiNameParseEmailAddressAsyncWithHttpInfo(Requests\aiNameParseEmailAddressRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfAiNameExtracted';
        $request = $this->aiNameParseEmailAddressRequest($request);

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

    /*
     * Create request for operation 'aiNameParseEmailAddress'
     *
     * @param Requests\aiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aiNameParseEmailAddressRequest(Requests\aiNameParseEmailAddressRequest $request)
    {
        // verify the required parameter 'email_address' is set
        if ($request->email_address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email_address when calling aiNameParseEmailAddress');
        }

        $resourcePath = '/email/AiName/parse-email-address';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->email_address !== null) {
            $localName = lcfirst('emailAddress');
            $localValue = is_bool($request->email_address) ? ($request->email_address ? 'true' : 'false') : $request->email_address;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->language !== null) {
            $localName = lcfirst('language');
            $localValue = is_bool($request->language) ? ($request->language ? 'true' : 'false') : $request->language;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->location !== null) {
            $localName = lcfirst('location');
            $localValue = is_bool($request->location) ? ($request->location ? 'true' : 'false') : $request->location;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->encoding !== null) {
            $localName = lcfirst('encoding');
            $localValue = is_bool($request->encoding) ? ($request->encoding ? 'true' : 'false') : $request->encoding;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->script !== null) {
            $localName = lcfirst('script');
            $localValue = is_bool($request->script) ? ($request->script ? 'true' : 'false') : $request->script;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->style !== null) {
            $localName = lcfirst('style');
            $localValue = is_bool($request->style) ? ($request->style ? 'true' : 'false') : $request->style;
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

    /*
     * Operation appendEmailMessage
     *
     * Adds an email from *.eml file to specified folder in email account
     *
     * @param Requests\appendEmailMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailPropertyResponse
     */
    public function appendEmailMessage(Requests\appendEmailMessageRequest $request)
    {
        try {
             list($response) = $this->appendEmailMessageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->appendEmailMessageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation appendEmailMessageWithHttpInfo
     *
     * Adds an email from *.eml file to specified folder in email account
     *
     * @param Requests\appendEmailMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function appendEmailMessageWithHttpInfo(Requests\appendEmailMessageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailPropertyResponse';
        $request = $this->appendEmailMessageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation appendEmailMessageAsync
     *
     * Adds an email from *.eml file to specified folder in email account
     *
     * @param Requests\appendEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appendEmailMessageAsync(Requests\appendEmailMessageRequest $request) 
    {
        return $this->appendEmailMessageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation appendEmailMessageAsyncWithHttpInfo
     *
     * Adds an email from *.eml file to specified folder in email account
     *
     * @param Requests\appendEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appendEmailMessageAsyncWithHttpInfo(Requests\appendEmailMessageRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailPropertyResponse';
        $request = $this->appendEmailMessageRequest($request);

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

    /*
     * Create request for operation 'appendEmailMessage'
     *
     * @param Requests\appendEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function appendEmailMessageRequest(Requests\appendEmailMessageRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling appendEmailMessage');
        }

        $resourcePath = '/email/client/Append';
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

    /*
     * Operation appendMimeMessage
     *
     * Adds an email from MIME to specified folder in email account
     *
     * @param Requests\appendMimeMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ValueResponse
     */
    public function appendMimeMessage(Requests\appendMimeMessageRequest $request)
    {
        try {
             list($response) = $this->appendMimeMessageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->appendMimeMessageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation appendMimeMessageWithHttpInfo
     *
     * Adds an email from MIME to specified folder in email account
     *
     * @param Requests\appendMimeMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ValueResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function appendMimeMessageWithHttpInfo(Requests\appendMimeMessageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ValueResponse';
        $request = $this->appendMimeMessageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ValueResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation appendMimeMessageAsync
     *
     * Adds an email from MIME to specified folder in email account
     *
     * @param Requests\appendMimeMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appendMimeMessageAsync(Requests\appendMimeMessageRequest $request) 
    {
        return $this->appendMimeMessageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation appendMimeMessageAsyncWithHttpInfo
     *
     * Adds an email from MIME to specified folder in email account
     *
     * @param Requests\appendMimeMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appendMimeMessageAsyncWithHttpInfo(Requests\appendMimeMessageRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ValueResponse';
        $request = $this->appendMimeMessageRequest($request);

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

    /*
     * Create request for operation 'appendMimeMessage'
     *
     * @param Requests\appendMimeMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function appendMimeMessageRequest(Requests\appendMimeMessageRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling appendMimeMessage');
        }

        $resourcePath = '/email/client/AppendMime';
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

    /*
     * Operation copyFile
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFile(Requests\copyFileRequest $request)
    {
        try {
             $this->copyFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->copyFileWithHttpInfo($request);
        } 
    }

    /*
     * Operation copyFileWithHttpInfo
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function copyFileWithHttpInfo(Requests\copyFileRequest $request)
    {
        $returnType = '';
        $request = $this->copyFileRequest($request);

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

    /*
     * Operation copyFileAsync
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFileAsync(Requests\copyFileRequest $request) 
    {
        return $this->copyFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation copyFileAsyncWithHttpInfo
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFileAsyncWithHttpInfo(Requests\copyFileRequest $request) 
    {
        $returnType = '';
        $request = $this->copyFileRequest($request);

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

    /*
     * Create request for operation 'copyFile'
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function copyFileRequest(Requests\copyFileRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling copyFile');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling copyFile');
        }

        $resourcePath = '/email/storage/file/copy/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }

        // query params
        if ($request->dest_path !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($request->dest_path) ? ($request->dest_path ? 'true' : 'false') : $request->dest_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->src_storage_name !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($request->src_storage_name) ? ($request->src_storage_name ? 'true' : 'false') : $request->src_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->dest_storage_name !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($request->dest_storage_name) ? ($request->dest_storage_name ? 'true' : 'false') : $request->dest_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->version_id !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->version_id) ? ($request->version_id ? 'true' : 'false') : $request->version_id;
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

    /*
     * Operation copyFolder
     *
     * Copy folder
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFolder(Requests\copyFolderRequest $request)
    {
        try {
             $this->copyFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->copyFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation copyFolderWithHttpInfo
     *
     * Copy folder
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function copyFolderWithHttpInfo(Requests\copyFolderRequest $request)
    {
        $returnType = '';
        $request = $this->copyFolderRequest($request);

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

    /*
     * Operation copyFolderAsync
     *
     * Copy folder
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFolderAsync(Requests\copyFolderRequest $request) 
    {
        return $this->copyFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation copyFolderAsyncWithHttpInfo
     *
     * Copy folder
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFolderAsyncWithHttpInfo(Requests\copyFolderRequest $request) 
    {
        $returnType = '';
        $request = $this->copyFolderRequest($request);

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

    /*
     * Create request for operation 'copyFolder'
     *
     * @param Requests\copyFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function copyFolderRequest(Requests\copyFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling copyFolder');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling copyFolder');
        }

        $resourcePath = '/email/storage/folder/copy/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }

        // query params
        if ($request->dest_path !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($request->dest_path) ? ($request->dest_path ? 'true' : 'false') : $request->dest_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->src_storage_name !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($request->src_storage_name) ? ($request->src_storage_name ? 'true' : 'false') : $request->src_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->dest_storage_name !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($request->dest_storage_name) ? ($request->dest_storage_name ? 'true' : 'false') : $request->dest_storage_name;
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

    /*
     * Operation createCalendar
     *
     * Create calendar file
     *
     * @param Requests\createCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createCalendar(Requests\createCalendarRequest $request)
    {
        try {
             $this->createCalendarWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->createCalendarWithHttpInfo($request);
        } 
    }

    /*
     * Operation createCalendarWithHttpInfo
     *
     * Create calendar file
     *
     * @param Requests\createCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCalendarWithHttpInfo(Requests\createCalendarRequest $request)
    {
        $returnType = '';
        $request = $this->createCalendarRequest($request);

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

    /*
     * Operation createCalendarAsync
     *
     * Create calendar file
     *
     * @param Requests\createCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCalendarAsync(Requests\createCalendarRequest $request) 
    {
        return $this->createCalendarAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createCalendarAsyncWithHttpInfo
     *
     * Create calendar file
     *
     * @param Requests\createCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCalendarAsyncWithHttpInfo(Requests\createCalendarRequest $request) 
    {
        $returnType = '';
        $request = $this->createCalendarRequest($request);

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

    /*
     * Create request for operation 'createCalendar'
     *
     * @param Requests\createCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createCalendarRequest(Requests\createCalendarRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createCalendar');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling createCalendar');
        }

        $resourcePath = '/email/Calendar/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

    
    
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

    /*
     * Operation createContact
     *
     * Create contact document
     *
     * @param Requests\createContactRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createContact(Requests\createContactRequest $request)
    {
        try {
             $this->createContactWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->createContactWithHttpInfo($request);
        } 
    }

    /*
     * Operation createContactWithHttpInfo
     *
     * Create contact document
     *
     * @param Requests\createContactRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createContactWithHttpInfo(Requests\createContactRequest $request)
    {
        $returnType = '';
        $request = $this->createContactRequest($request);

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

    /*
     * Operation createContactAsync
     *
     * Create contact document
     *
     * @param Requests\createContactRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createContactAsync(Requests\createContactRequest $request) 
    {
        return $this->createContactAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createContactAsyncWithHttpInfo
     *
     * Create contact document
     *
     * @param Requests\createContactRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createContactAsyncWithHttpInfo(Requests\createContactRequest $request) 
    {
        $returnType = '';
        $request = $this->createContactRequest($request);

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

    /*
     * Create request for operation 'createContact'
     *
     * @param Requests\createContactRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createContactRequest(Requests\createContactRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling createContact');
        }
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createContact');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling createContact');
        }

        $resourcePath = '/email/Contact/{format}/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->format), $resourcePath);
        }
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

    
    
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

    /*
     * Operation createEmail
     *
     * Create an email document
     *
     * @param Requests\createEmailRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailDocumentResponse
     */
    public function createEmail(Requests\createEmailRequest $request)
    {
        try {
             list($response) = $this->createEmailWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->createEmailWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation createEmailWithHttpInfo
     *
     * Create an email document
     *
     * @param Requests\createEmailRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailDocumentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createEmailWithHttpInfo(Requests\createEmailRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDocumentResponse';
        $request = $this->createEmailRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailDocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation createEmailAsync
     *
     * Create an email document
     *
     * @param Requests\createEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createEmailAsync(Requests\createEmailRequest $request) 
    {
        return $this->createEmailAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createEmailAsyncWithHttpInfo
     *
     * Create an email document
     *
     * @param Requests\createEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createEmailAsyncWithHttpInfo(Requests\createEmailRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailDocumentResponse';
        $request = $this->createEmailRequest($request);

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

    /*
     * Create request for operation 'createEmail'
     *
     * @param Requests\createEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createEmailRequest(Requests\createEmailRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_name when calling createEmail');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling createEmail');
        }

        $resourcePath = '/email/{fileName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->file_name !== null) {
            $localName = lcfirst('fileName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->file_name), $resourcePath);
        }

    
    
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

    /*
     * Operation createEmailFolder
     *
     * Create new folder in email account
     *
     * @param Requests\createEmailFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createEmailFolder(Requests\createEmailFolderRequest $request)
    {
        try {
             $this->createEmailFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->createEmailFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation createEmailFolderWithHttpInfo
     *
     * Create new folder in email account
     *
     * @param Requests\createEmailFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createEmailFolderWithHttpInfo(Requests\createEmailFolderRequest $request)
    {
        $returnType = '';
        $request = $this->createEmailFolderRequest($request);

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

    /*
     * Operation createEmailFolderAsync
     *
     * Create new folder in email account
     *
     * @param Requests\createEmailFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createEmailFolderAsync(Requests\createEmailFolderRequest $request) 
    {
        return $this->createEmailFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createEmailFolderAsyncWithHttpInfo
     *
     * Create new folder in email account
     *
     * @param Requests\createEmailFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createEmailFolderAsyncWithHttpInfo(Requests\createEmailFolderRequest $request) 
    {
        $returnType = '';
        $request = $this->createEmailFolderRequest($request);

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

    /*
     * Create request for operation 'createEmailFolder'
     *
     * @param Requests\createEmailFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createEmailFolderRequest(Requests\createEmailFolderRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling createEmailFolder');
        }

        $resourcePath = '/email/client/CreateFolder';
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

    /*
     * Operation createFolder
     *
     * Create the folder
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createFolder(Requests\createFolderRequest $request)
    {
        try {
             $this->createFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->createFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation createFolderWithHttpInfo
     *
     * Create the folder
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFolderWithHttpInfo(Requests\createFolderRequest $request)
    {
        $returnType = '';
        $request = $this->createFolderRequest($request);

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

    /*
     * Operation createFolderAsync
     *
     * Create the folder
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsync(Requests\createFolderRequest $request) 
    {
        return $this->createFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createFolderAsyncWithHttpInfo
     *
     * Create the folder
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFolderAsyncWithHttpInfo(Requests\createFolderRequest $request) 
    {
        $returnType = '';
        $request = $this->createFolderRequest($request);

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

    /*
     * Create request for operation 'createFolder'
     *
     * @param Requests\createFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createFolderRequest(Requests\createFolderRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling createFolder');
        }

        $resourcePath = '/email/storage/folder/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
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

    /*
     * Operation createMapi
     *
     * Create new document
     *
     * @param Requests\createMapiRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createMapi(Requests\createMapiRequest $request)
    {
        try {
             $this->createMapiWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->createMapiWithHttpInfo($request);
        } 
    }

    /*
     * Operation createMapiWithHttpInfo
     *
     * Create new document
     *
     * @param Requests\createMapiRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createMapiWithHttpInfo(Requests\createMapiRequest $request)
    {
        $returnType = '';
        $request = $this->createMapiRequest($request);

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

    /*
     * Operation createMapiAsync
     *
     * Create new document
     *
     * @param Requests\createMapiRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createMapiAsync(Requests\createMapiRequest $request) 
    {
        return $this->createMapiAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation createMapiAsyncWithHttpInfo
     *
     * Create new document
     *
     * @param Requests\createMapiRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createMapiAsyncWithHttpInfo(Requests\createMapiRequest $request) 
    {
        $returnType = '';
        $request = $this->createMapiRequest($request);

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

    /*
     * Create request for operation 'createMapi'
     *
     * @param Requests\createMapiRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createMapiRequest(Requests\createMapiRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createMapi');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling createMapi');
        }

        $resourcePath = '/email/Mapi/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

    
    
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

    /*
     * Operation deleteCalendarProperty
     *
     * Deletes indexed property by index and name. To delete Reminder attachment, use path ReminderAttachment/{ReminderIndex}/{AttachmentIndex}
     *
     * @param Requests\deleteCalendarPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteCalendarProperty(Requests\deleteCalendarPropertyRequest $request)
    {
        try {
             $this->deleteCalendarPropertyWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteCalendarPropertyWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteCalendarPropertyWithHttpInfo
     *
     * Deletes indexed property by index and name. To delete Reminder attachment, use path ReminderAttachment/{ReminderIndex}/{AttachmentIndex}
     *
     * @param Requests\deleteCalendarPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCalendarPropertyWithHttpInfo(Requests\deleteCalendarPropertyRequest $request)
    {
        $returnType = '';
        $request = $this->deleteCalendarPropertyRequest($request);

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

    /*
     * Operation deleteCalendarPropertyAsync
     *
     * Deletes indexed property by index and name. To delete Reminder attachment, use path ReminderAttachment/{ReminderIndex}/{AttachmentIndex}
     *
     * @param Requests\deleteCalendarPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCalendarPropertyAsync(Requests\deleteCalendarPropertyRequest $request) 
    {
        return $this->deleteCalendarPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteCalendarPropertyAsyncWithHttpInfo
     *
     * Deletes indexed property by index and name. To delete Reminder attachment, use path ReminderAttachment/{ReminderIndex}/{AttachmentIndex}
     *
     * @param Requests\deleteCalendarPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCalendarPropertyAsyncWithHttpInfo(Requests\deleteCalendarPropertyRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteCalendarPropertyRequest($request);

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

    /*
     * Create request for operation 'deleteCalendarProperty'
     *
     * @param Requests\deleteCalendarPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteCalendarPropertyRequest(Requests\deleteCalendarPropertyRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteCalendarProperty');
        }
        // verify the required parameter 'member_name' is set
        if ($request->member_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $member_name when calling deleteCalendarProperty');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling deleteCalendarProperty');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling deleteCalendarProperty');
        }

        $resourcePath = '/email/Calendar/{name}/properties/{memberName}/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->member_name !== null) {
            $localName = lcfirst('memberName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->member_name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

    
    
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteContactProperty
     *
     * Delete property from indexed property list
     *
     * @param Requests\deleteContactPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteContactProperty(Requests\deleteContactPropertyRequest $request)
    {
        try {
             $this->deleteContactPropertyWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteContactPropertyWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteContactPropertyWithHttpInfo
     *
     * Delete property from indexed property list
     *
     * @param Requests\deleteContactPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteContactPropertyWithHttpInfo(Requests\deleteContactPropertyRequest $request)
    {
        $returnType = '';
        $request = $this->deleteContactPropertyRequest($request);

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

    /*
     * Operation deleteContactPropertyAsync
     *
     * Delete property from indexed property list
     *
     * @param Requests\deleteContactPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContactPropertyAsync(Requests\deleteContactPropertyRequest $request) 
    {
        return $this->deleteContactPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteContactPropertyAsyncWithHttpInfo
     *
     * Delete property from indexed property list
     *
     * @param Requests\deleteContactPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteContactPropertyAsyncWithHttpInfo(Requests\deleteContactPropertyRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteContactPropertyRequest($request);

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

    /*
     * Create request for operation 'deleteContactProperty'
     *
     * @param Requests\deleteContactPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteContactPropertyRequest(Requests\deleteContactPropertyRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling deleteContactProperty');
        }
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteContactProperty');
        }
        // verify the required parameter 'member_name' is set
        if ($request->member_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $member_name when calling deleteContactProperty');
        }
        // verify the required parameter 'index' is set
        if ($request->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling deleteContactProperty');
        }
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder when calling deleteContactProperty');
        }

        $resourcePath = '/email/Contact/{format}/{name}/properties/{memberName}/{index}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->format), $resourcePath);
        }
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->member_name !== null) {
            $localName = lcfirst('memberName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->member_name), $resourcePath);
        }
        // path params
        if ($request->index !== null) {
            $localName = lcfirst('index');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->index), $resourcePath);
        }

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // body params
        $_tempBody = null;
        if (isset($request->folder)) {
            if (is_string($request->folder)) {
                $_tempBody = "\"" . $request->folder . "\"";   
            } else {
                $_tempBody = $request->folder;
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteEmailFolder
     *
     * Delete a folder in email account
     *
     * @param Requests\deleteEmailFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteEmailFolder(Requests\deleteEmailFolderRequest $request)
    {
        try {
             $this->deleteEmailFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteEmailFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteEmailFolderWithHttpInfo
     *
     * Delete a folder in email account
     *
     * @param Requests\deleteEmailFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteEmailFolderWithHttpInfo(Requests\deleteEmailFolderRequest $request)
    {
        $returnType = '';
        $request = $this->deleteEmailFolderRequest($request);

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

    /*
     * Operation deleteEmailFolderAsync
     *
     * Delete a folder in email account
     *
     * @param Requests\deleteEmailFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteEmailFolderAsync(Requests\deleteEmailFolderRequest $request) 
    {
        return $this->deleteEmailFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteEmailFolderAsyncWithHttpInfo
     *
     * Delete a folder in email account
     *
     * @param Requests\deleteEmailFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteEmailFolderAsyncWithHttpInfo(Requests\deleteEmailFolderRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteEmailFolderRequest($request);

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

    /*
     * Create request for operation 'deleteEmailFolder'
     *
     * @param Requests\deleteEmailFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteEmailFolderRequest(Requests\deleteEmailFolderRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling deleteEmailFolder');
        }

        $resourcePath = '/email/client/DeleteFolder';
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteEmailMessage
     *
     * Delete message from email account by id
     *
     * @param Requests\deleteEmailMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteEmailMessage(Requests\deleteEmailMessageRequest $request)
    {
        try {
             $this->deleteEmailMessageWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteEmailMessageWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteEmailMessageWithHttpInfo
     *
     * Delete message from email account by id
     *
     * @param Requests\deleteEmailMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteEmailMessageWithHttpInfo(Requests\deleteEmailMessageRequest $request)
    {
        $returnType = '';
        $request = $this->deleteEmailMessageRequest($request);

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

    /*
     * Operation deleteEmailMessageAsync
     *
     * Delete message from email account by id
     *
     * @param Requests\deleteEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteEmailMessageAsync(Requests\deleteEmailMessageRequest $request) 
    {
        return $this->deleteEmailMessageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteEmailMessageAsyncWithHttpInfo
     *
     * Delete message from email account by id
     *
     * @param Requests\deleteEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteEmailMessageAsyncWithHttpInfo(Requests\deleteEmailMessageRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteEmailMessageRequest($request);

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

    /*
     * Create request for operation 'deleteEmailMessage'
     *
     * @param Requests\deleteEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteEmailMessageRequest(Requests\deleteEmailMessageRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling deleteEmailMessage');
        }

        $resourcePath = '/email/client/DeleteMessage';
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteFile
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFile(Requests\deleteFileRequest $request)
    {
        try {
             $this->deleteFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteFileWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFileWithHttpInfo
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFileWithHttpInfo(Requests\deleteFileRequest $request)
    {
        $returnType = '';
        $request = $this->deleteFileRequest($request);

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

    /*
     * Operation deleteFileAsync
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileAsync(Requests\deleteFileRequest $request) 
    {
        return $this->deleteFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFileAsyncWithHttpInfo
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileAsyncWithHttpInfo(Requests\deleteFileRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteFileRequest($request);

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

    /*
     * Create request for operation 'deleteFile'
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteFileRequest(Requests\deleteFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteFile');
        }

        $resourcePath = '/email/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->version_id !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->version_id) ? ($request->version_id ? 'true' : 'false') : $request->version_id;
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteFolder
     *
     * Delete folder
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFolder(Requests\deleteFolderRequest $request)
    {
        try {
             $this->deleteFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteFolderWithHttpInfo
     *
     * Delete folder
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFolderWithHttpInfo(Requests\deleteFolderRequest $request)
    {
        $returnType = '';
        $request = $this->deleteFolderRequest($request);

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

    /*
     * Operation deleteFolderAsync
     *
     * Delete folder
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsync(Requests\deleteFolderRequest $request) 
    {
        return $this->deleteFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFolderAsyncWithHttpInfo
     *
     * Delete folder
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFolderAsyncWithHttpInfo(Requests\deleteFolderRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteFolderRequest($request);

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

    /*
     * Create request for operation 'deleteFolder'
     *
     * @param Requests\deleteFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteFolderRequest(Requests\deleteFolderRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteFolder');
        }

        $resourcePath = '/email/storage/folder/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->recursive !== null) {
            $localName = lcfirst('recursive');
            $localValue = is_bool($request->recursive) ? ($request->recursive ? 'true' : 'false') : $request->recursive;
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteMapiAttachment
     *
     * Remove attachment from document
     *
     * @param Requests\deleteMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteMapiAttachment(Requests\deleteMapiAttachmentRequest $request)
    {
        try {
             $this->deleteMapiAttachmentWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteMapiAttachmentWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteMapiAttachmentWithHttpInfo
     *
     * Remove attachment from document
     *
     * @param Requests\deleteMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteMapiAttachmentWithHttpInfo(Requests\deleteMapiAttachmentRequest $request)
    {
        $returnType = '';
        $request = $this->deleteMapiAttachmentRequest($request);

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

    /*
     * Operation deleteMapiAttachmentAsync
     *
     * Remove attachment from document
     *
     * @param Requests\deleteMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMapiAttachmentAsync(Requests\deleteMapiAttachmentRequest $request) 
    {
        return $this->deleteMapiAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteMapiAttachmentAsyncWithHttpInfo
     *
     * Remove attachment from document
     *
     * @param Requests\deleteMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMapiAttachmentAsyncWithHttpInfo(Requests\deleteMapiAttachmentRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteMapiAttachmentRequest($request);

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

    /*
     * Create request for operation 'deleteMapiAttachment'
     *
     * @param Requests\deleteMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteMapiAttachmentRequest(Requests\deleteMapiAttachmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteMapiAttachment');
        }
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling deleteMapiAttachment');
        }
        // verify the required parameter 'storage' is set
        if ($request->storage === null) {
            throw new \InvalidArgumentException('Missing the required parameter $storage when calling deleteMapiAttachment');
        }

        $resourcePath = '/email/Mapi/{name}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
        }

    
    
        $resourcePath = $this->_parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // body params
        $_tempBody = null;
        if (isset($request->storage)) {
            if (is_string($request->storage)) {
                $_tempBody = "\"" . $request->storage . "\"";   
            } else {
                $_tempBody = $request->storage;
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteMapiProperties
     *
     * Delete document properties
     *
     * @param Requests\deleteMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteMapiProperties(Requests\deleteMapiPropertiesRequest $request)
    {
        try {
             $this->deleteMapiPropertiesWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->deleteMapiPropertiesWithHttpInfo($request);
        } 
    }

    /*
     * Operation deleteMapiPropertiesWithHttpInfo
     *
     * Delete document properties
     *
     * @param Requests\deleteMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteMapiPropertiesWithHttpInfo(Requests\deleteMapiPropertiesRequest $request)
    {
        $returnType = '';
        $request = $this->deleteMapiPropertiesRequest($request);

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

    /*
     * Operation deleteMapiPropertiesAsync
     *
     * Delete document properties
     *
     * @param Requests\deleteMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMapiPropertiesAsync(Requests\deleteMapiPropertiesRequest $request) 
    {
        return $this->deleteMapiPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteMapiPropertiesAsyncWithHttpInfo
     *
     * Delete document properties
     *
     * @param Requests\deleteMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMapiPropertiesAsyncWithHttpInfo(Requests\deleteMapiPropertiesRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteMapiPropertiesRequest($request);

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

    /*
     * Create request for operation 'deleteMapiProperties'
     *
     * @param Requests\deleteMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteMapiPropertiesRequest(Requests\deleteMapiPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling deleteMapiProperties');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling deleteMapiProperties');
        }

        $resourcePath = '/email/Mapi/{name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

    
    
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation downloadFile
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function downloadFile(Requests\downloadFileRequest $request)
    {
        try {
             list($response) = $this->downloadFileWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->downloadFileWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation downloadFileWithHttpInfo
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadFileWithHttpInfo(Requests\downloadFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->downloadFileRequest($request);

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

    /*
     * Operation downloadFileAsync
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync(Requests\downloadFileRequest $request) 
    {
        return $this->downloadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation downloadFileAsyncWithHttpInfo
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsyncWithHttpInfo(Requests\downloadFileRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->downloadFileRequest($request);

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

    /*
     * Create request for operation 'downloadFile'
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function downloadFileRequest(Requests\downloadFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling downloadFile');
        }

        $resourcePath = '/email/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->version_id !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->version_id) ? ($request->version_id ? 'true' : 'false') : $request->version_id;
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

    /*
     * Operation fetchEmailMessage
     *
     * Fetch message mime from email account
     *
     * @param Requests\fetchEmailMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\MimeResponse
     */
    public function fetchEmailMessage(Requests\fetchEmailMessageRequest $request)
    {
        try {
             list($response) = $this->fetchEmailMessageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->fetchEmailMessageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation fetchEmailMessageWithHttpInfo
     *
     * Fetch message mime from email account
     *
     * @param Requests\fetchEmailMessageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\MimeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchEmailMessageWithHttpInfo(Requests\fetchEmailMessageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MimeResponse';
        $request = $this->fetchEmailMessageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\MimeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation fetchEmailMessageAsync
     *
     * Fetch message mime from email account
     *
     * @param Requests\fetchEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchEmailMessageAsync(Requests\fetchEmailMessageRequest $request) 
    {
        return $this->fetchEmailMessageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation fetchEmailMessageAsyncWithHttpInfo
     *
     * Fetch message mime from email account
     *
     * @param Requests\fetchEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchEmailMessageAsyncWithHttpInfo(Requests\fetchEmailMessageRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\MimeResponse';
        $request = $this->fetchEmailMessageRequest($request);

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

    /*
     * Create request for operation 'fetchEmailMessage'
     *
     * @param Requests\fetchEmailMessageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchEmailMessageRequest(Requests\fetchEmailMessageRequest $request)
    {
        // verify the required parameter 'message_id' is set
        if ($request->message_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message_id when calling fetchEmailMessage');
        }
        // verify the required parameter 'first_account' is set
        if ($request->first_account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $first_account when calling fetchEmailMessage');
        }

        $resourcePath = '/email/client/Fetch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->message_id !== null) {
            $localName = lcfirst('messageId');
            $localValue = is_bool($request->message_id) ? ($request->message_id ? 'true' : 'false') : $request->message_id;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->first_account !== null) {
            $localName = lcfirst('firstAccount');
            $localValue = is_bool($request->first_account) ? ($request->first_account ? 'true' : 'false') : $request->first_account;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->second_account !== null) {
            $localName = lcfirst('secondAccount');
            $localValue = is_bool($request->second_account) ? ($request->second_account ? 'true' : 'false') : $request->second_account;
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
        // query params
        if ($request->storage_folder !== null) {
            $localName = lcfirst('storageFolder');
            $localValue = is_bool($request->storage_folder) ? ($request->storage_folder ? 'true' : 'false') : $request->storage_folder;
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

    /*
     * Operation getCalendar
     *
     * Get calendar file properties
     *
     * @param Requests\getCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\HierarchicalObject
     */
    public function getCalendar(Requests\getCalendarRequest $request)
    {
        try {
             list($response) = $this->getCalendarWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCalendarWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCalendarWithHttpInfo
     *
     * Get calendar file properties
     *
     * @param Requests\getCalendarRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\HierarchicalObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarWithHttpInfo(Requests\getCalendarRequest $request)
    {
        $returnType = '\Aspose\Email\Model\HierarchicalObject';
        $request = $this->getCalendarRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\HierarchicalObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCalendarAsync
     *
     * Get calendar file properties
     *
     * @param Requests\getCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarAsync(Requests\getCalendarRequest $request) 
    {
        return $this->getCalendarAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCalendarAsyncWithHttpInfo
     *
     * Get calendar file properties
     *
     * @param Requests\getCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarAsyncWithHttpInfo(Requests\getCalendarRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\HierarchicalObject';
        $request = $this->getCalendarRequest($request);

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

    /*
     * Create request for operation 'getCalendar'
     *
     * @param Requests\getCalendarRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCalendarRequest(Requests\getCalendarRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getCalendar');
        }

        $resourcePath = '/email/Calendar/{name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
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

    /*
     * Operation getCalendarAttachment
     *
     * Get iCalendar document attachment by name
     *
     * @param Requests\getCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getCalendarAttachment(Requests\getCalendarAttachmentRequest $request)
    {
        try {
             list($response) = $this->getCalendarAttachmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCalendarAttachmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCalendarAttachmentWithHttpInfo
     *
     * Get iCalendar document attachment by name
     *
     * @param Requests\getCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarAttachmentWithHttpInfo(Requests\getCalendarAttachmentRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getCalendarAttachmentRequest($request);

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

    /*
     * Operation getCalendarAttachmentAsync
     *
     * Get iCalendar document attachment by name
     *
     * @param Requests\getCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarAttachmentAsync(Requests\getCalendarAttachmentRequest $request) 
    {
        return $this->getCalendarAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCalendarAttachmentAsyncWithHttpInfo
     *
     * Get iCalendar document attachment by name
     *
     * @param Requests\getCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarAttachmentAsyncWithHttpInfo(Requests\getCalendarAttachmentRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->getCalendarAttachmentRequest($request);

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

    /*
     * Create request for operation 'getCalendarAttachment'
     *
     * @param Requests\getCalendarAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCalendarAttachmentRequest(Requests\getCalendarAttachmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getCalendarAttachment');
        }
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling getCalendarAttachment');
        }

        $resourcePath = '/email/Calendar/{name}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
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

    /*
     * Operation getCalendarList
     *
     * Get iCalendar files list in folder on storage
     *
     * @param Requests\getCalendarListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse
     */
    public function getCalendarList(Requests\getCalendarListRequest $request)
    {
        try {
             list($response) = $this->getCalendarListWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getCalendarListWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getCalendarListWithHttpInfo
     *
     * Get iCalendar files list in folder on storage
     *
     * @param Requests\getCalendarListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCalendarListWithHttpInfo(Requests\getCalendarListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse';
        $request = $this->getCalendarListRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getCalendarListAsync
     *
     * Get iCalendar files list in folder on storage
     *
     * @param Requests\getCalendarListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarListAsync(Requests\getCalendarListRequest $request) 
    {
        return $this->getCalendarListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getCalendarListAsyncWithHttpInfo
     *
     * Get iCalendar files list in folder on storage
     *
     * @param Requests\getCalendarListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCalendarListAsyncWithHttpInfo(Requests\getCalendarListRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse';
        $request = $this->getCalendarListRequest($request);

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

    /*
     * Create request for operation 'getCalendarList'
     *
     * @param Requests\getCalendarListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCalendarListRequest(Requests\getCalendarListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder when calling getCalendarList');
        }
        // verify the required parameter 'items_per_page' is set
        if ($request->items_per_page === null) {
            throw new \InvalidArgumentException('Missing the required parameter $items_per_page when calling getCalendarList');
        }
        // verify the required parameter 'page_number' is set
        if ($request->page_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $page_number when calling getCalendarList');
        }

        $resourcePath = '/email/Calendar';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

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
        if ($request->items_per_page !== null) {
            $localName = lcfirst('itemsPerPage');
            $localValue = is_bool($request->items_per_page) ? ($request->items_per_page ? 'true' : 'false') : $request->items_per_page;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->page_number !== null) {
            $localName = lcfirst('pageNumber');
            $localValue = is_bool($request->page_number) ? ($request->page_number ? 'true' : 'false') : $request->page_number;
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

    /*
     * Operation getContactAttachment
     *
     * Get attachment file by name
     *
     * @param Requests\getContactAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getContactAttachment(Requests\getContactAttachmentRequest $request)
    {
        try {
             list($response) = $this->getContactAttachmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getContactAttachmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getContactAttachmentWithHttpInfo
     *
     * Get attachment file by name
     *
     * @param Requests\getContactAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactAttachmentWithHttpInfo(Requests\getContactAttachmentRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getContactAttachmentRequest($request);

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

    /*
     * Operation getContactAttachmentAsync
     *
     * Get attachment file by name
     *
     * @param Requests\getContactAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactAttachmentAsync(Requests\getContactAttachmentRequest $request) 
    {
        return $this->getContactAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getContactAttachmentAsyncWithHttpInfo
     *
     * Get attachment file by name
     *
     * @param Requests\getContactAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactAttachmentAsyncWithHttpInfo(Requests\getContactAttachmentRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->getContactAttachmentRequest($request);

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

    /*
     * Create request for operation 'getContactAttachment'
     *
     * @param Requests\getContactAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactAttachmentRequest(Requests\getContactAttachmentRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getContactAttachment');
        }
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getContactAttachment');
        }
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling getContactAttachment');
        }

        $resourcePath = '/email/Contact/{format}/{name}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->format), $resourcePath);
        }
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
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

    /*
     * Operation getContactList
     *
     * Get contact list from storage folder
     *
     * @param Requests\getContactListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse
     */
    public function getContactList(Requests\getContactListRequest $request)
    {
        try {
             list($response) = $this->getContactListWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getContactListWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getContactListWithHttpInfo
     *
     * Get contact list from storage folder
     *
     * @param Requests\getContactListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactListWithHttpInfo(Requests\getContactListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse';
        $request = $this->getContactListRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getContactListAsync
     *
     * Get contact list from storage folder
     *
     * @param Requests\getContactListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactListAsync(Requests\getContactListRequest $request) 
    {
        return $this->getContactListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getContactListAsyncWithHttpInfo
     *
     * Get contact list from storage folder
     *
     * @param Requests\getContactListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactListAsyncWithHttpInfo(Requests\getContactListRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse';
        $request = $this->getContactListRequest($request);

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

    /*
     * Create request for operation 'getContactList'
     *
     * @param Requests\getContactListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactListRequest(Requests\getContactListRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getContactList');
        }

        $resourcePath = '/email/Contact/{format}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->format), $resourcePath);
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
        // query params
        if ($request->items_per_page !== null) {
            $localName = lcfirst('itemsPerPage');
            $localValue = is_bool($request->items_per_page) ? ($request->items_per_page ? 'true' : 'false') : $request->items_per_page;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->page_number !== null) {
            $localName = lcfirst('pageNumber');
            $localValue = is_bool($request->page_number) ? ($request->page_number ? 'true' : 'false') : $request->page_number;
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

    /*
     * Operation getContactProperties
     *
     * Get contact document properties
     *
     * @param Requests\getContactPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\HierarchicalObject
     */
    public function getContactProperties(Requests\getContactPropertiesRequest $request)
    {
        try {
             list($response) = $this->getContactPropertiesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getContactPropertiesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getContactPropertiesWithHttpInfo
     *
     * Get contact document properties
     *
     * @param Requests\getContactPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\HierarchicalObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactPropertiesWithHttpInfo(Requests\getContactPropertiesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\HierarchicalObject';
        $request = $this->getContactPropertiesRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\HierarchicalObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getContactPropertiesAsync
     *
     * Get contact document properties
     *
     * @param Requests\getContactPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactPropertiesAsync(Requests\getContactPropertiesRequest $request) 
    {
        return $this->getContactPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getContactPropertiesAsyncWithHttpInfo
     *
     * Get contact document properties
     *
     * @param Requests\getContactPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getContactPropertiesAsyncWithHttpInfo(Requests\getContactPropertiesRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\HierarchicalObject';
        $request = $this->getContactPropertiesRequest($request);

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

    /*
     * Create request for operation 'getContactProperties'
     *
     * @param Requests\getContactPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getContactPropertiesRequest(Requests\getContactPropertiesRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling getContactProperties');
        }
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getContactProperties');
        }

        $resourcePath = '/email/Contact/{format}/{name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->format), $resourcePath);
        }
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
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

    /*
     * Operation getDiscUsage
     *
     * Get disc usage
     *
     * @param Requests\getDiscUsageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\DiscUsage
     */
    public function getDiscUsage(Requests\getDiscUsageRequest $request)
    {
        try {
             list($response) = $this->getDiscUsageWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getDiscUsageWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getDiscUsageWithHttpInfo
     *
     * Get disc usage
     *
     * @param Requests\getDiscUsageRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\DiscUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDiscUsageWithHttpInfo(Requests\getDiscUsageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\DiscUsage';
        $request = $this->getDiscUsageRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\DiscUsage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getDiscUsageAsync
     *
     * Get disc usage
     *
     * @param Requests\getDiscUsageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDiscUsageAsync(Requests\getDiscUsageRequest $request) 
    {
        return $this->getDiscUsageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getDiscUsageAsyncWithHttpInfo
     *
     * Get disc usage
     *
     * @param Requests\getDiscUsageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDiscUsageAsyncWithHttpInfo(Requests\getDiscUsageRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\DiscUsage';
        $request = $this->getDiscUsageRequest($request);

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

    /*
     * Create request for operation 'getDiscUsage'
     *
     * @param Requests\getDiscUsageRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDiscUsageRequest(Requests\getDiscUsageRequest $request)
    {

        $resourcePath = '/email/storage/disc';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
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

    /*
     * Operation getEmail
     *
     * Get email document
     *
     * @param Requests\getEmailRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailDocument
     */
    public function getEmail(Requests\getEmailRequest $request)
    {
        try {
             list($response) = $this->getEmailWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getEmailWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getEmailWithHttpInfo
     *
     * Get email document
     *
     * @param Requests\getEmailRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailDocument, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEmailWithHttpInfo(Requests\getEmailRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDocument';
        $request = $this->getEmailRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailDocument', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getEmailAsync
     *
     * Get email document
     *
     * @param Requests\getEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEmailAsync(Requests\getEmailRequest $request) 
    {
        return $this->getEmailAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getEmailAsyncWithHttpInfo
     *
     * Get email document
     *
     * @param Requests\getEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEmailAsyncWithHttpInfo(Requests\getEmailRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailDocument';
        $request = $this->getEmailRequest($request);

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

    /*
     * Create request for operation 'getEmail'
     *
     * @param Requests\getEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEmailRequest(Requests\getEmailRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_name when calling getEmail');
        }

        $resourcePath = '/email/{fileName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->file_name !== null) {
            $localName = lcfirst('fileName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->file_name), $resourcePath);
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

    /*
     * Operation getEmailAttachment
     *
     * Get email attachment by name
     *
     * @param Requests\getEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getEmailAttachment(Requests\getEmailAttachmentRequest $request)
    {
        try {
             list($response) = $this->getEmailAttachmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getEmailAttachmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getEmailAttachmentWithHttpInfo
     *
     * Get email attachment by name
     *
     * @param Requests\getEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEmailAttachmentWithHttpInfo(Requests\getEmailAttachmentRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getEmailAttachmentRequest($request);

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

    /*
     * Operation getEmailAttachmentAsync
     *
     * Get email attachment by name
     *
     * @param Requests\getEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEmailAttachmentAsync(Requests\getEmailAttachmentRequest $request) 
    {
        return $this->getEmailAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getEmailAttachmentAsyncWithHttpInfo
     *
     * Get email attachment by name
     *
     * @param Requests\getEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEmailAttachmentAsyncWithHttpInfo(Requests\getEmailAttachmentRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->getEmailAttachmentRequest($request);

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

    /*
     * Create request for operation 'getEmailAttachment'
     *
     * @param Requests\getEmailAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEmailAttachmentRequest(Requests\getEmailAttachmentRequest $request)
    {
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling getEmailAttachment');
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_name when calling getEmailAttachment');
        }

        $resourcePath = '/email/{fileName}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
        }
        // path params
        if ($request->file_name !== null) {
            $localName = lcfirst('fileName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->file_name), $resourcePath);
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

    /*
     * Operation getEmailProperty
     *
     * Get an email document property by its name
     *
     * @param Requests\getEmailPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailPropertyResponse
     */
    public function getEmailProperty(Requests\getEmailPropertyRequest $request)
    {
        try {
             list($response) = $this->getEmailPropertyWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getEmailPropertyWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getEmailPropertyWithHttpInfo
     *
     * Get an email document property by its name
     *
     * @param Requests\getEmailPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEmailPropertyWithHttpInfo(Requests\getEmailPropertyRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailPropertyResponse';
        $request = $this->getEmailPropertyRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getEmailPropertyAsync
     *
     * Get an email document property by its name
     *
     * @param Requests\getEmailPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEmailPropertyAsync(Requests\getEmailPropertyRequest $request) 
    {
        return $this->getEmailPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getEmailPropertyAsyncWithHttpInfo
     *
     * Get an email document property by its name
     *
     * @param Requests\getEmailPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEmailPropertyAsyncWithHttpInfo(Requests\getEmailPropertyRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailPropertyResponse';
        $request = $this->getEmailPropertyRequest($request);

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

    /*
     * Create request for operation 'getEmailProperty'
     *
     * @param Requests\getEmailPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEmailPropertyRequest(Requests\getEmailPropertyRequest $request)
    {
        // verify the required parameter 'property_name' is set
        if ($request->property_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $property_name when calling getEmailProperty');
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_name when calling getEmailProperty');
        }

        $resourcePath = '/email/{fileName}/properties/{propertyName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->property_name !== null) {
            $localName = lcfirst('propertyName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->property_name), $resourcePath);
        }
        // path params
        if ($request->file_name !== null) {
            $localName = lcfirst('fileName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->file_name), $resourcePath);
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

    /*
     * Operation getFileVersions
     *
     * Get file versions
     *
     * @param Requests\getFileVersionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\FileVersions
     */
    public function getFileVersions(Requests\getFileVersionsRequest $request)
    {
        try {
             list($response) = $this->getFileVersionsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getFileVersionsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getFileVersionsWithHttpInfo
     *
     * Get file versions
     *
     * @param Requests\getFileVersionsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\FileVersions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFileVersionsWithHttpInfo(Requests\getFileVersionsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FileVersions';
        $request = $this->getFileVersionsRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\FileVersions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFileVersionsAsync
     *
     * Get file versions
     *
     * @param Requests\getFileVersionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileVersionsAsync(Requests\getFileVersionsRequest $request) 
    {
        return $this->getFileVersionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFileVersionsAsyncWithHttpInfo
     *
     * Get file versions
     *
     * @param Requests\getFileVersionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileVersionsAsyncWithHttpInfo(Requests\getFileVersionsRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\FileVersions';
        $request = $this->getFileVersionsRequest($request);

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

    /*
     * Create request for operation 'getFileVersions'
     *
     * @param Requests\getFileVersionsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFileVersionsRequest(Requests\getFileVersionsRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getFileVersions');
        }

        $resourcePath = '/email/storage/version/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
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

    /*
     * Operation getFilesList
     *
     * Get all files and folders within a folder
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\FilesList
     */
    public function getFilesList(Requests\getFilesListRequest $request)
    {
        try {
             list($response) = $this->getFilesListWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getFilesListWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getFilesListWithHttpInfo
     *
     * Get all files and folders within a folder
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\FilesList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFilesListWithHttpInfo(Requests\getFilesListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FilesList';
        $request = $this->getFilesListRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\FilesList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getFilesListAsync
     *
     * Get all files and folders within a folder
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesListAsync(Requests\getFilesListRequest $request) 
    {
        return $this->getFilesListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getFilesListAsyncWithHttpInfo
     *
     * Get all files and folders within a folder
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesListAsyncWithHttpInfo(Requests\getFilesListRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\FilesList';
        $request = $this->getFilesListRequest($request);

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

    /*
     * Create request for operation 'getFilesList'
     *
     * @param Requests\getFilesListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFilesListRequest(Requests\getFilesListRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling getFilesList');
        }

        $resourcePath = '/email/storage/folder/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
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

    /*
     * Operation getMapiAttachment
     *
     * Get document attachment as file stream
     *
     * @param Requests\getMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function getMapiAttachment(Requests\getMapiAttachmentRequest $request)
    {
        try {
             list($response) = $this->getMapiAttachmentWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getMapiAttachmentWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getMapiAttachmentWithHttpInfo
     *
     * Get document attachment as file stream
     *
     * @param Requests\getMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMapiAttachmentWithHttpInfo(Requests\getMapiAttachmentRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getMapiAttachmentRequest($request);

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

    /*
     * Operation getMapiAttachmentAsync
     *
     * Get document attachment as file stream
     *
     * @param Requests\getMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiAttachmentAsync(Requests\getMapiAttachmentRequest $request) 
    {
        return $this->getMapiAttachmentAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getMapiAttachmentAsyncWithHttpInfo
     *
     * Get document attachment as file stream
     *
     * @param Requests\getMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiAttachmentAsyncWithHttpInfo(Requests\getMapiAttachmentRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->getMapiAttachmentRequest($request);

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

    /*
     * Create request for operation 'getMapiAttachment'
     *
     * @param Requests\getMapiAttachmentRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMapiAttachmentRequest(Requests\getMapiAttachmentRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getMapiAttachment');
        }
        // verify the required parameter 'attachment' is set
        if ($request->attachment === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attachment when calling getMapiAttachment');
        }

        $resourcePath = '/email/Mapi/{name}/attachments/{attachment}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }
        // path params
        if ($request->attachment !== null) {
            $localName = lcfirst('attachment');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->attachment), $resourcePath);
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

    /*
     * Operation getMapiAttachments
     *
     * Get document attachment list
     *
     * @param Requests\getMapiAttachmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfString
     */
    public function getMapiAttachments(Requests\getMapiAttachmentsRequest $request)
    {
        try {
             list($response) = $this->getMapiAttachmentsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getMapiAttachmentsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getMapiAttachmentsWithHttpInfo
     *
     * Get document attachment list
     *
     * @param Requests\getMapiAttachmentsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfString, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMapiAttachmentsWithHttpInfo(Requests\getMapiAttachmentsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfString';
        $request = $this->getMapiAttachmentsRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfString', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getMapiAttachmentsAsync
     *
     * Get document attachment list
     *
     * @param Requests\getMapiAttachmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiAttachmentsAsync(Requests\getMapiAttachmentsRequest $request) 
    {
        return $this->getMapiAttachmentsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getMapiAttachmentsAsyncWithHttpInfo
     *
     * Get document attachment list
     *
     * @param Requests\getMapiAttachmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiAttachmentsAsyncWithHttpInfo(Requests\getMapiAttachmentsRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfString';
        $request = $this->getMapiAttachmentsRequest($request);

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

    /*
     * Create request for operation 'getMapiAttachments'
     *
     * @param Requests\getMapiAttachmentsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMapiAttachmentsRequest(Requests\getMapiAttachmentsRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getMapiAttachments');
        }

        $resourcePath = '/email/Mapi/{name}/attachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
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

    /*
     * Operation getMapiList
     *
     * Get document list from storage folder
     *
     * @param Requests\getMapiListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse
     */
    public function getMapiList(Requests\getMapiListRequest $request)
    {
        try {
             list($response) = $this->getMapiListWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getMapiListWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getMapiListWithHttpInfo
     *
     * Get document list from storage folder
     *
     * @param Requests\getMapiListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMapiListWithHttpInfo(Requests\getMapiListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse';
        $request = $this->getMapiListRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getMapiListAsync
     *
     * Get document list from storage folder
     *
     * @param Requests\getMapiListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiListAsync(Requests\getMapiListRequest $request) 
    {
        return $this->getMapiListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getMapiListAsyncWithHttpInfo
     *
     * Get document list from storage folder
     *
     * @param Requests\getMapiListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiListAsyncWithHttpInfo(Requests\getMapiListRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse';
        $request = $this->getMapiListRequest($request);

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

    /*
     * Create request for operation 'getMapiList'
     *
     * @param Requests\getMapiListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMapiListRequest(Requests\getMapiListRequest $request)
    {

        $resourcePath = '/email/Mapi';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

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
        // query params
        if ($request->items_per_page !== null) {
            $localName = lcfirst('itemsPerPage');
            $localValue = is_bool($request->items_per_page) ? ($request->items_per_page ? 'true' : 'false') : $request->items_per_page;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->page_number !== null) {
            $localName = lcfirst('pageNumber');
            $localValue = is_bool($request->page_number) ? ($request->page_number ? 'true' : 'false') : $request->page_number;
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

    /*
     * Operation getMapiProperties
     *
     * Get document properties
     *
     * @param Requests\getMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\HierarchicalObjectResponse
     */
    public function getMapiProperties(Requests\getMapiPropertiesRequest $request)
    {
        try {
             list($response) = $this->getMapiPropertiesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->getMapiPropertiesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation getMapiPropertiesWithHttpInfo
     *
     * Get document properties
     *
     * @param Requests\getMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\HierarchicalObjectResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMapiPropertiesWithHttpInfo(Requests\getMapiPropertiesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\HierarchicalObjectResponse';
        $request = $this->getMapiPropertiesRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\HierarchicalObjectResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation getMapiPropertiesAsync
     *
     * Get document properties
     *
     * @param Requests\getMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiPropertiesAsync(Requests\getMapiPropertiesRequest $request) 
    {
        return $this->getMapiPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation getMapiPropertiesAsyncWithHttpInfo
     *
     * Get document properties
     *
     * @param Requests\getMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMapiPropertiesAsyncWithHttpInfo(Requests\getMapiPropertiesRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\HierarchicalObjectResponse';
        $request = $this->getMapiPropertiesRequest($request);

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

    /*
     * Create request for operation 'getMapiProperties'
     *
     * @param Requests\getMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMapiPropertiesRequest(Requests\getMapiPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getMapiProperties');
        }

        $resourcePath = '/email/Mapi/{name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
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

    /*
     * Operation listEmailFolders
     *
     * Get folders list in email account
     *
     * @param Requests\listEmailFoldersRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfMailServerFolder
     */
    public function listEmailFolders(Requests\listEmailFoldersRequest $request)
    {
        try {
             list($response) = $this->listEmailFoldersWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->listEmailFoldersWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation listEmailFoldersWithHttpInfo
     *
     * Get folders list in email account
     *
     * @param Requests\listEmailFoldersRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfMailServerFolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function listEmailFoldersWithHttpInfo(Requests\listEmailFoldersRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfMailServerFolder';
        $request = $this->listEmailFoldersRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfMailServerFolder', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation listEmailFoldersAsync
     *
     * Get folders list in email account
     *
     * @param Requests\listEmailFoldersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEmailFoldersAsync(Requests\listEmailFoldersRequest $request) 
    {
        return $this->listEmailFoldersAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation listEmailFoldersAsyncWithHttpInfo
     *
     * Get folders list in email account
     *
     * @param Requests\listEmailFoldersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEmailFoldersAsyncWithHttpInfo(Requests\listEmailFoldersRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfMailServerFolder';
        $request = $this->listEmailFoldersRequest($request);

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

    /*
     * Create request for operation 'listEmailFolders'
     *
     * @param Requests\listEmailFoldersRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listEmailFoldersRequest(Requests\listEmailFoldersRequest $request)
    {
        // verify the required parameter 'first_account' is set
        if ($request->first_account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $first_account when calling listEmailFolders');
        }

        $resourcePath = '/email/client/ListFolders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->first_account !== null) {
            $localName = lcfirst('firstAccount');
            $localValue = is_bool($request->first_account) ? ($request->first_account ? 'true' : 'false') : $request->first_account;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->second_account !== null) {
            $localName = lcfirst('secondAccount');
            $localValue = is_bool($request->second_account) ? ($request->second_account ? 'true' : 'false') : $request->second_account;
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
        // query params
        if ($request->storage_folder !== null) {
            $localName = lcfirst('storageFolder');
            $localValue = is_bool($request->storage_folder) ? ($request->storage_folder ? 'true' : 'false') : $request->storage_folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->parent_folder !== null) {
            $localName = lcfirst('parentFolder');
            $localValue = is_bool($request->parent_folder) ? ($request->parent_folder ? 'true' : 'false') : $request->parent_folder;
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

    /*
     * Operation listEmailMessages
     *
     * Get messages from folder, filtered by query
     *
     * @param Requests\listEmailMessagesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ListResponseOfString
     */
    public function listEmailMessages(Requests\listEmailMessagesRequest $request)
    {
        try {
             list($response) = $this->listEmailMessagesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->listEmailMessagesWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation listEmailMessagesWithHttpInfo
     *
     * Get messages from folder, filtered by query
     *
     * @param Requests\listEmailMessagesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ListResponseOfString, HTTP status code, HTTP response headers (array of strings)
     */
    public function listEmailMessagesWithHttpInfo(Requests\listEmailMessagesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfString';
        $request = $this->listEmailMessagesRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ListResponseOfString', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation listEmailMessagesAsync
     *
     * Get messages from folder, filtered by query
     *
     * @param Requests\listEmailMessagesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEmailMessagesAsync(Requests\listEmailMessagesRequest $request) 
    {
        return $this->listEmailMessagesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation listEmailMessagesAsyncWithHttpInfo
     *
     * Get messages from folder, filtered by query
     *
     * @param Requests\listEmailMessagesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEmailMessagesAsyncWithHttpInfo(Requests\listEmailMessagesRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ListResponseOfString';
        $request = $this->listEmailMessagesRequest($request);

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

    /*
     * Create request for operation 'listEmailMessages'
     *
     * @param Requests\listEmailMessagesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listEmailMessagesRequest(Requests\listEmailMessagesRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder when calling listEmailMessages');
        }
        // verify the required parameter 'query_string' is set
        if ($request->query_string === null) {
            throw new \InvalidArgumentException('Missing the required parameter $query_string when calling listEmailMessages');
        }
        // verify the required parameter 'first_account' is set
        if ($request->first_account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $first_account when calling listEmailMessages');
        }

        $resourcePath = '/email/client/ListMessages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

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
        if ($request->query_string !== null) {
            $localName = lcfirst('queryString');
            $localValue = is_bool($request->query_string) ? ($request->query_string ? 'true' : 'false') : $request->query_string;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->first_account !== null) {
            $localName = lcfirst('firstAccount');
            $localValue = is_bool($request->first_account) ? ($request->first_account ? 'true' : 'false') : $request->first_account;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->second_account !== null) {
            $localName = lcfirst('secondAccount');
            $localValue = is_bool($request->second_account) ? ($request->second_account ? 'true' : 'false') : $request->second_account;
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
        // query params
        if ($request->storage_folder !== null) {
            $localName = lcfirst('storageFolder');
            $localValue = is_bool($request->storage_folder) ? ($request->storage_folder ? 'true' : 'false') : $request->storage_folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->recursive !== null) {
            $localName = lcfirst('recursive');
            $localValue = is_bool($request->recursive) ? ($request->recursive ? 'true' : 'false') : $request->recursive;
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

    /*
     * Operation moveFile
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFile(Requests\moveFileRequest $request)
    {
        try {
             $this->moveFileWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->moveFileWithHttpInfo($request);
        } 
    }

    /*
     * Operation moveFileWithHttpInfo
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveFileWithHttpInfo(Requests\moveFileRequest $request)
    {
        $returnType = '';
        $request = $this->moveFileRequest($request);

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

    /*
     * Operation moveFileAsync
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFileAsync(Requests\moveFileRequest $request) 
    {
        return $this->moveFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation moveFileAsyncWithHttpInfo
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFileAsyncWithHttpInfo(Requests\moveFileRequest $request) 
    {
        $returnType = '';
        $request = $this->moveFileRequest($request);

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

    /*
     * Create request for operation 'moveFile'
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function moveFileRequest(Requests\moveFileRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling moveFile');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling moveFile');
        }

        $resourcePath = '/email/storage/file/move/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }

        // query params
        if ($request->dest_path !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($request->dest_path) ? ($request->dest_path ? 'true' : 'false') : $request->dest_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->src_storage_name !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($request->src_storage_name) ? ($request->src_storage_name ? 'true' : 'false') : $request->src_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->dest_storage_name !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($request->dest_storage_name) ? ($request->dest_storage_name ? 'true' : 'false') : $request->dest_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->version_id !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->version_id) ? ($request->version_id ? 'true' : 'false') : $request->version_id;
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

    /*
     * Operation moveFolder
     *
     * Move folder
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFolder(Requests\moveFolderRequest $request)
    {
        try {
             $this->moveFolderWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->moveFolderWithHttpInfo($request);
        } 
    }

    /*
     * Operation moveFolderWithHttpInfo
     *
     * Move folder
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveFolderWithHttpInfo(Requests\moveFolderRequest $request)
    {
        $returnType = '';
        $request = $this->moveFolderRequest($request);

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

    /*
     * Operation moveFolderAsync
     *
     * Move folder
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFolderAsync(Requests\moveFolderRequest $request) 
    {
        return $this->moveFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation moveFolderAsyncWithHttpInfo
     *
     * Move folder
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFolderAsyncWithHttpInfo(Requests\moveFolderRequest $request) 
    {
        $returnType = '';
        $request = $this->moveFolderRequest($request);

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

    /*
     * Create request for operation 'moveFolder'
     *
     * @param Requests\moveFolderRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function moveFolderRequest(Requests\moveFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling moveFolder');
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling moveFolder');
        }

        $resourcePath = '/email/storage/folder/move/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }

        // query params
        if ($request->dest_path !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($request->dest_path) ? ($request->dest_path ? 'true' : 'false') : $request->dest_path;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->src_storage_name !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($request->src_storage_name) ? ($request->src_storage_name ? 'true' : 'false') : $request->src_storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->dest_storage_name !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($request->dest_storage_name) ? ($request->dest_storage_name ? 'true' : 'false') : $request->dest_storage_name;
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

    /*
     * Operation objectExists
     *
     * Check if file or folder exists
     *
     * @param Requests\objectExistsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\ObjectExist
     */
    public function objectExists(Requests\objectExistsRequest $request)
    {
        try {
             list($response) = $this->objectExistsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->objectExistsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation objectExistsWithHttpInfo
     *
     * Check if file or folder exists
     *
     * @param Requests\objectExistsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\ObjectExist, HTTP status code, HTTP response headers (array of strings)
     */
    public function objectExistsWithHttpInfo(Requests\objectExistsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ObjectExist';
        $request = $this->objectExistsRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\ObjectExist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation objectExistsAsync
     *
     * Check if file or folder exists
     *
     * @param Requests\objectExistsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectExistsAsync(Requests\objectExistsRequest $request) 
    {
        return $this->objectExistsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation objectExistsAsyncWithHttpInfo
     *
     * Check if file or folder exists
     *
     * @param Requests\objectExistsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function objectExistsAsyncWithHttpInfo(Requests\objectExistsRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\ObjectExist';
        $request = $this->objectExistsRequest($request);

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

    /*
     * Create request for operation 'objectExists'
     *
     * @param Requests\objectExistsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function objectExistsRequest(Requests\objectExistsRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling objectExists');
        }

        $resourcePath = '/email/storage/exist/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->version_id !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->version_id) ? ($request->version_id ? 'true' : 'false') : $request->version_id;
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

    /*
     * Operation saveMailAccount
     *
     * Create email account file (*.account) with login/password authentication
     *
     * @param Requests\saveMailAccountRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function saveMailAccount(Requests\saveMailAccountRequest $request)
    {
        try {
             $this->saveMailAccountWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->saveMailAccountWithHttpInfo($request);
        } 
    }

    /*
     * Operation saveMailAccountWithHttpInfo
     *
     * Create email account file (*.account) with login/password authentication
     *
     * @param Requests\saveMailAccountRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveMailAccountWithHttpInfo(Requests\saveMailAccountRequest $request)
    {
        $returnType = '';
        $request = $this->saveMailAccountRequest($request);

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

    /*
     * Operation saveMailAccountAsync
     *
     * Create email account file (*.account) with login/password authentication
     *
     * @param Requests\saveMailAccountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function saveMailAccountAsync(Requests\saveMailAccountRequest $request) 
    {
        return $this->saveMailAccountAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation saveMailAccountAsyncWithHttpInfo
     *
     * Create email account file (*.account) with login/password authentication
     *
     * @param Requests\saveMailAccountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function saveMailAccountAsyncWithHttpInfo(Requests\saveMailAccountRequest $request) 
    {
        $returnType = '';
        $request = $this->saveMailAccountRequest($request);

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

    /*
     * Create request for operation 'saveMailAccount'
     *
     * @param Requests\saveMailAccountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function saveMailAccountRequest(Requests\saveMailAccountRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling saveMailAccount');
        }

        $resourcePath = '/email/client/SaveMailAccount';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation saveMailOAuthAccount
     *
     * Create email account file (*.account) with OAuth
     *
     * @param Requests\saveMailOAuthAccountRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function saveMailOAuthAccount(Requests\saveMailOAuthAccountRequest $request)
    {
        try {
             $this->saveMailOAuthAccountWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->saveMailOAuthAccountWithHttpInfo($request);
        } 
    }

    /*
     * Operation saveMailOAuthAccountWithHttpInfo
     *
     * Create email account file (*.account) with OAuth
     *
     * @param Requests\saveMailOAuthAccountRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveMailOAuthAccountWithHttpInfo(Requests\saveMailOAuthAccountRequest $request)
    {
        $returnType = '';
        $request = $this->saveMailOAuthAccountRequest($request);

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

    /*
     * Operation saveMailOAuthAccountAsync
     *
     * Create email account file (*.account) with OAuth
     *
     * @param Requests\saveMailOAuthAccountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function saveMailOAuthAccountAsync(Requests\saveMailOAuthAccountRequest $request) 
    {
        return $this->saveMailOAuthAccountAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation saveMailOAuthAccountAsyncWithHttpInfo
     *
     * Create email account file (*.account) with OAuth
     *
     * @param Requests\saveMailOAuthAccountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function saveMailOAuthAccountAsyncWithHttpInfo(Requests\saveMailOAuthAccountRequest $request) 
    {
        $returnType = '';
        $request = $this->saveMailOAuthAccountRequest($request);

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

    /*
     * Create request for operation 'saveMailOAuthAccount'
     *
     * @param Requests\saveMailOAuthAccountRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function saveMailOAuthAccountRequest(Requests\saveMailOAuthAccountRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling saveMailOAuthAccount');
        }

        $resourcePath = '/email/client/SaveMailOAuthAccount';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation sendEmail
     *
     * Send an email from *.eml file located on storage
     *
     * @param Requests\sendEmailRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendEmail(Requests\sendEmailRequest $request)
    {
        try {
             $this->sendEmailWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->sendEmailWithHttpInfo($request);
        } 
    }

    /*
     * Operation sendEmailWithHttpInfo
     *
     * Send an email from *.eml file located on storage
     *
     * @param Requests\sendEmailRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendEmailWithHttpInfo(Requests\sendEmailRequest $request)
    {
        $returnType = '';
        $request = $this->sendEmailRequest($request);

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

    /*
     * Operation sendEmailAsync
     *
     * Send an email from *.eml file located on storage
     *
     * @param Requests\sendEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendEmailAsync(Requests\sendEmailRequest $request) 
    {
        return $this->sendEmailAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation sendEmailAsyncWithHttpInfo
     *
     * Send an email from *.eml file located on storage
     *
     * @param Requests\sendEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendEmailAsyncWithHttpInfo(Requests\sendEmailRequest $request) 
    {
        $returnType = '';
        $request = $this->sendEmailRequest($request);

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

    /*
     * Create request for operation 'sendEmail'
     *
     * @param Requests\sendEmailRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendEmailRequest(Requests\sendEmailRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling sendEmail');
        }

        $resourcePath = '/email/client/Send';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation sendEmailMime
     *
     * Send an email specified by MIME in request
     *
     * @param Requests\sendEmailMimeRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function sendEmailMime(Requests\sendEmailMimeRequest $request)
    {
        try {
             $this->sendEmailMimeWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->sendEmailMimeWithHttpInfo($request);
        } 
    }

    /*
     * Operation sendEmailMimeWithHttpInfo
     *
     * Send an email specified by MIME in request
     *
     * @param Requests\sendEmailMimeRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendEmailMimeWithHttpInfo(Requests\sendEmailMimeRequest $request)
    {
        $returnType = '';
        $request = $this->sendEmailMimeRequest($request);

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

    /*
     * Operation sendEmailMimeAsync
     *
     * Send an email specified by MIME in request
     *
     * @param Requests\sendEmailMimeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendEmailMimeAsync(Requests\sendEmailMimeRequest $request) 
    {
        return $this->sendEmailMimeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation sendEmailMimeAsyncWithHttpInfo
     *
     * Send an email specified by MIME in request
     *
     * @param Requests\sendEmailMimeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendEmailMimeAsyncWithHttpInfo(Requests\sendEmailMimeRequest $request) 
    {
        $returnType = '';
        $request = $this->sendEmailMimeRequest($request);

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

    /*
     * Create request for operation 'sendEmailMime'
     *
     * @param Requests\sendEmailMimeRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendEmailMimeRequest(Requests\sendEmailMimeRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling sendEmailMime');
        }

        $resourcePath = '/email/client/SendMime';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation setEmailProperty
     *
     * Set email document property value
     *
     * @param Requests\setEmailPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailPropertyResponse
     */
    public function setEmailProperty(Requests\setEmailPropertyRequest $request)
    {
        try {
             list($response) = $this->setEmailPropertyWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->setEmailPropertyWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation setEmailPropertyWithHttpInfo
     *
     * Set email document property value
     *
     * @param Requests\setEmailPropertyRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailPropertyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setEmailPropertyWithHttpInfo(Requests\setEmailPropertyRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailPropertyResponse';
        $request = $this->setEmailPropertyRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailPropertyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation setEmailPropertyAsync
     *
     * Set email document property value
     *
     * @param Requests\setEmailPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setEmailPropertyAsync(Requests\setEmailPropertyRequest $request) 
    {
        return $this->setEmailPropertyAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation setEmailPropertyAsyncWithHttpInfo
     *
     * Set email document property value
     *
     * @param Requests\setEmailPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setEmailPropertyAsyncWithHttpInfo(Requests\setEmailPropertyRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailPropertyResponse';
        $request = $this->setEmailPropertyRequest($request);

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

    /*
     * Create request for operation 'setEmailProperty'
     *
     * @param Requests\setEmailPropertyRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setEmailPropertyRequest(Requests\setEmailPropertyRequest $request)
    {
        // verify the required parameter 'property_name' is set
        if ($request->property_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $property_name when calling setEmailProperty');
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_name when calling setEmailProperty');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling setEmailProperty');
        }

        $resourcePath = '/email/{fileName}/properties/{propertyName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->property_name !== null) {
            $localName = lcfirst('propertyName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->property_name), $resourcePath);
        }
        // path params
        if ($request->file_name !== null) {
            $localName = lcfirst('fileName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->file_name), $resourcePath);
        }

    
    
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

    /*
     * Operation setEmailReadFlag
     *
     * Sets \"Message is read\" flag
     *
     * @param Requests\setEmailReadFlagRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function setEmailReadFlag(Requests\setEmailReadFlagRequest $request)
    {
        try {
             $this->setEmailReadFlagWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->setEmailReadFlagWithHttpInfo($request);
        } 
    }

    /*
     * Operation setEmailReadFlagWithHttpInfo
     *
     * Sets \"Message is read\" flag
     *
     * @param Requests\setEmailReadFlagRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setEmailReadFlagWithHttpInfo(Requests\setEmailReadFlagRequest $request)
    {
        $returnType = '';
        $request = $this->setEmailReadFlagRequest($request);

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

    /*
     * Operation setEmailReadFlagAsync
     *
     * Sets \"Message is read\" flag
     *
     * @param Requests\setEmailReadFlagRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setEmailReadFlagAsync(Requests\setEmailReadFlagRequest $request) 
    {
        return $this->setEmailReadFlagAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation setEmailReadFlagAsyncWithHttpInfo
     *
     * Sets \"Message is read\" flag
     *
     * @param Requests\setEmailReadFlagRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setEmailReadFlagAsyncWithHttpInfo(Requests\setEmailReadFlagRequest $request) 
    {
        $returnType = '';
        $request = $this->setEmailReadFlagRequest($request);

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

    /*
     * Create request for operation 'setEmailReadFlag'
     *
     * @param Requests\setEmailReadFlagRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setEmailReadFlagRequest(Requests\setEmailReadFlagRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling setEmailReadFlag');
        }

        $resourcePath = '/email/client/SetReadFlag';
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
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation storageExists
     *
     * Check if storage exists
     *
     * @param Requests\storageExistsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\StorageExist
     */
    public function storageExists(Requests\storageExistsRequest $request)
    {
        try {
             list($response) = $this->storageExistsWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->storageExistsWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation storageExistsWithHttpInfo
     *
     * Check if storage exists
     *
     * @param Requests\storageExistsRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\StorageExist, HTTP status code, HTTP response headers (array of strings)
     */
    public function storageExistsWithHttpInfo(Requests\storageExistsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\StorageExist';
        $request = $this->storageExistsRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\StorageExist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation storageExistsAsync
     *
     * Check if storage exists
     *
     * @param Requests\storageExistsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storageExistsAsync(Requests\storageExistsRequest $request) 
    {
        return $this->storageExistsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation storageExistsAsyncWithHttpInfo
     *
     * Check if storage exists
     *
     * @param Requests\storageExistsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function storageExistsAsyncWithHttpInfo(Requests\storageExistsRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\StorageExist';
        $request = $this->storageExistsRequest($request);

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

    /*
     * Create request for operation 'storageExists'
     *
     * @param Requests\storageExistsRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function storageExistsRequest(Requests\storageExistsRequest $request)
    {
        // verify the required parameter 'storage_name' is set
        if ($request->storage_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $storage_name when calling storageExists');
        }

        $resourcePath = '/email/storage/{storageName}/exist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->storage_name), $resourcePath);
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

    /*
     * Operation updateCalendarProperties
     *
     * Update calendar file properties
     *
     * @param Requests\updateCalendarPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateCalendarProperties(Requests\updateCalendarPropertiesRequest $request)
    {
        try {
             $this->updateCalendarPropertiesWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->updateCalendarPropertiesWithHttpInfo($request);
        } 
    }

    /*
     * Operation updateCalendarPropertiesWithHttpInfo
     *
     * Update calendar file properties
     *
     * @param Requests\updateCalendarPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCalendarPropertiesWithHttpInfo(Requests\updateCalendarPropertiesRequest $request)
    {
        $returnType = '';
        $request = $this->updateCalendarPropertiesRequest($request);

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

    /*
     * Operation updateCalendarPropertiesAsync
     *
     * Update calendar file properties
     *
     * @param Requests\updateCalendarPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCalendarPropertiesAsync(Requests\updateCalendarPropertiesRequest $request) 
    {
        return $this->updateCalendarPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateCalendarPropertiesAsyncWithHttpInfo
     *
     * Update calendar file properties
     *
     * @param Requests\updateCalendarPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCalendarPropertiesAsyncWithHttpInfo(Requests\updateCalendarPropertiesRequest $request) 
    {
        $returnType = '';
        $request = $this->updateCalendarPropertiesRequest($request);

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

    /*
     * Create request for operation 'updateCalendarProperties'
     *
     * @param Requests\updateCalendarPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateCalendarPropertiesRequest(Requests\updateCalendarPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling updateCalendarProperties');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling updateCalendarProperties');
        }

        $resourcePath = '/email/Calendar/{name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

    
    
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

    /*
     * Operation updateContactProperties
     *
     * Update contact document properties
     *
     * @param Requests\updateContactPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateContactProperties(Requests\updateContactPropertiesRequest $request)
    {
        try {
             $this->updateContactPropertiesWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->updateContactPropertiesWithHttpInfo($request);
        } 
    }

    /*
     * Operation updateContactPropertiesWithHttpInfo
     *
     * Update contact document properties
     *
     * @param Requests\updateContactPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContactPropertiesWithHttpInfo(Requests\updateContactPropertiesRequest $request)
    {
        $returnType = '';
        $request = $this->updateContactPropertiesRequest($request);

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

    /*
     * Operation updateContactPropertiesAsync
     *
     * Update contact document properties
     *
     * @param Requests\updateContactPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContactPropertiesAsync(Requests\updateContactPropertiesRequest $request) 
    {
        return $this->updateContactPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateContactPropertiesAsyncWithHttpInfo
     *
     * Update contact document properties
     *
     * @param Requests\updateContactPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContactPropertiesAsyncWithHttpInfo(Requests\updateContactPropertiesRequest $request) 
    {
        $returnType = '';
        $request = $this->updateContactPropertiesRequest($request);

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

    /*
     * Create request for operation 'updateContactProperties'
     *
     * @param Requests\updateContactPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateContactPropertiesRequest(Requests\updateContactPropertiesRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling updateContactProperties');
        }
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling updateContactProperties');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling updateContactProperties');
        }

        $resourcePath = '/email/Contact/{format}/{name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->format !== null) {
            $localName = lcfirst('format');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->format), $resourcePath);
        }
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

    
    
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

    /*
     * Operation updateMapiProperties
     *
     * Update document properties
     *
     * @param Requests\updateMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateMapiProperties(Requests\updateMapiPropertiesRequest $request)
    {
        try {
             $this->updateMapiPropertiesWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->updateMapiPropertiesWithHttpInfo($request);
        } 
    }

    /*
     * Operation updateMapiPropertiesWithHttpInfo
     *
     * Update document properties
     *
     * @param Requests\updateMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateMapiPropertiesWithHttpInfo(Requests\updateMapiPropertiesRequest $request)
    {
        $returnType = '';
        $request = $this->updateMapiPropertiesRequest($request);

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

    /*
     * Operation updateMapiPropertiesAsync
     *
     * Update document properties
     *
     * @param Requests\updateMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMapiPropertiesAsync(Requests\updateMapiPropertiesRequest $request) 
    {
        return $this->updateMapiPropertiesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation updateMapiPropertiesAsyncWithHttpInfo
     *
     * Update document properties
     *
     * @param Requests\updateMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateMapiPropertiesAsyncWithHttpInfo(Requests\updateMapiPropertiesRequest $request) 
    {
        $returnType = '';
        $request = $this->updateMapiPropertiesRequest($request);

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

    /*
     * Create request for operation 'updateMapiProperties'
     *
     * @param Requests\updateMapiPropertiesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateMapiPropertiesRequest(Requests\updateMapiPropertiesRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling updateMapiProperties');
        }
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling updateMapiProperties');
        }

        $resourcePath = '/email/Mapi/{name}/properties';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->name !== null) {
            $localName = lcfirst('name');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->name), $resourcePath);
        }

    
    
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

    /*
     * Operation uploadFile
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\FilesUploadResult
     */
    public function uploadFile(Requests\uploadFileRequest $request)
    {
        try {
             list($response) = $this->uploadFileWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->uploadFileWithHttpInfo($request);
             return $response;
        } 
    }

    /*
     * Operation uploadFileWithHttpInfo
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\FilesUploadResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadFileWithHttpInfo(Requests\uploadFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FilesUploadResult';
        $request = $this->uploadFileRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\FilesUploadResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation uploadFileAsync
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync(Requests\uploadFileRequest $request) 
    {
        return $this->uploadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation uploadFileAsyncWithHttpInfo
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsyncWithHttpInfo(Requests\uploadFileRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\FilesUploadResult';
        $request = $this->uploadFileRequest($request);

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

    /*
     * Create request for operation 'uploadFile'
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uploadFileRequest(Requests\uploadFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling uploadFile');
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling uploadFile');
        }

        $resourcePath = '/email/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storage_name) ? ($request->storage_name ? 'true' : 'false') : $request->storage_name;
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

    /*
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
    
    /*
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
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
  
    /*
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        $requestUrl = $this->config->getHost() . "/connect/token";
        $headers = [ 'Content-Type' => 'application/x-www-form-urlencoded' ];
        $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
        $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
        $result = json_decode($response->getBody()->getContents(), true);
        $this->config->setAccessToken($result["access_token"]);
    }
}
?>
