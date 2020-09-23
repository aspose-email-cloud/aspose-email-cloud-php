<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContentTypeBuilder.php">
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
 * ContentTypeBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  ContentType builder.
 */
class ContentTypeBuilder
{
    /**
     * A model to build.
     * @var ContentType
     */
    private $model;
    /**
     * Initializes a new instance of the ContentTypeBuilder class.
     *
     * @param ContentType $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ContentType Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets boundary
     * @param string $boundary The boundary parameter included in the Content-Type header.
     * @return $this
     */
    public function boundary($boundary)
    {
        $this->model->setBoundary($boundary);
        return $this;
    }
    /**
     * Sets charSet
     * @param string $charSet CharSet parameter.
     * @return $this
     */
    public function charSet($charSet)
    {
        $this->model->setCharSet($charSet);
        return $this;
    }
    /**
     * Sets mediaType
     * @param string $mediaType The internet media type.
     * @return $this
     */
    public function mediaType($mediaType)
    {
        $this->model->setMediaType($mediaType);
        return $this;
    }
    /**
     * Sets name
     * @param string $name Name parameter.
     * @return $this
     */
    public function name($name)
    {
        $this->model->setName($name);
        return $this;
    }
    /**
     * Sets parameters
     * @param \Aspose\Email\Model\ContentTypeParameter[] $parameters Full list of parameters
     * @return $this
     */
    public function parameters($parameters)
    {
        $this->model->setParameters($parameters);
        return $this;
    }
}

