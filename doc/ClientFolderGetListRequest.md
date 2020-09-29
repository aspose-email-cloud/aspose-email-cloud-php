# ClientFolderGetListRequest

Request model for ClientFolderApi::getList

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**account** | **string**| Email account |
**storage** | **string**| Storage name where account file located | [optional]
**account_storage_folder** | **string**| Folder in storage where account file located | [optional]
**parent_folder** | **string**| Folder in which subfolders should be listed | [optional]

## Example
```php
$request = Models::clientFolderGetListRequest()
    ->account('email.multi.account')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->parent_folder('INBOX')
    ->build();
```

