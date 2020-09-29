# AiBcrImageStorageFile

Image from storage for recognition

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file** | [**\Aspose\Email\Model\StorageFileLocation**](StorageFileLocation.md) | Image location | 

 Parent class: [AiBcrImage](AiBcrImage.md)


## Example
```php
$aiBcrImageStorageFile = Models::aiBcrImageStorageFile()
    ->file(Models::storageFileLocation()
        ->fileName('VCardScanImage.jpg')
        ->storage('First Storage')
        ->folderPath('image/location/on/storage')
        ->build())
    ->isSingle(true)
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

