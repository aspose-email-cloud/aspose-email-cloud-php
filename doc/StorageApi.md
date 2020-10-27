# Aspose\Email\StorageApi

            
# **getDiscUsage**
```php
function getDiscUsage(
    GetDiscUsageRequest $request
): DiscUsage 
```
Get disc usage

### Return type

[**DiscUsage**](DiscUsage.md)

### Request parameters
```php
$request = new GetDiscUsageRequest(
    $storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getFileVersions**
```php
function getFileVersions(
    GetFileVersionsRequest $request
): FileVersions 
```
Get file versions

### Return type

[**FileVersions**](FileVersions.md)

### Request parameters
```php
$request = new GetFileVersionsRequest(
    $path,
    $storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **objectExists**
```php
function objectExists(
    ObjectExistsRequest $request
): ObjectExist 
```
Check if file or folder exists

### Return type

[**ObjectExist**](ObjectExist.md)

### Request parameters
```php
$request = new ObjectExistsRequest(
    $path,
    $storage_name,
    $version_id
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File or folder path e.g. &#39;/file.ext&#39; or &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **exists**
```php
function exists(
    StorageExistsRequest $request
): StorageExist 
```
Check if storage exists

### Return type

[**StorageExist**](StorageExist.md)

### Request parameters
```php
$request = new StorageExistsRequest(
    $storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

