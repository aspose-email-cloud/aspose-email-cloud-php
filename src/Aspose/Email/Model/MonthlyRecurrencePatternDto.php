<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MonthlyRecurrencePatternDto.php">
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
 * MonthlyRecurrencePatternDto
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * MonthlyRecurrencePatternDto
 *
 * @description Monthly recurrence pattern.
 */
class MonthlyRecurrencePatternDto extends RecurrencePatternDto 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MonthlyRecurrencePatternDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'start_day' => 'string',
        'start_offset' => 'int',
        'start_position' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'start_day' => null,
        'start_offset' => 'int32',
        'start_position' => null
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
        'start_day' => 'startDay',
        'start_offset' => 'startOffset',
        'start_position' => 'startPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_day' => 'setStartDay',
        'start_offset' => 'setStartOffset',
        'start_position' => 'setStartPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_day' => 'getStartDay',
        'start_offset' => 'getStartOffset',
        'start_position' => 'getStartPosition'
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
     * Initializes a new instance of the MonthlyRecurrencePatternDto class.
     *  
     * @param int $interval Number of recurrence units.
     * @param int $occurs Number of occurrences of the recurrence pattern.
     * @param \DateTime $end_date End date.
     * @param string $week_start Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay
     * @param string $discriminator 
     * @param string $start_day Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay
     * @param int $start_offset Start offset.
     * @param string $start_position Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last
     */
    public function __construct($interval = null, $occurs = null, $end_date = null, $week_start = null, $discriminator = null, $start_day = null, $start_offset = null, $start_position = null)
    {
        parent::__construct();
        $this->container['start_day'] = null;
        $this->container['start_offset'] = null;
        $this->container['start_position'] = null;

        if ($interval != null) $this->setInterval($interval);
        if ($occurs != null) $this->setOccurs($occurs);
        if ($end_date != null) $this->setEndDate($end_date);
        if ($week_start != null) $this->setWeekStart($week_start);
        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
        if ($start_day != null) $this->setStartDay($start_day);
        if ($start_offset != null) $this->setStartOffset($start_offset);
        if ($start_position != null) $this->setStartPosition($start_position);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['start_day'] === null) {
            $invalidProperties[] = "'start_day' can't be null";
        }
        if ($this->container['start_offset'] === null) {
            $invalidProperties[] = "'start_offset' can't be null";
        }
        if ($this->container['start_position'] === null) {
            $invalidProperties[] = "'start_position' can't be null";
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

        if ($this->container['start_day'] === null) {
            return false;
        }
        if ($this->container['start_offset'] === null) {
            return false;
        }
        if ($this->container['start_position'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets start_day
     *
     * @return string
     */
    public function getStartDay()
    {
        return $this->container['start_day'];
    }

    /**
     * Sets start_day
     *
     * @param string $start_day Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay
     *
     * @return $this
     */
    public function setStartDay($start_day)
    {
        $this->container['start_day'] = $start_day;

        return $this;
    }

    /**
     * Gets start_offset
     *
     * @return int
     */
    public function getStartOffset()
    {
        return $this->container['start_offset'];
    }

    /**
     * Sets start_offset
     *
     * @param int $start_offset Start offset.
     *
     * @return $this
     */
    public function setStartOffset($start_offset)
    {
        $this->container['start_offset'] = $start_offset;

        return $this;
    }

    /**
     * Gets start_position
     *
     * @return string
     */
    public function getStartPosition()
    {
        return $this->container['start_position'];
    }

    /**
     * Sets start_position
     *
     * @param string $start_position Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last
     *
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->container['start_position'] = $start_position;

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

