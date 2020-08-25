# Aspose\Email\ClientFolderApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientFolderCreate**](ClientFolderApi.md#clientFolderCreate) | **PUT** /email/client/folder | Create new folder in email account
[**clientFolderDelete**](ClientFolderApi.md#clientFolderDelete) | **DELETE** /email/client/folder | Delete a folder in email account
[**clientFolderGetList**](ClientFolderApi.md#clientFolderGetList) | **GET** /email/client/folder/list | Get folders list in email account


# **clientFolderCreate**
```php
function clientFolderCreate(ClientFolderCreateRequest $request)
```
Create new folder in email account

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\ClientFolderCreateRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientFolderCreateRequest**](ClientFolderCreateRequest.md)| Create folder request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientFolderDelete**
```php
function clientFolderDelete(ClientFolderDeleteRequest $request)
```
Delete a folder in email account

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\ClientFolderDeleteRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientFolderDeleteRequest**](ClientFolderDeleteRequest.md)| Delete folder request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientFolderGetList**
```php
function \Aspose\Email\Model\MailServerFolderList clientFolderGetList(ClientFolderGetListRequest $request)
```
Get folders list in email account

### Return type

[**\Aspose\Email\Model\MailServerFolderList**](MailServerFolderList.md)

### Request parameters
```php
new Aspose\Email\Model\ClientFolderGetListRequest(
    $account,
    $storage,
    $account_storage_folder,
    $parent_folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**| Email account |
 **storage** | **string**| Storage name where account file located | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located | [optional]
 **parent_folder** | **string**| Folder in which subfolders should be listed | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

