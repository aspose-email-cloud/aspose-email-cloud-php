# ClientThreadGetListRequest

Request model for ClientThreadApi::getList

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string**| A folder in email account. |
**account** | **string**| Email account |
**storage** | **string**| Storage name where account file located | [optional]
**account_storage_folder** | **string**| Folder in storage where account file located | [optional]
**update_folder_cache** | **bool**| This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account | [optional] [default to true]
**messages_cache_limit** | **int**| Limit messages cache size if CacheFile is used. Ignored in accounts without limits support | [optional] [default to 200]

## Example
```php
$request = Models::clientThreadGetListRequest()
    ->folder('INBOX/SubFolder')
    ->account('email.account')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->build();
```

