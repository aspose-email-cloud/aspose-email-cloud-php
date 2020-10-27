<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContactGetListRequest.php">
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
 * Request model for ContactApi::getList operation.
 */
class ContactGetListRequest
{
    /**
     * Initializes a new instance of the ContactGetListRequest class.
     *  
     * @param string $format Contact document format. Enum, available values: VCard, WebDav, Msg
     * @param string $folder Path to folder in storage.
     * @param string $storage Storage name.
     * @param int $items_per_page Count of items on page.
     * @param int $page_number Page number.
     */
    public function __construct($format = null, $folder = null, $storage = null, $items_per_page = null, $page_number = null)             
    {
        if ($format != null) {
            $this->format = $format;
        }
        if ($folder != null) {
            $this->folder = $folder;
        }
        if ($storage != null) {
            $this->storage = $storage;
        }
        if ($items_per_page != null) {
            $this->items_per_page = $items_per_page;
        }
        if ($page_number != null) {
            $this->page_number = $page_number;
        }
    }

    /**
     * Contact document format. Enum, available values: VCard, WebDav, Msg
     */
    public $format;

    /**
     * Path to folder in storage.
     */
    public $folder;

    /**
     * Storage name.
     */
    public $storage;

    /**
     * Count of items on page.
     */
    public $items_per_page;

    /**
     * Page number.
     */
    public $page_number;
}

