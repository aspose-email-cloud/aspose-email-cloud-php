# GetFileVersionsRequest

Request model for StorageApi::getFileVersions

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**path** | **string**| File path e.g. '/file.ext' |
**storage_name** | **string**| Storage name | [optional]

## Example
```php
$request = Models::getFileVersionsRequest()
    ->path('/storage/path/to/file.ext')
    ->storage_name('First Storage')
    ->build();
```

