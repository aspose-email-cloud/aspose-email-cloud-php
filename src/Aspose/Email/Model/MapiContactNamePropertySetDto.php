<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactNamePropertySetDto.php">
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
 * MapiContactNamePropertySetDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactNamePropertySetDto
 *
 * @description The properties are used to specify the name of the person represented by the contact
 */
class MapiContactNamePropertySetDto implements ArrayAccess
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactNamePropertySetDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'display_name' => 'string',
        'display_name_prefix' => 'string',
        'file_under' => 'string',
        'file_under_id' => 'int',
        'generation' => 'string',
        'given_name' => 'string',
        'initials' => 'string',
        'middle_name' => 'string',
        'nickname' => 'string',
        'surname' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'display_name' => null,
        'display_name_prefix' => null,
        'file_under' => null,
        'file_under_id' => 'int64',
        'generation' => null,
        'given_name' => null,
        'initials' => null,
        'middle_name' => null,
        'nickname' => null,
        'surname' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'display_name' => 'displayName',
        'display_name_prefix' => 'displayNamePrefix',
        'file_under' => 'fileUnder',
        'file_under_id' => 'fileUnderId',
        'generation' => 'generation',
        'given_name' => 'givenName',
        'initials' => 'initials',
        'middle_name' => 'middleName',
        'nickname' => 'nickname',
        'surname' => 'surname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'display_name_prefix' => 'setDisplayNamePrefix',
        'file_under' => 'setFileUnder',
        'file_under_id' => 'setFileUnderId',
        'generation' => 'setGeneration',
        'given_name' => 'setGivenName',
        'initials' => 'setInitials',
        'middle_name' => 'setMiddleName',
        'nickname' => 'setNickname',
        'surname' => 'setSurname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'display_name_prefix' => 'getDisplayNamePrefix',
        'file_under' => 'getFileUnder',
        'file_under_id' => 'getFileUnderId',
        'generation' => 'getGeneration',
        'given_name' => 'getGivenName',
        'initials' => 'getInitials',
        'middle_name' => 'getMiddleName',
        'nickname' => 'getNickname',
        'surname' => 'getSurname'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Initializes a new instance of the MapiContactNamePropertySetDto class.
     *  
     * @param string $display_name Full name of the contact
     * @param string $display_name_prefix Title of the contact
     * @param string $file_under Name under which to file this contact when displaying a list of contacts
     * @param int $file_under_id Value specifying how to generate and recompute the property when other properties are changed
     * @param string $generation Generation suffix of the contact
     * @param string $given_name Given name (first name) of the contact
     * @param string $initials Initials of the contact
     * @param string $middle_name Middle name of the contact
     * @param string $nickname Nickname of the contact
     * @param string $surname Surname (family name) of the contact
     */
    public function __construct(
        $display_name = null,
        $display_name_prefix = null,
        $file_under = null,
        $file_under_id = null,
        $generation = null,
        $given_name = null,
        $initials = null,
        $middle_name = null,
        $nickname = null,
        $surname = null
    ) {
        $this->container['display_name'] = null;
        $this->container['display_name_prefix'] = null;
        $this->container['file_under'] = null;
        $this->container['file_under_id'] = null;
        $this->container['generation'] = null;
        $this->container['given_name'] = null;
        $this->container['initials'] = null;
        $this->container['middle_name'] = null;
        $this->container['nickname'] = null;
        $this->container['surname'] = null;

        if ($display_name != null) $this->setDisplayName($display_name);
        if ($display_name_prefix != null) $this->setDisplayNamePrefix($display_name_prefix);
        if ($file_under != null) $this->setFileUnder($file_under);
        if ($file_under_id != null) $this->setFileUnderId($file_under_id);
        if ($generation != null) $this->setGeneration($generation);
        if ($given_name != null) $this->setGivenName($given_name);
        if ($initials != null) $this->setInitials($initials);
        if ($middle_name != null) $this->setMiddleName($middle_name);
        if ($nickname != null) $this->setNickname($nickname);
        if ($surname != null) $this->setSurname($surname);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['file_under_id'] === null) {
            $invalidProperties[] = "'file_under_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['file_under_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Full name of the contact
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets display_name_prefix
     *
     * @return string
     */
    public function getDisplayNamePrefix()
    {
        return $this->container['display_name_prefix'];
    }

    /**
     * Sets display_name_prefix
     *
     * @param string $display_name_prefix Title of the contact
     *
     * @return $this
     */
    public function setDisplayNamePrefix($display_name_prefix)
    {
        $this->container['display_name_prefix'] = $display_name_prefix;

        return $this;
    }

    /**
     * Gets file_under
     *
     * @return string
     */
    public function getFileUnder()
    {
        return $this->container['file_under'];
    }

    /**
     * Sets file_under
     *
     * @param string $file_under Name under which to file this contact when displaying a list of contacts
     *
     * @return $this
     */
    public function setFileUnder($file_under)
    {
        $this->container['file_under'] = $file_under;

        return $this;
    }

    /**
     * Gets file_under_id
     *
     * @return int
     */
    public function getFileUnderId()
    {
        return $this->container['file_under_id'];
    }

    /**
     * Sets file_under_id
     *
     * @param int $file_under_id Value specifying how to generate and recompute the property when other properties are changed
     *
     * @return $this
     */
    public function setFileUnderId($file_under_id)
    {
        $this->container['file_under_id'] = $file_under_id;

        return $this;
    }

    /**
     * Gets generation
     *
     * @return string
     */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
     * Sets generation
     *
     * @param string $generation Generation suffix of the contact
     *
     * @return $this
     */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name Given name (first name) of the contact
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string $initials Initials of the contact
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name Middle name of the contact
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname Nickname of the contact
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname Surname (family name) of the contact
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

