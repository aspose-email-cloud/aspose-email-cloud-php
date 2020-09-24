<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarAttendeesDtoBuilder.php">
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
 * MapiCalendarAttendeesDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiCalendarAttendeesDto builder.
 */
class MapiCalendarAttendeesDtoBuilder
{
    /**
     * A model to build.
     * @var MapiCalendarAttendeesDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiCalendarAttendeesDtoBuilder class.
     *
     * @param MapiCalendarAttendeesDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiCalendarAttendeesDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets appointmentRecipients
     * @param \Aspose\Email\Model\MapiRecipientDto[] $appointmentRecipients List of attendees.
     * @return $this
     */
    public function appointmentRecipients($appointmentRecipients)
    {
        $this->model->setAppointmentRecipients($appointmentRecipients);
        return $this;
    }
    /**
     * Sets appointmentUnsendableRecipients
     * @param \Aspose\Email\Model\MapiRecipientDto[] $appointmentUnsendableRecipients List of unsendable attendees.
     * @return $this
     */
    public function appointmentUnsendableRecipients($appointmentUnsendableRecipients)
    {
        $this->model->setAppointmentUnsendableRecipients($appointmentUnsendableRecipients);
        return $this;
    }
    /**
     * Sets notAllowPropose
     * @param bool $notAllowPropose Value indicating whether attendees are not allowed to propose a new date and/or time for the meeting.
     * @return $this
     */
    public function notAllowPropose($notAllowPropose)
    {
        $this->model->setNotAllowPropose($notAllowPropose);
        return $this;
    }
    /**
     * Sets responseRequested
     * @param bool $responseRequested Value indicating whether a response is requested to a Message object.
     * @return $this
     */
    public function responseRequested($responseRequested)
    {
        $this->model->setResponseRequested($responseRequested);
        return $this;
    }
}

