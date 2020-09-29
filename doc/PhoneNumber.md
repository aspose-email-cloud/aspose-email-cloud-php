# PhoneNumber

A phone number.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**category** | [**\Aspose\Email\Model\EnumWithCustomOfPhoneNumberCategory**](EnumWithCustomOfPhoneNumberCategory.md) | Phone number category. | [optional] 
**number** | **string** | Phone number. | [optional] 
**preferred** | **bool** | Defines whether phone number is preferred. | 



## Example
```php
$phoneNumber = Models::phoneNumber()
    ->category(Models::enumWithCustom<PhoneNumberCategory>()
        ->value('Company')
        ->build())
    ->number('+44 141 628 8900')
    ->preferred(true)
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

