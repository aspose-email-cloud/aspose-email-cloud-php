<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageListRequest.php">
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
 * Request model for ClientMessageApi::list operation.
 */
class ClientMessageListRequest
{
    /**
     * Initializes a new instance of the ClientMessageListRequest class.
     *  
     * @param string $folder A folder in email account
     * @param string $account Email account
     * @param string $query_string A MailQuery search string
     * @param string $storage Storage name where account file located
     * @param string $account_storage_folder Folder in storage where account file located
     * @param bool $recursive Specifies that should message be searched in subfolders recursively
     * @param string $type MailMessageBase type. Using this property you can get messages in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string).              Enum, available values: Dto, Mapi, Base64
     * @param string $format Base64 data format. Used only if type is set to Base64. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft
     */
    public function __construct($folder = null, $account = null, $query_string = null, $storage = null, $account_storage_folder = null, $recursive = null, $type = null, $format = null)             
    {
        if ($folder != null) {
            $this->folder = $folder;
        }
        if ($account != null) {
            $this->account = $account;
        }
        if ($query_string != null) {
            $this->query_string = $query_string;
        }
        if ($storage != null) {
            $this->storage = $storage;
        }
        if ($account_storage_folder != null) {
            $this->account_storage_folder = $account_storage_folder;
        }
        if ($recursive != null) {
            $this->recursive = $recursive;
        }
        if ($type != null) {
            $this->type = $type;
        }
        if ($format != null) {
            $this->format = $format;
        }
    }

    /**
     * A folder in email account
     */
    public $folder;

    /**
     * Email account
     */
    public $account;

    /**
     * A MailQuery search string
     */
    public $query_string;

    /**
     * Storage name where account file located
     */
    public $storage;

    /**
     * Folder in storage where account file located
     */
    public $account_storage_folder;

    /**
     * Specifies that should message be searched in subfolders recursively
     */
    public $recursive;

    /**
     * MailMessageBase type. Using this property you can get messages in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string).              Enum, available values: Dto, Mapi, Base64
     */
    public $type;

    /**
     * Base64 data format. Used only if type is set to Base64. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft
     */
    public $format;
}
