<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageListRequestBuilder.php">
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
 * Builder for ClientMessageListRequest.
 */
class ClientMessageListRequestBuilder
{
    /**
     * A model to build.
     * @var ClientMessageListRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ClientMessageListRequestBuilder class.
     *
     * @param ClientMessageListRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ClientMessageListRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets folder
     * @param string $folder A folder in email account
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
     * Sets query_string
     * @param string $query_string A MailQuery search string
     * @return $this
     */
    public function query_string($query_string)
    {
        $this->model->query_string = $query_string;
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
     * Sets recursive
     * @param bool $recursive Specifies that should message be searched in subfolders recursively
     * @return $this
     */
    public function recursive($recursive)
    {
        $this->model->recursive = $recursive;
        return $this;
    }
    /**
     * Sets type
     * @param string $type MailMessageBase type. Using this property you can get messages in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string)./nEnum, available values: Dto, Mapi, Base64
     * @return $this
     */
    public function type($type)
    {
        $this->model->type = $type;
        return $this;
    }
    /**
     * Sets format
     * @param string $format Base64 data format. Used only if type is set to Base64./nEnum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft
     * @return $this
     */
    public function format($format)
    {
        $this->model->format = $format;
        return $this;
    }
}
