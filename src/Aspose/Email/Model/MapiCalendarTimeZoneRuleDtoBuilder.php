<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarTimeZoneRuleDtoBuilder.php">
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
 * MapiCalendarTimeZoneRuleDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiCalendarTimeZoneRuleDto builder.
 */
class MapiCalendarTimeZoneRuleDtoBuilder
{
    /**
     * A model to build.
     * @var MapiCalendarTimeZoneRuleDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiCalendarTimeZoneRuleDtoBuilder class.
     *
     * @param MapiCalendarTimeZoneRuleDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiCalendarTimeZoneRuleDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets date
     * @param \DateTime $date Date and time that indicate when to begin using the Standard/Daylight time.
     * @return $this
     */
    public function date($date)
    {
        $this->model->setDate($date);
        return $this;
    }
    /**
     * Sets dayOfWeek
     * @param string $dayOfWeek Day of week. Enum, available values: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
     * @return $this
     */
    public function dayOfWeek($dayOfWeek)
    {
        $this->model->setDayOfWeek($dayOfWeek);
        return $this;
    }
    /**
     * Sets hour
     * @param int $hour Hour.
     * @return $this
     */
    public function hour($hour)
    {
        $this->model->setHour($hour);
        return $this;
    }
    /**
     * Sets milliseconds
     * @param int $milliseconds Milliseconds.
     * @return $this
     */
    public function milliseconds($milliseconds)
    {
        $this->model->setMilliseconds($milliseconds);
        return $this;
    }
    /**
     * Sets minute
     * @param int $minute Minute.
     * @return $this
     */
    public function minute($minute)
    {
        $this->model->setMinute($minute);
        return $this;
    }
    /**
     * Sets month
     * @param int $month Month.
     * @return $this
     */
    public function month($month)
    {
        $this->model->setMonth($month);
        return $this;
    }
    /**
     * Sets position
     * @param string $position Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last
     * @return $this
     */
    public function position($position)
    {
        $this->model->setPosition($position);
        return $this;
    }
    /**
     * Sets seconds
     * @param int $seconds Seconds.
     * @return $this
     */
    public function seconds($seconds)
    {
        $this->model->setSeconds($seconds);
        return $this;
    }
    /**
     * Sets year
     * @param int $year Year.
     * @return $this
     */
    public function year($year)
    {
        $this->model->setYear($year);
        return $this;
    }
}

