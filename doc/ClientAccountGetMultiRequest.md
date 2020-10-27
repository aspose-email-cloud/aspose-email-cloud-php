# ClientAccountGetMultiRequest

Request model for ClientAccountApi::getMulti

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| File name on storage |
**folder** | **string**| Folder on storage | [optional]
**storage** | **string**| Storage name | [optional]

## Example
```php
$request = Models::clientAccountGetMultiRequest()
    ->file_name('email.multi.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    ->build();
```

