<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiCalendarAttendeesDto.php">
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
 * MapiCalendarAttendeesDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiCalendarAttendeesDto
 *
 * @description Mapi calendar attendees.
 */
class MapiCalendarAttendeesDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiCalendarAttendeesDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appointment_recipients' => '\Aspose\Email\Model\MapiRecipientDto[]',
        'appointment_unsendable_recipients' => '\Aspose\Email\Model\MapiRecipientDto[]',
        'not_allow_propose' => 'bool',
        'response_requested' => 'bool'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appointment_recipients' => null,
        'appointment_unsendable_recipients' => null,
        'not_allow_propose' => null,
        'response_requested' => null
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
        'appointment_recipients' => 'appointmentRecipients',
        'appointment_unsendable_recipients' => 'appointmentUnsendableRecipients',
        'not_allow_propose' => 'notAllowPropose',
        'response_requested' => 'responseRequested'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_recipients' => 'setAppointmentRecipients',
        'appointment_unsendable_recipients' => 'setAppointmentUnsendableRecipients',
        'not_allow_propose' => 'setNotAllowPropose',
        'response_requested' => 'setResponseRequested'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_recipients' => 'getAppointmentRecipients',
        'appointment_unsendable_recipients' => 'getAppointmentUnsendableRecipients',
        'not_allow_propose' => 'getNotAllowPropose',
        'response_requested' => 'getResponseRequested'
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
     * Initializes a new instance of the MapiCalendarAttendeesDto class.
     *  
     * @param \Aspose\Email\Model\MapiRecipientDto[] $appointment_recipients List of attendees.
     * @param \Aspose\Email\Model\MapiRecipientDto[] $appointment_unsendable_recipients List of unsendable attendees.
     * @param bool $not_allow_propose Value indicating whether attendees are not allowed to propose a new date and/or time for the meeting.
     * @param bool $response_requested Value indicating whether a response is requested to a Message object.
     */
    public function __construct($appointment_recipients = null, $appointment_unsendable_recipients = null, $not_allow_propose = null, $response_requested = null)
    {
        $this->container['appointment_recipients'] = null;
        $this->container['appointment_unsendable_recipients'] = null;
        $this->container['not_allow_propose'] = null;
        $this->container['response_requested'] = null;

        if ($appointment_recipients != null) $this->setAppointmentRecipients($appointment_recipients);
        if ($appointment_unsendable_recipients != null) $this->setAppointmentUnsendableRecipients($appointment_unsendable_recipients);
        if ($not_allow_propose != null) $this->setNotAllowPropose($not_allow_propose);
        if ($response_requested != null) $this->setResponseRequested($response_requested);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['not_allow_propose'] === null) {
            $invalidProperties[] = "'not_allow_propose' can't be null";
        }
        if ($this->container['response_requested'] === null) {
            $invalidProperties[] = "'response_requested' can't be null";
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

        if ($this->container['not_allow_propose'] === null) {
            return false;
        }
        if ($this->container['response_requested'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets appointment_recipients
     *
     * @return \Aspose\Email\Model\MapiRecipientDto[]
     */
    public function getAppointmentRecipients()
    {
        return $this->container['appointment_recipients'];
    }

    /**
     * Sets appointment_recipients
     *
     * @param \Aspose\Email\Model\MapiRecipientDto[] $appointment_recipients List of attendees.
     *
     * @return $this
     */
    public function setAppointmentRecipients($appointment_recipients)
    {
        $this->container['appointment_recipients'] = $appointment_recipients;

        return $this;
    }

    /**
     * Gets appointment_unsendable_recipients
     *
     * @return \Aspose\Email\Model\MapiRecipientDto[]
     */
    public function getAppointmentUnsendableRecipients()
    {
        return $this->container['appointment_unsendable_recipients'];
    }

    /**
     * Sets appointment_unsendable_recipients
     *
     * @param \Aspose\Email\Model\MapiRecipientDto[] $appointment_unsendable_recipients List of unsendable attendees.
     *
     * @return $this
     */
    public function setAppointmentUnsendableRecipients($appointment_unsendable_recipients)
    {
        $this->container['appointment_unsendable_recipients'] = $appointment_unsendable_recipients;

        return $this;
    }

    /**
     * Gets not_allow_propose
     *
     * @return bool
     */
    public function getNotAllowPropose()
    {
        return $this->container['not_allow_propose'];
    }

    /**
     * Sets not_allow_propose
     *
     * @param bool $not_allow_propose Value indicating whether attendees are not allowed to propose a new date and/or time for the meeting.
     *
     * @return $this
     */
    public function setNotAllowPropose($not_allow_propose)
    {
        $this->container['not_allow_propose'] = $not_allow_propose;

        return $this;
    }

    /**
     * Gets response_requested
     *
     * @return bool
     */
    public function getResponseRequested()
    {
        return $this->container['response_requested'];
    }

    /**
     * Sets response_requested
     *
     * @param bool $response_requested Value indicating whether a response is requested to a Message object.
     *
     * @return $this
     */
    public function setResponseRequested($response_requested)
    {
        $this->container['response_requested'] = $response_requested;

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