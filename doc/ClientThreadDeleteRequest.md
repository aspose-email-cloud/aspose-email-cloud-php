# ClientThreadDeleteRequest

Delete email client thread request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string** | Folder on email server, where thread is stored. | [optional] 

 Parent class: [ClientThreadBaseRequest](ClientThreadBaseRequest.md)


## Example
```php
$clientThreadDeleteRequest = Models::clientThreadDeleteRequest()
    ->folder('INBOX/SubFolder')
    ->threadId('5')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

