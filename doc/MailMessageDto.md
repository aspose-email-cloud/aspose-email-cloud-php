# MailMessageDto

Represents email message, stored as an EmailDto object.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\EmailDto**](EmailDto.md) | Message document object. | 

 Parent class: [MailMessageBase](MailMessageBase.md)


## Example
```php
$mailMessageDto = Models::mailMessageDto()
    ->value(Models::emailDto()
        ->attachments(array(
            Models::attachment()
                ->name('some-file.txt')
                ->base64Data('U29tZSBmaWxlIGNvbnRlbnQ=')
                ->build()))
        ->body('Some body')
        ->bodyType('Html')
        ->deliveryNotificationOptions(array(
            'OnSuccess',
            'Delay'))
        ->from(Models::mailAddress()
            ->displayName('From Address')
            ->address('from@aspose.com')
            ->build())
        ->htmlBody('<b>Some body</b>')
        ->isBodyHtml(true)
        ->isDraft(true)
        ->subject('Re: Some subject')
        ->to(array(
            Models::mailAddress()
                ->displayName('To Address')
                ->address('to@aspose.com')
                ->build()))
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

