<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailDtoBuilder.php">
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
 * EmailDtoBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailDto builder.
 */
class EmailDtoBuilder
{
    /**
     * A model to build.
     * @var EmailDto
     */
    private $model;
    /**
     * Initializes a new instance of the EmailDtoBuilder class.
     *
     * @param EmailDto $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailDto Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets alternateViews
     * @param \Aspose\Email\Model\AlternateView[] $alternateViews Collection of alternate views of message.
     * @return $this
     */
    public function alternateViews($alternateViews)
    {
        $this->model->setAlternateViews($alternateViews);
        return $this;
    }
    /**
     * Sets attachments
     * @param \Aspose\Email\Model\Attachment[] $attachments Email message attachments.
     * @return $this
     */
    public function attachments($attachments)
    {
        $this->model->setAttachments($attachments);
        return $this;
    }
    /**
     * Sets bcc
     * @param \Aspose\Email\Model\MailAddress[] $bcc BCC recipients.
     * @return $this
     */
    public function bcc($bcc)
    {
        $this->model->setBcc($bcc);
        return $this;
    }
    /**
     * Sets body
     * @param string $body Email message body as plain text.
     * @return $this
     */
    public function body($body)
    {
        $this->model->setBody($body);
        return $this;
    }
    /**
     * Sets bodyEncoding
     * @param string $bodyEncoding Body encoding.
     * @return $this
     */
    public function bodyEncoding($bodyEncoding)
    {
        $this->model->setBodyEncoding($bodyEncoding);
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
     * Sets cc
     * @param \Aspose\Email\Model\MailAddress[] $cc CC recipients.
     * @return $this
     */
    public function cc($cc)
    {
        $this->model->setCc($cc);
        return $this;
    }
    /**
     * Sets date
     * @param \DateTime $date Message date.
     * @return $this
     */
    public function date($date)
    {
        $this->model->setDate($date);
        return $this;
    }
    /**
     * Sets deliveryNotificationOptions
     * @param string[] $deliveryNotificationOptions Delivery notifications. Items: Email delivery notification options. Enum, available values: Delay, Never, None, OnFailure, OnSuccess
     * @return $this
     */
    public function deliveryNotificationOptions($deliveryNotificationOptions)
    {
        $this->model->setDeliveryNotificationOptions($deliveryNotificationOptions);
        return $this;
    }
    /**
     * Sets from
     * @param \Aspose\Email\Model\MailAddress $from From address.
     * @return $this
     */
    public function from($from)
    {
        $this->model->setFrom($from);
        return $this;
    }
    /**
     * Sets headers
     * @param map[string,string] $headers Document headers.
     * @return $this
     */
    public function headers($headers)
    {
        $this->model->setHeaders($headers);
        return $this;
    }
    /**
     * Sets htmlBody
     * @param string $htmlBody HTML body.
     * @return $this
     */
    public function htmlBody($htmlBody)
    {
        $this->model->setHtmlBody($htmlBody);
        return $this;
    }
    /**
     * Sets htmlBodyText
     * @param string $htmlBodyText Html body as plain text. Read only.
     * @return $this
     */
    public function htmlBodyText($htmlBodyText)
    {
        $this->model->setHtmlBodyText($htmlBodyText);
        return $this;
    }
    /**
     * Sets isBodyHtml
     * @param bool $isBodyHtml Indicates whether the message body is in Html.
     * @return $this
     */
    public function isBodyHtml($isBodyHtml)
    {
        $this->model->setIsBodyHtml($isBodyHtml);
        return $this;
    }
    /**
     * Sets isDraft
     * @param bool $isDraft Indicates whether or not a message has been sent.
     * @return $this
     */
    public function isDraft($isDraft)
    {
        $this->model->setIsDraft($isDraft);
        return $this;
    }
    /**
     * Sets isEncrypted
     * @param bool $isEncrypted Indicates whether the message is encrypted. Read only.
     * @return $this
     */
    public function isEncrypted($isEncrypted)
    {
        $this->model->setIsEncrypted($isEncrypted);
        return $this;
    }
    /**
     * Sets isSigned
     * @param bool $isSigned Indicates whether the message is signed. Read only.
     * @return $this
     */
    public function isSigned($isSigned)
    {
        $this->model->setIsSigned($isSigned);
        return $this;
    }
    /**
     * Sets linkedResources
     * @param \Aspose\Email\Model\LinkedResource[] $linkedResources Linked resources of message.
     * @return $this
     */
    public function linkedResources($linkedResources)
    {
        $this->model->setLinkedResources($linkedResources);
        return $this;
    }
    /**
     * Sets messageId
     * @param string $messageId Message id.
     * @return $this
     */
    public function messageId($messageId)
    {
        $this->model->setMessageId($messageId);
        return $this;
    }
    /**
     * Sets originalIsTnef
     * @param bool $originalIsTnef Indicates whether original EML message is in TNEF format. Read only.
     * @return $this
     */
    public function originalIsTnef($originalIsTnef)
    {
        $this->model->setOriginalIsTnef($originalIsTnef);
        return $this;
    }
    /**
     * Sets preferredTextEncoding
     * @param string $preferredTextEncoding Preferred encoding.
     * @return $this
     */
    public function preferredTextEncoding($preferredTextEncoding)
    {
        $this->model->setPreferredTextEncoding($preferredTextEncoding);
        return $this;
    }
    /**
     * Sets priority
     * @param string $priority Email priority status. Enum, available values: High, Low, Normal
     * @return $this
     */
    public function priority($priority)
    {
        $this->model->setPriority($priority);
        return $this;
    }
    /**
     * Sets readReceiptTo
     * @param \Aspose\Email\Model\MailAddress[] $readReceiptTo Read receipt addresses.
     * @return $this
     */
    public function readReceiptTo($readReceiptTo)
    {
        $this->model->setReadReceiptTo($readReceiptTo);
        return $this;
    }
    /**
     * Sets replyToList
     * @param \Aspose\Email\Model\MailAddress[] $replyToList The list of addresses to reply to for the mail message.
     * @return $this
     */
    public function replyToList($replyToList)
    {
        $this->model->setReplyToList($replyToList);
        return $this;
    }
    /**
     * Sets reversePath
     * @param \Aspose\Email\Model\MailAddress $reversePath ReversePath address.
     * @return $this
     */
    public function reversePath($reversePath)
    {
        $this->model->setReversePath($reversePath);
        return $this;
    }
    /**
     * Sets sender
     * @param \Aspose\Email\Model\MailAddress $sender Sender address.
     * @return $this
     */
    public function sender($sender)
    {
        $this->model->setSender($sender);
        return $this;
    }
    /**
     * Sets sensitivity
     * @param string $sensitivity Specifies the sensitivity of a MailMessage. Enum, available values: None, Normal, Personal, Private, CompanyConfidential
     * @return $this
     */
    public function sensitivity($sensitivity)
    {
        $this->model->setSensitivity($sensitivity);
        return $this;
    }
    /**
     * Sets subject
     * @param string $subject Message subject.
     * @return $this
     */
    public function subject($subject)
    {
        $this->model->setSubject($subject);
        return $this;
    }
    /**
     * Sets subjectEncoding
     * @param string $subjectEncoding Subject encoding.
     * @return $this
     */
    public function subjectEncoding($subjectEncoding)
    {
        $this->model->setSubjectEncoding($subjectEncoding);
        return $this;
    }
    /**
     * Sets timeZoneOffset
     * @param int $timeZoneOffset Coordinated Universal Time (UTC) offset for the message dates. This property defines the time zone difference, between the local time and UTC represented as count of ticks (10 000 per millisecond).
     * @return $this
     */
    public function timeZoneOffset($timeZoneOffset)
    {
        $this->model->setTimeZoneOffset($timeZoneOffset);
        return $this;
    }
    /**
     * Sets to
     * @param \Aspose\Email\Model\MailAddress[] $to The address collection that contains the recipients of message.
     * @return $this
     */
    public function to($to)
    {
        $this->model->setTo($to);
        return $this;
    }
    /**
     * Sets xMailer
     * @param string $xMailer The X-Mailer the software that created the e-mail message.
     * @return $this
     */
    public function xMailer($xMailer)
    {
        $this->model->setXMailer($xMailer);
        return $this;
    }
}

