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
     * Initialize a new instance of ClientThreadApi
     * @param ClientInterface   $client client for calling api
     * @param Configuration   $config configuration info
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(
        ClientInterface $client,
        Configuration $config,
        HeaderSelector $selector
    ) {
        parent::__construct($client, $config, $selector);
    }

            
    /**
     * Operation delete
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function delete($request)
    {
        try {
             $this->deleteWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->deleteWithHttpInfo($request);
        }
    }

    /**
     * Operation deleteWithHttpInfo
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
    public function deleteWithHttpInfo($request)
    {
        $request = $this->deleteRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation deleteAsync
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteAsync($request)
    {
        return $this->deleteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteAsyncWithHttpInfo
     *
     * Delete thread by id. All messages from thread will also be deleted.
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteAsyncWithHttpInfo($request)
    {
        $request = $this->deleteRequest($request);

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
     * Create request for operation 'delete'
     *
     * @param Model\ClientThreadDeleteRequest $request Delete email thread request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function deleteRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling delete'
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
     * Operation getList
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailThreadList
     */
    public function getList(Model\ClientThreadGetListRequest $request)
    {
        try {
             list($response) = $this->getListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getListWithHttpInfo
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
    public function getListWithHttpInfo(Model\ClientThreadGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailThreadList';
        $request = $this->getListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getListAsync
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsync(Model\ClientThreadGetListRequest $request)
    {
        return $this->getListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListAsyncWithHttpInfo
     *
     * Get message threads from folder. All messages are partly fetched (without email body and some other fields).
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsyncWithHttpInfo(Model\ClientThreadGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailThreadList';
        $request = $this->getListRequest($request);

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
     * Create request for operation 'getList'
     *
     * @param Model\ClientThreadGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getListRequest(Model\ClientThreadGetListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder when calling getList'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling getList'
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
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account;
        $paramBaseName = 'account';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->update_folder_cache;
        $paramBaseName = 'updateFolderCache';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->messages_cache_limit;
        $paramBaseName = 'messagesCacheLimit';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Operation getMessages
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailList
     */
    public function getMessages(Model\ClientThreadGetMessagesRequest $request)
    {
        try {
             list($response) = $this->getMessagesWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getMessagesWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getMessagesWithHttpInfo
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
    public function getMessagesWithHttpInfo(Model\ClientThreadGetMessagesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailList';
        $request = $this->getMessagesRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getMessagesAsync
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getMessagesAsync(Model\ClientThreadGetMessagesRequest $request)
    {
        return $this->getMessagesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMessagesAsyncWithHttpInfo
     *
     * Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getMessagesAsyncWithHttpInfo(Model\ClientThreadGetMessagesRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailList';
        $request = $this->getMessagesRequest($request);

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
     * Create request for operation 'getMessages'
     *
     * @param Model\ClientThreadGetMessagesRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getMessagesRequest(Model\ClientThreadGetMessagesRequest $request)
    {
        // verify the required parameter 'thread_id' is set
        if ($request->thread_id === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $thread_id when calling getMessages'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling getMessages'
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
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account;
        $paramBaseName = 'account';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Operation move
     *
     * Move thread to another folder.
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function move($request)
    {
        try {
             $this->moveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->moveWithHttpInfo($request);
        }
    }

    /**
     * Operation moveWithHttpInfo
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
    public function moveWithHttpInfo($request)
    {
        $request = $this->moveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation moveAsync
     *
     * Move thread to another folder.
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function moveAsync($request)
    {
        return $this->moveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation moveAsyncWithHttpInfo
     *
     * Move thread to another folder.
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function moveAsyncWithHttpInfo($request)
    {
        $request = $this->moveRequest($request);

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
     * Create request for operation 'move'
     *
     * @param Model\ClientThreadMoveRequest $request Move thread request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function moveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling move'
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
     * Operation setIsRead
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function setIsRead($request)
    {
        try {
             $this->setIsReadWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->setIsReadWithHttpInfo($request);
        }
    }

    /**
     * Operation setIsReadWithHttpInfo
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
    public function setIsReadWithHttpInfo($request)
    {
        $request = $this->setIsReadRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation setIsReadAsync
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function setIsReadAsync($request)
    {
        return $this->setIsReadAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setIsReadAsyncWithHttpInfo
     *
     * Mark all messages in thread as read or unread.
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function setIsReadAsyncWithHttpInfo($request)
    {
        $request = $this->setIsReadRequest($request);

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
     * Create request for operation 'setIsRead'
     *
     * @param Model\ClientThreadSetIsReadRequest $request Email account specifier and IsRead flag.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function setIsReadRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling setIsRead'
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
