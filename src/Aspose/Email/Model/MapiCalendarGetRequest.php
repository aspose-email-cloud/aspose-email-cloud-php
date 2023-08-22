<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarGetRequest.php">
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
 * Request model for MapiCalendarApi::get operation.
 */
class MapiCalendarGetRequest
{
    /**
     * Initializes a new instance of the MapiCalendarGetRequest class.
     *  
     * @param string $file_name Calendar file name in storage.
     * @param string $folder Path to folder in storage.
     * @param string $storage Storage name.
     */
    public function __construct($file_name = null, $folder = null, $storage = null)             
    {
        if ($file_name != null) {
            $this->file_name = $file_name;
        }
        if ($folder != null) {
            $this->folder = $folder;
        }
        if ($storage != null) {
            $this->storage = $storage;
        }
    }

    /**
     * Calendar file name in storage.
     */
    public $file_name;

    /**
     * Path to folder in storage.
     */
    public $folder;

    /**
     * Storage name.
     */
    public $storage;
}

