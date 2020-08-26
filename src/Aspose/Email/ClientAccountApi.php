<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientAccountApi.php">
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
 * ClientAccountApi Aspose.Email for Cloud API.
 */
class ClientAccountApi extends ApiBase
{
    /**
     * Initialize a new instance of ClientAccountApi
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
     * Operation get
     *
     * Get email client account from storage.
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailClientAccount
     */
    public function get(Model\ClientAccountGetRequest $request)
    {
        try {
             list($response) = $this->getWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getWithHttpInfo
     *
     * Get email client account from storage.
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailClientAccount, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo(Model\ClientAccountGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientAccount';
        $request = $this->getRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsync
     *
     * Get email client account from storage.
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsync(Model\ClientAccountGetRequest $request)
    {
        return $this->getAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Get email client account from storage.
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsyncWithHttpInfo(Model\ClientAccountGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientAccount';
        $request = $this->getRequest($request);

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
     * Create request for operation 'get'
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getRequest(Model\ClientAccountGetRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling get'
            );
        }

        $resourcePath = '/email/client/account';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->file_name;
        $paramBaseName = 'fileName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
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
     * Operation getMulti
     *
     * Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailClientMultiAccount
     */
    public function getMulti(Model\ClientAccountGetMultiRequest $request)
    {
        try {
             list($response) = $this->getMultiWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getMultiWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getMultiWithHttpInfo
     *
     * Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailClientMultiAccount, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMultiWithHttpInfo(Model\ClientAccountGetMultiRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientMultiAccount';
        $request = $this->getMultiRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getMultiAsync
     *
     * Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getMultiAsync(Model\ClientAccountGetMultiRequest $request)
    {
        return $this->getMultiAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMultiAsyncWithHttpInfo
     *
     * Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getMultiAsyncWithHttpInfo(Model\ClientAccountGetMultiRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientMultiAccount';
        $request = $this->getMultiRequest($request);

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
     * Create request for operation 'getMulti'
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getMultiRequest(Model\ClientAccountGetMultiRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling getMulti'
            );
        }

        $resourcePath = '/email/client/account/multi';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->file_name;
        $paramBaseName = 'fileName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
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
     * Operation save
     *
     * Create/update email client account file (*.account) with credentials
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function save($request)
    {
        try {
             $this->saveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->saveWithHttpInfo($request);
        }
    }

    /**
     * Operation saveWithHttpInfo
     *
     * Create/update email client account file (*.account) with credentials
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveWithHttpInfo($request)
    {
        $request = $this->saveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation saveAsync
     *
     * Create/update email client account file (*.account) with credentials
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function saveAsync($request)
    {
        return $this->saveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation saveAsyncWithHttpInfo
     *
     * Create/update email client account file (*.account) with credentials
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function saveAsyncWithHttpInfo($request)
    {
        $request = $this->saveRequest($request);

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
     * Create request for operation 'save'
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function saveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling save'
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
        $path = '/email/client/account';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation saveMulti
     *
     * Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function saveMulti($request)
    {
        try {
             $this->saveMultiWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->saveMultiWithHttpInfo($request);
        }
    }

    /**
     * Operation saveMultiWithHttpInfo
     *
     * Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveMultiWithHttpInfo($request)
    {
        $request = $this->saveMultiRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation saveMultiAsync
     *
     * Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function saveMultiAsync($request)
    {
        return $this->saveMultiAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation saveMultiAsyncWithHttpInfo
     *
     * Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function saveMultiAsyncWithHttpInfo($request)
    {
        $request = $this->saveMultiRequest($request);

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
     * Create request for operation 'saveMulti'
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function saveMultiRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling saveMulti'
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
        $path = '/email/client/account/multi';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
