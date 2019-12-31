<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="HierarchicalObjectResponse.php">
 *   Copyright (c) 2018 Aspose.Email for Cloud
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
 * HierarchicalObjectResponse
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * HierarchicalObjectResponse
 *
 * @description Document represented as hierarchical set of properties response
 */
class HierarchicalObjectResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "HierarchicalObjectResponse";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'hierarchical_object' => '\Aspose\Email\Model\HierarchicalObject',
        'storage_file' => '\Aspose\Email\Model\StorageFileLocation'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'hierarchical_object' => null,
        'storage_file' => null
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
        'hierarchical_object' => 'hierarchicalObject',
        'storage_file' => 'storageFile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hierarchical_object' => 'setHierarchicalObject',
        'storage_file' => 'setStorageFile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hierarchical_object' => 'getHierarchicalObject',
        'storage_file' => 'getStorageFile'
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
     * Initializes a new instance of the HierarchicalObjectResponse class.
     *  
     * @param \Aspose\Email\Model\HierarchicalObject $hierarchical_object Document properties
     * @param \Aspose\Email\Model\StorageFileLocation $storage_file Document location in storage
     */
    public function __construct($hierarchical_object = null, $storage_file = null)
    {
        $this->container['hierarchical_object'] = null;
        $this->container['storage_file'] = null;

        if ($hierarchical_object != null) $this->setHierarchicalObject($hierarchical_object);
        if ($storage_file != null) $this->setStorageFile($storage_file);
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
     * Gets hierarchical_object
     *
     * @return \Aspose\Email\Model\HierarchicalObject
     */
    public function getHierarchicalObject()
    {
        return $this->container['hierarchical_object'];
    }

    /**
     * Sets hierarchical_object
     *
     * @param \Aspose\Email\Model\HierarchicalObject $hierarchical_object Document properties
     *
     * @return $this
     */
    public function setHierarchicalObject($hierarchical_object)
    {
        $this->container['hierarchical_object'] = $hierarchical_object;

        return $this;
    }

    /**
     * Gets storage_file
     *
     * @return \Aspose\Email\Model\StorageFileLocation
     */
    public function getStorageFile()
    {
        return $this->container['storage_file'];
    }

    /**
     * Sets storage_file
     *
     * @param \Aspose\Email\Model\StorageFileLocation $storage_file Document location in storage
     *
     * @return $this
     */
    public function setStorageFile($storage_file)
    {
        $this->container['storage_file'] = $storage_file;

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


?>