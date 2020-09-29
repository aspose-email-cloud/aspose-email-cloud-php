# MailMessageDto

Represents email message, stored as an EmailDto object.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\EmailDto**](EmailDto.md) | Message document object. | 

 Parent class: [MailMessageBase](MailMessageBase.md)


## Example
```php
$mailMessageDto = new MailMessageDto
{
    Value = new EmailDto
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
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

