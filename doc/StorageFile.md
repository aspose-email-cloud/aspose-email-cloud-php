# StorageFile

File or folder information

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**name** | **string** | File or folder name. | [optional] 
**is_folder** | **bool** | True if it is a folder. | 
**modified_date** | [**\DateTime**](\DateTime.md) | File or folder last modified DateTime. | [optional] 
**size** | **int** | File or folder size. | 
**path** | **string** | File or folder path. | [optional] 



## Example
```php
$storageFile = Models::storageFile()
    ->name('file.ext')
    ->modifiedDate(new DateTime())
    ->size(4096)
    ->path('/storage/path/to')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

