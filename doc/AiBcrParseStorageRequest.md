# AiBcrParseStorageRequest

Parse business card images from Storage request

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**out_folder** | [**\Aspose\Email\Model\StorageFolderLocation**](StorageFolderLocation.md) | Parse output folder location on storage | 
**images** | [**\Aspose\Email\Model\AiBcrImageStorageFile[]**](AiBcrImageStorageFile.md) | Images to parse. | 
**options** | [**\Aspose\Email\Model\AiBcrOptions**](AiBcrOptions.md) | Recognition options. | [optional] 



## Example
```php
$aiBcrParseStorageRequest = Models::aiBcrParseStorageRequest()
    ->outFolder(Models::storageFolderLocation()
        ->storage('First Storage')
        ->folderPath('VCard/files/produced/by/parser/will/be/placed/here')
        ->build())
    ->images(array(
        Models::aiBcrImageStorageFile()
            ->file(Models::storageFileLocation()
                ->fileName('VCardScanImage.jpg')
                ->storage('First Storage')
                ->folderPath('image/location/on/storage')
                ->build())
            ->isSingle(true)
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

