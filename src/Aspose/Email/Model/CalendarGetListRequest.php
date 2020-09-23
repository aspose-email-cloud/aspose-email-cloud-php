<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarGetListRequest.php">
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
 * Request model for CalendarApi::getList operation.
 */
class CalendarGetListRequest
{
    /**
     * Initializes a new instance of the CalendarGetListRequest class.
     *  
     * @param string $folder Path to folder in storage.
     * @param int $items_per_page Count of items on page.
     * @param int $page_number Page number.
     * @param string $storage Storage name.
     */
    public function __construct($folder, $items_per_page = null, $page_number = null, $storage = null)             
    {
        $this->folder = $folder;
        $this->items_per_page = $items_per_page;
        $this->page_number = $page_number;
        $this->storage = $storage;
    }

    /**
     * Path to folder in storage.
     */
    public $folder;

    /**
     * Count of items on page.
     */
    public $items_per_page;

    /**
     * Page number.
     */
    public $page_number;

    /**
     * Storage name.
     */
    public $storage;
}

