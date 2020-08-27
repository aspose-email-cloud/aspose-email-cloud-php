<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostalAddress.php">
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
 * PostalAddress
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * PostalAddress
 *
 * @description A postal address
 */
class PostalAddress implements ArrayAccess
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PostalAddress";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'address' => 'string',
        'category' => '\Aspose\Email\Model\EnumWithCustomOfPostalAddressCategory',
        'city' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'is_mailing_address' => 'bool',
        'postal_code' => 'string',
        'post_office_box' => 'string',
        'preferred' => 'bool',
        'state_or_province' => 'string',
        'street' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'address' => null,
        'category' => null,
        'city' => null,
        'country' => null,
        'country_code' => null,
        'is_mailing_address' => null,
        'postal_code' => null,
        'post_office_box' => null,
        'preferred' => null,
        'state_or_province' => null,
        'street' => null
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
        'address' => 'address',
        'category' => 'category',
        'city' => 'city',
        'country' => 'country',
        'country_code' => 'countryCode',
        'is_mailing_address' => 'isMailingAddress',
        'postal_code' => 'postalCode',
        'post_office_box' => 'postOfficeBox',
        'preferred' => 'preferred',
        'state_or_province' => 'stateOrProvince',
        'street' => 'street'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'category' => 'setCategory',
        'city' => 'setCity',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'is_mailing_address' => 'setIsMailingAddress',
        'postal_code' => 'setPostalCode',
        'post_office_box' => 'setPostOfficeBox',
        'preferred' => 'setPreferred',
        'state_or_province' => 'setStateOrProvince',
        'street' => 'setStreet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'category' => 'getCategory',
        'city' => 'getCity',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'is_mailing_address' => 'getIsMailingAddress',
        'postal_code' => 'getPostalCode',
        'post_office_box' => 'getPostOfficeBox',
        'preferred' => 'getPreferred',
        'state_or_province' => 'getStateOrProvince',
        'street' => 'getStreet'
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
     * Initializes a new instance of the PostalAddress class.
     *  
     * @param string $address Address.
     * @param \Aspose\Email\Model\EnumWithCustomOfPostalAddressCategory $category Address category.
     * @param string $city Address's city.
     * @param string $country Address's country.
     * @param string $country_code Country code.
     * @param bool $is_mailing_address Defines whether address may be used for mailing.
     * @param string $postal_code Postal code.
     * @param string $post_office_box Post Office box.
     * @param bool $preferred Defines whether postal address is preferred.
     * @param string $state_or_province Address's region.
     * @param string $street Address's street.
     */
    public function __construct(
        $address = null,
        $category = null,
        $city = null,
        $country = null,
        $country_code = null,
        $is_mailing_address = null,
        $postal_code = null,
        $post_office_box = null,
        $preferred = null,
        $state_or_province = null,
        $street = null
    ) {
        $this->container['address'] = null;
        $this->container['category'] = null;
        $this->container['city'] = null;
        $this->container['country'] = null;
        $this->container['country_code'] = null;
        $this->container['is_mailing_address'] = null;
        $this->container['postal_code'] = null;
        $this->container['post_office_box'] = null;
        $this->container['preferred'] = null;
        $this->container['state_or_province'] = null;
        $this->container['street'] = null;

        if ($address != null) $this->setAddress($address);
        if ($category != null) $this->setCategory($category);
        if ($city != null) $this->setCity($city);
        if ($country != null) $this->setCountry($country);
        if ($country_code != null) $this->setCountryCode($country_code);
        if ($is_mailing_address != null) $this->setIsMailingAddress($is_mailing_address);
        if ($postal_code != null) $this->setPostalCode($postal_code);
        if ($post_office_box != null) $this->setPostOfficeBox($post_office_box);
        if ($preferred != null) $this->setPreferred($preferred);
        if ($state_or_province != null) $this->setStateOrProvince($state_or_province);
        if ($street != null) $this->setStreet($street);
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
        if ($this->container['preferred'] === null) {
            $invalidProperties[] = "'preferred' can't be null";
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
        if ($this->container['preferred'] === null) {
            return false;
        }
        return true;
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
     * @param string $address Address.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Aspose\Email\Model\EnumWithCustomOfPostalAddressCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Aspose\Email\Model\EnumWithCustomOfPostalAddressCategory $category Address category.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param string $city Address's city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
     * @param string $country Address's country.
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
     * @param string $country_code Country code.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
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
     * @param bool $is_mailing_address Defines whether address may be used for mailing.
     *
     * @return $this
     */
    public function setIsMailingAddress($is_mailing_address)
    {
        $this->container['is_mailing_address'] = $is_mailing_address;

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
     * @param string $postal_code Postal code.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

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
     * @param string $post_office_box Post Office box.
     *
     * @return $this
     */
    public function setPostOfficeBox($post_office_box)
    {
        $this->container['post_office_box'] = $post_office_box;

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
     * @param bool $preferred Defines whether postal address is preferred.
     *
     * @return $this
     */
    public function setPreferred($preferred)
    {
        $this->container['preferred'] = $preferred;

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
     * @param string $state_or_province Address's region.
     *
     * @return $this
     */
    public function setStateOrProvince($state_or_province)
    {
        $this->container['state_or_province'] = $state_or_province;

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
     * @param string $street Address's street.
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

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

