<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiPidPropertyDescriptor.php">
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
 * MapiPidPropertyDescriptor
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiPidPropertyDescriptor
 *
 * @description Mapi pid property descriptor base class
 */
class MapiPidPropertyDescriptor extends MapiPropertyDescriptor 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiPidPropertyDescriptor";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'canonical_name' => 'string',
        'data_type' => 'string',
        'multiple_values_data_type' => 'bool',
        'name' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'canonical_name' => null,
        'data_type' => null,
        'multiple_values_data_type' => null,
        'name' => null
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
        'canonical_name' => 'canonicalName',
        'data_type' => 'dataType',
        'multiple_values_data_type' => 'multipleValuesDataType',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canonical_name' => 'setCanonicalName',
        'data_type' => 'setDataType',
        'multiple_values_data_type' => 'setMultipleValuesDataType',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canonical_name' => 'getCanonicalName',
        'data_type' => 'getDataType',
        'multiple_values_data_type' => 'getMultipleValuesDataType',
        'name' => 'getName'
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
     * Initializes a new instance of the MapiPidPropertyDescriptor class.
     *  
     * @param string $discriminator 
     * @param string $canonical_name The name used to refer to the property in the documentation. The prefix of the canonical name identifies the basic characteristics of a property to the implementer. The canonical naming structure uses three categories that are denoted by the following prefixes to the canonical property name: * PidLid prefix: Properties identified by an unsigned 32-bit quantity along with a property set. * PidName prefix: Properties identified by a string name along with a property set. * PidTag prefix: Properties identified by an unsigned 16-bit quantity.
     * @param string $data_type [MS-OXCDATA]: Data Structures. Enum, available values: Unspecified, Null, Integer16, Integer32, Floating32, Floating64, Currency, FloatingTime, ErrorCode, Boolean, Integer64, String, String8, Time, Guid, ServerId, Restriction, RuleAction, Binary, MultipleInteger16, MultipleInteger32, MultipleFloating32, MultipleFloating64, MultipleCurrency, MultipleFloatingTime, MultipleBoolean, MultipleInteger64, MultipleString, MultipleString8, MultipleTime, MultipleGuid, MultipleBinary, Object
     * @param bool $multiple_values_data_type Indicates if data type contains of multiple values
     * @param string $name A string that identifies the property
     */
    public function __construct(
        //,
        $canonical_name = null,
        $data_type = null,
        $multiple_values_data_type = null,
        $name = null
    ) {
        parent::__construct();
        $this->container['canonical_name'] = null;
        $this->container['data_type'] = null;
        $this->container['multiple_values_data_type'] = null;
        $this->container['name'] = null;

        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
        if ($canonical_name != null) $this->setCanonicalName($canonical_name);
        if ($data_type != null) $this->setDataType($data_type);
        if ($multiple_values_data_type != null) $this->setMultipleValuesDataType($multiple_values_data_type);
        if ($name != null) $this->setName($name);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
        }
        if ($this->container['multiple_values_data_type'] === null) {
            $invalidProperties[] = "'multiple_values_data_type' can't be null";
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

        if ($this->container['data_type'] === null) {
            return false;
        }
        if ($this->container['multiple_values_data_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets canonical_name
     *
     * @return string
     */
    public function getCanonicalName()
    {
        return $this->container['canonical_name'];
    }

    /**
     * Sets canonical_name
     *
     * @param string $canonical_name The name used to refer to the property in the documentation. The prefix of the canonical name identifies the basic characteristics of a property to the implementer. The canonical naming structure uses three categories that are denoted by the following prefixes to the canonical property name: * PidLid prefix: Properties identified by an unsigned 32-bit quantity along with a property set. * PidName prefix: Properties identified by a string name along with a property set. * PidTag prefix: Properties identified by an unsigned 16-bit quantity.
     *
     * @return $this
     */
    public function setCanonicalName($canonical_name)
    {
        $this->container['canonical_name'] = $canonical_name;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type [MS-OXCDATA]: Data Structures. Enum, available values: Unspecified, Null, Integer16, Integer32, Floating32, Floating64, Currency, FloatingTime, ErrorCode, Boolean, Integer64, String, String8, Time, Guid, ServerId, Restriction, RuleAction, Binary, MultipleInteger16, MultipleInteger32, MultipleFloating32, MultipleFloating64, MultipleCurrency, MultipleFloatingTime, MultipleBoolean, MultipleInteger64, MultipleString, MultipleString8, MultipleTime, MultipleGuid, MultipleBinary, Object
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets multiple_values_data_type
     *
     * @return bool
     */
    public function getMultipleValuesDataType()
    {
        return $this->container['multiple_values_data_type'];
    }

    /**
     * Sets multiple_values_data_type
     *
     * @param bool $multiple_values_data_type Indicates if data type contains of multiple values
     *
     * @return $this
     */
    public function setMultipleValuesDataType($multiple_values_data_type)
    {
        $this->container['multiple_values_data_type'] = $multiple_values_data_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A string that identifies the property
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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

