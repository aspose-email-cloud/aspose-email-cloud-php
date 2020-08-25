<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageApi.php">
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
 * ClientMessageApi Aspose.Email for Cloud API.
 */
class ClientMessageApi extends ApiBase
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
     * Operation clientMessageAppend
     *
     * Add email message to specified folder in email account.
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ValueTOfString
     */
    public function clientMessageAppend($request)
    {
        try {
             list($response) = $this->clientMessageAppendWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientMessageAppendWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientMessageAppendWithHttpInfo
     *
     * Add email message to specified folder in email account.
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ValueTOfString, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageAppendWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->clientMessageAppendRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientMessageAppendAsync
     *
     * Add email message to specified folder in email account.
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageAppendAsync($request)
    {
        return $this->clientMessageAppendAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageAppendAsyncWithHttpInfo
     *
     * Add email message to specified folder in email account.
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageAppendAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->clientMessageAppendRequest($request);

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
     * Create request for operation 'clientMessageAppend'
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageAppendRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientMessageAppend'
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
        $path = '/email/client/message/append';
        return $this->toClientRequest('POST', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation clientMessageAppendFile
     *
     * Add email message from file to specified folder in email account.
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ValueTOfString
     */
    public function clientMessageAppendFile(Model\ClientMessageAppendFileRequest $request)
    {
        try {
             list($response) = $this->clientMessageAppendFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientMessageAppendFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientMessageAppendFileWithHttpInfo
     *
     * Add email message from file to specified folder in email account.
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ValueTOfString, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageAppendFileWithHttpInfo(Model\ClientMessageAppendFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->clientMessageAppendFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientMessageAppendFileAsync
     *
     * Add email message from file to specified folder in email account.
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageAppendFileAsync(Model\ClientMessageAppendFileRequest $request)
    {
        return $this->clientMessageAppendFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageAppendFileAsyncWithHttpInfo
     *
     * Add email message from file to specified folder in email account.
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageAppendFileAsyncWithHttpInfo(Model\ClientMessageAppendFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->clientMessageAppendFileRequest($request);

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
     * Create request for operation 'clientMessageAppendFile'
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageAppendFileRequest(Model\ClientMessageAppendFileRequest $request)
    {
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientMessageAppendFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling clientMessageAppendFile'
            );
        }

        $resourcePath = '/email/client/message/file/append';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->account;
        $paramBaseName = 'account';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->mark_as_sent;
        $paramBaseName = 'markAsSent';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

        // form params
        $formFiles = [];
        if ($request->file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($request->file);
            $handle = fopen($filename, "rb");
            $fileSize = filesize($filename);
            $contents = fread($handle, $fileSize);
            $formParams['file'] = $contents;
            $formFiles['file'] = basename($filename);
        }

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
        return $this->toClientRequest(
            'POST',
            null,
            $resourcePath,
            $queryParams,
            $formParams,
            $formFiles,
            $multipart,
            $headers,
            $headerParams
        );
    }
            
    /**
     * Operation clientMessageDelete
     *
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientMessageDelete($request)
    {
        try {
             $this->clientMessageDeleteWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientMessageDeleteWithHttpInfo($request);
        }
    }

    /**
     * Operation clientMessageDeleteWithHttpInfo
     *
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageDeleteWithHttpInfo($request)
    {
        $request = $this->clientMessageDeleteRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientMessageDeleteAsync
     *
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageDeleteAsync($request)
    {
        return $this->clientMessageDeleteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageDeleteAsyncWithHttpInfo
     *
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageDeleteAsyncWithHttpInfo($request)
    {
        $request = $this->clientMessageDeleteRequest($request);

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
     * Create request for operation 'clientMessageDelete'
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageDeleteRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientMessageDelete'
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
        $path = '/email/client/message';
        return $this->toClientRequest('DELETE', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation clientMessageFetch
     *
     * Fetch message from email account
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MailMessageBase
     */
    public function clientMessageFetch(Model\ClientMessageFetchRequest $request)
    {
        try {
             list($response) = $this->clientMessageFetchWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientMessageFetchWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientMessageFetchWithHttpInfo
     *
     * Fetch message from email account
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MailMessageBase, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageFetchWithHttpInfo(Model\ClientMessageFetchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBase';
        $request = $this->clientMessageFetchRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientMessageFetchAsync
     *
     * Fetch message from email account
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageFetchAsync(Model\ClientMessageFetchRequest $request)
    {
        return $this->clientMessageFetchAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageFetchAsyncWithHttpInfo
     *
     * Fetch message from email account
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageFetchAsyncWithHttpInfo(Model\ClientMessageFetchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBase';
        $request = $this->clientMessageFetchRequest($request);

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
     * Create request for operation 'clientMessageFetch'
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageFetchRequest(Model\ClientMessageFetchRequest $request)
    {
        // verify the required parameter 'message_id' is set
        if ($request->message_id === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $message_id when calling clientMessageFetch'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientMessageFetch'
            );
        }

        $resourcePath = '/email/client/message';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->message_id;
        $paramBaseName = 'messageId';
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
        $paramValue = $request->type;
        $paramBaseName = 'type';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
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
     * Operation clientMessageFetchFile
     *
     * Fetch message as file from email account
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function clientMessageFetchFile(Model\ClientMessageFetchFileRequest $request)
    {
        try {
             list($response) = $this->clientMessageFetchFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientMessageFetchFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientMessageFetchFileWithHttpInfo
     *
     * Fetch message as file from email account
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageFetchFileWithHttpInfo(Model\ClientMessageFetchFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->clientMessageFetchFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientMessageFetchFileAsync
     *
     * Fetch message as file from email account
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageFetchFileAsync(Model\ClientMessageFetchFileRequest $request)
    {
        return $this->clientMessageFetchFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageFetchFileAsyncWithHttpInfo
     *
     * Fetch message as file from email account
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageFetchFileAsyncWithHttpInfo(Model\ClientMessageFetchFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->clientMessageFetchFileRequest($request);

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
     * Create request for operation 'clientMessageFetchFile'
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageFetchFileRequest(Model\ClientMessageFetchFileRequest $request)
    {
        // verify the required parameter 'message_id' is set
        if ($request->message_id === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $message_id when calling clientMessageFetchFile'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientMessageFetchFile'
            );
        }

        $resourcePath = '/email/client/message/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->message_id;
        $paramBaseName = 'messageId';
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
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Operation clientMessageList
     *
     * Get messages from folder, filtered by query
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MailMessageBaseList
     */
    public function clientMessageList(Model\ClientMessageListRequest $request)
    {
        try {
             list($response) = $this->clientMessageListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientMessageListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientMessageListWithHttpInfo
     *
     * Get messages from folder, filtered by query
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MailMessageBaseList, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageListWithHttpInfo(Model\ClientMessageListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBaseList';
        $request = $this->clientMessageListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientMessageListAsync
     *
     * Get messages from folder, filtered by query
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageListAsync(Model\ClientMessageListRequest $request)
    {
        return $this->clientMessageListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageListAsyncWithHttpInfo
     *
     * Get messages from folder, filtered by query
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageListAsyncWithHttpInfo(Model\ClientMessageListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBaseList';
        $request = $this->clientMessageListRequest($request);

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
     * Create request for operation 'clientMessageList'
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageListRequest(Model\ClientMessageListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder when calling clientMessageList'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientMessageList'
            );
        }

        $resourcePath = '/email/client/message/list';
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
        $paramValue = $request->query_string;
        $paramBaseName = 'queryString';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->recursive;
        $paramBaseName = 'recursive';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->type;
        $paramBaseName = 'type';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
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
     * Operation clientMessageMove
     *
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientMessageMove($request)
    {
        try {
             $this->clientMessageMoveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientMessageMoveWithHttpInfo($request);
        }
    }

    /**
     * Operation clientMessageMoveWithHttpInfo
     *
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageMoveWithHttpInfo($request)
    {
        $request = $this->clientMessageMoveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientMessageMoveAsync
     *
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageMoveAsync($request)
    {
        return $this->clientMessageMoveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageMoveAsyncWithHttpInfo
     *
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageMoveAsyncWithHttpInfo($request)
    {
        $request = $this->clientMessageMoveRequest($request);

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
     * Create request for operation 'clientMessageMove'
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageMoveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientMessageMove'
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
        $path = '/email/client/message/move';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation clientMessageSend
     *
     * Send an email specified by model in request.
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientMessageSend($request)
    {
        try {
             $this->clientMessageSendWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientMessageSendWithHttpInfo($request);
        }
    }

    /**
     * Operation clientMessageSendWithHttpInfo
     *
     * Send an email specified by model in request.
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageSendWithHttpInfo($request)
    {
        $request = $this->clientMessageSendRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientMessageSendAsync
     *
     * Send an email specified by model in request.
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageSendAsync($request)
    {
        return $this->clientMessageSendAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageSendAsyncWithHttpInfo
     *
     * Send an email specified by model in request.
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageSendAsyncWithHttpInfo($request)
    {
        $request = $this->clientMessageSendRequest($request);

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
     * Create request for operation 'clientMessageSend'
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageSendRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientMessageSend'
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
        $path = '/email/client/message';
        return $this->toClientRequest('POST', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation clientMessageSendFile
     *
     * Send an email file.
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientMessageSendFile(Model\ClientMessageSendFileRequest $request)
    {
        try {
             $this->clientMessageSendFileWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientMessageSendFileWithHttpInfo($request);
        }
    }

    /**
     * Operation clientMessageSendFileWithHttpInfo
     *
     * Send an email file.
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageSendFileWithHttpInfo(Model\ClientMessageSendFileRequest $request)
    {
        $request = $this->clientMessageSendFileRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientMessageSendFileAsync
     *
     * Send an email file.
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageSendFileAsync(Model\ClientMessageSendFileRequest $request)
    {
        return $this->clientMessageSendFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageSendFileAsyncWithHttpInfo
     *
     * Send an email file.
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageSendFileAsyncWithHttpInfo(Model\ClientMessageSendFileRequest $request)
    {
        $request = $this->clientMessageSendFileRequest($request);

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
     * Create request for operation 'clientMessageSendFile'
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageSendFileRequest(Model\ClientMessageSendFileRequest $request)
    {
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientMessageSendFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling clientMessageSendFile'
            );
        }

        $resourcePath = '/email/client/message/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->account;
        $paramBaseName = 'account';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

        // form params
        $formFiles = [];
        if ($request->file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($request->file);
            $handle = fopen($filename, "rb");
            $fileSize = filesize($filename);
            $contents = fread($handle, $fileSize);
            $formParams['file'] = $contents;
            $formFiles['file'] = basename($filename);
        }

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
        return $this->toClientRequest(
            'POST',
            null,
            $resourcePath,
            $queryParams,
            $formParams,
            $formFiles,
            $multipart,
            $headers,
            $headerParams
        );
    }
            
    /**
     * Operation clientMessageSetIsRead
     *
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientMessageSetIsRead($request)
    {
        try {
             $this->clientMessageSetIsReadWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientMessageSetIsReadWithHttpInfo($request);
        }
    }

    /**
     * Operation clientMessageSetIsReadWithHttpInfo
     *
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clientMessageSetIsReadWithHttpInfo($request)
    {
        $request = $this->clientMessageSetIsReadRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientMessageSetIsReadAsync
     *
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageSetIsReadAsync($request)
    {
        return $this->clientMessageSetIsReadAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientMessageSetIsReadAsyncWithHttpInfo
     *
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientMessageSetIsReadAsyncWithHttpInfo($request)
    {
        $request = $this->clientMessageSetIsReadRequest($request);

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
     * Create request for operation 'clientMessageSetIsRead'
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientMessageSetIsReadRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientMessageSetIsRead'
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
        $path = '/email/client/message/set-is-read';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
