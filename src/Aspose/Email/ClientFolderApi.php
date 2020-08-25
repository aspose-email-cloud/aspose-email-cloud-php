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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\MailServerFolderList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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
}
