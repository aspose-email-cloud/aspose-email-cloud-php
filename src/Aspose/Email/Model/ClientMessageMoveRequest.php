<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageMoveRequest.php">
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
 * ClientMessageMoveRequest
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * ClientMessageMoveRequest
 *
 * @description Email client move message request.
 */
class ClientMessageMoveRequest extends ClientMessageBaseRequest 
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ClientMessageMoveRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'source_folder' => 'string',
        'destination_folder' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'source_folder' => null,
        'destination_folder' => null
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
        'source_folder' => 'sourceFolder',
        'destination_folder' => 'destinationFolder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_folder' => 'setSourceFolder',
        'destination_folder' => 'setDestinationFolder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_folder' => 'getSourceFolder',
        'destination_folder' => 'getDestinationFolder'
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
     * Initializes a new instance of the ClientMessageMoveRequest class.
     *  
     * @param \Aspose\Email\Model\StorageFileLocation $account_location Email client account configuration location on storage.
     * @param string $message_id Message identifier.
     * @param string $source_folder Folder to move message from.
     * @param string $destination_folder Folder to move message to.
     */
    public function __construct(
        $account_location = null,
        $message_id = null,
        $source_folder = null,
        $destination_folder = null
    ) {
        parent::__construct();
        $this->container['source_folder'] = null;
        $this->container['destination_folder'] = null;

        if ($account_location != null) $this->setAccountLocation($account_location);
        if ($message_id != null) $this->setMessageId($message_id);
        if ($source_folder != null) $this->setSourceFolder($source_folder);
        if ($destination_folder != null) $this->setDestinationFolder($destination_folder);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['destination_folder'] === null) {
            $invalidProperties[] = "'destination_folder' can't be null";
        }
        if ((strlen($this->container['destination_folder']) < 1)) {
            $invalidProperties[] = "invalid value for 'destination_folder', the character length must be bigger than or equal to 1.";
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

        if ($this->container['destination_folder'] === null) {
            return false;
        }
        if (strlen($this->container['destination_folder']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets source_folder
     *
     * @return string
     */
    public function getSourceFolder()
    {
        return $this->container['source_folder'];
    }

    /**
     * Sets source_folder
     *
     * @param string $source_folder Folder to move message from.
     *
     * @return $this
     */
    public function setSourceFolder($source_folder)
    {
        $this->container['source_folder'] = $source_folder;

        return $this;
    }

    /**
     * Gets destination_folder
     *
     * @return string
     */
    public function getDestinationFolder()
    {
        return $this->container['destination_folder'];
    }

    /**
     * Sets destination_folder
     *
     * @param string $destination_folder Folder to move message to.
     *
     * @return $this
     */
    public function setDestinationFolder($destination_folder)
    {

        if ((strlen($destination_folder) < 1)) {
            throw new \InvalidArgumentException('invalid length for $destination_folder when calling ClientMessageMoveRequest., must be bigger than or equal to 1.');
        }

        $this->container['destination_folder'] = $destination_folder;

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

