<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageFetchFileRequest.php">
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
 * Request model for ClientMessageApi::fetchFile operation.
 */
class ClientMessageFetchFileRequest
{
    /**
     * Initializes a new instance of the ClientMessageFetchFileRequest class.
     *  
     * @param string $message_id Message identifier
     * @param string $account Email account
     * @param string $folder Account folder to fetch from (should be specified for some protocols such as IMAP)
     * @param string $storage Storage name where account file located.
     * @param string $account_storage_folder Folder in storage where account file located.
     * @param string $format Fetched message file format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft
     */
    public function __construct($message_id = null, $account = null, $folder = null, $storage = null, $account_storage_folder = null, $format = null)             
    {
        if ($message_id != null) {
            $this->message_id = $message_id;
        }
        if ($account != null) {
            $this->account = $account;
        }
        if ($folder != null) {
            $this->folder = $folder;
        }
        if ($storage != null) {
            $this->storage = $storage;
        }
        if ($account_storage_folder != null) {
            $this->account_storage_folder = $account_storage_folder;
        }
        if ($format != null) {
            $this->format = $format;
        }
    }

    /**
     * Message identifier
     */
    public $message_id;

    /**
     * Email account
     */
    public $account;

    /**
     * Account folder to fetch from (should be specified for some protocols such as IMAP)
     */
    public $folder;

    /**
     * Storage name where account file located.
     */
    public $storage;

    /**
     * Folder in storage where account file located.
     */
    public $account_storage_folder;

    /**
     * Fetched message file format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft
     */
    public $format;
}
