# ClientMessageSetIsReadRequest

Email client mark message is read/unread request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**is_read** | **bool** | Message is read flag. | 

 Parent class: [ClientMessageBaseRequest](ClientMessageBaseRequest.md)


## Example
```php
$clientMessageSetIsReadRequest = new ClientMessageSetIsReadRequest
{
    IsRead = true,
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

