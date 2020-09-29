# ClientFolderDeleteRequest

Email client delete folder request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string** | Path to folder to delete. | 

 Parent class: [ClientAccountBaseRequest](ClientAccountBaseRequest.md)


## Example
```php
$clientFolderDeleteRequest = Models::clientFolderDeleteRequest()
    ->folder('INBOX/SubFolder/FolderToDelete')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

