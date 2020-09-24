<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailClientAccountBuilder.php">
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
 * EmailClientAccountBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailClientAccount builder.
 */
class EmailClientAccountBuilder
{
    /**
     * A model to build.
     * @var EmailClientAccount
     */
    private $model;
    /**
     * Initializes a new instance of the EmailClientAccountBuilder class.
     *
     * @param EmailClientAccount $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailClientAccount Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets host
     * @param string $host Mail server host name or IP address
     * @return $this
     */
    public function host($host)
    {
        $this->model->setHost($host);
        return $this;
    }
    /**
     * Sets port
     * @param int $port Mail server port
     * @return $this
     */
    public function port($port)
    {
        $this->model->setPort($port);
        return $this;
    }
    /**
     * Sets securityOptions
     * @param string $securityOptions Email account security mode Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     * @return $this
     */
    public function securityOptions($securityOptions)
    {
        $this->model->setSecurityOptions($securityOptions);
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
     * Sets credentials
     * @param \Aspose\Email\Model\EmailClientAccountCredentials $credentials Email client account credentials
     * @return $this
     */
    public function credentials($credentials)
    {
        $this->model->setCredentials($credentials);
        return $this;
    }
    /**
     * Sets cacheFile
     * @param \Aspose\Email\Model\StorageFileLocation $cacheFile File with messages cache. Used to provide extra functions, which are not supported by account
     * @return $this
     */
    public function cacheFile($cacheFile)
    {
        $this->model->setCacheFile($cacheFile);
        return $this;
    }
}

