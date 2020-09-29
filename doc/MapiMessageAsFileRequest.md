# MapiMessageAsFileRequest

Convert MapiMessage to file request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string** | Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft | 
**value** | [**\Aspose\Email\Model\MapiMessageDto**](MapiMessageDto.md) | MAPI message model. | 



## Example
```php
$mapiMessageAsFileRequest = new MapiMessageAsFileRequest
{
    Format = "Msg",
    Value = new MapiMessageDto
    {
        MessageBody = "Some body",
        ClientSubmitTime = DateTime.Today,
        DeliveryTime = DateTime.Today,
        DisplayTo = "To Address",
        Flags = new List<MapiMessageFlag>
        {
            "MsgFlagRead",
            "MsgFlagUnsent",
            "MsgFlagHasAttach"
        },
        NormalizedSubject = "Some subject",
        SenderAddressType = "SMTP",
        SenderEmailAddress = "from@aspose.com",
        SenderName = "From Address",
        SenderSmtpAddress = "from@aspose.com",
        Attachments = new List<MapiAttachmentDto>
        {
            new MapiAttachmentDto
            {
                Name = "some-file.txt",
                DataBase64 = "U29tZSBmaWxlIHRleHQ="
            }
        },
        Body = "Some body",
        MessageClass = "IPM.Note",
        Recipients = new List<MapiRecipientDto>
        {
            new MapiRecipientDto
            {
                EmailAddress = "to@aspose.com",
                AddressType = "SMTP",
                DisplayName = "To Address",
                RecipientType = "MapiTo"
            }
        },
        Subject = "Re: Some subject",
        SubjectPrefix = "Re: "
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

