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
     * Operation emailAsFile
     *
     * Converts Email model to specified format and returns as file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function emailAsFile($request)
    {
        try {
             list($response) = $this->emailAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailAsFileWithHttpInfo
     *
     * Converts Email model to specified format and returns as file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function emailAsFileWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->emailAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation emailAsFileAsync
     *
     * Converts Email model to specified format and returns as file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailAsFileAsync($request)
    {
        return $this->emailAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailAsFileAsyncWithHttpInfo
     *
     * Converts Email model to specified format and returns as file.
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailAsFileAsyncWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->emailAsFileRequest($request);

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
     * Create request for operation 'emailAsFile'
     *
     * @param Model\EmailAsFileRequest $request Email model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailAsFileRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling emailAsFile'
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
     * Operation emailAsMapi
     *
     * Converts EmailDto to MapiMessageDto.
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiMessageDto
     */
    public function emailAsMapi($email_dto)
    {
        try {
             list($response) = $this->emailAsMapiWithHttpInfo($email_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailAsMapiWithHttpInfo($email_dto);
             return $response;
        }
    }

    /**
     * Operation emailAsMapiWithHttpInfo
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
    public function emailAsMapiWithHttpInfo($email_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->emailAsMapiRequest($email_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation emailAsMapiAsync
     *
     * Converts EmailDto to MapiMessageDto.
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailAsMapiAsync($email_dto)
    {
        return $this->emailAsMapiAsyncWithHttpInfo($email_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailAsMapiAsyncWithHttpInfo
     *
     * Converts EmailDto to MapiMessageDto.
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailAsMapiAsyncWithHttpInfo($email_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->emailAsMapiRequest($email_dto);

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
     * Create request for operation 'emailAsMapi'
     *
     * @param Model\EmailDto $email_dto Email model to convert
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailAsMapiRequest($email_dto)
    {
        // verify the required parameter '$email_dto' is set
        if ($email_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $email_dto when calling emailAsMapi'
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
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
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
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
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
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
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
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
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
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
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
     * Operation emailSave
     *
     * Save email document to storage.
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function emailSave($request)
    {
        try {
             $this->emailSaveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->emailSaveWithHttpInfo($request);
        }
    }

    /**
     * Operation emailSaveWithHttpInfo
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
    public function emailSaveWithHttpInfo($request)
    {
        $request = $this->emailSaveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation emailSaveAsync
     *
     * Save email document to storage.
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailSaveAsync($request)
    {
        return $this->emailSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailSaveAsyncWithHttpInfo
     *
     * Save email document to storage.
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailSaveAsyncWithHttpInfo($request)
    {
        $request = $this->emailSaveRequest($request);

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
     * Create request for operation 'emailSave'
     *
     * @param Model\EmailSaveRequest $request Email document create/update request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailSaveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling emailSave'
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
