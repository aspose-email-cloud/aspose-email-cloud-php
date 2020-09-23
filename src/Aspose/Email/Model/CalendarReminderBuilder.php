<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarReminderBuilder.php">
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
 * CalendarReminderBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  CalendarReminder builder.
 */
class CalendarReminderBuilder
{
    /**
     * A model to build.
     * @var CalendarReminder
     */
    private $model;
    /**
     * Initializes a new instance of the CalendarReminderBuilder class.
     *
     * @param CalendarReminder $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return CalendarReminder Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets action
     * @param string $action Defines the action to be invoked when an alarm is triggered. Enum, available values: Audio, Display, Email, Procedure, None
     * @return $this
     */
    public function action($action)
    {
        $this->model->setAction($action);
        return $this;
    }
    /**
     * Sets attachments
     * @param string[] $attachments Collection of Reminder Attachments. Could be an absolute URI or Base64 string representation of attachment content
     * @return $this
     */
    public function attachments($attachments)
    {
        $this->model->setAttachments($attachments);
        return $this;
    }
    /**
     * Sets attendees
     * @param \Aspose\Email\Model\ReminderAttendee[] $attendees Contains collection of ReminderAttendee objects.
     * @return $this
     */
    public function attendees($attendees)
    {
        $this->model->setAttendees($attendees);
        return $this;
    }
    /**
     * Sets description
     * @param string $description Provides a more complete description of the alarm.
     * @return $this
     */
    public function description($description)
    {
        $this->model->setDescription($description);
        return $this;
    }
    /**
     * Sets duration
     * @param int $duration Specifies the delay period in ticks, after which the alarm will repeat.
     * @return $this
     */
    public function duration($duration)
    {
        $this->model->setDuration($duration);
        return $this;
    }
    /**
     * Sets repeat
     * @param int $repeat Defines the number of time the alarm should be repeated, after the initial trigger.
     * @return $this
     */
    public function repeat($repeat)
    {
        $this->model->setRepeat($repeat);
        return $this;
    }
    /**
     * Sets summary
     * @param string $summary Defines a short summary or subject for the alarm.
     * @return $this
     */
    public function summary($summary)
    {
        $this->model->setSummary($summary);
        return $this;
    }
    /**
     * Sets trigger
     * @param \Aspose\Email\Model\ReminderTrigger $trigger Specifies when an alarm will trigger.
     * @return $this
     */
    public function trigger($trigger)
    {
        $this->model->setTrigger($trigger);
        return $this;
    }
}

