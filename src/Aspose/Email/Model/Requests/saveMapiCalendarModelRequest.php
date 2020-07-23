<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="saveMapiCalendarModelRequest.php">
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
 * Request model for saveMapiCalendarModel" operation.
 */
class SaveMapiCalendarModelRequest
{
    /**
     * Initializes a new instance of the SaveMapiCalendarModelRequest class.
     *  
     * @param string $name Calendar file name in storage
     * @param string $format File format Enum, available values: Ics, Msg
     * @param \Aspose\Email\Model\StorageModelRqOfMapiCalendarDto $rq Calendar update request
     */
    public function __construct($name, $format, $rq)             
    {
        $this->name = $name;
        $this->format = $format;
        $this->rq = $rq;
    }

    /**
     * Calendar file name in storage
     */
    public $name;
	
    /**
     * File format Enum, available values: Ics, Msg
     */
    public $format;
	
    /**
     * Calendar update request
     */
    public $rq;
}
?>
