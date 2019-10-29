<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AsposeResponse.php">
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
 * AsposeResponse
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/*
 * AsposeResponse
 *
 */
class AsposeResponse implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "AsposeResponse";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'code' => 'string',
        'status' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'code' => null,
        'status' => null
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
        'code' => 'code',
        'status' => 'status'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'status' => 'setStatus'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'status' => 'getStatus'
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

    const CODE__CONTINUE = 'Continue';
    const CODE_SWITCHING_PROTOCOLS = 'SwitchingProtocols';
    const CODE_PROCESSING = 'Processing';
    const CODE_EARLY_HINTS = 'EarlyHints';
    const CODE_OK = 'OK';
    const CODE_CREATED = 'Created';
    const CODE_ACCEPTED = 'Accepted';
    const CODE_NON_AUTHORITATIVE_INFORMATION = 'NonAuthoritativeInformation';
    const CODE_NO_CONTENT = 'NoContent';
    const CODE_RESET_CONTENT = 'ResetContent';
    const CODE_PARTIAL_CONTENT = 'PartialContent';
    const CODE_MULTI_STATUS = 'MultiStatus';
    const CODE_ALREADY_REPORTED = 'AlreadyReported';
    const CODE_IM_USED = 'IMUsed';
    const CODE_MULTIPLE_CHOICES = 'MultipleChoices';
    const CODE_AMBIGUOUS = 'Ambiguous';
    const CODE_MOVED_PERMANENTLY = 'MovedPermanently';
    const CODE_MOVED = 'Moved';
    const CODE_FOUND = 'Found';
    const CODE_REDIRECT = 'Redirect';
    const CODE_SEE_OTHER = 'SeeOther';
    const CODE_REDIRECT_METHOD = 'RedirectMethod';
    const CODE_NOT_MODIFIED = 'NotModified';
    const CODE_USE_PROXY = 'UseProxy';
    const CODE_UNUSED = 'Unused';
    const CODE_TEMPORARY_REDIRECT = 'TemporaryRedirect';
    const CODE_REDIRECT_KEEP_VERB = 'RedirectKeepVerb';
    const CODE_PERMANENT_REDIRECT = 'PermanentRedirect';
    const CODE_BAD_REQUEST = 'BadRequest';
    const CODE_UNAUTHORIZED = 'Unauthorized';
    const CODE_PAYMENT_REQUIRED = 'PaymentRequired';
    const CODE_FORBIDDEN = 'Forbidden';
    const CODE_NOT_FOUND = 'NotFound';
    const CODE_METHOD_NOT_ALLOWED = 'MethodNotAllowed';
    const CODE_NOT_ACCEPTABLE = 'NotAcceptable';
    const CODE_PROXY_AUTHENTICATION_REQUIRED = 'ProxyAuthenticationRequired';
    const CODE_REQUEST_TIMEOUT = 'RequestTimeout';
    const CODE_CONFLICT = 'Conflict';
    const CODE_GONE = 'Gone';
    const CODE_LENGTH_REQUIRED = 'LengthRequired';
    const CODE_PRECONDITION_FAILED = 'PreconditionFailed';
    const CODE_REQUEST_ENTITY_TOO_LARGE = 'RequestEntityTooLarge';
    const CODE_REQUEST_URI_TOO_LONG = 'RequestUriTooLong';
    const CODE_UNSUPPORTED_MEDIA_TYPE = 'UnsupportedMediaType';
    const CODE_REQUESTED_RANGE_NOT_SATISFIABLE = 'RequestedRangeNotSatisfiable';
    const CODE_EXPECTATION_FAILED = 'ExpectationFailed';
    const CODE_MISDIRECTED_REQUEST = 'MisdirectedRequest';
    const CODE_UNPROCESSABLE_ENTITY = 'UnprocessableEntity';
    const CODE_LOCKED = 'Locked';
    const CODE_FAILED_DEPENDENCY = 'FailedDependency';
    const CODE_UPGRADE_REQUIRED = 'UpgradeRequired';
    const CODE_PRECONDITION_REQUIRED = 'PreconditionRequired';
    const CODE_TOO_MANY_REQUESTS = 'TooManyRequests';
    const CODE_REQUEST_HEADER_FIELDS_TOO_LARGE = 'RequestHeaderFieldsTooLarge';
    const CODE_UNAVAILABLE_FOR_LEGAL_REASONS = 'UnavailableForLegalReasons';
    const CODE_INTERNAL_SERVER_ERROR = 'InternalServerError';
    const CODE_NOT_IMPLEMENTED = 'NotImplemented';
    const CODE_BAD_GATEWAY = 'BadGateway';
    const CODE_SERVICE_UNAVAILABLE = 'ServiceUnavailable';
    const CODE_GATEWAY_TIMEOUT = 'GatewayTimeout';
    const CODE_HTTP_VERSION_NOT_SUPPORTED = 'HttpVersionNotSupported';
    const CODE_VARIANT_ALSO_NEGOTIATES = 'VariantAlsoNegotiates';
    const CODE_INSUFFICIENT_STORAGE = 'InsufficientStorage';
    const CODE_LOOP_DETECTED = 'LoopDetected';
    const CODE_NOT_EXTENDED = 'NotExtended';
    const CODE_NETWORK_AUTHENTICATION_REQUIRED = 'NetworkAuthenticationRequired';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE__CONTINUE,
            self::CODE_SWITCHING_PROTOCOLS,
            self::CODE_PROCESSING,
            self::CODE_EARLY_HINTS,
            self::CODE_OK,
            self::CODE_CREATED,
            self::CODE_ACCEPTED,
            self::CODE_NON_AUTHORITATIVE_INFORMATION,
            self::CODE_NO_CONTENT,
            self::CODE_RESET_CONTENT,
            self::CODE_PARTIAL_CONTENT,
            self::CODE_MULTI_STATUS,
            self::CODE_ALREADY_REPORTED,
            self::CODE_IM_USED,
            self::CODE_MULTIPLE_CHOICES,
            self::CODE_AMBIGUOUS,
            self::CODE_MOVED_PERMANENTLY,
            self::CODE_MOVED,
            self::CODE_FOUND,
            self::CODE_REDIRECT,
            self::CODE_SEE_OTHER,
            self::CODE_REDIRECT_METHOD,
            self::CODE_NOT_MODIFIED,
            self::CODE_USE_PROXY,
            self::CODE_UNUSED,
            self::CODE_TEMPORARY_REDIRECT,
            self::CODE_REDIRECT_KEEP_VERB,
            self::CODE_PERMANENT_REDIRECT,
            self::CODE_BAD_REQUEST,
            self::CODE_UNAUTHORIZED,
            self::CODE_PAYMENT_REQUIRED,
            self::CODE_FORBIDDEN,
            self::CODE_NOT_FOUND,
            self::CODE_METHOD_NOT_ALLOWED,
            self::CODE_NOT_ACCEPTABLE,
            self::CODE_PROXY_AUTHENTICATION_REQUIRED,
            self::CODE_REQUEST_TIMEOUT,
            self::CODE_CONFLICT,
            self::CODE_GONE,
            self::CODE_LENGTH_REQUIRED,
            self::CODE_PRECONDITION_FAILED,
            self::CODE_REQUEST_ENTITY_TOO_LARGE,
            self::CODE_REQUEST_URI_TOO_LONG,
            self::CODE_UNSUPPORTED_MEDIA_TYPE,
            self::CODE_REQUESTED_RANGE_NOT_SATISFIABLE,
            self::CODE_EXPECTATION_FAILED,
            self::CODE_MISDIRECTED_REQUEST,
            self::CODE_UNPROCESSABLE_ENTITY,
            self::CODE_LOCKED,
            self::CODE_FAILED_DEPENDENCY,
            self::CODE_UPGRADE_REQUIRED,
            self::CODE_PRECONDITION_REQUIRED,
            self::CODE_TOO_MANY_REQUESTS,
            self::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE,
            self::CODE_UNAVAILABLE_FOR_LEGAL_REASONS,
            self::CODE_INTERNAL_SERVER_ERROR,
            self::CODE_NOT_IMPLEMENTED,
            self::CODE_BAD_GATEWAY,
            self::CODE_SERVICE_UNAVAILABLE,
            self::CODE_GATEWAY_TIMEOUT,
            self::CODE_HTTP_VERSION_NOT_SUPPORTED,
            self::CODE_VARIANT_ALSO_NEGOTIATES,
            self::CODE_INSUFFICIENT_STORAGE,
            self::CODE_LOOP_DETECTED,
            self::CODE_NOT_EXTENDED,
            self::CODE_NETWORK_AUTHENTICATION_REQUIRED,
        ];
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;

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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($this->container['code'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['code'] === null) {
            return false;
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($this->container['code'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /*
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if ((!is_numeric($code) && !in_array($code, $allowedValues)) || (is_numeric($code) && !in_array($allowedValues[$code], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'code', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['code'] = $code;

        return $this;
    }

    /*
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /*
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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