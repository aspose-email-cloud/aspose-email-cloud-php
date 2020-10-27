# DiscUsage

Class for disc space information.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**used_size** | **int** | Application used disc space. | 
**total_size** | **int** | Total disc space. | 



## Example
```php
$discUsage = Models::discUsage()
    ->usedSize(1048576)
    ->totalSize(3145728)
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

