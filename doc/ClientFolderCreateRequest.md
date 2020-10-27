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
$clientFolderCreateRequest = Models::clientFolderCreateRequest()
    ->parentFolder('INBOX/SubFolder/ParentFolder')
    ->folderName('NewFolder')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

