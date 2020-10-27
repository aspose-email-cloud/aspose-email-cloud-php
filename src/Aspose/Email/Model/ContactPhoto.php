<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContactPhoto.php">
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
 * ContactPhoto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * ContactPhoto
 *
 * @description Person&#39;s photo.
 */
class ContactPhoto implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ContactPhoto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'photo_image_format' => 'string',
        'base64_data' => 'string',
        'discriminator' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'photo_image_format' => null,
        'base64_data' => null,
        'discriminator' => null
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
        'photo_image_format' => 'photoImageFormat',
        'base64_data' => 'base64Data',
        'discriminator' => 'discriminator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'photo_image_format' => 'setPhotoImageFormat',
        'base64_data' => 'setBase64Data',
        'discriminator' => 'setDiscriminator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'photo_image_format' => 'getPhotoImageFormat',
        'base64_data' => 'getBase64Data',
        'discriminator' => 'getDiscriminator'
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
     * Initializes a new instance of the ContactPhoto class.
     *  
     * @param string $photo_image_format MapiContact photo image format. Enum, available values: Undefined, Jpeg, Gif, Wmf, Bmp, Tiff
     * @param string $base64_data Photo serialized as base64 string.
     * @param string $discriminator 
     */
    public function __construct(
        $photo_image_format = null,
        $base64_data = null
        
    ) {
        $this->container['photo_image_format'] = null;
        $this->container['base64_data'] = null;

        if ($photo_image_format != null) $this->setPhotoImageFormat($photo_image_format);
        if ($base64_data != null) $this->setBase64Data($base64_data);
        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['photo_image_format'] === null) {
            $invalidProperties[] = "'photo_image_format' can't be null";
        }
        if ($this->container['base64_data'] === null) {
            $invalidProperties[] = "'base64_data' can't be null";
        }
        if ((strlen($this->container['base64_data']) < 1)) {
            $invalidProperties[] = "invalid value for 'base64_data', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['discriminator'] === null) {
            $invalidProperties[] = "'discriminator' can't be null";
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

        if ($this->container['photo_image_format'] === null) {
            return false;
        }
        if ($this->container['base64_data'] === null) {
            return false;
        }
        if (strlen($this->container['base64_data']) < 1) {
            return false;
        }
        if ($this->container['discriminator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets photo_image_format
     *
     * @return string
     */
    public function getPhotoImageFormat()
    {
        return $this->container['photo_image_format'];
    }

    /**
     * Sets photo_image_format
     *
     * @param string $photo_image_format MapiContact photo image format. Enum, available values: Undefined, Jpeg, Gif, Wmf, Bmp, Tiff
     *
     * @return $this
     */
    public function setPhotoImageFormat($photo_image_format)
    {
        $this->container['photo_image_format'] = $photo_image_format;

        return $this;
    }

    /**
     * Gets base64_data
     *
     * @return string
     */
    public function getBase64Data()
    {
        return $this->container['base64_data'];
    }

    /**
     * Sets base64_data
     *
     * @param string $base64_data Photo serialized as base64 string.
     *
     * @return $this
     */
    public function setBase64Data($base64_data)
    {
        if ((strlen($base64_data) < 1)) {
            throw new \InvalidArgumentException('invalid length for $base64_data when calling ContactPhoto., must be bigger than or equal to 1.');
        }
        $this->container['base64_data'] = $base64_data;

        return $this;
    }

    /**
     * Gets discriminator
     *
     * @return string
     */
    public function getDiscriminator()
    {
        return $this->container['discriminator'];
    }

    /**
     * Sets discriminator
     *
     * @param string $discriminator discriminator
     *
     * @return $this
     */
    public function setDiscriminator($discriminator)
    {
        /* do nothing */
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

