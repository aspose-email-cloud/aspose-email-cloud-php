# DeleteFolderRequest

Request model for FolderApi::deleteFolder

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**path** | **string**| Folder path e.g. '/folder' |
**storage_name** | **string**| Storage name | [optional]
**recursive** | **bool**| Enable to delete folders, subfolders and files | [optional] [default to false]

## Example
```php
$request = Models::deleteFolderRequest()
    ->path('/storage/path/to/folder')
    ->storage_name('First Storage')
    ->recursive(true)
    ->build();
```

