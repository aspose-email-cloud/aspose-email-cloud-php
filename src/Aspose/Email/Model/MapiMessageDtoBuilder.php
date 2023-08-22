<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiMessageDtoBuilder.php">
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
 * MapiMessageDtoBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiMessageDto builder.
 */
class MapiMessageDtoBuilder
{
    /**
     * A model to build.
     * @var MapiMessageDto
     */
    private $model;
    /**
     * Initializes a new instance of the MapiMessageDtoBuilder class.
     *
     * @param MapiMessageDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiMessageDto Built model.
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
     * @param string $bodyType The content type of message body. Enum, available values: PlainText, Html, Rtf
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
     * @param string $sensitivity Contains values that indicate the message sensitivity. Enum, available values: None, Personal, Private, CompanyConfidential
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
    /**
     * Sets messageBody
     * @param string $messageBody Message text
     * @return $this
     */
    public function messageBody($messageBody)
    {
        $this->model->setMessageBody($messageBody);
        return $this;
    }
    /**
     * Sets clientSubmitTime
     * @param \DateTime $clientSubmitTime Date and time the message sender submitted a message.
     * @return $this
     */
    public function clientSubmitTime($clientSubmitTime)
    {
        $this->model->setClientSubmitTime($clientSubmitTime);
        return $this;
    }
    /**
     * Sets conversationTopic
     * @param string $conversationTopic Topic of the first message in a conversation thread.
     * @return $this
     */
    public function conversationTopic($conversationTopic)
    {
        $this->model->setConversationTopic($conversationTopic);
        return $this;
    }
    /**
     * Sets deliveryTime
     * @param \DateTime $deliveryTime Date and time a message was delivered.
     * @return $this
     */
    public function deliveryTime($deliveryTime)
    {
        $this->model->setDeliveryTime($deliveryTime);
        return $this;
    }
    /**
     * Sets displayBcc
     * @param string $displayBcc List of the display names of any blind carbon copy (BCC) message recipients, separated by semicolons (;).
     * @return $this
     */
    public function displayBcc($displayBcc)
    {
        $this->model->setDisplayBcc($displayBcc);
        return $this;
    }
    /**
     * Sets displayCc
     * @param string $displayCc List of the display names of any carbon copy (CC) message recipients, separated by semicolons (;).
     * @return $this
     */
    public function displayCc($displayCc)
    {
        $this->model->setDisplayCc($displayCc);
        return $this;
    }
    /**
     * Sets displayName
     * @param string $displayName Display name for the message.
     * @return $this
     */
    public function displayName($displayName)
    {
        $this->model->setDisplayName($displayName);
        return $this;
    }
    /**
     * Sets displayNamePrefix
     * @param string $displayNamePrefix Prefix of the display name.
     * @return $this
     */
    public function displayNamePrefix($displayNamePrefix)
    {
        $this->model->setDisplayNamePrefix($displayNamePrefix);
        return $this;
    }
    /**
     * Sets displayTo
     * @param string $displayTo List of the display names of the primary (To) message recipients, separated by semicolons (;).
     * @return $this
     */
    public function displayTo($displayTo)
    {
        $this->model->setDisplayTo($displayTo);
        return $this;
    }
    /**
     * Sets flags
     * @param string[] $flags Message flags. Items: Mapi message flags. Enum, available values: MsgFlagZero, MsgFlagRead, MsgFlagUnmodified, MsgFlagSubmit, MsgFlagUnsent, MsgFlagHasAttach, MsgFlagFromMe, MsgFlagAssociated, MsgFlagResend, MsgFlagNotifyRead, MsgFlagNotifyUnread, MsgFlagEverRead, MsgFlagOriginX400, MsgFlagOriginInternet, MsgFlagOriginMiscExt
     * @return $this
     */
    public function flags($flags)
    {
        $this->model->setFlags($flags);
        return $this;
    }
    /**
     * Sets headers
     * @param map[string,string] $headers Transport message headers
     * @return $this
     */
    public function headers($headers)
    {
        $this->model->setHeaders($headers);
        return $this;
    }
    /**
     * Sets internetMessageId
     * @param string $internetMessageId Internet message id of the message.
     * @return $this
     */
    public function internetMessageId($internetMessageId)
    {
        $this->model->setInternetMessageId($internetMessageId);
        return $this;
    }
    /**
     * Sets messageFormat
     * @param string $messageFormat Represents outlook message format. Enum, available values: Ascii, Unicode
     * @return $this
     */
    public function messageFormat($messageFormat)
    {
        $this->model->setMessageFormat($messageFormat);
        return $this;
    }
    /**
     * Sets normalizedSubject
     * @param string $normalizedSubject Normalized subject of the message.
     * @return $this
     */
    public function normalizedSubject($normalizedSubject)
    {
        $this->model->setNormalizedSubject($normalizedSubject);
        return $this;
    }
    /**
     * Sets readReceiptRequested
     * @param bool $readReceiptRequested Value indicating whether the read receipt is requested.
     * @return $this
     */
    public function readReceiptRequested($readReceiptRequested)
    {
        $this->model->setReadReceiptRequested($readReceiptRequested);
        return $this;
    }
    /**
     * Sets replyTo
     * @param string $replyTo Reply to names.
     * @return $this
     */
    public function replyTo($replyTo)
    {
        $this->model->setReplyTo($replyTo);
        return $this;
    }
    /**
     * Sets senderAddressType
     * @param string $senderAddressType Message sender's e-mail address type.
     * @return $this
     */
    public function senderAddressType($senderAddressType)
    {
        $this->model->setSenderAddressType($senderAddressType);
        return $this;
    }
    /**
     * Sets senderEmailAddress
     * @param string $senderEmailAddress Message sender's e-mail address.
     * @return $this
     */
    public function senderEmailAddress($senderEmailAddress)
    {
        $this->model->setSenderEmailAddress($senderEmailAddress);
        return $this;
    }
    /**
     * Sets senderName
     * @param string $senderName Message sender's display name.
     * @return $this
     */
    public function senderName($senderName)
    {
        $this->model->setSenderName($senderName);
        return $this;
    }
    /**
     * Sets senderSmtpAddress
     * @param string $senderSmtpAddress Message sender's e-mail address.
     * @return $this
     */
    public function senderSmtpAddress($senderSmtpAddress)
    {
        $this->model->setSenderSmtpAddress($senderSmtpAddress);
        return $this;
    }
    /**
     * Sets sentRepresentingAddressType
     * @param string $sentRepresentingAddressType Address type for the messaging user represented by the sender.
     * @return $this
     */
    public function sentRepresentingAddressType($sentRepresentingAddressType)
    {
        $this->model->setSentRepresentingAddressType($sentRepresentingAddressType);
        return $this;
    }
    /**
     * Sets sentRepresentingEmailAddress
     * @param string $sentRepresentingEmailAddress E-mail address for the messaging user represented by the sender.
     * @return $this
     */
    public function sentRepresentingEmailAddress($sentRepresentingEmailAddress)
    {
        $this->model->setSentRepresentingEmailAddress($sentRepresentingEmailAddress);
        return $this;
    }
    /**
     * Sets sentRepresentingName
     * @param string $sentRepresentingName Display name for the messaging user represented by the sender.
     * @return $this
     */
    public function sentRepresentingName($sentRepresentingName)
    {
        $this->model->setSentRepresentingName($sentRepresentingName);
        return $this;
    }
    /**
     * Sets sentRepresentingSmtpAddress
     * @param string $sentRepresentingSmtpAddress E-mail address for the messaging user represented by the sender.
     * @return $this
     */
    public function sentRepresentingSmtpAddress($sentRepresentingSmtpAddress)
    {
        $this->model->setSentRepresentingSmtpAddress($sentRepresentingSmtpAddress);
        return $this;
    }
    /**
     * Sets transportMessageHeaders
     * @param string $transportMessageHeaders Transport-specific message envelope information.
     * @return $this
     */
    public function transportMessageHeaders($transportMessageHeaders)
    {
        $this->model->setTransportMessageHeaders($transportMessageHeaders);
        return $this;
    }
}

