<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailAccountRequest.php">
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
/*
 * EmailAccountRequest
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/*
 * EmailAccountRequest
 *
 * @description Email account settings request
 */
class EmailAccountRequest implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailAccountRequest";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'host' => 'string',
        'port' => 'int',
        'login' => 'string',
        'security_options' => 'string',
        'protocol_type' => 'string',
        'description' => 'string',
        'storage_file' => '\Aspose\Email\Model\StorageFileLocation'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'host' => null,
        'port' => 'int32',
        'login' => null,
        'security_options' => null,
        'protocol_type' => null,
        'description' => null,
        'storage_file' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'host' => 'host',
        'port' => 'port',
        'login' => 'login',
        'security_options' => 'securityOptions',
        'protocol_type' => 'protocolType',
        'description' => 'description',
        'storage_file' => 'storageFile'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'host' => 'setHost',
        'port' => 'setPort',
        'login' => 'setLogin',
        'security_options' => 'setSecurityOptions',
        'protocol_type' => 'setProtocolType',
        'description' => 'setDescription',
        'storage_file' => 'setStorageFile'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'host' => 'getHost',
        'port' => 'getPort',
        'login' => 'getLogin',
        'security_options' => 'getSecurityOptions',
        'protocol_type' => 'getProtocolType',
        'description' => 'getDescription',
        'storage_file' => 'getStorageFile'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['security_options'] = isset($data['security_options']) ? $data['security_options'] : null;
        $this->container['protocol_type'] = isset($data['protocol_type']) ? $data['protocol_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['storage_file'] = isset($data['storage_file']) ? $data['storage_file'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /*
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
        if ($this->container['login'] === null) {
            $invalidProperties[] = "'login' can't be null";
        }
        if ((strlen($this->container['login']) < 1)) {
            $invalidProperties[] = "invalid value for 'login', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['security_options'] === null) {
            $invalidProperties[] = "'security_options' can't be null";
        }
        if ((strlen($this->container['security_options']) < 1)) {
            $invalidProperties[] = "invalid value for 'security_options', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['protocol_type'] === null) {
            $invalidProperties[] = "'protocol_type' can't be null";
        }
        if ((strlen($this->container['protocol_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'protocol_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['storage_file'] === null) {
            $invalidProperties[] = "'storage_file' can't be null";
        }
        return $invalidProperties;
    }

    /*
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
        if ($this->container['login'] === null) {
            return false;
        }
        if (strlen($this->container['login']) < 1) {
            return false;
        }
        if ($this->container['security_options'] === null) {
            return false;
        }
        if (strlen($this->container['security_options']) < 1) {
            return false;
        }
        if ($this->container['protocol_type'] === null) {
            return false;
        }
        if (strlen($this->container['protocol_type']) < 1) {
            return false;
        }
        if ($this->container['storage_file'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /*
     * Sets host
     *
     * @param string $host Email account host
     *
     * @return $this
     */
    public function setHost($host)
    {

        if ((strlen($host) < 1)) {
            throw new \InvalidArgumentException('invalid length for $host when calling EmailAccountRequest., must be bigger than or equal to 1.');
        }

        $this->container['host'] = $host;

        return $this;
    }

    /*
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /*
     * Sets port
     *
     * @param int $port Email account port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /*
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /*
     * Sets login
     *
     * @param string $login Email account login
     *
     * @return $this
     */
    public function setLogin($login)
    {

        if ((strlen($login) < 1)) {
            throw new \InvalidArgumentException('invalid length for $login when calling EmailAccountRequest., must be bigger than or equal to 1.');
        }

        $this->container['login'] = $login;

        return $this;
    }

    /*
     * Gets security_options
     *
     * @return string
     */
    public function getSecurityOptions()
    {
        return $this->container['security_options'];
    }

    /*
     * Sets security_options
     *
     * @param string $security_options Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     *
     * @return $this
     */
    public function setSecurityOptions($security_options)
    {

        if ((strlen($security_options) < 1)) {
            throw new \InvalidArgumentException('invalid length for $security_options when calling EmailAccountRequest., must be bigger than or equal to 1.');
        }

        $this->container['security_options'] = $security_options;

        return $this;
    }

    /*
     * Gets protocol_type
     *
     * @return string
     */
    public function getProtocolType()
    {
        return $this->container['protocol_type'];
    }

    /*
     * Sets protocol_type
     *
     * @param string $protocol_type Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav
     *
     * @return $this
     */
    public function setProtocolType($protocol_type)
    {

        if ((strlen($protocol_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $protocol_type when calling EmailAccountRequest., must be bigger than or equal to 1.');
        }

        $this->container['protocol_type'] = $protocol_type;

        return $this;
    }

    /*
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /*
     * Sets description
     *
     * @param string $description Email account description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /*
     * Gets storage_file
     *
     * @return \Aspose\Email\Model\StorageFileLocation
     */
    public function getStorageFile()
    {
        return $this->container['storage_file'];
    }

    /*
     * Sets storage_file
     *
     * @param \Aspose\Email\Model\StorageFileLocation $storage_file A storage file location info to store email account
     *
     * @return $this
     */
    public function setStorageFile($storage_file)
    {
        $this->container['storage_file'] = $storage_file;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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