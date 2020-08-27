<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarEventRecurrenceDto.php">
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
 * MapiCalendarEventRecurrenceDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarEventRecurrenceDto
 *
 * @description Recurrence properties of calendar object.
 */
class MapiCalendarEventRecurrenceDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarEventRecurrenceDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appointment_time_zone_definition_recur' => '\Aspose\Email\Model\MapiCalendarTimeZoneDto',
        'clip_end' => '\DateTime',
        'clip_start' => '\DateTime',
        'is_exception' => 'bool',
        'recurrence_pattern' => '\Aspose\Email\Model\MapiCalendarRecurrencePatternDto',
        'time_zone_struct' => '\Aspose\Email\Model\MapiCalendarTimeZoneDto'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appointment_time_zone_definition_recur' => null,
        'clip_end' => 'date-time',
        'clip_start' => 'date-time',
        'is_exception' => null,
        'recurrence_pattern' => null,
        'time_zone_struct' => null
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
        'appointment_time_zone_definition_recur' => 'appointmentTimeZoneDefinitionRecur',
        'clip_end' => 'clipEnd',
        'clip_start' => 'clipStart',
        'is_exception' => 'isException',
        'recurrence_pattern' => 'recurrencePattern',
        'time_zone_struct' => 'timeZoneStruct'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_time_zone_definition_recur' => 'setAppointmentTimeZoneDefinitionRecur',
        'clip_end' => 'setClipEnd',
        'clip_start' => 'setClipStart',
        'is_exception' => 'setIsException',
        'recurrence_pattern' => 'setRecurrencePattern',
        'time_zone_struct' => 'setTimeZoneStruct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_time_zone_definition_recur' => 'getAppointmentTimeZoneDefinitionRecur',
        'clip_end' => 'getClipEnd',
        'clip_start' => 'getClipStart',
        'is_exception' => 'getIsException',
        'recurrence_pattern' => 'getRecurrencePattern',
        'time_zone_struct' => 'getTimeZoneStruct'
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
     * Initializes a new instance of the MapiCalendarEventRecurrenceDto class.
     *  
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $appointment_time_zone_definition_recur Time zone information that describes how to convert the meeting date and time on a recurring series to and from UTC.
     * @param \DateTime $clip_end Date of the last instance.
     * @param \DateTime $clip_start Date of the first instance.
     * @param bool $is_exception Value indicating whether the object represents an exception.
     * @param \Aspose\Email\Model\MapiCalendarRecurrencePatternDto $recurrence_pattern Recurrence pattern.
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $time_zone_struct Time zone information for a recurring meeting.
     */
    public function __construct(
        $appointment_time_zone_definition_recur = null,
        $clip_end = null,
        $clip_start = null,
        $is_exception = null,
        $recurrence_pattern = null,
        $time_zone_struct = null
    ) {
        $this->container['appointment_time_zone_definition_recur'] = null;
        $this->container['clip_end'] = null;
        $this->container['clip_start'] = null;
        $this->container['is_exception'] = null;
        $this->container['recurrence_pattern'] = null;
        $this->container['time_zone_struct'] = null;

        if ($appointment_time_zone_definition_recur != null) $this->setAppointmentTimeZoneDefinitionRecur($appointment_time_zone_definition_recur);
        if ($clip_end != null) $this->setClipEnd($clip_end);
        if ($clip_start != null) $this->setClipStart($clip_start);
        if ($is_exception != null) $this->setIsException($is_exception);
        if ($recurrence_pattern != null) $this->setRecurrencePattern($recurrence_pattern);
        if ($time_zone_struct != null) $this->setTimeZoneStruct($time_zone_struct);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['clip_end'] === null) {
            $invalidProperties[] = "'clip_end' can't be null";
        }
        if ($this->container['clip_start'] === null) {
            $invalidProperties[] = "'clip_start' can't be null";
        }
        if ($this->container['is_exception'] === null) {
            $invalidProperties[] = "'is_exception' can't be null";
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

        if ($this->container['clip_end'] === null) {
            return false;
        }
        if ($this->container['clip_start'] === null) {
            return false;
        }
        if ($this->container['is_exception'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets appointment_time_zone_definition_recur
     *
     * @return \Aspose\Email\Model\MapiCalendarTimeZoneDto
     */
    public function getAppointmentTimeZoneDefinitionRecur()
    {
        return $this->container['appointment_time_zone_definition_recur'];
    }

    /**
     * Sets appointment_time_zone_definition_recur
     *
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $appointment_time_zone_definition_recur Time zone information that describes how to convert the meeting date and time on a recurring series to and from UTC.
     *
     * @return $this
     */
    public function setAppointmentTimeZoneDefinitionRecur($appointment_time_zone_definition_recur)
    {
        $this->container['appointment_time_zone_definition_recur'] = $appointment_time_zone_definition_recur;

        return $this;
    }

    /**
     * Gets clip_end
     *
     * @return \DateTime
     */
    public function getClipEnd()
    {
        return $this->container['clip_end'];
    }

    /**
     * Sets clip_end
     *
     * @param \DateTime $clip_end Date of the last instance.
     *
     * @return $this
     */
    public function setClipEnd($clip_end)
    {
        $this->container['clip_end'] = $clip_end;

        return $this;
    }

    /**
     * Gets clip_start
     *
     * @return \DateTime
     */
    public function getClipStart()
    {
        return $this->container['clip_start'];
    }

    /**
     * Sets clip_start
     *
     * @param \DateTime $clip_start Date of the first instance.
     *
     * @return $this
     */
    public function setClipStart($clip_start)
    {
        $this->container['clip_start'] = $clip_start;

        return $this;
    }

    /**
     * Gets is_exception
     *
     * @return bool
     */
    public function getIsException()
    {
        return $this->container['is_exception'];
    }

    /**
     * Sets is_exception
     *
     * @param bool $is_exception Value indicating whether the object represents an exception.
     *
     * @return $this
     */
    public function setIsException($is_exception)
    {
        $this->container['is_exception'] = $is_exception;

        return $this;
    }

    /**
     * Gets recurrence_pattern
     *
     * @return \Aspose\Email\Model\MapiCalendarRecurrencePatternDto
     */
    public function getRecurrencePattern()
    {
        return $this->container['recurrence_pattern'];
    }

    /**
     * Sets recurrence_pattern
     *
     * @param \Aspose\Email\Model\MapiCalendarRecurrencePatternDto $recurrence_pattern Recurrence pattern.
     *
     * @return $this
     */
    public function setRecurrencePattern($recurrence_pattern)
    {
        $this->container['recurrence_pattern'] = $recurrence_pattern;

        return $this;
    }

    /**
     * Gets time_zone_struct
     *
     * @return \Aspose\Email\Model\MapiCalendarTimeZoneDto
     */
    public function getTimeZoneStruct()
    {
        return $this->container['time_zone_struct'];
    }

    /**
     * Sets time_zone_struct
     *
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $time_zone_struct Time zone information for a recurring meeting.
     *
     * @return $this
     */
    public function setTimeZoneStruct($time_zone_struct)
    {
        $this->container['time_zone_struct'] = $time_zone_struct;

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

