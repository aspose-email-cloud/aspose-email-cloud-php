<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailDto.php">
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
 * EmailDto
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 * EmailDto
 *
 * @description Email message representation.
 */
class EmailDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailDto";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'alternate_views' => '\Aspose\Email\Model\AlternateView[]',
        'attachments' => '\Aspose\Email\Model\Attachment[]',
        'bcc' => '\Aspose\Email\Model\MailAddress[]',
        'body' => 'string',
        'body_encoding' => 'string',
        'body_type' => 'string',
        'cc' => '\Aspose\Email\Model\MailAddress[]',
        'date' => '\DateTime',
        'delivery_notification_options' => 'string[]',
        'from' => '\Aspose\Email\Model\MailAddress',
        'headers' => 'map[string,string]',
        'html_body' => 'string',
        'html_body_text' => 'string',
        'is_body_html' => 'bool',
        'is_draft' => 'bool',
        'is_encrypted' => 'bool',
        'is_signed' => 'bool',
        'linked_resources' => '\Aspose\Email\Model\LinkedResource[]',
        'message_id' => 'string',
        'original_is_tnef' => 'bool',
        'preferred_text_encoding' => 'string',
        'priority' => 'string',
        'read_receipt_to' => '\Aspose\Email\Model\MailAddress[]',
        'reply_to_list' => '\Aspose\Email\Model\MailAddress[]',
        'reverse_path' => '\Aspose\Email\Model\MailAddress',
        'sender' => '\Aspose\Email\Model\MailAddress',
        'sensitivity' => 'string',
        'subject' => 'string',
        'subject_encoding' => 'string',
        'time_zone_offset' => 'int',
        'to' => '\Aspose\Email\Model\MailAddress[]',
        'x_mailer' => 'string',
        'epilogue' => 'string',
        'preamble' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'alternate_views' => null,
        'attachments' => null,
        'bcc' => null,
        'body' => null,
        'body_encoding' => null,
        'body_type' => null,
        'cc' => null,
        'date' => 'date-time',
        'delivery_notification_options' => null,
        'from' => null,
        'headers' => null,
        'html_body' => null,
        'html_body_text' => null,
        'is_body_html' => null,
        'is_draft' => null,
        'is_encrypted' => null,
        'is_signed' => null,
        'linked_resources' => null,
        'message_id' => null,
        'original_is_tnef' => null,
        'preferred_text_encoding' => null,
        'priority' => null,
        'read_receipt_to' => null,
        'reply_to_list' => null,
        'reverse_path' => null,
        'sender' => null,
        'sensitivity' => null,
        'subject' => null,
        'subject_encoding' => null,
        'time_zone_offset' => 'int64',
        'to' => null,
        'x_mailer' => null,
        'epilogue' => null,
        'preamble' => null
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
        'alternate_views' => 'alternateViews',
        'attachments' => 'attachments',
        'bcc' => 'bcc',
        'body' => 'body',
        'body_encoding' => 'bodyEncoding',
        'body_type' => 'bodyType',
        'cc' => 'cc',
        'date' => 'date',
        'delivery_notification_options' => 'deliveryNotificationOptions',
        'from' => 'from',
        'headers' => 'headers',
        'html_body' => 'htmlBody',
        'html_body_text' => 'htmlBodyText',
        'is_body_html' => 'isBodyHtml',
        'is_draft' => 'isDraft',
        'is_encrypted' => 'isEncrypted',
        'is_signed' => 'isSigned',
        'linked_resources' => 'linkedResources',
        'message_id' => 'messageId',
        'original_is_tnef' => 'originalIsTnef',
        'preferred_text_encoding' => 'preferredTextEncoding',
        'priority' => 'priority',
        'read_receipt_to' => 'readReceiptTo',
        'reply_to_list' => 'replyToList',
        'reverse_path' => 'reversePath',
        'sender' => 'sender',
        'sensitivity' => 'sensitivity',
        'subject' => 'subject',
        'subject_encoding' => 'subjectEncoding',
        'time_zone_offset' => 'timeZoneOffset',
        'to' => 'to',
        'x_mailer' => 'xMailer',
        'epilogue' => 'epilogue',
        'preamble' => 'preamble'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alternate_views' => 'setAlternateViews',
        'attachments' => 'setAttachments',
        'bcc' => 'setBcc',
        'body' => 'setBody',
        'body_encoding' => 'setBodyEncoding',
        'body_type' => 'setBodyType',
        'cc' => 'setCc',
        'date' => 'setDate',
        'delivery_notification_options' => 'setDeliveryNotificationOptions',
        'from' => 'setFrom',
        'headers' => 'setHeaders',
        'html_body' => 'setHtmlBody',
        'html_body_text' => 'setHtmlBodyText',
        'is_body_html' => 'setIsBodyHtml',
        'is_draft' => 'setIsDraft',
        'is_encrypted' => 'setIsEncrypted',
        'is_signed' => 'setIsSigned',
        'linked_resources' => 'setLinkedResources',
        'message_id' => 'setMessageId',
        'original_is_tnef' => 'setOriginalIsTnef',
        'preferred_text_encoding' => 'setPreferredTextEncoding',
        'priority' => 'setPriority',
        'read_receipt_to' => 'setReadReceiptTo',
        'reply_to_list' => 'setReplyToList',
        'reverse_path' => 'setReversePath',
        'sender' => 'setSender',
        'sensitivity' => 'setSensitivity',
        'subject' => 'setSubject',
        'subject_encoding' => 'setSubjectEncoding',
        'time_zone_offset' => 'setTimeZoneOffset',
        'to' => 'setTo',
        'x_mailer' => 'setXMailer',
        'epilogue' => 'setEpilogue',
        'preamble' => 'setPreamble'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alternate_views' => 'getAlternateViews',
        'attachments' => 'getAttachments',
        'bcc' => 'getBcc',
        'body' => 'getBody',
        'body_encoding' => 'getBodyEncoding',
        'body_type' => 'getBodyType',
        'cc' => 'getCc',
        'date' => 'getDate',
        'delivery_notification_options' => 'getDeliveryNotificationOptions',
        'from' => 'getFrom',
        'headers' => 'getHeaders',
        'html_body' => 'getHtmlBody',
        'html_body_text' => 'getHtmlBodyText',
        'is_body_html' => 'getIsBodyHtml',
        'is_draft' => 'getIsDraft',
        'is_encrypted' => 'getIsEncrypted',
        'is_signed' => 'getIsSigned',
        'linked_resources' => 'getLinkedResources',
        'message_id' => 'getMessageId',
        'original_is_tnef' => 'getOriginalIsTnef',
        'preferred_text_encoding' => 'getPreferredTextEncoding',
        'priority' => 'getPriority',
        'read_receipt_to' => 'getReadReceiptTo',
        'reply_to_list' => 'getReplyToList',
        'reverse_path' => 'getReversePath',
        'sender' => 'getSender',
        'sensitivity' => 'getSensitivity',
        'subject' => 'getSubject',
        'subject_encoding' => 'getSubjectEncoding',
        'time_zone_offset' => 'getTimeZoneOffset',
        'to' => 'getTo',
        'x_mailer' => 'getXMailer',
        'epilogue' => 'getEpilogue',
        'preamble' => 'getPreamble'
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
     * Initializes a new instance of the EmailDto class.
     *  
     * @param \Aspose\Email\Model\AlternateView[] $alternate_views Collection of alternate views of message.
     * @param \Aspose\Email\Model\Attachment[] $attachments Email message attachments.
     * @param \Aspose\Email\Model\MailAddress[] $bcc BCC recipients.
     * @param string $body Email message body as plain text.
     * @param string $body_encoding Body encoding.
     * @param string $body_type The content type of message body./nEnum, available values: PlainText, Html, Rtf
     * @param \Aspose\Email\Model\MailAddress[] $cc CC recipients.
     * @param \DateTime $date Message date.
     * @param string[] $delivery_notification_options Delivery notifications. Items: Email delivery notification options./nEnum, available values: Delay, Never, None, OnFailure, OnSuccess
     * @param \Aspose\Email\Model\MailAddress $from From address.
     * @param map[string,string] $headers Document headers.
     * @param string $html_body HTML body.
     * @param string $html_body_text Html body as plain text. Read only.
     * @param bool $is_body_html Indicates whether the message body is in Html.
     * @param bool $is_draft Indicates whether or not a message has been sent.
     * @param bool $is_encrypted Indicates whether the message is encrypted. Read only.
     * @param bool $is_signed Indicates whether the message is signed. Read only.
     * @param \Aspose\Email\Model\LinkedResource[] $linked_resources Linked resources of message.
     * @param string $message_id Message id.
     * @param bool $original_is_tnef Indicates whether original EML message is in TNEF format. Read only.
     * @param string $preferred_text_encoding Preferred encoding.
     * @param string $priority Email priority status./nEnum, available values: High, Low, Normal
     * @param \Aspose\Email\Model\MailAddress[] $read_receipt_to Read receipt addresses.
     * @param \Aspose\Email\Model\MailAddress[] $reply_to_list The list of addresses to reply to for the mail message.
     * @param \Aspose\Email\Model\MailAddress $reverse_path ReversePath address.
     * @param \Aspose\Email\Model\MailAddress $sender Sender address.
     * @param string $sensitivity Specifies the sensitivity of a MailMessage./nEnum, available values: None, Normal, Personal, Private, CompanyConfidential
     * @param string $subject Message subject.
     * @param string $subject_encoding Subject encoding.
     * @param int $time_zone_offset Coordinated Universal Time (UTC) offset for the message dates. This property defines the time zone difference, between the local time and UTC represented as count of ticks (10 000 per millisecond).
     * @param \Aspose\Email\Model\MailAddress[] $to The address collection that contains the recipients of message.
     * @param string $x_mailer The X-Mailer the software that created the e-mail message.
     * @param string $epilogue Gets or sets an epilogue text. It is located after the last boundary.
     * @param string $preamble Gets or sets a preamble text. It is located before the first boundary and generally includes an explanatory note to non-MIME conformant readers.
     */
    public function __construct(
        $alternate_views = null,
        $attachments = null,
        $bcc = null,
        $body = null,
        $body_encoding = null,
        $body_type = null,
        $cc = null,
        $date = null,
        $delivery_notification_options = null,
        $from = null,
        $headers = null,
        $html_body = null,
        $html_body_text = null,
        $is_body_html = null,
        $is_draft = null,
        $is_encrypted = null,
        $is_signed = null,
        $linked_resources = null,
        $message_id = null,
        $original_is_tnef = null,
        $preferred_text_encoding = null,
        $priority = null,
        $read_receipt_to = null,
        $reply_to_list = null,
        $reverse_path = null,
        $sender = null,
        $sensitivity = null,
        $subject = null,
        $subject_encoding = null,
        $time_zone_offset = null,
        $to = null,
        $x_mailer = null,
        $epilogue = null,
        $preamble = null
    ) {
        $this->container['alternate_views'] = null;
        $this->container['attachments'] = null;
        $this->container['bcc'] = null;
        $this->container['body'] = null;
        $this->container['body_encoding'] = null;
        $this->container['body_type'] = null;
        $this->container['cc'] = null;
        $this->container['date'] = null;
        $this->container['delivery_notification_options'] = null;
        $this->container['from'] = null;
        $this->container['headers'] = null;
        $this->container['html_body'] = null;
        $this->container['html_body_text'] = null;
        $this->container['is_body_html'] = null;
        $this->container['is_draft'] = null;
        $this->container['is_encrypted'] = null;
        $this->container['is_signed'] = null;
        $this->container['linked_resources'] = null;
        $this->container['message_id'] = null;
        $this->container['original_is_tnef'] = null;
        $this->container['preferred_text_encoding'] = null;
        $this->container['priority'] = null;
        $this->container['read_receipt_to'] = null;
        $this->container['reply_to_list'] = null;
        $this->container['reverse_path'] = null;
        $this->container['sender'] = null;
        $this->container['sensitivity'] = null;
        $this->container['subject'] = null;
        $this->container['subject_encoding'] = null;
        $this->container['time_zone_offset'] = null;
        $this->container['to'] = null;
        $this->container['x_mailer'] = null;
        $this->container['epilogue'] = null;
        $this->container['preamble'] = null;

        if ($alternate_views != null) $this->setAlternateViews($alternate_views);
        if ($attachments != null) $this->setAttachments($attachments);
        if ($bcc != null) $this->setBcc($bcc);
        if ($body != null) $this->setBody($body);
        if ($body_encoding != null) $this->setBodyEncoding($body_encoding);
        if ($body_type != null) $this->setBodyType($body_type);
        if ($cc != null) $this->setCc($cc);
        if ($date != null) $this->setDate($date);
        if ($delivery_notification_options != null) $this->setDeliveryNotificationOptions($delivery_notification_options);
        if ($from != null) $this->setFrom($from);
        if ($headers != null) $this->setHeaders($headers);
        if ($html_body != null) $this->setHtmlBody($html_body);
        if ($html_body_text != null) $this->setHtmlBodyText($html_body_text);
        if ($is_body_html != null) $this->setIsBodyHtml($is_body_html);
        if ($is_draft != null) $this->setIsDraft($is_draft);
        if ($is_encrypted != null) $this->setIsEncrypted($is_encrypted);
        if ($is_signed != null) $this->setIsSigned($is_signed);
        if ($linked_resources != null) $this->setLinkedResources($linked_resources);
        if ($message_id != null) $this->setMessageId($message_id);
        if ($original_is_tnef != null) $this->setOriginalIsTnef($original_is_tnef);
        if ($preferred_text_encoding != null) $this->setPreferredTextEncoding($preferred_text_encoding);
        if ($priority != null) $this->setPriority($priority);
        if ($read_receipt_to != null) $this->setReadReceiptTo($read_receipt_to);
        if ($reply_to_list != null) $this->setReplyToList($reply_to_list);
        if ($reverse_path != null) $this->setReversePath($reverse_path);
        if ($sender != null) $this->setSender($sender);
        if ($sensitivity != null) $this->setSensitivity($sensitivity);
        if ($subject != null) $this->setSubject($subject);
        if ($subject_encoding != null) $this->setSubjectEncoding($subject_encoding);
        if ($time_zone_offset != null) $this->setTimeZoneOffset($time_zone_offset);
        if ($to != null) $this->setTo($to);
        if ($x_mailer != null) $this->setXMailer($x_mailer);
        if ($epilogue != null) $this->setEpilogue($epilogue);
        if ($preamble != null) $this->setPreamble($preamble);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['body_type'] === null) {
            $invalidProperties[] = "'body_type' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['is_body_html'] === null) {
            $invalidProperties[] = "'is_body_html' can't be null";
        }
        if ($this->container['is_draft'] === null) {
            $invalidProperties[] = "'is_draft' can't be null";
        }
        if ($this->container['is_encrypted'] === null) {
            $invalidProperties[] = "'is_encrypted' can't be null";
        }
        if ($this->container['is_signed'] === null) {
            $invalidProperties[] = "'is_signed' can't be null";
        }
        if ($this->container['original_is_tnef'] === null) {
            $invalidProperties[] = "'original_is_tnef' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['sensitivity'] === null) {
            $invalidProperties[] = "'sensitivity' can't be null";
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

        if ($this->container['body_type'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['is_body_html'] === null) {
            return false;
        }
        if ($this->container['is_draft'] === null) {
            return false;
        }
        if ($this->container['is_encrypted'] === null) {
            return false;
        }
        if ($this->container['is_signed'] === null) {
            return false;
        }
        if ($this->container['original_is_tnef'] === null) {
            return false;
        }
        if ($this->container['priority'] === null) {
            return false;
        }
        if ($this->container['sensitivity'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets alternate_views
     *
     * @return \Aspose\Email\Model\AlternateView[]
     */
    public function getAlternateViews()
    {
        return $this->container['alternate_views'];
    }

    /**
     * Sets alternate_views
     *
     * @param \Aspose\Email\Model\AlternateView[] $alternate_views Collection of alternate views of message.
     *
     * @return $this
     */
    public function setAlternateViews($alternate_views)
    {
        $this->container['alternate_views'] = $alternate_views;

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
     * @param \Aspose\Email\Model\Attachment[] $attachments Email message attachments.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return \Aspose\Email\Model\MailAddress[]
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param \Aspose\Email\Model\MailAddress[] $bcc BCC recipients.
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body Email message body as plain text.
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets body_encoding
     *
     * @return string
     */
    public function getBodyEncoding()
    {
        return $this->container['body_encoding'];
    }

    /**
     * Sets body_encoding
     *
     * @param string $body_encoding Body encoding.
     *
     * @return $this
     */
    public function setBodyEncoding($body_encoding)
    {
        $this->container['body_encoding'] = $body_encoding;

        return $this;
    }

    /**
     * Gets body_type
     *
     * @return string
     */
    public function getBodyType()
    {
        return $this->container['body_type'];
    }

    /**
     * Sets body_type
     *
     * @param string $body_type The content type of message body./nEnum, available values: PlainText, Html, Rtf
     *
     * @return $this
     */
    public function setBodyType($body_type)
    {
        $this->container['body_type'] = $body_type;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return \Aspose\Email\Model\MailAddress[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param \Aspose\Email\Model\MailAddress[] $cc CC recipients.
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Message date.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets delivery_notification_options
     *
     * @return string[]
     */
    public function getDeliveryNotificationOptions()
    {
        return $this->container['delivery_notification_options'];
    }

    /**
     * Sets delivery_notification_options
     *
     * @param string[] $delivery_notification_options Delivery notifications. Items: Email delivery notification options./nEnum, available values: Delay, Never, None, OnFailure, OnSuccess
     *
     * @return $this
     */
    public function setDeliveryNotificationOptions($delivery_notification_options)
    {
        $this->container['delivery_notification_options'] = $delivery_notification_options;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \Aspose\Email\Model\MailAddress
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Aspose\Email\Model\MailAddress $from From address.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

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
     * @param map[string,string] $headers Document headers.
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets html_body
     *
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->container['html_body'];
    }

    /**
     * Sets html_body
     *
     * @param string $html_body HTML body.
     *
     * @return $this
     */
    public function setHtmlBody($html_body)
    {
        $this->container['html_body'] = $html_body;

        return $this;
    }

    /**
     * Gets html_body_text
     *
     * @return string
     */
    public function getHtmlBodyText()
    {
        return $this->container['html_body_text'];
    }

    /**
     * Sets html_body_text
     *
     * @param string $html_body_text Html body as plain text. Read only.
     *
     * @return $this
     */
    public function setHtmlBodyText($html_body_text)
    {
        $this->container['html_body_text'] = $html_body_text;

        return $this;
    }

    /**
     * Gets is_body_html
     *
     * @return bool
     */
    public function getIsBodyHtml()
    {
        return $this->container['is_body_html'];
    }

    /**
     * Sets is_body_html
     *
     * @param bool $is_body_html Indicates whether the message body is in Html.
     *
     * @return $this
     */
    public function setIsBodyHtml($is_body_html)
    {
        $this->container['is_body_html'] = $is_body_html;

        return $this;
    }

    /**
     * Gets is_draft
     *
     * @return bool
     */
    public function getIsDraft()
    {
        return $this->container['is_draft'];
    }

    /**
     * Sets is_draft
     *
     * @param bool $is_draft Indicates whether or not a message has been sent.
     *
     * @return $this
     */
    public function setIsDraft($is_draft)
    {
        $this->container['is_draft'] = $is_draft;

        return $this;
    }

    /**
     * Gets is_encrypted
     *
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->container['is_encrypted'];
    }

    /**
     * Sets is_encrypted
     *
     * @param bool $is_encrypted Indicates whether the message is encrypted. Read only.
     *
     * @return $this
     */
    public function setIsEncrypted($is_encrypted)
    {
        $this->container['is_encrypted'] = $is_encrypted;

        return $this;
    }

    /**
     * Gets is_signed
     *
     * @return bool
     */
    public function getIsSigned()
    {
        return $this->container['is_signed'];
    }

    /**
     * Sets is_signed
     *
     * @param bool $is_signed Indicates whether the message is signed. Read only.
     *
     * @return $this
     */
    public function setIsSigned($is_signed)
    {
        $this->container['is_signed'] = $is_signed;

        return $this;
    }

    /**
     * Gets linked_resources
     *
     * @return \Aspose\Email\Model\LinkedResource[]
     */
    public function getLinkedResources()
    {
        return $this->container['linked_resources'];
    }

    /**
     * Sets linked_resources
     *
     * @param \Aspose\Email\Model\LinkedResource[] $linked_resources Linked resources of message.
     *
     * @return $this
     */
    public function setLinkedResources($linked_resources)
    {
        $this->container['linked_resources'] = $linked_resources;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id Message id.
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets original_is_tnef
     *
     * @return bool
     */
    public function getOriginalIsTnef()
    {
        return $this->container['original_is_tnef'];
    }

    /**
     * Sets original_is_tnef
     *
     * @param bool $original_is_tnef Indicates whether original EML message is in TNEF format. Read only.
     *
     * @return $this
     */
    public function setOriginalIsTnef($original_is_tnef)
    {
        $this->container['original_is_tnef'] = $original_is_tnef;

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
     * @param string $preferred_text_encoding Preferred encoding.
     *
     * @return $this
     */
    public function setPreferredTextEncoding($preferred_text_encoding)
    {
        $this->container['preferred_text_encoding'] = $preferred_text_encoding;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority Email priority status./nEnum, available values: High, Low, Normal
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets read_receipt_to
     *
     * @return \Aspose\Email\Model\MailAddress[]
     */
    public function getReadReceiptTo()
    {
        return $this->container['read_receipt_to'];
    }

    /**
     * Sets read_receipt_to
     *
     * @param \Aspose\Email\Model\MailAddress[] $read_receipt_to Read receipt addresses.
     *
     * @return $this
     */
    public function setReadReceiptTo($read_receipt_to)
    {
        $this->container['read_receipt_to'] = $read_receipt_to;

        return $this;
    }

    /**
     * Gets reply_to_list
     *
     * @return \Aspose\Email\Model\MailAddress[]
     */
    public function getReplyToList()
    {
        return $this->container['reply_to_list'];
    }

    /**
     * Sets reply_to_list
     *
     * @param \Aspose\Email\Model\MailAddress[] $reply_to_list The list of addresses to reply to for the mail message.
     *
     * @return $this
     */
    public function setReplyToList($reply_to_list)
    {
        $this->container['reply_to_list'] = $reply_to_list;

        return $this;
    }

    /**
     * Gets reverse_path
     *
     * @return \Aspose\Email\Model\MailAddress
     */
    public function getReversePath()
    {
        return $this->container['reverse_path'];
    }

    /**
     * Sets reverse_path
     *
     * @param \Aspose\Email\Model\MailAddress $reverse_path ReversePath address.
     *
     * @return $this
     */
    public function setReversePath($reverse_path)
    {
        $this->container['reverse_path'] = $reverse_path;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Aspose\Email\Model\MailAddress
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Aspose\Email\Model\MailAddress $sender Sender address.
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets sensitivity
     *
     * @return string
     */
    public function getSensitivity()
    {
        return $this->container['sensitivity'];
    }

    /**
     * Sets sensitivity
     *
     * @param string $sensitivity Specifies the sensitivity of a MailMessage./nEnum, available values: None, Normal, Personal, Private, CompanyConfidential
     *
     * @return $this
     */
    public function setSensitivity($sensitivity)
    {
        $this->container['sensitivity'] = $sensitivity;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Message subject.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets subject_encoding
     *
     * @return string
     */
    public function getSubjectEncoding()
    {
        return $this->container['subject_encoding'];
    }

    /**
     * Sets subject_encoding
     *
     * @param string $subject_encoding Subject encoding.
     *
     * @return $this
     */
    public function setSubjectEncoding($subject_encoding)
    {
        $this->container['subject_encoding'] = $subject_encoding;

        return $this;
    }

    /**
     * Gets time_zone_offset
     *
     * @return int
     */
    public function getTimeZoneOffset()
    {
        return $this->container['time_zone_offset'];
    }

    /**
     * Sets time_zone_offset
     *
     * @param int $time_zone_offset Coordinated Universal Time (UTC) offset for the message dates. This property defines the time zone difference, between the local time and UTC represented as count of ticks (10 000 per millisecond).
     *
     * @return $this
     */
    public function setTimeZoneOffset($time_zone_offset)
    {
        $this->container['time_zone_offset'] = $time_zone_offset;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Aspose\Email\Model\MailAddress[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Aspose\Email\Model\MailAddress[] $to The address collection that contains the recipients of message.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets x_mailer
     *
     * @return string
     */
    public function getXMailer()
    {
        return $this->container['x_mailer'];
    }

    /**
     * Sets x_mailer
     *
     * @param string $x_mailer The X-Mailer the software that created the e-mail message.
     *
     * @return $this
     */
    public function setXMailer($x_mailer)
    {
        $this->container['x_mailer'] = $x_mailer;

        return $this;
    }

    /**
     * Gets epilogue
     *
     * @return string
     */
    public function getEpilogue()
    {
        return $this->container['epilogue'];
    }

    /**
     * Sets epilogue
     *
     * @param string $epilogue Gets or sets an epilogue text. It is located after the last boundary.
     *
     * @return $this
     */
    public function setEpilogue($epilogue)
    {
        $this->container['epilogue'] = $epilogue;

        return $this;
    }

    /**
     * Gets preamble
     *
     * @return string
     */
    public function getPreamble()
    {
        return $this->container['preamble'];
    }

    /**
     * Sets preamble
     *
     * @param string $preamble Gets or sets a preamble text. It is located before the first boundary and generally includes an explanatory note to non-MIME conformant readers.
     *
     * @return $this
     */
    public function setPreamble($preamble)
    {
        $this->container['preamble'] = $preamble;

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

