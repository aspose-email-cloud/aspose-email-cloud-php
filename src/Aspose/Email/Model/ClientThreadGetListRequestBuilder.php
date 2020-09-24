<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientThreadGetListRequestBuilder.php">
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
 * Builder for ClientThreadGetListRequest.
 */
class ClientThreadGetListRequestBuilder
{
    /**
     * A model to build.
     * @var ClientThreadGetListRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ClientThreadGetListRequestBuilder class.
     *
     * @param ClientThreadGetListRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ClientThreadGetListRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets folder
     * @param string $folder A folder in email account.
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->folder = $folder;
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
     * Sets update_folder_cache
     * @param bool $update_folder_cache This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account
     * @return $this
     */
    public function update_folder_cache($update_folder_cache)
    {
        $this->model->update_folder_cache = $update_folder_cache;
        return $this;
    }
    /**
     * Sets messages_cache_limit
     * @param int $messages_cache_limit Limit messages cache size if CacheFile is used. Ignored in accounts without limits support
     * @return $this
     */
    public function messages_cache_limit($messages_cache_limit)
    {
        $this->model->messages_cache_limit = $messages_cache_limit;
        return $this;
    }
}
