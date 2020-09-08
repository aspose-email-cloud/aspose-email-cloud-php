# Aspose\Email\ClientThreadApi

            
# delete

```php
function delete(
    ClientThreadDeleteRequest $request
): 
```

Delete thread by id. All messages from thread will also be deleted.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ClientThreadDeleteRequest](ClientThreadDeleteRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **getList**
```php
function getList(
    ClientThreadGetListRequest $request
): EmailThreadList 
```
Get message threads from folder. All messages are partly fetched (without email body and some other fields).

### Return type

[**EmailThreadList**](EmailThreadList.md)

### Request parameters
```php
$request = new ClientThreadGetListRequest(
    $folder,
    $account,
    $storage,
    $account_storage_folder,
    $update_folder_cache,
    $messages_cache_limit
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| A folder in email account. |
 **account** | **string**| Email account |
 **storage** | **string**| Storage name where account file located | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located | [optional]
 **update_folder_cache** | **bool**| This parameter is only used in accounts with CacheFile. If true - get new messages and update threads cache for given folder. If false, get only threads from cache without any calls to an email account | [optional] [default to true]
 **messages_cache_limit** | **int**| Limit messages cache size if CacheFile is used. Ignored in accounts without limits support | [optional] [default to 200]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getMessages**
```php
function getMessages(
    ClientThreadGetMessagesRequest $request
): EmailList 
```
Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.

### Return type

[**EmailList**](EmailList.md)

### Request parameters
```php
$request = new ClientThreadGetMessagesRequest(
    $thread_id,
    $account,
    $folder,
    $storage,
    $account_storage_folder
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Thread identifier |
 **account** | **string**| Email account |
 **folder** | **string**| Specifies account folder to get thread from | [optional]
 **storage** | **string**| Storage name where account file located | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# move

```php
function move(
    ClientThreadMoveRequest $request
): 
```

Move thread to another folder.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ClientThreadMoveRequest](ClientThreadMoveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# setIsRead

```php
function setIsRead(
    ClientThreadSetIsReadRequest $request
): 
```

Mark all messages in thread as read or unread.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ClientThreadSetIsReadRequest](ClientThreadSetIsReadRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
