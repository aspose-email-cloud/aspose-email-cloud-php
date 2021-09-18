<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContactDto.php">
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
 * ContactDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * ContactDto
 *
 * @description VCard document representation.
 */
class ContactDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ContactDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'associated_persons' => '\Aspose\Email\Model\AssociatedPerson[]',
        'attachments' => '\Aspose\Email\Model\Attachment[]',
        'company_name' => 'string',
        'computer_network_name' => 'string',
        'customer_id' => 'string',
        'department_name' => 'string',
        'display_name' => 'string',
        'email_addresses' => '\Aspose\Email\Model\EmailAddress[]',
        'events' => '\Aspose\Email\Model\CustomerEvent[]',
        'file_as' => 'string',
        'file_as_mapping' => 'string',
        'free_busy_location' => 'string',
        'gender' => 'string',
        'given_name' => 'string',
        'government_id_number' => 'string',
        'hobbies' => 'string',
        'initials' => 'string',
        'instant_messengers' => '\Aspose\Email\Model\InstantMessengerAddress[]',
        'job_title' => 'string',
        'language' => 'string',
        'location' => 'string',
        'middle_name' => 'string',
        'nickname' => 'string',
        'notes' => 'string',
        'notes_format' => 'string',
        'office_location' => 'string',
        'organizational_id_number' => 'string',
        'phone_numbers' => '\Aspose\Email\Model\PhoneNumber[]',
        'photo' => '\Aspose\Email\Model\ContactPhoto',
        'physical_addresses' => '\Aspose\Email\Model\PostalAddress[]',
        'preferred_text_encoding' => 'string',
        'prefix' => 'string',
        'profession' => 'string',
        'suffix' => 'string',
        'surname' => 'string',
        'urls' => '\Aspose\Email\Model\Url[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'associated_persons' => null,
        'attachments' => null,
        'company_name' => null,
        'computer_network_name' => null,
        'customer_id' => null,
        'department_name' => null,
        'display_name' => null,
        'email_addresses' => null,
        'events' => null,
        'file_as' => null,
        'file_as_mapping' => null,
        'free_busy_location' => null,
        'gender' => null,
        'given_name' => null,
        'government_id_number' => null,
        'hobbies' => null,
        'initials' => null,
        'instant_messengers' => null,
        'job_title' => null,
        'language' => null,
        'location' => null,
        'middle_name' => null,
        'nickname' => null,
        'notes' => null,
        'notes_format' => null,
        'office_location' => null,
        'organizational_id_number' => null,
        'phone_numbers' => null,
        'photo' => null,
        'physical_addresses' => null,
        'preferred_text_encoding' => null,
        'prefix' => null,
        'profession' => null,
        'suffix' => null,
        'surname' => null,
        'urls' => null
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
        'associated_persons' => 'associatedPersons',
        'attachments' => 'attachments',
        'company_name' => 'companyName',
        'computer_network_name' => 'computerNetworkName',
        'customer_id' => 'customerId',
        'department_name' => 'departmentName',
        'display_name' => 'displayName',
        'email_addresses' => 'emailAddresses',
        'events' => 'events',
        'file_as' => 'fileAs',
        'file_as_mapping' => 'fileAsMapping',
        'free_busy_location' => 'freeBusyLocation',
        'gender' => 'gender',
        'given_name' => 'givenName',
        'government_id_number' => 'governmentIdNumber',
        'hobbies' => 'hobbies',
        'initials' => 'initials',
        'instant_messengers' => 'instantMessengers',
        'job_title' => 'jobTitle',
        'language' => 'language',
        'location' => 'location',
        'middle_name' => 'middleName',
        'nickname' => 'nickname',
        'notes' => 'notes',
        'notes_format' => 'notesFormat',
        'office_location' => 'officeLocation',
        'organizational_id_number' => 'organizationalIdNumber',
        'phone_numbers' => 'phoneNumbers',
        'photo' => 'photo',
        'physical_addresses' => 'physicalAddresses',
        'preferred_text_encoding' => 'preferredTextEncoding',
        'prefix' => 'prefix',
        'profession' => 'profession',
        'suffix' => 'suffix',
        'surname' => 'surname',
        'urls' => 'urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'associated_persons' => 'setAssociatedPersons',
        'attachments' => 'setAttachments',
        'company_name' => 'setCompanyName',
        'computer_network_name' => 'setComputerNetworkName',
        'customer_id' => 'setCustomerId',
        'department_name' => 'setDepartmentName',
        'display_name' => 'setDisplayName',
        'email_addresses' => 'setEmailAddresses',
        'events' => 'setEvents',
        'file_as' => 'setFileAs',
        'file_as_mapping' => 'setFileAsMapping',
        'free_busy_location' => 'setFreeBusyLocation',
        'gender' => 'setGender',
        'given_name' => 'setGivenName',
        'government_id_number' => 'setGovernmentIdNumber',
        'hobbies' => 'setHobbies',
        'initials' => 'setInitials',
        'instant_messengers' => 'setInstantMessengers',
        'job_title' => 'setJobTitle',
        'language' => 'setLanguage',
        'location' => 'setLocation',
        'middle_name' => 'setMiddleName',
        'nickname' => 'setNickname',
        'notes' => 'setNotes',
        'notes_format' => 'setNotesFormat',
        'office_location' => 'setOfficeLocation',
        'organizational_id_number' => 'setOrganizationalIdNumber',
        'phone_numbers' => 'setPhoneNumbers',
        'photo' => 'setPhoto',
        'physical_addresses' => 'setPhysicalAddresses',
        'preferred_text_encoding' => 'setPreferredTextEncoding',
        'prefix' => 'setPrefix',
        'profession' => 'setProfession',
        'suffix' => 'setSuffix',
        'surname' => 'setSurname',
        'urls' => 'setUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'associated_persons' => 'getAssociatedPersons',
        'attachments' => 'getAttachments',
        'company_name' => 'getCompanyName',
        'computer_network_name' => 'getComputerNetworkName',
        'customer_id' => 'getCustomerId',
        'department_name' => 'getDepartmentName',
        'display_name' => 'getDisplayName',
        'email_addresses' => 'getEmailAddresses',
        'events' => 'getEvents',
        'file_as' => 'getFileAs',
        'file_as_mapping' => 'getFileAsMapping',
        'free_busy_location' => 'getFreeBusyLocation',
        'gender' => 'getGender',
        'given_name' => 'getGivenName',
        'government_id_number' => 'getGovernmentIdNumber',
        'hobbies' => 'getHobbies',
        'initials' => 'getInitials',
        'instant_messengers' => 'getInstantMessengers',
        'job_title' => 'getJobTitle',
        'language' => 'getLanguage',
        'location' => 'getLocation',
        'middle_name' => 'getMiddleName',
        'nickname' => 'getNickname',
        'notes' => 'getNotes',
        'notes_format' => 'getNotesFormat',
        'office_location' => 'getOfficeLocation',
        'organizational_id_number' => 'getOrganizationalIdNumber',
        'phone_numbers' => 'getPhoneNumbers',
        'photo' => 'getPhoto',
        'physical_addresses' => 'getPhysicalAddresses',
        'preferred_text_encoding' => 'getPreferredTextEncoding',
        'prefix' => 'getPrefix',
        'profession' => 'getProfession',
        'suffix' => 'getSuffix',
        'surname' => 'getSurname',
        'urls' => 'getUrls'
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
     * Initializes a new instance of the ContactDto class.
     *  
     * @param \Aspose\Email\Model\AssociatedPerson[] $associated_persons Associated persons.
     * @param \Aspose\Email\Model\Attachment[] $attachments Document attachments.
     * @param string $company_name Company name.
     * @param string $computer_network_name Computer network.
     * @param string $customer_id Customer id.
     * @param string $department_name Department name.
     * @param string $display_name Display name.
     * @param \Aspose\Email\Model\EmailAddress[] $email_addresses Person's email addresses.
     * @param \Aspose\Email\Model\CustomerEvent[] $events Person's events.
     * @param string $file_as A name used for sorting.
     * @param string $file_as_mapping Specifies how to generate and recompute the value of the dispidFileAs property when other contact name properties change. Coincides MS-OXPROPS revision 16.2 from 7/31/2014./nEnum, available values: Empty, DisplayName, FirstName, LastName, Organization, LastFirstMiddle, OrgLastFirstMiddle, LastFirstMiddleOrg, LastFirstMiddle2, LastFirstMiddle3, OrgLastFirstMiddle2, OrgLastFirstMiddle3, LastFirstMiddleOrg2, LastFirstMiddleOrg3, LastFirstMiddleGen, FirstMiddleLastGen, LastFirstMiddleGen2, BestMatch, AccordingToLocale, None
     * @param string $free_busy_location URL path from which a client can retrieve free/busy information for the contact as an iCal file.
     * @param string $gender Enum defines gender of a person./nEnum, available values: Unspecified, Female, Male
     * @param string $given_name Person's given name.
     * @param string $government_id_number Government id number.
     * @param string $hobbies Person's hobbies.
     * @param string $initials Person's initials.
     * @param \Aspose\Email\Model\InstantMessengerAddress[] $instant_messengers Person's instant messenger addresses.
     * @param string $job_title Person's job title.
     * @param string $language Language.
     * @param string $location Person's location.
     * @param string $middle_name Person's middle name.
     * @param string $nickname Person's nickname.
     * @param string $notes Notes.
     * @param string $notes_format Defines format of a text./nEnum, available values: Text, Html
     * @param string $office_location Office location.
     * @param string $organizational_id_number Contains an identifier for the mail user used within the mail user's organization.
     * @param \Aspose\Email\Model\PhoneNumber[] $phone_numbers Person's phone numbers.
     * @param \Aspose\Email\Model\ContactPhoto $photo Person's photo.
     * @param \Aspose\Email\Model\PostalAddress[] $physical_addresses Person's physical addresses.
     * @param string $preferred_text_encoding Encoding for all text properties.
     * @param string $prefix A prefix of a full name such like Mr.(mister), Dr.(doctor) and so on.
     * @param string $profession A job position of a person in a company.
     * @param string $suffix A suffix of a full name such like Jr.(junior), Sr.(senior) and so on.
     * @param string $surname Person's surname.
     * @param \Aspose\Email\Model\Url[] $urls Person's urls.
     */
    public function __construct(
        $associated_persons = null,
        $attachments = null,
        $company_name = null,
        $computer_network_name = null,
        $customer_id = null,
        $department_name = null,
        $display_name = null,
        $email_addresses = null,
        $events = null,
        $file_as = null,
        $file_as_mapping = null,
        $free_busy_location = null,
        $gender = null,
        $given_name = null,
        $government_id_number = null,
        $hobbies = null,
        $initials = null,
        $instant_messengers = null,
        $job_title = null,
        $language = null,
        $location = null,
        $middle_name = null,
        $nickname = null,
        $notes = null,
        $notes_format = null,
        $office_location = null,
        $organizational_id_number = null,
        $phone_numbers = null,
        $photo = null,
        $physical_addresses = null,
        $preferred_text_encoding = null,
        $prefix = null,
        $profession = null,
        $suffix = null,
        $surname = null,
        $urls = null
    ) {
        $this->container['associated_persons'] = null;
        $this->container['attachments'] = null;
        $this->container['company_name'] = null;
        $this->container['computer_network_name'] = null;
        $this->container['customer_id'] = null;
        $this->container['department_name'] = null;
        $this->container['display_name'] = null;
        $this->container['email_addresses'] = null;
        $this->container['events'] = null;
        $this->container['file_as'] = null;
        $this->container['file_as_mapping'] = null;
        $this->container['free_busy_location'] = null;
        $this->container['gender'] = null;
        $this->container['given_name'] = null;
        $this->container['government_id_number'] = null;
        $this->container['hobbies'] = null;
        $this->container['initials'] = null;
        $this->container['instant_messengers'] = null;
        $this->container['job_title'] = null;
        $this->container['language'] = null;
        $this->container['location'] = null;
        $this->container['middle_name'] = null;
        $this->container['nickname'] = null;
        $this->container['notes'] = null;
        $this->container['notes_format'] = null;
        $this->container['office_location'] = null;
        $this->container['organizational_id_number'] = null;
        $this->container['phone_numbers'] = null;
        $this->container['photo'] = null;
        $this->container['physical_addresses'] = null;
        $this->container['preferred_text_encoding'] = null;
        $this->container['prefix'] = null;
        $this->container['profession'] = null;
        $this->container['suffix'] = null;
        $this->container['surname'] = null;
        $this->container['urls'] = null;

        if ($associated_persons != null) $this->setAssociatedPersons($associated_persons);
        if ($attachments != null) $this->setAttachments($attachments);
        if ($company_name != null) $this->setCompanyName($company_name);
        if ($computer_network_name != null) $this->setComputerNetworkName($computer_network_name);
        if ($customer_id != null) $this->setCustomerId($customer_id);
        if ($department_name != null) $this->setDepartmentName($department_name);
        if ($display_name != null) $this->setDisplayName($display_name);
        if ($email_addresses != null) $this->setEmailAddresses($email_addresses);
        if ($events != null) $this->setEvents($events);
        if ($file_as != null) $this->setFileAs($file_as);
        if ($file_as_mapping != null) $this->setFileAsMapping($file_as_mapping);
        if ($free_busy_location != null) $this->setFreeBusyLocation($free_busy_location);
        if ($gender != null) $this->setGender($gender);
        if ($given_name != null) $this->setGivenName($given_name);
        if ($government_id_number != null) $this->setGovernmentIdNumber($government_id_number);
        if ($hobbies != null) $this->setHobbies($hobbies);
        if ($initials != null) $this->setInitials($initials);
        if ($instant_messengers != null) $this->setInstantMessengers($instant_messengers);
        if ($job_title != null) $this->setJobTitle($job_title);
        if ($language != null) $this->setLanguage($language);
        if ($location != null) $this->setLocation($location);
        if ($middle_name != null) $this->setMiddleName($middle_name);
        if ($nickname != null) $this->setNickname($nickname);
        if ($notes != null) $this->setNotes($notes);
        if ($notes_format != null) $this->setNotesFormat($notes_format);
        if ($office_location != null) $this->setOfficeLocation($office_location);
        if ($organizational_id_number != null) $this->setOrganizationalIdNumber($organizational_id_number);
        if ($phone_numbers != null) $this->setPhoneNumbers($phone_numbers);
        if ($photo != null) $this->setPhoto($photo);
        if ($physical_addresses != null) $this->setPhysicalAddresses($physical_addresses);
        if ($preferred_text_encoding != null) $this->setPreferredTextEncoding($preferred_text_encoding);
        if ($prefix != null) $this->setPrefix($prefix);
        if ($profession != null) $this->setProfession($profession);
        if ($suffix != null) $this->setSuffix($suffix);
        if ($surname != null) $this->setSurname($surname);
        if ($urls != null) $this->setUrls($urls);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['file_as_mapping'] === null) {
            $invalidProperties[] = "'file_as_mapping' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        if ($this->container['notes_format'] === null) {
            $invalidProperties[] = "'notes_format' can't be null";
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

        if ($this->container['file_as_mapping'] === null) {
            return false;
        }
        if ($this->container['gender'] === null) {
            return false;
        }
        if ($this->container['notes_format'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets associated_persons
     *
     * @return \Aspose\Email\Model\AssociatedPerson[]
     */
    public function getAssociatedPersons()
    {
        return $this->container['associated_persons'];
    }

    /**
     * Sets associated_persons
     *
     * @param \Aspose\Email\Model\AssociatedPerson[] $associated_persons Associated persons.
     *
     * @return $this
     */
    public function setAssociatedPersons($associated_persons)
    {
        $this->container['associated_persons'] = $associated_persons;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Aspose\Email\Model\Attachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Aspose\Email\Model\Attachment[] $attachments Document attachments.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Company name.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * @param string $computer_network_name Computer network.
     *
     * @return $this
     */
    public function setComputerNetworkName($computer_network_name)
    {
        $this->container['computer_network_name'] = $computer_network_name;

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
     * @param string $customer_id Customer id.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets department_name
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->container['department_name'];
    }

    /**
     * Sets department_name
     *
     * @param string $department_name Department name.
     *
     * @return $this
     */
    public function setDepartmentName($department_name)
    {
        $this->container['department_name'] = $department_name;

        return $this;
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
     * @param string $display_name Display name.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email_addresses
     *
     * @return \Aspose\Email\Model\EmailAddress[]
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param \Aspose\Email\Model\EmailAddress[] $email_addresses Person's email addresses.
     *
     * @return $this
     */
    public function setEmailAddresses($email_addresses)
    {
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Aspose\Email\Model\CustomerEvent[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Aspose\Email\Model\CustomerEvent[] $events Person's events.
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets file_as
     *
     * @return string
     */
    public function getFileAs()
    {
        return $this->container['file_as'];
    }

    /**
     * Sets file_as
     *
     * @param string $file_as A name used for sorting.
     *
     * @return $this
     */
    public function setFileAs($file_as)
    {
        $this->container['file_as'] = $file_as;

        return $this;
    }

    /**
     * Gets file_as_mapping
     *
     * @return string
     */
    public function getFileAsMapping()
    {
        return $this->container['file_as_mapping'];
    }

    /**
     * Sets file_as_mapping
     *
     * @param string $file_as_mapping Specifies how to generate and recompute the value of the dispidFileAs property when other contact name properties change. Coincides MS-OXPROPS revision 16.2 from 7/31/2014./nEnum, available values: Empty, DisplayName, FirstName, LastName, Organization, LastFirstMiddle, OrgLastFirstMiddle, LastFirstMiddleOrg, LastFirstMiddle2, LastFirstMiddle3, OrgLastFirstMiddle2, OrgLastFirstMiddle3, LastFirstMiddleOrg2, LastFirstMiddleOrg3, LastFirstMiddleGen, FirstMiddleLastGen, LastFirstMiddleGen2, BestMatch, AccordingToLocale, None
     *
     * @return $this
     */
    public function setFileAsMapping($file_as_mapping)
    {
        $this->container['file_as_mapping'] = $file_as_mapping;

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
     * @param string $free_busy_location URL path from which a client can retrieve free/busy information for the contact as an iCal file.
     *
     * @return $this
     */
    public function setFreeBusyLocation($free_busy_location)
    {
        $this->container['free_busy_location'] = $free_busy_location;

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
     * @param string $gender Enum defines gender of a person./nEnum, available values: Unspecified, Female, Male
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string $given_name Person's given name.
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

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
     * @param string $government_id_number Government id number.
     *
     * @return $this
     */
    public function setGovernmentIdNumber($government_id_number)
    {
        $this->container['government_id_number'] = $government_id_number;

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
     * @param string $hobbies Person's hobbies.
     *
     * @return $this
     */
    public function setHobbies($hobbies)
    {
        $this->container['hobbies'] = $hobbies;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string $initials Person's initials.
     *
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

        return $this;
    }

    /**
     * Gets instant_messengers
     *
     * @return \Aspose\Email\Model\InstantMessengerAddress[]
     */
    public function getInstantMessengers()
    {
        return $this->container['instant_messengers'];
    }

    /**
     * Sets instant_messengers
     *
     * @param \Aspose\Email\Model\InstantMessengerAddress[] $instant_messengers Person's instant messenger addresses.
     *
     * @return $this
     */
    public function setInstantMessengers($instant_messengers)
    {
        $this->container['instant_messengers'] = $instant_messengers;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title Person's job title.
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

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
     * @param string $language Language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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
     * @param string $location Person's location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name Person's middle name.
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname Person's nickname.
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

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
     * @param string $notes Notes.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets notes_format
     *
     * @return string
     */
    public function getNotesFormat()
    {
        return $this->container['notes_format'];
    }

    /**
     * Sets notes_format
     *
     * @param string $notes_format Defines format of a text./nEnum, available values: Text, Html
     *
     * @return $this
     */
    public function setNotesFormat($notes_format)
    {
        $this->container['notes_format'] = $notes_format;

        return $this;
    }

    /**
     * Gets office_location
     *
     * @return string
     */
    public function getOfficeLocation()
    {
        return $this->container['office_location'];
    }

    /**
     * Sets office_location
     *
     * @param string $office_location Office location.
     *
     * @return $this
     */
    public function setOfficeLocation($office_location)
    {
        $this->container['office_location'] = $office_location;

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
     * @param string $organizational_id_number Contains an identifier for the mail user used within the mail user's organization.
     *
     * @return $this
     */
    public function setOrganizationalIdNumber($organizational_id_number)
    {
        $this->container['organizational_id_number'] = $organizational_id_number;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Aspose\Email\Model\PhoneNumber[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Aspose\Email\Model\PhoneNumber[] $phone_numbers Person's phone numbers.
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets photo
     *
     * @return \Aspose\Email\Model\ContactPhoto
     */
    public function getPhoto()
    {
        return $this->container['photo'];
    }

    /**
     * Sets photo
     *
     * @param \Aspose\Email\Model\ContactPhoto $photo Person's photo.
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
     * @return \Aspose\Email\Model\PostalAddress[]
     */
    public function getPhysicalAddresses()
    {
        return $this->container['physical_addresses'];
    }

    /**
     * Sets physical_addresses
     *
     * @param \Aspose\Email\Model\PostalAddress[] $physical_addresses Person's physical addresses.
     *
     * @return $this
     */
    public function setPhysicalAddresses($physical_addresses)
    {
        $this->container['physical_addresses'] = $physical_addresses;

        return $this;
    }

    /**
     * Gets preferred_text_encoding
     *
     * @return string
     */
    public function getPreferredTextEncoding()
    {
        return $this->container['preferred_text_encoding'];
    }

    /**
     * Sets preferred_text_encoding
     *
     * @param string $preferred_text_encoding Encoding for all text properties.
     *
     * @return $this
     */
    public function setPreferredTextEncoding($preferred_text_encoding)
    {
        $this->container['preferred_text_encoding'] = $preferred_text_encoding;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string $prefix A prefix of a full name such like Mr.(mister), Dr.(doctor) and so on.
     *
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->container['profession'];
    }

    /**
     * Sets profession
     *
     * @param string $profession A job position of a person in a company.
     *
     * @return $this
     */
    public function setProfession($profession)
    {
        $this->container['profession'] = $profession;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string $suffix A suffix of a full name such like Jr.(junior), Sr.(senior) and so on.
     *
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname Person's surname.
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return \Aspose\Email\Model\Url[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param \Aspose\Email\Model\Url[] $urls Person's urls.
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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

