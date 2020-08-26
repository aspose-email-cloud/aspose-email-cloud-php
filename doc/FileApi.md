# Aspose\Email\FileApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFile**](FileApi.md#copyFile) | **PUT** /email/storage/file/copy/{srcPath} | 
[**deleteFile**](FileApi.md#deleteFile) | **DELETE** /email/storage/file/{path} | 
[**downloadFile**](FileApi.md#downloadFile) | **GET** /email/storage/file/{path} | 
[**moveFile**](FileApi.md#moveFile) | **PUT** /email/storage/file/move/{srcPath} | 
[**uploadFile**](FileApi.md#uploadFile) | **PUT** /email/storage/file/{path} | 


# **copyFile**
```php
function copyFile(CopyFileRequest $request)
```


### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\CopyFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**|  |
 **dest_path** | **string**|  |
 **src_storage_name** | **string**|  | [optional]
 **dest_storage_name** | **string**|  | [optional]
 **version_id** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteFile**
```php
function deleteFile(DeleteFileRequest $request)
```


### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\DeleteFileRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **storage_name** | **string**|  | [optional]
 **version_id** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **downloadFile**
```php
function \SplFileObject downloadFile(DownloadFileRequest $request)
```


### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\DownloadFileRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **storage_name** | **string**|  | [optional]
 **version_id** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **moveFile**
```php
function moveFile(MoveFileRequest $request)
```


### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\MoveFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**|  |
 **dest_path** | **string**|  |
 **src_storage_name** | **string**|  | [optional]
 **dest_storage_name** | **string**|  | [optional]
 **version_id** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **uploadFile**
```php
function \Aspose\Email\Model\FilesUploadResult uploadFile(UploadFileRequest $request)
```


### Return type

[**\Aspose\Email\Model\FilesUploadResult**](FilesUploadResult.md)

### Request parameters
```php
new Aspose\Email\Model\UploadFileRequest(
    $path,
    $file,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **file** | **\SplFileObject**| File to upload |
 **storage_name** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

