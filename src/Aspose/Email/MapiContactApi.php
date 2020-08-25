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
     * Operation mapiContactAsContactDto
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ContactDto
     */
    public function mapiContactAsContactDto($mapi_contact_dto)
    {
        try {
             list($response) = $this->mapiContactAsContactDtoWithHttpInfo($mapi_contact_dto);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiContactAsContactDtoWithHttpInfo($mapi_contact_dto);
             return $response;
        }
    }

    /**
     * Operation mapiContactAsContactDtoWithHttpInfo
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
    public function mapiContactAsContactDtoWithHttpInfo($mapi_contact_dto)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->mapiContactAsContactDtoRequest($mapi_contact_dto);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiContactAsContactDtoAsync
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactAsContactDtoAsync($mapi_contact_dto)
    {
        return $this->mapiContactAsContactDtoAsyncWithHttpInfo($mapi_contact_dto)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactAsContactDtoAsyncWithHttpInfo
     *
     * Converts MAPI contact model to ContactDto model.
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactAsContactDtoAsyncWithHttpInfo($mapi_contact_dto)
    {
        $returnType = '\Aspose\Email\Model\ContactDto';
        $request = $this->mapiContactAsContactDtoRequest($mapi_contact_dto);

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
     * Create request for operation 'mapiContactAsContactDto'
     *
     * @param Model\MapiContactDto $mapi_contact_dto MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiContactAsContactDtoRequest($mapi_contact_dto)
    {
        // verify the required parameter '$mapi_contact_dto' is set
        if ($mapi_contact_dto === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $mapi_contact_dto when calling mapiContactAsContactDto'
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
     * Operation mapiContactAsFile
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\\SplFileObject
     */
    public function mapiContactAsFile($request)
    {
        try {
             list($response) = $this->mapiContactAsFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiContactAsFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiContactAsFileWithHttpInfo
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
    public function mapiContactAsFileWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiContactAsFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiContactAsFileAsync
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactAsFileAsync($request)
    {
        return $this->mapiContactAsFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactAsFileAsyncWithHttpInfo
     *
     * Converts MAPI contact model to specified format and returns as file.
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactAsFileAsyncWithHttpInfo($request)
    {
        $returnType = '\SplFileObject';
        $request = $this->mapiContactAsFileRequest($request);

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
     * Create request for operation 'mapiContactAsFile'
     *
     * @param Model\MapiContactAsFileRequest $request MAPI contact model to convert.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiContactAsFileRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling mapiContactAsFile'
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
     * Operation mapiContactFromFile
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiContactDto
     */
    public function mapiContactFromFile(Model\MapiContactFromFileRequest $request)
    {
        try {
             list($response) = $this->mapiContactFromFileWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiContactFromFileWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiContactFromFileWithHttpInfo
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
    public function mapiContactFromFileWithHttpInfo(Model\MapiContactFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactFromFileRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiContactFromFileAsync
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactFromFileAsync(Model\MapiContactFromFileRequest $request)
    {
        return $this->mapiContactFromFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactFromFileAsyncWithHttpInfo
     *
     * Converts contact file to a MAPI model representation.
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactFromFileAsyncWithHttpInfo(Model\MapiContactFromFileRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactFromFileRequest($request);

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
     * Create request for operation 'mapiContactFromFile'
     *
     * @param Model\MapiContactFromFileRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiContactFromFileRequest(Model\MapiContactFromFileRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling mapiContactFromFile'
            );
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file when calling mapiContactFromFile'
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
     * Operation mapiContactGet
     *
     * Get MAPI contact document.
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\MapiContactDto
     */
    public function mapiContactGet(Model\MapiContactGetRequest $request)
    {
        try {
             list($response) = $this->mapiContactGetWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->mapiContactGetWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation mapiContactGetWithHttpInfo
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
    public function mapiContactGetWithHttpInfo(Model\MapiContactGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactGetRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation mapiContactGetAsync
     *
     * Get MAPI contact document.
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactGetAsync(Model\MapiContactGetRequest $request)
    {
        return $this->mapiContactGetAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactGetAsyncWithHttpInfo
     *
     * Get MAPI contact document.
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactGetAsyncWithHttpInfo(Model\MapiContactGetRequest $request)
    {
        $returnType = '\Aspose\Email\Model\MapiContactDto';
        $request = $this->mapiContactGetRequest($request);

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
     * Create request for operation 'mapiContactGet'
     *
     * @param Model\MapiContactGetRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiContactGetRequest(Model\MapiContactGetRequest $request)
    {
        // verify the required parameter 'format' is set
        if ($request->format === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $format when calling mapiContactGet'
            );
        }
        // verify the required parameter 'file_name' is set
        if ($request->file_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $file_name when calling mapiContactGet'
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
     * Operation mapiContactSave
     *
     * Save MAPI Contact to storage.
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return void
     */
    public function mapiContactSave($request)
    {
        try {
             $this->mapiContactSaveWithHttpInfo($request);
        } catch (RepeatRequestException $e) {
             $this->mapiContactSaveWithHttpInfo($request);
        }
    }

    /**
     * Operation mapiContactSaveWithHttpInfo
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
    public function mapiContactSaveWithHttpInfo($request)
    {
        $request = $this->mapiContactSaveRequest($request);
    
        $response = $this->callClient($request);
        return [null, $response->getStatusCode(), $response->getHeaders()];
    }

    /**
     * Operation mapiContactSaveAsync
     *
     * Save MAPI Contact to storage.
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactSaveAsync($request)
    {
        return $this->mapiContactSaveAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation mapiContactSaveAsyncWithHttpInfo
     *
     * Save MAPI Contact to storage.
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function mapiContactSaveAsyncWithHttpInfo($request)
    {
        $request = $this->mapiContactSaveRequest($request);

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
     * Create request for operation 'mapiContactSave'
     *
     * @param Model\MapiContactSaveRequest $request Create/Update contact request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function mapiContactSaveRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling mapiContactSave'
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
