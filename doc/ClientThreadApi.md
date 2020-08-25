# Aspose\Email\ClientThreadApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientThreadDelete**](ClientThreadApi.md#clientThreadDelete) | **DELETE** /email/client/thread | Delete thread by id. All messages from thread will also be deleted.
[**clientThreadGetList**](ClientThreadApi.md#clientThreadGetList) | **GET** /email/client/thread/list | Get message threads from folder. All messages are partly fetched (without email body and some other fields).
[**clientThreadGetMessages**](ClientThreadApi.md#clientThreadGetMessages) | **GET** /email/client/thread/messages | Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
[**clientThreadMove**](ClientThreadApi.md#clientThreadMove) | **PUT** /email/client/thread/move | Move thread to another folder.
[**clientThreadSetIsRead**](ClientThreadApi.md#clientThreadSetIsRead) | **PUT** /email/client/thread/set-is-read | Mark all messages in thread as read or unread.


# **clientThreadDelete**
```php
function clientThreadDelete(Requests\ClientThreadDeleteRequest $request)
```
Delete thread by id. All messages from thread will also be deleted.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\ClientThreadDeleteRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientThreadDeleteRequest**](ClientThreadDeleteRequest.md)| Delete email thread request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientThreadGetList**
```php
function \Aspose\Email\Model\EmailThreadList clientThreadGetList(Requests\ClientThreadGetListRequest $request)
```
Get message threads from folder. All messages are partly fetched (without email body and some other fields).

### Return type

[**\Aspose\Email\Model\EmailThreadList**](EmailThreadList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ClientThreadGetListRequest(
    $folder,
    $account,
    $storage,
    $account_storage_folder,
    $update_folder_cache,
    $messages_cache_limit)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| A folder in email account. |
 **account** | **string**| Email account |
 **storage** | **string**| Storage name where account file located | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located | [optional]
 **update_folder_cache** | **bool**| This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account | [optional] [default to true]
 **messages_cache_limit** | **int**| Limit messages cache size if CacheFile is used. Ignored in accounts without limits support | [optional] [default to 200]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientThreadGetMessages**
```php
function \Aspose\Email\Model\EmailList clientThreadGetMessages(Requests\ClientThreadGetMessagesRequest $request)
```
Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.

### Return type

[**\Aspose\Email\Model\EmailList**](EmailList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ClientThreadGetMessagesRequest(
    $thread_id,
    $account,
    $folder,
    $storage,
    $account_storage_folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Thread identifier |
 **account** | **string**| Email account |
 **folder** | **string**| Specifies account folder to get thread from | [optional]
 **storage** | **string**| Storage name where account file located | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientThreadMove**
```php
function clientThreadMove(Requests\ClientThreadMoveRequest $request)
```
Move thread to another folder.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\ClientThreadMoveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientThreadMoveRequest**](ClientThreadMoveRequest.md)| Move thread request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientThreadSetIsRead**
```php
function clientThreadSetIsRead(Requests\ClientThreadSetIsReadRequest $request)
```
Mark all messages in thread as read or unread.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\ClientThreadSetIsReadRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientThreadSetIsReadRequest**](ClientThreadSetIsReadRequest.md)| Email account specifier and IsRead flag. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

