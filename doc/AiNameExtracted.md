# AiNameExtracted

Extracted name

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**name** | [**\Aspose\Email\Model\AiNameExtractedComponent[]**](AiNameExtractedComponent.md) | Extracted name components | [optional] 
**score** | **double** | Extracted name score | 



## Example
```php
$aiNameExtracted = new AiNameExtracted
{
    Name = new List<AiNameExtractedComponent>
    {
        new AiNameExtractedComponent
        {
            Category = "Surname",
            Value = "Cane"
        },
        new AiNameExtractedComponent
        {
            Category = "SomeName",
            Value = "John"
        }
    },
    Score = 0.5
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

