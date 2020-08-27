<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailClientMultiAccount.php">
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
 * EmailClientMultiAccount
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * EmailClientMultiAccount
 *
 * @description Email client virtual account, which contains several accounts
 */
class EmailClientMultiAccount implements ArrayAccess
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailClientMultiAccount";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'receive_accounts' => '\Aspose\Email\Model\EmailClientAccount[]',
        'send_account' => '\Aspose\Email\Model\EmailClientAccount'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'receive_accounts' => null,
        'send_account' => null
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
        'receive_accounts' => 'receiveAccounts',
        'send_account' => 'sendAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receive_accounts' => 'setReceiveAccounts',
        'send_account' => 'setSendAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receive_accounts' => 'getReceiveAccounts',
        'send_account' => 'getSendAccount'
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
     * Initializes a new instance of the EmailClientMultiAccount class.
     *  
     * @param \Aspose\Email\Model\EmailClientAccount[] $receive_accounts Email client receive accounts
     * @param \Aspose\Email\Model\EmailClientAccount $send_account Email client send account
     */
    public function __construct(
        $receive_accounts = null,
        $send_account = null
    ) {
        $this->container['receive_accounts'] = null;
        $this->container['send_account'] = null;

        if ($receive_accounts != null) $this->setReceiveAccounts($receive_accounts);
        if ($send_account != null) $this->setSendAccount($send_account);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['receive_accounts'] === null) {
            $invalidProperties[] = "'receive_accounts' can't be null";
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

        if ($this->container['receive_accounts'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets receive_accounts
     *
     * @return \Aspose\Email\Model\EmailClientAccount[]
     */
    public function getReceiveAccounts()
    {
        return $this->container['receive_accounts'];
    }

    /**
     * Sets receive_accounts
     *
     * @param \Aspose\Email\Model\EmailClientAccount[] $receive_accounts Email client receive accounts
     *
     * @return $this
     */
    public function setReceiveAccounts($receive_accounts)
    {
        $this->container['receive_accounts'] = $receive_accounts;

        return $this;
    }

    /**
     * Gets send_account
     *
     * @return \Aspose\Email\Model\EmailClientAccount
     */
    public function getSendAccount()
    {
        return $this->container['send_account'];
    }

    /**
     * Sets send_account
     *
     * @param \Aspose\Email\Model\EmailClientAccount $send_account Email client send account
     *
     * @return $this
     */
    public function setSendAccount($send_account)
    {
        $this->container['send_account'] = $send_account;

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

