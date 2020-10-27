# ObjectExistsRequest

Request model for StorageApi::objectExists

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**path** | **string**| File or folder path e.g. '/file.ext' or '/folder' |
**storage_name** | **string**| Storage name | [optional]
**version_id** | **string**| File version ID | [optional]

## Example
```php
$request = Models::objectExistsRequest()
    ->path('/storage/path/to/folder/or/file.ext')
    ->storage_name('First Storage')
    ->build();
```

