<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailGetAsFileRequest.php">
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
 * Request model for EmailApi::getAsFile operation.
 */
class EmailGetAsFileRequest
{
    /**
     * Initializes a new instance of the EmailGetAsFileRequest class.
     *  
     * @param string $file_name Email document file name
     * @param string $format File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft
     * @param string $storage Storage name
     * @param string $folder Path to folder in storage
     */
    public function __construct($file_name = null, $format = null, $storage = null, $folder = null)             
    {
        if ($file_name != null) {
            $this->file_name = $file_name;
        }
        if ($format != null) {
            $this->format = $format;
        }
        if ($storage != null) {
            $this->storage = $storage;
        }
        if ($folder != null) {
            $this->folder = $folder;
        }
    }

    /**
     * Email document file name
     */
    public $file_name;

    /**
     * File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft
     */
    public $format;

    /**
     * Storage name
     */
    public $storage;

    /**
     * Path to folder in storage
     */
    public $folder;
}
