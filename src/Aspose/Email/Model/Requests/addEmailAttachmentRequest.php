<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="addEmailAttachmentRequest.php">
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
 * Request model for addEmailAttachment" operation.
 */
class addEmailAttachmentRequest
{
    /*
     * Initializes a new instance of the addEmailAttachmentRequest class.
     *  
     * @param string $attachment_name Attachment file name
     * @param string $file_name Email document file name
     * @param \Aspose\Email\Model\AddAttachmentRequest $request Storage info to specify location of email document and attachment files
     */
    public function __construct($attachment_name, $file_name, $request)             
    {
        $this->attachment_name = $attachment_name;
        $this->file_name = $file_name;
        $this->request = $request;
    }

    /*
     * Attachment file name
     */
    public $attachment_name;
	
    /*
     * Email document file name
     */
    public $file_name;
	
    /*
     * Storage info to specify location of email document and attachment files
     */
    public $request;
}
?>
