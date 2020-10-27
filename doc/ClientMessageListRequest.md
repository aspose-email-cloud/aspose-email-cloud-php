# ClientMessageListRequest

Request model for ClientMessageApi::list

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string**| A folder in email account |
**account** | **string**| Email account |
**query_string** | **string**| A MailQuery search string | [optional]
**storage** | **string**| Storage name where account file located | [optional]
**account_storage_folder** | **string**| Folder in storage where account file located | [optional]
**recursive** | **bool**| Specifies that should message be searched in subfolders recursively | [optional] [default to false]
**type** | **string**| MailMessageBase type. Using this property you can get messages in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string).              Enum, available values: Dto, Mapi, Base64 | [optional] [default to 0]
**format** | **string**| Base64 data format. Used only if type is set to Base64. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft | [optional] [default to 0]

## Example
```php
$request = Models::clientMessageListRequest()
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

