<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Attachment.php">
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
 * Attachment
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * Attachment
 *
 * @description Document attachment.
 */
class Attachment extends AttachmentBase 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Attachment";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'content_disposition' => 'string',
        'is_embedded_message' => 'bool',
        'name' => 'string',
        'name_encoding' => 'string',
        'preferred_text_encoding' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'content_disposition' => null,
        'is_embedded_message' => null,
        'name' => null,
        'name_encoding' => null,
        'preferred_text_encoding' => null
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
        'content_disposition' => 'contentDisposition',
        'is_embedded_message' => 'isEmbeddedMessage',
        'name' => 'name',
        'name_encoding' => 'nameEncoding',
        'preferred_text_encoding' => 'preferredTextEncoding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_disposition' => 'setContentDisposition',
        'is_embedded_message' => 'setIsEmbeddedMessage',
        'name' => 'setName',
        'name_encoding' => 'setNameEncoding',
        'preferred_text_encoding' => 'setPreferredTextEncoding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_disposition' => 'getContentDisposition',
        'is_embedded_message' => 'getIsEmbeddedMessage',
        'name' => 'getName',
        'name_encoding' => 'getNameEncoding',
        'preferred_text_encoding' => 'getPreferredTextEncoding'
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
     * Initializes a new instance of the Attachment class.
     *  
     * @param string $base64_data Attachment file content as Base64 string.
     * @param string $content_id Attachment content id
     * @param \Aspose\Email\Model\ContentType $content_type Content type
     * @param map[string,string] $headers Attachment headers.
     * @param string $content_disposition Content-Disposition header. Read only.
     * @param bool $is_embedded_message Determines if attachment is an embedded message. Read only.
     * @param string $name Attachment name.
     * @param string $name_encoding Encoding of attachment name.
     * @param string $preferred_text_encoding Preferred text encoding.
     */
    public function __construct(
        $base64_data = null,
        $content_id = null,
        $content_type = null,
        $headers = null,
        $content_disposition = null,
        $is_embedded_message = null,
        $name = null,
        $name_encoding = null,
        $preferred_text_encoding = null
    ) {
        parent::__construct();
        $this->container['content_disposition'] = null;
        $this->container['is_embedded_message'] = null;
        $this->container['name'] = null;
        $this->container['name_encoding'] = null;
        $this->container['preferred_text_encoding'] = null;

        if ($base64_data != null) $this->setBase64Data($base64_data);
        if ($content_id != null) $this->setContentId($content_id);
        if ($content_type != null) $this->setContentType($content_type);
        if ($headers != null) $this->setHeaders($headers);
        if ($content_disposition != null) $this->setContentDisposition($content_disposition);
        if ($is_embedded_message != null) $this->setIsEmbeddedMessage($is_embedded_message);
        if ($name != null) $this->setName($name);
        if ($name_encoding != null) $this->setNameEncoding($name_encoding);
        if ($preferred_text_encoding != null) $this->setPreferredTextEncoding($preferred_text_encoding);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['is_embedded_message'] === null) {
            $invalidProperties[] = "'is_embedded_message' can't be null";
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

        if ($this->container['is_embedded_message'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets content_disposition
     *
     * @return string
     */
    public function getContentDisposition()
    {
        return $this->container['content_disposition'];
    }

    /**
     * Sets content_disposition
     *
     * @param string $content_disposition Content-Disposition header. Read only.
     *
     * @return $this
     */
    public function setContentDisposition($content_disposition)
    {
        $this->container['content_disposition'] = $content_disposition;

        return $this;
    }

    /**
     * Gets is_embedded_message
     *
     * @return bool
     */
    public function getIsEmbeddedMessage()
    {
        return $this->container['is_embedded_message'];
    }

    /**
     * Sets is_embedded_message
     *
     * @param bool $is_embedded_message Determines if attachment is an embedded message. Read only.
     *
     * @return $this
     */
    public function setIsEmbeddedMessage($is_embedded_message)
    {
        $this->container['is_embedded_message'] = $is_embedded_message;

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
     * @param string $name Attachment name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_encoding
     *
     * @return string
     */
    public function getNameEncoding()
    {
        return $this->container['name_encoding'];
    }

    /**
     * Sets name_encoding
     *
     * @param string $name_encoding Encoding of attachment name.
     *
     * @return $this
     */
    public function setNameEncoding($name_encoding)
    {
        $this->container['name_encoding'] = $name_encoding;

        return $this;
    }

    /**
     * Gets preferred_text_encoding
     *
     * @return string
     */
    public function getPreferredTextEncoding()
    {
        return $this->container['preferred_text_encoding'];
    }

    /**
     * Sets preferred_text_encoding
     *
     * @param string $preferred_text_encoding Preferred text encoding.
     *
     * @return $this
     */
    public function setPreferredTextEncoding($preferred_text_encoding)
    {
        $this->container['preferred_text_encoding'] = $preferred_text_encoding;

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

