<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarDto.php">
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
 * MapiCalendarDto
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarDto
 *
 * @description Represents the mapi calendar object
 */
class MapiCalendarDto extends MapiMessageItemBaseDto 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appointment_counter_proposal' => 'bool',
        'attendees' => '\Aspose\Email\Model\MapiCalendarAttendeesDto',
        'busy_status' => 'string',
        'client_intent' => 'string[]',
        'end_date' => '\DateTime',
        'end_date_time_zone' => '\Aspose\Email\Model\MapiCalendarTimeZoneDto',
        'is_all_day' => 'bool',
        'key_words' => 'string',
        'location' => 'string',
        'recurrence' => '\Aspose\Email\Model\MapiCalendarEventRecurrenceDto',
        'reminder_delta' => 'int',
        'reminder_file_parameter' => 'string',
        'reminder_set' => 'bool',
        'sequence' => 'int',
        'start_date' => '\DateTime',
        'start_date_time_zone' => '\Aspose\Email\Model\MapiCalendarTimeZoneDto',
        'uid' => 'string',
        'organizer' => '\Aspose\Email\Model\MapiElectronicAddressDto'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appointment_counter_proposal' => null,
        'attendees' => null,
        'busy_status' => null,
        'client_intent' => null,
        'end_date' => 'date-time',
        'end_date_time_zone' => null,
        'is_all_day' => null,
        'key_words' => null,
        'location' => null,
        'recurrence' => null,
        'reminder_delta' => 'int32',
        'reminder_file_parameter' => null,
        'reminder_set' => null,
        'sequence' => 'int32',
        'start_date' => 'date-time',
        'start_date_time_zone' => null,
        'uid' => null,
        'organizer' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'appointment_counter_proposal' => 'appointmentCounterProposal',
        'attendees' => 'attendees',
        'busy_status' => 'busyStatus',
        'client_intent' => 'clientIntent',
        'end_date' => 'endDate',
        'end_date_time_zone' => 'endDateTimeZone',
        'is_all_day' => 'isAllDay',
        'key_words' => 'keyWords',
        'location' => 'location',
        'recurrence' => 'recurrence',
        'reminder_delta' => 'reminderDelta',
        'reminder_file_parameter' => 'reminderFileParameter',
        'reminder_set' => 'reminderSet',
        'sequence' => 'sequence',
        'start_date' => 'startDate',
        'start_date_time_zone' => 'startDateTimeZone',
        'uid' => 'uid',
        'organizer' => 'organizer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_counter_proposal' => 'setAppointmentCounterProposal',
        'attendees' => 'setAttendees',
        'busy_status' => 'setBusyStatus',
        'client_intent' => 'setClientIntent',
        'end_date' => 'setEndDate',
        'end_date_time_zone' => 'setEndDateTimeZone',
        'is_all_day' => 'setIsAllDay',
        'key_words' => 'setKeyWords',
        'location' => 'setLocation',
        'recurrence' => 'setRecurrence',
        'reminder_delta' => 'setReminderDelta',
        'reminder_file_parameter' => 'setReminderFileParameter',
        'reminder_set' => 'setReminderSet',
        'sequence' => 'setSequence',
        'start_date' => 'setStartDate',
        'start_date_time_zone' => 'setStartDateTimeZone',
        'uid' => 'setUid',
        'organizer' => 'setOrganizer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_counter_proposal' => 'getAppointmentCounterProposal',
        'attendees' => 'getAttendees',
        'busy_status' => 'getBusyStatus',
        'client_intent' => 'getClientIntent',
        'end_date' => 'getEndDate',
        'end_date_time_zone' => 'getEndDateTimeZone',
        'is_all_day' => 'getIsAllDay',
        'key_words' => 'getKeyWords',
        'location' => 'getLocation',
        'recurrence' => 'getRecurrence',
        'reminder_delta' => 'getReminderDelta',
        'reminder_file_parameter' => 'getReminderFileParameter',
        'reminder_set' => 'getReminderSet',
        'sequence' => 'getSequence',
        'start_date' => 'getStartDate',
        'start_date_time_zone' => 'getStartDateTimeZone',
        'uid' => 'getUid',
        'organizer' => 'getOrganizer'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /**
     * Initializes a new instance of the MapiCalendarDto class.
     *  
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Message item attachments.
     * @param string $billing Billing information associated with an item.
     * @param string $body Message text.
     * @param string $body_html Gets the BodyRtf of the message converted to HTML, if present, otherwise an empty string.
     * @param string $body_rtf RTF formatted message text.
     * @param string $body_type The content type of message body. Enum, available values: PlainText, Html, Rtf
     * @param string[] $categories Contains keywords or categories for the message object.
     * @param string[] $companies Contains the names of the companies that are associated with an item.
     * @param string $item_id The item id, uses with a server.
     * @param string $message_class Case-sensitive string that identifies the sender-defined message class, such as IPM.Note. The message class specifies the type, purpose, or content of the message.
     * @param string $mileage Contains the mileage information that is associated with an item.
     * @param \Aspose\Email\Model\MapiRecipientDto[] $recipients Recipients of the message.
     * @param string $sensitivity Contains values that indicate the message sensitivity. Enum, available values: None, Personal, Private, CompanyConfidential
     * @param string $subject Subject of the message.
     * @param string $subject_prefix Subject prefix that typically indicates some action on a message, such as \"FW: \" for forwarding.
     * @param \Aspose\Email\Model\MapiPropertyDto[] $properties List of MAPI properties
     * @param string $discriminator 
     * @param bool $appointment_counter_proposal Value indicating whether a Meeting Response object is a counter proposal.
     * @param \Aspose\Email\Model\MapiCalendarAttendeesDto $attendees Attendees
     * @param string $busy_status Enumerates the mapi calendar possible busy status Enum, available values: Free, Tentative, Busy, OutOfOffice
     * @param string[] $client_intent Actions the user has taken on this Meeting object. Items: Enumerates the actions the user can taken on the Meeting object Enum, available values: Manager, Delegate, DeletedWithNoResponse, DeletedExceptionWithNoResponse, RespondedTentative, RespondedAccept, RespondedDecline, ModifiedStartTime, ModifiedEndTime, ModifiedLocation, RespondedExceptionDecline, Canceled, ExceptionCanceled
     * @param \DateTime $end_date End date and time of the event. If the date is not set, default value for DateTime is returned.
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $end_date_time_zone Time zone information that indicates the time zone of the EndDate property.
     * @param bool $is_all_day Value indicating whether the event is an all-day event.
     * @param string $key_words Categories of the calendar object.
     * @param string $location Location of the event.
     * @param \Aspose\Email\Model\MapiCalendarEventRecurrenceDto $recurrence Recurrence properties.
     * @param int $reminder_delta Interval, in minutes, between the time at which the reminder first becomes overdue and the start time of the Calendar object.
     * @param string $reminder_file_parameter Full path of the sound that a client SHOULD play when the reminder becomes overdue.
     * @param bool $reminder_set Value indicating whether a reminder is set on the object.
     * @param int $sequence Sequence number.
     * @param \DateTime $start_date Start date and time of the event. If the date is not set, default value for DateTime is returned.
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $start_date_time_zone Time zone information that indicates the time zone of the StartDate property.
     * @param string $uid Unique identifier.
     * @param \Aspose\Email\Model\MapiElectronicAddressDto $organizer Organizer
     */
    public function __construct($attachments = null, $billing = null, $body = null, $body_html = null, $body_rtf = null, $body_type = null, $categories = null, $companies = null, $item_id = null, $message_class = null, $mileage = null, $recipients = null, $sensitivity = null, $subject = null, $subject_prefix = null, $properties = null, $discriminator = null, $appointment_counter_proposal = null, $attendees = null, $busy_status = null, $client_intent = null, $end_date = null, $end_date_time_zone = null, $is_all_day = null, $key_words = null, $location = null, $recurrence = null, $reminder_delta = null, $reminder_file_parameter = null, $reminder_set = null, $sequence = null, $start_date = null, $start_date_time_zone = null, $uid = null, $organizer = null)
    {
        parent::__construct();
        $this->container['appointment_counter_proposal'] = null;
        $this->container['attendees'] = null;
        $this->container['busy_status'] = null;
        $this->container['client_intent'] = null;
        $this->container['end_date'] = null;
        $this->container['end_date_time_zone'] = null;
        $this->container['is_all_day'] = null;
        $this->container['key_words'] = null;
        $this->container['location'] = null;
        $this->container['recurrence'] = null;
        $this->container['reminder_delta'] = null;
        $this->container['reminder_file_parameter'] = null;
        $this->container['reminder_set'] = null;
        $this->container['sequence'] = null;
        $this->container['start_date'] = null;
        $this->container['start_date_time_zone'] = null;
        $this->container['uid'] = null;
        $this->container['organizer'] = null;

        if ($attachments != null) $this->setAttachments($attachments);
        if ($billing != null) $this->setBilling($billing);
        if ($body != null) $this->setBody($body);
        if ($body_html != null) $this->setBodyHtml($body_html);
        if ($body_rtf != null) $this->setBodyRtf($body_rtf);
        if ($body_type != null) $this->setBodyType($body_type);
        if ($categories != null) $this->setCategories($categories);
        if ($companies != null) $this->setCompanies($companies);
        if ($item_id != null) $this->setItemId($item_id);
        if ($message_class != null) $this->setMessageClass($message_class);
        if ($mileage != null) $this->setMileage($mileage);
        if ($recipients != null) $this->setRecipients($recipients);
        if ($sensitivity != null) $this->setSensitivity($sensitivity);
        if ($subject != null) $this->setSubject($subject);
        if ($subject_prefix != null) $this->setSubjectPrefix($subject_prefix);
        if ($properties != null) $this->setProperties($properties);
        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
        if ($appointment_counter_proposal != null) $this->setAppointmentCounterProposal($appointment_counter_proposal);
        if ($attendees != null) $this->setAttendees($attendees);
        if ($busy_status != null) $this->setBusyStatus($busy_status);
        if ($client_intent != null) $this->setClientIntent($client_intent);
        if ($end_date != null) $this->setEndDate($end_date);
        if ($end_date_time_zone != null) $this->setEndDateTimeZone($end_date_time_zone);
        if ($is_all_day != null) $this->setIsAllDay($is_all_day);
        if ($key_words != null) $this->setKeyWords($key_words);
        if ($location != null) $this->setLocation($location);
        if ($recurrence != null) $this->setRecurrence($recurrence);
        if ($reminder_delta != null) $this->setReminderDelta($reminder_delta);
        if ($reminder_file_parameter != null) $this->setReminderFileParameter($reminder_file_parameter);
        if ($reminder_set != null) $this->setReminderSet($reminder_set);
        if ($sequence != null) $this->setSequence($sequence);
        if ($start_date != null) $this->setStartDate($start_date);
        if ($start_date_time_zone != null) $this->setStartDateTimeZone($start_date_time_zone);
        if ($uid != null) $this->setUid($uid);
        if ($organizer != null) $this->setOrganizer($organizer);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['appointment_counter_proposal'] === null) {
            $invalidProperties[] = "'appointment_counter_proposal' can't be null";
        }
        if ($this->container['busy_status'] === null) {
            $invalidProperties[] = "'busy_status' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['is_all_day'] === null) {
            $invalidProperties[] = "'is_all_day' can't be null";
        }
        if ($this->container['reminder_delta'] === null) {
            $invalidProperties[] = "'reminder_delta' can't be null";
        }
        if ($this->container['reminder_set'] === null) {
            $invalidProperties[] = "'reminder_set' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['appointment_counter_proposal'] === null) {
            return false;
        }
        if ($this->container['busy_status'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['is_all_day'] === null) {
            return false;
        }
        if ($this->container['reminder_delta'] === null) {
            return false;
        }
        if ($this->container['reminder_set'] === null) {
            return false;
        }
        if ($this->container['sequence'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets appointment_counter_proposal
     *
     * @return bool
     */
    public function getAppointmentCounterProposal()
    {
        return $this->container['appointment_counter_proposal'];
    }

    /**
     * Sets appointment_counter_proposal
     *
     * @param bool $appointment_counter_proposal Value indicating whether a Meeting Response object is a counter proposal.
     *
     * @return $this
     */
    public function setAppointmentCounterProposal($appointment_counter_proposal)
    {
        $this->container['appointment_counter_proposal'] = $appointment_counter_proposal;

        return $this;
    }

    /**
     * Gets attendees
     *
     * @return \Aspose\Email\Model\MapiCalendarAttendeesDto
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     *
     * @param \Aspose\Email\Model\MapiCalendarAttendeesDto $attendees Attendees
     *
     * @return $this
     */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets busy_status
     *
     * @return string
     */
    public function getBusyStatus()
    {
        return $this->container['busy_status'];
    }

    /**
     * Sets busy_status
     *
     * @param string $busy_status Enumerates the mapi calendar possible busy status Enum, available values: Free, Tentative, Busy, OutOfOffice
     *
     * @return $this
     */
    public function setBusyStatus($busy_status)
    {
        $this->container['busy_status'] = $busy_status;

        return $this;
    }

    /**
     * Gets client_intent
     *
     * @return string[]
     */
    public function getClientIntent()
    {
        return $this->container['client_intent'];
    }

    /**
     * Sets client_intent
     *
     * @param string[] $client_intent Actions the user has taken on this Meeting object. Items: Enumerates the actions the user can taken on the Meeting object Enum, available values: Manager, Delegate, DeletedWithNoResponse, DeletedExceptionWithNoResponse, RespondedTentative, RespondedAccept, RespondedDecline, ModifiedStartTime, ModifiedEndTime, ModifiedLocation, RespondedExceptionDecline, Canceled, ExceptionCanceled
     *
     * @return $this
     */
    public function setClientIntent($client_intent)
    {
        $this->container['client_intent'] = $client_intent;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date End date and time of the event. If the date is not set, default value for DateTime is returned.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets end_date_time_zone
     *
     * @return \Aspose\Email\Model\MapiCalendarTimeZoneDto
     */
    public function getEndDateTimeZone()
    {
        return $this->container['end_date_time_zone'];
    }

    /**
     * Sets end_date_time_zone
     *
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $end_date_time_zone Time zone information that indicates the time zone of the EndDate property.
     *
     * @return $this
     */
    public function setEndDateTimeZone($end_date_time_zone)
    {
        $this->container['end_date_time_zone'] = $end_date_time_zone;

        return $this;
    }

    /**
     * Gets is_all_day
     *
     * @return bool
     */
    public function getIsAllDay()
    {
        return $this->container['is_all_day'];
    }

    /**
     * Sets is_all_day
     *
     * @param bool $is_all_day Value indicating whether the event is an all-day event.
     *
     * @return $this
     */
    public function setIsAllDay($is_all_day)
    {
        $this->container['is_all_day'] = $is_all_day;

        return $this;
    }

    /**
     * Gets key_words
     *
     * @return string
     */
    public function getKeyWords()
    {
        return $this->container['key_words'];
    }

    /**
     * Sets key_words
     *
     * @param string $key_words Categories of the calendar object.
     *
     * @return $this
     */
    public function setKeyWords($key_words)
    {
        $this->container['key_words'] = $key_words;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Location of the event.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return \Aspose\Email\Model\MapiCalendarEventRecurrenceDto
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \Aspose\Email\Model\MapiCalendarEventRecurrenceDto $recurrence Recurrence properties.
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets reminder_delta
     *
     * @return int
     */
    public function getReminderDelta()
    {
        return $this->container['reminder_delta'];
    }

    /**
     * Sets reminder_delta
     *
     * @param int $reminder_delta Interval, in minutes, between the time at which the reminder first becomes overdue and the start time of the Calendar object.
     *
     * @return $this
     */
    public function setReminderDelta($reminder_delta)
    {
        $this->container['reminder_delta'] = $reminder_delta;

        return $this;
    }

    /**
     * Gets reminder_file_parameter
     *
     * @return string
     */
    public function getReminderFileParameter()
    {
        return $this->container['reminder_file_parameter'];
    }

    /**
     * Sets reminder_file_parameter
     *
     * @param string $reminder_file_parameter Full path of the sound that a client SHOULD play when the reminder becomes overdue.
     *
     * @return $this
     */
    public function setReminderFileParameter($reminder_file_parameter)
    {
        $this->container['reminder_file_parameter'] = $reminder_file_parameter;

        return $this;
    }

    /**
     * Gets reminder_set
     *
     * @return bool
     */
    public function getReminderSet()
    {
        return $this->container['reminder_set'];
    }

    /**
     * Sets reminder_set
     *
     * @param bool $reminder_set Value indicating whether a reminder is set on the object.
     *
     * @return $this
     */
    public function setReminderSet($reminder_set)
    {
        $this->container['reminder_set'] = $reminder_set;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence Sequence number.
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date and time of the event. If the date is not set, default value for DateTime is returned.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets start_date_time_zone
     *
     * @return \Aspose\Email\Model\MapiCalendarTimeZoneDto
     */
    public function getStartDateTimeZone()
    {
        return $this->container['start_date_time_zone'];
    }

    /**
     * Sets start_date_time_zone
     *
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $start_date_time_zone Time zone information that indicates the time zone of the StartDate property.
     *
     * @return $this
     */
    public function setStartDateTimeZone($start_date_time_zone)
    {
        $this->container['start_date_time_zone'] = $start_date_time_zone;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid Unique identifier.
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets organizer
     *
     * @return \Aspose\Email\Model\MapiElectronicAddressDto
     */
    public function getOrganizer()
    {
        return $this->container['organizer'];
    }

    /**
     * Sets organizer
     *
     * @param \Aspose\Email\Model\MapiElectronicAddressDto $organizer Organizer
     *
     * @return $this
     */
    public function setOrganizer($organizer)
    {
        $this->container['organizer'] = $organizer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

