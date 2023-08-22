<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiMessageDto.php">
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
 * MapiMessageDto
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 * MapiMessageDto
 *
 * @description Represents an Outlook Message format document.
 */
class MapiMessageDto extends MapiMessageItemBaseDto 
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MapiMessageDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'message_body' => 'string',
        'client_submit_time' => '\DateTime',
        'conversation_topic' => 'string',
        'delivery_time' => '\DateTime',
        'display_bcc' => 'string',
        'display_cc' => 'string',
        'display_name' => 'string',
        'display_name_prefix' => 'string',
        'display_to' => 'string',
        'flags' => 'string[]',
        'headers' => 'map[string,string]',
        'internet_message_id' => 'string',
        'message_format' => 'string',
        'normalized_subject' => 'string',
        'read_receipt_requested' => 'bool',
        'reply_to' => 'string',
        'sender_address_type' => 'string',
        'sender_email_address' => 'string',
        'sender_name' => 'string',
        'sender_smtp_address' => 'string',
        'sent_representing_address_type' => 'string',
        'sent_representing_email_address' => 'string',
        'sent_representing_name' => 'string',
        'sent_representing_smtp_address' => 'string',
        'transport_message_headers' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'message_body' => null,
        'client_submit_time' => 'date-time',
        'conversation_topic' => null,
        'delivery_time' => 'date-time',
        'display_bcc' => null,
        'display_cc' => null,
        'display_name' => null,
        'display_name_prefix' => null,
        'display_to' => null,
        'flags' => null,
        'headers' => null,
        'internet_message_id' => null,
        'message_format' => null,
        'normalized_subject' => null,
        'read_receipt_requested' => null,
        'reply_to' => null,
        'sender_address_type' => null,
        'sender_email_address' => null,
        'sender_name' => null,
        'sender_smtp_address' => null,
        'sent_representing_address_type' => null,
        'sent_representing_email_address' => null,
        'sent_representing_name' => null,
        'sent_representing_smtp_address' => null,
        'transport_message_headers' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'message_body' => 'messageBody',
        'client_submit_time' => 'clientSubmitTime',
        'conversation_topic' => 'conversationTopic',
        'delivery_time' => 'deliveryTime',
        'display_bcc' => 'displayBcc',
        'display_cc' => 'displayCc',
        'display_name' => 'displayName',
        'display_name_prefix' => 'displayNamePrefix',
        'display_to' => 'displayTo',
        'flags' => 'flags',
        'headers' => 'headers',
        'internet_message_id' => 'internetMessageId',
        'message_format' => 'messageFormat',
        'normalized_subject' => 'normalizedSubject',
        'read_receipt_requested' => 'readReceiptRequested',
        'reply_to' => 'replyTo',
        'sender_address_type' => 'senderAddressType',
        'sender_email_address' => 'senderEmailAddress',
        'sender_name' => 'senderName',
        'sender_smtp_address' => 'senderSmtpAddress',
        'sent_representing_address_type' => 'sentRepresentingAddressType',
        'sent_representing_email_address' => 'sentRepresentingEmailAddress',
        'sent_representing_name' => 'sentRepresentingName',
        'sent_representing_smtp_address' => 'sentRepresentingSmtpAddress',
        'transport_message_headers' => 'transportMessageHeaders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message_body' => 'setMessageBody',
        'client_submit_time' => 'setClientSubmitTime',
        'conversation_topic' => 'setConversationTopic',
        'delivery_time' => 'setDeliveryTime',
        'display_bcc' => 'setDisplayBcc',
        'display_cc' => 'setDisplayCc',
        'display_name' => 'setDisplayName',
        'display_name_prefix' => 'setDisplayNamePrefix',
        'display_to' => 'setDisplayTo',
        'flags' => 'setFlags',
        'headers' => 'setHeaders',
        'internet_message_id' => 'setInternetMessageId',
        'message_format' => 'setMessageFormat',
        'normalized_subject' => 'setNormalizedSubject',
        'read_receipt_requested' => 'setReadReceiptRequested',
        'reply_to' => 'setReplyTo',
        'sender_address_type' => 'setSenderAddressType',
        'sender_email_address' => 'setSenderEmailAddress',
        'sender_name' => 'setSenderName',
        'sender_smtp_address' => 'setSenderSmtpAddress',
        'sent_representing_address_type' => 'setSentRepresentingAddressType',
        'sent_representing_email_address' => 'setSentRepresentingEmailAddress',
        'sent_representing_name' => 'setSentRepresentingName',
        'sent_representing_smtp_address' => 'setSentRepresentingSmtpAddress',
        'transport_message_headers' => 'setTransportMessageHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message_body' => 'getMessageBody',
        'client_submit_time' => 'getClientSubmitTime',
        'conversation_topic' => 'getConversationTopic',
        'delivery_time' => 'getDeliveryTime',
        'display_bcc' => 'getDisplayBcc',
        'display_cc' => 'getDisplayCc',
        'display_name' => 'getDisplayName',
        'display_name_prefix' => 'getDisplayNamePrefix',
        'display_to' => 'getDisplayTo',
        'flags' => 'getFlags',
        'headers' => 'getHeaders',
        'internet_message_id' => 'getInternetMessageId',
        'message_format' => 'getMessageFormat',
        'normalized_subject' => 'getNormalizedSubject',
        'read_receipt_requested' => 'getReadReceiptRequested',
        'reply_to' => 'getReplyTo',
        'sender_address_type' => 'getSenderAddressType',
        'sender_email_address' => 'getSenderEmailAddress',
        'sender_name' => 'getSenderName',
        'sender_smtp_address' => 'getSenderSmtpAddress',
        'sent_representing_address_type' => 'getSentRepresentingAddressType',
        'sent_representing_email_address' => 'getSentRepresentingEmailAddress',
        'sent_representing_name' => 'getSentRepresentingName',
        'sent_representing_smtp_address' => 'getSentRepresentingSmtpAddress',
        'transport_message_headers' => 'getTransportMessageHeaders'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Initializes a new instance of the MapiMessageDto class.
     *  
     * @param \Aspose\Email\Model\MapiAttachmentDto[] $attachments Message item attachments.
     * @param string $billing Billing information associated with an item.
     * @param string $body Message text.
     * @param string $body_html Gets the BodyRtf of the message converted to HTML, if present, otherwise an empty string.
     * @param string $body_rtf RTF formatted message text.
     * @param string $body_type The content type of message body. Enum, available values: PlainText, Html, Rtf
     * @param string[] $categories Contains keywords or categories for the message object.
     * @param string[] $companies Contains the names of the companies that are associated with an item.
     * @param string $item_id The item id, uses with a server.
     * @param string $message_class Case-sensitive string that identifies the sender-defined message class, such as IPM.Note. The message class specifies the type, purpose, or content of the message.
     * @param string $mileage Contains the mileage information that is associated with an item.
     * @param \Aspose\Email\Model\MapiRecipientDto[] $recipients Recipients of the message.
     * @param string $sensitivity Contains values that indicate the message sensitivity. Enum, available values: None, Personal, Private, CompanyConfidential
     * @param string $subject Subject of the message.
     * @param string $subject_prefix Subject prefix that typically indicates some action on a message, such as \"FW: \" for forwarding.
     * @param \Aspose\Email\Model\MapiPropertyDto[] $properties List of MAPI properties
     * @param string $discriminator 
     * @param string $message_body Message text
     * @param \DateTime $client_submit_time Date and time the message sender submitted a message.
     * @param string $conversation_topic Topic of the first message in a conversation thread.
     * @param \DateTime $delivery_time Date and time a message was delivered.
     * @param string $display_bcc List of the display names of any blind carbon copy (BCC) message recipients, separated by semicolons (;).
     * @param string $display_cc List of the display names of any carbon copy (CC) message recipients, separated by semicolons (;).
     * @param string $display_name Display name for the message.
     * @param string $display_name_prefix Prefix of the display name.
     * @param string $display_to List of the display names of the primary (To) message recipients, separated by semicolons (;).
     * @param string[] $flags Message flags. Items: Mapi message flags. Enum, available values: MsgFlagZero, MsgFlagRead, MsgFlagUnmodified, MsgFlagSubmit, MsgFlagUnsent, MsgFlagHasAttach, MsgFlagFromMe, MsgFlagAssociated, MsgFlagResend, MsgFlagNotifyRead, MsgFlagNotifyUnread, MsgFlagEverRead, MsgFlagOriginX400, MsgFlagOriginInternet, MsgFlagOriginMiscExt
     * @param map[string,string] $headers Transport message headers
     * @param string $internet_message_id Internet message id of the message.
     * @param string $message_format Represents outlook message format. Enum, available values: Ascii, Unicode
     * @param string $normalized_subject Normalized subject of the message.
     * @param bool $read_receipt_requested Value indicating whether the read receipt is requested.
     * @param string $reply_to Reply to names.
     * @param string $sender_address_type Message sender's e-mail address type.
     * @param string $sender_email_address Message sender's e-mail address.
     * @param string $sender_name Message sender's display name.
     * @param string $sender_smtp_address Message sender's e-mail address.
     * @param string $sent_representing_address_type Address type for the messaging user represented by the sender.
     * @param string $sent_representing_email_address E-mail address for the messaging user represented by the sender.
     * @param string $sent_representing_name Display name for the messaging user represented by the sender.
     * @param string $sent_representing_smtp_address E-mail address for the messaging user represented by the sender.
     * @param string $transport_message_headers Transport-specific message envelope information.
     */
    public function __construct(
        $attachments = null,
        $billing = null,
        $body = null,
        $body_html = null,
        $body_rtf = null,
        $body_type = null,
        $categories = null,
        $companies = null,
        $item_id = null,
        $message_class = null,
        $mileage = null,
        $recipients = null,
        $sensitivity = null,
        $subject = null,
        $subject_prefix = null,
        $properties = null
        ,
        $message_body = null,
        $client_submit_time = null,
        $conversation_topic = null,
        $delivery_time = null,
        $display_bcc = null,
        $display_cc = null,
        $display_name = null,
        $display_name_prefix = null,
        $display_to = null,
        $flags = null,
        $headers = null,
        $internet_message_id = null,
        $message_format = null,
        $normalized_subject = null,
        $read_receipt_requested = null,
        $reply_to = null,
        $sender_address_type = null,
        $sender_email_address = null,
        $sender_name = null,
        $sender_smtp_address = null,
        $sent_representing_address_type = null,
        $sent_representing_email_address = null,
        $sent_representing_name = null,
        $sent_representing_smtp_address = null,
        $transport_message_headers = null
    ) {
        parent::__construct();
        $this->container['message_body'] = null;
        $this->container['client_submit_time'] = null;
        $this->container['conversation_topic'] = null;
        $this->container['delivery_time'] = null;
        $this->container['display_bcc'] = null;
        $this->container['display_cc'] = null;
        $this->container['display_name'] = null;
        $this->container['display_name_prefix'] = null;
        $this->container['display_to'] = null;
        $this->container['flags'] = null;
        $this->container['headers'] = null;
        $this->container['internet_message_id'] = null;
        $this->container['message_format'] = null;
        $this->container['normalized_subject'] = null;
        $this->container['read_receipt_requested'] = null;
        $this->container['reply_to'] = null;
        $this->container['sender_address_type'] = null;
        $this->container['sender_email_address'] = null;
        $this->container['sender_name'] = null;
        $this->container['sender_smtp_address'] = null;
        $this->container['sent_representing_address_type'] = null;
        $this->container['sent_representing_email_address'] = null;
        $this->container['sent_representing_name'] = null;
        $this->container['sent_representing_smtp_address'] = null;
        $this->container['transport_message_headers'] = null;

        if ($attachments != null) $this->setAttachments($attachments);
        if ($billing != null) $this->setBilling($billing);
        if ($body != null) $this->setBody($body);
        if ($body_html != null) $this->setBodyHtml($body_html);
        if ($body_rtf != null) $this->setBodyRtf($body_rtf);
        if ($body_type != null) $this->setBodyType($body_type);
        if ($categories != null) $this->setCategories($categories);
        if ($companies != null) $this->setCompanies($companies);
        if ($item_id != null) $this->setItemId($item_id);
        if ($message_class != null) $this->setMessageClass($message_class);
        if ($mileage != null) $this->setMileage($mileage);
        if ($recipients != null) $this->setRecipients($recipients);
        if ($sensitivity != null) $this->setSensitivity($sensitivity);
        if ($subject != null) $this->setSubject($subject);
        if ($subject_prefix != null) $this->setSubjectPrefix($subject_prefix);
        if ($properties != null) $this->setProperties($properties);
        $this->container['discriminator'] = (new \ReflectionClass($this))->getShortName();
        if ($message_body != null) $this->setMessageBody($message_body);
        if ($client_submit_time != null) $this->setClientSubmitTime($client_submit_time);
        if ($conversation_topic != null) $this->setConversationTopic($conversation_topic);
        if ($delivery_time != null) $this->setDeliveryTime($delivery_time);
        if ($display_bcc != null) $this->setDisplayBcc($display_bcc);
        if ($display_cc != null) $this->setDisplayCc($display_cc);
        if ($display_name != null) $this->setDisplayName($display_name);
        if ($display_name_prefix != null) $this->setDisplayNamePrefix($display_name_prefix);
        if ($display_to != null) $this->setDisplayTo($display_to);
        if ($flags != null) $this->setFlags($flags);
        if ($headers != null) $this->setHeaders($headers);
        if ($internet_message_id != null) $this->setInternetMessageId($internet_message_id);
        if ($message_format != null) $this->setMessageFormat($message_format);
        if ($normalized_subject != null) $this->setNormalizedSubject($normalized_subject);
        if ($read_receipt_requested != null) $this->setReadReceiptRequested($read_receipt_requested);
        if ($reply_to != null) $this->setReplyTo($reply_to);
        if ($sender_address_type != null) $this->setSenderAddressType($sender_address_type);
        if ($sender_email_address != null) $this->setSenderEmailAddress($sender_email_address);
        if ($sender_name != null) $this->setSenderName($sender_name);
        if ($sender_smtp_address != null) $this->setSenderSmtpAddress($sender_smtp_address);
        if ($sent_representing_address_type != null) $this->setSentRepresentingAddressType($sent_representing_address_type);
        if ($sent_representing_email_address != null) $this->setSentRepresentingEmailAddress($sent_representing_email_address);
        if ($sent_representing_name != null) $this->setSentRepresentingName($sent_representing_name);
        if ($sent_representing_smtp_address != null) $this->setSentRepresentingSmtpAddress($sent_representing_smtp_address);
        if ($transport_message_headers != null) $this->setTransportMessageHeaders($transport_message_headers);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['client_submit_time'] === null) {
            $invalidProperties[] = "'client_submit_time' can't be null";
        }
        if ($this->container['delivery_time'] === null) {
            $invalidProperties[] = "'delivery_time' can't be null";
        }
        if ($this->container['message_format'] === null) {
            $invalidProperties[] = "'message_format' can't be null";
        }
        if ($this->container['read_receipt_requested'] === null) {
            $invalidProperties[] = "'read_receipt_requested' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['client_submit_time'] === null) {
            return false;
        }
        if ($this->container['delivery_time'] === null) {
            return false;
        }
        if ($this->container['message_format'] === null) {
            return false;
        }
        if ($this->container['read_receipt_requested'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets message_body
     *
     * @return string
     */
    public function getMessageBody()
    {
        return $this->container['message_body'];
    }

    /**
     * Sets message_body
     *
     * @param string $message_body Message text
     *
     * @return $this
     */
    public function setMessageBody($message_body)
    {
        $this->container['message_body'] = $message_body;

        return $this;
    }

    /**
     * Gets client_submit_time
     *
     * @return \DateTime
     */
    public function getClientSubmitTime()
    {
        return $this->container['client_submit_time'];
    }

    /**
     * Sets client_submit_time
     *
     * @param \DateTime $client_submit_time Date and time the message sender submitted a message.
     *
     * @return $this
     */
    public function setClientSubmitTime($client_submit_time)
    {
        $this->container['client_submit_time'] = $client_submit_time;

        return $this;
    }

    /**
     * Gets conversation_topic
     *
     * @return string
     */
    public function getConversationTopic()
    {
        return $this->container['conversation_topic'];
    }

    /**
     * Sets conversation_topic
     *
     * @param string $conversation_topic Topic of the first message in a conversation thread.
     *
     * @return $this
     */
    public function setConversationTopic($conversation_topic)
    {
        $this->container['conversation_topic'] = $conversation_topic;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return \DateTime
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param \DateTime $delivery_time Date and time a message was delivered.
     *
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets display_bcc
     *
     * @return string
     */
    public function getDisplayBcc()
    {
        return $this->container['display_bcc'];
    }

    /**
     * Sets display_bcc
     *
     * @param string $display_bcc List of the display names of any blind carbon copy (BCC) message recipients, separated by semicolons (;).
     *
     * @return $this
     */
    public function setDisplayBcc($display_bcc)
    {
        $this->container['display_bcc'] = $display_bcc;

        return $this;
    }

    /**
     * Gets display_cc
     *
     * @return string
     */
    public function getDisplayCc()
    {
        return $this->container['display_cc'];
    }

    /**
     * Sets display_cc
     *
     * @param string $display_cc List of the display names of any carbon copy (CC) message recipients, separated by semicolons (;).
     *
     * @return $this
     */
    public function setDisplayCc($display_cc)
    {
        $this->container['display_cc'] = $display_cc;

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
     * @param string $display_name Display name for the message.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets display_name_prefix
     *
     * @return string
     */
    public function getDisplayNamePrefix()
    {
        return $this->container['display_name_prefix'];
    }

    /**
     * Sets display_name_prefix
     *
     * @param string $display_name_prefix Prefix of the display name.
     *
     * @return $this
     */
    public function setDisplayNamePrefix($display_name_prefix)
    {
        $this->container['display_name_prefix'] = $display_name_prefix;

        return $this;
    }

    /**
     * Gets display_to
     *
     * @return string
     */
    public function getDisplayTo()
    {
        return $this->container['display_to'];
    }

    /**
     * Sets display_to
     *
     * @param string $display_to List of the display names of the primary (To) message recipients, separated by semicolons (;).
     *
     * @return $this
     */
    public function setDisplayTo($display_to)
    {
        $this->container['display_to'] = $display_to;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return string[]
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param string[] $flags Message flags. Items: Mapi message flags. Enum, available values: MsgFlagZero, MsgFlagRead, MsgFlagUnmodified, MsgFlagSubmit, MsgFlagUnsent, MsgFlagHasAttach, MsgFlagFromMe, MsgFlagAssociated, MsgFlagResend, MsgFlagNotifyRead, MsgFlagNotifyUnread, MsgFlagEverRead, MsgFlagOriginX400, MsgFlagOriginInternet, MsgFlagOriginMiscExt
     *
     * @return $this
     */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return map[string,string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param map[string,string] $headers Transport message headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets internet_message_id
     *
     * @return string
     */
    public function getInternetMessageId()
    {
        return $this->container['internet_message_id'];
    }

    /**
     * Sets internet_message_id
     *
     * @param string $internet_message_id Internet message id of the message.
     *
     * @return $this
     */
    public function setInternetMessageId($internet_message_id)
    {
        $this->container['internet_message_id'] = $internet_message_id;

        return $this;
    }

    /**
     * Gets message_format
     *
     * @return string
     */
    public function getMessageFormat()
    {
        return $this->container['message_format'];
    }

    /**
     * Sets message_format
     *
     * @param string $message_format Represents outlook message format. Enum, available values: Ascii, Unicode
     *
     * @return $this
     */
    public function setMessageFormat($message_format)
    {
        $this->container['message_format'] = $message_format;

        return $this;
    }

    /**
     * Gets normalized_subject
     *
     * @return string
     */
    public function getNormalizedSubject()
    {
        return $this->container['normalized_subject'];
    }

    /**
     * Sets normalized_subject
     *
     * @param string $normalized_subject Normalized subject of the message.
     *
     * @return $this
     */
    public function setNormalizedSubject($normalized_subject)
    {
        $this->container['normalized_subject'] = $normalized_subject;

        return $this;
    }

    /**
     * Gets read_receipt_requested
     *
     * @return bool
     */
    public function getReadReceiptRequested()
    {
        return $this->container['read_receipt_requested'];
    }

    /**
     * Sets read_receipt_requested
     *
     * @param bool $read_receipt_requested Value indicating whether the read receipt is requested.
     *
     * @return $this
     */
    public function setReadReceiptRequested($read_receipt_requested)
    {
        $this->container['read_receipt_requested'] = $read_receipt_requested;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string $reply_to Reply to names.
     *
     * @return $this
     */
    public function setReplyTo($reply_to)
    {
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets sender_address_type
     *
     * @return string
     */
    public function getSenderAddressType()
    {
        return $this->container['sender_address_type'];
    }

    /**
     * Sets sender_address_type
     *
     * @param string $sender_address_type Message sender's e-mail address type.
     *
     * @return $this
     */
    public function setSenderAddressType($sender_address_type)
    {
        $this->container['sender_address_type'] = $sender_address_type;

        return $this;
    }

    /**
     * Gets sender_email_address
     *
     * @return string
     */
    public function getSenderEmailAddress()
    {
        return $this->container['sender_email_address'];
    }

    /**
     * Sets sender_email_address
     *
     * @param string $sender_email_address Message sender's e-mail address.
     *
     * @return $this
     */
    public function setSenderEmailAddress($sender_email_address)
    {
        $this->container['sender_email_address'] = $sender_email_address;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string $sender_name Message sender's display name.
     *
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets sender_smtp_address
     *
     * @return string
     */
    public function getSenderSmtpAddress()
    {
        return $this->container['sender_smtp_address'];
    }

    /**
     * Sets sender_smtp_address
     *
     * @param string $sender_smtp_address Message sender's e-mail address.
     *
     * @return $this
     */
    public function setSenderSmtpAddress($sender_smtp_address)
    {
        $this->container['sender_smtp_address'] = $sender_smtp_address;

        return $this;
    }

    /**
     * Gets sent_representing_address_type
     *
     * @return string
     */
    public function getSentRepresentingAddressType()
    {
        return $this->container['sent_representing_address_type'];
    }

    /**
     * Sets sent_representing_address_type
     *
     * @param string $sent_representing_address_type Address type for the messaging user represented by the sender.
     *
     * @return $this
     */
    public function setSentRepresentingAddressType($sent_representing_address_type)
    {
        $this->container['sent_representing_address_type'] = $sent_representing_address_type;

        return $this;
    }

    /**
     * Gets sent_representing_email_address
     *
     * @return string
     */
    public function getSentRepresentingEmailAddress()
    {
        return $this->container['sent_representing_email_address'];
    }

    /**
     * Sets sent_representing_email_address
     *
     * @param string $sent_representing_email_address E-mail address for the messaging user represented by the sender.
     *
     * @return $this
     */
    public function setSentRepresentingEmailAddress($sent_representing_email_address)
    {
        $this->container['sent_representing_email_address'] = $sent_representing_email_address;

        return $this;
    }

    /**
     * Gets sent_representing_name
     *
     * @return string
     */
    public function getSentRepresentingName()
    {
        return $this->container['sent_representing_name'];
    }

    /**
     * Sets sent_representing_name
     *
     * @param string $sent_representing_name Display name for the messaging user represented by the sender.
     *
     * @return $this
     */
    public function setSentRepresentingName($sent_representing_name)
    {
        $this->container['sent_representing_name'] = $sent_representing_name;

        return $this;
    }

    /**
     * Gets sent_representing_smtp_address
     *
     * @return string
     */
    public function getSentRepresentingSmtpAddress()
    {
        return $this->container['sent_representing_smtp_address'];
    }

    /**
     * Sets sent_representing_smtp_address
     *
     * @param string $sent_representing_smtp_address E-mail address for the messaging user represented by the sender.
     *
     * @return $this
     */
    public function setSentRepresentingSmtpAddress($sent_representing_smtp_address)
    {
        $this->container['sent_representing_smtp_address'] = $sent_representing_smtp_address;

        return $this;
    }

    /**
     * Gets transport_message_headers
     *
     * @return string
     */
    public function getTransportMessageHeaders()
    {
        return $this->container['transport_message_headers'];
    }

    /**
     * Sets transport_message_headers
     *
     * @param string $transport_message_headers Transport-specific message envelope information.
     *
     * @return $this
     */
    public function setTransportMessageHeaders($transport_message_headers)
    {
        $this->container['transport_message_headers'] = $transport_message_headers;

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

