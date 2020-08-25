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
     * Operation emailConfigDiscover
     *
     * Discover email accounts by email address. Does not validate discovered accounts.
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailAccountConfigList
     */
    public function emailConfigDiscover(Model\EmailConfigDiscoverRequest $request)
    {
        try {
             list($response) = $this->emailConfigDiscoverWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailConfigDiscoverWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailConfigDiscoverWithHttpInfo
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
    public function emailConfigDiscoverWithHttpInfo(Model\EmailConfigDiscoverRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->emailConfigDiscoverRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation emailConfigDiscoverAsync
     *
     * Discover email accounts by email address. Does not validate discovered accounts.
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConfigDiscoverAsync(Model\EmailConfigDiscoverRequest $request)
    {
        return $this->emailConfigDiscoverAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailConfigDiscoverAsyncWithHttpInfo
     *
     * Discover email accounts by email address. Does not validate discovered accounts.
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConfigDiscoverAsyncWithHttpInfo(Model\EmailConfigDiscoverRequest $request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->emailConfigDiscoverRequest($request);

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
     * Create request for operation 'emailConfigDiscover'
     *
     * @param Model\EmailConfigDiscoverRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailConfigDiscoverRequest(Model\EmailConfigDiscoverRequest $request)
    {
        // verify the required parameter 'address' is set
        if ($request->address === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling emailConfigDiscover'
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
        $this->processQueryParameter($paramValue, $paramBaseName, $queryParams, $resourcePath);
        $paramValue = $request->fast_processing;
        $paramBaseName = 'fastProcessing';
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
     * Operation emailConfigDiscoverOauth
     *
     * Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailAccountConfigList
     */
    public function emailConfigDiscoverOauth($request)
    {
        try {
             list($response) = $this->emailConfigDiscoverOauthWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailConfigDiscoverOauthWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailConfigDiscoverOauthWithHttpInfo
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
    public function emailConfigDiscoverOauthWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->emailConfigDiscoverOauthRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation emailConfigDiscoverOauthAsync
     *
     * Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConfigDiscoverOauthAsync($request)
    {
        return $this->emailConfigDiscoverOauthAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailConfigDiscoverOauthAsyncWithHttpInfo
     *
     * Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConfigDiscoverOauthAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->emailConfigDiscoverOauthRequest($request);

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
     * Create request for operation 'emailConfigDiscoverOauth'
     *
     * @param Model\EmailConfigDiscoverOauthRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailConfigDiscoverOauthRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling emailConfigDiscoverOauth'
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
     * Operation emailConfigDiscoverPassword
     *
     * Discover email accounts by email address. Validates discovered accounts using login and password.
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmailAccountConfigList
     */
    public function emailConfigDiscoverPassword($request)
    {
        try {
             list($response) = $this->emailConfigDiscoverPasswordWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->emailConfigDiscoverPasswordWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation emailConfigDiscoverPasswordWithHttpInfo
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
    public function emailConfigDiscoverPasswordWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->emailConfigDiscoverPasswordRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation emailConfigDiscoverPasswordAsync
     *
     * Discover email accounts by email address. Validates discovered accounts using login and password.
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConfigDiscoverPasswordAsync($request)
    {
        return $this->emailConfigDiscoverPasswordAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation emailConfigDiscoverPasswordAsyncWithHttpInfo
     *
     * Discover email accounts by email address. Validates discovered accounts using login and password.
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function emailConfigDiscoverPasswordAsyncWithHttpInfo($request)
    {
        $returnType = '\Aspose\Email\Model\EmailAccountConfigList';
        $request = $this->emailConfigDiscoverPasswordRequest($request);

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
     * Create request for operation 'emailConfigDiscoverPassword'
     *
     * @param Model\EmailConfigDiscoverPasswordRequest $request Discover email configuration request.
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function emailConfigDiscoverPasswordRequest($request)
    {
        // verify the required parameter '$request' is set
        if ($request === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $request when calling emailConfigDiscoverPassword'
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
