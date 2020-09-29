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
$clientMessageMoveRequest = Models::clientMessageMoveRequest()
    ->sourceFolder('INBOX')
    ->destinationFolder('INBOX/SubFolder')
    ->messageId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

