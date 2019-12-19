<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteFolderBaseRequest.php">
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
 * DeleteFolderBaseRequest
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * DeleteFolderBaseRequest
 *
 * @description Delete folder request
 */
class DeleteFolderBaseRequest extends AccountBaseRequest 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DeleteFolderBaseRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'folder' => 'string',
        'delete_permanently' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'folder' => null,
        'delete_permanently' => null
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
        'folder' => 'folder',
        'delete_permanently' => 'deletePermanently'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'folder' => 'setFolder',
        'delete_permanently' => 'setDeletePermanently'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'folder' => 'getFolder',
        'delete_permanently' => 'getDeletePermanently'
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
     * Initializes a new instance of the DeleteFolderBaseRequest class.
     *  
     * @param string $first_account First account storage file name for receiving emails (or universal one)
     * @param string $second_account Second account storage file name for sending emails (ignored if first is universal)
     * @param \Aspose\Email\Model\StorageFolderLocation $storage_folder Storage folder location of account files
     * @param string $folder Folder name
     * @param bool $delete_permanently Specifies that folder should be deleted permanently
     */
    public function __construct($first_account = null, $second_account = null, $storage_folder = null, $folder = null, $delete_permanently = null)
    {
        parent::__construct();
        $this->container['folder'] = null;
        $this->container['delete_permanently'] = null;

        if ($first_account != null) $this->setFirstAccount($first_account);
        if ($second_account != null) $this->setSecondAccount($second_account);
        if ($storage_folder != null) $this->setStorageFolder($storage_folder);
        if ($folder != null) $this->setFolder($folder);
        if ($delete_permanently != null) $this->setDeletePermanently($delete_permanently);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['folder'] === null) {
            $invalidProperties[] = "'folder' can't be null";
        }
        if ((strlen($this->container['folder']) < 1)) {
            $invalidProperties[] = "invalid value for 'folder', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['delete_permanently'] === null) {
            $invalidProperties[] = "'delete_permanently' can't be null";
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

        if ($this->container['folder'] === null) {
            return false;
        }
        if (strlen($this->container['folder']) < 1) {
            return false;
        }
        if ($this->container['delete_permanently'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets folder
     *
     * @return string
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param string $folder Folder name
     *
     * @return $this
     */
    public function setFolder($folder)
    {

        if ((strlen($folder) < 1)) {
            throw new \InvalidArgumentException('invalid length for $folder when calling DeleteFolderBaseRequest., must be bigger than or equal to 1.');
        }

        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets delete_permanently
     *
     * @return bool
     */
    public function getDeletePermanently()
    {
        return $this->container['delete_permanently'];
    }

    /**
     * Sets delete_permanently
     *
     * @param bool $delete_permanently Specifies that folder should be deleted permanently
     *
     * @return $this
     */
    public function setDeletePermanently($delete_permanently)
    {
        $this->container['delete_permanently'] = $delete_permanently;

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