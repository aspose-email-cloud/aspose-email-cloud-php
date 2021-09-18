<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarDtoBuilder.php">
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
 * CalendarDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  CalendarDto builder.
 */
class CalendarDtoBuilder
{
    /**
     * A model to build.
     * @var CalendarDto
     */
    private $model;
    /**
     * Initializes a new instance of the CalendarDtoBuilder class.
     *
     * @param CalendarDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return CalendarDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets attachments
     * @param \Aspose\Email\Model\Attachment[] $attachments Document attachments.
     * @return $this
     */
    public function attachments($attachments)
    {
        $this->model->setAttachments($attachments);
        return $this;
    }
    /**
     * Sets attendees
     * @param \Aspose\Email\Model\MailAddress[] $attendees Event attendees.
     * @return $this
     */
    public function attendees($attendees)
    {
        $this->model->setAttendees($attendees);
        return $this;
    }
    /**
     * Sets description
     * @param string $description Description.
     * @return $this
     */
    public function description($description)
    {
        $this->model->setDescription($description);
        return $this;
    }
    /**
     * Sets endDate
     * @param \DateTime $endDate End date.
     * @return $this
     */
    public function endDate($endDate)
    {
        $this->model->setEndDate($endDate);
        return $this;
    }
    /**
     * Sets endTimeZone
     * @param string $endTimeZone End time zone.
     * @return $this
     */
    public function endTimeZone($endTimeZone)
    {
        $this->model->setEndTimeZone($endTimeZone);
        return $this;
    }
    /**
     * Sets flags
     * @param string[] $flags Appointment flags. Items: Enumerates iCalendar flags./nEnum, available values: None, AllDayEvent
     * @return $this
     */
    public function flags($flags)
    {
        $this->model->setFlags($flags);
        return $this;
    }
    /**
     * Sets isDescriptionHtml
     * @param bool $isDescriptionHtml Indicates if description is in HTML format.
     * @return $this
     */
    public function isDescriptionHtml($isDescriptionHtml)
    {
        $this->model->setIsDescriptionHtml($isDescriptionHtml);
        return $this;
    }
    /**
     * Sets location
     * @param string $location Location.
     * @return $this
     */
    public function location($location)
    {
        $this->model->setLocation($location);
        return $this;
    }
    /**
     * Sets method
     * @param string $method Defines the iCalendar object method type associated with the calendar document./nEnum, available values: None, Publish, Request, Reply, Add, Cancel, Refresh, Counter, DeclineCounter
     * @return $this
     */
    public function method($method)
    {
        $this->model->setMethod($method);
        return $this;
    }
    /**
     * Sets microsoftBusyStatus
     * @param string $microsoftBusyStatus Specifies the BUSY status./nEnum, available values: NotDefined, Free, Tentative, Busy, Oof
     * @return $this
     */
    public function microsoftBusyStatus($microsoftBusyStatus)
    {
        $this->model->setMicrosoftBusyStatus($microsoftBusyStatus);
        return $this;
    }
    /**
     * Sets microsoftIntendedStatus
     * @param string $microsoftIntendedStatus Specifies the INTENDED status./nEnum, available values: NotDefined, Free, Tentative, Busy, Oof
     * @return $this
     */
    public function microsoftIntendedStatus($microsoftIntendedStatus)
    {
        $this->model->setMicrosoftIntendedStatus($microsoftIntendedStatus);
        return $this;
    }
    /**
     * Sets optionalAttendees
     * @param \Aspose\Email\Model\MailAddress[] $optionalAttendees Optional attendees.
     * @return $this
     */
    public function optionalAttendees($optionalAttendees)
    {
        $this->model->setOptionalAttendees($optionalAttendees);
        return $this;
    }
    /**
     * Sets organizer
     * @param \Aspose\Email\Model\MailAddress $organizer Event organizer.
     * @return $this
     */
    public function organizer($organizer)
    {
        $this->model->setOrganizer($organizer);
        return $this;
    }
    /**
     * Sets recurrenceString
     * @param string $recurrenceString Deprecated, use 'Recurrence' property. String representation of recurrence pattern (See iCalendar RFC, \"Recurrence rule\" section). For example:               For daily recurrence:         \"FREQ=DAILY;COUNT=10;WKST=MO\"                   For monthly recurrence:         \"BYSETPOS=1;BYDAY=MO,TU,WE,TH,FR;FREQ=MONTHLY;INTERVAL=10;WKST=MO\"                   For yearly recurrence:         \"BYMONTHDAY=30;BYMONTH=1;FREQ=YEARLY;WKST=MO\"
     * @return $this
     */
    public function recurrenceString($recurrenceString)
    {
        $this->model->setRecurrenceString($recurrenceString);
        return $this;
    }
    /**
     * Sets recurrence
     * @param \Aspose\Email\Model\RecurrencePatternDto $recurrence Recurrence pattern
     * @return $this
     */
    public function recurrence($recurrence)
    {
        $this->model->setRecurrence($recurrence);
        return $this;
    }
    /**
     * Sets reminders
     * @param \Aspose\Email\Model\CalendarReminder[] $reminders Reminders.
     * @return $this
     */
    public function reminders($reminders)
    {
        $this->model->setReminders($reminders);
        return $this;
    }
    /**
     * Sets sequenceId
     * @param string $sequenceId The sequence id. Read only.
     * @return $this
     */
    public function sequenceId($sequenceId)
    {
        $this->model->setSequenceId($sequenceId);
        return $this;
    }
    /**
     * Sets startDate
     * @param \DateTime $startDate Start date.
     * @return $this
     */
    public function startDate($startDate)
    {
        $this->model->setStartDate($startDate);
        return $this;
    }
    /**
     * Sets startTimeZone
     * @param string $startTimeZone Start time zone.
     * @return $this
     */
    public function startTimeZone($startTimeZone)
    {
        $this->model->setStartTimeZone($startTimeZone);
        return $this;
    }
    /**
     * Sets status
     * @param string $status Defines the overall status or confirmation for the calendar document./nEnum, available values: NotDefined, Cancelled, Tentative, Confirmed
     * @return $this
     */
    public function status($status)
    {
        $this->model->setStatus($status);
        return $this;
    }
    /**
     * Sets summary
     * @param string $summary Summary.
     * @return $this
     */
    public function summary($summary)
    {
        $this->model->setSummary($summary);
        return $this;
    }
    /**
     * Sets transparency
     * @param string $transparency Specifies whether or not this appointment is intended to be visible in availability searches./nEnum, available values: NotDefined, Transparent, Opaque
     * @return $this
     */
    public function transparency($transparency)
    {
        $this->model->setTransparency($transparency);
        return $this;
    }
    /**
     * Sets class
     * @param string $class Defines the access classification for the calendar./nEnum, available values: Public, Private, Confidential, NotDefined
     * @return $this
     */
    public function class($class)
    {
        $this->model->setClass($class);
        return $this;
    }
    /**
     * Sets microsoftImportance
     * @param string $microsoftImportance Specifies the importance of a calendar object./nEnum, available values: Low, Normal, High, NotDefined
     * @return $this
     */
    public function microsoftImportance($microsoftImportance)
    {
        $this->model->setMicrosoftImportance($microsoftImportance);
        return $this;
    }
}

