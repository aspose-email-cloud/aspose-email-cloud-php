<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactPhysicalAddressDto.php">
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
 * MapiContactPhysicalAddressDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactPhysicalAddressDto
 *
 * @description Refers to the group of properties that define physical address for a contact.
 */
class MapiContactPhysicalAddressDto implements ArrayAccess
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactPhysicalAddressDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_mailing_address' => 'bool',
        'street' => 'string',
        'city' => 'string',
        'state_or_province' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'address' => 'string',
        'post_office_box' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_mailing_address' => null,
        'street' => null,
        'city' => null,
        'state_or_province' => null,
        'postal_code' => null,
        'country' => null,
        'country_code' => null,
        'address' => null,
        'post_office_box' => null
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
        'is_mailing_address' => 'isMailingAddress',
        'street' => 'street',
        'city' => 'city',
        'state_or_province' => 'stateOrProvince',
        'postal_code' => 'postalCode',
        'country' => 'country',
        'country_code' => 'countryCode',
        'address' => 'address',
        'post_office_box' => 'postOfficeBox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_mailing_address' => 'setIsMailingAddress',
        'street' => 'setStreet',
        'city' => 'setCity',
        'state_or_province' => 'setStateOrProvince',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'address' => 'setAddress',
        'post_office_box' => 'setPostOfficeBox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_mailing_address' => 'getIsMailingAddress',
        'street' => 'getStreet',
        'city' => 'getCity',
        'state_or_province' => 'getStateOrProvince',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'address' => 'getAddress',
        'post_office_box' => 'getPostOfficeBox'
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
     * Initializes a new instance of the MapiContactPhysicalAddressDto class.
     *  
     * @param bool $is_mailing_address Gets or sets a value indicating whether this address is mailing address
     * @param string $street Specifies the street portion of the contact's address
     * @param string $city Specifies the city or locality portion of the contact's address
     * @param string $state_or_province Specifies the state or province portion of the contact's address
     * @param string $postal_code Specifies the postal code (ZIP code) portion of the contact's address
     * @param string $country Specifies the country or region portion of the contact's address
     * @param string $country_code Specifies the country code portion of the contact's address
     * @param string $address Specifies the complete address of the contact's address
     * @param string $post_office_box Gets or sets the post office box
     */
    public function __construct(
        $is_mailing_address = null,
        $street = null,
        $city = null,
        $state_or_province = null,
        $postal_code = null,
        $country = null,
        $country_code = null,
        $address = null,
        $post_office_box = null
    ) {
        $this->container['is_mailing_address'] = null;
        $this->container['street'] = null;
        $this->container['city'] = null;
        $this->container['state_or_province'] = null;
        $this->container['postal_code'] = null;
        $this->container['country'] = null;
        $this->container['country_code'] = null;
        $this->container['address'] = null;
        $this->container['post_office_box'] = null;

        if ($is_mailing_address != null) $this->setIsMailingAddress($is_mailing_address);
        if ($street != null) $this->setStreet($street);
        if ($city != null) $this->setCity($city);
        if ($state_or_province != null) $this->setStateOrProvince($state_or_province);
        if ($postal_code != null) $this->setPostalCode($postal_code);
        if ($country != null) $this->setCountry($country);
        if ($country_code != null) $this->setCountryCode($country_code);
        if ($address != null) $this->setAddress($address);
        if ($post_office_box != null) $this->setPostOfficeBox($post_office_box);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_mailing_address'] === null) {
            $invalidProperties[] = "'is_mailing_address' can't be null";
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

        if ($this->container['is_mailing_address'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_mailing_address
     *
     * @return bool
     */
    public function getIsMailingAddress()
    {
        return $this->container['is_mailing_address'];
    }

    /**
     * Sets is_mailing_address
     *
     * @param bool $is_mailing_address Gets or sets a value indicating whether this address is mailing address
     *
     * @return $this
     */
    public function setIsMailingAddress($is_mailing_address)
    {
        $this->container['is_mailing_address'] = $is_mailing_address;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Specifies the street portion of the contact's address
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Specifies the city or locality portion of the contact's address
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_or_province
     *
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->container['state_or_province'];
    }

    /**
     * Sets state_or_province
     *
     * @param string $state_or_province Specifies the state or province portion of the contact's address
     *
     * @return $this
     */
    public function setStateOrProvince($state_or_province)
    {
        $this->container['state_or_province'] = $state_or_province;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Specifies the postal code (ZIP code) portion of the contact's address
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Specifies the country or region portion of the contact's address
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Specifies the country code portion of the contact's address
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

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
     * @param string $address Specifies the complete address of the contact's address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets post_office_box
     *
     * @return string
     */
    public function getPostOfficeBox()
    {
        return $this->container['post_office_box'];
    }

    /**
     * Sets post_office_box
     *
     * @param string $post_office_box Gets or sets the post office box
     *
     * @return $this
     */
    public function setPostOfficeBox($post_office_box)
    {
        $this->container['post_office_box'] = $post_office_box;

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

