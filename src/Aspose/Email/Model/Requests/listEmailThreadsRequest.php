<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="listEmailThreadsRequest.php">
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

namespace Aspose\Email\Model\Requests;

/**
 * Request model for listEmailThreads" operation.
 */
class ListEmailThreadsRequest
{
    /**
     * Initializes a new instance of the ListEmailThreadsRequest class.
     *  
     * @param string $folder A folder in email account.
     * @param string $first_account Email account
     * @param string $second_account Additional email account (for example, firstAccount could be IMAP, and second one could be SMTP)
     * @param string $storage Storage name where account file(s) located
     * @param string $storage_folder Folder in storage where account file(s) located
     * @param bool $update_folder_cache This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account
     * @param int $messages_cache_limit Limit messages cache size if CacheFile is used. Ignored in accounts without limits support
     */
    public function __construct($folder, $first_account, $second_account = null, $storage = null, $storage_folder = null, $update_folder_cache = null, $messages_cache_limit = null)             
    {
        $this->folder = $folder;
        $this->first_account = $first_account;
        $this->second_account = $second_account;
        $this->storage = $storage;
        $this->storage_folder = $storage_folder;
        $this->update_folder_cache = $update_folder_cache;
        $this->messages_cache_limit = $messages_cache_limit;
    }

    /**
     * A folder in email account.
     */
    public $folder;
	
    /**
     * Email account
     */
    public $first_account;
	
    /**
     * Additional email account (for example, firstAccount could be IMAP, and second one could be SMTP)
     */
    public $second_account;
	
    /**
     * Storage name where account file(s) located
     */
    public $storage;
	
    /**
     * Folder in storage where account file(s) located
     */
    public $storage_folder;
	
    /**
     * This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account
     */
    public $update_folder_cache;
	
    /**
     * Limit messages cache size if CacheFile is used. Ignored in accounts without limits support
     */
    public $messages_cache_limit;
}
?>
