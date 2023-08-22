<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactPhysicalAddressPropertySetDtoBuilder.php">
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
 * MapiContactPhysicalAddressPropertySetDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiContactPhysicalAddressPropertySetDto builder.
 */
class MapiContactPhysicalAddressPropertySetDtoBuilder
{
    /**
     * A model to build.
     * @var MapiContactPhysicalAddressPropertySetDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiContactPhysicalAddressPropertySetDtoBuilder class.
     *
     * @param MapiContactPhysicalAddressPropertySetDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiContactPhysicalAddressPropertySetDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets workAddress
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $workAddress Specifies the address of the contact's work
     * @return $this
     */
    public function workAddress($workAddress)
    {
        $this->model->setWorkAddress($workAddress);
        return $this;
    }
    /**
     * Sets homeAddress
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $homeAddress Specifies the address of the contact's home
     * @return $this
     */
    public function homeAddress($homeAddress)
    {
        $this->model->setHomeAddress($homeAddress);
        return $this;
    }
    /**
     * Sets otherAddress
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $otherAddress Specifies the other contact's address
     * @return $this
     */
    public function otherAddress($otherAddress)
    {
        $this->model->setOtherAddress($otherAddress);
        return $this;
    }
}

