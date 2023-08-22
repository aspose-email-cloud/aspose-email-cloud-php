<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactPhysicalAddressPropertySetDto.php">
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
 * MapiContactPhysicalAddressPropertySetDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactPhysicalAddressPropertySetDto
 *
 * @description Specify three physical addresses: Home Address, Work Address, and Other Address. One of the addresses can be marked as the Mailing Address
 */
class MapiContactPhysicalAddressPropertySetDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactPhysicalAddressPropertySetDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'work_address' => '\Aspose\Email\Model\MapiContactPhysicalAddressDto',
        'home_address' => '\Aspose\Email\Model\MapiContactPhysicalAddressDto',
        'other_address' => '\Aspose\Email\Model\MapiContactPhysicalAddressDto'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'work_address' => null,
        'home_address' => null,
        'other_address' => null
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
        'work_address' => 'workAddress',
        'home_address' => 'homeAddress',
        'other_address' => 'otherAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'work_address' => 'setWorkAddress',
        'home_address' => 'setHomeAddress',
        'other_address' => 'setOtherAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'work_address' => 'getWorkAddress',
        'home_address' => 'getHomeAddress',
        'other_address' => 'getOtherAddress'
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
     * Initializes a new instance of the MapiContactPhysicalAddressPropertySetDto class.
     *  
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $work_address Specifies the address of the contact's work
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $home_address Specifies the address of the contact's home
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $other_address Specifies the other contact's address
     */
    public function __construct(
        $work_address = null,
        $home_address = null,
        $other_address = null
    ) {
        $this->container['work_address'] = null;
        $this->container['home_address'] = null;
        $this->container['other_address'] = null;

        if ($work_address != null) $this->setWorkAddress($work_address);
        if ($home_address != null) $this->setHomeAddress($home_address);
        if ($other_address != null) $this->setOtherAddress($other_address);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets work_address
     *
     * @return \Aspose\Email\Model\MapiContactPhysicalAddressDto
     */
    public function getWorkAddress()
    {
        return $this->container['work_address'];
    }

    /**
     * Sets work_address
     *
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $work_address Specifies the address of the contact's work
     *
     * @return $this
     */
    public function setWorkAddress($work_address)
    {
        $this->container['work_address'] = $work_address;

        return $this;
    }

    /**
     * Gets home_address
     *
     * @return \Aspose\Email\Model\MapiContactPhysicalAddressDto
     */
    public function getHomeAddress()
    {
        return $this->container['home_address'];
    }

    /**
     * Sets home_address
     *
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $home_address Specifies the address of the contact's home
     *
     * @return $this
     */
    public function setHomeAddress($home_address)
    {
        $this->container['home_address'] = $home_address;

        return $this;
    }

    /**
     * Gets other_address
     *
     * @return \Aspose\Email\Model\MapiContactPhysicalAddressDto
     */
    public function getOtherAddress()
    {
        return $this->container['other_address'];
    }

    /**
     * Sets other_address
     *
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressDto $other_address Specifies the other contact's address
     *
     * @return $this
     */
    public function setOtherAddress($other_address)
    {
        $this->container['other_address'] = $other_address;

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

