<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactTelephonePropertySetDto.php">
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
 * MapiContactTelephonePropertySetDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactTelephonePropertySetDto
 *
 * @description Specify optional telephone numbers for the contact.
 */
class MapiContactTelephonePropertySetDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactTelephonePropertySetDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_empty' => 'bool',
        'default_telephone_number' => 'string',
        'use_autocomplete' => 'bool',
        'callback_telephone_number' => 'string',
        'business_telephone_number' => 'string',
        'home_telephone_number' => 'string',
        'primary_telephone_number' => 'string',
        'business2_telephone_number' => 'string',
        'mobile_telephone_number' => 'string',
        'radio_telephone_number' => 'string',
        'car_telephone_number' => 'string',
        'other_telephone_number' => 'string',
        'assistant_telephone_number' => 'string',
        'home2_telephone_number' => 'string',
        'tty_tdd_phone_number' => 'string',
        'company_main_telephone_number' => 'string',
        'telex_number' => 'string',
        'isdn_number' => 'string',
        'pager_telephone_number' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_empty' => null,
        'default_telephone_number' => null,
        'use_autocomplete' => null,
        'callback_telephone_number' => null,
        'business_telephone_number' => null,
        'home_telephone_number' => null,
        'primary_telephone_number' => null,
        'business2_telephone_number' => null,
        'mobile_telephone_number' => null,
        'radio_telephone_number' => null,
        'car_telephone_number' => null,
        'other_telephone_number' => null,
        'assistant_telephone_number' => null,
        'home2_telephone_number' => null,
        'tty_tdd_phone_number' => null,
        'company_main_telephone_number' => null,
        'telex_number' => null,
        'isdn_number' => null,
        'pager_telephone_number' => null
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
        'is_empty' => 'isEmpty',
        'default_telephone_number' => 'defaultTelephoneNumber',
        'use_autocomplete' => 'useAutocomplete',
        'callback_telephone_number' => 'callbackTelephoneNumber',
        'business_telephone_number' => 'businessTelephoneNumber',
        'home_telephone_number' => 'homeTelephoneNumber',
        'primary_telephone_number' => 'primaryTelephoneNumber',
        'business2_telephone_number' => 'business2TelephoneNumber',
        'mobile_telephone_number' => 'mobileTelephoneNumber',
        'radio_telephone_number' => 'radioTelephoneNumber',
        'car_telephone_number' => 'carTelephoneNumber',
        'other_telephone_number' => 'otherTelephoneNumber',
        'assistant_telephone_number' => 'assistantTelephoneNumber',
        'home2_telephone_number' => 'home2TelephoneNumber',
        'tty_tdd_phone_number' => 'ttyTddPhoneNumber',
        'company_main_telephone_number' => 'companyMainTelephoneNumber',
        'telex_number' => 'telexNumber',
        'isdn_number' => 'isdnNumber',
        'pager_telephone_number' => 'pagerTelephoneNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_empty' => 'setIsEmpty',
        'default_telephone_number' => 'setDefaultTelephoneNumber',
        'use_autocomplete' => 'setUseAutocomplete',
        'callback_telephone_number' => 'setCallbackTelephoneNumber',
        'business_telephone_number' => 'setBusinessTelephoneNumber',
        'home_telephone_number' => 'setHomeTelephoneNumber',
        'primary_telephone_number' => 'setPrimaryTelephoneNumber',
        'business2_telephone_number' => 'setBusiness2TelephoneNumber',
        'mobile_telephone_number' => 'setMobileTelephoneNumber',
        'radio_telephone_number' => 'setRadioTelephoneNumber',
        'car_telephone_number' => 'setCarTelephoneNumber',
        'other_telephone_number' => 'setOtherTelephoneNumber',
        'assistant_telephone_number' => 'setAssistantTelephoneNumber',
        'home2_telephone_number' => 'setHome2TelephoneNumber',
        'tty_tdd_phone_number' => 'setTtyTddPhoneNumber',
        'company_main_telephone_number' => 'setCompanyMainTelephoneNumber',
        'telex_number' => 'setTelexNumber',
        'isdn_number' => 'setIsdnNumber',
        'pager_telephone_number' => 'setPagerTelephoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_empty' => 'getIsEmpty',
        'default_telephone_number' => 'getDefaultTelephoneNumber',
        'use_autocomplete' => 'getUseAutocomplete',
        'callback_telephone_number' => 'getCallbackTelephoneNumber',
        'business_telephone_number' => 'getBusinessTelephoneNumber',
        'home_telephone_number' => 'getHomeTelephoneNumber',
        'primary_telephone_number' => 'getPrimaryTelephoneNumber',
        'business2_telephone_number' => 'getBusiness2TelephoneNumber',
        'mobile_telephone_number' => 'getMobileTelephoneNumber',
        'radio_telephone_number' => 'getRadioTelephoneNumber',
        'car_telephone_number' => 'getCarTelephoneNumber',
        'other_telephone_number' => 'getOtherTelephoneNumber',
        'assistant_telephone_number' => 'getAssistantTelephoneNumber',
        'home2_telephone_number' => 'getHome2TelephoneNumber',
        'tty_tdd_phone_number' => 'getTtyTddPhoneNumber',
        'company_main_telephone_number' => 'getCompanyMainTelephoneNumber',
        'telex_number' => 'getTelexNumber',
        'isdn_number' => 'getIsdnNumber',
        'pager_telephone_number' => 'getPagerTelephoneNumber'
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
     * Initializes a new instance of the MapiContactTelephonePropertySetDto class.
     *  
     * @param bool $is_empty Shows if MapiContactTelephonePropertySet is empty
     * @param string $default_telephone_number Default value of electronic address Uses when user does not set any electronic address if UseAutocomplete property is set 'true'
     * @param bool $use_autocomplete Indicates that one electronic address is completed automatically in case if user does not set any electronic address
     * @param string $callback_telephone_number Gets or sets the callback telephone number
     * @param string $business_telephone_number Gets or sets the business telephone number
     * @param string $home_telephone_number Gets or sets the home telephone number
     * @param string $primary_telephone_number Gets or sets the primary telephone number
     * @param string $business2_telephone_number Gets or sets the second business telephone number
     * @param string $mobile_telephone_number Gets or sets the mobile telephone number
     * @param string $radio_telephone_number Gets or sets the radio telephone number
     * @param string $car_telephone_number Gets or sets the car telephone number
     * @param string $other_telephone_number Gets or sets an alternate telephone number
     * @param string $assistant_telephone_number Gets or sets the telephone number of the contact's assistant
     * @param string $home2_telephone_number Gets or sets a second home telephone number
     * @param string $tty_tdd_phone_number Gets or sets the telephone number for the contact's text telephone (TTY) or telecommunication device for the deaf (TDD)
     * @param string $company_main_telephone_number Gets or sets the company phone number
     * @param string $telex_number Gets or sets the telex number
     * @param string $isdn_number Gets or sets the integrated services digital network (ISDN) number
     * @param string $pager_telephone_number Gets or sets a pager telephone number
     */
    public function __construct($is_empty = null, $default_telephone_number = null, $use_autocomplete = null, $callback_telephone_number = null, $business_telephone_number = null, $home_telephone_number = null, $primary_telephone_number = null, $business2_telephone_number = null, $mobile_telephone_number = null, $radio_telephone_number = null, $car_telephone_number = null, $other_telephone_number = null, $assistant_telephone_number = null, $home2_telephone_number = null, $tty_tdd_phone_number = null, $company_main_telephone_number = null, $telex_number = null, $isdn_number = null, $pager_telephone_number = null)
    {
        $this->container['is_empty'] = null;
        $this->container['default_telephone_number'] = null;
        $this->container['use_autocomplete'] = null;
        $this->container['callback_telephone_number'] = null;
        $this->container['business_telephone_number'] = null;
        $this->container['home_telephone_number'] = null;
        $this->container['primary_telephone_number'] = null;
        $this->container['business2_telephone_number'] = null;
        $this->container['mobile_telephone_number'] = null;
        $this->container['radio_telephone_number'] = null;
        $this->container['car_telephone_number'] = null;
        $this->container['other_telephone_number'] = null;
        $this->container['assistant_telephone_number'] = null;
        $this->container['home2_telephone_number'] = null;
        $this->container['tty_tdd_phone_number'] = null;
        $this->container['company_main_telephone_number'] = null;
        $this->container['telex_number'] = null;
        $this->container['isdn_number'] = null;
        $this->container['pager_telephone_number'] = null;

        if ($is_empty != null) $this->setIsEmpty($is_empty);
        if ($default_telephone_number != null) $this->setDefaultTelephoneNumber($default_telephone_number);
        if ($use_autocomplete != null) $this->setUseAutocomplete($use_autocomplete);
        if ($callback_telephone_number != null) $this->setCallbackTelephoneNumber($callback_telephone_number);
        if ($business_telephone_number != null) $this->setBusinessTelephoneNumber($business_telephone_number);
        if ($home_telephone_number != null) $this->setHomeTelephoneNumber($home_telephone_number);
        if ($primary_telephone_number != null) $this->setPrimaryTelephoneNumber($primary_telephone_number);
        if ($business2_telephone_number != null) $this->setBusiness2TelephoneNumber($business2_telephone_number);
        if ($mobile_telephone_number != null) $this->setMobileTelephoneNumber($mobile_telephone_number);
        if ($radio_telephone_number != null) $this->setRadioTelephoneNumber($radio_telephone_number);
        if ($car_telephone_number != null) $this->setCarTelephoneNumber($car_telephone_number);
        if ($other_telephone_number != null) $this->setOtherTelephoneNumber($other_telephone_number);
        if ($assistant_telephone_number != null) $this->setAssistantTelephoneNumber($assistant_telephone_number);
        if ($home2_telephone_number != null) $this->setHome2TelephoneNumber($home2_telephone_number);
        if ($tty_tdd_phone_number != null) $this->setTtyTddPhoneNumber($tty_tdd_phone_number);
        if ($company_main_telephone_number != null) $this->setCompanyMainTelephoneNumber($company_main_telephone_number);
        if ($telex_number != null) $this->setTelexNumber($telex_number);
        if ($isdn_number != null) $this->setIsdnNumber($isdn_number);
        if ($pager_telephone_number != null) $this->setPagerTelephoneNumber($pager_telephone_number);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_empty'] === null) {
            $invalidProperties[] = "'is_empty' can't be null";
        }
        if ($this->container['use_autocomplete'] === null) {
            $invalidProperties[] = "'use_autocomplete' can't be null";
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

        if ($this->container['is_empty'] === null) {
            return false;
        }
        if ($this->container['use_autocomplete'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_empty
     *
     * @return bool
     */
    public function getIsEmpty()
    {
        return $this->container['is_empty'];
    }

    /**
     * Sets is_empty
     *
     * @param bool $is_empty Shows if MapiContactTelephonePropertySet is empty
     *
     * @return $this
     */
    public function setIsEmpty($is_empty)
    {
        $this->container['is_empty'] = $is_empty;

        return $this;
    }

    /**
     * Gets default_telephone_number
     *
     * @return string
     */
    public function getDefaultTelephoneNumber()
    {
        return $this->container['default_telephone_number'];
    }

    /**
     * Sets default_telephone_number
     *
     * @param string $default_telephone_number Default value of electronic address Uses when user does not set any electronic address if UseAutocomplete property is set 'true'
     *
     * @return $this
     */
    public function setDefaultTelephoneNumber($default_telephone_number)
    {
        $this->container['default_telephone_number'] = $default_telephone_number;

        return $this;
    }

    /**
     * Gets use_autocomplete
     *
     * @return bool
     */
    public function getUseAutocomplete()
    {
        return $this->container['use_autocomplete'];
    }

    /**
     * Sets use_autocomplete
     *
     * @param bool $use_autocomplete Indicates that one electronic address is completed automatically in case if user does not set any electronic address
     *
     * @return $this
     */
    public function setUseAutocomplete($use_autocomplete)
    {
        $this->container['use_autocomplete'] = $use_autocomplete;

        return $this;
    }

    /**
     * Gets callback_telephone_number
     *
     * @return string
     */
    public function getCallbackTelephoneNumber()
    {
        return $this->container['callback_telephone_number'];
    }

    /**
     * Sets callback_telephone_number
     *
     * @param string $callback_telephone_number Gets or sets the callback telephone number
     *
     * @return $this
     */
    public function setCallbackTelephoneNumber($callback_telephone_number)
    {
        $this->container['callback_telephone_number'] = $callback_telephone_number;

        return $this;
    }

    /**
     * Gets business_telephone_number
     *
     * @return string
     */
    public function getBusinessTelephoneNumber()
    {
        return $this->container['business_telephone_number'];
    }

    /**
     * Sets business_telephone_number
     *
     * @param string $business_telephone_number Gets or sets the business telephone number
     *
     * @return $this
     */
    public function setBusinessTelephoneNumber($business_telephone_number)
    {
        $this->container['business_telephone_number'] = $business_telephone_number;

        return $this;
    }

    /**
     * Gets home_telephone_number
     *
     * @return string
     */
    public function getHomeTelephoneNumber()
    {
        return $this->container['home_telephone_number'];
    }

    /**
     * Sets home_telephone_number
     *
     * @param string $home_telephone_number Gets or sets the home telephone number
     *
     * @return $this
     */
    public function setHomeTelephoneNumber($home_telephone_number)
    {
        $this->container['home_telephone_number'] = $home_telephone_number;

        return $this;
    }

    /**
     * Gets primary_telephone_number
     *
     * @return string
     */
    public function getPrimaryTelephoneNumber()
    {
        return $this->container['primary_telephone_number'];
    }

    /**
     * Sets primary_telephone_number
     *
     * @param string $primary_telephone_number Gets or sets the primary telephone number
     *
     * @return $this
     */
    public function setPrimaryTelephoneNumber($primary_telephone_number)
    {
        $this->container['primary_telephone_number'] = $primary_telephone_number;

        return $this;
    }

    /**
     * Gets business2_telephone_number
     *
     * @return string
     */
    public function getBusiness2TelephoneNumber()
    {
        return $this->container['business2_telephone_number'];
    }

    /**
     * Sets business2_telephone_number
     *
     * @param string $business2_telephone_number Gets or sets the second business telephone number
     *
     * @return $this
     */
    public function setBusiness2TelephoneNumber($business2_telephone_number)
    {
        $this->container['business2_telephone_number'] = $business2_telephone_number;

        return $this;
    }

    /**
     * Gets mobile_telephone_number
     *
     * @return string
     */
    public function getMobileTelephoneNumber()
    {
        return $this->container['mobile_telephone_number'];
    }

    /**
     * Sets mobile_telephone_number
     *
     * @param string $mobile_telephone_number Gets or sets the mobile telephone number
     *
     * @return $this
     */
    public function setMobileTelephoneNumber($mobile_telephone_number)
    {
        $this->container['mobile_telephone_number'] = $mobile_telephone_number;

        return $this;
    }

    /**
     * Gets radio_telephone_number
     *
     * @return string
     */
    public function getRadioTelephoneNumber()
    {
        return $this->container['radio_telephone_number'];
    }

    /**
     * Sets radio_telephone_number
     *
     * @param string $radio_telephone_number Gets or sets the radio telephone number
     *
     * @return $this
     */
    public function setRadioTelephoneNumber($radio_telephone_number)
    {
        $this->container['radio_telephone_number'] = $radio_telephone_number;

        return $this;
    }

    /**
     * Gets car_telephone_number
     *
     * @return string
     */
    public function getCarTelephoneNumber()
    {
        return $this->container['car_telephone_number'];
    }

    /**
     * Sets car_telephone_number
     *
     * @param string $car_telephone_number Gets or sets the car telephone number
     *
     * @return $this
     */
    public function setCarTelephoneNumber($car_telephone_number)
    {
        $this->container['car_telephone_number'] = $car_telephone_number;

        return $this;
    }

    /**
     * Gets other_telephone_number
     *
     * @return string
     */
    public function getOtherTelephoneNumber()
    {
        return $this->container['other_telephone_number'];
    }

    /**
     * Sets other_telephone_number
     *
     * @param string $other_telephone_number Gets or sets an alternate telephone number
     *
     * @return $this
     */
    public function setOtherTelephoneNumber($other_telephone_number)
    {
        $this->container['other_telephone_number'] = $other_telephone_number;

        return $this;
    }

    /**
     * Gets assistant_telephone_number
     *
     * @return string
     */
    public function getAssistantTelephoneNumber()
    {
        return $this->container['assistant_telephone_number'];
    }

    /**
     * Sets assistant_telephone_number
     *
     * @param string $assistant_telephone_number Gets or sets the telephone number of the contact's assistant
     *
     * @return $this
     */
    public function setAssistantTelephoneNumber($assistant_telephone_number)
    {
        $this->container['assistant_telephone_number'] = $assistant_telephone_number;

        return $this;
    }

    /**
     * Gets home2_telephone_number
     *
     * @return string
     */
    public function getHome2TelephoneNumber()
    {
        return $this->container['home2_telephone_number'];
    }

    /**
     * Sets home2_telephone_number
     *
     * @param string $home2_telephone_number Gets or sets a second home telephone number
     *
     * @return $this
     */
    public function setHome2TelephoneNumber($home2_telephone_number)
    {
        $this->container['home2_telephone_number'] = $home2_telephone_number;

        return $this;
    }

    /**
     * Gets tty_tdd_phone_number
     *
     * @return string
     */
    public function getTtyTddPhoneNumber()
    {
        return $this->container['tty_tdd_phone_number'];
    }

    /**
     * Sets tty_tdd_phone_number
     *
     * @param string $tty_tdd_phone_number Gets or sets the telephone number for the contact's text telephone (TTY) or telecommunication device for the deaf (TDD)
     *
     * @return $this
     */
    public function setTtyTddPhoneNumber($tty_tdd_phone_number)
    {
        $this->container['tty_tdd_phone_number'] = $tty_tdd_phone_number;

        return $this;
    }

    /**
     * Gets company_main_telephone_number
     *
     * @return string
     */
    public function getCompanyMainTelephoneNumber()
    {
        return $this->container['company_main_telephone_number'];
    }

    /**
     * Sets company_main_telephone_number
     *
     * @param string $company_main_telephone_number Gets or sets the company phone number
     *
     * @return $this
     */
    public function setCompanyMainTelephoneNumber($company_main_telephone_number)
    {
        $this->container['company_main_telephone_number'] = $company_main_telephone_number;

        return $this;
    }

    /**
     * Gets telex_number
     *
     * @return string
     */
    public function getTelexNumber()
    {
        return $this->container['telex_number'];
    }

    /**
     * Sets telex_number
     *
     * @param string $telex_number Gets or sets the telex number
     *
     * @return $this
     */
    public function setTelexNumber($telex_number)
    {
        $this->container['telex_number'] = $telex_number;

        return $this;
    }

    /**
     * Gets isdn_number
     *
     * @return string
     */
    public function getIsdnNumber()
    {
        return $this->container['isdn_number'];
    }

    /**
     * Sets isdn_number
     *
     * @param string $isdn_number Gets or sets the integrated services digital network (ISDN) number
     *
     * @return $this
     */
    public function setIsdnNumber($isdn_number)
    {
        $this->container['isdn_number'] = $isdn_number;

        return $this;
    }

    /**
     * Gets pager_telephone_number
     *
     * @return string
     */
    public function getPagerTelephoneNumber()
    {
        return $this->container['pager_telephone_number'];
    }

    /**
     * Sets pager_telephone_number
     *
     * @param string $pager_telephone_number Gets or sets a pager telephone number
     *
     * @return $this
     */
    public function setPagerTelephoneNumber($pager_telephone_number)
    {
        $this->container['pager_telephone_number'] = $pager_telephone_number;

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

