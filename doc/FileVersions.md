# FileVersions

File versions FileVersion.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\FileVersion[]**](FileVersion.md) | File versions FileVersion. | [optional] 



## Example
```php
$fileVersions = new FileVersions
{
    Value = new List<FileVersion>
    {
        new FileVersion
        {
            VersionId = "d5afd857-8797-4ca0-b806-a03fdfc3831f",
            IsLatest = true,
            Name = "file.ext",
            ModifiedDate = DateTime.Today,
            Size = 4096,
            Path = "/storage/path/to"
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

