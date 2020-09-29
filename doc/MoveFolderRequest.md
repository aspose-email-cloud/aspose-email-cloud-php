# MoveFolderRequest

Request model for FolderApi::moveFolder

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**src_path** | **string**| Folder path to move e.g. '/folder' |
**dest_path** | **string**| Destination folder path to move to e.g '/dst' |
**src_storage_name** | **string**| Source storage name | [optional]
**dest_storage_name** | **string**| Destination storage name | [optional]

## Example
```php
$request = Models::moveFolderRequest()
    ->src_path('/storage/path/to/source/folder')
    ->dest_path('/storage/path/to/destination/folder')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
    ->build();
```

