<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteFileRequestBuilder.php">
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

namespace Aspose\Email\Model;

/**
 * Builder for DeleteFileRequest.
 */
class DeleteFileRequestBuilder
{
    /**
     * A model to build.
     * @var DeleteFileRequest
     */
    private $model;
    /**
     * Initializes a new instance of the DeleteFileRequestBuilder class.
     *
     * @param DeleteFileRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return DeleteFileRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets path
     * @param string $path File path e.g. '/folder/file.ext'
     * @return $this
     */
    public function path($path)
    {
        $this->model->path = $path;
        return $this;
    }
    /**
     * Sets storage_name
     * @param string $storage_name Storage name
     * @return $this
     */
    public function storage_name($storage_name)
    {
        $this->model->storage_name = $storage_name;
        return $this;
    }
    /**
     * Sets version_id
     * @param string $version_id File version ID to delete
     * @return $this
     */
    public function version_id($version_id)
    {
        $this->model->version_id = $version_id;
        return $this;
    }
}
