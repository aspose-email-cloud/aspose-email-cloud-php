<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactPersonalInfoPropertySetDto.php">
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
 * MapiContactPersonalInfoPropertySetDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactPersonalInfoPropertySetDto
 *
 * @description Specify other additional contact information.
 */
class MapiContactPersonalInfoPropertySetDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactPersonalInfoPropertySetDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'spouse_name' => 'string',
        'personal_home_page' => 'string',
        'language' => 'string',
        'notes' => 'string',
        'hobbies' => 'string',
        'location' => 'string',
        'instant_messaging_address' => 'string',
        'organizational_id_number' => 'string',
        'customer_id' => 'string',
        'government_id_number' => 'string',
        'free_busy_location' => 'string',
        'account' => 'string',
        'html' => 'string',
        'business_home_page' => 'string',
        'ftp_site' => 'string',
        'computer_network_name' => 'string',
        'gender' => 'string',
        'referred_by_name' => 'string',
        'children' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'spouse_name' => null,
        'personal_home_page' => null,
        'language' => null,
        'notes' => null,
        'hobbies' => null,
        'location' => null,
        'instant_messaging_address' => null,
        'organizational_id_number' => null,
        'customer_id' => null,
        'government_id_number' => null,
        'free_busy_location' => null,
        'account' => null,
        'html' => null,
        'business_home_page' => null,
        'ftp_site' => null,
        'computer_network_name' => null,
        'gender' => null,
        'referred_by_name' => null,
        'children' => null
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
        'spouse_name' => 'spouseName',
        'personal_home_page' => 'personalHomePage',
        'language' => 'language',
        'notes' => 'notes',
        'hobbies' => 'hobbies',
        'location' => 'location',
        'instant_messaging_address' => 'instantMessagingAddress',
        'organizational_id_number' => 'organizationalIdNumber',
        'customer_id' => 'customerId',
        'government_id_number' => 'governmentIdNumber',
        'free_busy_location' => 'freeBusyLocation',
        'account' => 'account',
        'html' => 'html',
        'business_home_page' => 'businessHomePage',
        'ftp_site' => 'ftpSite',
        'computer_network_name' => 'computerNetworkName',
        'gender' => 'gender',
        'referred_by_name' => 'referredByName',
        'children' => 'children'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'spouse_name' => 'setSpouseName',
        'personal_home_page' => 'setPersonalHomePage',
        'language' => 'setLanguage',
        'notes' => 'setNotes',
        'hobbies' => 'setHobbies',
        'location' => 'setLocation',
        'instant_messaging_address' => 'setInstantMessagingAddress',
        'organizational_id_number' => 'setOrganizationalIdNumber',
        'customer_id' => 'setCustomerId',
        'government_id_number' => 'setGovernmentIdNumber',
        'free_busy_location' => 'setFreeBusyLocation',
        'account' => 'setAccount',
        'html' => 'setHtml',
        'business_home_page' => 'setBusinessHomePage',
        'ftp_site' => 'setFtpSite',
        'computer_network_name' => 'setComputerNetworkName',
        'gender' => 'setGender',
        'referred_by_name' => 'setReferredByName',
        'children' => 'setChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'spouse_name' => 'getSpouseName',
        'personal_home_page' => 'getPersonalHomePage',
        'language' => 'getLanguage',
        'notes' => 'getNotes',
        'hobbies' => 'getHobbies',
        'location' => 'getLocation',
        'instant_messaging_address' => 'getInstantMessagingAddress',
        'organizational_id_number' => 'getOrganizationalIdNumber',
        'customer_id' => 'getCustomerId',
        'government_id_number' => 'getGovernmentIdNumber',
        'free_busy_location' => 'getFreeBusyLocation',
        'account' => 'getAccount',
        'html' => 'getHtml',
        'business_home_page' => 'getBusinessHomePage',
        'ftp_site' => 'getFtpSite',
        'computer_network_name' => 'getComputerNetworkName',
        'gender' => 'getGender',
        'referred_by_name' => 'getReferredByName',
        'children' => 'getChildren'
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
     * Initializes a new instance of the MapiContactPersonalInfoPropertySetDto class.
     *  
     * @param string $spouse_name Specifies the name of the contact's spouse/partner
     * @param string $personal_home_page Specifies the contact's personal web page URL
     * @param string $language Specifies the language that the contact uses
     * @param string $notes Specifies the additional notes
     * @param string $hobbies Specifies the hobbies of the contact
     * @param string $location Specifies the location of the contact
     * @param string $instant_messaging_address Specifies the contact's instant messaging address
     * @param string $organizational_id_number Specifies an organizational ID number for the contact
     * @param string $customer_id Specifies the contact's customer ID number
     * @param string $government_id_number Specifies the contact's government ID number
     * @param string $free_busy_location Specifies a URL path from which a client can retrieve free/busy information for the contact as an iCal file
     * @param string $account Specifies the account name of the contact
     * @param string $html Specifies the contact's business web page URL
     * @param string $business_home_page Specifies the contact's business web page URL
     * @param string $ftp_site Specifies the contact's File Transfer Protocol (FTP) URL
     * @param string $computer_network_name Specifies the name of the network to which the contact's computer is connected
     * @param string $gender Gender of the contact. Enum, available values: Unspecified, Female, Male
     * @param string $referred_by_name Specifies the name of the person who referred this contact to the user
     * @param string[] $children Contains a list of names of children.
     */
    public function __construct(
        $spouse_name = null,
        $personal_home_page = null,
        $language = null,
        $notes = null,
        $hobbies = null,
        $location = null,
        $instant_messaging_address = null,
        $organizational_id_number = null,
        $customer_id = null,
        $government_id_number = null,
        $free_busy_location = null,
        $account = null,
        $html = null,
        $business_home_page = null,
        $ftp_site = null,
        $computer_network_name = null,
        $gender = null,
        $referred_by_name = null,
        $children = null
    ) {
        $this->container['spouse_name'] = null;
        $this->container['personal_home_page'] = null;
        $this->container['language'] = null;
        $this->container['notes'] = null;
        $this->container['hobbies'] = null;
        $this->container['location'] = null;
        $this->container['instant_messaging_address'] = null;
        $this->container['organizational_id_number'] = null;
        $this->container['customer_id'] = null;
        $this->container['government_id_number'] = null;
        $this->container['free_busy_location'] = null;
        $this->container['account'] = null;
        $this->container['html'] = null;
        $this->container['business_home_page'] = null;
        $this->container['ftp_site'] = null;
        $this->container['computer_network_name'] = null;
        $this->container['gender'] = null;
        $this->container['referred_by_name'] = null;
        $this->container['children'] = null;

        if ($spouse_name != null) $this->setSpouseName($spouse_name);
        if ($personal_home_page != null) $this->setPersonalHomePage($personal_home_page);
        if ($language != null) $this->setLanguage($language);
        if ($notes != null) $this->setNotes($notes);
        if ($hobbies != null) $this->setHobbies($hobbies);
        if ($location != null) $this->setLocation($location);
        if ($instant_messaging_address != null) $this->setInstantMessagingAddress($instant_messaging_address);
        if ($organizational_id_number != null) $this->setOrganizationalIdNumber($organizational_id_number);
        if ($customer_id != null) $this->setCustomerId($customer_id);
        if ($government_id_number != null) $this->setGovernmentIdNumber($government_id_number);
        if ($free_busy_location != null) $this->setFreeBusyLocation($free_busy_location);
        if ($account != null) $this->setAccount($account);
        if ($html != null) $this->setHtml($html);
        if ($business_home_page != null) $this->setBusinessHomePage($business_home_page);
        if ($ftp_site != null) $this->setFtpSite($ftp_site);
        if ($computer_network_name != null) $this->setComputerNetworkName($computer_network_name);
        if ($gender != null) $this->setGender($gender);
        if ($referred_by_name != null) $this->setReferredByName($referred_by_name);
        if ($children != null) $this->setChildren($children);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
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

        if ($this->container['gender'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets spouse_name
     *
     * @return string
     */
    public function getSpouseName()
    {
        return $this->container['spouse_name'];
    }

    /**
     * Sets spouse_name
     *
     * @param string $spouse_name Specifies the name of the contact's spouse/partner
     *
     * @return $this
     */
    public function setSpouseName($spouse_name)
    {
        $this->container['spouse_name'] = $spouse_name;

        return $this;
    }

    /**
     * Gets personal_home_page
     *
     * @return string
     */
    public function getPersonalHomePage()
    {
        return $this->container['personal_home_page'];
    }

    /**
     * Sets personal_home_page
     *
     * @param string $personal_home_page Specifies the contact's personal web page URL
     *
     * @return $this
     */
    public function setPersonalHomePage($personal_home_page)
    {
        $this->container['personal_home_page'] = $personal_home_page;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Specifies the language that the contact uses
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Specifies the additional notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets hobbies
     *
     * @return string
     */
    public function getHobbies()
    {
        return $this->container['hobbies'];
    }

    /**
     * Sets hobbies
     *
     * @param string $hobbies Specifies the hobbies of the contact
     *
     * @return $this
     */
    public function setHobbies($hobbies)
    {
        $this->container['hobbies'] = $hobbies;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Specifies the location of the contact
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets instant_messaging_address
     *
     * @return string
     */
    public function getInstantMessagingAddress()
    {
        return $this->container['instant_messaging_address'];
    }

    /**
     * Sets instant_messaging_address
     *
     * @param string $instant_messaging_address Specifies the contact's instant messaging address
     *
     * @return $this
     */
    public function setInstantMessagingAddress($instant_messaging_address)
    {
        $this->container['instant_messaging_address'] = $instant_messaging_address;

        return $this;
    }

    /**
     * Gets organizational_id_number
     *
     * @return string
     */
    public function getOrganizationalIdNumber()
    {
        return $this->container['organizational_id_number'];
    }

    /**
     * Sets organizational_id_number
     *
     * @param string $organizational_id_number Specifies an organizational ID number for the contact
     *
     * @return $this
     */
    public function setOrganizationalIdNumber($organizational_id_number)
    {
        $this->container['organizational_id_number'] = $organizational_id_number;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id Specifies the contact's customer ID number
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets government_id_number
     *
     * @return string
     */
    public function getGovernmentIdNumber()
    {
        return $this->container['government_id_number'];
    }

    /**
     * Sets government_id_number
     *
     * @param string $government_id_number Specifies the contact's government ID number
     *
     * @return $this
     */
    public function setGovernmentIdNumber($government_id_number)
    {
        $this->container['government_id_number'] = $government_id_number;

        return $this;
    }

    /**
     * Gets free_busy_location
     *
     * @return string
     */
    public function getFreeBusyLocation()
    {
        return $this->container['free_busy_location'];
    }

    /**
     * Sets free_busy_location
     *
     * @param string $free_busy_location Specifies a URL path from which a client can retrieve free/busy information for the contact as an iCal file
     *
     * @return $this
     */
    public function setFreeBusyLocation($free_busy_location)
    {
        $this->container['free_busy_location'] = $free_busy_location;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string $account Specifies the account name of the contact
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html Specifies the contact's business web page URL
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets business_home_page
     *
     * @return string
     */
    public function getBusinessHomePage()
    {
        return $this->container['business_home_page'];
    }

    /**
     * Sets business_home_page
     *
     * @param string $business_home_page Specifies the contact's business web page URL
     *
     * @return $this
     */
    public function setBusinessHomePage($business_home_page)
    {
        $this->container['business_home_page'] = $business_home_page;

        return $this;
    }

    /**
     * Gets ftp_site
     *
     * @return string
     */
    public function getFtpSite()
    {
        return $this->container['ftp_site'];
    }

    /**
     * Sets ftp_site
     *
     * @param string $ftp_site Specifies the contact's File Transfer Protocol (FTP) URL
     *
     * @return $this
     */
    public function setFtpSite($ftp_site)
    {
        $this->container['ftp_site'] = $ftp_site;

        return $this;
    }

    /**
     * Gets computer_network_name
     *
     * @return string
     */
    public function getComputerNetworkName()
    {
        return $this->container['computer_network_name'];
    }

    /**
     * Sets computer_network_name
     *
     * @param string $computer_network_name Specifies the name of the network to which the contact's computer is connected
     *
     * @return $this
     */
    public function setComputerNetworkName($computer_network_name)
    {
        $this->container['computer_network_name'] = $computer_network_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender Gender of the contact. Enum, available values: Unspecified, Female, Male
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets referred_by_name
     *
     * @return string
     */
    public function getReferredByName()
    {
        return $this->container['referred_by_name'];
    }

    /**
     * Sets referred_by_name
     *
     * @param string $referred_by_name Specifies the name of the person who referred this contact to the user
     *
     * @return $this
     */
    public function setReferredByName($referred_by_name)
    {
        $this->container['referred_by_name'] = $referred_by_name;

        return $this;
    }

    /**
     * Gets children
     *
     * @return string[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param string[] $children Contains a list of names of children.
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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

