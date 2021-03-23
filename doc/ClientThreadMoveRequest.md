# ClientThreadMoveRequest

Email client move thread request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**destination_folder** | **string** | Email account folder to move thread to. | 
**source_folder** | **string** | Email account folder to move thread from. | [optional] 

 Parent class: [ClientThreadBaseRequest](ClientThreadBaseRequest.md)


## Example
```php
$clientThreadMoveRequest = Models::clientThreadMoveRequest()
    ->destinationFolder('INBOX/SubFolder')
    ->sourceFolder('INBOX')
    ->threadId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

