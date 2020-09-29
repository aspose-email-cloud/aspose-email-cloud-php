# ClientThreadMoveRequest

Email client move thread request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**destination_folder** | **string** | Email account folder to move thread to. | 

 Parent class: [ClientThreadBaseRequest](ClientThreadBaseRequest.md)


## Example
```php
$clientThreadMoveRequest = new ClientThreadMoveRequest
{
    DestinationFolder = "INBOX/SubFolder",
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

