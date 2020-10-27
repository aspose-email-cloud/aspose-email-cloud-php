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
     * Initialize a new instance of AiNameApi
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
     * Operation complete
     *
     * The call proposes k most probable names for given starting characters.
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameWeightedVariants
     */
    public function complete(Model\AiNameCompleteRequest $request)
    {
        try {
             list($response) = $this->completeWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->completeWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation completeWithHttpInfo
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
    public function completeWithHttpInfo(Model\AiNameCompleteRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->completeRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation completeAsync
     *
     * The call proposes k most probable names for given starting characters.
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function completeAsync(Model\AiNameCompleteRequest $request)
    {
        return $this->completeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation completeAsyncWithHttpInfo
     *
     * The call proposes k most probable names for given starting characters.
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function completeAsyncWithHttpInfo(Model\AiNameCompleteRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->completeRequest($request);

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
     * Create request for operation 'complete'
     *
     * @param Model\AiNameCompleteRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function completeRequest(Model\AiNameCompleteRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling complete'
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
     * Operation expand
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameWeightedVariants
     */
    public function expand(Model\AiNameExpandRequest $request)
    {
        try {
             list($response) = $this->expandWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->expandWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation expandWithHttpInfo
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
    public function expandWithHttpInfo(Model\AiNameExpandRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->expandRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation expandAsync
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function expandAsync(Model\AiNameExpandRequest $request)
    {
        return $this->expandAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation expandAsyncWithHttpInfo
     *
     * Expands a person's name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function expandAsyncWithHttpInfo(Model\AiNameExpandRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->expandRequest($request);

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
     * Create request for operation 'expand'
     *
     * @param Model\AiNameExpandRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function expandRequest(Model\AiNameExpandRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling expand'
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
     * Operation expandParsed
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameWeightedVariants
     */
    public function expandParsed($request)
    {
        try {
             list($response) = $this->expandParsedWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->expandParsedWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation expandParsedWithHttpInfo
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameWeightedVariants, HTTP status code, HTTP response headers (array of strings)
     */
    public function expandParsedWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->expandParsedRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation expandParsedAsync
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function expandParsedAsync($request)
    {
        return $this->expandParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation expandParsedAsyncWithHttpInfo
     *
     * Expands a person's parsed name into a list of possible alternatives using options for expanding instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function expandParsedAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameWeightedVariants';
        $request = $this->expandParsedRequest($request);

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
     * Create request for operation 'expandParsed'
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function expandParsedRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling expandParsed'
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
        $path = '/email/AiName/expand-parsed';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation format
     *
     * Formats a person's name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameFormatted
     */
    public function format(Model\AiNameFormatRequest $request)
    {
        try {
             list($response) = $this->formatWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->formatWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation formatWithHttpInfo
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
    public function formatWithHttpInfo(Model\AiNameFormatRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->formatRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation formatAsync
     *
     * Formats a person's name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function formatAsync(Model\AiNameFormatRequest $request)
    {
        return $this->formatAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation formatAsyncWithHttpInfo
     *
     * Formats a person's name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function formatAsyncWithHttpInfo(Model\AiNameFormatRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->formatRequest($request);

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
     * Create request for operation 'format'
     *
     * @param Model\AiNameFormatRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function formatRequest(Model\AiNameFormatRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling format'
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
     * Operation formatParsed
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameFormatted
     */
    public function formatParsed($request)
    {
        try {
             list($response) = $this->formatParsedWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->formatParsedWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation formatParsedWithHttpInfo
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameFormatted, HTTP status code, HTTP response headers (array of strings)
     */
    public function formatParsedWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->formatParsedRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation formatParsedAsync
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function formatParsedAsync($request)
    {
        return $this->formatParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation formatParsedAsyncWithHttpInfo
     *
     * Formats a person's parsed name in correct case and name order using options for formatting instructions.
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function formatParsedAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameFormatted';
        $request = $this->formatParsedRequest($request);

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
     * Create request for operation 'formatParsed'
     *
     * @param Model\AiNameParsedRequest $request Parsed name with options.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function formatParsedRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling formatParsed'
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
        $path = '/email/AiName/format-parsed';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation genderize
     *
     * Detect person's gender from name string.
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameGenderHypothesisList
     */
    public function genderize(Model\AiNameGenderizeRequest $request)
    {
        try {
             list($response) = $this->genderizeWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->genderizeWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation genderizeWithHttpInfo
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
    public function genderizeWithHttpInfo(Model\AiNameGenderizeRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameGenderHypothesisList';
        $request = $this->genderizeRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation genderizeAsync
     *
     * Detect person's gender from name string.
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function genderizeAsync(Model\AiNameGenderizeRequest $request)
    {
        return $this->genderizeAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation genderizeAsyncWithHttpInfo
     *
     * Detect person's gender from name string.
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function genderizeAsyncWithHttpInfo(Model\AiNameGenderizeRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameGenderHypothesisList';
        $request = $this->genderizeRequest($request);

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
     * Create request for operation 'genderize'
     *
     * @param Model\AiNameGenderizeRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function genderizeRequest(Model\AiNameGenderizeRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling genderize'
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
     * Operation genderizeParsed
     *
     * Detect person's gender from parsed name.
     *
     * @param Model\AiNameParsedRequest $request Gender detection request data.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameGenderHypothesisList
     */
    public function genderizeParsed($request)
    {
        try {
             list($response) = $this->genderizeParsedWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->genderizeParsedWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation genderizeParsedWithHttpInfo
     *
     * Detect person's gender from parsed name.
     *
     * @param Model\AiNameParsedRequest $request Gender detection request data.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameGenderHypothesisList, HTTP status code, HTTP response headers (array of strings)
     */
    public function genderizeParsedWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameGenderHypothesisList';
        $request = $this->genderizeParsedRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation genderizeParsedAsync
     *
     * Detect person's gender from parsed name.
     *
     * @param Model\AiNameParsedRequest $request Gender detection request data.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function genderizeParsedAsync($request)
    {
        return $this->genderizeParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation genderizeParsedAsyncWithHttpInfo
     *
     * Detect person's gender from parsed name.
     *
     * @param Model\AiNameParsedRequest $request Gender detection request data.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function genderizeParsedAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameGenderHypothesisList';
        $request = $this->genderizeParsedRequest($request);

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
     * Create request for operation 'genderizeParsed'
     *
     * @param Model\AiNameParsedRequest $request Gender detection request data.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function genderizeParsedRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling genderizeParsed'
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
        $path = '/email/AiName/genderize-parsed';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation match
     *
     * Compare people's names. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameMatchResult
     */
    public function match(Model\AiNameMatchRequest $request)
    {
        try {
             list($response) = $this->matchWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->matchWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation matchWithHttpInfo
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
    public function matchWithHttpInfo(Model\AiNameMatchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->matchRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation matchAsync
     *
     * Compare people's names. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function matchAsync(Model\AiNameMatchRequest $request)
    {
        return $this->matchAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation matchAsyncWithHttpInfo
     *
     * Compare people's names. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function matchAsyncWithHttpInfo(Model\AiNameMatchRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->matchRequest($request);

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
     * Create request for operation 'match'
     *
     * @param Model\AiNameMatchRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function matchRequest(Model\AiNameMatchRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling match'
            );
        }
        // verify the required parameter 'other_name' is set
        if ($request->other_name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $other_name when calling match'
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
     * Operation matchParsed
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchParsedRequest $request Parsed names to match.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameMatchResult
     */
    public function matchParsed($request)
    {
        try {
             list($response) = $this->matchParsedWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->matchParsedWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation matchParsedWithHttpInfo
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchParsedRequest $request Parsed names to match.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\AiNameMatchResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function matchParsedWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->matchParsedRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation matchParsedAsync
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchParsedRequest $request Parsed names to match.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function matchParsedAsync($request)
    {
        return $this->matchParsedAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation matchParsedAsyncWithHttpInfo
     *
     * Compare people's parsed names and attributes. Uses options for comparing instructions.
     *
     * @param Model\AiNameMatchParsedRequest $request Parsed names to match.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function matchParsedAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\AiNameMatchResult';
        $request = $this->matchParsedRequest($request);

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
     * Create request for operation 'matchParsed'
     *
     * @param Model\AiNameMatchParsedRequest $request Parsed names to match.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function matchParsedRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling matchParsed'
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
        $path = '/email/AiName/match-parsed';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation parse
     *
     * Parse name to components.
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameComponentList
     */
    public function parse(Model\AiNameParseRequest $request)
    {
        try {
             list($response) = $this->parseWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->parseWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation parseWithHttpInfo
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
    public function parseWithHttpInfo(Model\AiNameParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameComponentList';
        $request = $this->parseRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation parseAsync
     *
     * Parse name to components.
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function parseAsync(Model\AiNameParseRequest $request)
    {
        return $this->parseAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation parseAsyncWithHttpInfo
     *
     * Parse name to components.
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function parseAsyncWithHttpInfo(Model\AiNameParseRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameComponentList';
        $request = $this->parseRequest($request);

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
     * Create request for operation 'parse'
     *
     * @param Model\AiNameParseRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function parseRequest(Model\AiNameParseRequest $request)
    {
        // verify the required parameter 'name' is set
        if ($request->name === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling parse'
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
     * Operation parseEmailAddress
     *
     * Parse person's name out of an email address.
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\AiNameExtractedList
     */
    public function parseEmailAddress(Model\AiNameParseEmailAddressRequest $request)
    {
        try {
             list($response) = $this->parseEmailAddressWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->parseEmailAddressWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation parseEmailAddressWithHttpInfo
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
    public function parseEmailAddressWithHttpInfo(Model\AiNameParseEmailAddressRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameExtractedList';
        $request = $this->parseEmailAddressRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation parseEmailAddressAsync
     *
     * Parse person's name out of an email address.
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function parseEmailAddressAsync(Model\AiNameParseEmailAddressRequest $request)
    {
        return $this->parseEmailAddressAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation parseEmailAddressAsyncWithHttpInfo
     *
     * Parse person's name out of an email address.
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function parseEmailAddressAsyncWithHttpInfo(Model\AiNameParseEmailAddressRequest $request)
    {
        $returnType = '\Aspose\Email\Model\AiNameExtractedList';
        $request = $this->parseEmailAddressRequest($request);

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
     * Create request for operation 'parseEmailAddress'
     *
     * @param Model\AiNameParseEmailAddressRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function parseEmailAddressRequest(Model\AiNameParseEmailAddressRequest $request)
    {
        // verify the required parameter 'email_address' is set
        if ($request->email_address === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $email_address when calling parseEmailAddress'
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
}
