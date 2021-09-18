<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContactDtoBuilder.php">
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
 * ContactDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  ContactDto builder.
 */
class ContactDtoBuilder
{
    /**
     * A model to build.
     * @var ContactDto
     */
    private $model;
    /**
     * Initializes a new instance of the ContactDtoBuilder class.
     *
     * @param ContactDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ContactDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets associatedPersons
     * @param \Aspose\Email\Model\AssociatedPerson[] $associatedPersons Associated persons.
     * @return $this
     */
    public function associatedPersons($associatedPersons)
    {
        $this->model->setAssociatedPersons($associatedPersons);
        return $this;
    }
    /**
     * Sets attachments
     * @param \Aspose\Email\Model\Attachment[] $attachments Document attachments.
     * @return $this
     */
    public function attachments($attachments)
    {
        $this->model->setAttachments($attachments);
        return $this;
    }
    /**
     * Sets companyName
     * @param string $companyName Company name.
     * @return $this
     */
    public function companyName($companyName)
    {
        $this->model->setCompanyName($companyName);
        return $this;
    }
    /**
     * Sets computerNetworkName
     * @param string $computerNetworkName Computer network.
     * @return $this
     */
    public function computerNetworkName($computerNetworkName)
    {
        $this->model->setComputerNetworkName($computerNetworkName);
        return $this;
    }
    /**
     * Sets customerId
     * @param string $customerId Customer id.
     * @return $this
     */
    public function customerId($customerId)
    {
        $this->model->setCustomerId($customerId);
        return $this;
    }
    /**
     * Sets departmentName
     * @param string $departmentName Department name.
     * @return $this
     */
    public function departmentName($departmentName)
    {
        $this->model->setDepartmentName($departmentName);
        return $this;
    }
    /**
     * Sets displayName
     * @param string $displayName Display name.
     * @return $this
     */
    public function displayName($displayName)
    {
        $this->model->setDisplayName($displayName);
        return $this;
    }
    /**
     * Sets emailAddresses
     * @param \Aspose\Email\Model\EmailAddress[] $emailAddresses Person's email addresses.
     * @return $this
     */
    public function emailAddresses($emailAddresses)
    {
        $this->model->setEmailAddresses($emailAddresses);
        return $this;
    }
    /**
     * Sets events
     * @param \Aspose\Email\Model\CustomerEvent[] $events Person's events.
     * @return $this
     */
    public function events($events)
    {
        $this->model->setEvents($events);
        return $this;
    }
    /**
     * Sets fileAs
     * @param string $fileAs A name used for sorting.
     * @return $this
     */
    public function fileAs($fileAs)
    {
        $this->model->setFileAs($fileAs);
        return $this;
    }
    /**
     * Sets fileAsMapping
     * @param string $fileAsMapping Specifies how to generate and recompute the value of the dispidFileAs property when other contact name properties change. Coincides MS-OXPROPS revision 16.2 from 7/31/2014./nEnum, available values: Empty, DisplayName, FirstName, LastName, Organization, LastFirstMiddle, OrgLastFirstMiddle, LastFirstMiddleOrg, LastFirstMiddle2, LastFirstMiddle3, OrgLastFirstMiddle2, OrgLastFirstMiddle3, LastFirstMiddleOrg2, LastFirstMiddleOrg3, LastFirstMiddleGen, FirstMiddleLastGen, LastFirstMiddleGen2, BestMatch, AccordingToLocale, None
     * @return $this
     */
    public function fileAsMapping($fileAsMapping)
    {
        $this->model->setFileAsMapping($fileAsMapping);
        return $this;
    }
    /**
     * Sets freeBusyLocation
     * @param string $freeBusyLocation URL path from which a client can retrieve free/busy information for the contact as an iCal file.
     * @return $this
     */
    public function freeBusyLocation($freeBusyLocation)
    {
        $this->model->setFreeBusyLocation($freeBusyLocation);
        return $this;
    }
    /**
     * Sets gender
     * @param string $gender Enum defines gender of a person./nEnum, available values: Unspecified, Female, Male
     * @return $this
     */
    public function gender($gender)
    {
        $this->model->setGender($gender);
        return $this;
    }
    /**
     * Sets givenName
     * @param string $givenName Person's given name.
     * @return $this
     */
    public function givenName($givenName)
    {
        $this->model->setGivenName($givenName);
        return $this;
    }
    /**
     * Sets governmentIdNumber
     * @param string $governmentIdNumber Government id number.
     * @return $this
     */
    public function governmentIdNumber($governmentIdNumber)
    {
        $this->model->setGovernmentIdNumber($governmentIdNumber);
        return $this;
    }
    /**
     * Sets hobbies
     * @param string $hobbies Person's hobbies.
     * @return $this
     */
    public function hobbies($hobbies)
    {
        $this->model->setHobbies($hobbies);
        return $this;
    }
    /**
     * Sets initials
     * @param string $initials Person's initials.
     * @return $this
     */
    public function initials($initials)
    {
        $this->model->setInitials($initials);
        return $this;
    }
    /**
     * Sets instantMessengers
     * @param \Aspose\Email\Model\InstantMessengerAddress[] $instantMessengers Person's instant messenger addresses.
     * @return $this
     */
    public function instantMessengers($instantMessengers)
    {
        $this->model->setInstantMessengers($instantMessengers);
        return $this;
    }
    /**
     * Sets jobTitle
     * @param string $jobTitle Person's job title.
     * @return $this
     */
    public function jobTitle($jobTitle)
    {
        $this->model->setJobTitle($jobTitle);
        return $this;
    }
    /**
     * Sets language
     * @param string $language Language.
     * @return $this
     */
    public function language($language)
    {
        $this->model->setLanguage($language);
        return $this;
    }
    /**
     * Sets location
     * @param string $location Person's location.
     * @return $this
     */
    public function location($location)
    {
        $this->model->setLocation($location);
        return $this;
    }
    /**
     * Sets middleName
     * @param string $middleName Person's middle name.
     * @return $this
     */
    public function middleName($middleName)
    {
        $this->model->setMiddleName($middleName);
        return $this;
    }
    /**
     * Sets nickname
     * @param string $nickname Person's nickname.
     * @return $this
     */
    public function nickname($nickname)
    {
        $this->model->setNickname($nickname);
        return $this;
    }
    /**
     * Sets notes
     * @param string $notes Notes.
     * @return $this
     */
    public function notes($notes)
    {
        $this->model->setNotes($notes);
        return $this;
    }
    /**
     * Sets notesFormat
     * @param string $notesFormat Defines format of a text./nEnum, available values: Text, Html
     * @return $this
     */
    public function notesFormat($notesFormat)
    {
        $this->model->setNotesFormat($notesFormat);
        return $this;
    }
    /**
     * Sets officeLocation
     * @param string $officeLocation Office location.
     * @return $this
     */
    public function officeLocation($officeLocation)
    {
        $this->model->setOfficeLocation($officeLocation);
        return $this;
    }
    /**
     * Sets organizationalIdNumber
     * @param string $organizationalIdNumber Contains an identifier for the mail user used within the mail user's organization.
     * @return $this
     */
    public function organizationalIdNumber($organizationalIdNumber)
    {
        $this->model->setOrganizationalIdNumber($organizationalIdNumber);
        return $this;
    }
    /**
     * Sets phoneNumbers
     * @param \Aspose\Email\Model\PhoneNumber[] $phoneNumbers Person's phone numbers.
     * @return $this
     */
    public function phoneNumbers($phoneNumbers)
    {
        $this->model->setPhoneNumbers($phoneNumbers);
        return $this;
    }
    /**
     * Sets photo
     * @param \Aspose\Email\Model\ContactPhoto $photo Person's photo.
     * @return $this
     */
    public function photo($photo)
    {
        $this->model->setPhoto($photo);
        return $this;
    }
    /**
     * Sets physicalAddresses
     * @param \Aspose\Email\Model\PostalAddress[] $physicalAddresses Person's physical addresses.
     * @return $this
     */
    public function physicalAddresses($physicalAddresses)
    {
        $this->model->setPhysicalAddresses($physicalAddresses);
        return $this;
    }
    /**
     * Sets preferredTextEncoding
     * @param string $preferredTextEncoding Encoding for all text properties.
     * @return $this
     */
    public function preferredTextEncoding($preferredTextEncoding)
    {
        $this->model->setPreferredTextEncoding($preferredTextEncoding);
        return $this;
    }
    /**
     * Sets prefix
     * @param string $prefix A prefix of a full name such like Mr.(mister), Dr.(doctor) and so on.
     * @return $this
     */
    public function prefix($prefix)
    {
        $this->model->setPrefix($prefix);
        return $this;
    }
    /**
     * Sets profession
     * @param string $profession A job position of a person in a company.
     * @return $this
     */
    public function profession($profession)
    {
        $this->model->setProfession($profession);
        return $this;
    }
    /**
     * Sets suffix
     * @param string $suffix A suffix of a full name such like Jr.(junior), Sr.(senior) and so on.
     * @return $this
     */
    public function suffix($suffix)
    {
        $this->model->setSuffix($suffix);
        return $this;
    }
    /**
     * Sets surname
     * @param string $surname Person's surname.
     * @return $this
     */
    public function surname($surname)
    {
        $this->model->setSurname($surname);
        return $this;
    }
    /**
     * Sets urls
     * @param \Aspose\Email\Model\Url[] $urls Person's urls.
     * @return $this
     */
    public function urls($urls)
    {
        $this->model->setUrls($urls);
        return $this;
    }
}

