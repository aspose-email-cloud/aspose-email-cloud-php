<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarEventRecurrenceDtoBuilder.php">
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
 * MapiCalendarEventRecurrenceDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiCalendarEventRecurrenceDto builder.
 */
class MapiCalendarEventRecurrenceDtoBuilder
{
    /**
     * A model to build.
     * @var MapiCalendarEventRecurrenceDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiCalendarEventRecurrenceDtoBuilder class.
     *
     * @param MapiCalendarEventRecurrenceDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiCalendarEventRecurrenceDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets appointmentTimeZoneDefinitionRecur
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $appointmentTimeZoneDefinitionRecur Time zone information that describes how to convert the meeting date and time on a recurring series to and from UTC.
     * @return $this
     */
    public function appointmentTimeZoneDefinitionRecur($appointmentTimeZoneDefinitionRecur)
    {
        $this->model->setAppointmentTimeZoneDefinitionRecur($appointmentTimeZoneDefinitionRecur);
        return $this;
    }
    /**
     * Sets clipEnd
     * @param \DateTime $clipEnd Date of the last instance.
     * @return $this
     */
    public function clipEnd($clipEnd)
    {
        $this->model->setClipEnd($clipEnd);
        return $this;
    }
    /**
     * Sets clipStart
     * @param \DateTime $clipStart Date of the first instance.
     * @return $this
     */
    public function clipStart($clipStart)
    {
        $this->model->setClipStart($clipStart);
        return $this;
    }
    /**
     * Sets isException
     * @param bool $isException Value indicating whether the object represents an exception.
     * @return $this
     */
    public function isException($isException)
    {
        $this->model->setIsException($isException);
        return $this;
    }
    /**
     * Sets recurrencePattern
     * @param \Aspose\Email\Model\MapiCalendarRecurrencePatternDto $recurrencePattern Recurrence pattern.
     * @return $this
     */
    public function recurrencePattern($recurrencePattern)
    {
        $this->model->setRecurrencePattern($recurrencePattern);
        return $this;
    }
    /**
     * Sets timeZoneStruct
     * @param \Aspose\Email\Model\MapiCalendarTimeZoneDto $timeZoneStruct Time zone information for a recurring meeting.
     * @return $this
     */
    public function timeZoneStruct($timeZoneStruct)
    {
        $this->model->setTimeZoneStruct($timeZoneStruct);
        return $this;
    }
}

