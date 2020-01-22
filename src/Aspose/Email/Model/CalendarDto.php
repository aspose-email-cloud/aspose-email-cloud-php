<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarDto.php">
 *   Copyright (c) 2018 Aspose.Email for Cloud
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
 * CalendarDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * CalendarDto
 *
 * @description iCalendar document representation
 */
class CalendarDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CalendarDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'attachments' => '\Aspose\Email\Model\Attachment[]',
        'attendees' => '\Aspose\Email\Model\MailAddress[]',
        'description' => 'string',
        'end_date' => '\DateTime',
        'end_time_zone' => 'string',
        'flags' => 'string[]',
        'is_description_html' => 'bool',
        'location' => 'string',
        'method' => 'string',
        'microsoft_busy_status' => 'string',
        'microsoft_intended_status' => 'string',
        'optional_attendees' => '\Aspose\Email\Model\MailAddress[]',
        'organizer' => '\Aspose\Email\Model\MailAddress',
        'recurrence_string' => 'string',
        'reminders' => '\Aspose\Email\Model\CalendarReminder[]',
        'sequence_id' => 'string',
        'start_date' => '\DateTime',
        'start_time_zone' => 'string',
        'status' => 'string',
        'summary' => 'string',
        'transparency' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'attachments' => null,
        'attendees' => null,
        'description' => null,
        'end_date' => 'date-time',
        'end_time_zone' => null,
        'flags' => null,
        'is_description_html' => null,
        'location' => null,
        'method' => null,
        'microsoft_busy_status' => null,
        'microsoft_intended_status' => null,
        'optional_attendees' => null,
        'organizer' => null,
        'recurrence_string' => null,
        'reminders' => null,
        'sequence_id' => null,
        'start_date' => 'date-time',
        'start_time_zone' => null,
        'status' => null,
        'summary' => null,
        'transparency' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attachments' => 'attachments',
        'attendees' => 'attendees',
        'description' => 'description',
        'end_date' => 'endDate',
        'end_time_zone' => 'endTimeZone',
        'flags' => 'flags',
        'is_description_html' => 'isDescriptionHtml',
        'location' => 'location',
        'method' => 'method',
        'microsoft_busy_status' => 'microsoftBusyStatus',
        'microsoft_intended_status' => 'microsoftIntendedStatus',
        'optional_attendees' => 'optionalAttendees',
        'organizer' => 'organizer',
        'recurrence_string' => 'recurrenceString',
        'reminders' => 'reminders',
        'sequence_id' => 'sequenceId',
        'start_date' => 'startDate',
        'start_time_zone' => 'startTimeZone',
        'status' => 'status',
        'summary' => 'summary',
        'transparency' => 'transparency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'attendees' => 'setAttendees',
        'description' => 'setDescription',
        'end_date' => 'setEndDate',
        'end_time_zone' => 'setEndTimeZone',
        'flags' => 'setFlags',
        'is_description_html' => 'setIsDescriptionHtml',
        'location' => 'setLocation',
        'method' => 'setMethod',
        'microsoft_busy_status' => 'setMicrosoftBusyStatus',
        'microsoft_intended_status' => 'setMicrosoftIntendedStatus',
        'optional_attendees' => 'setOptionalAttendees',
        'organizer' => 'setOrganizer',
        'recurrence_string' => 'setRecurrenceString',
        'reminders' => 'setReminders',
        'sequence_id' => 'setSequenceId',
        'start_date' => 'setStartDate',
        'start_time_zone' => 'setStartTimeZone',
        'status' => 'setStatus',
        'summary' => 'setSummary',
        'transparency' => 'setTransparency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'attendees' => 'getAttendees',
        'description' => 'getDescription',
        'end_date' => 'getEndDate',
        'end_time_zone' => 'getEndTimeZone',
        'flags' => 'getFlags',
        'is_description_html' => 'getIsDescriptionHtml',
        'location' => 'getLocation',
        'method' => 'getMethod',
        'microsoft_busy_status' => 'getMicrosoftBusyStatus',
        'microsoft_intended_status' => 'getMicrosoftIntendedStatus',
        'optional_attendees' => 'getOptionalAttendees',
        'organizer' => 'getOrganizer',
        'recurrence_string' => 'getRecurrenceString',
        'reminders' => 'getReminders',
        'sequence_id' => 'getSequenceId',
        'start_date' => 'getStartDate',
        'start_time_zone' => 'getStartTimeZone',
        'status' => 'getStatus',
        'summary' => 'getSummary',
        'transparency' => 'getTransparency'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Initializes a new instance of the CalendarDto class.
     *  
     * @param \Aspose\Email\Model\Attachment[] $attachments Document attachments
     * @param \Aspose\Email\Model\MailAddress[] $attendees Event attendees
     * @param string $description Description
     * @param \DateTime $end_date End date
     * @param string $end_time_zone End time zone
     * @param string[] $flags Appointment flags
     * @param bool $is_description_html Indicates if description is in HTML format
     * @param string $location Location
     * @param string $method Defines the iCalendar object method type associated with the calendar document. Enum, available values: None, Publish, Request, Reply, Add, Cancel, Refresh, Counter, DeclineCounter
     * @param string $microsoft_busy_status Specifies the BUSY status. Enum, available values: NotDefined, Free, Tentative, Busy, Oof
     * @param string $microsoft_intended_status Specifies the INTENDED status. Enum, available values: NotDefined, Free, Tentative, Busy, Oof
     * @param \Aspose\Email\Model\MailAddress[] $optional_attendees Optional attendees
     * @param \Aspose\Email\Model\MailAddress $organizer Event organizer
     * @param string $recurrence_string String representation of recurrence pattern (See iCalendar RFC, \"Recurrence rule\" section). For example:               For daily recurrence:         \"FREQ=DAILY;COUNT=10;WKST=MO\"                   For monthly recurrence:         \"BYSETPOS=1;BYDAY=MO,TU,WE,TH,FR;FREQ=MONTHLY;INTERVAL=10;WKST=MO\"                   For yearly recurrence:         \"BYMONTHDAY=30;BYMONTH=1;FREQ=YEARLY;WKST=MO\"
     * @param \Aspose\Email\Model\CalendarReminder[] $reminders Reminders
     * @param string $sequence_id The sequence id. Read only.
     * @param \DateTime $start_date Start date
     * @param string $start_time_zone Start time zone
     * @param string $status Defines the overall status or confirmation for the calendar document. Enum, available values: NotDefined, Cancelled, Tentative, Confirmed
     * @param string $summary Summary
     * @param string $transparency Specifies whether or not this appointment is intended to be visible in availability searches. Enum, available values: NotDefined, Transparent, Opaque
     */
    public function __construct($attachments = null, $attendees = null, $description = null, $end_date = null, $end_time_zone = null, $flags = null, $is_description_html = null, $location = null, $method = null, $microsoft_busy_status = null, $microsoft_intended_status = null, $optional_attendees = null, $organizer = null, $recurrence_string = null, $reminders = null, $sequence_id = null, $start_date = null, $start_time_zone = null, $status = null, $summary = null, $transparency = null)
    {
        $this->container['attachments'] = null;
        $this->container['attendees'] = null;
        $this->container['description'] = null;
        $this->container['end_date'] = null;
        $this->container['end_time_zone'] = null;
        $this->container['flags'] = null;
        $this->container['is_description_html'] = null;
        $this->container['location'] = null;
        $this->container['method'] = null;
        $this->container['microsoft_busy_status'] = null;
        $this->container['microsoft_intended_status'] = null;
        $this->container['optional_attendees'] = null;
        $this->container['organizer'] = null;
        $this->container['recurrence_string'] = null;
        $this->container['reminders'] = null;
        $this->container['sequence_id'] = null;
        $this->container['start_date'] = null;
        $this->container['start_time_zone'] = null;
        $this->container['status'] = null;
        $this->container['summary'] = null;
        $this->container['transparency'] = null;

        if ($attachments != null) $this->setAttachments($attachments);
        if ($attendees != null) $this->setAttendees($attendees);
        if ($description != null) $this->setDescription($description);
        if ($end_date != null) $this->setEndDate($end_date);
        if ($end_time_zone != null) $this->setEndTimeZone($end_time_zone);
        if ($flags != null) $this->setFlags($flags);
        if ($is_description_html != null) $this->setIsDescriptionHtml($is_description_html);
        if ($location != null) $this->setLocation($location);
        if ($method != null) $this->setMethod($method);
        if ($microsoft_busy_status != null) $this->setMicrosoftBusyStatus($microsoft_busy_status);
        if ($microsoft_intended_status != null) $this->setMicrosoftIntendedStatus($microsoft_intended_status);
        if ($optional_attendees != null) $this->setOptionalAttendees($optional_attendees);
        if ($organizer != null) $this->setOrganizer($organizer);
        if ($recurrence_string != null) $this->setRecurrenceString($recurrence_string);
        if ($reminders != null) $this->setReminders($reminders);
        if ($sequence_id != null) $this->setSequenceId($sequence_id);
        if ($start_date != null) $this->setStartDate($start_date);
        if ($start_time_zone != null) $this->setStartTimeZone($start_time_zone);
        if ($status != null) $this->setStatus($status);
        if ($summary != null) $this->setSummary($summary);
        if ($transparency != null) $this->setTransparency($transparency);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['attendees'] === null) {
            $invalidProperties[] = "'attendees' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['is_description_html'] === null) {
            $invalidProperties[] = "'is_description_html' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ((strlen($this->container['location']) < 1)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['microsoft_busy_status'] === null) {
            $invalidProperties[] = "'microsoft_busy_status' can't be null";
        }
        if ($this->container['microsoft_intended_status'] === null) {
            $invalidProperties[] = "'microsoft_intended_status' can't be null";
        }
        if ($this->container['organizer'] === null) {
            $invalidProperties[] = "'organizer' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
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

        if ($this->container['attendees'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['is_description_html'] === null) {
            return false;
        }
        if ($this->container['location'] === null) {
            return false;
        }
        if (strlen($this->container['location']) < 1) {
            return false;
        }
        if ($this->container['method'] === null) {
            return false;
        }
        if ($this->container['microsoft_busy_status'] === null) {
            return false;
        }
        if ($this->container['microsoft_intended_status'] === null) {
            return false;
        }
        if ($this->container['organizer'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['transparency'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attachments
     *
     * @return \Aspose\Email\Model\Attachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Aspose\Email\Model\Attachment[] $attachments Document attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets attendees
     *
     * @return \Aspose\Email\Model\MailAddress[]
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     *
     * @param \Aspose\Email\Model\MailAddress[] $attendees Event attendees
     *
     * @return $this
     */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param \DateTime $end_date End date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets end_time_zone
     *
     * @return string
     */
    public function getEndTimeZone()
    {
        return $this->container['end_time_zone'];
    }

    /**
     * Sets end_time_zone
     *
     * @param string $end_time_zone End time zone
     *
     * @return $this
     */
    public function setEndTimeZone($end_time_zone)
    {
        $this->container['end_time_zone'] = $end_time_zone;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return string[]
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param string[] $flags Appointment flags
     *
     * @return $this
     */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets is_description_html
     *
     * @return bool
     */
    public function getIsDescriptionHtml()
    {
        return $this->container['is_description_html'];
    }

    /**
     * Sets is_description_html
     *
     * @param bool $is_description_html Indicates if description is in HTML format
     *
     * @return $this
     */
    public function setIsDescriptionHtml($is_description_html)
    {
        $this->container['is_description_html'] = $is_description_html;

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
     * @param string $location Location
     *
     * @return $this
     */
    public function setLocation($location)
    {

        if ((strlen($location) < 1)) {
            throw new \InvalidArgumentException('invalid length for $location when calling CalendarDto., must be bigger than or equal to 1.');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method Defines the iCalendar object method type associated with the calendar document. Enum, available values: None, Publish, Request, Reply, Add, Cancel, Refresh, Counter, DeclineCounter
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets microsoft_busy_status
     *
     * @return string
     */
    public function getMicrosoftBusyStatus()
    {
        return $this->container['microsoft_busy_status'];
    }

    /**
     * Sets microsoft_busy_status
     *
     * @param string $microsoft_busy_status Specifies the BUSY status. Enum, available values: NotDefined, Free, Tentative, Busy, Oof
     *
     * @return $this
     */
    public function setMicrosoftBusyStatus($microsoft_busy_status)
    {
        $this->container['microsoft_busy_status'] = $microsoft_busy_status;

        return $this;
    }

    /**
     * Gets microsoft_intended_status
     *
     * @return string
     */
    public function getMicrosoftIntendedStatus()
    {
        return $this->container['microsoft_intended_status'];
    }

    /**
     * Sets microsoft_intended_status
     *
     * @param string $microsoft_intended_status Specifies the INTENDED status. Enum, available values: NotDefined, Free, Tentative, Busy, Oof
     *
     * @return $this
     */
    public function setMicrosoftIntendedStatus($microsoft_intended_status)
    {
        $this->container['microsoft_intended_status'] = $microsoft_intended_status;

        return $this;
    }

    /**
     * Gets optional_attendees
     *
     * @return \Aspose\Email\Model\MailAddress[]
     */
    public function getOptionalAttendees()
    {
        return $this->container['optional_attendees'];
    }

    /**
     * Sets optional_attendees
     *
     * @param \Aspose\Email\Model\MailAddress[] $optional_attendees Optional attendees
     *
     * @return $this
     */
    public function setOptionalAttendees($optional_attendees)
    {
        $this->container['optional_attendees'] = $optional_attendees;

        return $this;
    }

    /**
     * Gets organizer
     *
     * @return \Aspose\Email\Model\MailAddress
     */
    public function getOrganizer()
    {
        return $this->container['organizer'];
    }

    /**
     * Sets organizer
     *
     * @param \Aspose\Email\Model\MailAddress $organizer Event organizer
     *
     * @return $this
     */
    public function setOrganizer($organizer)
    {
        $this->container['organizer'] = $organizer;

        return $this;
    }

    /**
     * Gets recurrence_string
     *
     * @return string
     */
    public function getRecurrenceString()
    {
        return $this->container['recurrence_string'];
    }

    /**
     * Sets recurrence_string
     *
     * @param string $recurrence_string String representation of recurrence pattern (See iCalendar RFC, \"Recurrence rule\" section). For example:               For daily recurrence:         \"FREQ=DAILY;COUNT=10;WKST=MO\"                   For monthly recurrence:         \"BYSETPOS=1;BYDAY=MO,TU,WE,TH,FR;FREQ=MONTHLY;INTERVAL=10;WKST=MO\"                   For yearly recurrence:         \"BYMONTHDAY=30;BYMONTH=1;FREQ=YEARLY;WKST=MO\"
     *
     * @return $this
     */
    public function setRecurrenceString($recurrence_string)
    {
        $this->container['recurrence_string'] = $recurrence_string;

        return $this;
    }

    /**
     * Gets reminders
     *
     * @return \Aspose\Email\Model\CalendarReminder[]
     */
    public function getReminders()
    {
        return $this->container['reminders'];
    }

    /**
     * Sets reminders
     *
     * @param \Aspose\Email\Model\CalendarReminder[] $reminders Reminders
     *
     * @return $this
     */
    public function setReminders($reminders)
    {
        $this->container['reminders'] = $reminders;

        return $this;
    }

    /**
     * Gets sequence_id
     *
     * @return string
     */
    public function getSequenceId()
    {
        return $this->container['sequence_id'];
    }

    /**
     * Sets sequence_id
     *
     * @param string $sequence_id The sequence id. Read only.
     *
     * @return $this
     */
    public function setSequenceId($sequence_id)
    {
        $this->container['sequence_id'] = $sequence_id;

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
     * @param \DateTime $start_date Start date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets start_time_zone
     *
     * @return string
     */
    public function getStartTimeZone()
    {
        return $this->container['start_time_zone'];
    }

    /**
     * Sets start_time_zone
     *
     * @param string $start_time_zone Start time zone
     *
     * @return $this
     */
    public function setStartTimeZone($start_time_zone)
    {
        $this->container['start_time_zone'] = $start_time_zone;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Defines the overall status or confirmation for the calendar document. Enum, available values: NotDefined, Cancelled, Tentative, Confirmed
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary Summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets transparency
     *
     * @return string
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /**
     * Sets transparency
     *
     * @param string $transparency Specifies whether or not this appointment is intended to be visible in availability searches. Enum, available values: NotDefined, Transparent, Opaque
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

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


?>