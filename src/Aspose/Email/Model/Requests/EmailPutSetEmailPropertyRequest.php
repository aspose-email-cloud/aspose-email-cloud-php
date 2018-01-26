<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailPutSetEmailPropertyRequest.php">
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
 * Request model for emailPutSetEmailProperty" operation.
 */
class EmailPutSetEmailPropertyRequest
{
    /*
     * Initializes a new instance of the EmailPutSetEmailPropertyRequest class.
     *  
     * @param string $name 
     * @param string $property_name 
     * @param \Aspose\Email\Model\EmailProperty $property 
     * @param string $storage 
     * @param string $folder 
     */
    public function __construct($name, $property_name, $property = null, $storage = null, $folder = null)             
    {
        $this->name = $name;
        $this->property_name = $property_name;
        $this->property = $property;
        $this->storage = $storage;
        $this->folder = $folder;
    }

    /*
     * Gets or sets name
     */
    public $name;
	
    /*
     * Gets or sets property_name
     */
    public $property_name;
	
    /*
     * Gets or sets property
     */
    public $property;
	
    /*
     * Gets or sets storage
     */
    public $storage;
	
    /*
     * Gets or sets folder
     */
    public $folder;
}
