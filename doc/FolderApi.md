# Aspose\Email\FolderApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyFolder**](FolderApi.md#copyFolder) | **PUT** /email/storage/folder/copy/{srcPath} | Copy folder
[**createFolder**](FolderApi.md#createFolder) | **PUT** /email/storage/folder/{path} | Create the folder
[**deleteFolder**](FolderApi.md#deleteFolder) | **DELETE** /email/storage/folder/{path} | Delete folder
[**getFilesList**](FolderApi.md#getFilesList) | **GET** /email/storage/folder/{path} | Get all files and folders within a folder
[**moveFolder**](FolderApi.md#moveFolder) | **PUT** /email/storage/folder/move/{srcPath} | Move folder


# **copyFolder**
```php
function copyFolder(Requests\CopyFolderRequest $request)
```
Copy folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CopyFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source folder path e.g. &#39;/src&#39; |
 **dest_path** | **string**| Destination folder path e.g. &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createFolder**
```php
function createFolder(Requests\CreateFolderRequest $request)
```
Create the folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CreateFolderRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path to create e.g. &#39;folder_1/folder_2/&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteFolder**
```php
function deleteFolder(Requests\DeleteFolderRequest $request)
```
Delete folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteFolderRequest(
    $path,
    $storage_name,
    $recursive)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **recursive** | **bool**| Enable to delete folders, subfolders and files | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getFilesList**
```php
function \Aspose\Email\Model\FilesList getFilesList(Requests\GetFilesListRequest $request)
```
Get all files and folders within a folder

### Return type

[**\Aspose\Email\Model\FilesList**](FilesList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetFilesListRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **moveFolder**
```php
function moveFolder(Requests\MoveFolderRequest $request)
```
Move folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\MoveFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Folder path to move e.g. &#39;/folder&#39; |
 **dest_path** | **string**| Destination folder path to move to e.g &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

