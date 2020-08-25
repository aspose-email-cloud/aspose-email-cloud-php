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
     * Operation mapiMessageAsEmailDto
     *
     * Converts MAPI message model to EmailDto model
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailDto
     */
    public function mapiMessageAsEmailDto($mapi_message)
    {
        try {
             list($response) = $this->mapiMessageAsEmailDtoWithHttpInfo($mapi_message);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiMessageAsEmailDtoWithHttpInfo($mapi_message);
             return $response;
        }
    }

    /**
     * Operation mapiMessageAsEmailDtoWithHttpInfo
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
    public function mapiMessageAsEmailDtoWithHttpInfo($mapi_message)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->mapiMessageAsEmailDtoRequest($mapi_message);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiMessageAsEmailDtoAsync
     *
     * Converts MAPI message model to EmailDto model
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageAsEmailDtoAsync($mapi_message)
    {
        return $this->mapiMessageAsEmailDtoAsyncWithHttpInfo($mapi_message)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiMessageAsEmailDtoAsyncWithHttpInfo
     *
     * Converts MAPI message model to EmailDto model
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageAsEmailDtoAsyncWithHttpInfo($mapi_message)
    {
        $returnType = '\Aspose\Email\Model\EmailDto';
        $request = $this->mapiMessageAsEmailDtoRequest($mapi_message);

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
     * Create request for operation 'mapiMessageAsEmailDto'
     *
     * @param Model\MapiMessageDto $mapi_message MAPI message model to convert
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiMessageAsEmailDtoRequest($mapi_message)
    {
        // verify the required parameter '$mapi_message' is set
        if ($mapi_message === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $mapi_message when calling mapiMessageAsEmailDto'
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
     * Operation mapiMessageAsFile
     *
     * Converts MAPI message model to specified format and returns as file.
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function mapiMessageAsFile($request)
    {
        try {
             list($response) = $this->mapiMessageAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiMessageAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiMessageAsFileWithHttpInfo
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
    public function mapiMessageAsFileWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiMessageAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiMessageAsFileAsync
     *
     * Converts MAPI message model to specified format and returns as file.
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageAsFileAsync($request)
    {
        return $this->mapiMessageAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiMessageAsFileAsyncWithHttpInfo
     *
     * Converts MAPI message model to specified format and returns as file.
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageAsFileAsyncWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiMessageAsFileRequest($request);

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
     * Create request for operation 'mapiMessageAsFile'
     *
     * @param Model\MapiMessageAsFileRequest $request MAPI message model to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiMessageAsFileRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling mapiMessageAsFile'
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
     * Operation mapiMessageFromFile
     *
     * Converts email file to a MAPI model representation
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiMessageDto
     */
    public function mapiMessageFromFile(Model\MapiMessageFromFileRequest $request)
    {
        try {
             list($response) = $this->mapiMessageFromFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiMessageFromFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiMessageFromFileWithHttpInfo
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
    public function mapiMessageFromFileWithHttpInfo(Model\MapiMessageFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->mapiMessageFromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiMessageFromFileAsync
     *
     * Converts email file to a MAPI model representation
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageFromFileAsync(Model\MapiMessageFromFileRequest $request)
    {
        return $this->mapiMessageFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiMessageFromFileAsyncWithHttpInfo
     *
     * Converts email file to a MAPI model representation
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageFromFileAsyncWithHttpInfo(Model\MapiMessageFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->mapiMessageFromFileRequest($request);

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
     * Create request for operation 'mapiMessageFromFile'
     *
     * @param Model\MapiMessageFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiMessageFromFileRequest(Model\MapiMessageFromFileRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling mapiMessageFromFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling mapiMessageFromFile'
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
     * Operation mapiMessageGet
     *
     * Get MAPI message document.
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiMessageDto
     */
    public function mapiMessageGet(Model\MapiMessageGetRequest $request)
    {
        try {
             list($response) = $this->mapiMessageGetWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiMessageGetWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiMessageGetWithHttpInfo
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
    public function mapiMessageGetWithHttpInfo(Model\MapiMessageGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->mapiMessageGetRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiMessageGetAsync
     *
     * Get MAPI message document.
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageGetAsync(Model\MapiMessageGetRequest $request)
    {
        return $this->mapiMessageGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiMessageGetAsyncWithHttpInfo
     *
     * Get MAPI message document.
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageGetAsyncWithHttpInfo(Model\MapiMessageGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiMessageDto';
        $request = $this->mapiMessageGetRequest($request);

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
     * Create request for operation 'mapiMessageGet'
     *
     * @param Model\MapiMessageGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiMessageGetRequest(Model\MapiMessageGetRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling mapiMessageGet'
            );
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling mapiMessageGet'
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
     * Operation mapiMessageSave
     *
     * Save MAPI message to storage.
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function mapiMessageSave($request)
    {
        try {
             $this->mapiMessageSaveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->mapiMessageSaveWithHttpInfo($request);
        }
    }

    /**
     * Operation mapiMessageSaveWithHttpInfo
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
    public function mapiMessageSaveWithHttpInfo($request)
    {
        $request = $this->mapiMessageSaveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation mapiMessageSaveAsync
     *
     * Save MAPI message to storage.
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageSaveAsync($request)
    {
        return $this->mapiMessageSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiMessageSaveAsyncWithHttpInfo
     *
     * Save MAPI message to storage.
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiMessageSaveAsyncWithHttpInfo($request)
    {
        $request = $this->mapiMessageSaveRequest($request);

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
     * Create request for operation 'mapiMessageSave'
     *
     * @param Model\MapiMessageSaveRequest $request Message create/update request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiMessageSaveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling mapiMessageSave'
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
