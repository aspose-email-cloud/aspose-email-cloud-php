# MoveFileRequest

Request model for FileApi::moveFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**src_path** | **string**| Source file path e.g. &#39;/src.ext&#39; |
**dest_path** | **string**| Destination file path e.g. &#39;/dest.ext&#39; |
**src_storage_name** | **string**| Source storage name | [optional]
**dest_storage_name** | **string**| Destination storage name | [optional]
**version_id** | **string**| File version ID to move | [optional]

## Example
```php
$request = Models::moveFileRequest()
    ->src_path('/storage/path/to/source/file.ext')
    ->dest_path('/storage/path/to/destination/file.ext')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
    ->build();
```

