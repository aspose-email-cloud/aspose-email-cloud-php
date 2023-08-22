<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyFileRequest.php">
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
 * Request model for FileApi::copyFile operation.
 */
class CopyFileRequest
{
    /**
     * Initializes a new instance of the CopyFileRequest class.
     *  
     * @param string $src_path Source file path e.g. '/folder/file.ext'
     * @param string $dest_path Destination file path
     * @param string $src_storage_name Source storage name
     * @param string $dest_storage_name Destination storage name
     * @param string $version_id File version ID to copy
     */
    public function __construct($src_path = null, $dest_path = null, $src_storage_name = null, $dest_storage_name = null, $version_id = null)             
    {
        if ($src_path != null) {
            $this->src_path = $src_path;
        }
        if ($dest_path != null) {
            $this->dest_path = $dest_path;
        }
        if ($src_storage_name != null) {
            $this->src_storage_name = $src_storage_name;
        }
        if ($dest_storage_name != null) {
            $this->dest_storage_name = $dest_storage_name;
        }
        if ($version_id != null) {
            $this->version_id = $version_id;
        }
    }

    /**
     * Source file path e.g. '/folder/file.ext'
     */
    public $src_path;

    /**
     * Destination file path
     */
    public $dest_path;

    /**
     * Source storage name
     */
    public $src_storage_name;

    /**
     * Destination storage name
     */
    public $dest_storage_name;

    /**
     * File version ID to copy
     */
    public $version_id;
}
