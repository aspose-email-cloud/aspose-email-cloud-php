<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientFolderApi.php">
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
 * ClientFolderApi Aspose.Email for Cloud API.
 */
class ClientFolderApi extends ApiBase
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
     * Operation clientFolderCreate
     *
     * Create new folder in email account
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientFolderCreate($request)
    {
        try {
             $this->clientFolderCreateWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientFolderCreateWithHttpInfo($request);
        }
    }

    /**
     * Operation clientFolderCreateWithHttpInfo
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
    public function clientFolderCreateWithHttpInfo($request)
    {
        $request = $this->clientFolderCreateRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientFolderCreateAsync
     *
     * Create new folder in email account
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientFolderCreateAsync($request)
    {
        return $this->clientFolderCreateAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientFolderCreateAsyncWithHttpInfo
     *
     * Create new folder in email account
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientFolderCreateAsyncWithHttpInfo($request)
    {
        $request = $this->clientFolderCreateRequest($request);

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
     * Create request for operation 'clientFolderCreate'
     *
     * @param Model\ClientFolderCreateRequest $request Create folder request
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientFolderCreateRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientFolderCreate'
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
     * Operation clientFolderDelete
     *
     * Delete a folder in email account
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientFolderDelete($request)
    {
        try {
             $this->clientFolderDeleteWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientFolderDeleteWithHttpInfo($request);
        }
    }

    /**
     * Operation clientFolderDeleteWithHttpInfo
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
    public function clientFolderDeleteWithHttpInfo($request)
    {
        $request = $this->clientFolderDeleteRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientFolderDeleteAsync
     *
     * Delete a folder in email account
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientFolderDeleteAsync($request)
    {
        return $this->clientFolderDeleteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientFolderDeleteAsyncWithHttpInfo
     *
     * Delete a folder in email account
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientFolderDeleteAsyncWithHttpInfo($request)
    {
        $request = $this->clientFolderDeleteRequest($request);

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
     * Create request for operation 'clientFolderDelete'
     *
     * @param Model\ClientFolderDeleteRequest $request Delete folder request
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientFolderDeleteRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientFolderDelete'
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
     * Operation clientFolderGetList
     *
     * Get folders list in email account
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MailServerFolderList
     */
    public function clientFolderGetList(Model\ClientFolderGetListRequest $request)
    {
        try {
             list($response) = $this->clientFolderGetListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientFolderGetListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientFolderGetListWithHttpInfo
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
    public function clientFolderGetListWithHttpInfo(Model\ClientFolderGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailServerFolderList';
        $request = $this->clientFolderGetListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientFolderGetListAsync
     *
     * Get folders list in email account
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientFolderGetListAsync(Model\ClientFolderGetListRequest $request)
    {
        return $this->clientFolderGetListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientFolderGetListAsyncWithHttpInfo
     *
     * Get folders list in email account
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientFolderGetListAsyncWithHttpInfo(Model\ClientFolderGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MailServerFolderList';
        $request = $this->clientFolderGetListRequest($request);

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
     * Create request for operation 'clientFolderGetList'
     *
     * @param Model\ClientFolderGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientFolderGetListRequest(Model\ClientFolderGetListRequest $request)
    {
        // verify the required parameter 'account' is set
        if ($request->account === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $account when calling clientFolderGetList'
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
