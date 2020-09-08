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
     * Initialize a new instance of CalendarApi
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
     * Operation asAlternate
     *
     * Convert iCalendar to AlternateView
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AlternateView
     */
    public function asAlternate($request)
    {
        try {
             list($response) = $this->asAlternateWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->asAlternateWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation asAlternateWithHttpInfo
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
    public function asAlternateWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->asAlternateRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation asAlternateAsync
     *
     * Convert iCalendar to AlternateView
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asAlternateAsync($request)
    {
        return $this->asAlternateAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asAlternateAsyncWithHttpInfo
     *
     * Convert iCalendar to AlternateView
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asAlternateAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->asAlternateRequest($request);

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
     * Create request for operation 'asAlternate'
     *
     * @param Model\CalendarAsAlternateRequest $request iCalendar to AlternateView request
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function asAlternateRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling asAlternate'
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
     * Operation asFile
     *
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
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
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
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
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
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
     * Converts calendar model to specified format and returns as file.
     *
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
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
     * @param Model\CalendarAsFileRequest $request Calendar model and format to convert.
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
        $path = '/email/Calendar/as-file';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation asMapi
     *
     * Converts CalendarDto to MapiCalendarDto.
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiCalendarDto
     */
    public function asMapi($calendar_dto)
    {
        try {
             list($response) = $this->asMapiWithHttpInfo($calendar_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->asMapiWithHttpInfo($calendar_dto);
             return $response;
        }
    }

    /**
     * Operation asMapiWithHttpInfo
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
    public function asMapiWithHttpInfo($calendar_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->asMapiRequest($calendar_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation asMapiAsync
     *
     * Converts CalendarDto to MapiCalendarDto.
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asMapiAsync($calendar_dto)
    {
        return $this->asMapiAsyncWithHttpInfo($calendar_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asMapiAsyncWithHttpInfo
     *
     * Converts CalendarDto to MapiCalendarDto.
     *
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asMapiAsyncWithHttpInfo($calendar_dto)
    {
        $returnType = '\Aspose\Email\Model\MapiCalendarDto';
        $request = $this->asMapiRequest($calendar_dto);

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
     * @param Model\CalendarDto $calendar_dto iCalendar model calendar representation.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function asMapiRequest($calendar_dto)
    {
        // verify the required parameter '$calendar_dto' is set
        if ($calendar_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $calendar_dto when calling asMapi'
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
     * Operation convert
     *
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function convert(Model\CalendarConvertRequest $request)
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
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertWithHttpInfo(Model\CalendarConvertRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->convertRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation convertAsync
     *
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function convertAsync(Model\CalendarConvertRequest $request)
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
     * Converts calendar document to specified format and returns as file.
     *
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function convertAsyncWithHttpInfo(Model\CalendarConvertRequest $request)
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
     * @param Model\CalendarConvertRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function convertRequest(Model\CalendarConvertRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling convert'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling convert'
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
     * Operation fromFile
     *
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\CalendarDto
     */
    public function fromFile(Model\CalendarFromFileRequest $request)
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
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\CalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function fromFileWithHttpInfo(Model\CalendarFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->fromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation fromFileAsync
     *
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsync(Model\CalendarFromFileRequest $request)
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
     * Converts calendar document to a model representation.
     *
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsyncWithHttpInfo(Model\CalendarFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
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
     * @param Model\CalendarFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function fromFileRequest(Model\CalendarFromFileRequest $request)
    {
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling fromFile'
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
     * Operation get
     *
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\CalendarDto
     */
    public function get(Model\CalendarGetRequest $request)
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
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\CalendarDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo(Model\CalendarGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
        $request = $this->getRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsync
     *
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsync(Model\CalendarGetRequest $request)
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
     * Get calendar file from storage.
     *
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsyncWithHttpInfo(Model\CalendarGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarDto';
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
     * @param Model\CalendarGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getRequest(Model\CalendarGetRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling get'
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
     * Operation getAsAlternate
     *
     * Get iCalendar from storage as AlternateView
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AlternateView
     */
    public function getAsAlternate(Model\CalendarGetAsAlternateRequest $request)
    {
        try {
             list($response) = $this->getAsAlternateWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->getAsAlternateWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation getAsAlternateWithHttpInfo
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
    public function getAsAlternateWithHttpInfo(Model\CalendarGetAsAlternateRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->getAsAlternateRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsAlternateAsync
     *
     * Get iCalendar from storage as AlternateView
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsAlternateAsync(Model\CalendarGetAsAlternateRequest $request)
    {
        return $this->getAsAlternateAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsAlternateAsyncWithHttpInfo
     *
     * Get iCalendar from storage as AlternateView
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsAlternateAsyncWithHttpInfo(Model\CalendarGetAsAlternateRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AlternateView';
        $request = $this->getAsAlternateRequest($request);

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
     * Create request for operation 'getAsAlternate'
     *
     * @param Model\CalendarGetAsAlternateRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getAsAlternateRequest(Model\CalendarGetAsAlternateRequest $request)
    {
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling getAsAlternate'
            );
        }
        // verify the required parameter 'calendar_action' is set
        if ($request->calendar_action === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $calendar_action when calling getAsAlternate'
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
     * Operation getAsFile
     *
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function getAsFile(Model\CalendarGetAsFileRequest $request)
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
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAsFileWithHttpInfo(Model\CalendarGetAsFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->getAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsFileAsync
     *
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsFileAsync(Model\CalendarGetAsFileRequest $request)
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
     * Converts calendar document from storage to specified format and returns as file.
     *
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsFileAsyncWithHttpInfo(Model\CalendarGetAsFileRequest $request)
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
     * @param Model\CalendarGetAsFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getAsFileRequest(Model\CalendarGetAsFileRequest $request)
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
     * Operation getList
     *
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\CalendarStorageList
     */
    public function getList(Model\CalendarGetListRequest $request)
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
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\CalendarStorageList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListWithHttpInfo(Model\CalendarGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarStorageList';
        $request = $this->getListRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getListAsync
     *
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsync(Model\CalendarGetListRequest $request)
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
     * Get iCalendar list from storage folder.
     *
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getListAsyncWithHttpInfo(Model\CalendarGetListRequest $request)
    {
        $returnType = '\Aspose\Email\Model\CalendarStorageList';
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
     * @param Model\CalendarGetListRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getListRequest(Model\CalendarGetListRequest $request)
    {
        // verify the required parameter 'folder' is set
        if ($request->folder === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $folder when calling getList'
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
     * Operation save
     *
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
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
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
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
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
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
     * Save iCalendar
     *
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
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
     * @param Model\CalendarSaveRequest $request iCalendar create/update request
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
        $path = '/email/Calendar';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
