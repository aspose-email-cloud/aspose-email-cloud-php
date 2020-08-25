<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailClientAccount.php">
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
 * EmailClientAccount
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * EmailClientAccount
 *
 * @description A universal email client account
 */
class EmailClientAccount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailClientAccount";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'host' => 'string',
        'port' => 'int',
        'security_options' => 'string',
        'protocol_type' => 'string',
        'credentials' => '\Aspose\Email\Model\EmailClientAccountCredentials',
        'cache_file' => '\Aspose\Email\Model\StorageFileLocation'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'host' => null,
        'port' => 'int32',
        'security_options' => null,
        'protocol_type' => null,
        'credentials' => null,
        'cache_file' => null
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
        'host' => 'host',
        'port' => 'port',
        'security_options' => 'securityOptions',
        'protocol_type' => 'protocolType',
        'credentials' => 'credentials',
        'cache_file' => 'cacheFile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host' => 'setHost',
        'port' => 'setPort',
        'security_options' => 'setSecurityOptions',
        'protocol_type' => 'setProtocolType',
        'credentials' => 'setCredentials',
        'cache_file' => 'setCacheFile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host' => 'getHost',
        'port' => 'getPort',
        'security_options' => 'getSecurityOptions',
        'protocol_type' => 'getProtocolType',
        'credentials' => 'getCredentials',
        'cache_file' => 'getCacheFile'
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
     * Initializes a new instance of the EmailClientAccount class.
     *  
     * @param string $host Mail server host name or IP address
     * @param int $port Mail server port
     * @param string $security_options Email account security mode Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     * @param string $protocol_type Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav
     * @param \Aspose\Email\Model\EmailClientAccountCredentials $credentials Email client account credentials
     * @param \Aspose\Email\Model\StorageFileLocation $cache_file File with messages cache. Used to provide extra functions, which are not supported by account
     */
    public function __construct($host = null, $port = null, $security_options = null, $protocol_type = null, $credentials = null, $cache_file = null)
    {
        $this->container['host'] = null;
        $this->container['port'] = null;
        $this->container['security_options'] = null;
        $this->container['protocol_type'] = null;
        $this->container['credentials'] = null;
        $this->container['cache_file'] = null;

        if ($host != null) $this->setHost($host);
        if ($port != null) $this->setPort($port);
        if ($security_options != null) $this->setSecurityOptions($security_options);
        if ($protocol_type != null) $this->setProtocolType($protocol_type);
        if ($credentials != null) $this->setCredentials($credentials);
        if ($cache_file != null) $this->setCacheFile($cache_file);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ((strlen($this->container['host']) < 1)) {
            $invalidProperties[] = "invalid value for 'host', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if (($this->container['port'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['port'] < 1)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
        }

        if ($this->container['security_options'] === null) {
            $invalidProperties[] = "'security_options' can't be null";
        }
        if ($this->container['protocol_type'] === null) {
            $invalidProperties[] = "'protocol_type' can't be null";
        }
        if ($this->container['credentials'] === null) {
            $invalidProperties[] = "'credentials' can't be null";
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

        if ($this->container['host'] === null) {
            return false;
        }
        if (strlen($this->container['host']) < 1) {
            return false;
        }
        if ($this->container['port'] === null) {
            return false;
        }
        if ($this->container['port'] > 2147483647) {
            return false;
        }
        if ($this->container['port'] < 1) {
            return false;
        }
        if ($this->container['security_options'] === null) {
            return false;
        }
        if ($this->container['protocol_type'] === null) {
            return false;
        }
        if ($this->container['credentials'] === null) {
            return false;
        }
        return true;
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
     * @param string $host Mail server host name or IP address
     *
     * @return $this
     */
    public function setHost($host)
    {

        if ((strlen($host) < 1)) {
            throw new \InvalidArgumentException('invalid length for $host when calling EmailClientAccount., must be bigger than or equal to 1.');
        }

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
     * @param int $port Mail server port
     *
     * @return $this
     */
    public function setPort($port)
    {

        if (($port > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $port when calling EmailClientAccount., must be smaller than or equal to 2147483647.');
        }
        if (($port < 1)) {
            throw new \InvalidArgumentException('invalid value for $port when calling EmailClientAccount., must be bigger than or equal to 1.');
        }

        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets security_options
     *
     * @return string
     */
    public function getSecurityOptions()
    {
        return $this->container['security_options'];
    }

    /**
     * Sets security_options
     *
     * @param string $security_options Email account security mode Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     *
     * @return $this
     */
    public function setSecurityOptions($security_options)
    {
        $this->container['security_options'] = $security_options;

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
     * Gets credentials
     *
     * @return \Aspose\Email\Model\EmailClientAccountCredentials
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \Aspose\Email\Model\EmailClientAccountCredentials $credentials Email client account credentials
     *
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;

        return $this;
    }

    /**
     * Gets cache_file
     *
     * @return \Aspose\Email\Model\StorageFileLocation
     */
    public function getCacheFile()
    {
        return $this->container['cache_file'];
    }

    /**
     * Sets cache_file
     *
     * @param \Aspose\Email\Model\StorageFileLocation $cache_file File with messages cache. Used to provide extra functions, which are not supported by account
     *
     * @return $this
     */
    public function setCacheFile($cache_file)
    {
        $this->container['cache_file'] = $cache_file;

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

