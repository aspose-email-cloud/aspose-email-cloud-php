# CreateFolderRequest

Request model for FolderApi::createFolder

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**path** | **string**| Folder path to create e.g. 'folder_1/folder_2/' |
**storage_name** | **string**| Storage name | [optional]

## Example
```php
$request = Models::createFolderRequest()
    ->path('/storage/path/to/new/folder')
    ->storage_name('First Storage')
    ->build();
```

