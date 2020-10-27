# AiNameMatchParsedRequest

Two parsed names to match request

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**other_parsed_name** | [**\Aspose\Email\Model\AiNameComponent[]**](AiNameComponent.md) | Other parsed name to match | 

 Parent class: [AiNameParsedRequest](AiNameParsedRequest.md)


## Example
```php
$aiNameMatchParsedRequest = Models::aiNameMatchParsedRequest()
    ->otherParsedName(array(
        Models::aiNameComponent()
            ->value('J')
            ->category('FirstInitial')
            ->score(1)
            ->build(),
        Models::aiNameComponent()
            ->value('Cane')
            ->category('LastName')
            ->score(0.5)
            ->position(3)
            ->build(),
        Models::aiNameComponent()
            ->value('%f%L')
            ->category('Format')
            ->build(),
        Models::aiNameComponent()
            ->value('0.5')
            ->category('Score')
            ->score(0.5)
            ->build()))
    ->parsedName(array(
        Models::aiNameComponent()
            ->value('John')
            ->category('FirstName')
            ->score(0.95)
            ->build(),
        Models::aiNameComponent()
            ->value('Cane')
            ->category('LastName')
            ->score(0.5)
            ->position(5)
            ->build(),
        Models::aiNameComponent()
            ->value('%F%L')
            ->category('Format')
            ->build(),
        Models::aiNameComponent()
            ->value('0.5')
            ->category('Score')
            ->score(0.5)
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

