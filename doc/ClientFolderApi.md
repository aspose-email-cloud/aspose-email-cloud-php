# Aspose\Email\ClientFolderApi

            
# create

```php
function create(
    ClientFolderCreateRequest $request
): 
```

Create new folder in email account

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ClientFolderCreateRequest](ClientFolderCreateRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# delete

```php
function delete(
    ClientFolderDeleteRequest $request
): 
```

Delete a folder in email account

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ClientFolderDeleteRequest](ClientFolderDeleteRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **getList**
```php
function getList(
    ClientFolderGetListRequest $request
): MailServerFolderList 
```
Get folders list in email account

### Return type

[**MailServerFolderList**](MailServerFolderList.md)

### Request parameters
```php
$request = new ClientFolderGetListRequest(
    $account,
    $storage,
    $account_storage_folder,
    $parent_folder
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**| Email account |
 **storage** | **string**| Storage name where account file located | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located | [optional]
 **parent_folder** | **string**| Folder in which subfolders should be listed | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

