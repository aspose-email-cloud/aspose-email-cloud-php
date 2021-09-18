<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarAsAlternateRequestBuilder.php">
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
 * CalendarAsAlternateRequestBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  CalendarAsAlternateRequest builder.
 */
class CalendarAsAlternateRequestBuilder
{
    /**
     * A model to build.
     * @var CalendarAsAlternateRequest
     */
    private $model;
    /**
     * Initializes a new instance of the CalendarAsAlternateRequestBuilder class.
     *
     * @param CalendarAsAlternateRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return CalendarAsAlternateRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets value
     * @param \Aspose\Email\Model\CalendarDto $value iCalendar document model
     * @return $this
     */
    public function value($value)
    {
        $this->model->setValue($value);
        return $this;
    }
    /**
     * Sets action
     * @param string $action iCalendar actions. Enum, available values: Create, Update, Cancel
     * @return $this
     */
    public function action($action)
    {
        $this->model->setAction($action);
        return $this;
    }
    /**
     * Sets sequenceId
     * @param string $sequenceId iCalendar sequence id
     * @return $this
     */
    public function sequenceId($sequenceId)
    {
        $this->model->setSequenceId($sequenceId);
        return $this;
    }
}

