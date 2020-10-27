<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiBcrParseStorageRequestBuilder.php">
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
 * AiBcrParseStorageRequestBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  AiBcrParseStorageRequest builder.
 */
class AiBcrParseStorageRequestBuilder
{
    /**
     * A model to build.
     * @var AiBcrParseStorageRequest
     */
    private $model;
    /**
     * Initializes a new instance of the AiBcrParseStorageRequestBuilder class.
     *
     * @param AiBcrParseStorageRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return AiBcrParseStorageRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets outFolder
     * @param \Aspose\Email\Model\StorageFolderLocation $outFolder Parse output folder location on storage
     * @return $this
     */
    public function outFolder($outFolder)
    {
        $this->model->setOutFolder($outFolder);
        return $this;
    }
    /**
     * Sets images
     * @param \Aspose\Email\Model\AiBcrImageStorageFile[] $images Images to parse.
     * @return $this
     */
    public function images($images)
    {
        $this->model->setImages($images);
        return $this;
    }
    /**
     * Sets options
     * @param \Aspose\Email\Model\AiBcrOptions $options Recognition options.
     * @return $this
     */
    public function options($options)
    {
        $this->model->setOptions($options);
        return $this;
    }
}

