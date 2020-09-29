# ClientAccountGetRequest

Request model for ClientAccountApi::get

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| File name on storage. |
**folder** | **string**| Folder on storage. | [optional]
**storage** | **string**| Storage name. | [optional]

## Example
```php
$request = Models::clientAccountGetRequest()
    ->file_name('email.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    ->build();
```

