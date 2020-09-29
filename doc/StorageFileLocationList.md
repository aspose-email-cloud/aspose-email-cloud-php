# StorageFileLocationList

List of files located on storage.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfStorageFileLocation](ListResponseOfStorageFileLocation.md)


## Example
```php
$storageFileLocationList = new StorageFileLocationList
{
    Value = new List<StorageFileLocation>
    {
        new StorageFileLocation
        {
            FileName = "fileOnStorage.txt",
            Storage = "First Storage",
            FolderPath = "file/location/folder/on/storage"
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

