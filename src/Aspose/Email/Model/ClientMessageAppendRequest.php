<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientMessageAppendRequest.php">
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
 * ClientMessageAppendRequest
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * ClientMessageAppendRequest
 *
 * @description Email client append message request.
 */
class ClientMessageAppendRequest extends ClientAccountBaseRequest 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ClientMessageAppendRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'folder' => 'string',
        'message' => '\Aspose\Email\Model\MailMessageBase',
        'mark_as_sent' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'folder' => null,
        'message' => null,
        'mark_as_sent' => null
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
        'message' => 'message',
        'mark_as_sent' => 'markAsSent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'folder' => 'setFolder',
        'message' => 'setMessage',
        'mark_as_sent' => 'setMarkAsSent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'folder' => 'getFolder',
        'message' => 'getMessage',
        'mark_as_sent' => 'getMarkAsSent'
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
     * Initializes a new instance of the ClientMessageAppendRequest class.
     *  
     * @param \Aspose\Email\Model\StorageFileLocation $account_location Email client account configuration location on storage.
     * @param string $folder Path to folder on email server to append message to.
     * @param \Aspose\Email\Model\MailMessageBase $message Message to append.
     * @param bool $mark_as_sent Determines that appended message should be market as sent or not.
     */
    public function __construct(
        $account_location = null,
        $folder = null,
        $message = null,
        $mark_as_sent = null
    ) {
        parent::__construct();
        $this->container['folder'] = null;
        $this->container['message'] = null;
        $this->container['mark_as_sent'] = null;

        if ($account_location != null) $this->setAccountLocation($account_location);
        if ($folder != null) $this->setFolder($folder);
        if ($message != null) $this->setMessage($message);
        if ($mark_as_sent != null) $this->setMarkAsSent($mark_as_sent);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['mark_as_sent'] === null) {
            $invalidProperties[] = "'mark_as_sent' can't be null";
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

        if ($this->container['message'] === null) {
            return false;
        }
        if ($this->container['mark_as_sent'] === null) {
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
     * @param string $folder Path to folder on email server to append message to.
     *
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \Aspose\Email\Model\MailMessageBase
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \Aspose\Email\Model\MailMessageBase $message Message to append.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets mark_as_sent
     *
     * @return bool
     */
    public function getMarkAsSent()
    {
        return $this->container['mark_as_sent'];
    }

    /**
     * Sets mark_as_sent
     *
     * @param bool $mark_as_sent Determines that appended message should be market as sent or not.
     *
     * @return $this
     */
    public function setMarkAsSent($mark_as_sent)
    {
        $this->container['mark_as_sent'] = $mark_as_sent;

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

