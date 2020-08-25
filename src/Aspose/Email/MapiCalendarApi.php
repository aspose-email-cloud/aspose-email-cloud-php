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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\MapiCalendarDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\MapiCalendarDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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
