<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiMessageApi.php">
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
 * MapiMessageApi Aspose.Email for Cloud API.
 */
class MapiMessageApi extends ApiBase
{
    /**
     * Initialize a new instance of MapiMessageApi
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
     * Operation asEmailDto
     *
     * Converts MAPI message model to EmailDto model
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailDto
     */
    public function asEmailDto($mapi_message)
    {
        try {
             list($response) = $this->asEmailDtoWithHttpInfo($mapi_message);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->asEmailDtoWithHttpInfo($mapi_message);
             return $response;
        }
    }

    /**
     * Operation asEmailDtoWithHttpInfo
     *
     * Converts MAPI message model to EmailDto model
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function asEmailDtoWithHttpInfo($mapi_message)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->asEmailDtoRequest($mapi_message);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation asEmailDtoAsync
     *
     * Converts MAPI message model to EmailDto model
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asEmailDtoAsync($mapi_message)
    {
        return $this->asEmailDtoAsyncWithHttpInfo($mapi_message)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asEmailDtoAsyncWithHttpInfo
     *
     * Converts MAPI message model to EmailDto model
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asEmailDtoAsyncWithHttpInfo($mapi_message)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->asEmailDtoRequest($mapi_message);

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
     * Create request for operation 'asEmailDto'
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function asEmailDtoRequest($mapi_message)
    {
        // verify the required parameter '$mapi_message' is set
        if ($mapi_message === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $mapi_message when calling asEmailDto'
            );
        }

        // body params
        if (is_string($mapi_message)) {
            $httpBody = "\"" . $mapi_message . "\"";
        } else {
            $httpBody = $mapi_message;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/MapiMessage/as-email-dto';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation asFile
     *
     * Converts MAPI message model to specified format and returns as file.
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
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
     * Converts MAPI message model to specified format and returns as file.
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
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
     * Converts MAPI message model to specified format and returns as file.
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
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
     * Converts MAPI message model to specified format and returns as file.
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
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
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
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
        $path = '/email/MapiMessage/as-file';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation fromFile
     *
     * Converts email file to a MAPI model representation
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiMessageDto
     */
    public function fromFile(Model\MapiMessageFromFileRequest $request)
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
     * Converts email file to a MAPI model representation
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiMessageDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function fromFileWithHttpInfo(Model\MapiMessageFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->fromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation fromFileAsync
     *
     * Converts email file to a MAPI model representation
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsync(Model\MapiMessageFromFileRequest $request)
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
     * Converts email file to a MAPI model representation
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsyncWithHttpInfo(Model\MapiMessageFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
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
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function fromFileRequest(Model\MapiMessageFromFileRequest $request)
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

        $resourcePath = '/email/MapiMessage/from-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Get MAPI message document.
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiMessageDto
     */
    public function get(Model\MapiMessageGetRequest $request)
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
     * Get MAPI message document.
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiMessageDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo(Model\MapiMessageGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->getRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsync
     *
     * Get MAPI message document.
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsync(Model\MapiMessageGetRequest $request)
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
     * Get MAPI message document.
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsyncWithHttpInfo(Model\MapiMessageGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
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
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getRequest(Model\MapiMessageGetRequest $request)
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

        $resourcePath = '/email/MapiMessage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->file_name;
        $paramBaseName = 'fileName';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->storage;
        $paramBaseName = 'storage';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);

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
     * Save MAPI message to storage.
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
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
     * Save MAPI message to storage.
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
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
     * Save MAPI message to storage.
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
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
     * Save MAPI message to storage.
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
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
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
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
        $path = '/email/MapiMessage';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
