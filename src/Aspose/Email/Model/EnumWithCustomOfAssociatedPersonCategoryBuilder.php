<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EnumWithCustomOfAssociatedPersonCategoryBuilder.php">
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
 * EnumWithCustomOfAssociatedPersonCategoryBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  EnumWithCustomOfAssociatedPersonCategory builder.
 */
class EnumWithCustomOfAssociatedPersonCategoryBuilder
{
    /**
     * A model to build.
     * @var EnumWithCustomOfAssociatedPersonCategory
     */
    private $model;
    /**
     * Initializes a new instance of the EnumWithCustomOfAssociatedPersonCategoryBuilder class.
     *
     * @param EnumWithCustomOfAssociatedPersonCategory $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EnumWithCustomOfAssociatedPersonCategory Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets value
     * @param string $value Associated person's category./nEnum, available values: Spouse, Child, Mother, Father, Parent, Brother, Sister, Friend, Relative, Manager, Assistant, ReferredBy, Partner, DomesticPartner, Custom
     * @return $this
     */
    public function value($value)
    {
        $this->model->setValue($value);
        return $this;
    }
    /**
     * Sets description
     * @param string $description description
     * @return $this
     */
    public function description($description)
    {
        $this->model->setDescription($description);
        return $this;
    }
}

