<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiFileAsPropertyDtoBuilder.php">
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
 * MapiFileAsPropertyDtoBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiFileAsPropertyDto builder.
 */
class MapiFileAsPropertyDtoBuilder
{
    /**
     * A model to build.
     * @var MapiFileAsPropertyDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiFileAsPropertyDtoBuilder class.
     *
     * @param MapiFileAsPropertyDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiFileAsPropertyDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets descriptor
     * @param \Aspose\Email\Model\MapiPropertyDescriptor $descriptor Property descriptor
     * @return $this
     */
    public function descriptor($descriptor)
    {
        $this->model->setDescriptor($descriptor);
        return $this;
    }
    /**
     * Sets value
     * @param string $value Defines how to construct what is displayed for a contact in the FileAs property. Enum, available values: None, LastCommaFirst, FirstSpaceLast, Company, LastCommaFirstCompany, CompanyLastFirst, LastFirst, LastFirstCompany, CompanyLastCommaFirst, LastFirstSuffix, LastSpaceFirstCompany, CompanyLastSpaceFirst, LastSpaceFirst, DisplayName, FirstName, LastFirstMiddleSuffix, LastName, Empty
     * @return $this
     */
    public function value($value)
    {
        $this->model->setValue($value);
        return $this;
    }
}

