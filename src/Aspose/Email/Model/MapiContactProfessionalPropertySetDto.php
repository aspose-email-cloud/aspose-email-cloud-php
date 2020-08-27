<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactProfessionalPropertySetDto.php">
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
 * MapiContactProfessionalPropertySetDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactProfessionalPropertySetDto
 *
 * @description Properties are used to store professional details for the person represented by the contact
 */
class MapiContactProfessionalPropertySetDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactProfessionalPropertySetDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'title' => 'string',
        'company_name' => 'string',
        'department_name' => 'string',
        'office_location' => 'string',
        'manager_name' => 'string',
        'assistant' => 'string',
        'profession' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'title' => null,
        'company_name' => null,
        'department_name' => null,
        'office_location' => null,
        'manager_name' => null,
        'assistant' => null,
        'profession' => null
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
        'title' => 'title',
        'company_name' => 'companyName',
        'department_name' => 'departmentName',
        'office_location' => 'officeLocation',
        'manager_name' => 'managerName',
        'assistant' => 'assistant',
        'profession' => 'profession'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'company_name' => 'setCompanyName',
        'department_name' => 'setDepartmentName',
        'office_location' => 'setOfficeLocation',
        'manager_name' => 'setManagerName',
        'assistant' => 'setAssistant',
        'profession' => 'setProfession'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'company_name' => 'getCompanyName',
        'department_name' => 'getDepartmentName',
        'office_location' => 'getOfficeLocation',
        'manager_name' => 'getManagerName',
        'assistant' => 'getAssistant',
        'profession' => 'getProfession'
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
     * Initializes a new instance of the MapiContactProfessionalPropertySetDto class.
     *  
     * @param string $title Gets or sets the job title of the contact
     * @param string $company_name Gets or sets the company that employs the contact
     * @param string $department_name Gets or sets the name of the department to which the contact belongs
     * @param string $office_location Gets or sets the location of the office that the contact works in
     * @param string $manager_name Gets or sets the name of the contact's manager
     * @param string $assistant Gets or sets the name of the contact's assistant
     * @param string $profession Gets or sets the profession of the contact
     */
    public function __construct(
        $title = null,
        $company_name = null,
        $department_name = null,
        $office_location = null,
        $manager_name = null,
        $assistant = null,
        $profession = null
    ) {
        $this->container['title'] = null;
        $this->container['company_name'] = null;
        $this->container['department_name'] = null;
        $this->container['office_location'] = null;
        $this->container['manager_name'] = null;
        $this->container['assistant'] = null;
        $this->container['profession'] = null;

        if ($title != null) $this->setTitle($title);
        if ($company_name != null) $this->setCompanyName($company_name);
        if ($department_name != null) $this->setDepartmentName($department_name);
        if ($office_location != null) $this->setOfficeLocation($office_location);
        if ($manager_name != null) $this->setManagerName($manager_name);
        if ($assistant != null) $this->setAssistant($assistant);
        if ($profession != null) $this->setProfession($profession);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Gets or sets the job title of the contact
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $company_name Gets or sets the company that employs the contact
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * @param string $department_name Gets or sets the name of the department to which the contact belongs
     *
     * @return $this
     */
    public function setDepartmentName($department_name)
    {
        $this->container['department_name'] = $department_name;

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
     * @param string $office_location Gets or sets the location of the office that the contact works in
     *
     * @return $this
     */
    public function setOfficeLocation($office_location)
    {
        $this->container['office_location'] = $office_location;

        return $this;
    }

    /**
     * Gets manager_name
     *
     * @return string
     */
    public function getManagerName()
    {
        return $this->container['manager_name'];
    }

    /**
     * Sets manager_name
     *
     * @param string $manager_name Gets or sets the name of the contact's manager
     *
     * @return $this
     */
    public function setManagerName($manager_name)
    {
        $this->container['manager_name'] = $manager_name;

        return $this;
    }

    /**
     * Gets assistant
     *
     * @return string
     */
    public function getAssistant()
    {
        return $this->container['assistant'];
    }

    /**
     * Sets assistant
     *
     * @param string $assistant Gets or sets the name of the contact's assistant
     *
     * @return $this
     */
    public function setAssistant($assistant)
    {
        $this->container['assistant'] = $assistant;

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
     * @param string $profession Gets or sets the profession of the contact
     *
     * @return $this
     */
    public function setProfession($profession)
    {
        $this->container['profession'] = $profession;

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

