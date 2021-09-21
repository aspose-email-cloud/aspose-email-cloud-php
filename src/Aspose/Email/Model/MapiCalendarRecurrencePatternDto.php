<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarRecurrencePatternDto.php">
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
 * MapiCalendarRecurrencePatternDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarRecurrencePatternDto
 *
 * @description Mapi recurrence pattern.
 */
class MapiCalendarRecurrencePatternDto implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarRecurrencePatternDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'calendar_type' => 'string',
        'deleted_instance_dates' => '\DateTime[]',
        'end_date' => '\DateTime',
        'end_type' => 'string',
        'exceptions' => '\Aspose\Email\Model\MapiCalendarExceptionInfoDto[]',
        'frequency' => 'string',
        'modified_instance_dates' => '\DateTime[]',
        'occurrence_count' => 'int',
        'pattern_type' => 'string',
        'period' => 'int',
        'sliding_flag' => 'bool',
        'start_date' => '\DateTime',
        'week_start_day' => 'string',
        'discriminator' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'calendar_type' => null,
        'deleted_instance_dates' => 'date-time',
        'end_date' => 'date-time',
        'end_type' => null,
        'exceptions' => null,
        'frequency' => null,
        'modified_instance_dates' => 'date-time',
        'occurrence_count' => 'int64',
        'pattern_type' => null,
        'period' => 'int64',
        'sliding_flag' => null,
        'start_date' => 'date-time',
        'week_start_day' => null,
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
        'calendar_type' => 'calendarType',
        'deleted_instance_dates' => 'deletedInstanceDates',
        'end_date' => 'endDate',
        'end_type' => 'endType',
        'exceptions' => 'exceptions',
        'frequency' => 'frequency',
        'modified_instance_dates' => 'modifiedInstanceDates',
        'occurrence_count' => 'occurrenceCount',
        'pattern_type' => 'patternType',
        'period' => 'period',
        'sliding_flag' => 'slidingFlag',
        'start_date' => 'startDate',
        'week_start_day' => 'weekStartDay',
        'discriminator' => 'discriminator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calendar_type' => 'setCalendarType',
        'deleted_instance_dates' => 'setDeletedInstanceDates',
        'end_date' => 'setEndDate',
        'end_type' => 'setEndType',
        'exceptions' => 'setExceptions',
        'frequency' => 'setFrequency',
        'modified_instance_dates' => 'setModifiedInstanceDates',
        'occurrence_count' => 'setOccurrenceCount',
        'pattern_type' => 'setPatternType',
        'period' => 'setPeriod',
        'sliding_flag' => 'setSlidingFlag',
        'start_date' => 'setStartDate',
        'week_start_day' => 'setWeekStartDay',
        'discriminator' => 'setDiscriminator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calendar_type' => 'getCalendarType',
        'deleted_instance_dates' => 'getDeletedInstanceDates',
        'end_date' => 'getEndDate',
        'end_type' => 'getEndType',
        'exceptions' => 'getExceptions',
        'frequency' => 'getFrequency',
        'modified_instance_dates' => 'getModifiedInstanceDates',
        'occurrence_count' => 'getOccurrenceCount',
        'pattern_type' => 'getPatternType',
        'period' => 'getPeriod',
        'sliding_flag' => 'getSlidingFlag',
        'start_date' => 'getStartDate',
        'week_start_day' => 'getWeekStartDay',
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
     * Initializes a new instance of the MapiCalendarRecurrencePatternDto class.
     *  
     * @param string $calendar_type Enumerated the calendar type of the mapi recurrence. Enum, available values: Default, CalGregorian, CalGregorianUs, CalJapan, CalTaiwan, CalKorea, CalHijri, CalThai, CalHebrew, CalGregorianMeFrench, CalGregorianArabic, CalGregorianXLitEnglish, CalGregorianXLitFrench, CalLunarJapanese, CalChineseLunar, CalSaka, CalLunarEtoChn, CalLunarEtoKor, CalLunarRokuyou, CalLunarKorean, CalUmAlQura
     * @param \DateTime[] $deleted_instance_dates An array of dates, each of which is the original instance date of either a deleted instance or a modified instance for this recurrence.
     * @param \DateTime $end_date End date of an item recurrence pattern.
     * @param string $end_type Enumerates the ending type for the recurrence. Enum, available values: None, EndAfterDate, EndAfterNOccurrences, NeverEnd
     * @param \Aspose\Email\Model\MapiCalendarExceptionInfoDto[] $exceptions An exception specifies changes to an instance of a recurring series.
     * @param string $frequency Enumerates mapi calendar recurrence frequency. Enum, available values: None, Daily, Weekly, Monthly, Yearly
     * @param \DateTime[] $modified_instance_dates An array of dates, each of which is the date of a modified instance.
     * @param int $occurrence_count Number of occurrences in a recurrence.
     * @param string $pattern_type Enumerates the mapi calendar recurrence pattern types. Enum, available values: Day, Week, Month, MonthEnd, MonthNth, HjMonth, HjMonthNth, HjMonthEnd
     * @param int $period Interval at which the meeting pattern repeats.
     * @param bool $sliding_flag Defines whether pattern is sliding or not.
     * @param \DateTime $start_date Start date of an item recurrence pattern.
     * @param string $week_start_day Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
     * @param string $discriminator 
     */
    public function __construct(
        $calendar_type = null,
        $deleted_instance_dates = null,
        $end_date = null,
        $end_type = null,
        $exceptions = null,
        $frequency = null,
        $modified_instance_dates = null,
        $occurrence_count = null,
        $pattern_type = null,
        $period = null,
        $sliding_flag = null,
        $start_date = null,
        $week_start_day = null
        
    ) {
        $this->container['calendar_type'] = null;
        $this->container['deleted_instance_dates'] = null;
        $this->container['end_date'] = null;
        $this->container['end_type'] = null;
        $this->container['exceptions'] = null;
        $this->container['frequency'] = null;
        $this->container['modified_instance_dates'] = null;
        $this->container['occurrence_count'] = null;
        $this->container['pattern_type'] = null;
        $this->container['period'] = null;
        $this->container['sliding_flag'] = null;
        $this->container['start_date'] = null;
        $this->container['week_start_day'] = null;

        if ($calendar_type != null) $this->setCalendarType($calendar_type);
        if ($deleted_instance_dates != null) $this->setDeletedInstanceDates($deleted_instance_dates);
        if ($end_date != null) $this->setEndDate($end_date);
        if ($end_type != null) $this->setEndType($end_type);
        if ($exceptions != null) $this->setExceptions($exceptions);
        if ($frequency != null) $this->setFrequency($frequency);
        if ($modified_instance_dates != null) $this->setModifiedInstanceDates($modified_instance_dates);
        if ($occurrence_count != null) $this->setOccurrenceCount($occurrence_count);
        if ($pattern_type != null) $this->setPatternType($pattern_type);
        if ($period != null) $this->setPeriod($period);
        if ($sliding_flag != null) $this->setSlidingFlag($sliding_flag);
        if ($start_date != null) $this->setStartDate($start_date);
        if ($week_start_day != null) $this->setWeekStartDay($week_start_day);
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

        if ($this->container['calendar_type'] === null) {
            $invalidProperties[] = "'calendar_type' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['end_type'] === null) {
            $invalidProperties[] = "'end_type' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['occurrence_count'] === null) {
            $invalidProperties[] = "'occurrence_count' can't be null";
        }
        if ($this->container['pattern_type'] === null) {
            $invalidProperties[] = "'pattern_type' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['sliding_flag'] === null) {
            $invalidProperties[] = "'sliding_flag' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['week_start_day'] === null) {
            $invalidProperties[] = "'week_start_day' can't be null";
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

        if ($this->container['calendar_type'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['end_type'] === null) {
            return false;
        }
        if ($this->container['frequency'] === null) {
            return false;
        }
        if ($this->container['occurrence_count'] === null) {
            return false;
        }
        if ($this->container['pattern_type'] === null) {
            return false;
        }
        if ($this->container['period'] === null) {
            return false;
        }
        if ($this->container['sliding_flag'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['week_start_day'] === null) {
            return false;
        }
        if ($this->container['discriminator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets calendar_type
     *
     * @return string
     */
    public function getCalendarType()
    {
        return $this->container['calendar_type'];
    }

    /**
     * Sets calendar_type
     *
     * @param string $calendar_type Enumerated the calendar type of the mapi recurrence. Enum, available values: Default, CalGregorian, CalGregorianUs, CalJapan, CalTaiwan, CalKorea, CalHijri, CalThai, CalHebrew, CalGregorianMeFrench, CalGregorianArabic, CalGregorianXLitEnglish, CalGregorianXLitFrench, CalLunarJapanese, CalChineseLunar, CalSaka, CalLunarEtoChn, CalLunarEtoKor, CalLunarRokuyou, CalLunarKorean, CalUmAlQura
     *
     * @return $this
     */
    public function setCalendarType($calendar_type)
    {
        $this->container['calendar_type'] = $calendar_type;

        return $this;
    }

    /**
     * Gets deleted_instance_dates
     *
     * @return \DateTime[]
     */
    public function getDeletedInstanceDates()
    {
        return $this->container['deleted_instance_dates'];
    }

    /**
     * Sets deleted_instance_dates
     *
     * @param \DateTime[] $deleted_instance_dates An array of dates, each of which is the original instance date of either a deleted instance or a modified instance for this recurrence.
     *
     * @return $this
     */
    public function setDeletedInstanceDates($deleted_instance_dates)
    {
        $this->container['deleted_instance_dates'] = $deleted_instance_dates;

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
     * @param \DateTime $end_date End date of an item recurrence pattern.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets end_type
     *
     * @return string
     */
    public function getEndType()
    {
        return $this->container['end_type'];
    }

    /**
     * Sets end_type
     *
     * @param string $end_type Enumerates the ending type for the recurrence. Enum, available values: None, EndAfterDate, EndAfterNOccurrences, NeverEnd
     *
     * @return $this
     */
    public function setEndType($end_type)
    {
        $this->container['end_type'] = $end_type;

        return $this;
    }

    /**
     * Gets exceptions
     *
     * @return \Aspose\Email\Model\MapiCalendarExceptionInfoDto[]
     */
    public function getExceptions()
    {
        return $this->container['exceptions'];
    }

    /**
     * Sets exceptions
     *
     * @param \Aspose\Email\Model\MapiCalendarExceptionInfoDto[] $exceptions An exception specifies changes to an instance of a recurring series.
     *
     * @return $this
     */
    public function setExceptions($exceptions)
    {
        $this->container['exceptions'] = $exceptions;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency Enumerates mapi calendar recurrence frequency. Enum, available values: None, Daily, Weekly, Monthly, Yearly
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets modified_instance_dates
     *
     * @return \DateTime[]
     */
    public function getModifiedInstanceDates()
    {
        return $this->container['modified_instance_dates'];
    }

    /**
     * Sets modified_instance_dates
     *
     * @param \DateTime[] $modified_instance_dates An array of dates, each of which is the date of a modified instance.
     *
     * @return $this
     */
    public function setModifiedInstanceDates($modified_instance_dates)
    {
        $this->container['modified_instance_dates'] = $modified_instance_dates;

        return $this;
    }

    /**
     * Gets occurrence_count
     *
     * @return int
     */
    public function getOccurrenceCount()
    {
        return $this->container['occurrence_count'];
    }

    /**
     * Sets occurrence_count
     *
     * @param int $occurrence_count Number of occurrences in a recurrence.
     *
     * @return $this
     */
    public function setOccurrenceCount($occurrence_count)
    {
        $this->container['occurrence_count'] = $occurrence_count;

        return $this;
    }

    /**
     * Gets pattern_type
     *
     * @return string
     */
    public function getPatternType()
    {
        return $this->container['pattern_type'];
    }

    /**
     * Sets pattern_type
     *
     * @param string $pattern_type Enumerates the mapi calendar recurrence pattern types. Enum, available values: Day, Week, Month, MonthEnd, MonthNth, HjMonth, HjMonthNth, HjMonthEnd
     *
     * @return $this
     */
    public function setPatternType($pattern_type)
    {
        $this->container['pattern_type'] = $pattern_type;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int $period Interval at which the meeting pattern repeats.
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets sliding_flag
     *
     * @return bool
     */
    public function getSlidingFlag()
    {
        return $this->container['sliding_flag'];
    }

    /**
     * Sets sliding_flag
     *
     * @param bool $sliding_flag Defines whether pattern is sliding or not.
     *
     * @return $this
     */
    public function setSlidingFlag($sliding_flag)
    {
        $this->container['sliding_flag'] = $sliding_flag;

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
     * @param \DateTime $start_date Start date of an item recurrence pattern.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets week_start_day
     *
     * @return string
     */
    public function getWeekStartDay()
    {
        return $this->container['week_start_day'];
    }

    /**
     * Sets week_start_day
     *
     * @param string $week_start_day Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
     *
     * @return $this
     */
    public function setWeekStartDay($week_start_day)
    {
        $this->container['week_start_day'] = $week_start_day;

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

