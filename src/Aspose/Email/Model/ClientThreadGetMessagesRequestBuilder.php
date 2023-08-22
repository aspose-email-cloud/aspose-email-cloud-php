<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientThreadGetMessagesRequestBuilder.php">
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

namespace Aspose\Email\Model;

/**
 * Builder for ClientThreadGetMessagesRequest.
 */
class ClientThreadGetMessagesRequestBuilder
{
    /**
     * A model to build.
     * @var ClientThreadGetMessagesRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ClientThreadGetMessagesRequestBuilder class.
     *
     * @param ClientThreadGetMessagesRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ClientThreadGetMessagesRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets thread_id
     * @param string $thread_id Thread identifier
     * @return $this
     */
    public function thread_id($thread_id)
    {
        $this->model->thread_id = $thread_id;
        return $this;
    }
    /**
     * Sets account
     * @param string $account Email account
     * @return $this
     */
    public function account($account)
    {
        $this->model->account = $account;
        return $this;
    }
    /**
     * Sets folder
     * @param string $folder Specifies account folder to get thread from
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->folder = $folder;
        return $this;
    }
    /**
     * Sets storage
     * @param string $storage Storage name where account file located
     * @return $this
     */
    public function storage($storage)
    {
        $this->model->storage = $storage;
        return $this;
    }
    /**
     * Sets account_storage_folder
     * @param string $account_storage_folder Folder in storage where account file located
     * @return $this
     */
    public function account_storage_folder($account_storage_folder)
    {
        $this->model->account_storage_folder = $account_storage_folder;
        return $this;
    }
}
