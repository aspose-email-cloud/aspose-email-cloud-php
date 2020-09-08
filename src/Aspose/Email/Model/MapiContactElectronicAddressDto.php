<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactElectronicAddressDto.php">
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
 * MapiContactElectronicAddressDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactElectronicAddressDto
 *
 * @description Refers to the group of properties that define the e-mail address or fax address for a contact.
 */
class MapiContactElectronicAddressDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactElectronicAddressDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'address_type' => 'string',
        'display_name' => 'string',
        'email_address' => 'string',
        'fax_number' => 'string',
        'is_empty' => 'bool',
        'original_display_name' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'address_type' => null,
        'display_name' => null,
        'email_address' => 'email',
        'fax_number' => null,
        'is_empty' => null,
        'original_display_name' => null
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
        'address_type' => 'addressType',
        'display_name' => 'displayName',
        'email_address' => 'emailAddress',
        'fax_number' => 'faxNumber',
        'is_empty' => 'isEmpty',
        'original_display_name' => 'originalDisplayName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_type' => 'setAddressType',
        'display_name' => 'setDisplayName',
        'email_address' => 'setEmailAddress',
        'fax_number' => 'setFaxNumber',
        'is_empty' => 'setIsEmpty',
        'original_display_name' => 'setOriginalDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_type' => 'getAddressType',
        'display_name' => 'getDisplayName',
        'email_address' => 'getEmailAddress',
        'fax_number' => 'getFaxNumber',
        'is_empty' => 'getIsEmpty',
        'original_display_name' => 'getOriginalDisplayName'
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
     * Initializes a new instance of the MapiContactElectronicAddressDto class.
     *  
     * @param string $address_type Address type of an electronic address
     * @param string $display_name User-readable display name for the e-mail address
     * @param string $email_address E-mail address of the contact
     * @param string $fax_number Telephone number of the mail user's primary fax machine
     * @param bool $is_empty Shows if MapiContactElectronicAddress is empty
     * @param string $original_display_name SMTP e-mail address that corresponds to the e-mail address for the Contact object.
     */
    public function __construct(
        $address_type = null,
        $display_name = null,
        $email_address = null,
        $fax_number = null,
        $is_empty = null,
        $original_display_name = null
    ) {
        $this->container['address_type'] = null;
        $this->container['display_name'] = null;
        $this->container['email_address'] = null;
        $this->container['fax_number'] = null;
        $this->container['is_empty'] = null;
        $this->container['original_display_name'] = null;

        if ($address_type != null) $this->setAddressType($address_type);
        if ($display_name != null) $this->setDisplayName($display_name);
        if ($email_address != null) $this->setEmailAddress($email_address);
        if ($fax_number != null) $this->setFaxNumber($fax_number);
        if ($is_empty != null) $this->setIsEmpty($is_empty);
        if ($original_display_name != null) $this->setOriginalDisplayName($original_display_name);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_empty'] === null) {
            $invalidProperties[] = "'is_empty' can't be null";
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

        if ($this->container['is_empty'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets address_type
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string $address_type Address type of an electronic address
     *
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
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
     * @param string $display_name User-readable display name for the e-mail address
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address E-mail address of the contact
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets fax_number
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     *
     * @param string $fax_number Telephone number of the mail user's primary fax machine
     *
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets is_empty
     *
     * @return bool
     */
    public function getIsEmpty()
    {
        return $this->container['is_empty'];
    }

    /**
     * Sets is_empty
     *
     * @param bool $is_empty Shows if MapiContactElectronicAddress is empty
     *
     * @return $this
     */
    public function setIsEmpty($is_empty)
    {
        $this->container['is_empty'] = $is_empty;

        return $this;
    }

    /**
     * Gets original_display_name
     *
     * @return string
     */
    public function getOriginalDisplayName()
    {
        return $this->container['original_display_name'];
    }

    /**
     * Sets original_display_name
     *
     * @param string $original_display_name SMTP e-mail address that corresponds to the e-mail address for the Contact object.
     *
     * @return $this
     */
    public function setOriginalDisplayName($original_display_name)
    {
        $this->container['original_display_name'] = $original_display_name;

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

