<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailClientAccountOauthCredentialsBuilder.php">
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
 * EmailClientAccountOauthCredentialsBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailClientAccountOauthCredentials builder.
 */
class EmailClientAccountOauthCredentialsBuilder
{
    /**
     * A model to build.
     * @var EmailClientAccountOauthCredentials
     */
    private $model;
    /**
     * Initializes a new instance of the EmailClientAccountOauthCredentialsBuilder class.
     *
     * @param EmailClientAccountOauthCredentials $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailClientAccountOauthCredentials Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets login
     * @param string $login Email client account login
     * @return $this
     */
    public function login($login)
    {
        $this->model->setLogin($login);
        return $this;
    }
    /**
     * Sets clientId
     * @param string $clientId The client ID obtained from the Google Cloud Console during application registration.
     * @return $this
     */
    public function clientId($clientId)
    {
        $this->model->setClientId($clientId);
        return $this;
    }
    /**
     * Sets clientSecret
     * @param string $clientSecret The client secret obtained during application registration.
     * @return $this
     */
    public function clientSecret($clientSecret)
    {
        $this->model->setClientSecret($clientSecret);
        return $this;
    }
    /**
     * Sets refreshToken
     * @param string $refreshToken OAuth 2.0 refresh token
     * @return $this
     */
    public function refreshToken($refreshToken)
    {
        $this->model->setRefreshToken($refreshToken);
        return $this;
    }
    /**
     * Sets requestUrl
     * @param string $requestUrl The url to obtain access token. If not specified, will try to discover from email client account host.
     * @return $this
     */
    public function requestUrl($requestUrl)
    {
        $this->model->setRequestUrl($requestUrl);
        return $this;
    }
}

