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
$aiBcrParseStorageRequest = new AiBcrParseStorageRequest
{
    OutFolder = new StorageFolderLocation
    {
        Storage = "First Storage",
        FolderPath = "VCard/files/produced/by/parser/will/be/placed/here"
    },
    Images = new List<AiBcrImageStorageFile>
    {
        new AiBcrImageStorageFile
        {
            File = new StorageFileLocation
            {
                FileName = "VCardScanImage.jpg",
                Storage = "First Storage",
                FolderPath = "image/location/on/storage"
            },
            IsSingle = true
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

