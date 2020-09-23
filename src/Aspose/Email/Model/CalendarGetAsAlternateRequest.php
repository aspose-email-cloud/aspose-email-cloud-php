<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarGetAsAlternateRequest.php">
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
 * Request model for CalendarApi::getAsAlternate operation.
 */
class CalendarGetAsAlternateRequest
{
    /**
     * Initializes a new instance of the CalendarGetAsAlternateRequest class.
     *  
     * @param string $file_name iCalendar file name in storage
     * @param string $calendar_action iCalendar method type Enum, available values: Create, Update, Cancel
     * @param string $sequence_id The sequence id
     * @param string $folder Path to folder in storage
     * @param string $storage Storage name
     */
    public function __construct($file_name, $calendar_action, $sequence_id = null, $folder = null, $storage = null)             
    {
        $this->file_name = $file_name;
        $this->calendar_action = $calendar_action;
        $this->sequence_id = $sequence_id;
        $this->folder = $folder;
        $this->storage = $storage;
    }

    /**
     * iCalendar file name in storage
     */
    public $file_name;

    /**
     * iCalendar method type Enum, available values: Create, Update, Cancel
     */
    public $calendar_action;

    /**
     * The sequence id
     */
    public $sequence_id;

    /**
     * Path to folder in storage
     */
    public $folder;

    /**
     * Storage name
     */
    public $storage;
}
