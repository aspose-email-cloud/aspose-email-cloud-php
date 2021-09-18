<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactPersonalInfoPropertySetDtoBuilder.php">
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
 * MapiContactPersonalInfoPropertySetDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiContactPersonalInfoPropertySetDto builder.
 */
class MapiContactPersonalInfoPropertySetDtoBuilder
{
    /**
     * A model to build.
     * @var MapiContactPersonalInfoPropertySetDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiContactPersonalInfoPropertySetDtoBuilder class.
     *
     * @param MapiContactPersonalInfoPropertySetDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiContactPersonalInfoPropertySetDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets spouseName
     * @param string $spouseName Specifies the name of the contact's spouse/partner
     * @return $this
     */
    public function spouseName($spouseName)
    {
        $this->model->setSpouseName($spouseName);
        return $this;
    }
    /**
     * Sets personalHomePage
     * @param string $personalHomePage Specifies the contact's personal web page URL
     * @return $this
     */
    public function personalHomePage($personalHomePage)
    {
        $this->model->setPersonalHomePage($personalHomePage);
        return $this;
    }
    /**
     * Sets language
     * @param string $language Specifies the language that the contact uses
     * @return $this
     */
    public function language($language)
    {
        $this->model->setLanguage($language);
        return $this;
    }
    /**
     * Sets notes
     * @param string $notes Specifies the additional notes
     * @return $this
     */
    public function notes($notes)
    {
        $this->model->setNotes($notes);
        return $this;
    }
    /**
     * Sets hobbies
     * @param string $hobbies Specifies the hobbies of the contact
     * @return $this
     */
    public function hobbies($hobbies)
    {
        $this->model->setHobbies($hobbies);
        return $this;
    }
    /**
     * Sets location
     * @param string $location Specifies the location of the contact
     * @return $this
     */
    public function location($location)
    {
        $this->model->setLocation($location);
        return $this;
    }
    /**
     * Sets instantMessagingAddress
     * @param string $instantMessagingAddress Specifies the contact's instant messaging address
     * @return $this
     */
    public function instantMessagingAddress($instantMessagingAddress)
    {
        $this->model->setInstantMessagingAddress($instantMessagingAddress);
        return $this;
    }
    /**
     * Sets organizationalIdNumber
     * @param string $organizationalIdNumber Specifies an organizational ID number for the contact
     * @return $this
     */
    public function organizationalIdNumber($organizationalIdNumber)
    {
        $this->model->setOrganizationalIdNumber($organizationalIdNumber);
        return $this;
    }
    /**
     * Sets customerId
     * @param string $customerId Specifies the contact's customer ID number
     * @return $this
     */
    public function customerId($customerId)
    {
        $this->model->setCustomerId($customerId);
        return $this;
    }
    /**
     * Sets governmentIdNumber
     * @param string $governmentIdNumber Specifies the contact's government ID number
     * @return $this
     */
    public function governmentIdNumber($governmentIdNumber)
    {
        $this->model->setGovernmentIdNumber($governmentIdNumber);
        return $this;
    }
    /**
     * Sets freeBusyLocation
     * @param string $freeBusyLocation Specifies a URL path from which a client can retrieve free/busy information for the contact as an iCal file
     * @return $this
     */
    public function freeBusyLocation($freeBusyLocation)
    {
        $this->model->setFreeBusyLocation($freeBusyLocation);
        return $this;
    }
    /**
     * Sets account
     * @param string $account Specifies the account name of the contact
     * @return $this
     */
    public function account($account)
    {
        $this->model->setAccount($account);
        return $this;
    }
    /**
     * Sets html
     * @param string $html Specifies the contact's business web page URL
     * @return $this
     */
    public function html($html)
    {
        $this->model->setHtml($html);
        return $this;
    }
    /**
     * Sets businessHomePage
     * @param string $businessHomePage Specifies the contact's business web page URL
     * @return $this
     */
    public function businessHomePage($businessHomePage)
    {
        $this->model->setBusinessHomePage($businessHomePage);
        return $this;
    }
    /**
     * Sets ftpSite
     * @param string $ftpSite Specifies the contact's File Transfer Protocol (FTP) URL
     * @return $this
     */
    public function ftpSite($ftpSite)
    {
        $this->model->setFtpSite($ftpSite);
        return $this;
    }
    /**
     * Sets computerNetworkName
     * @param string $computerNetworkName Specifies the name of the network to which the contact's computer is connected
     * @return $this
     */
    public function computerNetworkName($computerNetworkName)
    {
        $this->model->setComputerNetworkName($computerNetworkName);
        return $this;
    }
    /**
     * Sets gender
     * @param string $gender Gender of the contact./nEnum, available values: Unspecified, Female, Male
     * @return $this
     */
    public function gender($gender)
    {
        $this->model->setGender($gender);
        return $this;
    }
    /**
     * Sets referredByName
     * @param string $referredByName Specifies the name of the person who referred this contact to the user
     * @return $this
     */
    public function referredByName($referredByName)
    {
        $this->model->setReferredByName($referredByName);
        return $this;
    }
    /**
     * Sets children
     * @param string[] $children Contains a list of names of children.
     * @return $this
     */
    public function children($children)
    {
        $this->model->setChildren($children);
        return $this;
    }
}

