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
     * Operation clientAccountGet
     *
     * Get email client account from storage.
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailClientAccount
     */
    public function clientAccountGet(Model\ClientAccountGetRequest $request)
    {
        try {
             list($response) = $this->clientAccountGetWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientAccountGetWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientAccountGetWithHttpInfo
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
    public function clientAccountGetWithHttpInfo(Model\ClientAccountGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientAccount';
        $request = $this->clientAccountGetRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientAccountGetAsync
     *
     * Get email client account from storage.
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountGetAsync(Model\ClientAccountGetRequest $request)
    {
        return $this->clientAccountGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientAccountGetAsyncWithHttpInfo
     *
     * Get email client account from storage.
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountGetAsyncWithHttpInfo(Model\ClientAccountGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientAccount';
        $request = $this->clientAccountGetRequest($request);

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
     * Create request for operation 'clientAccountGet'
     *
     * @param Model\ClientAccountGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientAccountGetRequest(Model\ClientAccountGetRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling clientAccountGet'
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
     * Operation clientAccountGetMulti
     *
     * Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailClientMultiAccount
     */
    public function clientAccountGetMulti(Model\ClientAccountGetMultiRequest $request)
    {
        try {
             list($response) = $this->clientAccountGetMultiWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->clientAccountGetMultiWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation clientAccountGetMultiWithHttpInfo
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
    public function clientAccountGetMultiWithHttpInfo(Model\ClientAccountGetMultiRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientMultiAccount';
        $request = $this->clientAccountGetMultiRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation clientAccountGetMultiAsync
     *
     * Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountGetMultiAsync(Model\ClientAccountGetMultiRequest $request)
    {
        return $this->clientAccountGetMultiAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientAccountGetMultiAsyncWithHttpInfo
     *
     * Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountGetMultiAsyncWithHttpInfo(Model\ClientAccountGetMultiRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailClientMultiAccount';
        $request = $this->clientAccountGetMultiRequest($request);

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
     * Create request for operation 'clientAccountGetMulti'
     *
     * @param Model\ClientAccountGetMultiRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientAccountGetMultiRequest(Model\ClientAccountGetMultiRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling clientAccountGetMulti'
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
     * Operation clientAccountSave
     *
     * Create/update email client account file (*.account) with credentials
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientAccountSave($request)
    {
        try {
             $this->clientAccountSaveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientAccountSaveWithHttpInfo($request);
        }
    }

    /**
     * Operation clientAccountSaveWithHttpInfo
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
    public function clientAccountSaveWithHttpInfo($request)
    {
        $request = $this->clientAccountSaveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientAccountSaveAsync
     *
     * Create/update email client account file (*.account) with credentials
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountSaveAsync($request)
    {
        return $this->clientAccountSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientAccountSaveAsyncWithHttpInfo
     *
     * Create/update email client account file (*.account) with credentials
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountSaveAsyncWithHttpInfo($request)
    {
        $request = $this->clientAccountSaveRequest($request);

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
     * Create request for operation 'clientAccountSave'
     *
     * @param Model\ClientAccountSaveRequest $request Email account information
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientAccountSaveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientAccountSave'
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
     * Operation clientAccountSaveMulti
     *
     * Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function clientAccountSaveMulti($request)
    {
        try {
             $this->clientAccountSaveMultiWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->clientAccountSaveMultiWithHttpInfo($request);
        }
    }

    /**
     * Operation clientAccountSaveMultiWithHttpInfo
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
    public function clientAccountSaveMultiWithHttpInfo($request)
    {
        $request = $this->clientAccountSaveMultiRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation clientAccountSaveMultiAsync
     *
     * Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountSaveMultiAsync($request)
    {
        return $this->clientAccountSaveMultiAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation clientAccountSaveMultiAsyncWithHttpInfo
     *
     * Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function clientAccountSaveMultiAsyncWithHttpInfo($request)
    {
        $request = $this->clientAccountSaveMultiRequest($request);

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
     * Create request for operation 'clientAccountSaveMulti'
     *
     * @param Model\ClientAccountSaveMultiRequest $request Email accounts information.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function clientAccountSaveMultiRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling clientAccountSaveMulti'
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
