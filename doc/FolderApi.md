# Aspose\Email\FolderApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFolder**](FolderApi.md#copyFolder) | **PUT** /email/storage/folder/copy/{srcPath} | 
[**createFolder**](FolderApi.md#createFolder) | **PUT** /email/storage/folder/{path} | 
[**deleteFolder**](FolderApi.md#deleteFolder) | **DELETE** /email/storage/folder/{path} | 
[**getFilesList**](FolderApi.md#getFilesList) | **GET** /email/storage/folder/{path} | 
[**moveFolder**](FolderApi.md#moveFolder) | **PUT** /email/storage/folder/move/{srcPath} | 


# **copyFolder**
```php
function copyFolder(CopyFolderRequest $request)
```


### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\CopyFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**|  |
 **dest_path** | **string**|  |
 **src_storage_name** | **string**|  | [optional]
 **dest_storage_name** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createFolder**
```php
function createFolder(CreateFolderRequest $request)
```


### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\CreateFolderRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **storage_name** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteFolder**
```php
function deleteFolder(DeleteFolderRequest $request)
```


### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\DeleteFolderRequest(
    $path,
    $storage_name,
    $recursive)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **storage_name** | **string**|  | [optional]
 **recursive** | **bool**|  | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getFilesList**
```php
function \Aspose\Email\Model\FilesList getFilesList(GetFilesListRequest $request)
```


### Return type

[**\Aspose\Email\Model\FilesList**](FilesList.md)

### Request parameters
```php
new Aspose\Email\Model\GetFilesListRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **storage_name** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **moveFolder**
```php
function moveFolder(MoveFolderRequest $request)
```


### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\MoveFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**|  |
 **dest_path** | **string**|  |
 **src_storage_name** | **string**|  | [optional]
 **dest_storage_name** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

