<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarApi.php">
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
 * CalendarApi Aspose.Email for Cloud API.
 */
class CalendarApi extends ApiBase
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
     * Operation calendarAsAlternate
     *
     * Convert iCalendar to AlternateView
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AlternateView
     */
    public function calendarAsAlternate($request)
    {
        try {
             list($response) = $this->calendarAsAlternateWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarAsAlternateWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarAsAlternateWithHttpInfo
     *
     * Convert iCalendar to AlternateView
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AlternateView, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarAsAlternateWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->calendarAsAlternateRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarAsAlternateAsync
     *
     * Convert iCalendar to AlternateView
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarAsAlternateAsync($request)
    {
        return $this->calendarAsAlternateAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarAsAlternateAsyncWithHttpInfo
     *
     * Convert iCalendar to AlternateView
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarAsAlternateAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->calendarAsAlternateRequest($request);

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
     * Create request for operation 'calendarAsAlternate'
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarAsAlternateRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling calendarAsAlternate'
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
        $path = '/email/Calendar/as-alternate';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation calendarAsFile
     *
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function calendarAsFile($request)
    {
        try {
             list($response) = $this->calendarAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarAsFileWithHttpInfo
     *
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarAsFileWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->calendarAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarAsFileAsync
     *
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarAsFileAsync($request)
    {
        return $this->calendarAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarAsFileAsyncWithHttpInfo
     *
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarAsFileAsyncWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->calendarAsFileRequest($request);

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
     * Create request for operation 'calendarAsFile'
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarAsFileRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling calendarAsFile'
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
        $path = '/email/Calendar/as-file';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation calendarAsMapi
     *
     * Converts CalendarDto to MapiCalendarDto.
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiCalendarDto
     */
    public function calendarAsMapi($calendar_dto)
    {
        try {
             list($response) = $this->calendarAsMapiWithHttpInfo($calendar_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarAsMapiWithHttpInfo($calendar_dto);
             return $response;
        }
    }

    /**
     * Operation calendarAsMapiWithHttpInfo
     *
     * Converts CalendarDto to MapiCalendarDto.
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiCalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarAsMapiWithHttpInfo($calendar_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->calendarAsMapiRequest($calendar_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarAsMapiAsync
     *
     * Converts CalendarDto to MapiCalendarDto.
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarAsMapiAsync($calendar_dto)
    {
        return $this->calendarAsMapiAsyncWithHttpInfo($calendar_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarAsMapiAsyncWithHttpInfo
     *
     * Converts CalendarDto to MapiCalendarDto.
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarAsMapiAsyncWithHttpInfo($calendar_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->calendarAsMapiRequest($calendar_dto);

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
     * Create request for operation 'calendarAsMapi'
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarAsMapiRequest($calendar_dto)
    {
        // verify the required parameter '$calendar_dto' is set
        if ($calendar_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $calendar_dto when calling calendarAsMapi'
            );
        }

        // body params
        if (is_string($calendar_dto)) {
            $httpBody = "\"" . $calendar_dto . "\"";
        } else {
            $httpBody = $calendar_dto;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/Calendar/as-mapi';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation calendarConvert
     *
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function calendarConvert(Model\CalendarConvertRequest $request)
    {
        try {
             list($response) = $this->calendarConvertWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarConvertWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarConvertWithHttpInfo
     *
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarConvertWithHttpInfo(Model\CalendarConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->calendarConvertRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarConvertAsync
     *
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarConvertAsync(Model\CalendarConvertRequest $request)
    {
        return $this->calendarConvertAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarConvertAsyncWithHttpInfo
     *
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarConvertAsyncWithHttpInfo(Model\CalendarConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->calendarConvertRequest($request);

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
     * Create request for operation 'calendarConvert'
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarConvertRequest(Model\CalendarConvertRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling calendarConvert'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling calendarConvert'
            );
        }

        $resourcePath = '/email/Calendar/convert';
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
     * Operation calendarFromFile
     *
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\CalendarDto
     */
    public function calendarFromFile(Model\CalendarFromFileRequest $request)
    {
        try {
             list($response) = $this->calendarFromFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarFromFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarFromFileWithHttpInfo
     *
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\CalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarFromFileWithHttpInfo(Model\CalendarFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->calendarFromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarFromFileAsync
     *
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarFromFileAsync(Model\CalendarFromFileRequest $request)
    {
        return $this->calendarFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarFromFileAsyncWithHttpInfo
     *
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarFromFileAsyncWithHttpInfo(Model\CalendarFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->calendarFromFileRequest($request);

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
     * Create request for operation 'calendarFromFile'
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarFromFileRequest(Model\CalendarFromFileRequest $request)
    {
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling calendarFromFile'
            );
        }

        $resourcePath = '/email/Calendar/from-file';
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
     * Operation calendarGet
     *
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\CalendarDto
     */
    public function calendarGet(Model\CalendarGetRequest $request)
    {
        try {
             list($response) = $this->calendarGetWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarGetWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarGetWithHttpInfo
     *
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\CalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarGetWithHttpInfo(Model\CalendarGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->calendarGetRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarGetAsync
     *
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetAsync(Model\CalendarGetRequest $request)
    {
        return $this->calendarGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarGetAsyncWithHttpInfo
     *
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetAsyncWithHttpInfo(Model\CalendarGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->calendarGetRequest($request);

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
     * Create request for operation 'calendarGet'
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarGetRequest(Model\CalendarGetRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling calendarGet'
            );
        }

        $resourcePath = '/email/Calendar';
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
     * Operation calendarGetAsAlternate
     *
     * Get iCalendar from storage as AlternateView
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AlternateView
     */
    public function calendarGetAsAlternate(Model\CalendarGetAsAlternateRequest $request)
    {
        try {
             list($response) = $this->calendarGetAsAlternateWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarGetAsAlternateWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarGetAsAlternateWithHttpInfo
     *
     * Get iCalendar from storage as AlternateView
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AlternateView, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarGetAsAlternateWithHttpInfo(Model\CalendarGetAsAlternateRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->calendarGetAsAlternateRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarGetAsAlternateAsync
     *
     * Get iCalendar from storage as AlternateView
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetAsAlternateAsync(Model\CalendarGetAsAlternateRequest $request)
    {
        return $this->calendarGetAsAlternateAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarGetAsAlternateAsyncWithHttpInfo
     *
     * Get iCalendar from storage as AlternateView
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetAsAlternateAsyncWithHttpInfo(Model\CalendarGetAsAlternateRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->calendarGetAsAlternateRequest($request);

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
     * Create request for operation 'calendarGetAsAlternate'
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarGetAsAlternateRequest(Model\CalendarGetAsAlternateRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling calendarGetAsAlternate'
            );
        }
        // verify the required parameter 'calendar_action' is set
        if ($request->calendar_action === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $calendar_action when calling calendarGetAsAlternate'
            );
        }

        $resourcePath = '/email/Calendar/as-alternate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->file_name;
        $paramBaseName = 'fileName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->calendar_action;
        $paramBaseName = 'calendarAction';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->sequence_id;
        $paramBaseName = 'sequenceId';
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
     * Operation calendarGetAsFile
     *
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function calendarGetAsFile(Model\CalendarGetAsFileRequest $request)
    {
        try {
             list($response) = $this->calendarGetAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarGetAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarGetAsFileWithHttpInfo
     *
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarGetAsFileWithHttpInfo(Model\CalendarGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->calendarGetAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarGetAsFileAsync
     *
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetAsFileAsync(Model\CalendarGetAsFileRequest $request)
    {
        return $this->calendarGetAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarGetAsFileAsyncWithHttpInfo
     *
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetAsFileAsyncWithHttpInfo(Model\CalendarGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->calendarGetAsFileRequest($request);

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
     * Create request for operation 'calendarGetAsFile'
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarGetAsFileRequest(Model\CalendarGetAsFileRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling calendarGetAsFile'
            );
        }
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling calendarGetAsFile'
            );
        }

        $resourcePath = '/email/Calendar/as-file';
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
     * Operation calendarGetList
     *
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\CalendarStorageList
     */
    public function calendarGetList(Model\CalendarGetListRequest $request)
    {
        try {
             list($response) = $this->calendarGetListWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->calendarGetListWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation calendarGetListWithHttpInfo
     *
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\CalendarStorageList, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarGetListWithHttpInfo(Model\CalendarGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarStorageList';
        $request = $this->calendarGetListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation calendarGetListAsync
     *
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetListAsync(Model\CalendarGetListRequest $request)
    {
        return $this->calendarGetListAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarGetListAsyncWithHttpInfo
     *
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarGetListAsyncWithHttpInfo(Model\CalendarGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarStorageList';
        $request = $this->calendarGetListRequest($request);

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
     * Create request for operation 'calendarGetList'
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarGetListRequest(Model\CalendarGetListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder when calling calendarGetList'
            );
        }

        $resourcePath = '/email/Calendar/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->folder;
        $paramBaseName = 'folder';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->items_per_page;
        $paramBaseName = 'itemsPerPage';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->page_number;
        $paramBaseName = 'pageNumber';
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
     * Operation calendarSave
     *
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function calendarSave($request)
    {
        try {
             $this->calendarSaveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->calendarSaveWithHttpInfo($request);
        }
    }

    /**
     * Operation calendarSaveWithHttpInfo
     *
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function calendarSaveWithHttpInfo($request)
    {
        $request = $this->calendarSaveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation calendarSaveAsync
     *
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarSaveAsync($request)
    {
        return $this->calendarSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation calendarSaveAsyncWithHttpInfo
     *
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function calendarSaveAsyncWithHttpInfo($request)
    {
        $request = $this->calendarSaveRequest($request);

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
     * Create request for operation 'calendarSave'
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function calendarSaveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling calendarSave'
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
        $path = '/email/Calendar';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
