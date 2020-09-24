<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LinkedResourceBuilder.php">
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
/**
 * LinkedResourceBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  LinkedResource builder.
 */
class LinkedResourceBuilder
{
    /**
     * A model to build.
     * @var LinkedResource
     */
    private $model;
    /**
     * Initializes a new instance of the LinkedResourceBuilder class.
     *
     * @param LinkedResource $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return LinkedResource Built model.
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
     * Sets contentLink
     * @param string $contentLink URI that the resource must match.
     * @return $this
     */
    public function contentLink($contentLink)
    {
        $this->model->setContentLink($contentLink);
        return $this;
    }
}

