<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiElectronicAddressDtoBuilder.php">
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
 * MapiElectronicAddressDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiElectronicAddressDto builder.
 */
class MapiElectronicAddressDtoBuilder
{
    /**
     * A model to build.
     * @var MapiElectronicAddressDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiElectronicAddressDtoBuilder class.
     *
     * @param MapiElectronicAddressDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiElectronicAddressDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets addressType
     * @param string $addressType Address type.
     * @return $this
     */
    public function addressType($addressType)
    {
        $this->model->setAddressType($addressType);
        return $this;
    }
    /**
     * Sets emailAddress
     * @param string $emailAddress Email address.
     * @return $this
     */
    public function emailAddress($emailAddress)
    {
        $this->model->setEmailAddress($emailAddress);
        return $this;
    }
    /**
     * Sets displayName
     * @param string $displayName User-readable display name for the e-mail address.
     * @return $this
     */
    public function displayName($displayName)
    {
        $this->model->setDisplayName($displayName);
        return $this;
    }
    /**
     * Sets faxNumber
     * @param string $faxNumber Telephone number of the mail user's primary fax machine.
     * @return $this
     */
    public function faxNumber($faxNumber)
    {
        $this->model->setFaxNumber($faxNumber);
        return $this;
    }
    /**
     * Sets originalDisplayName
     * @param string $originalDisplayName SMTP e-mail address that  corresponds to the e-mail address.
     * @return $this
     */
    public function originalDisplayName($originalDisplayName)
    {
        $this->model->setOriginalDisplayName($originalDisplayName);
        return $this;
    }
}

