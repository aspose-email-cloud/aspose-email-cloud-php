<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiMessageItemBaseDtoBuilder.php">
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
 * MapiMessageItemBaseDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiMessageItemBaseDto builder.
 */
class MapiMessageItemBaseDtoBuilder
{
    /**
     * A model to build.
     * @var MapiMessageItemBaseDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiMessageItemBaseDtoBuilder class.
     *
     * @param MapiMessageItemBaseDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiMessageItemBaseDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets attachments
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Message item attachments.
     * @return $this
     */
    public function attachments($attachments)
    {
        $this->model->setAttachments($attachments);
        return $this;
    }
    /**
     * Sets billing
     * @param string $billing Billing information associated with an item.
     * @return $this
     */
    public function billing($billing)
    {
        $this->model->setBilling($billing);
        return $this;
    }
    /**
     * Sets body
     * @param string $body Message text.
     * @return $this
     */
    public function body($body)
    {
        $this->model->setBody($body);
        return $this;
    }
    /**
     * Sets bodyHtml
     * @param string $bodyHtml Gets the BodyRtf of the message converted to HTML, if present, otherwise an empty string.
     * @return $this
     */
    public function bodyHtml($bodyHtml)
    {
        $this->model->setBodyHtml($bodyHtml);
        return $this;
    }
    /**
     * Sets bodyRtf
     * @param string $bodyRtf RTF formatted message text.
     * @return $this
     */
    public function bodyRtf($bodyRtf)
    {
        $this->model->setBodyRtf($bodyRtf);
        return $this;
    }
    /**
     * Sets bodyType
     * @param string $bodyType The content type of message body./nEnum, available values: PlainText, Html, Rtf
     * @return $this
     */
    public function bodyType($bodyType)
    {
        $this->model->setBodyType($bodyType);
        return $this;
    }
    /**
     * Sets categories
     * @param string[] $categories Contains keywords or categories for the message object.
     * @return $this
     */
    public function categories($categories)
    {
        $this->model->setCategories($categories);
        return $this;
    }
    /**
     * Sets companies
     * @param string[] $companies Contains the names of the companies that are associated with an item.
     * @return $this
     */
    public function companies($companies)
    {
        $this->model->setCompanies($companies);
        return $this;
    }
    /**
     * Sets itemId
     * @param string $itemId The item id, uses with a server.
     * @return $this
     */
    public function itemId($itemId)
    {
        $this->model->setItemId($itemId);
        return $this;
    }
    /**
     * Sets messageClass
     * @param string $messageClass Case-sensitive string that identifies the sender-defined message class, such as IPM.Note. The message class specifies the type, purpose, or content of the message.
     * @return $this
     */
    public function messageClass($messageClass)
    {
        $this->model->setMessageClass($messageClass);
        return $this;
    }
    /**
     * Sets mileage
     * @param string $mileage Contains the mileage information that is associated with an item.
     * @return $this
     */
    public function mileage($mileage)
    {
        $this->model->setMileage($mileage);
        return $this;
    }
    /**
     * Sets recipients
     * @param \Aspose\Email\Model\MapiRecipientDto[] $recipients Recipients of the message.
     * @return $this
     */
    public function recipients($recipients)
    {
        $this->model->setRecipients($recipients);
        return $this;
    }
    /**
     * Sets sensitivity
     * @param string $sensitivity Contains values that indicate the message sensitivity./nEnum, available values: None, Personal, Private, CompanyConfidential
     * @return $this
     */
    public function sensitivity($sensitivity)
    {
        $this->model->setSensitivity($sensitivity);
        return $this;
    }
    /**
     * Sets subject
     * @param string $subject Subject of the message.
     * @return $this
     */
    public function subject($subject)
    {
        $this->model->setSubject($subject);
        return $this;
    }
    /**
     * Sets subjectPrefix
     * @param string $subjectPrefix Subject prefix that typically indicates some action on a message, such as \"FW: \" for forwarding.
     * @return $this
     */
    public function subjectPrefix($subjectPrefix)
    {
        $this->model->setSubjectPrefix($subjectPrefix);
        return $this;
    }
    /**
     * Sets properties
     * @param \Aspose\Email\Model\MapiPropertyDto[] $properties List of MAPI properties
     * @return $this
     */
    public function properties($properties)
    {
        $this->model->setProperties($properties);
        return $this;
    }
}

