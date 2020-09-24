<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageDeleteRequestBuilder.php">
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
 * ClientMessageDeleteRequestBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  ClientMessageDeleteRequest builder.
 */
class ClientMessageDeleteRequestBuilder
{
    /**
     * A model to build.
     * @var ClientMessageDeleteRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ClientMessageDeleteRequestBuilder class.
     *
     * @param ClientMessageDeleteRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ClientMessageDeleteRequest Built model.
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
     * Sets messageId
     * @param string $messageId Message identifier.
     * @return $this
     */
    public function messageId($messageId)
    {
        $this->model->setMessageId($messageId);
        return $this;
    }
    /**
     * Sets folder
     * @param string $folder Folder to delete message from.
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->setFolder($folder);
        return $this;
    }
}

