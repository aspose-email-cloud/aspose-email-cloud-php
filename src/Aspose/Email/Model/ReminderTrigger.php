<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReminderTrigger.php">
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
 * ReminderTrigger
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * ReminderTrigger
 *
 * @description Specifies when an alarm will trigger.
 */
class ReminderTrigger implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ReminderTrigger";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'date_time' => '\DateTime',
        'duration' => 'int',
        'related' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'date_time' => 'date-time',
        'duration' => 'int64',
        'related' => null
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
        'date_time' => 'dateTime',
        'duration' => 'duration',
        'related' => 'related'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time' => 'setDateTime',
        'duration' => 'setDuration',
        'related' => 'setRelated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time' => 'getDateTime',
        'duration' => 'getDuration',
        'related' => 'getRelated'
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
     * Initializes a new instance of the ReminderTrigger class.
     *  
     * @param \DateTime $date_time A trigger set to an absolute date/time.
     * @param int $duration Specifies a relative time in ticks for the trigger of the alarm.
     * @param string $related Specify the relationship of the alarm trigger with respect to the start or end of the event. Enum, available values: Start, End
     */
    public function __construct(
        $date_time = null,
        $duration = null,
        $related = null
    ) {
        $this->container['date_time'] = null;
        $this->container['duration'] = null;
        $this->container['related'] = null;

        if ($date_time != null) $this->setDateTime($date_time);
        if ($duration != null) $this->setDuration($duration);
        if ($related != null) $this->setRelated($related);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date_time'] === null) {
            $invalidProperties[] = "'date_time' can't be null";
        }
        if ($this->container['related'] === null) {
            $invalidProperties[] = "'related' can't be null";
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

        if ($this->container['date_time'] === null) {
            return false;
        }
        if ($this->container['related'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime $date_time A trigger set to an absolute date/time.
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

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
     * @param int $duration Specifies a relative time in ticks for the trigger of the alarm.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets related
     *
     * @return string
     */
    public function getRelated()
    {
        return $this->container['related'];
    }

    /**
     * Sets related
     *
     * @param string $related Specify the relationship of the alarm trigger with respect to the start or end of the event. Enum, available values: Start, End
     *
     * @return $this
     */
    public function setRelated($related)
    {
        $this->container['related'] = $related;

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

