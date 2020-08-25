<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailApi.php">
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
 * EmailApi Aspose.Email for Cloud API.
 */
class EmailApi extends ApiBase
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
     * Operation emailConvert
     *
     * Converts email document to specified format and returns as file
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function emailConvert(Model\EmailConvertRequest $request)
    {
        try {
             list($response) = $this->emailConvertWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailConvertWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailConvertWithHttpInfo
     *
     * Converts email document to specified format and returns as file
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailConvertWithHttpInfo(Model\EmailConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->emailConvertRequest($request);

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
     * Operation emailConvertAsync
     *
     * Converts email document to specified format and returns as file
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConvertAsync(Model\EmailConvertRequest $request)
    {
        return $this->emailConvertAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailConvertAsyncWithHttpInfo
     *
     * Converts email document to specified format and returns as file
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConvertAsyncWithHttpInfo(Model\EmailConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->emailConvertRequest($request);

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
     * Create request for operation 'emailConvert'
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailConvertRequest(Model\EmailConvertRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling emailConvert'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling emailConvert'
            );
        }

        $resourcePath = '/email/convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
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
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
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
            
    /**
     * Operation emailFromFile
     *
     * Converts email document to a model representation
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailDto
     */
    public function emailFromFile(Model\EmailFromFileRequest $request)
    {
        try {
             list($response) = $this->emailFromFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailFromFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailFromFileWithHttpInfo
     *
     * Converts email document to a model representation
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailFromFileWithHttpInfo(Model\EmailFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->emailFromFileRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\EmailDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation emailFromFileAsync
     *
     * Converts email document to a model representation
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailFromFileAsync(Model\EmailFromFileRequest $request)
    {
        return $this->emailFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailFromFileAsyncWithHttpInfo
     *
     * Converts email document to a model representation
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailFromFileAsyncWithHttpInfo(Model\EmailFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->emailFromFileRequest($request);

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
     * Create request for operation 'emailFromFile'
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailFromFileRequest(Model\EmailFromFileRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling emailFromFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling emailFromFile'
            );
        }

        $resourcePath = '/email/from-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
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
     * Operation emailGet
     *
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailDto
     */
    public function emailGet(Model\EmailGetRequest $request)
    {
        try {
             list($response) = $this->emailGetWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailGetWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailGetWithHttpInfo
     *
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailGetWithHttpInfo(Model\EmailGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->emailGetRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\EmailDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation emailGetAsync
     *
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailGetAsync(Model\EmailGetRequest $request)
    {
        return $this->emailGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailGetAsyncWithHttpInfo
     *
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailGetAsyncWithHttpInfo(Model\EmailGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->emailGetRequest($request);

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
     * Create request for operation 'emailGet'
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailGetRequest(Model\EmailGetRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling emailGet'
            );
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling emailGet'
            );
        }

        $resourcePath = '/email';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->file_name;
        $paramBaseName = 'fileName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
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
     * Operation emailGetAsFile
     *
     * Converts email document from storage to specified format and returns as file
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function emailGetAsFile(Model\EmailGetAsFileRequest $request)
    {
        try {
             list($response) = $this->emailGetAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailGetAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailGetAsFileWithHttpInfo
     *
     * Converts email document from storage to specified format and returns as file
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailGetAsFileWithHttpInfo(Model\EmailGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->emailGetAsFileRequest($request);

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
     * Operation emailGetAsFileAsync
     *
     * Converts email document from storage to specified format and returns as file
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailGetAsFileAsync(Model\EmailGetAsFileRequest $request)
    {
        return $this->emailGetAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailGetAsFileAsyncWithHttpInfo
     *
     * Converts email document from storage to specified format and returns as file
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailGetAsFileAsyncWithHttpInfo(Model\EmailGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->emailGetAsFileRequest($request);

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
     * Create request for operation 'emailGetAsFile'
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailGetAsFileRequest(Model\EmailGetAsFileRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling emailGetAsFile'
            );
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling emailGetAsFile'
            );
        }

        $resourcePath = '/email/as-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->file_name;
        $paramBaseName = 'fileName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
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
     * Operation emailGetList
     *
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailStorageList
     */
    public function emailGetList(Model\EmailGetListRequest $request)
    {
        try {
             list($response) = $this->emailGetListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailGetListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailGetListWithHttpInfo
     *
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailStorageList, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailGetListWithHttpInfo(Model\EmailGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailStorageList';
        $request = $this->emailGetListRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\EmailStorageList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation emailGetListAsync
     *
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailGetListAsync(Model\EmailGetListRequest $request)
    {
        return $this->emailGetListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailGetListAsyncWithHttpInfo
     *
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailGetListAsyncWithHttpInfo(Model\EmailGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailStorageList';
        $request = $this->emailGetListRequest($request);

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
     * Create request for operation 'emailGetList'
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailGetListRequest(Model\EmailGetListRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling emailGetList'
            );
        }

        $resourcePath = '/email/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->items_per_page;
        $paramBaseName = 'itemsPerPage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->page_number;
        $paramBaseName = 'pageNumber';
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
