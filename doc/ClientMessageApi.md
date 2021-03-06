# ClientMessageApi ($emailCloud->client()->message())

Email client message operations.

## append

Description: Add email message to specified folder in email account.

Returns: Message id.

Method call example:
```php
$result = $api->client()->message()->append($request);
```

### Parameter: request

Description: Append email request.

See parameter model documentation at [ClientMessageAppendRequest](ClientMessageAppendRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientMessageAppendRequest()
    ->folder('INBOX/SubFolder')
    ->message(Models::mailMessageDto()
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
        ->build())
    ->markAsSent(true)
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();
```

</details>


### Result

Description: Message id.

Return type: [**ValueTOfString**](ValueTOfString.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::clientMessageAppendRequest()
    ->folder('INBOX/SubFolder')
    ->message(Models::mailMessageDto()
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
        ->build())
    ->markAsSent(true)
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();

// Call method:
$result = $api->client()->message()->append($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **appendFile**

Description: Add email message from file to specified folder in email account.

Returns: Message id.

Method call example:
```php
$result = $api->client()->message()->appendFile($request);
```

### Parameter: request

Description: appendFile method request.

See parameter model documentation at [ClientMessageAppendFileRequest](ClientMessageAppendFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientMessageAppendFileRequest()
    ->account('email.multi.account')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->folder('INBOX')
    ->build();
```

</details>

### Result

Description: Message id.

Return type: [**ValueTOfString**](ValueTOfString.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::ClientMessageAppendFileRequest()
    ->account('email.multi.account')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->folder('INBOX')
    ->build();

// Call method:
$result = $api->client()->message()->appendFile($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## delete

Description: Delete message.


Method call example:
```php
$api->client()->message()->delete($request);
```

### Parameter: request

Description: Delete message request.

See parameter model documentation at [ClientMessageDeleteRequest](ClientMessageDeleteRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientMessageDeleteRequest()
    ->folder('INBOX')
    ->messageId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
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
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::clientMessageDeleteRequest()
    ->folder('INBOX')
    ->messageId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();

// Call method:
$api->client()->message()->delete($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **fetch**

Description: Fetch message from email account

Returns: MailMessageBase object that represents fetched message in requested format.

Method call example:
```php
$result = $api->client()->message()->fetch($request);
```

### Parameter: request

Description: fetch method request.

See parameter model documentation at [ClientMessageFetchRequest](ClientMessageFetchRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientMessageFetchRequest()
    ->message_id('<put your message identifier here>')
    ->account('email.multi.account')
    ->folder('INBOX')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->type('Dto')
    ->format('Eml')
    ->build();
```

</details>

### Result

Description: MailMessageBase object that represents fetched message in requested format.

Return type: [**MailMessageBase**](MailMessageBase.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::mailMessageBase()
    
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::ClientMessageFetchRequest()
    ->message_id('<put your message identifier here>')
    ->account('email.multi.account')
    ->folder('INBOX')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->type('Dto')
    ->format('Eml')
    ->build();

// Call method:
$result = $api->client()->message()->fetch($request);

// Result example:
$result = Models::mailMessageBase()
    
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **fetchFile**

Description: Fetch message as file from email account

Returns: Email message file in requested format.

Method call example:
```php
$result = $api->client()->message()->fetchFile($request);
```

### Parameter: request

Description: fetchFile method request.

See parameter model documentation at [ClientMessageFetchFileRequest](ClientMessageFetchFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientMessageFetchFileRequest()
    ->message_id('<put your message identifier here>')
    ->account('email.multi.account')
    ->folder('INBOX')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->build();
```

</details>

### Result

Description: Email message file in requested format.

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::ClientMessageFetchFileRequest()
    ->message_id('<put your message identifier here>')
    ->account('email.multi.account')
    ->folder('INBOX')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->build();

// Call method:
$result = $api->client()->message()->fetchFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **list**

Description: Get messages from folder, filtered by query

The query string should have the following view.      The example of a simple expression:       '<Field name>' <Comparison operator> '<Field value>',  where &lt;Field Name&gt; - the name of a message field through which filtering is made, &lt;Comparison operator&gt; - comparison operators, as their name implies, allow to compare message field and specified value, &lt;Field value&gt; - value to be compared with a message field.      The number of simple expressions can make a compound one, ex.:     (<Simple expression 1> & <Simple expression 2>) | <Simple expression 3     >,  where \"&amp;\" - logical-AND operator, \"|\" - logical-OR operator      At present the following values are allowed as a field name (<Field name>):  \"To\" - represents a TO field of message, \"Text\" - represents string in the header or body of the message, \"Bcc\" - represents a BCC field of message, \"Body\" - represents a string in the body of message, \"Cc\" - represents a CC field of message, \"From\" - represents a From field of message, \"Subject\" - represents a string in the subject of message, \"InternalDate\" - represents an internal date of message, \"SentDate\" - represents a sent date of message      Additionally, the following field names are allowed for IMAP-protocol:  \"Answered\" - represents an /Answered flag of message \"Seen\" - represents a /Seen flag of message \"Flagged\" - represents a /Flagged flag of message \"Draft\" - represents a /Draft flag of message \"Deleted\" - represents a Deleted/ flag of message \"Recent\" - represents a Deleted/ flag of message \"MessageSize\" - represents a size (in bytes) of message      Additionally, the following field names are allowed for Exchange:  \"IsRead\" - Indicates whether the message has been read \"HasAttachment\" - Indicates whether or not the message has attachments \"IsSubmitted\" - Indicates whether the message has been submitted to the Outbox \"ContentClass\" - represents a content class of item      The field value (<Field value>) can take the following values:     For text fields - any string,     For date type fields - the string of \"d-MMM-yyy\" format, ex. \"10-Feb-2009\",     For flags (fields of boolean type) - either \"True\", or \"False\"

Returns: List of MailMessageBase objects that represent fetched message in requested format.

Method call example:
```php
$result = $api->client()->message()->list($request);
```

### Parameter: request

Description: list method request.

See parameter model documentation at [ClientMessageListRequest](ClientMessageListRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientMessageListRequest()
    ->folder('INBOX')
    ->account('email.multi.account')
    ->query_string('('From' Contains '.com')')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->recursive(true)
    ->type('Dto')
    ->format('Eml')
    ->build();
```

</details>

### Result

Description: List of MailMessageBase objects that represent fetched message in requested format.

Return type: [**MailMessageBaseList**](MailMessageBaseList.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::ClientMessageListRequest()
    ->folder('INBOX')
    ->account('email.multi.account')
    ->query_string('('From' Contains '.com')')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->recursive(true)
    ->type('Dto')
    ->format('Eml')
    ->build();

// Call method:
$result = $api->client()->message()->list($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## move

Description: Move message to another folder.


Method call example:
```php
$api->client()->message()->move($request);
```

### Parameter: request

Description: Move message request.

See parameter model documentation at [ClientMessageMoveRequest](ClientMessageMoveRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientMessageMoveRequest()
    ->sourceFolder('INBOX')
    ->destinationFolder('INBOX/SubFolder')
    ->messageId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
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
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::clientMessageMoveRequest()
    ->sourceFolder('INBOX')
    ->destinationFolder('INBOX/SubFolder')
    ->messageId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();

// Call method:
$api->client()->message()->move($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## send

Description: Send an email specified by model in request.


Method call example:
```php
$api->client()->message()->send($request);
```

### Parameter: request

Description: Send email request.

See parameter model documentation at [ClientMessageSendRequest](ClientMessageSendRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientMessageSendRequest()
    ->message(Models::mailMessageDto()
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
        ->build())
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
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
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::clientMessageSendRequest()
    ->message(Models::mailMessageDto()
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
        ->build())
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();

// Call method:
$api->client()->message()->send($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **sendFile**

Description: Send an email file.


Method call example:
```php
$api->client()->message()->sendFile($request);
```

### Parameter: request

Description: sendFile method request.

See parameter model documentation at [ClientMessageSendFileRequest](ClientMessageSendFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientMessageSendFileRequest()
    ->account('email.multi.account')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->build();
```

</details>

### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::ClientMessageSendFileRequest()
    ->account('email.multi.account')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->build();

// Call method:
$api->client()->message()->sendFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## setIsRead

Description: Mark message as read or unread.


Method call example:
```php
$api->client()->message()->setIsRead($request);
```

### Parameter: request

Description: Delete message request.

See parameter model documentation at [ClientMessageSetIsReadRequest](ClientMessageSetIsReadRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientMessageSetIsReadRequest()
    ->isRead(true)
    ->messageId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
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
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::clientMessageSetIsReadRequest()
    ->isRead(true)
    ->messageId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();

// Call method:
$api->client()->message()->setIsRead($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
