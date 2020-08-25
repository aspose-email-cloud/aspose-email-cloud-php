<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientThreadApi.php">
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
 * ClientThreadApi Aspose.Email for Cloud API.
 */
class ClientThreadApi
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
     * Operation clientThreadDelete
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Requests\ClientThreadDeleteRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function clientThreadDelete(Requests\ClientThreadDeleteRequest $request)
    {
        try {
             $this->clientThreadDeleteWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->clientThreadDeleteWithHttpInfo($request);
        } 
    }

    /**
     * Operation clientThreadDeleteWithHttpInfo
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Requests\ClientThreadDeleteRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadDeleteWithHttpInfo(Requests\ClientThreadDeleteRequest $request)
    {
        $returnType = '';
        $request = $this->clientThreadDeleteRequest($request);

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
     * Operation clientThreadDeleteAsync
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Requests\ClientThreadDeleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadDeleteAsync(Requests\ClientThreadDeleteRequest $request) 
    {
        return $this->clientThreadDeleteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientThreadDeleteAsyncWithHttpInfo
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Requests\ClientThreadDeleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadDeleteAsyncWithHttpInfo(Requests\ClientThreadDeleteRequest $request) 
    {
        $returnType = '';
        $request = $this->clientThreadDeleteRequest($request);

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
     * Create request for operation 'clientThreadDelete'
     *
     * @param Requests\ClientThreadDeleteRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function clientThreadDeleteRequest(Requests\ClientThreadDeleteRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling clientThreadDelete');
        }

        $resourcePath = '/email/client/thread';
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

    /**
     * Operation clientThreadGetList
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Requests\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailThreadList
     */
    public function clientThreadGetList(Requests\ClientThreadGetListRequest $request)
    {
        try {
             list($response) = $this->clientThreadGetListWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->clientThreadGetListWithHttpInfo($request);
             return $response;
        } 
    }

    /**
     * Operation clientThreadGetListWithHttpInfo
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Requests\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailThreadList, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadGetListWithHttpInfo(Requests\ClientThreadGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailThreadList';
        $request = $this->clientThreadGetListRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailThreadList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /**
     * Operation clientThreadGetListAsync
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Requests\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadGetListAsync(Requests\ClientThreadGetListRequest $request) 
    {
        return $this->clientThreadGetListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientThreadGetListAsyncWithHttpInfo
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Requests\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadGetListAsyncWithHttpInfo(Requests\ClientThreadGetListRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailThreadList';
        $request = $this->clientThreadGetListRequest($request);

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
     * Create request for operation 'clientThreadGetList'
     *
     * @param Requests\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function clientThreadGetListRequest(Requests\ClientThreadGetListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder when calling clientThreadGetList');
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account when calling clientThreadGetList');
        }

        $resourcePath = '/email/client/thread/list';
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
        if ($request->account !== null) {
            $localName = lcfirst('account');
            $localValue = is_bool($request->account) ? ($request->account ? 'true' : 'false') : $request->account;
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
        if ($request->account_storage_folder !== null) {
            $localName = lcfirst('accountStorageFolder');
            $localValue = is_bool($request->account_storage_folder) ? ($request->account_storage_folder ? 'true' : 'false') : $request->account_storage_folder;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->update_folder_cache !== null) {
            $localName = lcfirst('updateFolderCache');
            $localValue = is_bool($request->update_folder_cache) ? ($request->update_folder_cache ? 'true' : 'false') : $request->update_folder_cache;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->messages_cache_limit !== null) {
            $localName = lcfirst('messagesCacheLimit');
            $localValue = is_bool($request->messages_cache_limit) ? ($request->messages_cache_limit ? 'true' : 'false') : $request->messages_cache_limit;
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
     * Operation clientThreadGetMessages
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Requests\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Email\Model\EmailList
     */
    public function clientThreadGetMessages(Requests\ClientThreadGetMessagesRequest $request)
    {
        try {
             list($response) = $this->clientThreadGetMessagesWithHttpInfo($request);
             return $response;
        }
        catch(RepeatRequestException $e) {
             list($response) = $this->clientThreadGetMessagesWithHttpInfo($request);
             return $response;
        } 
    }

    /**
     * Operation clientThreadGetMessagesWithHttpInfo
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Requests\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Email\Model\EmailList, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadGetMessagesWithHttpInfo(Requests\ClientThreadGetMessagesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailList';
        $request = $this->clientThreadGetMessagesRequest($request);

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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Aspose\Email\Model\EmailList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /**
     * Operation clientThreadGetMessagesAsync
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Requests\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadGetMessagesAsync(Requests\ClientThreadGetMessagesRequest $request) 
    {
        return $this->clientThreadGetMessagesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientThreadGetMessagesAsyncWithHttpInfo
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Requests\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadGetMessagesAsyncWithHttpInfo(Requests\ClientThreadGetMessagesRequest $request) 
    {
        $returnType = '\Aspose\Email\Model\EmailList';
        $request = $this->clientThreadGetMessagesRequest($request);

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
     * Create request for operation 'clientThreadGetMessages'
     *
     * @param Requests\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function clientThreadGetMessagesRequest(Requests\ClientThreadGetMessagesRequest $request)
    {
        // verify the required parameter 'thread_id' is set
        if ($request->thread_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $thread_id when calling clientThreadGetMessages');
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account when calling clientThreadGetMessages');
        }

        $resourcePath = '/email/client/thread/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    

        // query params
        if ($request->thread_id !== null) {
            $localName = lcfirst('threadId');
            $localValue = is_bool($request->thread_id) ? ($request->thread_id ? 'true' : 'false') : $request->thread_id;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->account !== null) {
            $localName = lcfirst('account');
            $localValue = is_bool($request->account) ? ($request->account ? 'true' : 'false') : $request->account;
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
        // query params
        if ($request->account_storage_folder !== null) {
            $localName = lcfirst('accountStorageFolder');
            $localValue = is_bool($request->account_storage_folder) ? ($request->account_storage_folder ? 'true' : 'false') : $request->account_storage_folder;
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
     * Operation clientThreadMove
     *
     * Move thread to another folder.
     *
     * @param Requests\ClientThreadMoveRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function clientThreadMove(Requests\ClientThreadMoveRequest $request)
    {
        try {
             $this->clientThreadMoveWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->clientThreadMoveWithHttpInfo($request);
        } 
    }

    /**
     * Operation clientThreadMoveWithHttpInfo
     *
     * Move thread to another folder.
     *
     * @param Requests\ClientThreadMoveRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadMoveWithHttpInfo(Requests\ClientThreadMoveRequest $request)
    {
        $returnType = '';
        $request = $this->clientThreadMoveRequest($request);

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
     * Operation clientThreadMoveAsync
     *
     * Move thread to another folder.
     *
     * @param Requests\ClientThreadMoveRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadMoveAsync(Requests\ClientThreadMoveRequest $request) 
    {
        return $this->clientThreadMoveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientThreadMoveAsyncWithHttpInfo
     *
     * Move thread to another folder.
     *
     * @param Requests\ClientThreadMoveRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadMoveAsyncWithHttpInfo(Requests\ClientThreadMoveRequest $request) 
    {
        $returnType = '';
        $request = $this->clientThreadMoveRequest($request);

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
     * Create request for operation 'clientThreadMove'
     *
     * @param Requests\ClientThreadMoveRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function clientThreadMoveRequest(Requests\ClientThreadMoveRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling clientThreadMove');
        }

        $resourcePath = '/email/client/thread/move';
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
     * Operation clientThreadSetIsRead
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Requests\ClientThreadSetIsReadRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function clientThreadSetIsRead(Requests\ClientThreadSetIsReadRequest $request)
    {
        try {
             $this->clientThreadSetIsReadWithHttpInfo($request);
        }
        catch(RepeatRequestException $e) {
             $this->clientThreadSetIsReadWithHttpInfo($request);
        } 
    }

    /**
     * Operation clientThreadSetIsReadWithHttpInfo
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Requests\ClientThreadSetIsReadRequest $request is a request object for operation
     *
     * @throws \Aspose\Email\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadSetIsReadWithHttpInfo(Requests\ClientThreadSetIsReadRequest $request)
    {
        $returnType = '';
        $request = $this->clientThreadSetIsReadRequest($request);

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
     * Operation clientThreadSetIsReadAsync
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Requests\ClientThreadSetIsReadRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadSetIsReadAsync(Requests\ClientThreadSetIsReadRequest $request) 
    {
        return $this->clientThreadSetIsReadAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientThreadSetIsReadAsyncWithHttpInfo
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Requests\ClientThreadSetIsReadRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function clientThreadSetIsReadAsyncWithHttpInfo(Requests\ClientThreadSetIsReadRequest $request) 
    {
        $returnType = '';
        $request = $this->clientThreadSetIsReadRequest($request);

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
     * Create request for operation 'clientThreadSetIsRead'
     *
     * @param Requests\ClientThreadSetIsReadRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function clientThreadSetIsReadRequest(Requests\ClientThreadSetIsReadRequest $request)
    {
        // verify the required parameter 'request' is set
        if ($request->request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling clientThreadSetIsRead');
        }

        $resourcePath = '/email/client/thread/set-is-read';
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
