<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalendarReminder.php">
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
 * CalendarReminder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * CalendarReminder
 *
 * @description Provides a grouping of component properties that define an alarm.
 */
class CalendarReminder implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CalendarReminder";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'action' => 'string',
        'attachments' => 'string[]',
        'attendees' => '\Aspose\Email\Model\ReminderAttendee[]',
        'description' => 'string',
        'duration' => 'int',
        'repeat' => 'int',
        'summary' => 'string',
        'trigger' => '\Aspose\Email\Model\ReminderTrigger'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'action' => null,
        'attachments' => null,
        'attendees' => null,
        'description' => null,
        'duration' => 'int64',
        'repeat' => 'int32',
        'summary' => null,
        'trigger' => null
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
        'action' => 'action',
        'attachments' => 'attachments',
        'attendees' => 'attendees',
        'description' => 'description',
        'duration' => 'duration',
        'repeat' => 'repeat',
        'summary' => 'summary',
        'trigger' => 'trigger'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'attachments' => 'setAttachments',
        'attendees' => 'setAttendees',
        'description' => 'setDescription',
        'duration' => 'setDuration',
        'repeat' => 'setRepeat',
        'summary' => 'setSummary',
        'trigger' => 'setTrigger'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'attachments' => 'getAttachments',
        'attendees' => 'getAttendees',
        'description' => 'getDescription',
        'duration' => 'getDuration',
        'repeat' => 'getRepeat',
        'summary' => 'getSummary',
        'trigger' => 'getTrigger'
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
     * Initializes a new instance of the CalendarReminder class.
     *  
     * @param string $action Defines the action to be invoked when an alarm is triggered. Enum, available values: Audio, Display, Email, Procedure, None
     * @param string[] $attachments Collection of Reminder Attachments. Could be an absolute URI or Base64 string representation of attachment content
     * @param \Aspose\Email\Model\ReminderAttendee[] $attendees Contains collection of ReminderAttendee objects.
     * @param string $description Provides a more complete description of the alarm.
     * @param int $duration Specifies the delay period in ticks, after which the alarm will repeat.
     * @param int $repeat Defines the number of time the alarm should be repeated, after the initial trigger.
     * @param string $summary Defines a short summary or subject for the alarm.
     * @param \Aspose\Email\Model\ReminderTrigger $trigger Specifies when an alarm will trigger.
     */
    public function __construct($action = null, $attachments = null, $attendees = null, $description = null, $duration = null, $repeat = null, $summary = null, $trigger = null)
    {
        $this->container['action'] = null;
        $this->container['attachments'] = null;
        $this->container['attendees'] = null;
        $this->container['description'] = null;
        $this->container['duration'] = null;
        $this->container['repeat'] = null;
        $this->container['summary'] = null;
        $this->container['trigger'] = null;

        if ($action != null) $this->setAction($action);
        if ($attachments != null) $this->setAttachments($attachments);
        if ($attendees != null) $this->setAttendees($attendees);
        if ($description != null) $this->setDescription($description);
        if ($duration != null) $this->setDuration($duration);
        if ($repeat != null) $this->setRepeat($repeat);
        if ($summary != null) $this->setSummary($summary);
        if ($trigger != null) $this->setTrigger($trigger);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['repeat'] === null) {
            $invalidProperties[] = "'repeat' can't be null";
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

        if ($this->container['action'] === null) {
            return false;
        }
        if ($this->container['repeat'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action Defines the action to be invoked when an alarm is triggered. Enum, available values: Audio, Display, Email, Procedure, None
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[] $attachments Collection of Reminder Attachments. Could be an absolute URI or Base64 string representation of attachment content
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
     * @return \Aspose\Email\Model\ReminderAttendee[]
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     *
     * @param \Aspose\Email\Model\ReminderAttendee[] $attendees Contains collection of ReminderAttendee objects.
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
     * @param string $description Provides a more complete description of the alarm.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Specifies the delay period in ticks, after which the alarm will repeat.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets repeat
     *
     * @return int
     */
    public function getRepeat()
    {
        return $this->container['repeat'];
    }

    /**
     * Sets repeat
     *
     * @param int $repeat Defines the number of time the alarm should be repeated, after the initial trigger.
     *
     * @return $this
     */
    public function setRepeat($repeat)
    {
        $this->container['repeat'] = $repeat;

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
     * @param string $summary Defines a short summary or subject for the alarm.
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets trigger
     *
     * @return \Aspose\Email\Model\ReminderTrigger
     */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
     * Sets trigger
     *
     * @param \Aspose\Email\Model\ReminderTrigger $trigger Specifies when an alarm will trigger.
     *
     * @return $this
     */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;

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

