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
$mapiMessageDto = Models::mapiMessageDto()
    ->messageBody('Some body')
    ->clientSubmitTime(new DateTime())
    ->deliveryTime(new DateTime())
    ->displayTo('To Address')
    ->flags(array(
        'MsgFlagRead',
        'MsgFlagUnsent',
        'MsgFlagHasAttach'))
    ->normalizedSubject('Some subject')
    ->senderAddressType('SMTP')
    ->senderEmailAddress('from@aspose.com')
    ->senderName('From Address')
    ->senderSmtpAddress('from@aspose.com')
    ->attachments(array(
        Models::mapiAttachmentDto()
            ->name('some-file.txt')
            ->dataBase64('U29tZSBmaWxlIHRleHQ=')
            ->build()))
    ->body('Some body')
    ->messageClass('IPM.Note')
    ->recipients(array(
        Models::mapiRecipientDto()
            ->emailAddress('to@aspose.com')
            ->addressType('SMTP')
            ->displayName('To Address')
            ->recipientType('MapiTo')
            ->build()))
    ->subject('Re: Some subject')
    ->subjectPrefix('Re: ')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

