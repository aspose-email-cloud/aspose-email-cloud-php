# Aspose\Email\FileApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFile**](FileApi.md#copyFile) | **PUT** /email/storage/file/copy/{srcPath} | Copy file
[**deleteFile**](FileApi.md#deleteFile) | **DELETE** /email/storage/file/{path} | Delete file
[**downloadFile**](FileApi.md#downloadFile) | **GET** /email/storage/file/{path} | Download file
[**moveFile**](FileApi.md#moveFile) | **PUT** /email/storage/file/move/{srcPath} | Move file
[**uploadFile**](FileApi.md#uploadFile) | **PUT** /email/storage/file/{path} | Upload file


# **copyFile**
```php
function copyFile(Requests\CopyFileRequest $request)
```
Copy file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CopyFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/folder/file.ext&#39; |
 **dest_path** | **string**| Destination file path |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to copy | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteFile**
```php
function deleteFile(Requests\DeleteFileRequest $request)
```
Delete file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteFileRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to delete | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **downloadFile**
```php
function \SplFileObject downloadFile(Requests\DownloadFileRequest $request)
```
Download file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\DownloadFileRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to download | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **moveFile**
```php
function moveFile(Requests\MoveFileRequest $request)
```
Move file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\MoveFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/src.ext&#39; |
 **dest_path** | **string**| Destination file path e.g. &#39;/dest.ext&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to move | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **uploadFile**
```php
function \Aspose\Email\Model\FilesUploadResult uploadFile(Requests\UploadFileRequest $request)
```
Upload file

### Return type

[**\Aspose\Email\Model\FilesUploadResult**](FilesUploadResult.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\UploadFileRequest(
    $path,
    $file,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. |
 **file** | **\SplFileObject**| File to upload |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

