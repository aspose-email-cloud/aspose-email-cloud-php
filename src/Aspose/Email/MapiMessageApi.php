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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\MapiMessageDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\MapiMessageDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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
