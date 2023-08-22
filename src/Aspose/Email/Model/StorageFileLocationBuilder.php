<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StorageFileLocationBuilder.php">
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
 * StorageFileLocationBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  StorageFileLocation builder.
 */
class StorageFileLocationBuilder
{
    /**
     * A model to build.
     * @var StorageFileLocation
     */
    private $model;
    /**
     * Initializes a new instance of the StorageFileLocationBuilder class.
     *
     * @param StorageFileLocation $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return StorageFileLocation Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets storage
     * @param string $storage A storage name
     * @return $this
     */
    public function storage($storage)
    {
        $this->model->setStorage($storage);
        return $this;
    }
    /**
     * Sets folderPath
     * @param string $folderPath A path to a folder in specified storage
     * @return $this
     */
    public function folderPath($folderPath)
    {
        $this->model->setFolderPath($folderPath);
        return $this;
    }
    /**
     * Sets fileName
     * @param string $fileName A file name in storage
     * @return $this
     */
    public function fileName($fileName)
    {
        $this->model->setFileName($fileName);
        return $this;
    }
}

