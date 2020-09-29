# CopyFolderRequest

Request model for FolderApi::copyFolder

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**src_path** | **string**| Source folder path e.g. '/src' |
**dest_path** | **string**| Destination folder path e.g. '/dst' |
**src_storage_name** | **string**| Source storage name | [optional]
**dest_storage_name** | **string**| Destination storage name | [optional]

## Example
```php
$request = Models::copyFolderRequest()
    ->src_path('/storage/path/to/source/folder')
    ->dest_path('/storage/path/to/destination/folder')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
    ->build();
```

