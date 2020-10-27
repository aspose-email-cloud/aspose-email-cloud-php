# Aspose\Email\FileApi

            
# **copyFile**
```php
function copyFile(
    CopyFileRequest $request
): 
```
Copy file

### Return type

void (empty response body)

### Request parameters
```php
$request = new CopyFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/folder/file.ext&#39; |
 **dest_path** | **string**| Destination file path |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to copy | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **deleteFile**
```php
function deleteFile(
    DeleteFileRequest $request
): 
```
Delete file

### Return type

void (empty response body)

### Request parameters
```php
$request = new DeleteFileRequest(
    $path,
    $storage_name,
    $version_id
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to delete | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **downloadFile**
```php
function downloadFile(
    DownloadFileRequest $request
): \SplFileObject 
```
Download file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
$request = new DownloadFileRequest(
    $path,
    $storage_name,
    $version_id
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to download | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **moveFile**
```php
function moveFile(
    MoveFileRequest $request
): 
```
Move file

### Return type

void (empty response body)

### Request parameters
```php
$request = new MoveFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/src.ext&#39; |
 **dest_path** | **string**| Destination file path e.g. &#39;/dest.ext&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to move | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **uploadFile**
```php
function uploadFile(
    UploadFileRequest $request
): FilesUploadResult 
```
Upload file

### Return type

[**FilesUploadResult**](FilesUploadResult.md)

### Request parameters
```php
$request = new UploadFileRequest(
    $path,
    $file,
    $storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. |
 **file** | **\SplFileObject**| File to upload |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

