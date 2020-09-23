<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarGetAsFileRequestBuilder.php">
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
 * Builder for CalendarGetAsFileRequest.
 */
class CalendarGetAsFileRequestBuilder
{
    /**
     * A model to build.
     * @var CalendarGetAsFileRequest
     */
    private $model;
    /**
     * Initializes a new instance of the CalendarGetAsFileRequestBuilder class.
     *
     * @param CalendarGetAsFileRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return CalendarGetAsFileRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets file_name
     * @param string $file_name Calendar document file name.
     * @return $this
     */
    public function file_name($file_name)
    {
        $this->model->file_name = $file_name;
        return $this;
    }
    /**
     * Sets format
     * @param string $format File format. Enum, available values: Ics, Msg
     * @return $this
     */
    public function format($format)
    {
        $this->model->format = $format;
        return $this;
    }
    /**
     * Sets storage
     * @param string $storage Storage name.
     * @return $this
     */
    public function storage($storage)
    {
        $this->model->storage = $storage;
        return $this;
    }
    /**
     * Sets folder
     * @param string $folder Path to folder in storage.
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->folder = $folder;
        return $this;
    }
}
