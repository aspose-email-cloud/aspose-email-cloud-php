<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactOtherPropertySetDto.php">
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
 * MapiContactOtherPropertySetDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiContactOtherPropertySetDto
 *
 * @description The properties are used to specify additional properties of contact.
 */
class MapiContactOtherPropertySetDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiContactOtherPropertySetDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'private' => 'bool',
        'journal' => 'bool',
        'reminder_time' => '\DateTime',
        'reminder_topic' => 'string',
        'user_field1' => 'string',
        'user_field2' => 'string',
        'user_field3' => 'string',
        'user_field4' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'private' => null,
        'journal' => null,
        'reminder_time' => 'date-time',
        'reminder_topic' => null,
        'user_field1' => null,
        'user_field2' => null,
        'user_field3' => null,
        'user_field4' => null
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
        'private' => 'private',
        'journal' => 'journal',
        'reminder_time' => 'reminderTime',
        'reminder_topic' => 'reminderTopic',
        'user_field1' => 'userField1',
        'user_field2' => 'userField2',
        'user_field3' => 'userField3',
        'user_field4' => 'userField4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'private' => 'setPrivate',
        'journal' => 'setJournal',
        'reminder_time' => 'setReminderTime',
        'reminder_topic' => 'setReminderTopic',
        'user_field1' => 'setUserField1',
        'user_field2' => 'setUserField2',
        'user_field3' => 'setUserField3',
        'user_field4' => 'setUserField4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'private' => 'getPrivate',
        'journal' => 'getJournal',
        'reminder_time' => 'getReminderTime',
        'reminder_topic' => 'getReminderTopic',
        'user_field1' => 'getUserField1',
        'user_field2' => 'getUserField2',
        'user_field3' => 'getUserField3',
        'user_field4' => 'getUserField4'
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
     * Initializes a new instance of the MapiContactOtherPropertySetDto class.
     *  
     * @param bool $private Indicates whether the end-user wants this message object hidden from other users who have access to the message object.
     * @param bool $journal Specifies whether to create a journal for each action associated with this contact.
     * @param \DateTime $reminder_time Specifies the initial signal time for a reminder.
     * @param string $reminder_topic Represents the status of a meeting request.
     * @param string $user_field1 Specifies the first field on the contact that is intended for miscellaneous use for the contact.
     * @param string $user_field2 Specifies the second field on the contact that is intended for miscellaneous use for the contact.
     * @param string $user_field3 Specifies the third field on the contact that is intended for miscellaneous use for the contact.
     * @param string $user_field4 Specifies the forth field on the contact that is intended for miscellaneous use for the contact.
     */
    public function __construct($private = null, $journal = null, $reminder_time = null, $reminder_topic = null, $user_field1 = null, $user_field2 = null, $user_field3 = null, $user_field4 = null)
    {
        $this->container['private'] = null;
        $this->container['journal'] = null;
        $this->container['reminder_time'] = null;
        $this->container['reminder_topic'] = null;
        $this->container['user_field1'] = null;
        $this->container['user_field2'] = null;
        $this->container['user_field3'] = null;
        $this->container['user_field4'] = null;

        if ($private != null) $this->setPrivate($private);
        if ($journal != null) $this->setJournal($journal);
        if ($reminder_time != null) $this->setReminderTime($reminder_time);
        if ($reminder_topic != null) $this->setReminderTopic($reminder_topic);
        if ($user_field1 != null) $this->setUserField1($user_field1);
        if ($user_field2 != null) $this->setUserField2($user_field2);
        if ($user_field3 != null) $this->setUserField3($user_field3);
        if ($user_field4 != null) $this->setUserField4($user_field4);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['private'] === null) {
            $invalidProperties[] = "'private' can't be null";
        }
        if ($this->container['journal'] === null) {
            $invalidProperties[] = "'journal' can't be null";
        }
        if ($this->container['reminder_time'] === null) {
            $invalidProperties[] = "'reminder_time' can't be null";
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

        if ($this->container['private'] === null) {
            return false;
        }
        if ($this->container['journal'] === null) {
            return false;
        }
        if ($this->container['reminder_time'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool $private Indicates whether the end-user wants this message object hidden from other users who have access to the message object.
     *
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets journal
     *
     * @return bool
     */
    public function getJournal()
    {
        return $this->container['journal'];
    }

    /**
     * Sets journal
     *
     * @param bool $journal Specifies whether to create a journal for each action associated with this contact.
     *
     * @return $this
     */
    public function setJournal($journal)
    {
        $this->container['journal'] = $journal;

        return $this;
    }

    /**
     * Gets reminder_time
     *
     * @return \DateTime
     */
    public function getReminderTime()
    {
        return $this->container['reminder_time'];
    }

    /**
     * Sets reminder_time
     *
     * @param \DateTime $reminder_time Specifies the initial signal time for a reminder.
     *
     * @return $this
     */
    public function setReminderTime($reminder_time)
    {
        $this->container['reminder_time'] = $reminder_time;

        return $this;
    }

    /**
     * Gets reminder_topic
     *
     * @return string
     */
    public function getReminderTopic()
    {
        return $this->container['reminder_topic'];
    }

    /**
     * Sets reminder_topic
     *
     * @param string $reminder_topic Represents the status of a meeting request.
     *
     * @return $this
     */
    public function setReminderTopic($reminder_topic)
    {
        $this->container['reminder_topic'] = $reminder_topic;

        return $this;
    }

    /**
     * Gets user_field1
     *
     * @return string
     */
    public function getUserField1()
    {
        return $this->container['user_field1'];
    }

    /**
     * Sets user_field1
     *
     * @param string $user_field1 Specifies the first field on the contact that is intended for miscellaneous use for the contact.
     *
     * @return $this
     */
    public function setUserField1($user_field1)
    {
        $this->container['user_field1'] = $user_field1;

        return $this;
    }

    /**
     * Gets user_field2
     *
     * @return string
     */
    public function getUserField2()
    {
        return $this->container['user_field2'];
    }

    /**
     * Sets user_field2
     *
     * @param string $user_field2 Specifies the second field on the contact that is intended for miscellaneous use for the contact.
     *
     * @return $this
     */
    public function setUserField2($user_field2)
    {
        $this->container['user_field2'] = $user_field2;

        return $this;
    }

    /**
     * Gets user_field3
     *
     * @return string
     */
    public function getUserField3()
    {
        return $this->container['user_field3'];
    }

    /**
     * Sets user_field3
     *
     * @param string $user_field3 Specifies the third field on the contact that is intended for miscellaneous use for the contact.
     *
     * @return $this
     */
    public function setUserField3($user_field3)
    {
        $this->container['user_field3'] = $user_field3;

        return $this;
    }

    /**
     * Gets user_field4
     *
     * @return string
     */
    public function getUserField4()
    {
        return $this->container['user_field4'];
    }

    /**
     * Sets user_field4
     *
     * @param string $user_field4 Specifies the forth field on the contact that is intended for miscellaneous use for the contact.
     *
     * @return $this
     */
    public function setUserField4($user_field4)
    {
        $this->container['user_field4'] = $user_field4;

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