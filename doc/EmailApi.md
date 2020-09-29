# EmailApi ($emailCloud->email())

Email document (*.eml) operations.

## asFile

Description: Converts Email model to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->email()->asFile($request);
```

### Parameter: request

Description: Email model and format to convert.

See parameter model documentation at [EmailAsFileRequest](EmailAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::emailAsFileRequest()
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
$request = Models::emailAsFileRequest()
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

// Call method:
$result = $api->email().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asMapi

Description: Converts EmailDto to MapiMessageDto.

Returns: MAPI model message representation

Method call example:
```php
$result = $api->email()->asMapi($email_dto);
```

### Parameter: email_dto

Description: Email model to convert

See parameter model documentation at [EmailDto](EmailDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$email_dto = Models::emailDto()
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


### Result

Description: MAPI model message representation

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
$email_dto = Models::emailDto()
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

// Call method:
$result = $api->email().asMapi($email_dto);

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

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **convert**

Description: Converts email document to specified format and returns as file

Returns: File stream in specified format

Method call example:
```php
$result = $api->email()->convert($request);
```

### Parameter: request

Description: convert method request.

See parameter model documentation at [EmailConvertRequest](EmailConvertRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::EmailConvertRequest()
    ->from_format('Msg')
    ->to_format('Mhtml')
    ->file(new SplFileObject('/path/to/message.msg'))
    ->build();
```

</details>

### Result

Description: File stream in specified format

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$from_format = ;
$to_format = ;
$file = ;

// Call method:
$result = $api->email().convert($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **fromFile**

Description: Converts email document to a model representation

Returns: Email document model

Method call example:
```php
$result = $api->email()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [EmailFromFileRequest](EmailFromFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::EmailFromFileRequest()
    ->format('Eml')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->build();
```

</details>

### Result

Description: Email document model

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
$format = ;
$file = ;

// Call method:
$result = $api->email().fromFile($request);

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

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get email document from storage.

Returns: Email document.

Method call example:
```php
$result = $api->email()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [EmailGetRequest](EmailGetRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::EmailGetRequest()
    ->format('Eml')
    ->file_name('email.eml')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    ->build();
```

</details>

### Result

Description: Email document.

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
$format = ;
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->email().get($request);

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

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getAsFile**

Description: Converts email document from storage to specified format and returns as file

Returns: File stream in specified format

Method call example:
```php
$result = $api->email()->getAsFile($request);
```

### Parameter: request

Description: getAsFile method request.

See parameter model documentation at [EmailGetAsFileRequest](EmailGetAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::EmailGetAsFileRequest()
    ->file_name('email.eml')
    ->format('Mhtml')
    ->storage('First Storage')
    ->folder('folder/on/storage')
    ->build();
```

</details>

### Result

Description: File stream in specified format

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$file_name = ;
$format = ;
$storage = ;
$folder = ;

// Call method:
$result = $api->email().getAsFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getList**

Description: Get email list from storage folder.

Returns: Email document list.

Method call example:
```php
$result = $api->email()->getList($request);
```

### Parameter: request

Description: getList method request.

See parameter model documentation at [EmailGetListRequest](EmailGetListRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::EmailGetListRequest()
    ->format('Eml')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    ->items_per_page(10)
    ->page_number(0)
    ->build();
```

</details>

### Result

Description: Email document list.

Return type: [**EmailStorageList**](EmailStorageList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::emailStorageList()
    ->value(array(
        Models::emailSaveRequest()
            ->storageFile(Models::storageFileLocation()
                ->fileName('message.eml')
                ->storage('First Storage')
                ->folderPath('file/location/folder/on/storage')
                ->build())
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
$format = ;
$folder = ;
$storage = ;
$items_per_page = ;
$page_number = ;

// Call method:
$result = $api->email().getList($request);

// Result example:
$result = Models::emailStorageList()
    ->value(array(
        Models::emailSaveRequest()
            ->storageFile(Models::storageFileLocation()
                ->fileName('message.eml')
                ->storage('First Storage')
                ->folderPath('file/location/folder/on/storage')
                ->build())
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
            ->build()))
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save email document to storage.


Method call example:
```php
$api->email()->save($request);
```

### Parameter: request

Description: Email document create/update request.

See parameter model documentation at [EmailSaveRequest](EmailSaveRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::emailSaveRequest()
    ->format('Msg')
    ->storageFile(Models::storageFileLocation()
        ->fileName('email.eml')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
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

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = Models::emailSaveRequest()
    ->format('Msg')
    ->storageFile(Models::storageFileLocation()
        ->fileName('email.eml')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
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

// Call method:
$api->email().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
