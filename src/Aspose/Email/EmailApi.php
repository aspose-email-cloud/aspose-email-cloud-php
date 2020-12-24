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
     * Operation asFile
     *
     * Converts Email model to a specified format and returns as a file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function asFile($request)
    {
        try {
             list($response) = $this->asFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->asFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation asFileWithHttpInfo
     *
     * Converts Email model to a specified format and returns as a file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function asFileWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->asFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation asFileAsync
     *
     * Converts Email model to a specified format and returns as a file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asFileAsync($request)
    {
        return $this->asFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asFileAsyncWithHttpInfo
     *
     * Converts Email model to a specified format and returns as a file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asFileAsyncWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->asFileRequest($request);

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
     * Create request for operation 'asFile'
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function asFileRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling asFile'
            );
        }

        // body params
        if (is_string($request)) {
            $httpBody = "\"" . $request . "\"";
        } else {
            $httpBody = $request;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['multipart/form-data'],
            ['application/json']
        );
        $path = '/email/as-file';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }

    /**
     * Operation asMapi
     *
     * Converts EmailDto to MapiMessageDto.
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiMessageDto
     */
    public function asMapi($email_dto)
    {
        try {
             list($response) = $this->asMapiWithHttpInfo($email_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->asMapiWithHttpInfo($email_dto);
             return $response;
        }
    }

    /**
     * Operation asMapiWithHttpInfo
     *
     * Converts EmailDto to MapiMessageDto.
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiMessageDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function asMapiWithHttpInfo($email_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->asMapiRequest($email_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation asMapiAsync
     *
     * Converts EmailDto to MapiMessageDto.
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asMapiAsync($email_dto)
    {
        return $this->asMapiAsyncWithHttpInfo($email_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asMapiAsyncWithHttpInfo
     *
     * Converts EmailDto to MapiMessageDto.
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asMapiAsyncWithHttpInfo($email_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->asMapiRequest($email_dto);

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
     * Create request for operation 'asMapi'
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function asMapiRequest($email_dto)
    {
        // verify the required parameter '$email_dto' is set
        if ($email_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $email_dto when calling asMapi'
            );
        }

        // body params
        if (is_string($email_dto)) {
            $httpBody = "\"" . $email_dto . "\"";
        } else {
            $httpBody = $email_dto;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/as-mapi';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }

    /**
     * Operation convert
     *
     * Converts email document to specified format and returns as file
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function convert(Model\EmailConvertRequest $request)
    {
        try {
             list($response) = $this->convertWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->convertWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation convertWithHttpInfo
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
    public function convertWithHttpInfo(Model\EmailConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->convertRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation convertAsync
     *
     * Converts email document to specified format and returns as file
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function convertAsync(Model\EmailConvertRequest $request)
    {
        return $this->convertAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation convertAsyncWithHttpInfo
     *
     * Converts email document to specified format and returns as file
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function convertAsyncWithHttpInfo(Model\EmailConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->convertRequest($request);

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
     * Create request for operation 'convert'
     *
     * @param Model\EmailConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function convertRequest(Model\EmailConvertRequest $request)
    {
        // verify the required parameter 'from_format' is set
        if ($request->from_format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $from_format when calling convert'
            );
        }
        // verify the required parameter 'to_format' is set
        if ($request->to_format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $to_format when calling convert'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling convert'
            );
        }

        $resourcePath = '/email/convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->from_format;
        $paramBaseName = 'fromFormat';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->to_format;
        $paramBaseName = 'toFormat';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['multipart/form-data']
            );
        }
        return $this->toClientRequest(
            'PUT',
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
     * Operation fromFile
     *
     * Converts email document to a model representation
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailDto
     */
    public function fromFile(Model\EmailFromFileRequest $request)
    {
        try {
             list($response) = $this->fromFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->fromFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation fromFileWithHttpInfo
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
    public function fromFileWithHttpInfo(Model\EmailFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->fromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation fromFileAsync
     *
     * Converts email document to a model representation
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsync(Model\EmailFromFileRequest $request)
    {
        return $this->fromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fromFileAsyncWithHttpInfo
     *
     * Converts email document to a model representation
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsyncWithHttpInfo(Model\EmailFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->fromFileRequest($request);

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
     * Create request for operation 'fromFile'
     *
     * @param Model\EmailFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function fromFileRequest(Model\EmailFromFileRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling fromFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling fromFile'
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
            'PUT',
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
     * Operation get
     *
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailDto
     */
    public function get(Model\EmailGetRequest $request)
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
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo(Model\EmailGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->getRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsync
     *
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsync(Model\EmailGetRequest $request)
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
     * Get email document from storage.
     *
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsyncWithHttpInfo(Model\EmailGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
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
     * @param Model\EmailGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getRequest(Model\EmailGetRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling get'
            );
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling get'
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
     * Operation getAsFile
     *
     * Converts email document from storage to specified format and returns as file
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function getAsFile(Model\EmailGetAsFileRequest $request)
    {
        try {
             list($response) = $this->getAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getAsFileWithHttpInfo
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
    public function getAsFileWithHttpInfo(Model\EmailGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsFileAsync
     *
     * Converts email document from storage to specified format and returns as file
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsFileAsync(Model\EmailGetAsFileRequest $request)
    {
        return $this->getAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsFileAsyncWithHttpInfo
     *
     * Converts email document from storage to specified format and returns as file
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsFileAsyncWithHttpInfo(Model\EmailGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getAsFileRequest($request);

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
     * Create request for operation 'getAsFile'
     *
     * @param Model\EmailGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getAsFileRequest(Model\EmailGetAsFileRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling getAsFile'
            );
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling getAsFile'
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
     * Operation getList
     *
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailStorageList
     */
    public function getList(Model\EmailGetListRequest $request)
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
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailStorageList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListWithHttpInfo(Model\EmailGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailStorageList';
        $request = $this->getListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getListAsync
     *
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsync(Model\EmailGetListRequest $request)
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
     * Get email list from storage folder.
     *
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsyncWithHttpInfo(Model\EmailGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailStorageList';
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
     * @param Model\EmailGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getListRequest(Model\EmailGetListRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling getList'
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
     * Save email document to storage.
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
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
     * Save email document to storage.
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
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
     * Save email document to storage.
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
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
     * Save email document to storage.
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
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
     * @param Model\EmailSaveRequest $request Email document create/update request.
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
        $path = '/email';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
