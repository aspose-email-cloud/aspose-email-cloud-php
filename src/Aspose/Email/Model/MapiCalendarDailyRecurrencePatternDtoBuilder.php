<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarDailyRecurrencePatternDtoBuilder.php">
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
 * MapiCalendarDailyRecurrencePatternDtoBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiCalendarDailyRecurrencePatternDto builder.
 */
class MapiCalendarDailyRecurrencePatternDtoBuilder
{
    /**
     * A model to build.
     * @var MapiCalendarDailyRecurrencePatternDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiCalendarDailyRecurrencePatternDtoBuilder class.
     *
     * @param MapiCalendarDailyRecurrencePatternDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiCalendarDailyRecurrencePatternDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets calendarType
     * @param string $calendarType Enumerated the calendar type of the mapi recurrence. Enum, available values: Default, CalGregorian, CalGregorianUs, CalJapan, CalTaiwan, CalKorea, CalHijri, CalThai, CalHebrew, CalGregorianMeFrench, CalGregorianArabic, CalGregorianXLitEnglish, CalGregorianXLitFrench, CalLunarJapanese, CalChineseLunar, CalSaka, CalLunarEtoChn, CalLunarEtoKor, CalLunarRokuyou, CalLunarKorean, CalUmAlQura
     * @return $this
     */
    public function calendarType($calendarType)
    {
        $this->model->setCalendarType($calendarType);
        return $this;
    }
    /**
     * Sets deletedInstanceDates
     * @param \DateTime[] $deletedInstanceDates An array of dates, each of which is the original instance date of either a deleted instance or a modified instance for this recurrence.
     * @return $this
     */
    public function deletedInstanceDates($deletedInstanceDates)
    {
        $this->model->setDeletedInstanceDates($deletedInstanceDates);
        return $this;
    }
    /**
     * Sets endDate
     * @param \DateTime $endDate End date of an item recurrence pattern.
     * @return $this
     */
    public function endDate($endDate)
    {
        $this->model->setEndDate($endDate);
        return $this;
    }
    /**
     * Sets endType
     * @param string $endType Enumerates the ending type for the recurrence. Enum, available values: None, EndAfterDate, EndAfterNOccurrences, NeverEnd
     * @return $this
     */
    public function endType($endType)
    {
        $this->model->setEndType($endType);
        return $this;
    }
    /**
     * Sets exceptions
     * @param \Aspose\Email\Model\MapiCalendarExceptionInfoDto[] $exceptions An exception specifies changes to an instance of a recurring series.
     * @return $this
     */
    public function exceptions($exceptions)
    {
        $this->model->setExceptions($exceptions);
        return $this;
    }
    /**
     * Sets frequency
     * @param string $frequency Enumerates mapi calendar recurrence frequency. Enum, available values: None, Daily, Weekly, Monthly, Yearly
     * @return $this
     */
    public function frequency($frequency)
    {
        $this->model->setFrequency($frequency);
        return $this;
    }
    /**
     * Sets modifiedInstanceDates
     * @param \DateTime[] $modifiedInstanceDates An array of dates, each of which is the date of a modified instance.
     * @return $this
     */
    public function modifiedInstanceDates($modifiedInstanceDates)
    {
        $this->model->setModifiedInstanceDates($modifiedInstanceDates);
        return $this;
    }
    /**
     * Sets occurrenceCount
     * @param int $occurrenceCount Number of occurrences in a recurrence.
     * @return $this
     */
    public function occurrenceCount($occurrenceCount)
    {
        $this->model->setOccurrenceCount($occurrenceCount);
        return $this;
    }
    /**
     * Sets patternType
     * @param string $patternType Enumerates the mapi calendar recurrence pattern types. Enum, available values: Day, Week, Month, MonthEnd, MonthNth, HjMonth, HjMonthNth, HjMonthEnd
     * @return $this
     */
    public function patternType($patternType)
    {
        $this->model->setPatternType($patternType);
        return $this;
    }
    /**
     * Sets period
     * @param int $period Interval at which the meeting pattern repeats.
     * @return $this
     */
    public function period($period)
    {
        $this->model->setPeriod($period);
        return $this;
    }
    /**
     * Sets slidingFlag
     * @param bool $slidingFlag Defines whether pattern is sliding or not.
     * @return $this
     */
    public function slidingFlag($slidingFlag)
    {
        $this->model->setSlidingFlag($slidingFlag);
        return $this;
    }
    /**
     * Sets startDate
     * @param \DateTime $startDate Start date of an item recurrence pattern.
     * @return $this
     */
    public function startDate($startDate)
    {
        $this->model->setStartDate($startDate);
        return $this;
    }
    /**
     * Sets weekStartDay
     * @param string $weekStartDay Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
     * @return $this
     */
    public function weekStartDay($weekStartDay)
    {
        $this->model->setWeekStartDay($weekStartDay);
        return $this;
    }
    /**
     * Sets dayOfWeek
     * @param string[] $dayOfWeek Days of week at which the event occurs. Items: Enumerates the days of week of the mapi calendar recurrence pattern. Enum, available values: Saturday, Friday, Thursday, Wednesday, Tuesday, Monday, Sunday
     * @return $this
     */
    public function dayOfWeek($dayOfWeek)
    {
        $this->model->setDayOfWeek($dayOfWeek);
        return $this;
    }
}

