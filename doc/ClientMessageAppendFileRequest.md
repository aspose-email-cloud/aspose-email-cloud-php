# ClientMessageAppendFileRequest

Request model for ClientMessageApi::appendFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**account** | **string**| Email account. |
**file** | **\SplFileObject**| Message file to append. |
**storage** | **string**| Storage name where account file located. | [optional]
**account_storage_folder** | **string**| Folder in storage where account file located. | [optional]
**format** | **string**| Email file format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft | [optional] [default to 0]
**folder** | **string**| Path to folder on email server to append message to. | [optional]
**mark_as_sent** | **bool**| Determines that appended message should be market as sent or not. | [optional] [default to true]

## Example
```php
$request = Models::clientMessageAppendFileRequest()
    ->account('email.multi.account')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->folder('INBOX')
    ->build();
```

