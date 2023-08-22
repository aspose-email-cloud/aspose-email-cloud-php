<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientThreadMoveRequest.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
 * ClientThreadMoveRequest
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * ClientThreadMoveRequest
 *
 * @description Email client move thread request.
 */
class ClientThreadMoveRequest extends ClientThreadBaseRequest 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ClientThreadMoveRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'destination_folder' => 'string',
        'source_folder' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'destination_folder' => null,
        'source_folder' => null
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
        'destination_folder' => 'destinationFolder',
        'source_folder' => 'sourceFolder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_folder' => 'setDestinationFolder',
        'source_folder' => 'setSourceFolder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_folder' => 'getDestinationFolder',
        'source_folder' => 'getSourceFolder'
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
     * Initializes a new instance of the ClientThreadMoveRequest class.
     *  
     * @param \Aspose\Email\Model\StorageFileLocation $account_location Email client account configuration location on storage.
     * @param string $thread_id Thread identifier.
     * @param string $destination_folder Email account folder to move thread to.
     * @param string $source_folder Email account folder to move thread from.
     */
    public function __construct(
        $account_location = null,
        $thread_id = null,
        $destination_folder = null,
        $source_folder = null
    ) {
        parent::__construct();
        $this->container['destination_folder'] = null;
        $this->container['source_folder'] = null;

        if ($account_location != null) $this->setAccountLocation($account_location);
        if ($thread_id != null) $this->setThreadId($thread_id);
        if ($destination_folder != null) $this->setDestinationFolder($destination_folder);
        if ($source_folder != null) $this->setSourceFolder($source_folder);
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
     * @param string $destination_folder Email account folder to move thread to.
     *
     * @return $this
     */
    public function setDestinationFolder($destination_folder)
    {
        if ((strlen($destination_folder) < 1)) {
            throw new \InvalidArgumentException('invalid length for $destination_folder when calling ClientThreadMoveRequest., must be bigger than or equal to 1.');
        }
        $this->container['destination_folder'] = $destination_folder;

        return $this;
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
     * @param string $source_folder Email account folder to move thread from.
     *
     * @return $this
     */
    public function setSourceFolder($source_folder)
    {
        $this->container['source_folder'] = $source_folder;

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

