<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarApi.php">
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
 * MapiCalendarApi Aspose.Email for Cloud API.
 */
class MapiCalendarApi extends ApiBase
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
     * Operation mapiCalendarAsCalendarDto
     *
     * Converts MAPI calendar model to CalendarDto model.
     *
     * @param Model\MapiCalendarDto $mapi_calendar_dto MAPI calendar model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\CalendarDto
     */
    public function mapiCalendarAsCalendarDto($mapi_calendar_dto)
    {
        try {
             list($response) = $this->mapiCalendarAsCalendarDtoWithHttpInfo($mapi_calendar_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiCalendarAsCalendarDtoWithHttpInfo($mapi_calendar_dto);
             return $response;
        }
    }

    /**
     * Operation mapiCalendarAsCalendarDtoWithHttpInfo
     *
     * Converts MAPI calendar model to CalendarDto model.
     *
     * @param Model\MapiCalendarDto $mapi_calendar_dto MAPI calendar model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\CalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiCalendarAsCalendarDtoWithHttpInfo($mapi_calendar_dto)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->mapiCalendarAsCalendarDtoRequest($mapi_calendar_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiCalendarAsCalendarDtoAsync
     *
     * Converts MAPI calendar model to CalendarDto model.
     *
     * @param Model\MapiCalendarDto $mapi_calendar_dto MAPI calendar model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarAsCalendarDtoAsync($mapi_calendar_dto)
    {
        return $this->mapiCalendarAsCalendarDtoAsyncWithHttpInfo($mapi_calendar_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiCalendarAsCalendarDtoAsyncWithHttpInfo
     *
     * Converts MAPI calendar model to CalendarDto model.
     *
     * @param Model\MapiCalendarDto $mapi_calendar_dto MAPI calendar model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarAsCalendarDtoAsyncWithHttpInfo($mapi_calendar_dto)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->mapiCalendarAsCalendarDtoRequest($mapi_calendar_dto);

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
     * Create request for operation 'mapiCalendarAsCalendarDto'
     *
     * @param Model\MapiCalendarDto $mapi_calendar_dto MAPI calendar model to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiCalendarAsCalendarDtoRequest($mapi_calendar_dto)
    {
        // verify the required parameter '$mapi_calendar_dto' is set
        if ($mapi_calendar_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $mapi_calendar_dto when calling mapiCalendarAsCalendarDto'
            );
        }

        // body params
        if (is_string($mapi_calendar_dto)) {
            $httpBody = "\"" . $mapi_calendar_dto . "\"";
        } else {
            $httpBody = $mapi_calendar_dto;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/MapiCalendar/as-calendar-dto';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation mapiCalendarAsFile
     *
     * Converts MAPI calendar model to specified format and returns as file.
     *
     * @param Model\MapiCalendarAsFileRequest $request MAPI calendar model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function mapiCalendarAsFile($request)
    {
        try {
             list($response) = $this->mapiCalendarAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiCalendarAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiCalendarAsFileWithHttpInfo
     *
     * Converts MAPI calendar model to specified format and returns as file.
     *
     * @param Model\MapiCalendarAsFileRequest $request MAPI calendar model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiCalendarAsFileWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiCalendarAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiCalendarAsFileAsync
     *
     * Converts MAPI calendar model to specified format and returns as file.
     *
     * @param Model\MapiCalendarAsFileRequest $request MAPI calendar model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarAsFileAsync($request)
    {
        return $this->mapiCalendarAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiCalendarAsFileAsyncWithHttpInfo
     *
     * Converts MAPI calendar model to specified format and returns as file.
     *
     * @param Model\MapiCalendarAsFileRequest $request MAPI calendar model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarAsFileAsyncWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiCalendarAsFileRequest($request);

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
     * Create request for operation 'mapiCalendarAsFile'
     *
     * @param Model\MapiCalendarAsFileRequest $request MAPI calendar model to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiCalendarAsFileRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling mapiCalendarAsFile'
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
        $path = '/email/MapiCalendar/as-file';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation mapiCalendarFromFile
     *
     * Converts calendar file to a MAPI model representation.
     *
     * @param Model\MapiCalendarFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiCalendarDto
     */
    public function mapiCalendarFromFile(Model\MapiCalendarFromFileRequest $request)
    {
        try {
             list($response) = $this->mapiCalendarFromFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiCalendarFromFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiCalendarFromFileWithHttpInfo
     *
     * Converts calendar file to a MAPI model representation.
     *
     * @param Model\MapiCalendarFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiCalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiCalendarFromFileWithHttpInfo(Model\MapiCalendarFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->mapiCalendarFromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiCalendarFromFileAsync
     *
     * Converts calendar file to a MAPI model representation.
     *
     * @param Model\MapiCalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarFromFileAsync(Model\MapiCalendarFromFileRequest $request)
    {
        return $this->mapiCalendarFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiCalendarFromFileAsyncWithHttpInfo
     *
     * Converts calendar file to a MAPI model representation.
     *
     * @param Model\MapiCalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarFromFileAsyncWithHttpInfo(Model\MapiCalendarFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->mapiCalendarFromFileRequest($request);

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
     * Create request for operation 'mapiCalendarFromFile'
     *
     * @param Model\MapiCalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiCalendarFromFileRequest(Model\MapiCalendarFromFileRequest $request)
    {
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling mapiCalendarFromFile'
            );
        }

        $resourcePath = '/email/MapiCalendar/from-file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

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
     * Operation mapiCalendarGet
     *
     * Get MAPI calendar document.
     *
     * @param Model\MapiCalendarGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiCalendarDto
     */
    public function mapiCalendarGet(Model\MapiCalendarGetRequest $request)
    {
        try {
             list($response) = $this->mapiCalendarGetWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiCalendarGetWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiCalendarGetWithHttpInfo
     *
     * Get MAPI calendar document.
     *
     * @param Model\MapiCalendarGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiCalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiCalendarGetWithHttpInfo(Model\MapiCalendarGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->mapiCalendarGetRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiCalendarGetAsync
     *
     * Get MAPI calendar document.
     *
     * @param Model\MapiCalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarGetAsync(Model\MapiCalendarGetRequest $request)
    {
        return $this->mapiCalendarGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiCalendarGetAsyncWithHttpInfo
     *
     * Get MAPI calendar document.
     *
     * @param Model\MapiCalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarGetAsyncWithHttpInfo(Model\MapiCalendarGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->mapiCalendarGetRequest($request);

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
     * Create request for operation 'mapiCalendarGet'
     *
     * @param Model\MapiCalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiCalendarGetRequest(Model\MapiCalendarGetRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling mapiCalendarGet'
            );
        }

        $resourcePath = '/email/MapiCalendar';
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
     * Operation mapiCalendarSave
     *
     * Save MAPI Calendar to storage.
     *
     * @param Model\MapiCalendarSaveRequest $request Calendar create/update request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function mapiCalendarSave($request)
    {
        try {
             $this->mapiCalendarSaveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->mapiCalendarSaveWithHttpInfo($request);
        }
    }

    /**
     * Operation mapiCalendarSaveWithHttpInfo
     *
     * Save MAPI Calendar to storage.
     *
     * @param Model\MapiCalendarSaveRequest $request Calendar create/update request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function mapiCalendarSaveWithHttpInfo($request)
    {
        $request = $this->mapiCalendarSaveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation mapiCalendarSaveAsync
     *
     * Save MAPI Calendar to storage.
     *
     * @param Model\MapiCalendarSaveRequest $request Calendar create/update request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarSaveAsync($request)
    {
        return $this->mapiCalendarSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiCalendarSaveAsyncWithHttpInfo
     *
     * Save MAPI Calendar to storage.
     *
     * @param Model\MapiCalendarSaveRequest $request Calendar create/update request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiCalendarSaveAsyncWithHttpInfo($request)
    {
        $request = $this->mapiCalendarSaveRequest($request);

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
     * Create request for operation 'mapiCalendarSave'
     *
     * @param Model\MapiCalendarSaveRequest $request Calendar create/update request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiCalendarSaveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling mapiCalendarSave'
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
        $path = '/email/MapiCalendar';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
