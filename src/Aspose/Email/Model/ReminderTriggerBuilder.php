<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReminderTriggerBuilder.php">
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
 * ReminderTriggerBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  ReminderTrigger builder.
 */
class ReminderTriggerBuilder
{
    /**
     * A model to build.
     * @var ReminderTrigger
     */
    private $model;
    /**
     * Initializes a new instance of the ReminderTriggerBuilder class.
     *
     * @param ReminderTrigger $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ReminderTrigger Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets dateTime
     * @param \DateTime $dateTime A trigger set to an absolute date/time.
     * @return $this
     */
    public function dateTime($dateTime)
    {
        $this->model->setDateTime($dateTime);
        return $this;
    }
    /**
     * Sets duration
     * @param int $duration Specifies a relative time in ticks for the trigger of the alarm.
     * @return $this
     */
    public function duration($duration)
    {
        $this->model->setDuration($duration);
        return $this;
    }
    /**
     * Sets related
     * @param string $related Specify the relationship of the alarm trigger with respect to the start or end of the event. Enum, available values: Start, End
     * @return $this
     */
    public function related($related)
    {
        $this->model->setRelated($related);
        return $this;
    }
}

