# MapiMessageDto

Represents an Outlook Message format document.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**message_body** | **string** | Message text | [optional] 
**client_submit_time** | [**\DateTime**](\DateTime.md) | Date and time the message sender submitted a message. | 
**conversation_topic** | **string** | Topic of the first message in a conversation thread. | [optional] 
**delivery_time** | [**\DateTime**](\DateTime.md) | Date and time a message was delivered. | 
**display_bcc** | **string** | List of the display names of any blind carbon copy (BCC) message recipients, separated by semicolons (;). | [optional] 
**display_cc** | **string** | List of the display names of any carbon copy (CC) message recipients, separated by semicolons (;). | [optional] 
**display_name** | **string** | Display name for the message. | [optional] 
**display_name_prefix** | **string** | Prefix of the display name. | [optional] 
**display_to** | **string** | List of the display names of the primary (To) message recipients, separated by semicolons (;). | [optional] 
**flags** | **string[]** | Message flags. Items: Mapi message flags. Enum, available values: MsgFlagZero, MsgFlagRead, MsgFlagUnmodified, MsgFlagSubmit, MsgFlagUnsent, MsgFlagHasAttach, MsgFlagFromMe, MsgFlagAssociated, MsgFlagResend, MsgFlagNotifyRead, MsgFlagNotifyUnread, MsgFlagEverRead, MsgFlagOriginX400, MsgFlagOriginInternet, MsgFlagOriginMiscExt | [optional] 
**headers** | **map[string,string]** | Transport message headers | [optional] 
**internet_message_id** | **string** | Internet message id of the message. | [optional] 
**message_format** | **string** | Represents outlook message format. Enum, available values: Ascii, Unicode | 
**normalized_subject** | **string** | Normalized subject of the message. | [optional] 
**read_receipt_requested** | **bool** | Value indicating whether the read receipt is requested. | 
**reply_to** | **string** | Reply to names. | [optional] 
**sender_address_type** | **string** | Message sender's e-mail address type. | [optional] 
**sender_email_address** | **string** | Message sender's e-mail address. | [optional] 
**sender_name** | **string** | Message sender's display name. | [optional] 
**sender_smtp_address** | **string** | Message sender's e-mail address. | [optional] 
**sent_representing_address_type** | **string** | Address type for the messaging user represented by the sender. | [optional] 
**sent_representing_email_address** | **string** | E-mail address for the messaging user represented by the sender. | [optional] 
**sent_representing_name** | **string** | Display name for the messaging user represented by the sender. | [optional] 
**sent_representing_smtp_address** | **string** | E-mail address for the messaging user represented by the sender. | [optional] 
**transport_message_headers** | **string** | Transport-specific message envelope information. | [optional] 

 Parent class: [MapiMessageItemBaseDto](MapiMessageItemBaseDto.md)


## Example
```php
$mapiMessageDto = new MapiMessageDto
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
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

