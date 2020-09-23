<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientFolderGetListRequestBuilder.php">
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

namespace Aspose\Email\Model;

/**
 * Builder for ClientFolderGetListRequest.
 */
class ClientFolderGetListRequestBuilder
{
    /**
     * A model to build.
     * @var ClientFolderGetListRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ClientFolderGetListRequestBuilder class.
     *
     * @param ClientFolderGetListRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ClientFolderGetListRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
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
    /**
     * Sets parent_folder
     * @param string $parent_folder Folder in which subfolders should be listed
     * @return $this
     */
    public function parent_folder($parent_folder)
    {
        $this->model->parent_folder = $parent_folder;
        return $this;
    }
}
