# ClientFolderCreateRequest

Email Client create folder request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**parent_folder** | **string** | Path to parent folder. | [optional] 
**folder_name** | **string** | Folder name. | 

 Parent class: [ClientAccountBaseRequest](ClientAccountBaseRequest.md)


## Example
```php
$clientFolderCreateRequest = new ClientFolderCreateRequest
{
    ParentFolder = "INBOX/SubFolder/ParentFolder",
    FolderName = "NewFolder",
    AccountLocation = new StorageFileLocation
    {
        FileName = "email.account",
        Storage = "First Storage",
        FolderPath = "file/location/folder/on/storage"
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

