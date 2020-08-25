<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContentType.php">
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
 * ContentType
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * ContentType
 *
 * @description Represents a Content-Type header.
 */
class ContentType implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ContentType";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'boundary' => 'string',
        'char_set' => 'string',
        'media_type' => 'string',
        'name' => 'string',
        'parameters' => '\Aspose\Email\Model\ContentTypeParameter[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'boundary' => null,
        'char_set' => null,
        'media_type' => null,
        'name' => null,
        'parameters' => null
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
        'boundary' => 'boundary',
        'char_set' => 'charSet',
        'media_type' => 'mediaType',
        'name' => 'name',
        'parameters' => 'parameters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'boundary' => 'setBoundary',
        'char_set' => 'setCharSet',
        'media_type' => 'setMediaType',
        'name' => 'setName',
        'parameters' => 'setParameters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'boundary' => 'getBoundary',
        'char_set' => 'getCharSet',
        'media_type' => 'getMediaType',
        'name' => 'getName',
        'parameters' => 'getParameters'
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
     * Initializes a new instance of the ContentType class.
     *  
     * @param string $boundary The boundary parameter included in the Content-Type header.
     * @param string $char_set CharSet parameter.
     * @param string $media_type The internet media type.
     * @param string $name Name parameter.
     * @param \Aspose\Email\Model\ContentTypeParameter[] $parameters Full list of parameters
     */
    public function __construct($boundary = null, $char_set = null, $media_type = null, $name = null, $parameters = null)
    {
        $this->container['boundary'] = null;
        $this->container['char_set'] = null;
        $this->container['media_type'] = null;
        $this->container['name'] = null;
        $this->container['parameters'] = null;

        if ($boundary != null) $this->setBoundary($boundary);
        if ($char_set != null) $this->setCharSet($char_set);
        if ($media_type != null) $this->setMediaType($media_type);
        if ($name != null) $this->setName($name);
        if ($parameters != null) $this->setParameters($parameters);
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
     * Gets boundary
     *
     * @return string
     */
    public function getBoundary()
    {
        return $this->container['boundary'];
    }

    /**
     * Sets boundary
     *
     * @param string $boundary The boundary parameter included in the Content-Type header.
     *
     * @return $this
     */
    public function setBoundary($boundary)
    {
        $this->container['boundary'] = $boundary;

        return $this;
    }

    /**
     * Gets char_set
     *
     * @return string
     */
    public function getCharSet()
    {
        return $this->container['char_set'];
    }

    /**
     * Sets char_set
     *
     * @param string $char_set CharSet parameter.
     *
     * @return $this
     */
    public function setCharSet($char_set)
    {
        $this->container['char_set'] = $char_set;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param string $media_type The internet media type.
     *
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $this->container['media_type'] = $media_type;

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
     * @param string $name Name parameter.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Aspose\Email\Model\ContentTypeParameter[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Aspose\Email\Model\ContentTypeParameter[] $parameters Full list of parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

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

