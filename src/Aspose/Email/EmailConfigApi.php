<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailConfigApi.php">
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
 * EmailConfigApi Aspose.Email for Cloud API.
 */
class EmailConfigApi extends ApiBase
{
    /**
     * Initialize a new instance of EmailConfigApi
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
     * Operation discover
     *
     * Discover email accounts by email address. Does not validate discovered accounts.
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailAccountConfigList
     */
    public function discover(Model\EmailConfigDiscoverRequest $request)
    {
        try {
             list($response) = $this->discoverWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->discoverWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation discoverWithHttpInfo
     *
     * Discover email accounts by email address. Does not validate discovered accounts.
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailAccountConfigList, HTTP status code, HTTP response headers (array of strings)
     */
    public function discoverWithHttpInfo(Model\EmailConfigDiscoverRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->discoverRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation discoverAsync
     *
     * Discover email accounts by email address. Does not validate discovered accounts.
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function discoverAsync(Model\EmailConfigDiscoverRequest $request)
    {
        return $this->discoverAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation discoverAsyncWithHttpInfo
     *
     * Discover email accounts by email address. Does not validate discovered accounts.
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function discoverAsyncWithHttpInfo(Model\EmailConfigDiscoverRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->discoverRequest($request);

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
     * Create request for operation 'discover'
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function discoverRequest(Model\EmailConfigDiscoverRequest $request)
    {
        // verify the required parameter 'address' is set
        if ($request->address === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling discover'
            );
        }

        $resourcePath = '/email/config/discover';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->address;
        $paramBaseName = 'address';
        $resourcePath = $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->fast_processing;
        $paramBaseName = 'fastProcessing';
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
     * Operation discoverOauth
     *
     * Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailAccountConfigList
     */
    public function discoverOauth($request)
    {
        try {
             list($response) = $this->discoverOauthWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->discoverOauthWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation discoverOauthWithHttpInfo
     *
     * Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailAccountConfigList, HTTP status code, HTTP response headers (array of strings)
     */
    public function discoverOauthWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->discoverOauthRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation discoverOauthAsync
     *
     * Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function discoverOauthAsync($request)
    {
        return $this->discoverOauthAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation discoverOauthAsyncWithHttpInfo
     *
     * Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function discoverOauthAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->discoverOauthRequest($request);

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
     * Create request for operation 'discoverOauth'
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function discoverOauthRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling discoverOauth'
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
        $path = '/email/config/discover/oauth';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
            
    /**
     * Operation discoverPassword
     *
     * Discover email accounts by email address. Validates discovered accounts using login and password.
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailAccountConfigList
     */
    public function discoverPassword($request)
    {
        try {
             list($response) = $this->discoverPasswordWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->discoverPasswordWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation discoverPasswordWithHttpInfo
     *
     * Discover email accounts by email address. Validates discovered accounts using login and password.
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\EmailAccountConfigList, HTTP status code, HTTP response headers (array of strings)
     */
    public function discoverPasswordWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->discoverPasswordRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation discoverPasswordAsync
     *
     * Discover email accounts by email address. Validates discovered accounts using login and password.
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function discoverPasswordAsync($request)
    {
        return $this->discoverPasswordAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation discoverPasswordAsyncWithHttpInfo
     *
     * Discover email accounts by email address. Validates discovered accounts using login and password.
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function discoverPasswordAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->discoverPasswordRequest($request);

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
     * Create request for operation 'discoverPassword'
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function discoverPasswordRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling discoverPassword'
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
        $path = '/email/config/discover/password';
        return $this->toClientRequest('PUT', $httpBody, $path, [], [], [], false, $headers, []);
    }
}
