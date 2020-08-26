<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StorageApi.php">
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
 * StorageApi Aspose.Email for Cloud API.
 */
class StorageApi extends ApiBase
{
    /**
     * Initialize a new instance of StorageApi
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
     * Operation getDiscUsage
     *
     * @param Model\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\DiscUsage
     */
    public function getDiscUsage(Model\GetDiscUsageRequest $request)
    {
        try {
             list($response) = $this->getDiscUsageWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getDiscUsageWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getDiscUsageWithHttpInfo
     *
     * @param Model\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\DiscUsage, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDiscUsageWithHttpInfo(Model\GetDiscUsageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\DiscUsage';
        $request = $this->getDiscUsageRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getDiscUsageAsync
     *
     * 
     *
     * @param Model\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getDiscUsageAsync(Model\GetDiscUsageRequest $request)
    {
        return $this->getDiscUsageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDiscUsageAsyncWithHttpInfo
     *
     * 
     *
     * @param Model\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getDiscUsageAsyncWithHttpInfo(Model\GetDiscUsageRequest $request)
    {
        $returnType = '\Aspose\Email\Model\DiscUsage';
        $request = $this->getDiscUsageRequest($request);

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
     * Create request for operation 'getDiscUsage'
     *
     * @param Model\GetDiscUsageRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getDiscUsageRequest(Model\GetDiscUsageRequest $request)
    {

        $resourcePath = '/email/storage/disc';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->storage_name;
        $paramBaseName = 'storageName';
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
     * Operation getFileVersions
     *
     * @param Model\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\FileVersions
     */
    public function getFileVersions(Model\GetFileVersionsRequest $request)
    {
        try {
             list($response) = $this->getFileVersionsWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getFileVersionsWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getFileVersionsWithHttpInfo
     *
     * @param Model\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\FileVersions, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFileVersionsWithHttpInfo(Model\GetFileVersionsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FileVersions';
        $request = $this->getFileVersionsRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getFileVersionsAsync
     *
     * 
     *
     * @param Model\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getFileVersionsAsync(Model\GetFileVersionsRequest $request)
    {
        return $this->getFileVersionsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFileVersionsAsyncWithHttpInfo
     *
     * 
     *
     * @param Model\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getFileVersionsAsyncWithHttpInfo(Model\GetFileVersionsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FileVersions';
        $request = $this->getFileVersionsRequest($request);

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
     * Create request for operation 'getFileVersions'
     *
     * @param Model\GetFileVersionsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getFileVersionsRequest(Model\GetFileVersionsRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling getFileVersions'
            );
        }

        $resourcePath = '/email/storage/version/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        $paramValue = $request->storage_name;
        $paramBaseName = 'storageName';
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
     * Operation objectExists
     *
     * @param Model\ObjectExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ObjectExist
     */
    public function objectExists(Model\ObjectExistsRequest $request)
    {
        try {
             list($response) = $this->objectExistsWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->objectExistsWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation objectExistsWithHttpInfo
     *
     * @param Model\ObjectExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ObjectExist, HTTP status code, HTTP response headers (array of strings)
     */
    public function objectExistsWithHttpInfo(Model\ObjectExistsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ObjectExist';
        $request = $this->objectExistsRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation objectExistsAsync
     *
     * 
     *
     * @param Model\ObjectExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function objectExistsAsync(Model\ObjectExistsRequest $request)
    {
        return $this->objectExistsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation objectExistsAsyncWithHttpInfo
     *
     * 
     *
     * @param Model\ObjectExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function objectExistsAsyncWithHttpInfo(Model\ObjectExistsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ObjectExist';
        $request = $this->objectExistsRequest($request);

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
     * Create request for operation 'objectExists'
     *
     * @param Model\ObjectExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function objectExistsRequest(Model\ObjectExistsRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling objectExists'
            );
        }

        $resourcePath = '/email/storage/exist/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        $paramValue = $request->storage_name;
        $paramBaseName = 'storageName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->version_id;
        $paramBaseName = 'versionId';
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
     * Operation exists
     *
     * @param Model\StorageExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\StorageExist
     */
    public function exists(Model\StorageExistsRequest $request)
    {
        try {
             list($response) = $this->existsWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->existsWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation existsWithHttpInfo
     *
     * @param Model\StorageExistsRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\StorageExist, HTTP status code, HTTP response headers (array of strings)
     */
    public function existsWithHttpInfo(Model\StorageExistsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\StorageExist';
        $request = $this->existsRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation existsAsync
     *
     * 
     *
     * @param Model\StorageExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function existsAsync(Model\StorageExistsRequest $request)
    {
        return $this->existsAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation existsAsyncWithHttpInfo
     *
     * 
     *
     * @param Model\StorageExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function existsAsyncWithHttpInfo(Model\StorageExistsRequest $request)
    {
        $returnType = '\Aspose\Email\Model\StorageExist';
        $request = $this->existsRequest($request);

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
     * Create request for operation 'exists'
     *
     * @param Model\StorageExistsRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function existsRequest(Model\StorageExistsRequest $request)
    {
        // verify the required parameter 'storage_name' is set
        if ($request->storage_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $storage_name when calling exists'
            );
        }

        $resourcePath = '/email/storage/{storageName}/exist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // path params
        if ($request->storage_name !== null) {
            $localName = lcfirst('storageName');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->storage_name), $resourcePath);
        }

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
