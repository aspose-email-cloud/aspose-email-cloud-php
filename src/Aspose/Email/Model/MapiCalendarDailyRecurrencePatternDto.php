<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarDailyRecurrencePatternDto.php">
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
 * MapiCalendarDailyRecurrencePatternDto
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarDailyRecurrencePatternDto
 *
 * @description Represents the daily recurrence pattern of the mapi calendar.
 */
class MapiCalendarDailyRecurrencePatternDto extends MapiCalendarRecurrencePatternDto 
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarDailyRecurrencePatternDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'day_of_week' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'day_of_week' => null
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
        'day_of_week' => 'dayOfWeek'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'day_of_week' => 'setDayOfWeek'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'day_of_week' => 'getDayOfWeek'
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
     * Initializes a new instance of the MapiCalendarDailyRecurrencePatternDto class.
     *  
     * @param string $calendar_type Enumerated the calendar type of the mapi recurrence Enum, available values: Default, CalGregorian, CalGregorianUs, CalJapan, CalTaiwan, CalKorea, CalHijri, CalThai, CalHebrew, CalGregorianMeFrench, CalGregorianArabic, CalGregorianXLitEnglish, CalGregorianXLitFrench, CalLunarJapanese, CalChineseLunar, CalSaka, CalLunarEtoChn, CalLunarEtoKor, CalLunarRokuyou, CalLunarKorean, CalUmAlQura
     * @param \DateTime[] $deleted_instance_dates An array of dates, each of which is the original instance date of either a deleted instance or a modified instance for this recurrence.
     * @param \DateTime $end_date End date of an item recurrence pattern.
     * @param string $end_type Enumerates the ending type for the recurrence. Enum, available values: None, EndAfterDate, EndAfterNOccurrences, NeverEnd
     * @param \Aspose\Email\Model\MapiCalendarExceptionInfoDto[] $exceptions An exception specifies changes to an instance of a recurring series.
     * @param string $frequency Enumerates mapi calendar recurrence frequency Enum, available values: None, Daily, Weekly, Monthly, Yearly
     * @param \DateTime[] $modified_instance_dates An array of dates, each of which is the date of a modified instance.
     * @param int $occurrence_count Number of occurrences in a recurrence.
     * @param string $pattern_type Enumerates the mapi calendar recurrence pattern types Enum, available values: Day, Week, Month, MonthEnd, MonthNth, HjMonth, HjMonthNth, HjMonthEnd
     * @param int $period Interval at which the meeting pattern repeats.
     * @param bool $sliding_flag Defines whether pattern is sliding or not.
     * @param \DateTime $start_date Start date of an item recurrence pattern.
     * @param string $week_start_day Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
     * @param string $discriminator 
     * @param string[] $day_of_week Days of week at which the event occurs. Items: Enumerates the days of week of the mapi calendar recurrence pattern Enum, available values: Saturday, Friday, Thursday, Wednesday, Tuesday, Monday, Sunday
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
        ,
        $day_of_week = null
    ) {
        parent::__construct();
        $this->container['day_of_week'] = null;

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
        if ($day_of_week != null) $this->setDayOfWeek($day_of_week);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets day_of_week
     *
     * @return string[]
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param string[] $day_of_week Days of week at which the event occurs. Items: Enumerates the days of week of the mapi calendar recurrence pattern Enum, available values: Saturday, Friday, Thursday, Wednesday, Tuesday, Monday, Sunday
     *
     * @return $this
     */
    public function setDayOfWeek($day_of_week)
    {
        $this->container['day_of_week'] = $day_of_week;

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

