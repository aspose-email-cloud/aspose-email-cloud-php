<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarTimeZoneRuleDto.php">
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
 * MapiCalendarTimeZoneRuleDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarTimeZoneRuleDto
 *
 * @description Represents time zone rule that indicate when to begin using the Standard/Daylight time.
 */
class MapiCalendarTimeZoneRuleDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarTimeZoneRuleDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'day_of_week' => 'string',
        'hour' => 'int',
        'milliseconds' => 'int',
        'minute' => 'int',
        'month' => 'int',
        'position' => 'string',
        'seconds' => 'int',
        'year' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'date' => 'date-time',
        'day_of_week' => null,
        'hour' => 'int32',
        'milliseconds' => 'int32',
        'minute' => 'int32',
        'month' => 'int32',
        'position' => null,
        'seconds' => 'int32',
        'year' => 'int32'
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
        'date' => 'date',
        'day_of_week' => 'dayOfWeek',
        'hour' => 'hour',
        'milliseconds' => 'milliseconds',
        'minute' => 'minute',
        'month' => 'month',
        'position' => 'position',
        'seconds' => 'seconds',
        'year' => 'year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'day_of_week' => 'setDayOfWeek',
        'hour' => 'setHour',
        'milliseconds' => 'setMilliseconds',
        'minute' => 'setMinute',
        'month' => 'setMonth',
        'position' => 'setPosition',
        'seconds' => 'setSeconds',
        'year' => 'setYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'day_of_week' => 'getDayOfWeek',
        'hour' => 'getHour',
        'milliseconds' => 'getMilliseconds',
        'minute' => 'getMinute',
        'month' => 'getMonth',
        'position' => 'getPosition',
        'seconds' => 'getSeconds',
        'year' => 'getYear'
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
     * Initializes a new instance of the MapiCalendarTimeZoneRuleDto class.
     *  
     * @param \DateTime $date Date and time that indicate when to begin using the Standard/Daylight time.
     * @param string $day_of_week Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
     * @param int $hour Hour.
     * @param int $milliseconds Milliseconds.
     * @param int $minute Minute.
     * @param int $month Month.
     * @param string $position Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last
     * @param int $seconds Seconds.
     * @param int $year Year.
     */
    public function __construct(
        $date = null,
        $day_of_week = null,
        $hour = null,
        $milliseconds = null,
        $minute = null,
        $month = null,
        $position = null,
        $seconds = null,
        $year = null
    ) {
        $this->container['date'] = null;
        $this->container['day_of_week'] = null;
        $this->container['hour'] = null;
        $this->container['milliseconds'] = null;
        $this->container['minute'] = null;
        $this->container['month'] = null;
        $this->container['position'] = null;
        $this->container['seconds'] = null;
        $this->container['year'] = null;

        if ($date != null) $this->setDate($date);
        if ($day_of_week != null) $this->setDayOfWeek($day_of_week);
        if ($hour != null) $this->setHour($hour);
        if ($milliseconds != null) $this->setMilliseconds($milliseconds);
        if ($minute != null) $this->setMinute($minute);
        if ($month != null) $this->setMonth($month);
        if ($position != null) $this->setPosition($position);
        if ($seconds != null) $this->setSeconds($seconds);
        if ($year != null) $this->setYear($year);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['day_of_week'] === null) {
            $invalidProperties[] = "'day_of_week' can't be null";
        }
        if ($this->container['hour'] === null) {
            $invalidProperties[] = "'hour' can't be null";
        }
        if ($this->container['milliseconds'] === null) {
            $invalidProperties[] = "'milliseconds' can't be null";
        }
        if ($this->container['minute'] === null) {
            $invalidProperties[] = "'minute' can't be null";
        }
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if (($this->container['month'] > 12)) {
            $invalidProperties[] = "invalid value for 'month', must be smaller than or equal to 12.";
        }

        if (($this->container['month'] < 0)) {
            $invalidProperties[] = "invalid value for 'month', must be bigger than or equal to 0.";
        }

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['seconds'] === null) {
            $invalidProperties[] = "'seconds' can't be null";
        }
        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
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

        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['day_of_week'] === null) {
            return false;
        }
        if ($this->container['hour'] === null) {
            return false;
        }
        if ($this->container['milliseconds'] === null) {
            return false;
        }
        if ($this->container['minute'] === null) {
            return false;
        }
        if ($this->container['month'] === null) {
            return false;
        }
        if ($this->container['month'] > 12) {
            return false;
        }
        if ($this->container['month'] < 0) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['seconds'] === null) {
            return false;
        }
        if ($this->container['year'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Date and time that indicate when to begin using the Standard/Daylight time.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets day_of_week
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param string $day_of_week Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
     *
     * @return $this
     */
    public function setDayOfWeek($day_of_week)
    {
        $this->container['day_of_week'] = $day_of_week;

        return $this;
    }

    /**
     * Gets hour
     *
     * @return int
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     * @param int $hour Hour.
     *
     * @return $this
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets milliseconds
     *
     * @return int
     */
    public function getMilliseconds()
    {
        return $this->container['milliseconds'];
    }

    /**
     * Sets milliseconds
     *
     * @param int $milliseconds Milliseconds.
     *
     * @return $this
     */
    public function setMilliseconds($milliseconds)
    {
        $this->container['milliseconds'] = $milliseconds;

        return $this;
    }

    /**
     * Gets minute
     *
     * @return int
     */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
     * Sets minute
     *
     * @param int $minute Minute.
     *
     * @return $this
     */
    public function setMinute($minute)
    {
        $this->container['minute'] = $minute;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month Month.
     *
     * @return $this
     */
    public function setMonth($month)
    {

        if (($month > 12)) {
            throw new \InvalidArgumentException('invalid value for $month when calling MapiCalendarTimeZoneRuleDto., must be smaller than or equal to 12.');
        }
        if (($month < 0)) {
            throw new \InvalidArgumentException('invalid value for $month when calling MapiCalendarTimeZoneRuleDto., must be bigger than or equal to 0.');
        }

        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string $position Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets seconds
     *
     * @return int
     */
    public function getSeconds()
    {
        return $this->container['seconds'];
    }

    /**
     * Sets seconds
     *
     * @param int $seconds Seconds.
     *
     * @return $this
     */
    public function setSeconds($seconds)
    {
        $this->container['seconds'] = $seconds;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year Year.
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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

