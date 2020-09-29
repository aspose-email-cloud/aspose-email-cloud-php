# ClientMessageMoveRequest

Email client move message request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**source_folder** | **string** | Folder to move message from. | [optional] 
**destination_folder** | **string** | Folder to move message to. | 

 Parent class: [ClientMessageBaseRequest](ClientMessageBaseRequest.md)


## Example
```php
$clientMessageMoveRequest = new ClientMessageMoveRequest
{
    SourceFolder = "INBOX",
    DestinationFolder = "INBOX/SubFolder",
    MessageId = "5",
    AccountLocation = new StorageFileLocation
    {
        FileName = "email.account",
        Storage = "First Storage",
        FolderPath = "file/location/folder/on/storage"
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

