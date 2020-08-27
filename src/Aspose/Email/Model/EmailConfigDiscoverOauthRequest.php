<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailConfigDiscoverOauthRequest.php">
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
 * EmailConfigDiscoverOauthRequest
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * EmailConfigDiscoverOauthRequest
 *
 */
class EmailConfigDiscoverOauthRequest extends DiscoverEmailConfigRequest 
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailConfigDiscoverOauthRequest";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'client_secret' => 'string',
        'refresh_token' => 'string',
        'request_url' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'client_id' => null,
        'client_secret' => null,
        'refresh_token' => null,
        'request_url' => null
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
        'refresh_token' => 'refreshToken',
        'request_url' => 'requestUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'client_secret' => 'setClientSecret',
        'refresh_token' => 'setRefreshToken',
        'request_url' => 'setRequestUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'client_secret' => 'getClientSecret',
        'refresh_token' => 'getRefreshToken',
        'request_url' => 'getRequestUrl'
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
     * Initializes a new instance of the EmailConfigDiscoverOauthRequest class.
     *  
     * @param string $address Email address to discover.
     * @param bool $fast_processing Turns on fast processing. All discover systems will run in parallel. First discovered result will be returned.
     * @param string $login Email account login. If not specified, address used as a login.
     * @param string $client_id OAuth client id.
     * @param string $client_secret OAuth client secret.
     * @param string $refresh_token OAuth refresh token.
     * @param string $request_url The url to obtain access token. If not specified, will be discovered from email configuration.
     */
    public function __construct(
        $address = null,
        $fast_processing = null,
        $login = null,
        $client_id = null,
        $client_secret = null,
        $refresh_token = null,
        $request_url = null
    ) {
        parent::__construct();
        $this->container['client_id'] = null;
        $this->container['client_secret'] = null;
        $this->container['refresh_token'] = null;
        $this->container['request_url'] = null;

        if ($address != null) $this->setAddress($address);
        if ($fast_processing != null) $this->setFastProcessing($fast_processing);
        if ($login != null) $this->setLogin($login);
        if ($client_id != null) $this->setClientId($client_id);
        if ($client_secret != null) $this->setClientSecret($client_secret);
        if ($refresh_token != null) $this->setRefreshToken($refresh_token);
        if ($request_url != null) $this->setRequestUrl($request_url);
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
     * @param string $client_id OAuth client id.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {

        if ((strlen($client_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client_id when calling EmailConfigDiscoverOauthRequest., must be bigger than or equal to 1.');
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
     * @param string $client_secret OAuth client secret.
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {

        if ((strlen($client_secret) < 1)) {
            throw new \InvalidArgumentException('invalid length for $client_secret when calling EmailConfigDiscoverOauthRequest., must be bigger than or equal to 1.');
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
     * @param string $refresh_token OAuth refresh token.
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {

        if ((strlen($refresh_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $refresh_token when calling EmailConfigDiscoverOauthRequest., must be bigger than or equal to 1.');
        }

        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets request_url
     *
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['request_url'];
    }

    /**
     * Sets request_url
     *
     * @param string $request_url The url to obtain access token. If not specified, will be discovered from email configuration.
     *
     * @return $this
     */
    public function setRequestUrl($request_url)
    {
        $this->container['request_url'] = $request_url;

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

