# AiNameMatchResult

Two names match result

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**similarity** | **double** | Similarity score | 
**mismatches** | [**\Aspose\Email\Model\AiNameMismatch[]**](AiNameMismatch.md) | Detailed description of mismatches | [optional] 



## Example
```php
$aiNameMatchResult = Models::aiNameMatchResult()
    ->similarity(0.6)
    ->mismatches(array(
        Models::aiNameMismatch()
            ->category('Gender')
            ->explanation('no_match')
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

