# AiNameExtracted

Extracted name

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**name** | [**\Aspose\Email\Model\AiNameExtractedComponent[]**](AiNameExtractedComponent.md) | Extracted name components | [optional] 
**score** | **double** | Extracted name score | 



## Example
```php
$aiNameExtracted = Models::aiNameExtracted()
    ->name(array(
        Models::aiNameExtractedComponent()
            ->category('Surname')
            ->value('Cane')
            ->build(),
        Models::aiNameExtractedComponent()
            ->category('SomeName')
            ->value('John')
            ->build()))
    ->score(0.5)
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

