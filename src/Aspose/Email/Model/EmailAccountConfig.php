<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailAccountConfig.php">
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
 * EmailAccountConfig
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * EmailAccountConfig
 *
 * @description Email account configuration.
 */
class EmailAccountConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailAccountConfig";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'display_name' => 'string',
        'protocol_type' => 'string',
        'host' => 'string',
        'port' => 'int',
        'socket_type' => 'string',
        'authentication_types' => 'string[]',
        'extra_info' => '\Aspose\Email\Model\NameValuePair[]',
        'is_validated' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'display_name' => null,
        'protocol_type' => null,
        'host' => null,
        'port' => 'int32',
        'socket_type' => null,
        'authentication_types' => null,
        'extra_info' => null,
        'is_validated' => null
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
        'display_name' => 'displayName',
        'protocol_type' => 'protocolType',
        'host' => 'host',
        'port' => 'port',
        'socket_type' => 'socketType',
        'authentication_types' => 'authenticationTypes',
        'extra_info' => 'extraInfo',
        'is_validated' => 'isValidated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'protocol_type' => 'setProtocolType',
        'host' => 'setHost',
        'port' => 'setPort',
        'socket_type' => 'setSocketType',
        'authentication_types' => 'setAuthenticationTypes',
        'extra_info' => 'setExtraInfo',
        'is_validated' => 'setIsValidated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'protocol_type' => 'getProtocolType',
        'host' => 'getHost',
        'port' => 'getPort',
        'socket_type' => 'getSocketType',
        'authentication_types' => 'getAuthenticationTypes',
        'extra_info' => 'getExtraInfo',
        'is_validated' => 'getIsValidated'
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
     * Initializes a new instance of the EmailAccountConfig class.
     *  
     * @param string $display_name Email account display name
     * @param string $protocol_type Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav
     * @param string $host Email account host.
     * @param int $port Port.
     * @param string $socket_type Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     * @param string[] $authentication_types Supported authentication types. Items: Email account authentication types. Enum, available values: NoAuth, OAuth2, PasswordCleartext, PasswordEncrypted, SmtpAfterPop, ClientIpAddress
     * @param \Aspose\Email\Model\NameValuePair[] $extra_info Extra account information.
     * @param bool $is_validated Determines that configuration validated. Set to false if validation skipped.
     */
    public function __construct($display_name = null, $protocol_type = null, $host = null, $port = null, $socket_type = null, $authentication_types = null, $extra_info = null, $is_validated = null)
    {
        $this->container['display_name'] = null;
        $this->container['protocol_type'] = null;
        $this->container['host'] = null;
        $this->container['port'] = null;
        $this->container['socket_type'] = null;
        $this->container['authentication_types'] = null;
        $this->container['extra_info'] = null;
        $this->container['is_validated'] = null;

        if ($display_name != null) $this->setDisplayName($display_name);
        if ($protocol_type != null) $this->setProtocolType($protocol_type);
        if ($host != null) $this->setHost($host);
        if ($port != null) $this->setPort($port);
        if ($socket_type != null) $this->setSocketType($socket_type);
        if ($authentication_types != null) $this->setAuthenticationTypes($authentication_types);
        if ($extra_info != null) $this->setExtraInfo($extra_info);
        if ($is_validated != null) $this->setIsValidated($is_validated);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['protocol_type'] === null) {
            $invalidProperties[] = "'protocol_type' can't be null";
        }
        if ($this->container['socket_type'] === null) {
            $invalidProperties[] = "'socket_type' can't be null";
        }
        if ($this->container['is_validated'] === null) {
            $invalidProperties[] = "'is_validated' can't be null";
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

        if ($this->container['protocol_type'] === null) {
            return false;
        }
        if ($this->container['socket_type'] === null) {
            return false;
        }
        if ($this->container['is_validated'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Email account display name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets protocol_type
     *
     * @return string
     */
    public function getProtocolType()
    {
        return $this->container['protocol_type'];
    }

    /**
     * Sets protocol_type
     *
     * @param string $protocol_type Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav
     *
     * @return $this
     */
    public function setProtocolType($protocol_type)
    {
        $this->container['protocol_type'] = $protocol_type;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host Email account host.
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port Port.
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets socket_type
     *
     * @return string
     */
    public function getSocketType()
    {
        return $this->container['socket_type'];
    }

    /**
     * Sets socket_type
     *
     * @param string $socket_type Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     *
     * @return $this
     */
    public function setSocketType($socket_type)
    {
        $this->container['socket_type'] = $socket_type;

        return $this;
    }

    /**
     * Gets authentication_types
     *
     * @return string[]
     */
    public function getAuthenticationTypes()
    {
        return $this->container['authentication_types'];
    }

    /**
     * Sets authentication_types
     *
     * @param string[] $authentication_types Supported authentication types. Items: Email account authentication types. Enum, available values: NoAuth, OAuth2, PasswordCleartext, PasswordEncrypted, SmtpAfterPop, ClientIpAddress
     *
     * @return $this
     */
    public function setAuthenticationTypes($authentication_types)
    {
        $this->container['authentication_types'] = $authentication_types;

        return $this;
    }

    /**
     * Gets extra_info
     *
     * @return \Aspose\Email\Model\NameValuePair[]
     */
    public function getExtraInfo()
    {
        return $this->container['extra_info'];
    }

    /**
     * Sets extra_info
     *
     * @param \Aspose\Email\Model\NameValuePair[] $extra_info Extra account information.
     *
     * @return $this
     */
    public function setExtraInfo($extra_info)
    {
        $this->container['extra_info'] = $extra_info;

        return $this;
    }

    /**
     * Gets is_validated
     *
     * @return bool
     */
    public function getIsValidated()
    {
        return $this->container['is_validated'];
    }

    /**
     * Sets is_validated
     *
     * @param bool $is_validated Determines that configuration validated. Set to false if validation skipped.
     *
     * @return $this
     */
    public function setIsValidated($is_validated)
    {
        $this->container['is_validated'] = $is_validated;

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