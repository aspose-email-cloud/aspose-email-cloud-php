<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RecurrencePatternDto.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
 * RecurrencePatternDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * RecurrencePatternDto
 *
 * @description iCalendar recurrence pattern.
 */
class RecurrencePatternDto implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "RecurrencePatternDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'interval' => 'int',
        'occurs' => 'int',
        'end_date' => '\DateTime',
        'week_start' => 'string',
        'discriminator' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'interval' => 'int32',
        'occurs' => 'int32',
        'end_date' => 'date-time',
        'week_start' => null,
        'discriminator' => null
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
        'interval' => 'interval',
        'occurs' => 'occurs',
        'end_date' => 'endDate',
        'week_start' => 'weekStart',
        'discriminator' => 'discriminator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interval' => 'setInterval',
        'occurs' => 'setOccurs',
        'end_date' => 'setEndDate',
        'week_start' => 'setWeekStart',
        'discriminator' => 'setDiscriminator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interval' => 'getInterval',
        'occurs' => 'getOccurs',
        'end_date' => 'getEndDate',
        'week_start' => 'getWeekStart',
        'discriminator' => 'getDiscriminator'
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
     * Initializes a new instance of the RecurrencePatternDto class.
     *  
     * @param int $interval Number of recurrence units.
     * @param int $occurs Number of occurrences of the recurrence pattern.
     * @param \DateTime $end_date End date.
     * @param string $week_start Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay
     * @param string $discriminator 
     */
    public function __construct(
        $interval = null,
        $occurs = null,
        $end_date = null,
        $week_start = null
        
    ) {
        $this->container['interval'] = null;
        $this->container['occurs'] = null;
        $this->container['end_date'] = null;
        $this->container['week_start'] = null;

        if ($interval != null) $this->setInterval($interval);
        if ($occurs != null) $this->setOccurs($occurs);
        if ($end_date != null) $this->setEndDate($end_date);
        if ($week_start != null) $this->setWeekStart($week_start);
        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if ($this->container['occurs'] === null) {
            $invalidProperties[] = "'occurs' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['week_start'] === null) {
            $invalidProperties[] = "'week_start' can't be null";
        }
        if ($this->container['discriminator'] === null) {
            $invalidProperties[] = "'discriminator' can't be null";
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

        if ($this->container['interval'] === null) {
            return false;
        }
        if ($this->container['occurs'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['week_start'] === null) {
            return false;
        }
        if ($this->container['discriminator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval Number of recurrence units.
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets occurs
     *
     * @return int
     */
    public function getOccurs()
    {
        return $this->container['occurs'];
    }

    /**
     * Sets occurs
     *
     * @param int $occurs Number of occurrences of the recurrence pattern.
     *
     * @return $this
     */
    public function setOccurs($occurs)
    {
        $this->container['occurs'] = $occurs;

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
     * @param \DateTime $end_date End date.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets week_start
     *
     * @return string
     */
    public function getWeekStart()
    {
        return $this->container['week_start'];
    }

    /**
     * Sets week_start
     *
     * @param string $week_start Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay
     *
     * @return $this
     */
    public function setWeekStart($week_start)
    {
        $this->container['week_start'] = $week_start;

        return $this;
    }

    /**
     * Gets discriminator
     *
     * @return string
     */
    public function getDiscriminator()
    {
        return $this->container['discriminator'];
    }

    /**
     * Sets discriminator
     *
     * @param string $discriminator discriminator
     *
     * @return $this
     */
    public function setDiscriminator($discriminator)
    {
        /* do nothing */
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

