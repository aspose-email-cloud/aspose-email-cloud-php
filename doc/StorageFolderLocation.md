# StorageFolderLocation

A storage folder location information

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**storage** | **string** | A storage name | [optional] 
**folder_path** | **string** | A path to a folder in specified storage | [optional] 



## Example
```php
$storageFolderLocation = Models::storageFolderLocation()
    ->storage('First Storage')
    ->folderPath('folder/on/storage')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

