<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailAddressBuilder.php">
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
 * EmailAddressBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailAddress builder.
 */
class EmailAddressBuilder
{
    /**
     * A model to build.
     * @var EmailAddress
     */
    private $model;
    /**
     * Initializes a new instance of the EmailAddressBuilder class.
     *
     * @param EmailAddress $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailAddress Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets category
     * @param \Aspose\Email\Model\EnumWithCustomOfEmailAddressCategory $category Address category.
     * @return $this
     */
    public function category($category)
    {
        $this->model->setCategory($category);
        return $this;
    }
    /**
     * Sets displayName
     * @param string $displayName Display name.
     * @return $this
     */
    public function displayName($displayName)
    {
        $this->model->setDisplayName($displayName);
        return $this;
    }
    /**
     * Sets preferred
     * @param bool $preferred Defines whether email address is preferred.
     * @return $this
     */
    public function preferred($preferred)
    {
        $this->model->setPreferred($preferred);
        return $this;
    }
    /**
     * Sets routingType
     * @param string $routingType A routing type for an email.
     * @return $this
     */
    public function routingType($routingType)
    {
        $this->model->setRoutingType($routingType);
        return $this;
    }
    /**
     * Sets address
     * @param string $address Email address.
     * @return $this
     */
    public function address($address)
    {
        $this->model->setAddress($address);
        return $this;
    }
    /**
     * Sets originalAddressString
     * @param string $originalAddressString The original e-mail address string
     * @return $this
     */
    public function originalAddressString($originalAddressString)
    {
        $this->model->setOriginalAddressString($originalAddressString);
        return $this;
    }
}

