# MapiStringPropertyDto

Mapi property with string value

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | **string** | Property value | [optional] 

 Parent class: [MapiPropertyDto](MapiPropertyDto.md)


## Example
```php
$mapiStringPropertyDto = new MapiStringPropertyDto
{
    Value = "SomeName",
    Descriptor = new MapiKnownPropertyDescriptor
    {
        Name = "DisplayName"
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

