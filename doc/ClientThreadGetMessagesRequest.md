# ClientThreadGetMessagesRequest

Request model for ClientThreadApi::getMessages

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**thread_id** | **string**| Thread identifier |
**account** | **string**| Email account |
**folder** | **string**| Specifies account folder to get thread from | [optional]
**storage** | **string**| Storage name where account file located | [optional]
**account_storage_folder** | **string**| Folder in storage where account file located | [optional]

## Example
```php
$request = Models::clientThreadGetMessagesRequest()
    ->thread_id('5')
    ->account('email.account')
    ->folder('INBOX')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->build();
```

