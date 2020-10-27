<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactElectronicAddressPropertySetDtoBuilder.php">
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
 * MapiContactElectronicAddressPropertySetDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiContactElectronicAddressPropertySetDto builder.
 */
class MapiContactElectronicAddressPropertySetDtoBuilder
{
    /**
     * A model to build.
     * @var MapiContactElectronicAddressPropertySetDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiContactElectronicAddressPropertySetDtoBuilder class.
     *
     * @param MapiContactElectronicAddressPropertySetDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiContactElectronicAddressPropertySetDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets businessFax
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $businessFax Refers to the group of properties that define the business fax address for a contact.
     * @return $this
     */
    public function businessFax($businessFax)
    {
        $this->model->setBusinessFax($businessFax);
        return $this;
    }
    /**
     * Sets defaultEmailAddress
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $defaultEmailAddress Default value of electronic address Uses when user does not set any electronic address if UseAutocomplete property is set 'true'
     * @return $this
     */
    public function defaultEmailAddress($defaultEmailAddress)
    {
        $this->model->setDefaultEmailAddress($defaultEmailAddress);
        return $this;
    }
    /**
     * Sets email1
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email1 Refers to the group of properties that define the first e-mail address for a contact.
     * @return $this
     */
    public function email1($email1)
    {
        $this->model->setEmail1($email1);
        return $this;
    }
    /**
     * Sets email2
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email2 Refers to the group of properties that define the second e-mail address for a contact.
     * @return $this
     */
    public function email2($email2)
    {
        $this->model->setEmail2($email2);
        return $this;
    }
    /**
     * Sets email3
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email3 Refers to the group of properties that define the third e-mail address for a contact.
     * @return $this
     */
    public function email3($email3)
    {
        $this->model->setEmail3($email3);
        return $this;
    }
    /**
     * Sets homeFax
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $homeFax Refers to the group of properties that define the home fax address for a contact.
     * @return $this
     */
    public function homeFax($homeFax)
    {
        $this->model->setHomeFax($homeFax);
        return $this;
    }
    /**
     * Sets isEmpty
     * @param bool $isEmpty Shows if MapiContactElectronicAddressPropertySetDto is empty
     * @return $this
     */
    public function isEmpty($isEmpty)
    {
        $this->model->setIsEmpty($isEmpty);
        return $this;
    }
    /**
     * Sets primaryFax
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $primaryFax Refers to the group of properties that define the primary fax address for a contact.
     * @return $this
     */
    public function primaryFax($primaryFax)
    {
        $this->model->setPrimaryFax($primaryFax);
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
}

