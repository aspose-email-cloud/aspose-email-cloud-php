# GetFilesListRequest

Request model for FolderApi::getFilesList

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**path** | **string**| Folder path e.g. '/folder' |
**storage_name** | **string**| Storage name | [optional]

## Example
```php
$request = Models::getFilesListRequest()
    ->path('/storage/path/to/folder')
    ->storage_name('First Storage')
    ->build();
```

