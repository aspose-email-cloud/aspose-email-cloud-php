<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveOAuthEmailAccountRequest.php">
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
 * SaveOAuthEmailAccountRequest
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * SaveOAuthEmailAccountRequest
 *
 * @description Save email account settings with OAuth request
 */
class SaveOAuthEmailAccountRequest extends EmailAccountRequest 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SaveOAuthEmailAccountRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'client_secret' => 'string',
        'refresh_token' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'client_id' => null,
        'client_secret' => null,
        'refresh_token' => null
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
        'client_id' => 'clientId',
        'client_secret' => 'clientSecret',
        'refresh_token' => 'refreshToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'refresh_token' => 'setRefreshToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'refresh_token' => 'getRefreshToken'
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
     * Initializes a new instance of the SaveOAuthEmailAccountRequest class.
     *  
     * @param string $host Email account host
     * @param int $port Email account port
     * @param string $login Email account login
     * @param string $security_options Security mode for a mail client Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto
     * @param string $protocol_type Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav
     * @param string $description Email account description
     * @param \Aspose\Email\Model\StorageFileLocation $storage_file A storage file location info to store email account
     * @param string $client_id OAuth client identifier
     * @param string $client_secret OAuth client secret
     * @param string $refresh_token OAuth refresh token
     */
    public function __construct($host = null, $port = null, $login = null, $security_options = null, $protocol_type = null, $description = null, $storage_file = null, $client_id = null, $client_secret = null, $refresh_token = null)
    {
        parent::__construct();
        $this->container['client_id'] = null;
        $this->container['client_secret'] = null;
        $this->container['refresh_token'] = null;

        if ($host != null) $this->setHost($host);
        if ($port != null) $this->setPort($port);
        if ($login != null) $this->setLogin($login);
        if ($security_options != null) $this->setSecurityOptions($security_options);
        if ($protocol_type != null) $this->setProtocolType($protocol_type);
        if ($description != null) $this->setDescription($description);
        if ($storage_file != null) $this->setStorageFile($storage_file);
        if ($client_id != null) $this->setClientId($client_id);
        if ($client_secret != null) $this->setClientSecret($client_secret);
        if ($refresh_token != null) $this->setRefreshToken($refresh_token);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ((strlen($this->container['client_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'client_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['client_secret'] === null) {
            $invalidProperties[] = "'client_secret' can't be null";
        }
        if ((strlen($this->container['client_secret']) < 1)) {
            $invalidProperties[] = "invalid value for 'client_secret', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['refresh_token'] === null) {
            $invalidProperties[] = "'refresh_token' can't be null";
        }
        if ((strlen($this->container['refresh_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'refresh_token', the character length must be bigger than or equal to 1.";
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

        if ($this->container['client_id'] === null) {
            return false;
        }
        if (strlen($this->container['client_id']) < 1) {
            return false;
        }
        if ($this->container['client_secret'] === null) {
            return false;
        }
        if (strlen($this->container['client_secret']) < 1) {
            return false;
        }
        if ($this->container['refresh_token'] === null) {
            return false;
        }
        if (strlen($this->container['refresh_token']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id OAuth client identifier
     *
     * @return $this
     */
    public function setClientId($client_id)
    {

        if ((strlen($client_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client_id when calling SaveOAuthEmailAccountRequest., must be bigger than or equal to 1.');
        }

        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string $client_secret OAuth client secret
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {

        if ((strlen($client_secret) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client_secret when calling SaveOAuthEmailAccountRequest., must be bigger than or equal to 1.');
        }

        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string $refresh_token OAuth refresh token
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {

        if ((strlen($refresh_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $refresh_token when calling SaveOAuthEmailAccountRequest., must be bigger than or equal to 1.');
        }

        $this->container['refresh_token'] = $refresh_token;

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