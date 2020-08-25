<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FileApi.php">
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
 * FileApi Aspose.Email for Cloud API.
 */
class FileApi extends ApiBase
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
     * Operation copyFile
     *
     * Copy file
     *
     * @param Model\CopyFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function copyFile(Model\CopyFileRequest $request)
    {
        try {
             $this->copyFileWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->copyFileWithHttpInfo($request);
        }
    }

    /**
     * Operation copyFileWithHttpInfo
     *
     * Copy file
     *
     * @param Model\CopyFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function copyFileWithHttpInfo(Model\CopyFileRequest $request)
    {
        $returnType = '';
        $request = $this->copyFileRequest($request);

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
     * Operation copyFileAsync
     *
     * Copy file
     *
     * @param Model\CopyFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function copyFileAsync(Model\CopyFileRequest $request)
    {
        return $this->copyFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation copyFileAsyncWithHttpInfo
     *
     * Copy file
     *
     * @param Model\CopyFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function copyFileAsyncWithHttpInfo(Model\CopyFileRequest $request)
    {
        $returnType = '';
        $request = $this->copyFileRequest($request);

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
     * Create request for operation 'copyFile'
     *
     * @param Model\CopyFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function copyFileRequest(Model\CopyFileRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $src_path when calling copyFile'
            );
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $dest_path when calling copyFile'
            );
        }

        $resourcePath = '/email/storage/file/copy/{srcPath}';
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
        $paramValue = $request->version_id;
        $paramBaseName = 'versionId';
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
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }
            
    /**
     * Operation deleteFile
     *
     * Delete file
     *
     * @param Model\DeleteFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function deleteFile(Model\DeleteFileRequest $request)
    {
        try {
             $this->deleteFileWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->deleteFileWithHttpInfo($request);
        }
    }

    /**
     * Operation deleteFileWithHttpInfo
     *
     * Delete file
     *
     * @param Model\DeleteFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFileWithHttpInfo(Model\DeleteFileRequest $request)
    {
        $returnType = '';
        $request = $this->deleteFileRequest($request);

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
     * Operation deleteFileAsync
     *
     * Delete file
     *
     * @param Model\DeleteFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteFileAsync(Model\DeleteFileRequest $request)
    {
        return $this->deleteFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteFileAsyncWithHttpInfo
     *
     * Delete file
     *
     * @param Model\DeleteFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function deleteFileAsyncWithHttpInfo(Model\DeleteFileRequest $request)
    {
        $returnType = '';
        $request = $this->deleteFileRequest($request);

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
     * Create request for operation 'deleteFile'
     *
     * @param Model\DeleteFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function deleteFileRequest(Model\DeleteFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling deleteFile'
            );
        }

        $resourcePath = '/email/storage/file/{path}';
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
            'DELETE',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('DELETE', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }
            
    /**
     * Operation downloadFile
     *
     * Download file
     *
     * @param Model\DownloadFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function downloadFile(Model\DownloadFileRequest $request)
    {
        try {
             list($response) = $this->downloadFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->downloadFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation downloadFileWithHttpInfo
     *
     * Download file
     *
     * @param Model\DownloadFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadFileWithHttpInfo(Model\DownloadFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->downloadFileRequest($request);

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
     * Operation downloadFileAsync
     *
     * Download file
     *
     * @param Model\DownloadFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function downloadFileAsync(Model\DownloadFileRequest $request)
    {
        return $this->downloadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation downloadFileAsyncWithHttpInfo
     *
     * Download file
     *
     * @param Model\DownloadFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function downloadFileAsyncWithHttpInfo(Model\DownloadFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->downloadFileRequest($request);

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
     * Create request for operation 'downloadFile'
     *
     * @param Model\DownloadFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function downloadFileRequest(Model\DownloadFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling downloadFile'
            );
        }

        $resourcePath = '/email/storage/file/{path}';
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
     * Operation moveFile
     *
     * Move file
     *
     * @param Model\MoveFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function moveFile(Model\MoveFileRequest $request)
    {
        try {
             $this->moveFileWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->moveFileWithHttpInfo($request);
        }
    }

    /**
     * Operation moveFileWithHttpInfo
     *
     * Move file
     *
     * @param Model\MoveFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveFileWithHttpInfo(Model\MoveFileRequest $request)
    {
        $returnType = '';
        $request = $this->moveFileRequest($request);

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
     * Operation moveFileAsync
     *
     * Move file
     *
     * @param Model\MoveFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function moveFileAsync(Model\MoveFileRequest $request)
    {
        return $this->moveFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation moveFileAsyncWithHttpInfo
     *
     * Move file
     *
     * @param Model\MoveFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function moveFileAsyncWithHttpInfo(Model\MoveFileRequest $request)
    {
        $returnType = '';
        $request = $this->moveFileRequest($request);

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
     * Create request for operation 'moveFile'
     *
     * @param Model\MoveFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function moveFileRequest(Model\MoveFileRequest $request)
    {
        // verify the required parameter 'src_path' is set
        if ($request->src_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $src_path when calling moveFile'
            );
        }
        // verify the required parameter 'dest_path' is set
        if ($request->dest_path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $dest_path when calling moveFile'
            );
        }

        $resourcePath = '/email/storage/file/move/{srcPath}';
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
        $paramValue = $request->version_id;
        $paramBaseName = 'versionId';
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
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }
            
    /**
     * Operation uploadFile
     *
     * Upload file
     *
     * @param Model\UploadFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\FilesUploadResult
     */
    public function uploadFile(Model\UploadFileRequest $request)
    {
        try {
             list($response) = $this->uploadFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->uploadFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation uploadFileWithHttpInfo
     *
     * Upload file
     *
     * @param Model\UploadFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\FilesUploadResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadFileWithHttpInfo(Model\UploadFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FilesUploadResult';
        $request = $this->uploadFileRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\FilesUploadResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadFileAsync
     *
     * Upload file
     *
     * @param Model\UploadFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function uploadFileAsync(Model\UploadFileRequest $request)
    {
        return $this->uploadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadFileAsyncWithHttpInfo
     *
     * Upload file
     *
     * @param Model\UploadFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function uploadFileAsyncWithHttpInfo(Model\UploadFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\FilesUploadResult';
        $request = $this->uploadFileRequest($request);

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
     * Create request for operation 'uploadFile'
     *
     * @param Model\UploadFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function uploadFileRequest(Model\UploadFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $path when calling uploadFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling uploadFile'
            );
        }

        $resourcePath = '/email/storage/file/{path}';
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
            'PUT',
            $this->config->getHost() . $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->writeRequestLog('PUT', $this->config->getHost() . $resourcePath, $headers, $httpBody);
        }

        return $req;
    }
}
