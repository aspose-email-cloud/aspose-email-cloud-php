<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarTimeZoneInfoDto.php">
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
 * MapiCalendarTimeZoneInfoDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarTimeZoneInfoDto
 *
 * @description Represents the mapi calendar time zone rule.
 */
class MapiCalendarTimeZoneInfoDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarTimeZoneInfoDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bias' => 'int',
        'daylight_bias' => 'int',
        'daylight_date' => '\Aspose\Email\Model\MapiCalendarTimeZoneRuleDto',
        'standard_bias' => 'int',
        'standard_date' => '\Aspose\Email\Model\MapiCalendarTimeZoneRuleDto',
        'time_zone_flags' => 'string[]',
        'year' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bias' => 'int32',
        'daylight_bias' => 'int32',
        'daylight_date' => null,
        'standard_bias' => 'int32',
        'standard_date' => null,
        'time_zone_flags' => null,
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
        'bias' => 'bias',
        'daylight_bias' => 'daylightBias',
        'daylight_date' => 'daylightDate',
        'standard_bias' => 'standardBias',
        'standard_date' => 'standardDate',
        'time_zone_flags' => 'timeZoneFlags',
        'year' => 'year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bias' => 'setBias',
        'daylight_bias' => 'setDaylightBias',
        'daylight_date' => 'setDaylightDate',
        'standard_bias' => 'setStandardBias',
        'standard_date' => 'setStandardDate',
        'time_zone_flags' => 'setTimeZoneFlags',
        'year' => 'setYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bias' => 'getBias',
        'daylight_bias' => 'getDaylightBias',
        'daylight_date' => 'getDaylightDate',
        'standard_bias' => 'getStandardBias',
        'standard_date' => 'getStandardDate',
        'time_zone_flags' => 'getTimeZoneFlags',
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
     * Initializes a new instance of the MapiCalendarTimeZoneInfoDto class.
     *  
     * @param int $bias Time zone's offset in minutes from UTC.
     * @param int $daylight_bias Offset in minutes from lBias during daylight saving time.
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto $daylight_date Date and local time that indicate when to begin using the DaylightBias.
     * @param int $standard_bias Offset in minutes from lBias during standard time.
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto $standard_date Date and local time that indicate when to begin using the StandardBias.
     * @param string[] $time_zone_flags Individual bit flags that specify information about this TimeZoneRule. Items: Enumerates the individual bit flags that specify information about TimeZoneRule Enum, available values: TzRuleFlagRecurCurrentTzReg, TzRuleFlagEffectiveTzReg
     * @param int $year Year in which this rule is scheduled to take effect.
     */
    public function __construct(
        $bias = null,
        $daylight_bias = null,
        $daylight_date = null,
        $standard_bias = null,
        $standard_date = null,
        $time_zone_flags = null,
        $year = null
    ) {
        $this->container['bias'] = null;
        $this->container['daylight_bias'] = null;
        $this->container['daylight_date'] = null;
        $this->container['standard_bias'] = null;
        $this->container['standard_date'] = null;
        $this->container['time_zone_flags'] = null;
        $this->container['year'] = null;

        if ($bias != null) $this->setBias($bias);
        if ($daylight_bias != null) $this->setDaylightBias($daylight_bias);
        if ($daylight_date != null) $this->setDaylightDate($daylight_date);
        if ($standard_bias != null) $this->setStandardBias($standard_bias);
        if ($standard_date != null) $this->setStandardDate($standard_date);
        if ($time_zone_flags != null) $this->setTimeZoneFlags($time_zone_flags);
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

        if ($this->container['bias'] === null) {
            $invalidProperties[] = "'bias' can't be null";
        }
        if ($this->container['daylight_bias'] === null) {
            $invalidProperties[] = "'daylight_bias' can't be null";
        }
        if ($this->container['standard_bias'] === null) {
            $invalidProperties[] = "'standard_bias' can't be null";
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

        if ($this->container['bias'] === null) {
            return false;
        }
        if ($this->container['daylight_bias'] === null) {
            return false;
        }
        if ($this->container['standard_bias'] === null) {
            return false;
        }
        if ($this->container['year'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bias
     *
     * @return int
     */
    public function getBias()
    {
        return $this->container['bias'];
    }

    /**
     * Sets bias
     *
     * @param int $bias Time zone's offset in minutes from UTC.
     *
     * @return $this
     */
    public function setBias($bias)
    {
        $this->container['bias'] = $bias;

        return $this;
    }

    /**
     * Gets daylight_bias
     *
     * @return int
     */
    public function getDaylightBias()
    {
        return $this->container['daylight_bias'];
    }

    /**
     * Sets daylight_bias
     *
     * @param int $daylight_bias Offset in minutes from lBias during daylight saving time.
     *
     * @return $this
     */
    public function setDaylightBias($daylight_bias)
    {
        $this->container['daylight_bias'] = $daylight_bias;

        return $this;
    }

    /**
     * Gets daylight_date
     *
     * @return \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto
     */
    public function getDaylightDate()
    {
        return $this->container['daylight_date'];
    }

    /**
     * Sets daylight_date
     *
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto $daylight_date Date and local time that indicate when to begin using the DaylightBias.
     *
     * @return $this
     */
    public function setDaylightDate($daylight_date)
    {
        $this->container['daylight_date'] = $daylight_date;

        return $this;
    }

    /**
     * Gets standard_bias
     *
     * @return int
     */
    public function getStandardBias()
    {
        return $this->container['standard_bias'];
    }

    /**
     * Sets standard_bias
     *
     * @param int $standard_bias Offset in minutes from lBias during standard time.
     *
     * @return $this
     */
    public function setStandardBias($standard_bias)
    {
        $this->container['standard_bias'] = $standard_bias;

        return $this;
    }

    /**
     * Gets standard_date
     *
     * @return \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto
     */
    public function getStandardDate()
    {
        return $this->container['standard_date'];
    }

    /**
     * Sets standard_date
     *
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto $standard_date Date and local time that indicate when to begin using the StandardBias.
     *
     * @return $this
     */
    public function setStandardDate($standard_date)
    {
        $this->container['standard_date'] = $standard_date;

        return $this;
    }

    /**
     * Gets time_zone_flags
     *
     * @return string[]
     */
    public function getTimeZoneFlags()
    {
        return $this->container['time_zone_flags'];
    }

    /**
     * Sets time_zone_flags
     *
     * @param string[] $time_zone_flags Individual bit flags that specify information about this TimeZoneRule. Items: Enumerates the individual bit flags that specify information about TimeZoneRule Enum, available values: TzRuleFlagRecurCurrentTzReg, TzRuleFlagEffectiveTzReg
     *
     * @return $this
     */
    public function setTimeZoneFlags($time_zone_flags)
    {
        $this->container['time_zone_flags'] = $time_zone_flags;

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
     * @param int $year Year in which this rule is scheduled to take effect.
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

