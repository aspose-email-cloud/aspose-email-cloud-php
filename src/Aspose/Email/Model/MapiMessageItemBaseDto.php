<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiMessageItemBaseDto.php">
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
 * MapiMessageItemBaseDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiMessageItemBaseDto
 *
 * @description Base Dto for MapiMessage, MapiCalendar or MapiContact
 */
class MapiMessageItemBaseDto implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiMessageItemBaseDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'attachments' => '\Aspose\Email\Model\MapiAttachmentDto[]',
        'billing' => 'string',
        'body' => 'string',
        'body_html' => 'string',
        'body_rtf' => 'string',
        'body_type' => 'string',
        'categories' => 'string[]',
        'companies' => 'string[]',
        'item_id' => 'string',
        'message_class' => 'string',
        'mileage' => 'string',
        'recipients' => '\Aspose\Email\Model\MapiRecipientDto[]',
        'sensitivity' => 'string',
        'subject' => 'string',
        'subject_prefix' => 'string',
        'properties' => '\Aspose\Email\Model\MapiPropertyDto[]',
        'discriminator' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'attachments' => null,
        'billing' => null,
        'body' => null,
        'body_html' => null,
        'body_rtf' => null,
        'body_type' => null,
        'categories' => null,
        'companies' => null,
        'item_id' => null,
        'message_class' => null,
        'mileage' => null,
        'recipients' => null,
        'sensitivity' => null,
        'subject' => null,
        'subject_prefix' => null,
        'properties' => null,
        'discriminator' => null
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
        'attachments' => 'attachments',
        'billing' => 'billing',
        'body' => 'body',
        'body_html' => 'bodyHtml',
        'body_rtf' => 'bodyRtf',
        'body_type' => 'bodyType',
        'categories' => 'categories',
        'companies' => 'companies',
        'item_id' => 'itemId',
        'message_class' => 'messageClass',
        'mileage' => 'mileage',
        'recipients' => 'recipients',
        'sensitivity' => 'sensitivity',
        'subject' => 'subject',
        'subject_prefix' => 'subjectPrefix',
        'properties' => 'properties',
        'discriminator' => 'discriminator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'billing' => 'setBilling',
        'body' => 'setBody',
        'body_html' => 'setBodyHtml',
        'body_rtf' => 'setBodyRtf',
        'body_type' => 'setBodyType',
        'categories' => 'setCategories',
        'companies' => 'setCompanies',
        'item_id' => 'setItemId',
        'message_class' => 'setMessageClass',
        'mileage' => 'setMileage',
        'recipients' => 'setRecipients',
        'sensitivity' => 'setSensitivity',
        'subject' => 'setSubject',
        'subject_prefix' => 'setSubjectPrefix',
        'properties' => 'setProperties',
        'discriminator' => 'setDiscriminator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'billing' => 'getBilling',
        'body' => 'getBody',
        'body_html' => 'getBodyHtml',
        'body_rtf' => 'getBodyRtf',
        'body_type' => 'getBodyType',
        'categories' => 'getCategories',
        'companies' => 'getCompanies',
        'item_id' => 'getItemId',
        'message_class' => 'getMessageClass',
        'mileage' => 'getMileage',
        'recipients' => 'getRecipients',
        'sensitivity' => 'getSensitivity',
        'subject' => 'getSubject',
        'subject_prefix' => 'getSubjectPrefix',
        'properties' => 'getProperties',
        'discriminator' => 'getDiscriminator'
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
     * Initializes a new instance of the MapiMessageItemBaseDto class.
     *  
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Message item attachments.
     * @param string $billing Billing information associated with an item.
     * @param string $body Message text.
     * @param string $body_html Gets the BodyRtf of the message converted to HTML, if present, otherwise an empty string.
     * @param string $body_rtf RTF formatted message text.
     * @param string $body_type The content type of message body. Enum, available values: PlainText, Html, Rtf
     * @param string[] $categories Contains keywords or categories for the message object.
     * @param string[] $companies Contains the names of the companies that are associated with an item.
     * @param string $item_id The item id, uses with a server.
     * @param string $message_class Case-sensitive string that identifies the sender-defined message class, such as IPM.Note. The message class specifies the type, purpose, or content of the message.
     * @param string $mileage Contains the mileage information that is associated with an item.
     * @param \Aspose\Email\Model\MapiRecipientDto[] $recipients Recipients of the message.
     * @param string $sensitivity Contains values that indicate the message sensitivity. Enum, available values: None, Personal, Private, CompanyConfidential
     * @param string $subject Subject of the message.
     * @param string $subject_prefix Subject prefix that typically indicates some action on a message, such as \"FW: \" for forwarding.
     * @param \Aspose\Email\Model\MapiPropertyDto[] $properties List of MAPI properties
     * @param string $discriminator 
     */
    public function __construct(
        $attachments = null,
        $billing = null,
        $body = null,
        $body_html = null,
        $body_rtf = null,
        $body_type = null,
        $categories = null,
        $companies = null,
        $item_id = null,
        $message_class = null,
        $mileage = null,
        $recipients = null,
        $sensitivity = null,
        $subject = null,
        $subject_prefix = null,
        $properties = null
        
    ) {
        $this->container['attachments'] = null;
        $this->container['billing'] = null;
        $this->container['body'] = null;
        $this->container['body_html'] = null;
        $this->container['body_rtf'] = null;
        $this->container['body_type'] = null;
        $this->container['categories'] = null;
        $this->container['companies'] = null;
        $this->container['item_id'] = null;
        $this->container['message_class'] = null;
        $this->container['mileage'] = null;
        $this->container['recipients'] = null;
        $this->container['sensitivity'] = null;
        $this->container['subject'] = null;
        $this->container['subject_prefix'] = null;
        $this->container['properties'] = null;

        if ($attachments != null) $this->setAttachments($attachments);
        if ($billing != null) $this->setBilling($billing);
        if ($body != null) $this->setBody($body);
        if ($body_html != null) $this->setBodyHtml($body_html);
        if ($body_rtf != null) $this->setBodyRtf($body_rtf);
        if ($body_type != null) $this->setBodyType($body_type);
        if ($categories != null) $this->setCategories($categories);
        if ($companies != null) $this->setCompanies($companies);
        if ($item_id != null) $this->setItemId($item_id);
        if ($message_class != null) $this->setMessageClass($message_class);
        if ($mileage != null) $this->setMileage($mileage);
        if ($recipients != null) $this->setRecipients($recipients);
        if ($sensitivity != null) $this->setSensitivity($sensitivity);
        if ($subject != null) $this->setSubject($subject);
        if ($subject_prefix != null) $this->setSubjectPrefix($subject_prefix);
        if ($properties != null) $this->setProperties($properties);
        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['body_type'] === null) {
            $invalidProperties[] = "'body_type' can't be null";
        }
        if ($this->container['sensitivity'] === null) {
            $invalidProperties[] = "'sensitivity' can't be null";
        }
        if ($this->container['discriminator'] === null) {
            $invalidProperties[] = "'discriminator' can't be null";
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

        if ($this->container['body_type'] === null) {
            return false;
        }
        if ($this->container['sensitivity'] === null) {
            return false;
        }
        if ($this->container['discriminator'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attachments
     *
     * @return \Aspose\Email\Model\MapiAttachmentDto[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Message item attachments.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return string
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param string $billing Billing information associated with an item.
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body Message text.
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets body_html
     *
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->container['body_html'];
    }

    /**
     * Sets body_html
     *
     * @param string $body_html Gets the BodyRtf of the message converted to HTML, if present, otherwise an empty string.
     *
     * @return $this
     */
    public function setBodyHtml($body_html)
    {
        $this->container['body_html'] = $body_html;

        return $this;
    }

    /**
     * Gets body_rtf
     *
     * @return string
     */
    public function getBodyRtf()
    {
        return $this->container['body_rtf'];
    }

    /**
     * Sets body_rtf
     *
     * @param string $body_rtf RTF formatted message text.
     *
     * @return $this
     */
    public function setBodyRtf($body_rtf)
    {
        $this->container['body_rtf'] = $body_rtf;

        return $this;
    }

    /**
     * Gets body_type
     *
     * @return string
     */
    public function getBodyType()
    {
        return $this->container['body_type'];
    }

    /**
     * Sets body_type
     *
     * @param string $body_type The content type of message body. Enum, available values: PlainText, Html, Rtf
     *
     * @return $this
     */
    public function setBodyType($body_type)
    {
        $this->container['body_type'] = $body_type;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories Contains keywords or categories for the message object.
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets companies
     *
     * @return string[]
     */
    public function getCompanies()
    {
        return $this->container['companies'];
    }

    /**
     * Sets companies
     *
     * @param string[] $companies Contains the names of the companies that are associated with an item.
     *
     * @return $this
     */
    public function setCompanies($companies)
    {
        $this->container['companies'] = $companies;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id The item id, uses with a server.
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets message_class
     *
     * @return string
     */
    public function getMessageClass()
    {
        return $this->container['message_class'];
    }

    /**
     * Sets message_class
     *
     * @param string $message_class Case-sensitive string that identifies the sender-defined message class, such as IPM.Note. The message class specifies the type, purpose, or content of the message.
     *
     * @return $this
     */
    public function setMessageClass($message_class)
    {
        $this->container['message_class'] = $message_class;

        return $this;
    }

    /**
     * Gets mileage
     *
     * @return string
     */
    public function getMileage()
    {
        return $this->container['mileage'];
    }

    /**
     * Sets mileage
     *
     * @param string $mileage Contains the mileage information that is associated with an item.
     *
     * @return $this
     */
    public function setMileage($mileage)
    {
        $this->container['mileage'] = $mileage;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \Aspose\Email\Model\MapiRecipientDto[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \Aspose\Email\Model\MapiRecipientDto[] $recipients Recipients of the message.
     *
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets sensitivity
     *
     * @return string
     */
    public function getSensitivity()
    {
        return $this->container['sensitivity'];
    }

    /**
     * Sets sensitivity
     *
     * @param string $sensitivity Contains values that indicate the message sensitivity. Enum, available values: None, Personal, Private, CompanyConfidential
     *
     * @return $this
     */
    public function setSensitivity($sensitivity)
    {
        $this->container['sensitivity'] = $sensitivity;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject of the message.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets subject_prefix
     *
     * @return string
     */
    public function getSubjectPrefix()
    {
        return $this->container['subject_prefix'];
    }

    /**
     * Sets subject_prefix
     *
     * @param string $subject_prefix Subject prefix that typically indicates some action on a message, such as \"FW: \" for forwarding.
     *
     * @return $this
     */
    public function setSubjectPrefix($subject_prefix)
    {
        $this->container['subject_prefix'] = $subject_prefix;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Aspose\Email\Model\MapiPropertyDto[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Aspose\Email\Model\MapiPropertyDto[] $properties List of MAPI properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets discriminator
     *
     * @return string
     */
    public function getDiscriminator()
    {
        return $this->container['discriminator'];
    }

    /**
     * Sets discriminator
     *
     * @param string $discriminator discriminator
     *
     * @return $this
     */
    public function setDiscriminator($discriminator)
    {
        /* do nothing */
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

