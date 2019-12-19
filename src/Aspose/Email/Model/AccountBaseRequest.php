<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AccountBaseRequest.php">
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
 * AccountBaseRequest
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * AccountBaseRequest
 *
 * @description EmailClient accounts request
 */
class AccountBaseRequest implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AccountBaseRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'first_account' => 'string',
        'second_account' => 'string',
        'storage_folder' => '\Aspose\Email\Model\StorageFolderLocation'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'first_account' => null,
        'second_account' => null,
        'storage_folder' => null
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
        'first_account' => 'firstAccount',
        'second_account' => 'secondAccount',
        'storage_folder' => 'storageFolder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_account' => 'setFirstAccount',
        'second_account' => 'setSecondAccount',
        'storage_folder' => 'setStorageFolder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_account' => 'getFirstAccount',
        'second_account' => 'getSecondAccount',
        'storage_folder' => 'getStorageFolder'
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
     * Initializes a new instance of the AccountBaseRequest class.
     *  
     * @param string $first_account First account storage file name for receiving emails (or universal one)
     * @param string $second_account Second account storage file name for sending emails (ignored if first is universal)
     * @param \Aspose\Email\Model\StorageFolderLocation $storage_folder Storage folder location of account files
     */
    public function __construct($first_account = null, $second_account = null, $storage_folder = null)
    {
        $this->container['first_account'] = null;
        $this->container['second_account'] = null;
        $this->container['storage_folder'] = null;

        if ($first_account != null) $this->setFirstAccount($first_account);
        if ($second_account != null) $this->setSecondAccount($second_account);
        if ($storage_folder != null) $this->setStorageFolder($storage_folder);

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_account'] === null) {
            $invalidProperties[] = "'first_account' can't be null";
        }
        if ((strlen($this->container['first_account']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_account', the character length must be bigger than or equal to 1.";
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

        if ($this->container['first_account'] === null) {
            return false;
        }
        if (strlen($this->container['first_account']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets first_account
     *
     * @return string
     */
    public function getFirstAccount()
    {
        return $this->container['first_account'];
    }

    /**
     * Sets first_account
     *
     * @param string $first_account First account storage file name for receiving emails (or universal one)
     *
     * @return $this
     */
    public function setFirstAccount($first_account)
    {

        if ((strlen($first_account) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_account when calling AccountBaseRequest., must be bigger than or equal to 1.');
        }

        $this->container['first_account'] = $first_account;

        return $this;
    }

    /**
     * Gets second_account
     *
     * @return string
     */
    public function getSecondAccount()
    {
        return $this->container['second_account'];
    }

    /**
     * Sets second_account
     *
     * @param string $second_account Second account storage file name for sending emails (ignored if first is universal)
     *
     * @return $this
     */
    public function setSecondAccount($second_account)
    {
        $this->container['second_account'] = $second_account;

        return $this;
    }

    /**
     * Gets storage_folder
     *
     * @return \Aspose\Email\Model\StorageFolderLocation
     */
    public function getStorageFolder()
    {
        return $this->container['storage_folder'];
    }

    /**
     * Sets storage_folder
     *
     * @param \Aspose\Email\Model\StorageFolderLocation $storage_folder Storage folder location of account files
     *
     * @return $this
     */
    public function setStorageFolder($storage_folder)
    {
        $this->container['storage_folder'] = $storage_folder;

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