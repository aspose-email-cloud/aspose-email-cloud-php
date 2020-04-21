<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="getEmailThreadRequest.php">
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
 * Request model for getEmailThread" operation.
 */
class GetEmailThreadRequest
{
    /**
     * Initializes a new instance of the GetEmailThreadRequest class.
     *  
     * @param string $thread_id Thread identifier
     * @param string $first_account Email account
     * @param string $second_account Additional email account (for example, firstAccount could be IMAP, and second one could be SMTP)
     * @param string $folder Specifies account folder to get thread from (required for some account types, such as EWS)
     * @param string $storage Storage name where account file(s) located
     * @param string $storage_folder Folder in storage where account file(s) located
     */
    public function __construct($thread_id, $first_account, $second_account = null, $folder = null, $storage = null, $storage_folder = null)             
    {
        $this->thread_id = $thread_id;
        $this->first_account = $first_account;
        $this->second_account = $second_account;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->storage_folder = $storage_folder;
    }

    /**
     * Thread identifier
     */
    public $thread_id;
	
    /**
     * Email account
     */
    public $first_account;
	
    /**
     * Additional email account (for example, firstAccount could be IMAP, and second one could be SMTP)
     */
    public $second_account;
	
    /**
     * Specifies account folder to get thread from (required for some account types, such as EWS)
     */
    public $folder;
	
    /**
     * Storage name where account file(s) located
     */
    public $storage;
	
    /**
     * Folder in storage where account file(s) located
     */
    public $storage_folder;
}
?>
