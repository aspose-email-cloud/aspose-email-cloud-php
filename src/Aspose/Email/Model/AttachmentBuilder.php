<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AttachmentBuilder.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
/**
 * AttachmentBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  Attachment builder.
 */
class AttachmentBuilder
{
    /**
     * A model to build.
     * @var Attachment
     */
    private $model;
    /**
     * Initializes a new instance of the AttachmentBuilder class.
     *
     * @param Attachment $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return Attachment Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets base64Data
     * @param string $base64Data Attachment file content as Base64 string.
     * @return $this
     */
    public function base64Data($base64Data)
    {
        $this->model->setBase64Data($base64Data);
        return $this;
    }
    /**
     * Sets contentId
     * @param string $contentId Attachment content id
     * @return $this
     */
    public function contentId($contentId)
    {
        $this->model->setContentId($contentId);
        return $this;
    }
    /**
     * Sets contentType
     * @param \Aspose\Email\Model\ContentType $contentType Content type
     * @return $this
     */
    public function contentType($contentType)
    {
        $this->model->setContentType($contentType);
        return $this;
    }
    /**
     * Sets headers
     * @param map[string,string] $headers Attachment headers.
     * @return $this
     */
    public function headers($headers)
    {
        $this->model->setHeaders($headers);
        return $this;
    }
    /**
     * Sets contentDisposition
     * @param string $contentDisposition Content-Disposition header. Read only.
     * @return $this
     */
    public function contentDisposition($contentDisposition)
    {
        $this->model->setContentDisposition($contentDisposition);
        return $this;
    }
    /**
     * Sets isEmbeddedMessage
     * @param bool $isEmbeddedMessage Determines if attachment is an embedded message. Read only.
     * @return $this
     */
    public function isEmbeddedMessage($isEmbeddedMessage)
    {
        $this->model->setIsEmbeddedMessage($isEmbeddedMessage);
        return $this;
    }
    /**
     * Sets name
     * @param string $name Attachment name.
     * @return $this
     */
    public function name($name)
    {
        $this->model->setName($name);
        return $this;
    }
    /**
     * Sets nameEncoding
     * @param string $nameEncoding Encoding of attachment name.
     * @return $this
     */
    public function nameEncoding($nameEncoding)
    {
        $this->model->setNameEncoding($nameEncoding);
        return $this;
    }
    /**
     * Sets preferredTextEncoding
     * @param string $preferredTextEncoding Preferred text encoding.
     * @return $this
     */
    public function preferredTextEncoding($preferredTextEncoding)
    {
        $this->model->setPreferredTextEncoding($preferredTextEncoding);
        return $this;
    }
}

