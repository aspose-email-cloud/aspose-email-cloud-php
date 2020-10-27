# StorageFileLocation

A storage file location information

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string** | A file name in storage | 

 Parent class: [StorageFolderLocation](StorageFolderLocation.md)


## Example
```php
$storageFileLocation = Models::storageFileLocation()
    ->fileName('fileOnStorage.txt')
    ->storage('First Storage')
    ->folderPath('file/location/folder/on/storage')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

