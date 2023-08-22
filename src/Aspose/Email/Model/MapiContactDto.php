<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactDto.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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
 * MapiContactDto
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactDto
 *
 * @description Represents outlook contact information.
 */
class MapiContactDto extends MapiMessageItemBaseDto 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'electronic_addresses' => '\Aspose\Email\Model\MapiContactElectronicAddressPropertySetDto',
        'events' => '\Aspose\Email\Model\MapiContactEventPropertySetDto',
        'name_info' => '\Aspose\Email\Model\MapiContactNamePropertySetDto',
        'other_fields' => '\Aspose\Email\Model\MapiContactOtherPropertySetDto',
        'personal_info' => '\Aspose\Email\Model\MapiContactPersonalInfoPropertySetDto',
        'photo' => '\Aspose\Email\Model\MapiContactPhotoDto',
        'physical_addresses' => '\Aspose\Email\Model\MapiContactPhysicalAddressPropertySetDto',
        'professional_info' => '\Aspose\Email\Model\MapiContactProfessionalPropertySetDto',
        'telephones' => '\Aspose\Email\Model\MapiContactTelephonePropertySetDto'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'electronic_addresses' => null,
        'events' => null,
        'name_info' => null,
        'other_fields' => null,
        'personal_info' => null,
        'photo' => null,
        'physical_addresses' => null,
        'professional_info' => null,
        'telephones' => null
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
        'electronic_addresses' => 'electronicAddresses',
        'events' => 'events',
        'name_info' => 'nameInfo',
        'other_fields' => 'otherFields',
        'personal_info' => 'personalInfo',
        'photo' => 'photo',
        'physical_addresses' => 'physicalAddresses',
        'professional_info' => 'professionalInfo',
        'telephones' => 'telephones'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'electronic_addresses' => 'setElectronicAddresses',
        'events' => 'setEvents',
        'name_info' => 'setNameInfo',
        'other_fields' => 'setOtherFields',
        'personal_info' => 'setPersonalInfo',
        'photo' => 'setPhoto',
        'physical_addresses' => 'setPhysicalAddresses',
        'professional_info' => 'setProfessionalInfo',
        'telephones' => 'setTelephones'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'electronic_addresses' => 'getElectronicAddresses',
        'events' => 'getEvents',
        'name_info' => 'getNameInfo',
        'other_fields' => 'getOtherFields',
        'personal_info' => 'getPersonalInfo',
        'photo' => 'getPhoto',
        'physical_addresses' => 'getPhysicalAddresses',
        'professional_info' => 'getProfessionalInfo',
        'telephones' => 'getTelephones'
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
     * Initializes a new instance of the MapiContactDto class.
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
     * @param \Aspose\Email\Model\MapiContactElectronicAddressPropertySetDto $electronic_addresses Specify properties for up to three different e-mail addresses and three different fax addresses.
     * @param \Aspose\Email\Model\MapiContactEventPropertySetDto $events Specify events associated with a contact.
     * @param \Aspose\Email\Model\MapiContactNamePropertySetDto $name_info The properties are used to specify the name of the person represented by the contact.
     * @param \Aspose\Email\Model\MapiContactOtherPropertySetDto $other_fields Specify other fields of contact.
     * @param \Aspose\Email\Model\MapiContactPersonalInfoPropertySetDto $personal_info Specify other additional contact information.
     * @param \Aspose\Email\Model\MapiContactPhotoDto $photo Contact photo.
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressPropertySetDto $physical_addresses Specify three physical addresses: Home Address, Work Address, and Other Address. One of the addresses can be marked as the Mailing Address.
     * @param \Aspose\Email\Model\MapiContactProfessionalPropertySetDto $professional_info Properties are used to store professional details for the person represented by the contact.
     * @param \Aspose\Email\Model\MapiContactTelephonePropertySetDto $telephones Specify telephone numbers for the contact.
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
        ,
        $electronic_addresses = null,
        $events = null,
        $name_info = null,
        $other_fields = null,
        $personal_info = null,
        $photo = null,
        $physical_addresses = null,
        $professional_info = null,
        $telephones = null
    ) {
        parent::__construct();
        $this->container['electronic_addresses'] = null;
        $this->container['events'] = null;
        $this->container['name_info'] = null;
        $this->container['other_fields'] = null;
        $this->container['personal_info'] = null;
        $this->container['photo'] = null;
        $this->container['physical_addresses'] = null;
        $this->container['professional_info'] = null;
        $this->container['telephones'] = null;

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
        if ($electronic_addresses != null) $this->setElectronicAddresses($electronic_addresses);
        if ($events != null) $this->setEvents($events);
        if ($name_info != null) $this->setNameInfo($name_info);
        if ($other_fields != null) $this->setOtherFields($other_fields);
        if ($personal_info != null) $this->setPersonalInfo($personal_info);
        if ($photo != null) $this->setPhoto($photo);
        if ($physical_addresses != null) $this->setPhysicalAddresses($physical_addresses);
        if ($professional_info != null) $this->setProfessionalInfo($professional_info);
        if ($telephones != null) $this->setTelephones($telephones);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets electronic_addresses
     *
     * @return \Aspose\Email\Model\MapiContactElectronicAddressPropertySetDto
     */
    public function getElectronicAddresses()
    {
        return $this->container['electronic_addresses'];
    }

    /**
     * Sets electronic_addresses
     *
     * @param \Aspose\Email\Model\MapiContactElectronicAddressPropertySetDto $electronic_addresses Specify properties for up to three different e-mail addresses and three different fax addresses.
     *
     * @return $this
     */
    public function setElectronicAddresses($electronic_addresses)
    {
        $this->container['electronic_addresses'] = $electronic_addresses;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Aspose\Email\Model\MapiContactEventPropertySetDto
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Aspose\Email\Model\MapiContactEventPropertySetDto $events Specify events associated with a contact.
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets name_info
     *
     * @return \Aspose\Email\Model\MapiContactNamePropertySetDto
     */
    public function getNameInfo()
    {
        return $this->container['name_info'];
    }

    /**
     * Sets name_info
     *
     * @param \Aspose\Email\Model\MapiContactNamePropertySetDto $name_info The properties are used to specify the name of the person represented by the contact.
     *
     * @return $this
     */
    public function setNameInfo($name_info)
    {
        $this->container['name_info'] = $name_info;

        return $this;
    }

    /**
     * Gets other_fields
     *
     * @return \Aspose\Email\Model\MapiContactOtherPropertySetDto
     */
    public function getOtherFields()
    {
        return $this->container['other_fields'];
    }

    /**
     * Sets other_fields
     *
     * @param \Aspose\Email\Model\MapiContactOtherPropertySetDto $other_fields Specify other fields of contact.
     *
     * @return $this
     */
    public function setOtherFields($other_fields)
    {
        $this->container['other_fields'] = $other_fields;

        return $this;
    }

    /**
     * Gets personal_info
     *
     * @return \Aspose\Email\Model\MapiContactPersonalInfoPropertySetDto
     */
    public function getPersonalInfo()
    {
        return $this->container['personal_info'];
    }

    /**
     * Sets personal_info
     *
     * @param \Aspose\Email\Model\MapiContactPersonalInfoPropertySetDto $personal_info Specify other additional contact information.
     *
     * @return $this
     */
    public function setPersonalInfo($personal_info)
    {
        $this->container['personal_info'] = $personal_info;

        return $this;
    }

    /**
     * Gets photo
     *
     * @return \Aspose\Email\Model\MapiContactPhotoDto
     */
    public function getPhoto()
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     *
     * @param \Aspose\Email\Model\MapiContactPhotoDto $photo Contact photo.
     *
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->container['photo'] = $photo;

        return $this;
    }

    /**
     * Gets physical_addresses
     *
     * @return \Aspose\Email\Model\MapiContactPhysicalAddressPropertySetDto
     */
    public function getPhysicalAddresses()
    {
        return $this->container['physical_addresses'];
    }

    /**
     * Sets physical_addresses
     *
     * @param \Aspose\Email\Model\MapiContactPhysicalAddressPropertySetDto $physical_addresses Specify three physical addresses: Home Address, Work Address, and Other Address. One of the addresses can be marked as the Mailing Address.
     *
     * @return $this
     */
    public function setPhysicalAddresses($physical_addresses)
    {
        $this->container['physical_addresses'] = $physical_addresses;

        return $this;
    }

    /**
     * Gets professional_info
     *
     * @return \Aspose\Email\Model\MapiContactProfessionalPropertySetDto
     */
    public function getProfessionalInfo()
    {
        return $this->container['professional_info'];
    }

    /**
     * Sets professional_info
     *
     * @param \Aspose\Email\Model\MapiContactProfessionalPropertySetDto $professional_info Properties are used to store professional details for the person represented by the contact.
     *
     * @return $this
     */
    public function setProfessionalInfo($professional_info)
    {
        $this->container['professional_info'] = $professional_info;

        return $this;
    }

    /**
     * Gets telephones
     *
     * @return \Aspose\Email\Model\MapiContactTelephonePropertySetDto
     */
    public function getTelephones()
    {
        return $this->container['telephones'];
    }

    /**
     * Sets telephones
     *
     * @param \Aspose\Email\Model\MapiContactTelephonePropertySetDto $telephones Specify telephone numbers for the contact.
     *
     * @return $this
     */
    public function setTelephones($telephones)
    {
        $this->container['telephones'] = $telephones;

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

