# EmailDto

Email message representation.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**alternate_views** | [**\Aspose\Email\Model\AlternateView[]**](AlternateView.md) | Collection of alternate views of message. | [optional] 
**attachments** | [**\Aspose\Email\Model\Attachment[]**](Attachment.md) | Email message attachments. | [optional] 
**bcc** | [**\Aspose\Email\Model\MailAddress[]**](MailAddress.md) | BCC recipients. | [optional] 
**body** | **string** | Email message body as plain text. | [optional] 
**body_encoding** | **string** | Body encoding. | [optional] 
**body_type** | **string** | The content type of message body. Enum, available values: PlainText, Html, Rtf | 
**cc** | [**\Aspose\Email\Model\MailAddress[]**](MailAddress.md) | CC recipients. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Message date. | 
**delivery_notification_options** | **string[]** | Delivery notifications. Items: Email delivery notification options. Enum, available values: Delay, Never, None, OnFailure, OnSuccess | [optional] 
**from** | [**\Aspose\Email\Model\MailAddress**](MailAddress.md) | From address. | [optional] 
**headers** | **map[string,string]** | Document headers. | [optional] 
**html_body** | **string** | HTML body. | [optional] 
**html_body_text** | **string** | Html body as plain text. Read only. | [optional] 
**is_body_html** | **bool** | Indicates whether the message body is in Html. | 
**is_draft** | **bool** | Indicates whether or not a message has been sent. | 
**is_encrypted** | **bool** | Indicates whether the message is encrypted. Read only. | 
**is_signed** | **bool** | Indicates whether the message is signed. Read only. | 
**linked_resources** | [**\Aspose\Email\Model\LinkedResource[]**](LinkedResource.md) | Linked resources of message. | [optional] 
**message_id** | **string** | Message id. | [optional] 
**original_is_tnef** | **bool** | Indicates whether original EML message is in TNEF format. Read only. | 
**preferred_text_encoding** | **string** | Preferred encoding. | [optional] 
**priority** | **string** | Email priority status. Enum, available values: High, Low, Normal | 
**read_receipt_to** | [**\Aspose\Email\Model\MailAddress[]**](MailAddress.md) | Read receipt addresses. | [optional] 
**reply_to_list** | [**\Aspose\Email\Model\MailAddress[]**](MailAddress.md) | The list of addresses to reply to for the mail message. | [optional] 
**reverse_path** | [**\Aspose\Email\Model\MailAddress**](MailAddress.md) | ReversePath address. | [optional] 
**sender** | [**\Aspose\Email\Model\MailAddress**](MailAddress.md) | Sender address. | [optional] 
**sensitivity** | **string** | Specifies the sensitivity of a MailMessage. Enum, available values: None, Normal, Personal, Private, CompanyConfidential | 
**subject** | **string** | Message subject. | [optional] 
**subject_encoding** | **string** | Subject encoding. | [optional] 
**time_zone_offset** | **int** | Coordinated Universal Time (UTC) offset for the message dates. This property defines the time zone difference, between the local time and UTC represented as count of ticks (10 000 per millisecond). | [optional] 
**to** | [**\Aspose\Email\Model\MailAddress[]**](MailAddress.md) | The address collection that contains the recipients of message. | [optional] 
**x_mailer** | **string** | The X-Mailer the software that created the e-mail message. | [optional] 



## Example
```php
$emailDto = new EmailDto
{
    Attachments = new List<Attachment>
    {
        new Attachment
        {
            Name = "some-file.txt",
            Base64Data = "U29tZSBmaWxlIGNvbnRlbnQ="
        }
    },
    Body = "Some body",
    BodyType = "Html",
    DeliveryNotificationOptions = new List<EmailDeliveryNotificationOptions>
    {
        "OnSuccess",
        "Delay"
    },
    From = new MailAddress
    {
        DisplayName = "From Address",
        Address = "from@aspose.com"
    },
    HtmlBody = "<b>Some body</b>",
    IsBodyHtml = true,
    IsDraft = true,
    Subject = "Re: Some subject",
    To = new List<MailAddress>
    {
        new MailAddress
        {
            DisplayName = "To Address",
            Address = "to@aspose.com"
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

