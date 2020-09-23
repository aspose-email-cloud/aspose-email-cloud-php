<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarTimeZoneInfoDtoBuilder.php">
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
 * MapiCalendarTimeZoneInfoDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiCalendarTimeZoneInfoDto builder.
 */
class MapiCalendarTimeZoneInfoDtoBuilder
{
    /**
     * A model to build.
     * @var MapiCalendarTimeZoneInfoDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiCalendarTimeZoneInfoDtoBuilder class.
     *
     * @param MapiCalendarTimeZoneInfoDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiCalendarTimeZoneInfoDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets bias
     * @param int $bias Time zone's offset in minutes from UTC.
     * @return $this
     */
    public function bias($bias)
    {
        $this->model->setBias($bias);
        return $this;
    }
    /**
     * Sets daylightBias
     * @param int $daylightBias Offset in minutes from lBias during daylight saving time.
     * @return $this
     */
    public function daylightBias($daylightBias)
    {
        $this->model->setDaylightBias($daylightBias);
        return $this;
    }
    /**
     * Sets daylightDate
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto $daylightDate Date and local time that indicate when to begin using the DaylightBias.
     * @return $this
     */
    public function daylightDate($daylightDate)
    {
        $this->model->setDaylightDate($daylightDate);
        return $this;
    }
    /**
     * Sets standardBias
     * @param int $standardBias Offset in minutes from lBias during standard time.
     * @return $this
     */
    public function standardBias($standardBias)
    {
        $this->model->setStandardBias($standardBias);
        return $this;
    }
    /**
     * Sets standardDate
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneRuleDto $standardDate Date and local time that indicate when to begin using the StandardBias.
     * @return $this
     */
    public function standardDate($standardDate)
    {
        $this->model->setStandardDate($standardDate);
        return $this;
    }
    /**
     * Sets timeZoneFlags
     * @param string[] $timeZoneFlags Individual bit flags that specify information about this TimeZoneRule. Items: Enumerates the individual bit flags that specify information about TimeZoneRule Enum, available values: TzRuleFlagRecurCurrentTzReg, TzRuleFlagEffectiveTzReg
     * @return $this
     */
    public function timeZoneFlags($timeZoneFlags)
    {
        $this->model->setTimeZoneFlags($timeZoneFlags);
        return $this;
    }
    /**
     * Sets year
     * @param int $year Year in which this rule is scheduled to take effect.
     * @return $this
     */
    public function year($year)
    {
        $this->model->setYear($year);
        return $this;
    }
}

