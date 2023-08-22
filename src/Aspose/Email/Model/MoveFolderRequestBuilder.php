<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MoveFolderRequestBuilder.php">
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

namespace Aspose\Email\Model;

/**
 * Builder for MoveFolderRequest.
 */
class MoveFolderRequestBuilder
{
    /**
     * A model to build.
     * @var MoveFolderRequest
     */
    private $model;
    /**
     * Initializes a new instance of the MoveFolderRequestBuilder class.
     *
     * @param MoveFolderRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MoveFolderRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets src_path
     * @param string $src_path Folder path to move e.g. '/folder'
     * @return $this
     */
    public function src_path($src_path)
    {
        $this->model->src_path = $src_path;
        return $this;
    }
    /**
     * Sets dest_path
     * @param string $dest_path Destination folder path to move to e.g '/dst'
     * @return $this
     */
    public function dest_path($dest_path)
    {
        $this->model->dest_path = $dest_path;
        return $this;
    }
    /**
     * Sets src_storage_name
     * @param string $src_storage_name Source storage name
     * @return $this
     */
    public function src_storage_name($src_storage_name)
    {
        $this->model->src_storage_name = $src_storage_name;
        return $this;
    }
    /**
     * Sets dest_storage_name
     * @param string $dest_storage_name Destination storage name
     * @return $this
     */
    public function dest_storage_name($dest_storage_name)
    {
        $this->model->dest_storage_name = $dest_storage_name;
        return $this;
    }
}
