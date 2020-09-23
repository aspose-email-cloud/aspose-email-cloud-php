<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StorageFileBuilder.php">
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
 * StorageFileBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  StorageFile builder.
 */
class StorageFileBuilder
{
    /**
     * A model to build.
     * @var StorageFile
     */
    private $model;
    /**
     * Initializes a new instance of the StorageFileBuilder class.
     *
     * @param StorageFile $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return StorageFile Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets name
     * @param string $name File or folder name.
     * @return $this
     */
    public function name($name)
    {
        $this->model->setName($name);
        return $this;
    }
    /**
     * Sets isFolder
     * @param bool $isFolder True if it is a folder.
     * @return $this
     */
    public function isFolder($isFolder)
    {
        $this->model->setIsFolder($isFolder);
        return $this;
    }
    /**
     * Sets modifiedDate
     * @param \DateTime $modifiedDate File or folder last modified DateTime.
     * @return $this
     */
    public function modifiedDate($modifiedDate)
    {
        $this->model->setModifiedDate($modifiedDate);
        return $this;
    }
    /**
     * Sets size
     * @param int $size File or folder size.
     * @return $this
     */
    public function size($size)
    {
        $this->model->setSize($size);
        return $this;
    }
    /**
     * Sets path
     * @param string $path File or folder path.
     * @return $this
     */
    public function path($path)
    {
        $this->model->setPath($path);
        return $this;
    }
}

