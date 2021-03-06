# ClientMessageFetchFileRequest

Request model for ClientMessageApi::fetchFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**message_id** | **string**| Message identifier |
**account** | **string**| Email account |
**folder** | **string**| Account folder to fetch from (should be specified for some protocols such as IMAP) | [optional]
**storage** | **string**| Storage name where account file located. | [optional]
**account_storage_folder** | **string**| Folder in storage where account file located. | [optional]
**format** | **string**| Fetched message file format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft | [optional] [default to 0]

## Example
```php
$request = Models::clientMessageFetchFileRequest()
    ->message_id('<put your message identifier here>')
    ->account('email.multi.account')
    ->folder('INBOX')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->format('Eml')
    ->build();
```

