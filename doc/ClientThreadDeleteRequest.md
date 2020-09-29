# ClientThreadDeleteRequest

Delete email client thread request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string** | Folder on email server, where thread is stored. | [optional] 

 Parent class: [ClientThreadBaseRequest](ClientThreadBaseRequest.md)


## Example
```php
$clientThreadDeleteRequest = new ClientThreadDeleteRequest
{
    Folder = "INBOX/SubFolder",
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

