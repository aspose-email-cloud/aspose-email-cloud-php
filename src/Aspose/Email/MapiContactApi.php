<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactApi.php">
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
 * MapiContactApi Aspose.Email for Cloud API.
 */
class MapiContactApi extends ApiBase
{
    /**
     * Initialize a new instance of MapiContactApi
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
     * Operation asContactDto
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ContactDto
     */
    public function asContactDto($mapi_contact_dto)
    {
        try {
             list($response) = $this->asContactDtoWithHttpInfo($mapi_contact_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->asContactDtoWithHttpInfo($mapi_contact_dto);
             return $response;
        }
    }

    /**
     * Operation asContactDtoWithHttpInfo
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function asContactDtoWithHttpInfo($mapi_contact_dto)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->asContactDtoRequest($mapi_contact_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation asContactDtoAsync
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asContactDtoAsync($mapi_contact_dto)
    {
        return $this->asContactDtoAsyncWithHttpInfo($mapi_contact_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation asContactDtoAsyncWithHttpInfo
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function asContactDtoAsyncWithHttpInfo($mapi_contact_dto)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->asContactDtoRequest($mapi_contact_dto);

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
     * Create request for operation 'asContactDto'
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function asContactDtoRequest($mapi_contact_dto)
    {
        // verify the required parameter '$mapi_contact_dto' is set
        if ($mapi_contact_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $mapi_contact_dto when calling asContactDto'
            );
        }

        // body params
        if (is_string($mapi_contact_dto)) {
            $httpBody = "\"" . $mapi_contact_dto . "\"";
        } else {
            $httpBody = $mapi_contact_dto;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $path = '/email/MapiContact/as-contact-dto';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation asFile
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
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
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
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
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
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
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
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
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
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
        $path = '/email/MapiContact/as-file';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation fromFile
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiContactDto
     */
    public function fromFile(Model\MapiContactFromFileRequest $request)
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
     * Converts contact file to a MAPI model representation.
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function fromFileWithHttpInfo(Model\MapiContactFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->fromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation fromFileAsync
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsync(Model\MapiContactFromFileRequest $request)
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
     * Converts contact file to a MAPI model representation.
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function fromFileAsyncWithHttpInfo(Model\MapiContactFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
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
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function fromFileRequest(Model\MapiContactFromFileRequest $request)
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

        $resourcePath = '/email/MapiContact/from-file';
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
     * Get MAPI contact document.
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiContactDto
     */
    public function get(Model\MapiContactGetRequest $request)
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
     * Get MAPI contact document.
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\MapiContactDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo(Model\MapiContactGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->getRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation getAsync
     *
     * Get MAPI contact document.
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsync(Model\MapiContactGetRequest $request)
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
     * Get MAPI contact document.
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getAsyncWithHttpInfo(Model\MapiContactGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
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
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function getRequest(Model\MapiContactGetRequest $request)
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

        $resourcePath = '/email/MapiContact';
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
     * Save MAPI Contact to storage.
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
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
     * Save MAPI Contact to storage.
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
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
     * Save MAPI Contact to storage.
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
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
     * Save MAPI Contact to storage.
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
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
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
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
        $path = '/email/MapiContact';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
