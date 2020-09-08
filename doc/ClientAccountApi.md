# Aspose\Email\ClientAccountApi

            
# **get**
```php
function get(
    ClientAccountGetRequest $request
): EmailClientAccount 
```
Get email client account from storage.

### Return type

[**EmailClientAccount**](EmailClientAccount.md)

### Request parameters
```php
$request = new ClientAccountGetRequest(
    $file_name,
    $folder,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| File name on storage. |
 **folder** | **string**| Folder on storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getMulti**
```php
function getMulti(
    ClientAccountGetMultiRequest $request
): EmailClientMultiAccount 
```
Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".

### Return type

[**EmailClientMultiAccount**](EmailClientMultiAccount.md)

### Request parameters
```php
$request = new ClientAccountGetMultiRequest(
    $file_name,
    $folder,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| File name on storage |
 **folder** | **string**| Folder on storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# save

```php
function save(
    ClientAccountSaveRequest $request
): 
```

Create/update email client account file (*.account) with credentials

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ClientAccountSaveRequest](ClientAccountSaveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# saveMulti

```php
function saveMulti(
    ClientAccountSaveMultiRequest $request
): 
```

Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ClientAccountSaveMultiRequest](ClientAccountSaveMultiRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
