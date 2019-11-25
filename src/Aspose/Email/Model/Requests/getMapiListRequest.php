<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="getMapiListRequest.php">
 *   Copyright (c) 2018 Aspose.Email for Cloud
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

/*
 * Request model for getMapiList" operation.
 */
class getMapiListRequest
{
    /*
     * Initializes a new instance of the getMapiListRequest class.
     *  
     * @param string $folder Path to folder in storage
     * @param string $storage Storage name
     * @param int $items_per_page Count of items on page
     * @param int $page_number Page number
     */
    public function __construct($folder = null, $storage = null, $items_per_page = null, $page_number = null)             
    {
        $this->folder = $folder;
        $this->storage = $storage;
        $this->items_per_page = $items_per_page;
        $this->page_number = $page_number;
    }

    /*
     * Path to folder in storage
     */
    public $folder;
	
    /*
     * Storage name
     */
    public $storage;
	
    /*
     * Count of items on page
     */
    public $items_per_page;
	
    /*
     * Page number
     */
    public $page_number;
}
?>
