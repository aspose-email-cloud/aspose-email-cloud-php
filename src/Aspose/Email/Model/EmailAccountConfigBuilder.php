<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailAccountConfigBuilder.php">
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
/**
 * EmailAccountConfigBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailAccountConfig builder.
 */
class EmailAccountConfigBuilder
{
    /**
     * A model to build.
     * @var EmailAccountConfig
     */
    private $model;
    /**
     * Initializes a new instance of the EmailAccountConfigBuilder class.
     *
     * @param EmailAccountConfig $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailAccountConfig Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets displayName
     * @param string $displayName Email account display name
     * @return $this
     */
    public function displayName($displayName)
    {
        $this->model->setDisplayName($displayName);
        return $this;
    }
    /**
     * Sets protocolType
     * @param string $protocolType Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav
     * @return $this
     */
    public function protocolType($protocolType)
    {
        $this->model->setProtocolType($protocolType);
        return $this;
    }
    /**
     * Sets host
     * @param string $host Email account host.
     * @return $this
     */
    public function host($host)
    {
        $this->model->setHost($host);
        return $this;
    }
    /**
     * Sets port
     * @param int $port Port.
     * @return $this
     */
    public function port($port)
    {
        $this->model->setPort($port);
        return $this;
    }
    /**
     * Sets socketType
     * @param string $socketType Email account security mode. Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     * @return $this
     */
    public function socketType($socketType)
    {
        $this->model->setSocketType($socketType);
        return $this;
    }
    /**
     * Sets authenticationTypes
     * @param string[] $authenticationTypes Supported authentication types. Items: Email account authentication types. Enum, available values: NoAuth, OAuth2, PasswordCleartext, PasswordEncrypted, SmtpAfterPop, ClientIpAddress
     * @return $this
     */
    public function authenticationTypes($authenticationTypes)
    {
        $this->model->setAuthenticationTypes($authenticationTypes);
        return $this;
    }
    /**
     * Sets extraInfo
     * @param \Aspose\Email\Model\NameValuePair[] $extraInfo Extra account information.
     * @return $this
     */
    public function extraInfo($extraInfo)
    {
        $this->model->setExtraInfo($extraInfo);
        return $this;
    }
    /**
     * Sets isValidated
     * @param bool $isValidated Determines that configuration validated. Set to false if validation skipped.
     * @return $this
     */
    public function isValidated($isValidated)
    {
        $this->model->setIsValidated($isValidated);
        return $this;
    }
}

