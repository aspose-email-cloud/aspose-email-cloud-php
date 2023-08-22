<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientFolderApi.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
 * ClientFolderApi Aspose.Email for Cloud API.
 */
class ClientFolderApi extends ApiBase
{
    /**
     * Initialize a new instance of ClientFolderApi
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
     * Operation create
     *
     * Create new folder in email account
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function create($request)
    {
        try {
             $this->createWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->createWithHttpInfo($request);
        }
    }

    /**
     * Operation createWithHttpInfo
     *
     * Create new folder in email account
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($request)
    {
        $request = $this->createRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation createAsync
     *
     * Create new folder in email account
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createAsync($request)
    {
        return $this->createAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createAsyncWithHttpInfo
     *
     * Create new folder in email account
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createAsyncWithHttpInfo($request)
    {
        $request = $this->createRequest($request);

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
     * Create request for operation 'create'
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function createRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling create'
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
        $path = '/email/client/folder';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }

    /**
     * Operation delete
     *
     * Delete a folder in email account
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
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
     * Delete a folder in email account
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
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
     * Delete a folder in email account
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
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
     * Delete a folder in email account
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
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
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
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
        $path = '/email/client/folder';
        return $this->toClientRequest('DELETE', $httpBody, $path, [], [], [], false, $headers, []);
    }

    /**
     * Operation getList
     *
     * Get folders list in email account
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MailServerFolderList
     */
    public function getList(Model\ClientFolderGetListRequest $request)
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
     * Get folders list in email account
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MailServerFolderList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListWithHttpInfo(Model\ClientFolderGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailServerFolderList';
        $request = $this->getListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getListAsync
     *
     * Get folders list in email account
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsync(Model\ClientFolderGetListRequest $request)
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
     * Get folders list in email account
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsyncWithHttpInfo(Model\ClientFolderGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailServerFolderList';
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
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getListRequest(Model\ClientFolderGetListRequest $request)
    {
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling getList'
            );
        }

        $resourcePath = '/email/client/folder/list';
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
        $paramValue = $request->parent_folder;
        $paramBaseName = 'parentFolder';
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
}
