<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactNamePropertySetDtoBuilder.php">
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
 * MapiContactNamePropertySetDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiContactNamePropertySetDto builder.
 */
class MapiContactNamePropertySetDtoBuilder
{
    /**
     * A model to build.
     * @var MapiContactNamePropertySetDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiContactNamePropertySetDtoBuilder class.
     *
     * @param MapiContactNamePropertySetDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiContactNamePropertySetDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets displayName
     * @param string $displayName Full name of the contact
     * @return $this
     */
    public function displayName($displayName)
    {
        $this->model->setDisplayName($displayName);
        return $this;
    }
    /**
     * Sets displayNamePrefix
     * @param string $displayNamePrefix Title of the contact
     * @return $this
     */
    public function displayNamePrefix($displayNamePrefix)
    {
        $this->model->setDisplayNamePrefix($displayNamePrefix);
        return $this;
    }
    /**
     * Sets fileUnder
     * @param string $fileUnder Name under which to file this contact when displaying a list of contacts
     * @return $this
     */
    public function fileUnder($fileUnder)
    {
        $this->model->setFileUnder($fileUnder);
        return $this;
    }
    /**
     * Sets fileUnderId
     * @param int $fileUnderId Value specifying how to generate and recompute the property when other properties are changed
     * @return $this
     */
    public function fileUnderId($fileUnderId)
    {
        $this->model->setFileUnderId($fileUnderId);
        return $this;
    }
    /**
     * Sets generation
     * @param string $generation Generation suffix of the contact
     * @return $this
     */
    public function generation($generation)
    {
        $this->model->setGeneration($generation);
        return $this;
    }
    /**
     * Sets givenName
     * @param string $givenName Given name (first name) of the contact
     * @return $this
     */
    public function givenName($givenName)
    {
        $this->model->setGivenName($givenName);
        return $this;
    }
    /**
     * Sets initials
     * @param string $initials Initials of the contact
     * @return $this
     */
    public function initials($initials)
    {
        $this->model->setInitials($initials);
        return $this;
    }
    /**
     * Sets middleName
     * @param string $middleName Middle name of the contact
     * @return $this
     */
    public function middleName($middleName)
    {
        $this->model->setMiddleName($middleName);
        return $this;
    }
    /**
     * Sets nickname
     * @param string $nickname Nickname of the contact
     * @return $this
     */
    public function nickname($nickname)
    {
        $this->model->setNickname($nickname);
        return $this;
    }
    /**
     * Sets surname
     * @param string $surname Surname (family name) of the contact
     * @return $this
     */
    public function surname($surname)
    {
        $this->model->setSurname($surname);
        return $this;
    }
}

