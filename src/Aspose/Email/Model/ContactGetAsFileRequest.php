<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContactGetAsFileRequest.php">
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
 * Request model for contactGetAsFile" operation.
 */
class ContactGetAsFileRequest
{
    /**
     * Initializes a new instance of the ContactGetAsFileRequest class.
     *  
     * @param string $file_name Calendar document file name
     * @param string $to_format File format Enum, available values: VCard, WebDav, Msg
     * @param string $from_format File format to convert from Enum, available values: VCard, WebDav, Msg
     * @param string $storage Storage name
     * @param string $folder Path to folder in storage
     */
    public function __construct($file_name, $to_format, $from_format, $storage = null, $folder = null)             
    {
        $this->file_name = $file_name;
        $this->to_format = $to_format;
        $this->from_format = $from_format;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /**
     * Calendar document file name
     */
    public $file_name;

    /**
     * File format Enum, available values: VCard, WebDav, Msg
     */
    public $to_format;

    /**
     * File format to convert from Enum, available values: VCard, WebDav, Msg
     */
    public $from_format;

    /**
     * Storage name
     */
    public $storage;

    /**
     * Path to folder in storage
     */
    public $folder;
}
?>
