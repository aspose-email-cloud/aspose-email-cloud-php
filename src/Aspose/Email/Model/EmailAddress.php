<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailAddress.php">
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
 * EmailAddress
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * EmailAddress
 *
 * @description Email address.
 */
class EmailAddress implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailAddress";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'category' => '\Aspose\Email\Model\EnumWithCustomOfEmailAddressCategory',
        'display_name' => 'string',
        'preferred' => 'bool',
        'routing_type' => 'string',
        'address' => 'string',
        'original_address_string' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'category' => null,
        'display_name' => null,
        'preferred' => null,
        'routing_type' => null,
        'address' => 'email',
        'original_address_string' => null
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
        'category' => 'category',
        'display_name' => 'displayName',
        'preferred' => 'preferred',
        'routing_type' => 'routingType',
        'address' => 'address',
        'original_address_string' => 'originalAddressString'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'display_name' => 'setDisplayName',
        'preferred' => 'setPreferred',
        'routing_type' => 'setRoutingType',
        'address' => 'setAddress',
        'original_address_string' => 'setOriginalAddressString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'display_name' => 'getDisplayName',
        'preferred' => 'getPreferred',
        'routing_type' => 'getRoutingType',
        'address' => 'getAddress',
        'original_address_string' => 'getOriginalAddressString'
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
     * Initializes a new instance of the EmailAddress class.
     *  
     * @param \Aspose\Email\Model\EnumWithCustomOfEmailAddressCategory $category Address category.
     * @param string $display_name Display name.
     * @param bool $preferred Defines whether email address is preferred.
     * @param string $routing_type A routing type for an email.
     * @param string $address Email address.
     * @param string $original_address_string The original e-mail address string
     */
    public function __construct($category = null, $display_name = null, $preferred = null, $routing_type = null, $address = null, $original_address_string = null)
    {
        $this->container['category'] = null;
        $this->container['display_name'] = null;
        $this->container['preferred'] = null;
        $this->container['routing_type'] = null;
        $this->container['address'] = null;
        $this->container['original_address_string'] = null;

        if ($category != null) $this->setCategory($category);
        if ($display_name != null) $this->setDisplayName($display_name);
        if ($preferred != null) $this->setPreferred($preferred);
        if ($routing_type != null) $this->setRoutingType($routing_type);
        if ($address != null) $this->setAddress($address);
        if ($original_address_string != null) $this->setOriginalAddressString($original_address_string);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['preferred'] === null) {
            $invalidProperties[] = "'preferred' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ((strlen($this->container['address']) < 1)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 1.";
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

        if ($this->container['preferred'] === null) {
            return false;
        }
        if ($this->container['address'] === null) {
            return false;
        }
        if (strlen($this->container['address']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets category
     *
     * @return \Aspose\Email\Model\EnumWithCustomOfEmailAddressCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Aspose\Email\Model\EnumWithCustomOfEmailAddressCategory $category Address category.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param string $display_name Display name.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets preferred
     *
     * @return bool
     */
    public function getPreferred()
    {
        return $this->container['preferred'];
    }

    /**
     * Sets preferred
     *
     * @param bool $preferred Defines whether email address is preferred.
     *
     * @return $this
     */
    public function setPreferred($preferred)
    {
        $this->container['preferred'] = $preferred;

        return $this;
    }

    /**
     * Gets routing_type
     *
     * @return string
     */
    public function getRoutingType()
    {
        return $this->container['routing_type'];
    }

    /**
     * Sets routing_type
     *
     * @param string $routing_type A routing type for an email.
     *
     * @return $this
     */
    public function setRoutingType($routing_type)
    {
        $this->container['routing_type'] = $routing_type;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Email address.
     *
     * @return $this
     */
    public function setAddress($address)
    {

        if ((strlen($address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address when calling EmailAddress., must be bigger than or equal to 1.');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets original_address_string
     *
     * @return string
     */
    public function getOriginalAddressString()
    {
        return $this->container['original_address_string'];
    }

    /**
     * Sets original_address_string
     *
     * @param string $original_address_string The original e-mail address string
     *
     * @return $this
     */
    public function setOriginalAddressString($original_address_string)
    {
        $this->container['original_address_string'] = $original_address_string;

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

