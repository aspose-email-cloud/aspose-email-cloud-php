<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="listEmailMessagesRequest.php">
 *   Copyright (c) 2018 Aspose.Email for Cloud
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
 * Request model for listEmailMessages" operation.
 */
class ListEmailMessagesRequest
{
    /**
     * Initializes a new instance of the ListEmailMessagesRequest class.
     *  
     * @param string $folder A folder in email account
     * @param string $query_string A MailQuery search string
     * @param string $first_account Email account
     * @param string $second_account Additional email account (should be specified for POP/IMAP accounts and should be SMTP account)
     * @param string $storage Storage name where account file(s) located
     * @param string $storage_folder Folder in storage where account file(s) located
     * @param bool $recursive Specifies that should message be searched in subfolders recursively
     */
    public function __construct($folder, $query_string, $first_account, $second_account = null, $storage = null, $storage_folder = null, $recursive = null)             
    {
        $this->folder = $folder;
        $this->query_string = $query_string;
        $this->first_account = $first_account;
        $this->second_account = $second_account;
        $this->storage = $storage;
        $this->storage_folder = $storage_folder;
        $this->recursive = $recursive;
    }

    /**
     * A folder in email account
     */
    public $folder;
	
    /**
     * A MailQuery search string
     */
    public $query_string;
	
    /**
     * Email account
     */
    public $first_account;
	
    /**
     * Additional email account (should be specified for POP/IMAP accounts and should be SMTP account)
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
     * Specifies that should message be searched in subfolders recursively
     */
    public $recursive;
}
?>
