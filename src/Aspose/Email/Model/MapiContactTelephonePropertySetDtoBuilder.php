<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactTelephonePropertySetDtoBuilder.php">
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
 * MapiContactTelephonePropertySetDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiContactTelephonePropertySetDto builder.
 */
class MapiContactTelephonePropertySetDtoBuilder
{
    /**
     * A model to build.
     * @var MapiContactTelephonePropertySetDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiContactTelephonePropertySetDtoBuilder class.
     *
     * @param MapiContactTelephonePropertySetDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiContactTelephonePropertySetDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets isEmpty
     * @param bool $isEmpty Shows if MapiContactTelephonePropertySet is empty
     * @return $this
     */
    public function isEmpty($isEmpty)
    {
        $this->model->setIsEmpty($isEmpty);
        return $this;
    }
    /**
     * Sets defaultTelephoneNumber
     * @param string $defaultTelephoneNumber Default value of electronic address Uses when user does not set any electronic address if UseAutocomplete property is set 'true'
     * @return $this
     */
    public function defaultTelephoneNumber($defaultTelephoneNumber)
    {
        $this->model->setDefaultTelephoneNumber($defaultTelephoneNumber);
        return $this;
    }
    /**
     * Sets useAutocomplete
     * @param bool $useAutocomplete Indicates that one electronic address is completed automatically in case if user does not set any electronic address
     * @return $this
     */
    public function useAutocomplete($useAutocomplete)
    {
        $this->model->setUseAutocomplete($useAutocomplete);
        return $this;
    }
    /**
     * Sets callbackTelephoneNumber
     * @param string $callbackTelephoneNumber Gets or sets the callback telephone number
     * @return $this
     */
    public function callbackTelephoneNumber($callbackTelephoneNumber)
    {
        $this->model->setCallbackTelephoneNumber($callbackTelephoneNumber);
        return $this;
    }
    /**
     * Sets businessTelephoneNumber
     * @param string $businessTelephoneNumber Gets or sets the business telephone number
     * @return $this
     */
    public function businessTelephoneNumber($businessTelephoneNumber)
    {
        $this->model->setBusinessTelephoneNumber($businessTelephoneNumber);
        return $this;
    }
    /**
     * Sets homeTelephoneNumber
     * @param string $homeTelephoneNumber Gets or sets the home telephone number
     * @return $this
     */
    public function homeTelephoneNumber($homeTelephoneNumber)
    {
        $this->model->setHomeTelephoneNumber($homeTelephoneNumber);
        return $this;
    }
    /**
     * Sets primaryTelephoneNumber
     * @param string $primaryTelephoneNumber Gets or sets the primary telephone number
     * @return $this
     */
    public function primaryTelephoneNumber($primaryTelephoneNumber)
    {
        $this->model->setPrimaryTelephoneNumber($primaryTelephoneNumber);
        return $this;
    }
    /**
     * Sets business2TelephoneNumber
     * @param string $business2TelephoneNumber Gets or sets the second business telephone number
     * @return $this
     */
    public function business2TelephoneNumber($business2TelephoneNumber)
    {
        $this->model->setBusiness2TelephoneNumber($business2TelephoneNumber);
        return $this;
    }
    /**
     * Sets mobileTelephoneNumber
     * @param string $mobileTelephoneNumber Gets or sets the mobile telephone number
     * @return $this
     */
    public function mobileTelephoneNumber($mobileTelephoneNumber)
    {
        $this->model->setMobileTelephoneNumber($mobileTelephoneNumber);
        return $this;
    }
    /**
     * Sets radioTelephoneNumber
     * @param string $radioTelephoneNumber Gets or sets the radio telephone number
     * @return $this
     */
    public function radioTelephoneNumber($radioTelephoneNumber)
    {
        $this->model->setRadioTelephoneNumber($radioTelephoneNumber);
        return $this;
    }
    /**
     * Sets carTelephoneNumber
     * @param string $carTelephoneNumber Gets or sets the car telephone number
     * @return $this
     */
    public function carTelephoneNumber($carTelephoneNumber)
    {
        $this->model->setCarTelephoneNumber($carTelephoneNumber);
        return $this;
    }
    /**
     * Sets otherTelephoneNumber
     * @param string $otherTelephoneNumber Gets or sets an alternate telephone number
     * @return $this
     */
    public function otherTelephoneNumber($otherTelephoneNumber)
    {
        $this->model->setOtherTelephoneNumber($otherTelephoneNumber);
        return $this;
    }
    /**
     * Sets assistantTelephoneNumber
     * @param string $assistantTelephoneNumber Gets or sets the telephone number of the contact's assistant
     * @return $this
     */
    public function assistantTelephoneNumber($assistantTelephoneNumber)
    {
        $this->model->setAssistantTelephoneNumber($assistantTelephoneNumber);
        return $this;
    }
    /**
     * Sets home2TelephoneNumber
     * @param string $home2TelephoneNumber Gets or sets a second home telephone number
     * @return $this
     */
    public function home2TelephoneNumber($home2TelephoneNumber)
    {
        $this->model->setHome2TelephoneNumber($home2TelephoneNumber);
        return $this;
    }
    /**
     * Sets ttyTddPhoneNumber
     * @param string $ttyTddPhoneNumber Gets or sets the telephone number for the contact's text telephone (TTY) or telecommunication device for the deaf (TDD)
     * @return $this
     */
    public function ttyTddPhoneNumber($ttyTddPhoneNumber)
    {
        $this->model->setTtyTddPhoneNumber($ttyTddPhoneNumber);
        return $this;
    }
    /**
     * Sets companyMainTelephoneNumber
     * @param string $companyMainTelephoneNumber Gets or sets the company phone number
     * @return $this
     */
    public function companyMainTelephoneNumber($companyMainTelephoneNumber)
    {
        $this->model->setCompanyMainTelephoneNumber($companyMainTelephoneNumber);
        return $this;
    }
    /**
     * Sets telexNumber
     * @param string $telexNumber Gets or sets the telex number
     * @return $this
     */
    public function telexNumber($telexNumber)
    {
        $this->model->setTelexNumber($telexNumber);
        return $this;
    }
    /**
     * Sets isdnNumber
     * @param string $isdnNumber Gets or sets the integrated services digital network (ISDN) number
     * @return $this
     */
    public function isdnNumber($isdnNumber)
    {
        $this->model->setIsdnNumber($isdnNumber);
        return $this;
    }
    /**
     * Sets pagerTelephoneNumber
     * @param string $pagerTelephoneNumber Gets or sets a pager telephone number
     * @return $this
     */
    public function pagerTelephoneNumber($pagerTelephoneNumber)
    {
        $this->model->setPagerTelephoneNumber($pagerTelephoneNumber);
        return $this;
    }
}

