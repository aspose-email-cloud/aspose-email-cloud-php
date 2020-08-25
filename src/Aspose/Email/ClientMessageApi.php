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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\ValueTOfString',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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
    

        $resourcePath = $this->parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // form params
        if ($request->file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($request->file);
            $handle = fopen($filename, "rb");
            $fileSize = filesize($filename);
            $contents = fread($handle, $fileSize);
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
        $headers = $this->mergeAllHeaders($headerParams, $headers);
        $httpBody = $this->prepareRequestBody($headers, $_tempBody, $multipart, $formParams, $formFiles);

        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\MailMessageBase',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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
    

        $resourcePath = $this->parseURL($resourcePath, $queryParams);
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
        $headers = $this->mergeAllHeaders($headerParams, $headers);
        $httpBody = $this->prepareRequestBody($headers, $_tempBody, $multipart, $formParams, $formFiles);

        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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
    

        $resourcePath = $this->parseURL($resourcePath, $queryParams);
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
        $headers = $this->mergeAllHeaders($headerParams, $headers);
        $httpBody = $this->prepareRequestBody($headers, $_tempBody, $multipart, $formParams, $formFiles);

        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\MailMessageBaseList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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
    

        $resourcePath = $this->parseURL($resourcePath, $queryParams);
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
        $headers = $this->mergeAllHeaders($headerParams, $headers);
        $httpBody = $this->prepareRequestBody($headers, $_tempBody, $multipart, $formParams, $formFiles);

        $req = new Request(
            'GET',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('GET', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
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
        $returnType = '';
        $request = $this->clientMessageSendFileRequest($request);

        try {
            $response = $this->callClient($request);
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
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
        $returnType = '';
        $request = $this->clientMessageSendFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
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
    

        $resourcePath = $this->parseURL($resourcePath, $queryParams);
        $formFiles = [];
        // form params
        if ($request->file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($request->file);
            $handle = fopen($filename, "rb");
            $fileSize = filesize($filename);
            $contents = fread($handle, $fileSize);
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
        $headers = $this->mergeAllHeaders($headerParams, $headers);
        $httpBody = $this->prepareRequestBody($headers, $_tempBody, $multipart, $formParams, $formFiles);

        $req = new Request(
            'POST',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('POST', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }
}
