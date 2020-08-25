<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContactApi.php">
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
 * ContactApi Aspose.Email for Cloud API.
 */
class ContactApi extends ApiBase
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
     * Operation contactAsFile
     *
     * Converts contact model to specified format and returns as file
     *
     * @param Model\ContactAsFileRequest $request Contact model and format to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function contactAsFile($request)
    {
        try {
             list($response) = $this->contactAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->contactAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation contactAsFileWithHttpInfo
     *
     * Converts contact model to specified format and returns as file
     *
     * @param Model\ContactAsFileRequest $request Contact model and format to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactAsFileWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->contactAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation contactAsFileAsync
     *
     * Converts contact model to specified format and returns as file
     *
     * @param Model\ContactAsFileRequest $request Contact model and format to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactAsFileAsync($request)
    {
        return $this->contactAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactAsFileAsyncWithHttpInfo
     *
     * Converts contact model to specified format and returns as file
     *
     * @param Model\ContactAsFileRequest $request Contact model and format to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactAsFileAsyncWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->contactAsFileRequest($request);

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
     * Create request for operation 'contactAsFile'
     *
     * @param Model\ContactAsFileRequest $request Contact model and format to convert
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactAsFileRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling contactAsFile'
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
        $path = '/email/Contact/as-file';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation contactAsMapi
     *
     * Converts ContactDto to MapiContactDto.
     *
     * @param Model\ContactDto $contact_dto Contact model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiContactDto
     */
    public function contactAsMapi($contact_dto)
    {
        try {
             list($response) = $this->contactAsMapiWithHttpInfo($contact_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->contactAsMapiWithHttpInfo($contact_dto);
             return $response;
        }
    }

    /**
     * Operation contactAsMapiWithHttpInfo
     *
     * Converts ContactDto to MapiContactDto.
     *
     * @param Model\ContactDto $contact_dto Contact model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactAsMapiWithHttpInfo($contact_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->contactAsMapiRequest($contact_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation contactAsMapiAsync
     *
     * Converts ContactDto to MapiContactDto.
     *
     * @param Model\ContactDto $contact_dto Contact model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactAsMapiAsync($contact_dto)
    {
        return $this->contactAsMapiAsyncWithHttpInfo($contact_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactAsMapiAsyncWithHttpInfo
     *
     * Converts ContactDto to MapiContactDto.
     *
     * @param Model\ContactDto $contact_dto Contact model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactAsMapiAsyncWithHttpInfo($contact_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->contactAsMapiRequest($contact_dto);

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
     * Create request for operation 'contactAsMapi'
     *
     * @param Model\ContactDto $contact_dto Contact model to convert
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactAsMapiRequest($contact_dto)
    {
        // verify the required parameter '$contact_dto' is set
        if ($contact_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $contact_dto when calling contactAsMapi'
            );
        }

        // body params
        if (is_string($contact_dto)) {
            $httpBody = "\"" . $contact_dto . "\"";
        } else {
            $httpBody = $contact_dto;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/Contact/as-mapi';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation contactConvert
     *
     * Converts contact document to specified format and returns as file
     *
     * @param Model\ContactConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function contactConvert(Model\ContactConvertRequest $request)
    {
        try {
             list($response) = $this->contactConvertWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->contactConvertWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation contactConvertWithHttpInfo
     *
     * Converts contact document to specified format and returns as file
     *
     * @param Model\ContactConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactConvertWithHttpInfo(Model\ContactConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->contactConvertRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation contactConvertAsync
     *
     * Converts contact document to specified format and returns as file
     *
     * @param Model\ContactConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactConvertAsync(Model\ContactConvertRequest $request)
    {
        return $this->contactConvertAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactConvertAsyncWithHttpInfo
     *
     * Converts contact document to specified format and returns as file
     *
     * @param Model\ContactConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactConvertAsyncWithHttpInfo(Model\ContactConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->contactConvertRequest($request);

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
     * Create request for operation 'contactConvert'
     *
     * @param Model\ContactConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactConvertRequest(Model\ContactConvertRequest $request)
    {
        // verify the required parameter 'to_format' is set
        if ($request->to_format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $to_format when calling contactConvert'
            );
        }
        // verify the required parameter 'from_format' is set
        if ($request->from_format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $from_format when calling contactConvert'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling contactConvert'
            );
        }

        $resourcePath = '/email/Contact/convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->to_format;
        $paramBaseName = 'toFormat';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->from_format;
        $paramBaseName = 'fromFormat';
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
     * Operation contactFromFile
     *
     * Converts contact document to a model representation
     *
     * @param Model\ContactFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ContactDto
     */
    public function contactFromFile(Model\ContactFromFileRequest $request)
    {
        try {
             list($response) = $this->contactFromFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->contactFromFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation contactFromFileWithHttpInfo
     *
     * Converts contact document to a model representation
     *
     * @param Model\ContactFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactFromFileWithHttpInfo(Model\ContactFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->contactFromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation contactFromFileAsync
     *
     * Converts contact document to a model representation
     *
     * @param Model\ContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactFromFileAsync(Model\ContactFromFileRequest $request)
    {
        return $this->contactFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactFromFileAsyncWithHttpInfo
     *
     * Converts contact document to a model representation
     *
     * @param Model\ContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactFromFileAsyncWithHttpInfo(Model\ContactFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->contactFromFileRequest($request);

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
     * Create request for operation 'contactFromFile'
     *
     * @param Model\ContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactFromFileRequest(Model\ContactFromFileRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling contactFromFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling contactFromFile'
            );
        }

        $resourcePath = '/email/Contact/from-file';
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
     * Operation contactGet
     *
     * Get contact document from storage.
     *
     * @param Model\ContactGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ContactDto
     */
    public function contactGet(Model\ContactGetRequest $request)
    {
        try {
             list($response) = $this->contactGetWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->contactGetWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation contactGetWithHttpInfo
     *
     * Get contact document from storage.
     *
     * @param Model\ContactGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactGetWithHttpInfo(Model\ContactGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->contactGetRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation contactGetAsync
     *
     * Get contact document from storage.
     *
     * @param Model\ContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactGetAsync(Model\ContactGetRequest $request)
    {
        return $this->contactGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactGetAsyncWithHttpInfo
     *
     * Get contact document from storage.
     *
     * @param Model\ContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactGetAsyncWithHttpInfo(Model\ContactGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->contactGetRequest($request);

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
     * Create request for operation 'contactGet'
     *
     * @param Model\ContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactGetRequest(Model\ContactGetRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling contactGet'
            );
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling contactGet'
            );
        }

        $resourcePath = '/email/Contact';
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
     * Operation contactGetAsFile
     *
     * Converts contact document from storage to specified format and returns as file
     *
     * @param Model\ContactGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function contactGetAsFile(Model\ContactGetAsFileRequest $request)
    {
        try {
             list($response) = $this->contactGetAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->contactGetAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation contactGetAsFileWithHttpInfo
     *
     * Converts contact document from storage to specified format and returns as file
     *
     * @param Model\ContactGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactGetAsFileWithHttpInfo(Model\ContactGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->contactGetAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation contactGetAsFileAsync
     *
     * Converts contact document from storage to specified format and returns as file
     *
     * @param Model\ContactGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactGetAsFileAsync(Model\ContactGetAsFileRequest $request)
    {
        return $this->contactGetAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactGetAsFileAsyncWithHttpInfo
     *
     * Converts contact document from storage to specified format and returns as file
     *
     * @param Model\ContactGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactGetAsFileAsyncWithHttpInfo(Model\ContactGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->contactGetAsFileRequest($request);

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
     * Create request for operation 'contactGetAsFile'
     *
     * @param Model\ContactGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactGetAsFileRequest(Model\ContactGetAsFileRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling contactGetAsFile'
            );
        }
        // verify the required parameter 'to_format' is set
        if ($request->to_format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $to_format when calling contactGetAsFile'
            );
        }
        // verify the required parameter 'from_format' is set
        if ($request->from_format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $from_format when calling contactGetAsFile'
            );
        }

        $resourcePath = '/email/Contact/as-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->file_name;
        $paramBaseName = 'fileName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->to_format;
        $paramBaseName = 'toFormat';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->from_format;
        $paramBaseName = 'fromFormat';
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
     * Operation contactGetList
     *
     * Get contact list from storage folder.
     *
     * @param Model\ContactGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ContactStorageList
     */
    public function contactGetList(Model\ContactGetListRequest $request)
    {
        try {
             list($response) = $this->contactGetListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->contactGetListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation contactGetListWithHttpInfo
     *
     * Get contact list from storage folder.
     *
     * @param Model\ContactGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ContactStorageList, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactGetListWithHttpInfo(Model\ContactGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactStorageList';
        $request = $this->contactGetListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation contactGetListAsync
     *
     * Get contact list from storage folder.
     *
     * @param Model\ContactGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactGetListAsync(Model\ContactGetListRequest $request)
    {
        return $this->contactGetListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactGetListAsyncWithHttpInfo
     *
     * Get contact list from storage folder.
     *
     * @param Model\ContactGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactGetListAsyncWithHttpInfo(Model\ContactGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactStorageList';
        $request = $this->contactGetListRequest($request);

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
     * Create request for operation 'contactGetList'
     *
     * @param Model\ContactGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactGetListRequest(Model\ContactGetListRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling contactGetList'
            );
        }

        $resourcePath = '/email/Contact/list';
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
     * Operation contactSave
     *
     * Save contact to storage.
     *
     * @param Model\ContactSaveRequest $request Create/Update contact request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function contactSave($request)
    {
        try {
             $this->contactSaveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->contactSaveWithHttpInfo($request);
        }
    }

    /**
     * Operation contactSaveWithHttpInfo
     *
     * Save contact to storage.
     *
     * @param Model\ContactSaveRequest $request Create/Update contact request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactSaveWithHttpInfo($request)
    {
        $request = $this->contactSaveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation contactSaveAsync
     *
     * Save contact to storage.
     *
     * @param Model\ContactSaveRequest $request Create/Update contact request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactSaveAsync($request)
    {
        return $this->contactSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactSaveAsyncWithHttpInfo
     *
     * Save contact to storage.
     *
     * @param Model\ContactSaveRequest $request Create/Update contact request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contactSaveAsyncWithHttpInfo($request)
    {
        $request = $this->contactSaveRequest($request);

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
     * Create request for operation 'contactSave'
     *
     * @param Model\ContactSaveRequest $request Create/Update contact request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function contactSaveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling contactSave'
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
        $path = '/email/Contact';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
