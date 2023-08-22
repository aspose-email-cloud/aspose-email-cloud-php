<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostalAddressBuilder.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
 * PostalAddressBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  PostalAddress builder.
 */
class PostalAddressBuilder
{
    /**
     * A model to build.
     * @var PostalAddress
     */
    private $model;
    /**
     * Initializes a new instance of the PostalAddressBuilder class.
     *
     * @param PostalAddress $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return PostalAddress Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets address
     * @param string $address Address.
     * @return $this
     */
    public function address($address)
    {
        $this->model->setAddress($address);
        return $this;
    }
    /**
     * Sets category
     * @param \Aspose\Email\Model\EnumWithCustomOfPostalAddressCategory $category Address category.
     * @return $this
     */
    public function category($category)
    {
        $this->model->setCategory($category);
        return $this;
    }
    /**
     * Sets city
     * @param string $city Address's city.
     * @return $this
     */
    public function city($city)
    {
        $this->model->setCity($city);
        return $this;
    }
    /**
     * Sets country
     * @param string $country Address's country.
     * @return $this
     */
    public function country($country)
    {
        $this->model->setCountry($country);
        return $this;
    }
    /**
     * Sets countryCode
     * @param string $countryCode Country code.
     * @return $this
     */
    public function countryCode($countryCode)
    {
        $this->model->setCountryCode($countryCode);
        return $this;
    }
    /**
     * Sets isMailingAddress
     * @param bool $isMailingAddress Defines whether address may be used for mailing.
     * @return $this
     */
    public function isMailingAddress($isMailingAddress)
    {
        $this->model->setIsMailingAddress($isMailingAddress);
        return $this;
    }
    /**
     * Sets postalCode
     * @param string $postalCode Postal code.
     * @return $this
     */
    public function postalCode($postalCode)
    {
        $this->model->setPostalCode($postalCode);
        return $this;
    }
    /**
     * Sets postOfficeBox
     * @param string $postOfficeBox Post Office box.
     * @return $this
     */
    public function postOfficeBox($postOfficeBox)
    {
        $this->model->setPostOfficeBox($postOfficeBox);
        return $this;
    }
    /**
     * Sets preferred
     * @param bool $preferred Defines whether postal address is preferred.
     * @return $this
     */
    public function preferred($preferred)
    {
        $this->model->setPreferred($preferred);
        return $this;
    }
    /**
     * Sets stateOrProvince
     * @param string $stateOrProvince Address's region.
     * @return $this
     */
    public function stateOrProvince($stateOrProvince)
    {
        $this->model->setStateOrProvince($stateOrProvince);
        return $this;
    }
    /**
     * Sets street
     * @param string $street Address's street.
     * @return $this
     */
    public function street($street)
    {
        $this->model->setStreet($street);
        return $this;
    }
}

