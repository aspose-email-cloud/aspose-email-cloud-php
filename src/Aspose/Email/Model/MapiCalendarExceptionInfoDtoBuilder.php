<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarExceptionInfoDtoBuilder.php">
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
 * MapiCalendarExceptionInfoDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiCalendarExceptionInfoDto builder.
 */
class MapiCalendarExceptionInfoDtoBuilder
{
    /**
     * A model to build.
     * @var MapiCalendarExceptionInfoDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiCalendarExceptionInfoDtoBuilder class.
     *
     * @param MapiCalendarExceptionInfoDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiCalendarExceptionInfoDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets attachments
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Attachments in the recurrence exception.
     * @return $this
     */
    public function attachments($attachments)
    {
        $this->model->setAttachments($attachments);
        return $this;
    }
    /**
     * Sets body
     * @param string $body Body.
     * @return $this
     */
    public function body($body)
    {
        $this->model->setBody($body);
        return $this;
    }
    /**
     * Sets busyStatus
     * @param string $busyStatus Enumerates the mapi calendar possible busy status Enum, available values: Free, Tentative, Busy, OutOfOffice
     * @return $this
     */
    public function busyStatus($busyStatus)
    {
        $this->model->setBusyStatus($busyStatus);
        return $this;
    }
    /**
     * Sets endDateTime
     * @param \DateTime $endDateTime End date.
     * @return $this
     */
    public function endDateTime($endDateTime)
    {
        $this->model->setEndDateTime($endDateTime);
        return $this;
    }
    /**
     * Sets hasAttachment
     * @param bool $hasAttachment Value of this field specifies whether the Exception Embedded Message object contains attachments.
     * @return $this
     */
    public function hasAttachment($hasAttachment)
    {
        $this->model->setHasAttachment($hasAttachment);
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
     * Sets meetingType
     * @param string $meetingType Enumerates the appointment state Enum, available values: Meeting, Received, Canceled
     * @return $this
     */
    public function meetingType($meetingType)
    {
        $this->model->setMeetingType($meetingType);
        return $this;
    }
    /**
     * Sets originalStartDate
     * @param \DateTime $originalStartDate Original start date.
     * @return $this
     */
    public function originalStartDate($originalStartDate)
    {
        $this->model->setOriginalStartDate($originalStartDate);
        return $this;
    }
    /**
     * Sets overrideFlags
     * @param string[] $overrideFlags Override flags. Items: Specifies what data in the MapiCalendarOverride structure has a value different from the recurring series. Enum, available values: Subject, MeetingType, ReminderDelta, Reminder, Location, BusyStatus, Attachment, Subtype, AppointmentColor, ExceptionalBody
     * @return $this
     */
    public function overrideFlags($overrideFlags)
    {
        $this->model->setOverrideFlags($overrideFlags);
        return $this;
    }
    /**
     * Sets reminderDelta
     * @param int $reminderDelta Reminder delta.
     * @return $this
     */
    public function reminderDelta($reminderDelta)
    {
        $this->model->setReminderDelta($reminderDelta);
        return $this;
    }
    /**
     * Sets reminderSet
     * @param bool $reminderSet Value for the PidLidReminderSet property.
     * @return $this
     */
    public function reminderSet($reminderSet)
    {
        $this->model->setReminderSet($reminderSet);
        return $this;
    }
    /**
     * Sets startDateTime
     * @param \DateTime $startDateTime Start date.
     * @return $this
     */
    public function startDateTime($startDateTime)
    {
        $this->model->setStartDateTime($startDateTime);
        return $this;
    }
    /**
     * Sets subject
     * @param string $subject Subject.
     * @return $this
     */
    public function subject($subject)
    {
        $this->model->setSubject($subject);
        return $this;
    }
    /**
     * Sets subType
     * @param int $subType SubType.
     * @return $this
     */
    public function subType($subType)
    {
        $this->model->setSubType($subType);
        return $this;
    }
}

