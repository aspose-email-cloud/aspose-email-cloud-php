# DownloadFileRequest

Request model for FileApi::downloadFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**path** | **string**| File path e.g. '/folder/file.ext' |
**storage_name** | **string**| Storage name | [optional]
**version_id** | **string**| File version ID to download | [optional]

## Example
```php
$request = Models::downloadFileRequest()
    ->path('/storage/path/to/file.ext')
    ->storage_name('First Storage')
    ->build();
```

