# AiNameWeightedVariants

Name variants

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**names** | [**\Aspose\Email\Model\AiNameWeighted[]**](AiNameWeighted.md) | List of name variations | [optional] 
**comments** | **string** | Usually empty; can contain extra message describing some issue occurred during processing | [optional] 



## Example
```php
$aiNameWeightedVariants = Models::aiNameWeightedVariants()
    ->names(array(
        Models::aiNameWeighted()
            ->name('J. Cane')
            ->score(1)
            ->build(),
        Models::aiNameWeighted()
            ->name('Mr. Cane')
            ->score(0.75)
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

