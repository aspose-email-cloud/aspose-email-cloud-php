# ClientThreadSetIsReadRequest

Mark thread messages as read or unread request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**is_read** | **bool** | Message is read flag. | 
**folder** | **string** | Folder on email server, where thread is stored. | [optional] 

 Parent class: [ClientThreadBaseRequest](ClientThreadBaseRequest.md)


## Example
```php
$clientThreadSetIsReadRequest = Models::clientThreadSetIsReadRequest()
    ->isRead(true)
    ->folder('INBOX')
    ->threadId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

