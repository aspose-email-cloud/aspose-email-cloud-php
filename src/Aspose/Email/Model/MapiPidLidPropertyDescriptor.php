<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiPidLidPropertyDescriptor.php">
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
 * MapiPidLidPropertyDescriptor
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiPidLidPropertyDescriptor
 *
 * @description Property identified by an unsigned 32-bit quantity along with a property set
 */
class MapiPidLidPropertyDescriptor extends MapiPidPropertyDescriptor 
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiPidLidPropertyDescriptor";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'long_id' => 'int',
        'property_set' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'long_id' => 'int64',
        'property_set' => 'guid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'long_id' => 'longId',
        'property_set' => 'propertySet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'long_id' => 'setLongId',
        'property_set' => 'setPropertySet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'long_id' => 'getLongId',
        'property_set' => 'getPropertySet'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Initializes a new instance of the MapiPidLidPropertyDescriptor class.
     *  
     * @param string $discriminator 
     * @param string $canonical_name The name used to refer to the property in the documentation. The prefix of the canonical name identifies the basic characteristics of a property to the implementer. The canonical naming structure uses three categories that are denoted by the following prefixes to the canonical property name: * PidLid prefix: Properties identified by an unsigned 32-bit quantity along with a property set. * PidName prefix: Properties identified by a string name along with a property set. * PidTag prefix: Properties identified by an unsigned 16-bit quantity.
     * @param string $data_type [MS-OXCDATA]: Data Structures Enum, available values: Unspecified, Null, Integer16, Integer32, Floating32, Floating64, Currency, FloatingTime, ErrorCode, Boolean, Integer64, String, String8, Time, Guid, ServerId, Restriction, RuleAction, Binary, MultipleInteger16, MultipleInteger32, MultipleFloating32, MultipleFloating64, MultipleCurrency, MultipleFloatingTime, MultipleBoolean, MultipleInteger64, MultipleString, MultipleString8, MultipleTime, MultipleGuid, MultipleBinary, Object
     * @param bool $multiple_values_data_type Indicates if data type contains of multiple values
     * @param string $name A string that identifies the property
     * @param int $long_id An unsigned 32-bit quantity that, along with the property set, identifies a named property.
     * @param string $property_set A GUID that identifies a group of properties with a similar purpose.
     */
    public function __construct(
        //,
        $canonical_name = null,
        $data_type = null,
        $multiple_values_data_type = null,
        $name = null,
        $long_id = null,
        $property_set = null
    ) {
        parent::__construct();
        $this->container['long_id'] = null;
        $this->container['property_set'] = null;

        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
        if ($canonical_name != null) $this->setCanonicalName($canonical_name);
        if ($data_type != null) $this->setDataType($data_type);
        if ($multiple_values_data_type != null) $this->setMultipleValuesDataType($multiple_values_data_type);
        if ($name != null) $this->setName($name);
        if ($long_id != null) $this->setLongId($long_id);
        if ($property_set != null) $this->setPropertySet($property_set);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['long_id'] === null) {
            $invalidProperties[] = "'long_id' can't be null";
        }
        if ($this->container['property_set'] === null) {
            $invalidProperties[] = "'property_set' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['long_id'] === null) {
            return false;
        }
        if ($this->container['property_set'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets long_id
     *
     * @return int
     */
    public function getLongId()
    {
        return $this->container['long_id'];
    }

    /**
     * Sets long_id
     *
     * @param int $long_id An unsigned 32-bit quantity that, along with the property set, identifies a named property.
     *
     * @return $this
     */
    public function setLongId($long_id)
    {
        $this->container['long_id'] = $long_id;

        return $this;
    }

    /**
     * Gets property_set
     *
     * @return string
     */
    public function getPropertySet()
    {
        return $this->container['property_set'];
    }

    /**
     * Sets property_set
     *
     * @param string $property_set A GUID that identifies a group of properties with a similar purpose.
     *
     * @return $this
     */
    public function setPropertySet($property_set)
    {
        $this->container['property_set'] = $property_set;

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

