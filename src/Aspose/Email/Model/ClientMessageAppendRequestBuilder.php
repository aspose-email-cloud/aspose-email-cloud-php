<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageAppendRequestBuilder.php">
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
 * ClientMessageAppendRequestBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  ClientMessageAppendRequest builder.
 */
class ClientMessageAppendRequestBuilder
{
    /**
     * A model to build.
     * @var ClientMessageAppendRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ClientMessageAppendRequestBuilder class.
     *
     * @param ClientMessageAppendRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ClientMessageAppendRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets accountLocation
     * @param \Aspose\Email\Model\StorageFileLocation $accountLocation Email client account configuration location on storage.
     * @return $this
     */
    public function accountLocation($accountLocation)
    {
        $this->model->setAccountLocation($accountLocation);
        return $this;
    }
    /**
     * Sets folder
     * @param string $folder Path to folder on email server to append message to.
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->setFolder($folder);
        return $this;
    }
    /**
     * Sets message
     * @param \Aspose\Email\Model\MailMessageBase $message Message to append.
     * @return $this
     */
    public function message($message)
    {
        $this->model->setMessage($message);
        return $this;
    }
    /**
     * Sets markAsSent
     * @param bool $markAsSent Determines that appended message should be market as sent or not.
     * @return $this
     */
    public function markAsSent($markAsSent)
    {
        $this->model->setMarkAsSent($markAsSent);
        return $this;
    }
}

