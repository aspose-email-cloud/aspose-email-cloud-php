# GetDiscUsageRequest

Request model for StorageApi::getDiscUsage

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**storage_name** | **string**| Storage name | [optional]

## Example
```php
$request = Models::getDiscUsageRequest()
    ->storage_name('First Storage')
    ->build();
```

