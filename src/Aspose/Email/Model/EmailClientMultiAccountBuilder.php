<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailClientMultiAccountBuilder.php">
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
 * EmailClientMultiAccountBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailClientMultiAccount builder.
 */
class EmailClientMultiAccountBuilder
{
    /**
     * A model to build.
     * @var EmailClientMultiAccount
     */
    private $model;
    /**
     * Initializes a new instance of the EmailClientMultiAccountBuilder class.
     *
     * @param EmailClientMultiAccount $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailClientMultiAccount Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets receiveAccounts
     * @param \Aspose\Email\Model\EmailClientAccount[] $receiveAccounts Email client receive accounts
     * @return $this
     */
    public function receiveAccounts($receiveAccounts)
    {
        $this->model->setReceiveAccounts($receiveAccounts);
        return $this;
    }
    /**
     * Sets sendAccount
     * @param \Aspose\Email\Model\EmailClientAccount $sendAccount Email client send account
     * @return $this
     */
    public function sendAccount($sendAccount)
    {
        $this->model->setSendAccount($sendAccount);
        return $this;
    }
}

