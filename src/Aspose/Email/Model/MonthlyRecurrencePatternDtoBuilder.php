<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MonthlyRecurrencePatternDtoBuilder.php">
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
 * MonthlyRecurrencePatternDtoBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  MonthlyRecurrencePatternDto builder.
 */
class MonthlyRecurrencePatternDtoBuilder
{
    /**
     * A model to build.
     * @var MonthlyRecurrencePatternDto
     */
    private $model;
    /**
     * Initializes a new instance of the MonthlyRecurrencePatternDtoBuilder class.
     *
     * @param MonthlyRecurrencePatternDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MonthlyRecurrencePatternDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets interval
     * @param int $interval Number of recurrence units.
     * @return $this
     */
    public function interval($interval)
    {
        $this->model->setInterval($interval);
        return $this;
    }
    /**
     * Sets occurs
     * @param int $occurs Number of occurrences of the recurrence pattern.
     * @return $this
     */
    public function occurs($occurs)
    {
        $this->model->setOccurs($occurs);
        return $this;
    }
    /**
     * Sets endDate
     * @param \DateTime $endDate End date.
     * @return $this
     */
    public function endDate($endDate)
    {
        $this->model->setEndDate($endDate);
        return $this;
    }
    /**
     * Sets weekStart
     * @param string $weekStart Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay
     * @return $this
     */
    public function weekStart($weekStart)
    {
        $this->model->setWeekStart($weekStart);
        return $this;
    }
    /**
     * Sets startDay
     * @param string $startDay Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay
     * @return $this
     */
    public function startDay($startDay)
    {
        $this->model->setStartDay($startDay);
        return $this;
    }
    /**
     * Sets startOffset
     * @param int $startOffset Start offset.
     * @return $this
     */
    public function startOffset($startOffset)
    {
        $this->model->setStartOffset($startOffset);
        return $this;
    }
    /**
     * Sets startPosition
     * @param string $startPosition Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last
     * @return $this
     */
    public function startPosition($startPosition)
    {
        $this->model->setStartPosition($startPosition);
        return $this;
    }
}

