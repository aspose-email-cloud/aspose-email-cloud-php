<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarGetAsAlternateRequestBuilder.php">
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
 * Builder for CalendarGetAsAlternateRequest.
 */
class CalendarGetAsAlternateRequestBuilder
{
    /**
     * A model to build.
     * @var CalendarGetAsAlternateRequest
     */
    private $model;
    /**
     * Initializes a new instance of the CalendarGetAsAlternateRequestBuilder class.
     *
     * @param CalendarGetAsAlternateRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return CalendarGetAsAlternateRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets file_name
     * @param string $file_name iCalendar file name in storage
     * @return $this
     */
    public function file_name($file_name)
    {
        $this->model->file_name = $file_name;
        return $this;
    }
    /**
     * Sets calendar_action
     * @param string $calendar_action iCalendar method type. Enum, available values: Create, Update, Cancel
     * @return $this
     */
    public function calendar_action($calendar_action)
    {
        $this->model->calendar_action = $calendar_action;
        return $this;
    }
    /**
     * Sets sequence_id
     * @param string $sequence_id The sequence id
     * @return $this
     */
    public function sequence_id($sequence_id)
    {
        $this->model->sequence_id = $sequence_id;
        return $this;
    }
    /**
     * Sets folder
     * @param string $folder Path to folder in storage
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->folder = $folder;
        return $this;
    }
    /**
     * Sets storage
     * @param string $storage Storage name
     * @return $this
     */
    public function storage($storage)
    {
        $this->model->storage = $storage;
        return $this;
    }
}
