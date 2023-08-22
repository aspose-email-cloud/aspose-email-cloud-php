<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactProfessionalPropertySetDtoBuilder.php">
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
 * MapiContactProfessionalPropertySetDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiContactProfessionalPropertySetDto builder.
 */
class MapiContactProfessionalPropertySetDtoBuilder
{
    /**
     * A model to build.
     * @var MapiContactProfessionalPropertySetDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiContactProfessionalPropertySetDtoBuilder class.
     *
     * @param MapiContactProfessionalPropertySetDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiContactProfessionalPropertySetDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets title
     * @param string $title Gets or sets the job title of the contact
     * @return $this
     */
    public function title($title)
    {
        $this->model->setTitle($title);
        return $this;
    }
    /**
     * Sets companyName
     * @param string $companyName Gets or sets the company that employs the contact
     * @return $this
     */
    public function companyName($companyName)
    {
        $this->model->setCompanyName($companyName);
        return $this;
    }
    /**
     * Sets departmentName
     * @param string $departmentName Gets or sets the name of the department to which the contact belongs
     * @return $this
     */
    public function departmentName($departmentName)
    {
        $this->model->setDepartmentName($departmentName);
        return $this;
    }
    /**
     * Sets officeLocation
     * @param string $officeLocation Gets or sets the location of the office that the contact works in
     * @return $this
     */
    public function officeLocation($officeLocation)
    {
        $this->model->setOfficeLocation($officeLocation);
        return $this;
    }
    /**
     * Sets managerName
     * @param string $managerName Gets or sets the name of the contact's manager
     * @return $this
     */
    public function managerName($managerName)
    {
        $this->model->setManagerName($managerName);
        return $this;
    }
    /**
     * Sets assistant
     * @param string $assistant Gets or sets the name of the contact's assistant
     * @return $this
     */
    public function assistant($assistant)
    {
        $this->model->setAssistant($assistant);
        return $this;
    }
    /**
     * Sets profession
     * @param string $profession Gets or sets the profession of the contact
     * @return $this
     */
    public function profession($profession)
    {
        $this->model->setProfession($profession);
        return $this;
    }
}

