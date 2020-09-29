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
$clientThreadSetIsReadRequest = new ClientThreadSetIsReadRequest
{
    IsRead = true,
    Folder = "INBOX",
    ThreadId = "5",
    AccountLocation = new StorageFileLocation
    {
        FileName = "email.account",
        Storage = "First Storage",
        FolderPath = "file/location/folder/on/storage"
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

