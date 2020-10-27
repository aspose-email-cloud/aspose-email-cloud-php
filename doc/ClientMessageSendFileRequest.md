# ClientMessageSendFileRequest

Request model for ClientMessageApi::sendFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**account** | **string**| Email account |
**file** | **\SplFileObject**| File to send |
**storage** | **string**| Storage name where account file located. | [optional]
**account_storage_folder** | **string**| Folder in storage where account file located. | [optional]
**format** | **string**| Email file format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft | [optional] [default to 0]

## Example
```php
$request = Models::clientMessageSendFileRequest()
    ->account('email.multi.account')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->build();
```

