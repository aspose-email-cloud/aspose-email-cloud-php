<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiBcrApi.php">
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
 * AiBcrApi Aspose.Email for Cloud API.
 */
class AiBcrApi extends ApiBase
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
     * Operation aiBcrParse
     *
     * Parse images to vCard document models
     *
     * @param Model\AiBcrParseRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ContactList
     */
    public function aiBcrParse(Model\AiBcrParseRequest $request)
    {
        try {
             list($response) = $this->aiBcrParseWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiBcrParseWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiBcrParseWithHttpInfo
     *
     * Parse images to vCard document models
     *
     * @param Model\AiBcrParseRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ContactList, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrParseWithHttpInfo(Model\AiBcrParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactList';
        $request = $this->aiBcrParseRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation aiBcrParseAsync
     *
     * Parse images to vCard document models
     *
     * @param Model\AiBcrParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiBcrParseAsync(Model\AiBcrParseRequest $request)
    {
        return $this->aiBcrParseAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiBcrParseAsyncWithHttpInfo
     *
     * Parse images to vCard document models
     *
     * @param Model\AiBcrParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiBcrParseAsyncWithHttpInfo(Model\AiBcrParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ContactList';
        $request = $this->aiBcrParseRequest($request);

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
     * Create request for operation 'aiBcrParse'
     *
     * @param Model\AiBcrParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiBcrParseRequest(Model\AiBcrParseRequest $request)
    {
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling aiBcrParse'
            );
        }

        $resourcePath = '/email/AiBcr/parse';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->countries;
        $paramBaseName = 'countries';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->languages;
        $paramBaseName = 'languages';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->is_single;
        $paramBaseName = 'isSingle';
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
     * Operation aiBcrParseStorage
     *
     * Parse images from storage to vCard files
     *
     * @param Model\AiBcrParseStorageRequest $request Request with images located on storage
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\StorageFileLocationList
     */
    public function aiBcrParseStorage($request)
    {
        try {
             list($response) = $this->aiBcrParseStorageWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiBcrParseStorageWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiBcrParseStorageWithHttpInfo
     *
     * Parse images from storage to vCard files
     *
     * @param Model\AiBcrParseStorageRequest $request Request with images located on storage
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\StorageFileLocationList, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiBcrParseStorageWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\StorageFileLocationList';
        $request = $this->aiBcrParseStorageRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation aiBcrParseStorageAsync
     *
     * Parse images from storage to vCard files
     *
     * @param Model\AiBcrParseStorageRequest $request Request with images located on storage
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiBcrParseStorageAsync($request)
    {
        return $this->aiBcrParseStorageAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiBcrParseStorageAsyncWithHttpInfo
     *
     * Parse images from storage to vCard files
     *
     * @param Model\AiBcrParseStorageRequest $request Request with images located on storage
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiBcrParseStorageAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\StorageFileLocationList';
        $request = $this->aiBcrParseStorageRequest($request);

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
     * Create request for operation 'aiBcrParseStorage'
     *
     * @param Model\AiBcrParseStorageRequest $request Request with images located on storage
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiBcrParseStorageRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling aiBcrParseStorage'
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
        $path = '/email/AiBcr/parse-storage';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
