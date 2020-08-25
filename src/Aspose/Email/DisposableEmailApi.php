<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DisposableEmailApi.php">
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
 * DisposableEmailApi Aspose.Email for Cloud API.
 */
class DisposableEmailApi extends ApiBase
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
     * Operation disposableEmailIsDisposable
     *
     * Check email address is disposable
     *
     * @param Model\DisposableEmailIsDisposableRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\ValueTOfBoolean
     */
    public function disposableEmailIsDisposable(Model\DisposableEmailIsDisposableRequest $request)
    {
        try {
             list($response) = $this->disposableEmailIsDisposableWithHttpInfo($request);
             return $response;
        } catch (RepeatRequestException $e) {
             list($response) = $this->disposableEmailIsDisposableWithHttpInfo($request);
             return $response;
        }
    }

    /**
     * Operation disposableEmailIsDisposableWithHttpInfo
     *
     * Check email address is disposable
     *
     * @param Model\DisposableEmailIsDisposableRequest $request is a request object for operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws RepeatRequestException when request token is expired
     * @return array of \Aspose\Email\Model\ValueTOfBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function disposableEmailIsDisposableWithHttpInfo(Model\DisposableEmailIsDisposableRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfBoolean';
        $request = $this->disposableEmailIsDisposableRequest($request);
    
        $response = $this->callClient($request);
        return $this->processResponse($response, $returnType);
    }

    /**
     * Operation disposableEmailIsDisposableAsync
     *
     * Check email address is disposable
     *
     * @param Model\DisposableEmailIsDisposableRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function disposableEmailIsDisposableAsync(Model\DisposableEmailIsDisposableRequest $request)
    {
        return $this->disposableEmailIsDisposableAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation disposableEmailIsDisposableAsyncWithHttpInfo
     *
     * Check email address is disposable
     *
     * @param Model\DisposableEmailIsDisposableRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function disposableEmailIsDisposableAsyncWithHttpInfo(Model\DisposableEmailIsDisposableRequest $request)
    {
        $returnType = '\Aspose\Email\Model\ValueTOfBoolean';
        $request = $this->disposableEmailIsDisposableRequest($request);

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
     * Create request for operation 'disposableEmailIsDisposable'
     *
     * @param Model\DisposableEmailIsDisposableRequest $request is a request object for operation
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    protected function disposableEmailIsDisposableRequest(Model\DisposableEmailIsDisposableRequest $request)
    {
        // verify the required parameter 'address' is set
        if ($request->address === null) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling disposableEmailIsDisposable'
            );
        }

        $resourcePath = '/email/disposable/is-disposable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;

        // query params
        $paramValue = $request->address;
        $paramBaseName = 'address';
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
