<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="saveMapiMessageModelRequest.php">
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
 * Request model for saveMapiMessageModel" operation.
 */
class SaveMapiMessageModelRequest
{
    /**
     * Initializes a new instance of the SaveMapiMessageModelRequest class.
     *  
     * @param string $format File format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html
     * @param string $name Message file name in storage.
     * @param \Aspose\Email\Model\StorageModelRqOfMapiMessageDto $rq Message create/update request.
     */
    public function __construct($format, $name, $rq)             
    {
        $this->format = $format;
        $this->name = $name;
        $this->rq = $rq;
    }

    /**
     * File format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html
     */
    public $format;
	
    /**
     * Message file name in storage.
     */
    public $name;
	
    /**
     * Message create/update request.
     */
    public $rq;
}
?>
