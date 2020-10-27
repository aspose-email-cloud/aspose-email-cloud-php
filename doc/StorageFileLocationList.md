# StorageFileLocationList

List of files located on storage.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfStorageFileLocation](ListResponseOfStorageFileLocation.md)


## Example
```php
$storageFileLocationList = Models::storageFileLocationList()
    ->value(array(
        Models::storageFileLocation()
            ->fileName('fileOnStorage.txt')
            ->storage('First Storage')
            ->folderPath('file/location/folder/on/storage')
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

