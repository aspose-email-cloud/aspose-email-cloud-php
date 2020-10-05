# PostalAddress

A postal address

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**address** | **string** | Address. | [optional] 
**category** | [**\Aspose\Email\Model\EnumWithCustomOfPostalAddressCategory**](EnumWithCustomOfPostalAddressCategory.md) | Address category. | [optional] 
**city** | **string** | Address's city. | [optional] 
**country** | **string** | Address's country. | [optional] 
**country_code** | **string** | Country code. | [optional] 
**is_mailing_address** | **bool** | Defines whether address may be used for mailing. | 
**postal_code** | **string** | Postal code. | [optional] 
**post_office_box** | **string** | Post Office box. | [optional] 
**preferred** | **bool** | Defines whether postal address is preferred. | 
**state_or_province** | **string** | Address's region. | [optional] 
**street** | **string** | Address's street. | [optional] 



## Example
```php
$postalAddress = Models::postalAddress()
    ->address('221b')
    ->category(Models::enumWithCustomOfPostalAddressCategory()
        
        ->build())
    ->city('London')
    ->country('United Kingdom')
    ->isMailingAddress(true)
    ->postalCode('NW1 6XE')
    ->preferred(true)
    ->street('Baker St')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

