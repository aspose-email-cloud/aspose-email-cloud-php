# FilesList

Files list

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\StorageFile[]**](StorageFile.md) | Files and folders contained by folder StorageFile. | [optional] 



## Example
```php
$filesList = Models::filesList()
    ->value(array(
        Models::storageFile()
            ->name('file.ext')
            ->modifiedDate(new DateTime())
            ->size(1024)
            ->path('/path/to/file/on/storage')
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

