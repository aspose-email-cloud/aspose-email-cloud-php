<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FolderApi.php">
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
 * FolderApi Aspose.Email for Cloud API.
 */
class FolderApi extends ApiBase
{
    /**
     * Initialize a new instance of FolderApi
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
     * Operation copyFolder
     *
     * Copy folder
     *
     * @param Model\CopyFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function copyFolder(Model\CopyFolderRequest $request)
    {
        try {
             $this->copyFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->copyFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation copyFolderWithHttpInfo
     *
     * Copy folder
     *
     * @param Model\CopyFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function copyFolderWithHttpInfo(Model\CopyFolderRequest $request)
    {
        $request = $this->copyFolderRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation copyFolderAsync
     *
     * Copy folder
     *
     * @param Model\CopyFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function copyFolderAsync(Model\CopyFolderRequest $request)
    {
        return $this->copyFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation copyFolderAsyncWithHttpInfo
     *
     * Copy folder
     *
     * @param Model\CopyFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function copyFolderAsyncWithHttpInfo(Model\CopyFolderRequest $request)
    {
        $request = $this->copyFolderRequest($request);

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
     * Create request for operation 'copyFolder'
     *
     * @param Model\CopyFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function copyFolderRequest(Model\CopyFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $src_path when calling copyFolder'
            );
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $dest_path when calling copyFolder'
            );
        }

        $resourcePath = '/email/storage/folder/copy/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // path params
        if ($request->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }

        // query params
        $paramValue = $request->dest_path;
        $paramBaseName = 'destPath';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->src_storage_name;
        $paramBaseName = 'srcStorageName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->dest_storage_name;
        $paramBaseName = 'destStorageName';
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
            'PUT',
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
     * Operation createFolder
     *
     * Create the folder
     *
     * @param Model\CreateFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function createFolder(Model\CreateFolderRequest $request)
    {
        try {
             $this->createFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->createFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation createFolderWithHttpInfo
     *
     * Create the folder
     *
     * @param Model\CreateFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFolderWithHttpInfo(Model\CreateFolderRequest $request)
    {
        $request = $this->createFolderRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation createFolderAsync
     *
     * Create the folder
     *
     * @param Model\CreateFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createFolderAsync(Model\CreateFolderRequest $request)
    {
        return $this->createFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFolderAsyncWithHttpInfo
     *
     * Create the folder
     *
     * @param Model\CreateFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function createFolderAsyncWithHttpInfo(Model\CreateFolderRequest $request)
    {
        $request = $this->createFolderRequest($request);

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
     * Create request for operation 'createFolder'
     *
     * @param Model\CreateFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function createFolderRequest(Model\CreateFolderRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling createFolder'
            );
        }

        $resourcePath = '/email/storage/folder/{path}';
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
            'PUT',
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
     * Operation deleteFolder
     *
     * Delete folder
     *
     * @param Model\DeleteFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function deleteFolder(Model\DeleteFolderRequest $request)
    {
        try {
             $this->deleteFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->deleteFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation deleteFolderWithHttpInfo
     *
     * Delete folder
     *
     * @param Model\DeleteFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFolderWithHttpInfo(Model\DeleteFolderRequest $request)
    {
        $request = $this->deleteFolderRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation deleteFolderAsync
     *
     * Delete folder
     *
     * @param Model\DeleteFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteFolderAsync(Model\DeleteFolderRequest $request)
    {
        return $this->deleteFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteFolderAsyncWithHttpInfo
     *
     * Delete folder
     *
     * @param Model\DeleteFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteFolderAsyncWithHttpInfo(Model\DeleteFolderRequest $request)
    {
        $request = $this->deleteFolderRequest($request);

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
     * Create request for operation 'deleteFolder'
     *
     * @param Model\DeleteFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function deleteFolderRequest(Model\DeleteFolderRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling deleteFolder'
            );
        }

        $resourcePath = '/email/storage/folder/{path}';
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
        $paramValue = $request->recursive;
        $paramBaseName = 'recursive';
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
            'DELETE',
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
     * Operation getFilesList
     *
     * Get all files and folders within a folder
     *
     * @param Model\GetFilesListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\FilesList
     */
    public function getFilesList(Model\GetFilesListRequest $request)
    {
        try {
             list($response) = $this->getFilesListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getFilesListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getFilesListWithHttpInfo
     *
     * Get all files and folders within a folder
     *
     * @param Model\GetFilesListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\FilesList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFilesListWithHttpInfo(Model\GetFilesListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FilesList';
        $request = $this->getFilesListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getFilesListAsync
     *
     * Get all files and folders within a folder
     *
     * @param Model\GetFilesListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getFilesListAsync(Model\GetFilesListRequest $request)
    {
        return $this->getFilesListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFilesListAsyncWithHttpInfo
     *
     * Get all files and folders within a folder
     *
     * @param Model\GetFilesListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getFilesListAsyncWithHttpInfo(Model\GetFilesListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FilesList';
        $request = $this->getFilesListRequest($request);

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
     * Create request for operation 'getFilesList'
     *
     * @param Model\GetFilesListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getFilesListRequest(Model\GetFilesListRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling getFilesList'
            );
        }

        $resourcePath = '/email/storage/folder/{path}';
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
     * Operation moveFolder
     *
     * Move folder
     *
     * @param Model\MoveFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function moveFolder(Model\MoveFolderRequest $request)
    {
        try {
             $this->moveFolderWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->moveFolderWithHttpInfo($request);
        }
    }

    /**
     * Operation moveFolderWithHttpInfo
     *
     * Move folder
     *
     * @param Model\MoveFolderRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveFolderWithHttpInfo(Model\MoveFolderRequest $request)
    {
        $request = $this->moveFolderRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation moveFolderAsync
     *
     * Move folder
     *
     * @param Model\MoveFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function moveFolderAsync(Model\MoveFolderRequest $request)
    {
        return $this->moveFolderAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation moveFolderAsyncWithHttpInfo
     *
     * Move folder
     *
     * @param Model\MoveFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function moveFolderAsyncWithHttpInfo(Model\MoveFolderRequest $request)
    {
        $request = $this->moveFolderRequest($request);

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
     * Create request for operation 'moveFolder'
     *
     * @param Model\MoveFolderRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function moveFolderRequest(Model\MoveFolderRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $src_path when calling moveFolder'
            );
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $dest_path when calling moveFolder'
            );
        }

        $resourcePath = '/email/storage/folder/move/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // path params
        if ($request->src_path !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->src_path), $resourcePath);
        }

        // query params
        $paramValue = $request->dest_path;
        $paramBaseName = 'destPath';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->src_storage_name;
        $paramBaseName = 'srcStorageName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->dest_storage_name;
        $paramBaseName = 'destStorageName';
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
            'PUT',
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
