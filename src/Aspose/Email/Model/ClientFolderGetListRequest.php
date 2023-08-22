<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientFolderGetListRequest.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
 * Request model for ClientFolderApi::getList operation.
 */
class ClientFolderGetListRequest
{
    /**
     * Initializes a new instance of the ClientFolderGetListRequest class.
     *  
     * @param string $account Email account
     * @param string $storage Storage name where account file located
     * @param string $account_storage_folder Folder in storage where account file located
     * @param string $parent_folder Folder in which subfolders should be listed
     */
    public function __construct($account = null, $storage = null, $account_storage_folder = null, $parent_folder = null)             
    {
        if ($account != null) {
            $this->account = $account;
        }
        if ($storage != null) {
            $this->storage = $storage;
        }
        if ($account_storage_folder != null) {
            $this->account_storage_folder = $account_storage_folder;
        }
        if ($parent_folder != null) {
            $this->parent_folder = $parent_folder;
        }
    }

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
     * Folder in which subfolders should be listed
     */
    public $parent_folder;
}

