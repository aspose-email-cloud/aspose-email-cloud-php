<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="setEmailPropertyRequest.php">
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
 * Request model for setEmailProperty" operation.
 */
class setEmailPropertyRequest
{
    /*
     * Initializes a new instance of the setEmailPropertyRequest class.
     *  
     * @param string $property_name A property name that should be changed
     * @param string $file_name Email document file name
     * @param \Aspose\Email\Model\SetEmailPropertyRequest $request A property that should be changed and optional Storage info to specify             where the file located
     */
    public function __construct($property_name, $file_name, $request)             
    {
        $this->property_name = $property_name;
        $this->file_name = $file_name;
        $this->request = $request;
    }

    /*
     * A property name that should be changed
     */
    public $property_name;
	
    /*
     * Email document file name
     */
    public $file_name;
	
    /*
     * A property that should be changed and optional Storage info to specify             where the file located
     */
    public $request;
}
?>