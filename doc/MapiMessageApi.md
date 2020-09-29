# MapiMessageApi (EmailCloud.mapi()->message())

MAPI message operations

## asEmailDto

Description: Converts MAPI message model to EmailDto model

Returns: EmailDto model

Method call example:
```php
$result = $api->mapi()->message()->asEmailDto($mapi_message);
```

### Parameter: mapi_message

Description: MAPI message model to convert

See parameter model documentation at [MapiMessageDto](MapiMessageDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$mapi_message = Models::mapiMessageDto()
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

</details>


### Result

Description: EmailDto model

Return type: [**EmailDto**](EmailDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::emailDto()
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
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$mapi_message = Models::mapiMessageDto()
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

// Call method:
$result = $api->mapi()->message().asEmailDto($mapi_message);

// Result example:
$result = Models::emailDto()
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
    ->build();
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asFile

Description: Converts MAPI message model to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->mapi()->message()->asFile($request);
```

### Parameter: request

Description: MAPI message model to convert.

See parameter model documentation at [MapiMessageAsFileRequest](MapiMessageAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::mapiMessageAsFileRequest()
    ->format('Msg')
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

</details>


### Result

Description: File stream in specified format.

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = Models::mapiMessageAsFileRequest()
    ->format('Msg')
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

// Call method:
$result = $api->mapi()->message().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **fromFile**

Description: Converts email file to a MAPI model representation

Returns: MAPI model

Method call example:
```php
$result = $api->mapi()->message()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [MapiMessageFromFileRequest](MapiMessageFromFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiMessageFromFileRequest()
    ->format('Msg')
    ->file(new SplFileObject('/path/to/message.msg'))
    ->build();
```

</details>

### Result

Description: MAPI model

Return type: [**MapiMessageDto**](MapiMessageDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::mapiMessageDto()
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
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$format = ;
$file = ;

// Call method:
$result = $api->mapi()->message().fromFile($request);

// Result example:
$result = Models::mapiMessageDto()
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

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get MAPI message document.

Returns: MAPI message document.

Method call example:
```php
$result = $api->mapi()->message()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [MapiMessageGetRequest](MapiMessageGetRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiMessageGetRequest()
    ->format('Eml')
    ->file_name('email.eml')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    ->build();
```

</details>

### Result

Description: MAPI message document.

Return type: [**MapiMessageDto**](MapiMessageDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::mapiMessageDto()
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
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$format = ;
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->mapi()->message().get($request);

// Result example:
$result = Models::mapiMessageDto()
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

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save MAPI message to storage.


Method call example:
```php
$api->mapi()->message()->save($request);
```

### Parameter: request

Description: Message create/update request.

See parameter model documentation at [MapiMessageSaveRequest](MapiMessageSaveRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::mapiMessageSaveRequest()
    ->format('Msg')
    ->storageFile(Models::storageFileLocation()
        ->fileName('message.msg')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
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

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = Models::mapiMessageSaveRequest()
    ->format('Msg')
    ->storageFile(Models::storageFileLocation()
        ->fileName('message.msg')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
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

// Call method:
$api->mapi()->message().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
