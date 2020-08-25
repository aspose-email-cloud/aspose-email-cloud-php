<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarExceptionInfoDto.php">
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
 * MapiCalendarExceptionInfoDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarExceptionInfoDto
 *
 * @description An exception specifies changes to an instance of a recurring series.
 */
class MapiCalendarExceptionInfoDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarExceptionInfoDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'attachments' => '\Aspose\Email\Model\MapiAttachmentDto[]',
        'body' => 'string',
        'busy_status' => 'string',
        'end_date_time' => '\DateTime',
        'has_attachment' => 'bool',
        'location' => 'string',
        'meeting_type' => 'string',
        'original_start_date' => '\DateTime',
        'override_flags' => 'string[]',
        'reminder_delta' => 'int',
        'reminder_set' => 'bool',
        'start_date_time' => '\DateTime',
        'subject' => 'string',
        'sub_type' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'attachments' => null,
        'body' => null,
        'busy_status' => null,
        'end_date_time' => 'date-time',
        'has_attachment' => null,
        'location' => null,
        'meeting_type' => null,
        'original_start_date' => 'date-time',
        'override_flags' => null,
        'reminder_delta' => 'int32',
        'reminder_set' => null,
        'start_date_time' => 'date-time',
        'subject' => null,
        'sub_type' => 'int32'
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
        'body' => 'body',
        'busy_status' => 'busyStatus',
        'end_date_time' => 'endDateTime',
        'has_attachment' => 'hasAttachment',
        'location' => 'location',
        'meeting_type' => 'meetingType',
        'original_start_date' => 'originalStartDate',
        'override_flags' => 'overrideFlags',
        'reminder_delta' => 'reminderDelta',
        'reminder_set' => 'reminderSet',
        'start_date_time' => 'startDateTime',
        'subject' => 'subject',
        'sub_type' => 'subType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'body' => 'setBody',
        'busy_status' => 'setBusyStatus',
        'end_date_time' => 'setEndDateTime',
        'has_attachment' => 'setHasAttachment',
        'location' => 'setLocation',
        'meeting_type' => 'setMeetingType',
        'original_start_date' => 'setOriginalStartDate',
        'override_flags' => 'setOverrideFlags',
        'reminder_delta' => 'setReminderDelta',
        'reminder_set' => 'setReminderSet',
        'start_date_time' => 'setStartDateTime',
        'subject' => 'setSubject',
        'sub_type' => 'setSubType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'body' => 'getBody',
        'busy_status' => 'getBusyStatus',
        'end_date_time' => 'getEndDateTime',
        'has_attachment' => 'getHasAttachment',
        'location' => 'getLocation',
        'meeting_type' => 'getMeetingType',
        'original_start_date' => 'getOriginalStartDate',
        'override_flags' => 'getOverrideFlags',
        'reminder_delta' => 'getReminderDelta',
        'reminder_set' => 'getReminderSet',
        'start_date_time' => 'getStartDateTime',
        'subject' => 'getSubject',
        'sub_type' => 'getSubType'
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
     * Initializes a new instance of the MapiCalendarExceptionInfoDto class.
     *  
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Attachments in the recurrence exception.
     * @param string $body Body.
     * @param string $busy_status Enumerates the mapi calendar possible busy status Enum, available values: Free, Tentative, Busy, OutOfOffice
     * @param \DateTime $end_date_time End date.
     * @param bool $has_attachment Value of this field specifies whether the Exception Embedded Message object contains attachments.
     * @param string $location Location.
     * @param string $meeting_type Enumerates the appointment state Enum, available values: Meeting, Received, Canceled
     * @param \DateTime $original_start_date Original start date.
     * @param string[] $override_flags Override flags. Items: Specifies what data in the MapiCalendarOverride structure has a value different from the recurring series. Enum, available values: Subject, MeetingType, ReminderDelta, Reminder, Location, BusyStatus, Attachment, Subtype, AppointmentColor, ExceptionalBody
     * @param int $reminder_delta Reminder delta.
     * @param bool $reminder_set Value for the PidLidReminderSet property.
     * @param \DateTime $start_date_time Start date.
     * @param string $subject Subject.
     * @param int $sub_type SubType.
     */
    public function __construct($attachments = null, $body = null, $busy_status = null, $end_date_time = null, $has_attachment = null, $location = null, $meeting_type = null, $original_start_date = null, $override_flags = null, $reminder_delta = null, $reminder_set = null, $start_date_time = null, $subject = null, $sub_type = null)
    {
        $this->container['attachments'] = null;
        $this->container['body'] = null;
        $this->container['busy_status'] = null;
        $this->container['end_date_time'] = null;
        $this->container['has_attachment'] = null;
        $this->container['location'] = null;
        $this->container['meeting_type'] = null;
        $this->container['original_start_date'] = null;
        $this->container['override_flags'] = null;
        $this->container['reminder_delta'] = null;
        $this->container['reminder_set'] = null;
        $this->container['start_date_time'] = null;
        $this->container['subject'] = null;
        $this->container['sub_type'] = null;

        if ($attachments != null) $this->setAttachments($attachments);
        if ($body != null) $this->setBody($body);
        if ($busy_status != null) $this->setBusyStatus($busy_status);
        if ($end_date_time != null) $this->setEndDateTime($end_date_time);
        if ($has_attachment != null) $this->setHasAttachment($has_attachment);
        if ($location != null) $this->setLocation($location);
        if ($meeting_type != null) $this->setMeetingType($meeting_type);
        if ($original_start_date != null) $this->setOriginalStartDate($original_start_date);
        if ($override_flags != null) $this->setOverrideFlags($override_flags);
        if ($reminder_delta != null) $this->setReminderDelta($reminder_delta);
        if ($reminder_set != null) $this->setReminderSet($reminder_set);
        if ($start_date_time != null) $this->setStartDateTime($start_date_time);
        if ($subject != null) $this->setSubject($subject);
        if ($sub_type != null) $this->setSubType($sub_type);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['busy_status'] === null) {
            $invalidProperties[] = "'busy_status' can't be null";
        }
        if ($this->container['end_date_time'] === null) {
            $invalidProperties[] = "'end_date_time' can't be null";
        }
        if ($this->container['has_attachment'] === null) {
            $invalidProperties[] = "'has_attachment' can't be null";
        }
        if ($this->container['meeting_type'] === null) {
            $invalidProperties[] = "'meeting_type' can't be null";
        }
        if ($this->container['original_start_date'] === null) {
            $invalidProperties[] = "'original_start_date' can't be null";
        }
        if ($this->container['reminder_delta'] === null) {
            $invalidProperties[] = "'reminder_delta' can't be null";
        }
        if ($this->container['reminder_set'] === null) {
            $invalidProperties[] = "'reminder_set' can't be null";
        }
        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
        }
        if ($this->container['sub_type'] === null) {
            $invalidProperties[] = "'sub_type' can't be null";
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

        if ($this->container['busy_status'] === null) {
            return false;
        }
        if ($this->container['end_date_time'] === null) {
            return false;
        }
        if ($this->container['has_attachment'] === null) {
            return false;
        }
        if ($this->container['meeting_type'] === null) {
            return false;
        }
        if ($this->container['original_start_date'] === null) {
            return false;
        }
        if ($this->container['reminder_delta'] === null) {
            return false;
        }
        if ($this->container['reminder_set'] === null) {
            return false;
        }
        if ($this->container['start_date_time'] === null) {
            return false;
        }
        if ($this->container['sub_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attachments
     *
     * @return \Aspose\Email\Model\MapiAttachmentDto[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Attachments in the recurrence exception.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body Body.
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

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
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time End date.
     *
     * @return $this
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets has_attachment
     *
     * @return bool
     */
    public function getHasAttachment()
    {
        return $this->container['has_attachment'];
    }

    /**
     * Sets has_attachment
     *
     * @param bool $has_attachment Value of this field specifies whether the Exception Embedded Message object contains attachments.
     *
     * @return $this
     */
    public function setHasAttachment($has_attachment)
    {
        $this->container['has_attachment'] = $has_attachment;

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
     * @param string $location Location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets meeting_type
     *
     * @return string
     */
    public function getMeetingType()
    {
        return $this->container['meeting_type'];
    }

    /**
     * Sets meeting_type
     *
     * @param string $meeting_type Enumerates the appointment state Enum, available values: Meeting, Received, Canceled
     *
     * @return $this
     */
    public function setMeetingType($meeting_type)
    {
        $this->container['meeting_type'] = $meeting_type;

        return $this;
    }

    /**
     * Gets original_start_date
     *
     * @return \DateTime
     */
    public function getOriginalStartDate()
    {
        return $this->container['original_start_date'];
    }

    /**
     * Sets original_start_date
     *
     * @param \DateTime $original_start_date Original start date.
     *
     * @return $this
     */
    public function setOriginalStartDate($original_start_date)
    {
        $this->container['original_start_date'] = $original_start_date;

        return $this;
    }

    /**
     * Gets override_flags
     *
     * @return string[]
     */
    public function getOverrideFlags()
    {
        return $this->container['override_flags'];
    }

    /**
     * Sets override_flags
     *
     * @param string[] $override_flags Override flags. Items: Specifies what data in the MapiCalendarOverride structure has a value different from the recurring series. Enum, available values: Subject, MeetingType, ReminderDelta, Reminder, Location, BusyStatus, Attachment, Subtype, AppointmentColor, ExceptionalBody
     *
     * @return $this
     */
    public function setOverrideFlags($override_flags)
    {
        $this->container['override_flags'] = $override_flags;

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
     * @param int $reminder_delta Reminder delta.
     *
     * @return $this
     */
    public function setReminderDelta($reminder_delta)
    {
        $this->container['reminder_delta'] = $reminder_delta;

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
     * @param bool $reminder_set Value for the PidLidReminderSet property.
     *
     * @return $this
     */
    public function setReminderSet($reminder_set)
    {
        $this->container['reminder_set'] = $reminder_set;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time Start date.
     *
     * @return $this
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets sub_type
     *
     * @return int
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     *
     * @param int $sub_type SubType.
     *
     * @return $this
     */
    public function setSubType($sub_type)
    {
        $this->container['sub_type'] = $sub_type;

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

