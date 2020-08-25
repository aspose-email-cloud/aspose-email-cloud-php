# Aspose\Email\StorageApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDiscUsage**](StorageApi.md#getDiscUsage) | **GET** /email/storage/disc | Get disc usage
[**getFileVersions**](StorageApi.md#getFileVersions) | **GET** /email/storage/version/{path} | Get file versions
[**objectExists**](StorageApi.md#objectExists) | **GET** /email/storage/exist/{path} | Check if file or folder exists
[**storageExists**](StorageApi.md#storageExists) | **GET** /email/storage/{storageName}/exist | Check if storage exists


# **getDiscUsage**
```php
function \Aspose\Email\Model\DiscUsage getDiscUsage(Requests\GetDiscUsageRequest $request)
```
Get disc usage

### Return type

[**\Aspose\Email\Model\DiscUsage**](DiscUsage.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetDiscUsageRequest(
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getFileVersions**
```php
function \Aspose\Email\Model\FileVersions getFileVersions(Requests\GetFileVersionsRequest $request)
```
Get file versions

### Return type

[**\Aspose\Email\Model\FileVersions**](FileVersions.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetFileVersionsRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **objectExists**
```php
function \Aspose\Email\Model\ObjectExist objectExists(Requests\ObjectExistsRequest $request)
```
Check if file or folder exists

### Return type

[**\Aspose\Email\Model\ObjectExist**](ObjectExist.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ObjectExistsRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File or folder path e.g. &#39;/file.ext&#39; or &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **storageExists**
```php
function \Aspose\Email\Model\StorageExist storageExists(Requests\StorageExistsRequest $request)
```
Check if storage exists

### Return type

[**\Aspose\Email\Model\StorageExist**](StorageExist.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\StorageExistsRequest(
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

