<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailConfigDiscoverOauthRequestBuilder.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
/**
 * EmailConfigDiscoverOauthRequestBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailConfigDiscoverOauthRequest builder.
 */
class EmailConfigDiscoverOauthRequestBuilder
{
    /**
     * A model to build.
     * @var EmailConfigDiscoverOauthRequest
     */
    private $model;
    /**
     * Initializes a new instance of the EmailConfigDiscoverOauthRequestBuilder class.
     *
     * @param EmailConfigDiscoverOauthRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailConfigDiscoverOauthRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets address
     * @param string $address Email address to discover.
     * @return $this
     */
    public function address($address)
    {
        $this->model->setAddress($address);
        return $this;
    }
    /**
     * Sets fastProcessing
     * @param bool $fastProcessing Turns on fast processing. All discover systems will run in parallel. First discovered result will be returned.
     * @return $this
     */
    public function fastProcessing($fastProcessing)
    {
        $this->model->setFastProcessing($fastProcessing);
        return $this;
    }
    /**
     * Sets login
     * @param string $login Email account login. If not specified, address used as a login.
     * @return $this
     */
    public function login($login)
    {
        $this->model->setLogin($login);
        return $this;
    }
    /**
     * Sets clientId
     * @param string $clientId OAuth client id.
     * @return $this
     */
    public function clientId($clientId)
    {
        $this->model->setClientId($clientId);
        return $this;
    }
    /**
     * Sets clientSecret
     * @param string $clientSecret OAuth client secret.
     * @return $this
     */
    public function clientSecret($clientSecret)
    {
        $this->model->setClientSecret($clientSecret);
        return $this;
    }
    /**
     * Sets refreshToken
     * @param string $refreshToken OAuth refresh token.
     * @return $this
     */
    public function refreshToken($refreshToken)
    {
        $this->model->setRefreshToken($refreshToken);
        return $this;
    }
    /**
     * Sets requestUrl
     * @param string $requestUrl The url to obtain access token. If not specified, will be discovered from email configuration.
     * @return $this
     */
    public function requestUrl($requestUrl)
    {
        $this->model->setRequestUrl($requestUrl);
        return $this;
    }
}

