<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="deleteContactPropertyRequest.php">
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
 * Request model for deleteContactProperty" operation.
 */
class deleteContactPropertyRequest
{
    /**
     * Initializes a new instance of the deleteContactPropertyRequest class.
     *  
     * @param string $format Contact document format Enum, available values: VCard, WebDav, Msg
     * @param string $name Contact document file name
     * @param string $member_name Indexed property name
     * @param int $index Property index
     * @param \Aspose\Email\Model\StorageFolderLocation $folder Calendar document location in storage information
     */
    public function __construct($format, $name, $member_name, $index, $folder)             
    {
        $this->format = $format;
        $this->name = $name;
        $this->member_name = $member_name;
        $this->index = $index;
        $this->folder = $folder;
    }

    /**
     * Contact document format Enum, available values: VCard, WebDav, Msg
     */
    public $format;
	
    /**
     * Contact document file name
     */
    public $name;
	
    /**
     * Indexed property name
     */
    public $member_name;
	
    /**
     * Property index
     */
    public $index;
	
    /**
     * Calendar document location in storage information
     */
    public $folder;
}
?>
