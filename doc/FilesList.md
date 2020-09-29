# FilesList

Files list

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\StorageFile[]**](StorageFile.md) | Files and folders contained by folder StorageFile. | [optional] 



## Example
```php
$filesList = new FilesList
{
    Value = new List<StorageFile>
    {
        new StorageFile
        {
            Name = "file.ext",
            ModifiedDate = DateTime.Today,
            Size = 1024,
            Path = "/path/to/file/on/storage"
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

