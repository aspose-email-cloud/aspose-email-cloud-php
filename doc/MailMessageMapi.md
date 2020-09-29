# MailMessageMapi

Email message represented as MAPI object.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\MapiMessageDto**](MapiMessageDto.md) | Email message object. | 

 Parent class: [MailMessageBase](MailMessageBase.md)


## Example
```php
$mailMessageMapi = Models::mailMessageMapi()
    ->value(Models::mapiMessageDto()
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
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

