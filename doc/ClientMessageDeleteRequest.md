# ClientMessageDeleteRequest

Email client delete message request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string** | Folder to delete message from. | [optional] 

 Parent class: [ClientMessageBaseRequest](ClientMessageBaseRequest.md)


## Example
```php
$clientMessageDeleteRequest = new ClientMessageDeleteRequest
{
    Folder = "INBOX",
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

