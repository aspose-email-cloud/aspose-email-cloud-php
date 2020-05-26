<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="copyFileRequest.php">
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
 * Request model for copyFile" operation.
 */
class CopyFileRequest
{
    /**
     * Initializes a new instance of the CopyFileRequest class.
     *  
     * @param string $src_path 
     * @param string $dest_path 
     * @param string $src_storage_name 
     * @param string $dest_storage_name 
     * @param string $version_id 
     */
    public function __construct($src_path, $dest_path, $src_storage_name = null, $dest_storage_name = null, $version_id = null)             
    {
        $this->src_path = $src_path;
        $this->dest_path = $dest_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
        $this->version_id = $version_id;
    }

    /**
     * Gets or sets src_path
     */
    public $src_path;
	
    /**
     * Gets or sets dest_path
     */
    public $dest_path;
	
    /**
     * Gets or sets src_storage_name
     */
    public $src_storage_name;
	
    /**
     * Gets or sets dest_storage_name
     */
    public $dest_storage_name;
	
    /**
     * Gets or sets version_id
     */
    public $version_id;
}
?>
