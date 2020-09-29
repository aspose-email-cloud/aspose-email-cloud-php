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
$phoneNumber = new PhoneNumber
{
    Category = new EnumWithCustom<PhoneNumberCategory>
    {
        Value = "Company"
    },
    Number = "+44 141 628 8900",
    Preferred = true
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

