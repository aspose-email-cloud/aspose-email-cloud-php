# AiNameWeightedVariants

Name variants

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**names** | [**\Aspose\Email\Model\AiNameWeighted[]**](AiNameWeighted.md) | List of name variations | [optional] 
**comments** | **string** | Usually empty; can contain extra message describing some issue occurred during processing | [optional] 



## Example
```php
$aiNameWeightedVariants = new AiNameWeightedVariants
{
    Names = new List<AiNameWeighted>
    {
        new AiNameWeighted
        {
            Name = "J. Cane",
            Score = 1
        },
        new AiNameWeighted
        {
            Name = "Mr. Cane",
            Score = 0.75
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

