<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="deleteCalendarPropertyRequest.php">
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

/**
 * Request model for deleteCalendarProperty" operation.
 */
class deleteCalendarPropertyRequest
{
    /**
     * Initializes a new instance of the deleteCalendarPropertyRequest class.
     *  
     * @param string $name iCalendar file name in storage
     * @param string $member_name Indexed property name
     * @param string $index Property index path
     * @param \Aspose\Email\Model\StorageFolderLocation $request Storage detail to specify iCalendar file location
     */
    public function __construct($name, $member_name, $index, $request)             
    {
        $this->name = $name;
        $this->member_name = $member_name;
        $this->index = $index;
        $this->request = $request;
    }

    /**
     * iCalendar file name in storage
     */
    public $name;
	
    /**
     * Indexed property name
     */
    public $member_name;
	
    /**
     * Property index path
     */
    public $index;
	
    /**
     * Storage detail to specify iCalendar file location
     */
    public $request;
}
?>
