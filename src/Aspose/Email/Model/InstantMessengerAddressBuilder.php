<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="InstantMessengerAddressBuilder.php">
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
 * InstantMessengerAddressBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  InstantMessengerAddress builder.
 */
class InstantMessengerAddressBuilder
{
    /**
     * A model to build.
     * @var InstantMessengerAddress
     */
    private $model;
    /**
     * Initializes a new instance of the InstantMessengerAddressBuilder class.
     *
     * @param InstantMessengerAddress $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return InstantMessengerAddress Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets category
     * @param \Aspose\Email\Model\EnumWithCustomOfInstantMessengerCategory $category Address category.
     * @return $this
     */
    public function category($category)
    {
        $this->model->setCategory($category);
        return $this;
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
     * Sets preferred
     * @param bool $preferred Determines whether this address is preferred.
     * @return $this
     */
    public function preferred($preferred)
    {
        $this->model->setPreferred($preferred);
        return $this;
    }
}

