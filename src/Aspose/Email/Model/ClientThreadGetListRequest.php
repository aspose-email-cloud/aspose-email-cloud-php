<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientThreadGetListRequest.php">
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
 * Request model for ClientThreadApi::getList operation.
 */
class ClientThreadGetListRequest
{
    /**
     * Initializes a new instance of the ClientThreadGetListRequest class.
     *  
     * @param string $folder A folder in email account.
     * @param string $account Email account
     * @param string $storage Storage name where account file located
     * @param string $account_storage_folder Folder in storage where account file located
     * @param bool $update_folder_cache This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account
     * @param int $messages_cache_limit Limit messages cache size if CacheFile is used. Ignored in accounts without limits support
     */
    public function __construct($folder = null, $account = null, $storage = null, $account_storage_folder = null, $update_folder_cache = null, $messages_cache_limit = null)             
    {
        if ($folder != null) {
            $this->folder = $folder;
        }
        if ($account != null) {
            $this->account = $account;
        }
        if ($storage != null) {
            $this->storage = $storage;
        }
        if ($account_storage_folder != null) {
            $this->account_storage_folder = $account_storage_folder;
        }
        if ($update_folder_cache != null) {
            $this->update_folder_cache = $update_folder_cache;
        }
        if ($messages_cache_limit != null) {
            $this->messages_cache_limit = $messages_cache_limit;
        }
    }

    /**
     * A folder in email account.
     */
    public $folder;

    /**
     * Email account
     */
    public $account;

    /**
     * Storage name where account file located
     */
    public $storage;

    /**
     * Folder in storage where account file located
     */
    public $account_storage_folder;

    /**
     * This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account
     */
    public $update_folder_cache;

    /**
     * Limit messages cache size if CacheFile is used. Ignored in accounts without limits support
     */
    public $messages_cache_limit;
}
