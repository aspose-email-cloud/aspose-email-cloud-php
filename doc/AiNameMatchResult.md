# AiNameMatchResult

Two names match result

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**similarity** | **double** | Similarity score | 
**mismatches** | [**\Aspose\Email\Model\AiNameMismatch[]**](AiNameMismatch.md) | Detailed description of mismatches | [optional] 



## Example
```php
$aiNameMatchResult = new AiNameMatchResult
{
    Similarity = 0.6,
    Mismatches = new List<AiNameMismatch>
    {
        new AiNameMismatch
        {
            Category = "Gender",
            Explanation = "no_match"
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

