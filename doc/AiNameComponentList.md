# AiNameComponentList

List of name components

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfAiNameComponent](ListResponseOfAiNameComponent.md)


## Example
```php
$aiNameComponentList = Models::aiNameComponentList()
    ->value(array(
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

