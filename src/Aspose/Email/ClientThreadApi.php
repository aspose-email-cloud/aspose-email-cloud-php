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

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise\PromiseInterface;
use InvalidArgumentException;
use Aspose\Email\Model;

/**
 * ClientThreadApi Aspose.Email for Cloud API.
 */
class ClientThreadApi extends ApiBase
{
    /**
     * Initialize a new instance of EmailApi
     * @param ClientInterface|null   $client client for calling api
     * @param Configuration|null   $config configuration info
     * @param HeaderSelector|null   $selector class for header selection
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        parent::__construct($client, $config, $selector);
    }

            
    /**
     * Operation clientThreadDelete
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientThreadDelete($request)
    {
        try {
             $this->clientThreadDeleteWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientThreadDeleteWithHttpInfo($request);
        }
    }

    /**
     * Operation clientThreadDeleteWithHttpInfo
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadDeleteWithHttpInfo($request)
    {
        $request = $this->clientThreadDeleteRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientThreadDeleteAsync
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadDeleteAsync($request)
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
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadDeleteAsyncWithHttpInfo($request)
    {
        $request = $this->clientThreadDeleteRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $this->handleClientException($exception);
                }
            );
    }

    /**
     * Create request for operation 'clientThreadDelete'
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientThreadDeleteRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientThreadDelete'
            );
        }

        // body params
        if (is_string($request)) {
            $httpBody = "\"" . $request . "\"";
        } else {
            $httpBody = $request;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/client/thread';
        return $this->toClientRequest('DELETE', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation clientThreadGetList
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailThreadList
     */
    public function clientThreadGetList(Model\ClientThreadGetListRequest $request)
    {
        try {
             list($response) = $this->clientThreadGetListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientThreadGetListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientThreadGetListWithHttpInfo
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailThreadList, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadGetListWithHttpInfo(Model\ClientThreadGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailThreadList';
        $request = $this->clientThreadGetListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientThreadGetListAsync
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadGetListAsync(Model\ClientThreadGetListRequest $request)
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
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadGetListAsyncWithHttpInfo(Model\ClientThreadGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailThreadList';
        $request = $this->clientThreadGetListRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return $this->processResponse($response, $returnType);
                },
                function ($exception) {
                    $this->handleClientException($exception);
                }
            );
    }

    /**
     * Create request for operation 'clientThreadGetList'
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientThreadGetListRequest(Model\ClientThreadGetListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder when calling clientThreadGetList'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientThreadGetList'
            );
        }

        $resourcePath = '/email/client/thread/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account;
        $paramBaseName = 'account';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->update_folder_cache;
        $paramBaseName = 'updateFolderCache';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->messages_cache_limit;
        $paramBaseName = 'messagesCacheLimit';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
        return $this->toClientRequest(
            'GET',
            null,
            $resourcePath,
            $queryParams,
            $formParams,
            [],
            $multipart,
            $headers,
            $headerParams
        );
    }
            
    /**
     * Operation clientThreadGetMessages
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailList
     */
    public function clientThreadGetMessages(Model\ClientThreadGetMessagesRequest $request)
    {
        try {
             list($response) = $this->clientThreadGetMessagesWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientThreadGetMessagesWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientThreadGetMessagesWithHttpInfo
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailList, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadGetMessagesWithHttpInfo(Model\ClientThreadGetMessagesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailList';
        $request = $this->clientThreadGetMessagesRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientThreadGetMessagesAsync
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadGetMessagesAsync(Model\ClientThreadGetMessagesRequest $request)
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
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadGetMessagesAsyncWithHttpInfo(Model\ClientThreadGetMessagesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailList';
        $request = $this->clientThreadGetMessagesRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return $this->processResponse($response, $returnType);
                },
                function ($exception) {
                    $this->handleClientException($exception);
                }
            );
    }

    /**
     * Create request for operation 'clientThreadGetMessages'
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientThreadGetMessagesRequest(Model\ClientThreadGetMessagesRequest $request)
    {
        // verify the required parameter 'thread_id' is set
        if ($request->thread_id === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $thread_id when calling clientThreadGetMessages'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientThreadGetMessages'
            );
        }

        $resourcePath = '/email/client/thread/messages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->thread_id;
        $paramBaseName = 'threadId';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account;
        $paramBaseName = 'account';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
        return $this->toClientRequest(
            'GET',
            null,
            $resourcePath,
            $queryParams,
            $formParams,
            [],
            $multipart,
            $headers,
            $headerParams
        );
    }
            
    /**
     * Operation clientThreadMove
     *
     * Move thread to another folder.
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientThreadMove($request)
    {
        try {
             $this->clientThreadMoveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientThreadMoveWithHttpInfo($request);
        }
    }

    /**
     * Operation clientThreadMoveWithHttpInfo
     *
     * Move thread to another folder.
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadMoveWithHttpInfo($request)
    {
        $request = $this->clientThreadMoveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientThreadMoveAsync
     *
     * Move thread to another folder.
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadMoveAsync($request)
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
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadMoveAsyncWithHttpInfo($request)
    {
        $request = $this->clientThreadMoveRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $this->handleClientException($exception);
                }
            );
    }

    /**
     * Create request for operation 'clientThreadMove'
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientThreadMoveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientThreadMove'
            );
        }

        // body params
        if (is_string($request)) {
            $httpBody = "\"" . $request . "\"";
        } else {
            $httpBody = $request;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/client/thread/move';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation clientThreadSetIsRead
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientThreadSetIsRead($request)
    {
        try {
             $this->clientThreadSetIsReadWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientThreadSetIsReadWithHttpInfo($request);
        }
    }

    /**
     * Operation clientThreadSetIsReadWithHttpInfo
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientThreadSetIsReadWithHttpInfo($request)
    {
        $request = $this->clientThreadSetIsReadRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientThreadSetIsReadAsync
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadSetIsReadAsync($request)
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
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientThreadSetIsReadAsyncWithHttpInfo($request)
    {
        $request = $this->clientThreadSetIsReadRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $this->handleClientException($exception);
                }
            );
    }

    /**
     * Create request for operation 'clientThreadSetIsRead'
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientThreadSetIsReadRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientThreadSetIsRead'
            );
        }

        // body params
        if (is_string($request)) {
            $httpBody = "\"" . $request . "\"";
        } else {
            $httpBody = $request;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/client/thread/set-is-read';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
