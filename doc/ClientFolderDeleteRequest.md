# ClientFolderDeleteRequest

Email client delete folder request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string** | Path to folder to delete. | 

 Parent class: [ClientAccountBaseRequest](ClientAccountBaseRequest.md)


## Example
```php
$clientFolderDeleteRequest = new ClientFolderDeleteRequest
{
    Folder = "INBOX/SubFolder/FolderToDelete",
    AccountLocation = new StorageFileLocation
    {
        FileName = "email.account",
        Storage = "First Storage",
        FolderPath = "file/location/folder/on/storage"
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

