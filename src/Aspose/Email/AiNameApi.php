<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiNameApi.php">
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
 * AiNameApi Aspose.Email for Cloud API.
 */
class AiNameApi extends ApiBase
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
     * Operation aiNameComplete
     *
     * The call proposes k most probable names for given starting characters.
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameWeightedVariants
     */
    public function aiNameComplete(Model\AiNameCompleteRequest $request)
    {
        try {
             list($response) = $this->aiNameCompleteWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiNameCompleteWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiNameCompleteWithHttpInfo
     *
     * The call proposes k most probable names for given starting characters.
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameWeightedVariants, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameCompleteWithHttpInfo(Model\AiNameCompleteRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameCompleteRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\AiNameWeightedVariants',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aiNameCompleteAsync
     *
     * The call proposes k most probable names for given starting characters.
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameCompleteAsync(Model\AiNameCompleteRequest $request)
    {
        return $this->aiNameCompleteAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiNameCompleteAsyncWithHttpInfo
     *
     * The call proposes k most probable names for given starting characters.
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameCompleteAsyncWithHttpInfo(Model\AiNameCompleteRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameCompleteRequest($request);

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
     * Create request for operation 'aiNameComplete'
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiNameCompleteRequest(Model\AiNameCompleteRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling aiNameComplete'
            );
        }

        $resourcePath = '/email/AiName/complete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->name;
        $paramBaseName = 'name';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->language;
        $paramBaseName = 'language';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->location;
        $paramBaseName = 'location';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->encoding;
        $paramBaseName = 'encoding';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->script;
        $paramBaseName = 'script';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->style;
        $paramBaseName = 'style';
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
            
    /**
     * Operation aiNameExpand
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameWeightedVariants
     */
    public function aiNameExpand(Model\AiNameExpandRequest $request)
    {
        try {
             list($response) = $this->aiNameExpandWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiNameExpandWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiNameExpandWithHttpInfo
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameWeightedVariants, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameExpandWithHttpInfo(Model\AiNameExpandRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameExpandRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\AiNameWeightedVariants',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aiNameExpandAsync
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameExpandAsync(Model\AiNameExpandRequest $request)
    {
        return $this->aiNameExpandAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiNameExpandAsyncWithHttpInfo
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameExpandAsyncWithHttpInfo(Model\AiNameExpandRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->aiNameExpandRequest($request);

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
     * Create request for operation 'aiNameExpand'
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiNameExpandRequest(Model\AiNameExpandRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling aiNameExpand'
            );
        }

        $resourcePath = '/email/AiName/expand';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->name;
        $paramBaseName = 'name';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->language;
        $paramBaseName = 'language';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->location;
        $paramBaseName = 'location';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->encoding;
        $paramBaseName = 'encoding';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->script;
        $paramBaseName = 'script';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->style;
        $paramBaseName = 'style';
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
            
    /**
     * Operation aiNameFormat
     *
     * Formats a person's name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameFormatted
     */
    public function aiNameFormat(Model\AiNameFormatRequest $request)
    {
        try {
             list($response) = $this->aiNameFormatWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiNameFormatWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiNameFormatWithHttpInfo
     *
     * Formats a person's name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameFormatted, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameFormatWithHttpInfo(Model\AiNameFormatRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->aiNameFormatRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\AiNameFormatted',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aiNameFormatAsync
     *
     * Formats a person's name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameFormatAsync(Model\AiNameFormatRequest $request)
    {
        return $this->aiNameFormatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiNameFormatAsyncWithHttpInfo
     *
     * Formats a person's name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameFormatAsyncWithHttpInfo(Model\AiNameFormatRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->aiNameFormatRequest($request);

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
     * Create request for operation 'aiNameFormat'
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiNameFormatRequest(Model\AiNameFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling aiNameFormat'
            );
        }

        $resourcePath = '/email/AiName/format';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->name;
        $paramBaseName = 'name';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->language;
        $paramBaseName = 'language';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->location;
        $paramBaseName = 'location';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->encoding;
        $paramBaseName = 'encoding';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->script;
        $paramBaseName = 'script';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->format;
        $paramBaseName = 'format';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->style;
        $paramBaseName = 'style';
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
            
    /**
     * Operation aiNameGenderize
     *
     * Detect person's gender from name string.
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameGenderHypothesisList
     */
    public function aiNameGenderize(Model\AiNameGenderizeRequest $request)
    {
        try {
             list($response) = $this->aiNameGenderizeWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiNameGenderizeWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiNameGenderizeWithHttpInfo
     *
     * Detect person's gender from name string.
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameGenderHypothesisList, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameGenderizeWithHttpInfo(Model\AiNameGenderizeRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameGenderHypothesisList';
        $request = $this->aiNameGenderizeRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\AiNameGenderHypothesisList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aiNameGenderizeAsync
     *
     * Detect person's gender from name string.
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameGenderizeAsync(Model\AiNameGenderizeRequest $request)
    {
        return $this->aiNameGenderizeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiNameGenderizeAsyncWithHttpInfo
     *
     * Detect person's gender from name string.
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameGenderizeAsyncWithHttpInfo(Model\AiNameGenderizeRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameGenderHypothesisList';
        $request = $this->aiNameGenderizeRequest($request);

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
     * Create request for operation 'aiNameGenderize'
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiNameGenderizeRequest(Model\AiNameGenderizeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling aiNameGenderize'
            );
        }

        $resourcePath = '/email/AiName/genderize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->name;
        $paramBaseName = 'name';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->language;
        $paramBaseName = 'language';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->location;
        $paramBaseName = 'location';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->encoding;
        $paramBaseName = 'encoding';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->script;
        $paramBaseName = 'script';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->style;
        $paramBaseName = 'style';
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
            
    /**
     * Operation aiNameMatch
     *
     * Compare people's names. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameMatchResult
     */
    public function aiNameMatch(Model\AiNameMatchRequest $request)
    {
        try {
             list($response) = $this->aiNameMatchWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiNameMatchWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiNameMatchWithHttpInfo
     *
     * Compare people's names. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameMatchResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameMatchWithHttpInfo(Model\AiNameMatchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->aiNameMatchRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\AiNameMatchResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aiNameMatchAsync
     *
     * Compare people's names. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameMatchAsync(Model\AiNameMatchRequest $request)
    {
        return $this->aiNameMatchAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiNameMatchAsyncWithHttpInfo
     *
     * Compare people's names. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameMatchAsyncWithHttpInfo(Model\AiNameMatchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->aiNameMatchRequest($request);

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
     * Create request for operation 'aiNameMatch'
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiNameMatchRequest(Model\AiNameMatchRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling aiNameMatch'
            );
        }
        // verify the required parameter 'other_name' is set
        if ($request->other_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $other_name when calling aiNameMatch'
            );
        }

        $resourcePath = '/email/AiName/match';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->name;
        $paramBaseName = 'name';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->other_name;
        $paramBaseName = 'otherName';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->language;
        $paramBaseName = 'language';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->location;
        $paramBaseName = 'location';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->encoding;
        $paramBaseName = 'encoding';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->script;
        $paramBaseName = 'script';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->style;
        $paramBaseName = 'style';
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
            
    /**
     * Operation aiNameParse
     *
     * Parse name to components.
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameComponentList
     */
    public function aiNameParse(Model\AiNameParseRequest $request)
    {
        try {
             list($response) = $this->aiNameParseWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiNameParseWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiNameParseWithHttpInfo
     *
     * Parse name to components.
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameComponentList, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameParseWithHttpInfo(Model\AiNameParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameComponentList';
        $request = $this->aiNameParseRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\AiNameComponentList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aiNameParseAsync
     *
     * Parse name to components.
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameParseAsync(Model\AiNameParseRequest $request)
    {
        return $this->aiNameParseAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiNameParseAsyncWithHttpInfo
     *
     * Parse name to components.
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameParseAsyncWithHttpInfo(Model\AiNameParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameComponentList';
        $request = $this->aiNameParseRequest($request);

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
     * Create request for operation 'aiNameParse'
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiNameParseRequest(Model\AiNameParseRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling aiNameParse'
            );
        }

        $resourcePath = '/email/AiName/parse';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->name;
        $paramBaseName = 'name';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->language;
        $paramBaseName = 'language';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->location;
        $paramBaseName = 'location';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->encoding;
        $paramBaseName = 'encoding';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->script;
        $paramBaseName = 'script';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->style;
        $paramBaseName = 'style';
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
            
    /**
     * Operation aiNameParseEmailAddress
     *
     * Parse person's name out of an email address.
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameExtractedList
     */
    public function aiNameParseEmailAddress(Model\AiNameParseEmailAddressRequest $request)
    {
        try {
             list($response) = $this->aiNameParseEmailAddressWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->aiNameParseEmailAddressWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation aiNameParseEmailAddressWithHttpInfo
     *
     * Parse person's name out of an email address.
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameExtractedList, HTTP status code, HTTP response headers (array of strings)
     */
    public function aiNameParseEmailAddressWithHttpInfo(Model\AiNameParseEmailAddressRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameExtractedList';
        $request = $this->aiNameParseEmailAddressRequest($request);

        try {
            $response = $this->callClient($request);
            return $this->processResponse($response, $returnType);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Email\Model\AiNameExtractedList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aiNameParseEmailAddressAsync
     *
     * Parse person's name out of an email address.
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameParseEmailAddressAsync(Model\AiNameParseEmailAddressRequest $request)
    {
        return $this->aiNameParseEmailAddressAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aiNameParseEmailAddressAsyncWithHttpInfo
     *
     * Parse person's name out of an email address.
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function aiNameParseEmailAddressAsyncWithHttpInfo(Model\AiNameParseEmailAddressRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameExtractedList';
        $request = $this->aiNameParseEmailAddressRequest($request);

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
     * Create request for operation 'aiNameParseEmailAddress'
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function aiNameParseEmailAddressRequest(Model\AiNameParseEmailAddressRequest $request)
    {
        // verify the required parameter 'email_address' is set
        if ($request->email_address === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $email_address when calling aiNameParseEmailAddress'
            );
        }

        $resourcePath = '/email/AiName/parse-email-address';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
    

        // query params
        $paramValue = $request->email_address;
        $paramBaseName = 'emailAddress';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->language;
        $paramBaseName = 'language';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->location;
        $paramBaseName = 'location';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->encoding;
        $paramBaseName = 'encoding';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->script;
        $paramBaseName = 'script';
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->style;
        $paramBaseName = 'style';
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
