<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarDtoBuilder.php">
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
 * MapiCalendarDtoBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiCalendarDto builder.
 */
class MapiCalendarDtoBuilder
{
    /**
     * A model to build.
     * @var MapiCalendarDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiCalendarDtoBuilder class.
     *
     * @param MapiCalendarDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiCalendarDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets attachments
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Message item attachments.
     * @return $this
     */
    public function attachments($attachments)
    {
        $this->model->setAttachments($attachments);
        return $this;
    }
    /**
     * Sets billing
     * @param string $billing Billing information associated with an item.
     * @return $this
     */
    public function billing($billing)
    {
        $this->model->setBilling($billing);
        return $this;
    }
    /**
     * Sets body
     * @param string $body Message text.
     * @return $this
     */
    public function body($body)
    {
        $this->model->setBody($body);
        return $this;
    }
    /**
     * Sets bodyHtml
     * @param string $bodyHtml Gets the BodyRtf of the message converted to HTML, if present, otherwise an empty string.
     * @return $this
     */
    public function bodyHtml($bodyHtml)
    {
        $this->model->setBodyHtml($bodyHtml);
        return $this;
    }
    /**
     * Sets bodyRtf
     * @param string $bodyRtf RTF formatted message text.
     * @return $this
     */
    public function bodyRtf($bodyRtf)
    {
        $this->model->setBodyRtf($bodyRtf);
        return $this;
    }
    /**
     * Sets bodyType
     * @param string $bodyType The content type of message body./nEnum, available values: PlainText, Html, Rtf
     * @return $this
     */
    public function bodyType($bodyType)
    {
        $this->model->setBodyType($bodyType);
        return $this;
    }
    /**
     * Sets categories
     * @param string[] $categories Contains keywords or categories for the message object.
     * @return $this
     */
    public function categories($categories)
    {
        $this->model->setCategories($categories);
        return $this;
    }
    /**
     * Sets companies
     * @param string[] $companies Contains the names of the companies that are associated with an item.
     * @return $this
     */
    public function companies($companies)
    {
        $this->model->setCompanies($companies);
        return $this;
    }
    /**
     * Sets itemId
     * @param string $itemId The item id, uses with a server.
     * @return $this
     */
    public function itemId($itemId)
    {
        $this->model->setItemId($itemId);
        return $this;
    }
    /**
     * Sets messageClass
     * @param string $messageClass Case-sensitive string that identifies the sender-defined message class, such as IPM.Note. The message class specifies the type, purpose, or content of the message.
     * @return $this
     */
    public function messageClass($messageClass)
    {
        $this->model->setMessageClass($messageClass);
        return $this;
    }
    /**
     * Sets mileage
     * @param string $mileage Contains the mileage information that is associated with an item.
     * @return $this
     */
    public function mileage($mileage)
    {
        $this->model->setMileage($mileage);
        return $this;
    }
    /**
     * Sets recipients
     * @param \Aspose\Email\Model\MapiRecipientDto[] $recipients Recipients of the message.
     * @return $this
     */
    public function recipients($recipients)
    {
        $this->model->setRecipients($recipients);
        return $this;
    }
    /**
     * Sets sensitivity
     * @param string $sensitivity Contains values that indicate the message sensitivity./nEnum, available values: None, Personal, Private, CompanyConfidential
     * @return $this
     */
    public function sensitivity($sensitivity)
    {
        $this->model->setSensitivity($sensitivity);
        return $this;
    }
    /**
     * Sets subject
     * @param string $subject Subject of the message.
     * @return $this
     */
    public function subject($subject)
    {
        $this->model->setSubject($subject);
        return $this;
    }
    /**
     * Sets subjectPrefix
     * @param string $subjectPrefix Subject prefix that typically indicates some action on a message, such as \"FW: \" for forwarding.
     * @return $this
     */
    public function subjectPrefix($subjectPrefix)
    {
        $this->model->setSubjectPrefix($subjectPrefix);
        return $this;
    }
    /**
     * Sets properties
     * @param \Aspose\Email\Model\MapiPropertyDto[] $properties List of MAPI properties
     * @return $this
     */
    public function properties($properties)
    {
        $this->model->setProperties($properties);
        return $this;
    }
    /**
     * Sets appointmentCounterProposal
     * @param bool $appointmentCounterProposal Value indicating whether a Meeting Response object is a counter proposal.
     * @return $this
     */
    public function appointmentCounterProposal($appointmentCounterProposal)
    {
        $this->model->setAppointmentCounterProposal($appointmentCounterProposal);
        return $this;
    }
    /**
     * Sets attendees
     * @param \Aspose\Email\Model\MapiCalendarAttendeesDto $attendees Attendees
     * @return $this
     */
    public function attendees($attendees)
    {
        $this->model->setAttendees($attendees);
        return $this;
    }
    /**
     * Sets busyStatus
     * @param string $busyStatus Enumerates the mapi calendar possible busy status./nEnum, available values: Free, Tentative, Busy, OutOfOffice
     * @return $this
     */
    public function busyStatus($busyStatus)
    {
        $this->model->setBusyStatus($busyStatus);
        return $this;
    }
    /**
     * Sets clientIntent
     * @param string[] $clientIntent Actions the user has taken on this Meeting object. Items: Enumerates the actions the user can taken on the Meeting object./nEnum, available values: Manager, Delegate, DeletedWithNoResponse, DeletedExceptionWithNoResponse, RespondedTentative, RespondedAccept, RespondedDecline, ModifiedStartTime, ModifiedEndTime, ModifiedLocation, RespondedExceptionDecline, Canceled, ExceptionCanceled
     * @return $this
     */
    public function clientIntent($clientIntent)
    {
        $this->model->setClientIntent($clientIntent);
        return $this;
    }
    /**
     * Sets endDate
     * @param \DateTime $endDate End date and time of the event. If the date is not set, default value for DateTime is returned.
     * @return $this
     */
    public function endDate($endDate)
    {
        $this->model->setEndDate($endDate);
        return $this;
    }
    /**
     * Sets endDateTimeZone
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $endDateTimeZone Time zone information that indicates the time zone of the EndDate property.
     * @return $this
     */
    public function endDateTimeZone($endDateTimeZone)
    {
        $this->model->setEndDateTimeZone($endDateTimeZone);
        return $this;
    }
    /**
     * Sets isAllDay
     * @param bool $isAllDay Value indicating whether the event is an all-day event.
     * @return $this
     */
    public function isAllDay($isAllDay)
    {
        $this->model->setIsAllDay($isAllDay);
        return $this;
    }
    /**
     * Sets keyWords
     * @param string $keyWords Categories of the calendar object.
     * @return $this
     */
    public function keyWords($keyWords)
    {
        $this->model->setKeyWords($keyWords);
        return $this;
    }
    /**
     * Sets location
     * @param string $location Location of the event.
     * @return $this
     */
    public function location($location)
    {
        $this->model->setLocation($location);
        return $this;
    }
    /**
     * Sets recurrence
     * @param \Aspose\Email\Model\MapiCalendarEventRecurrenceDto $recurrence Recurrence properties.
     * @return $this
     */
    public function recurrence($recurrence)
    {
        $this->model->setRecurrence($recurrence);
        return $this;
    }
    /**
     * Sets reminderDelta
     * @param int $reminderDelta Interval, in minutes, between the time at which the reminder first becomes overdue and the start time of the Calendar object.
     * @return $this
     */
    public function reminderDelta($reminderDelta)
    {
        $this->model->setReminderDelta($reminderDelta);
        return $this;
    }
    /**
     * Sets reminderFileParameter
     * @param string $reminderFileParameter Full path of the sound that a client SHOULD play when the reminder becomes overdue.
     * @return $this
     */
    public function reminderFileParameter($reminderFileParameter)
    {
        $this->model->setReminderFileParameter($reminderFileParameter);
        return $this;
    }
    /**
     * Sets reminderSet
     * @param bool $reminderSet Value indicating whether a reminder is set on the object.
     * @return $this
     */
    public function reminderSet($reminderSet)
    {
        $this->model->setReminderSet($reminderSet);
        return $this;
    }
    /**
     * Sets sequence
     * @param int $sequence Sequence number.
     * @return $this
     */
    public function sequence($sequence)
    {
        $this->model->setSequence($sequence);
        return $this;
    }
    /**
     * Sets startDate
     * @param \DateTime $startDate Start date and time of the event. If the date is not set, default value for DateTime is returned.
     * @return $this
     */
    public function startDate($startDate)
    {
        $this->model->setStartDate($startDate);
        return $this;
    }
    /**
     * Sets startDateTimeZone
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $startDateTimeZone Time zone information that indicates the time zone of the StartDate property.
     * @return $this
     */
    public function startDateTimeZone($startDateTimeZone)
    {
        $this->model->setStartDateTimeZone($startDateTimeZone);
        return $this;
    }
    /**
     * Sets uid
     * @param string $uid Unique identifier.
     * @return $this
     */
    public function uid($uid)
    {
        $this->model->setUid($uid);
        return $this;
    }
    /**
     * Sets organizer
     * @param \Aspose\Email\Model\MapiElectronicAddressDto $organizer Organizer
     * @return $this
     */
    public function organizer($organizer)
    {
        $this->model->setOrganizer($organizer);
        return $this;
    }
}

