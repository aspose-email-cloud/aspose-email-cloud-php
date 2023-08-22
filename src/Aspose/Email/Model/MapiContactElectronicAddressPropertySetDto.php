<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactElectronicAddressPropertySetDto.php">
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
 * MapiContactElectronicAddressPropertySetDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactElectronicAddressPropertySetDto
 *
 * @description Specify properties for up to three different e-mail addresses (Email1, Email2, and Email3) and three different fax addresses (Primary Fax, Business Fax, and Home Fax)
 */
class MapiContactElectronicAddressPropertySetDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactElectronicAddressPropertySetDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'business_fax' => '\Aspose\Email\Model\MapiContactElectronicAddressDto',
        'default_email_address' => '\Aspose\Email\Model\MapiContactElectronicAddressDto',
        'email1' => '\Aspose\Email\Model\MapiContactElectronicAddressDto',
        'email2' => '\Aspose\Email\Model\MapiContactElectronicAddressDto',
        'email3' => '\Aspose\Email\Model\MapiContactElectronicAddressDto',
        'home_fax' => '\Aspose\Email\Model\MapiContactElectronicAddressDto',
        'is_empty' => 'bool',
        'primary_fax' => '\Aspose\Email\Model\MapiContactElectronicAddressDto',
        'use_autocomplete' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'business_fax' => null,
        'default_email_address' => null,
        'email1' => null,
        'email2' => null,
        'email3' => null,
        'home_fax' => null,
        'is_empty' => null,
        'primary_fax' => null,
        'use_autocomplete' => null
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
        'business_fax' => 'businessFax',
        'default_email_address' => 'defaultEmailAddress',
        'email1' => 'email1',
        'email2' => 'email2',
        'email3' => 'email3',
        'home_fax' => 'homeFax',
        'is_empty' => 'isEmpty',
        'primary_fax' => 'primaryFax',
        'use_autocomplete' => 'useAutocomplete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_fax' => 'setBusinessFax',
        'default_email_address' => 'setDefaultEmailAddress',
        'email1' => 'setEmail1',
        'email2' => 'setEmail2',
        'email3' => 'setEmail3',
        'home_fax' => 'setHomeFax',
        'is_empty' => 'setIsEmpty',
        'primary_fax' => 'setPrimaryFax',
        'use_autocomplete' => 'setUseAutocomplete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_fax' => 'getBusinessFax',
        'default_email_address' => 'getDefaultEmailAddress',
        'email1' => 'getEmail1',
        'email2' => 'getEmail2',
        'email3' => 'getEmail3',
        'home_fax' => 'getHomeFax',
        'is_empty' => 'getIsEmpty',
        'primary_fax' => 'getPrimaryFax',
        'use_autocomplete' => 'getUseAutocomplete'
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
     * Initializes a new instance of the MapiContactElectronicAddressPropertySetDto class.
     *  
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $business_fax Refers to the group of properties that define the business fax address for a contact.
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $default_email_address Default value of electronic address Uses when user does not set any electronic address if UseAutocomplete property is set 'true'
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email1 Refers to the group of properties that define the first e-mail address for a contact.
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email2 Refers to the group of properties that define the second e-mail address for a contact.
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email3 Refers to the group of properties that define the third e-mail address for a contact.
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $home_fax Refers to the group of properties that define the home fax address for a contact.
     * @param bool $is_empty Shows if MapiContactElectronicAddressPropertySetDto is empty
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $primary_fax Refers to the group of properties that define the primary fax address for a contact.
     * @param bool $use_autocomplete Indicates that one electronic address is completed automatically in case if user does not set any electronic address
     */
    public function __construct(
        $business_fax = null,
        $default_email_address = null,
        $email1 = null,
        $email2 = null,
        $email3 = null,
        $home_fax = null,
        $is_empty = null,
        $primary_fax = null,
        $use_autocomplete = null
    ) {
        $this->container['business_fax'] = null;
        $this->container['default_email_address'] = null;
        $this->container['email1'] = null;
        $this->container['email2'] = null;
        $this->container['email3'] = null;
        $this->container['home_fax'] = null;
        $this->container['is_empty'] = null;
        $this->container['primary_fax'] = null;
        $this->container['use_autocomplete'] = null;

        if ($business_fax != null) $this->setBusinessFax($business_fax);
        if ($default_email_address != null) $this->setDefaultEmailAddress($default_email_address);
        if ($email1 != null) $this->setEmail1($email1);
        if ($email2 != null) $this->setEmail2($email2);
        if ($email3 != null) $this->setEmail3($email3);
        if ($home_fax != null) $this->setHomeFax($home_fax);
        if ($is_empty != null) $this->setIsEmpty($is_empty);
        if ($primary_fax != null) $this->setPrimaryFax($primary_fax);
        if ($use_autocomplete != null) $this->setUseAutocomplete($use_autocomplete);
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
        if ($this->container['use_autocomplete'] === null) {
            $invalidProperties[] = "'use_autocomplete' can't be null";
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
        if ($this->container['use_autocomplete'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets business_fax
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressDto
     */
    public function getBusinessFax()
    {
        return $this->container['business_fax'];
    }

    /**
     * Sets business_fax
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $business_fax Refers to the group of properties that define the business fax address for a contact.
     *
     * @return $this
     */
    public function setBusinessFax($business_fax)
    {
        $this->container['business_fax'] = $business_fax;

        return $this;
    }

    /**
     * Gets default_email_address
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressDto
     */
    public function getDefaultEmailAddress()
    {
        return $this->container['default_email_address'];
    }

    /**
     * Sets default_email_address
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $default_email_address Default value of electronic address Uses when user does not set any electronic address if UseAutocomplete property is set 'true'
     *
     * @return $this
     */
    public function setDefaultEmailAddress($default_email_address)
    {
        $this->container['default_email_address'] = $default_email_address;

        return $this;
    }

    /**
     * Gets email1
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressDto
     */
    public function getEmail1()
    {
        return $this->container['email1'];
    }

    /**
     * Sets email1
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email1 Refers to the group of properties that define the first e-mail address for a contact.
     *
     * @return $this
     */
    public function setEmail1($email1)
    {
        $this->container['email1'] = $email1;

        return $this;
    }

    /**
     * Gets email2
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressDto
     */
    public function getEmail2()
    {
        return $this->container['email2'];
    }

    /**
     * Sets email2
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email2 Refers to the group of properties that define the second e-mail address for a contact.
     *
     * @return $this
     */
    public function setEmail2($email2)
    {
        $this->container['email2'] = $email2;

        return $this;
    }

    /**
     * Gets email3
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressDto
     */
    public function getEmail3()
    {
        return $this->container['email3'];
    }

    /**
     * Sets email3
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $email3 Refers to the group of properties that define the third e-mail address for a contact.
     *
     * @return $this
     */
    public function setEmail3($email3)
    {
        $this->container['email3'] = $email3;

        return $this;
    }

    /**
     * Gets home_fax
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressDto
     */
    public function getHomeFax()
    {
        return $this->container['home_fax'];
    }

    /**
     * Sets home_fax
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $home_fax Refers to the group of properties that define the home fax address for a contact.
     *
     * @return $this
     */
    public function setHomeFax($home_fax)
    {
        $this->container['home_fax'] = $home_fax;

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
     * @param bool $is_empty Shows if MapiContactElectronicAddressPropertySetDto is empty
     *
     * @return $this
     */
    public function setIsEmpty($is_empty)
    {
        $this->container['is_empty'] = $is_empty;

        return $this;
    }

    /**
     * Gets primary_fax
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressDto
     */
    public function getPrimaryFax()
    {
        return $this->container['primary_fax'];
    }

    /**
     * Sets primary_fax
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressDto $primary_fax Refers to the group of properties that define the primary fax address for a contact.
     *
     * @return $this
     */
    public function setPrimaryFax($primary_fax)
    {
        $this->container['primary_fax'] = $primary_fax;

        return $this;
    }

    /**
     * Gets use_autocomplete
     *
     * @return bool
     */
    public function getUseAutocomplete()
    {
        return $this->container['use_autocomplete'];
    }

    /**
     * Sets use_autocomplete
     *
     * @param bool $use_autocomplete Indicates that one electronic address is completed automatically in case if user does not set any electronic address
     *
     * @return $this
     */
    public function setUseAutocomplete($use_autocomplete)
    {
        $this->container['use_autocomplete'] = $use_autocomplete;

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

