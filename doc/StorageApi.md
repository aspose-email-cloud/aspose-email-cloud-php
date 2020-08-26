# Aspose\Email\StorageApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDiscUsage**](StorageApi.md#getDiscUsage) | **GET** /email/storage/disc | 
[**getFileVersions**](StorageApi.md#getFileVersions) | **GET** /email/storage/version/{path} | 
[**objectExists**](StorageApi.md#objectExists) | **GET** /email/storage/exist/{path} | 
[**storageExists**](StorageApi.md#storageExists) | **GET** /email/storage/{storageName}/exist | 


# **getDiscUsage**
```php
function \Aspose\Email\Model\DiscUsage getDiscUsage(GetDiscUsageRequest $request)
```


### Return type

[**\Aspose\Email\Model\DiscUsage**](DiscUsage.md)

### Request parameters
```php
new Aspose\Email\Model\GetDiscUsageRequest(
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getFileVersions**
```php
function \Aspose\Email\Model\FileVersions getFileVersions(GetFileVersionsRequest $request)
```


### Return type

[**\Aspose\Email\Model\FileVersions**](FileVersions.md)

### Request parameters
```php
new Aspose\Email\Model\GetFileVersionsRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **storage_name** | **string**|  | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **objectExists**
```php
function \Aspose\Email\Model\ObjectExist objectExists(ObjectExistsRequest $request)
```


### Return type

[**\Aspose\Email\Model\ObjectExist**](ObjectExist.md)

### Request parameters
```php
new Aspose\Email\Model\ObjectExistsRequest(
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

# **storageExists**
```php
function \Aspose\Email\Model\StorageExist storageExists(StorageExistsRequest $request)
```


### Return type

[**\Aspose\Email\Model\StorageExist**](StorageExist.md)

### Request parameters
```php
new Aspose\Email\Model\StorageExistsRequest(
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**|  |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

