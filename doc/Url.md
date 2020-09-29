# Url

Url and its category.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**category** | [**\Aspose\Email\Model\EnumWithCustomOfUrlCategory**](EnumWithCustomOfUrlCategory.md) | Url category. | [optional] 
**preferred** | **bool** | Defines whether url is preferred. | 
**href** | **string** | URL. | [optional] 



## Example
```php
$url = new Url
{
    Category = new EnumWithCustom<UrlCategory>
    {
        Value = "Work"
    },
    Preferred = true,
    Href = "https://products.aspose.cloud/email"
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

