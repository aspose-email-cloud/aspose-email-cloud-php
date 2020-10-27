# FileVersions

File versions FileVersion.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\FileVersion[]**](FileVersion.md) | File versions FileVersion. | [optional] 



## Example
```php
$fileVersions = Models::fileVersions()
    ->value(array(
        Models::fileVersion()
            ->versionId('d5afd857-8797-4ca0-b806-a03fdfc3831f')
            ->isLatest(true)
            ->name('file.ext')
            ->modifiedDate(new DateTime())
            ->size(4096)
            ->path('/storage/path/to')
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

