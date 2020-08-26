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
     * Initialize a new instance of ClientMessageApi
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
     * Operation append
     *
     * Add email message to specified folder in email account.
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ValueTOfString
     */
    public function append($request)
    {
        try {
             list($response) = $this->appendWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->appendWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation appendWithHttpInfo
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
    public function appendWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->appendRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation appendAsync
     *
     * Add email message to specified folder in email account.
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function appendAsync($request)
    {
        return $this->appendAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation appendAsyncWithHttpInfo
     *
     * Add email message to specified folder in email account.
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function appendAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->appendRequest($request);

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
     * Create request for operation 'append'
     *
     * @param Model\ClientMessageAppendRequest $request Append email request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function appendRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling append'
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
     * Operation appendFile
     *
     * Add email message from file to specified folder in email account.
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ValueTOfString
     */
    public function appendFile(Model\ClientMessageAppendFileRequest $request)
    {
        try {
             list($response) = $this->appendFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->appendFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation appendFileWithHttpInfo
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
    public function appendFileWithHttpInfo(Model\ClientMessageAppendFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->appendFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation appendFileAsync
     *
     * Add email message from file to specified folder in email account.
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function appendFileAsync(Model\ClientMessageAppendFileRequest $request)
    {
        return $this->appendFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation appendFileAsyncWithHttpInfo
     *
     * Add email message from file to specified folder in email account.
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function appendFileAsyncWithHttpInfo(Model\ClientMessageAppendFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfString';
        $request = $this->appendFileRequest($request);

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
     * Create request for operation 'appendFile'
     *
     * @param Model\ClientMessageAppendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function appendFileRequest(Model\ClientMessageAppendFileRequest $request)
    {
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling appendFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling appendFile'
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
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->mark_as_sent;
        $paramBaseName = 'markAsSent';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Operation delete
     *
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
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
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
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
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
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
     * Delete message.
     *
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
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
     * @param Model\ClientMessageDeleteRequest $request Delete message request.
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
        $path = '/email/client/message';
        return $this->toClientRequest('DELETE', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation fetch
     *
     * Fetch message from email account
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MailMessageBase
     */
    public function fetch(Model\ClientMessageFetchRequest $request)
    {
        try {
             list($response) = $this->fetchWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->fetchWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation fetchWithHttpInfo
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
    public function fetchWithHttpInfo(Model\ClientMessageFetchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBase';
        $request = $this->fetchRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation fetchAsync
     *
     * Fetch message from email account
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fetchAsync(Model\ClientMessageFetchRequest $request)
    {
        return $this->fetchAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchAsyncWithHttpInfo
     *
     * Fetch message from email account
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fetchAsyncWithHttpInfo(Model\ClientMessageFetchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBase';
        $request = $this->fetchRequest($request);

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
     * Create request for operation 'fetch'
     *
     * @param Model\ClientMessageFetchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function fetchRequest(Model\ClientMessageFetchRequest $request)
    {
        // verify the required parameter 'message_id' is set
        if ($request->message_id === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $message_id when calling fetch'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling fetch'
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
        $paramValue = $request->type;
        $paramBaseName = 'type';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
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
     * Operation fetchFile
     *
     * Fetch message as file from email account
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function fetchFile(Model\ClientMessageFetchFileRequest $request)
    {
        try {
             list($response) = $this->fetchFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->fetchFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation fetchFileWithHttpInfo
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
    public function fetchFileWithHttpInfo(Model\ClientMessageFetchFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->fetchFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation fetchFileAsync
     *
     * Fetch message as file from email account
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fetchFileAsync(Model\ClientMessageFetchFileRequest $request)
    {
        return $this->fetchFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchFileAsyncWithHttpInfo
     *
     * Fetch message as file from email account
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fetchFileAsyncWithHttpInfo(Model\ClientMessageFetchFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->fetchFileRequest($request);

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
     * Create request for operation 'fetchFile'
     *
     * @param Model\ClientMessageFetchFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function fetchFileRequest(Model\ClientMessageFetchFileRequest $request)
    {
        // verify the required parameter 'message_id' is set
        if ($request->message_id === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $message_id when calling fetchFile'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling fetchFile'
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
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Operation list
     *
     * Get messages from folder, filtered by query
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MailMessageBaseList
     */
    public function list(Model\ClientMessageListRequest $request)
    {
        try {
             list($response) = $this->listWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->listWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation listWithHttpInfo
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
    public function listWithHttpInfo(Model\ClientMessageListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBaseList';
        $request = $this->listRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation listAsync
     *
     * Get messages from folder, filtered by query
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function listAsync(Model\ClientMessageListRequest $request)
    {
        return $this->listAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAsyncWithHttpInfo
     *
     * Get messages from folder, filtered by query
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function listAsyncWithHttpInfo(Model\ClientMessageListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailMessageBaseList';
        $request = $this->listRequest($request);

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
     * Create request for operation 'list'
     *
     * @param Model\ClientMessageListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function listRequest(Model\ClientMessageListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder when calling list'
            );
        }
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling list'
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
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account;
        $paramBaseName = 'account';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->query_string;
        $paramBaseName = 'queryString';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->recursive;
        $paramBaseName = 'recursive';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->type;
        $paramBaseName = 'type';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
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
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
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
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
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
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
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
     * Move message to another folder.
     *
     * @param Model\ClientMessageMoveRequest $request Move message request.
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
     * @param Model\ClientMessageMoveRequest $request Move message request.
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
        $path = '/email/client/message/move';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation send
     *
     * Send an email specified by model in request.
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function send($request)
    {
        try {
             $this->sendWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->sendWithHttpInfo($request);
        }
    }

    /**
     * Operation sendWithHttpInfo
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
    public function sendWithHttpInfo($request)
    {
        $request = $this->sendRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation sendAsync
     *
     * Send an email specified by model in request.
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function sendAsync($request)
    {
        return $this->sendAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendAsyncWithHttpInfo
     *
     * Send an email specified by model in request.
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function sendAsyncWithHttpInfo($request)
    {
        $request = $this->sendRequest($request);

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
     * Create request for operation 'send'
     *
     * @param Model\ClientMessageSendRequest $request Send email request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function sendRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling send'
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
     * Operation sendFile
     *
     * Send an email file.
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function sendFile(Model\ClientMessageSendFileRequest $request)
    {
        try {
             $this->sendFileWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->sendFileWithHttpInfo($request);
        }
    }

    /**
     * Operation sendFileWithHttpInfo
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
    public function sendFileWithHttpInfo(Model\ClientMessageSendFileRequest $request)
    {
        $request = $this->sendFileRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation sendFileAsync
     *
     * Send an email file.
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function sendFileAsync(Model\ClientMessageSendFileRequest $request)
    {
        return $this->sendFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendFileAsyncWithHttpInfo
     *
     * Send an email file.
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function sendFileAsyncWithHttpInfo(Model\ClientMessageSendFileRequest $request)
    {
        $request = $this->sendFileRequest($request);

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
     * Create request for operation 'sendFile'
     *
     * @param Model\ClientMessageSendFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function sendFileRequest(Model\ClientMessageSendFileRequest $request)
    {
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling sendFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling sendFile'
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
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->account_storage_folder;
        $paramBaseName = 'accountStorageFolder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Operation setIsRead
     *
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
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
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
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
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
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
     * Mark message as read or unread.
     *
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
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
     * @param Model\ClientMessageSetIsReadRequest $request Delete message request.
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
        $path = '/email/client/message/set-is-read';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
