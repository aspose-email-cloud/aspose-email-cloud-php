# AiBcrImageStorageFile

Image from storage for recognition

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file** | [**\Aspose\Email\Model\StorageFileLocation**](StorageFileLocation.md) | Image location | 

 Parent class: [AiBcrImage](AiBcrImage.md)


## Example
```php
$aiBcrImageStorageFile = new AiBcrImageStorageFile
{
    File = new StorageFileLocation
    {
        FileName = "VCardScanImage.jpg",
        Storage = "First Storage",
        FolderPath = "image/location/on/storage"
    },
    IsSingle = true
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

