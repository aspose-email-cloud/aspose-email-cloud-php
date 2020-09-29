# CopyFileRequest

Request model for FileApi::copyFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**src_path** | **string**| Source file path e.g. &#39;/folder/file.ext&#39; |
**dest_path** | **string**| Destination file path |
**src_storage_name** | **string**| Source storage name | [optional]
**dest_storage_name** | **string**| Destination storage name | [optional]
**version_id** | **string**| File version ID to copy | [optional]

## Example
```php
$request = Models::copyFileRequest()
    ->src_path('/storage/path/to/source/file.ext')
    ->dest_path('/storage/path/to/destination/file.ext')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
    ->build();
```

