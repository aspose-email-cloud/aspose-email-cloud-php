<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiContactOtherPropertySetDtoBuilder.php">
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
 * MapiContactOtherPropertySetDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiContactOtherPropertySetDto builder.
 */
class MapiContactOtherPropertySetDtoBuilder
{
    /**
     * A model to build.
     * @var MapiContactOtherPropertySetDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiContactOtherPropertySetDtoBuilder class.
     *
     * @param MapiContactOtherPropertySetDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiContactOtherPropertySetDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets private
     * @param bool $private Indicates whether the end-user wants this message object hidden from other users who have access to the message object.
     * @return $this
     */
    public function private($private)
    {
        $this->model->setPrivate($private);
        return $this;
    }
    /**
     * Sets journal
     * @param bool $journal Specifies whether to create a journal for each action associated with this contact.
     * @return $this
     */
    public function journal($journal)
    {
        $this->model->setJournal($journal);
        return $this;
    }
    /**
     * Sets reminderTime
     * @param \DateTime $reminderTime Specifies the initial signal time for a reminder.
     * @return $this
     */
    public function reminderTime($reminderTime)
    {
        $this->model->setReminderTime($reminderTime);
        return $this;
    }
    /**
     * Sets reminderTopic
     * @param string $reminderTopic Represents the status of a meeting request.
     * @return $this
     */
    public function reminderTopic($reminderTopic)
    {
        $this->model->setReminderTopic($reminderTopic);
        return $this;
    }
    /**
     * Sets userField1
     * @param string $userField1 Specifies the first field on the contact that is intended for miscellaneous use for the contact.
     * @return $this
     */
    public function userField1($userField1)
    {
        $this->model->setUserField1($userField1);
        return $this;
    }
    /**
     * Sets userField2
     * @param string $userField2 Specifies the second field on the contact that is intended for miscellaneous use for the contact.
     * @return $this
     */
    public function userField2($userField2)
    {
        $this->model->setUserField2($userField2);
        return $this;
    }
    /**
     * Sets userField3
     * @param string $userField3 Specifies the third field on the contact that is intended for miscellaneous use for the contact.
     * @return $this
     */
    public function userField3($userField3)
    {
        $this->model->setUserField3($userField3);
        return $this;
    }
    /**
     * Sets userField4
     * @param string $userField4 Specifies the forth field on the contact that is intended for miscellaneous use for the contact.
     * @return $this
     */
    public function userField4($userField4)
    {
        $this->model->setUserField4($userField4);
        return $this;
    }
}

