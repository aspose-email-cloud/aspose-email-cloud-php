<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageFetchRequest.php">
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
 * Request model for clientMessageFetch" operation.
 */
class ClientMessageFetchRequest
{
    /**
     * Initializes a new instance of the ClientMessageFetchRequest class.
     *  
     * @param string $message_id Message identifier
     * @param string $account Email account
     * @param string $folder Account folder to fetch from (should be specified for some protocols such as IMAP)
     * @param string $storage Storage name where account file located.
     * @param string $account_storage_folder Folder in storage where account file located.
     * @param string $type MailMessageBase type. Using this property you can fetch message in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string).              Enum, available values: Dto, Mapi, Base64
     * @param string $format Base64 data format. Used only if type is set to Base64. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef
     */
    public function __construct($message_id, $account, $folder = null, $storage = null, $account_storage_folder = null, $type = null, $format = null)             
    {
        $this->message_id = $message_id;
        $this->account = $account;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->account_storage_folder = $account_storage_folder;
        $this->type = $type;
        $this->format = $format;
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
     * MailMessageBase type. Using this property you can fetch message in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string).              Enum, available values: Dto, Mapi, Base64
     */
    public $type;

    /**
     * Base64 data format. Used only if type is set to Base64. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef
     */
    public $format;
}
?>
