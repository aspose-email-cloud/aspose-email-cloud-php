# MapiContactDto

Represents outlook contact information.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**electronic_addresses** | [**\Aspose\Email\Model\MapiContactElectronicAddressPropertySetDto**](MapiContactElectronicAddressPropertySetDto.md) | Specify properties for up to three different e-mail addresses and three different fax addresses. | [optional] 
**events** | [**\Aspose\Email\Model\MapiContactEventPropertySetDto**](MapiContactEventPropertySetDto.md) | Specify events associated with a contact. | [optional] 
**name_info** | [**\Aspose\Email\Model\MapiContactNamePropertySetDto**](MapiContactNamePropertySetDto.md) | The properties are used to specify the name of the person represented by the contact. | [optional] 
**other_fields** | [**\Aspose\Email\Model\MapiContactOtherPropertySetDto**](MapiContactOtherPropertySetDto.md) | Specify other fields of contact. | [optional] 
**personal_info** | [**\Aspose\Email\Model\MapiContactPersonalInfoPropertySetDto**](MapiContactPersonalInfoPropertySetDto.md) | Specify other additional contact information. | [optional] 
**photo** | [**\Aspose\Email\Model\MapiContactPhotoDto**](MapiContactPhotoDto.md) | Contact photo. | [optional] 
**physical_addresses** | [**\Aspose\Email\Model\MapiContactPhysicalAddressPropertySetDto**](MapiContactPhysicalAddressPropertySetDto.md) | Specify three physical addresses: Home Address, Work Address, and Other Address. One of the addresses can be marked as the Mailing Address. | [optional] 
**professional_info** | [**\Aspose\Email\Model\MapiContactProfessionalPropertySetDto**](MapiContactProfessionalPropertySetDto.md) | Properties are used to store professional details for the person represented by the contact. | [optional] 
**telephones** | [**\Aspose\Email\Model\MapiContactTelephonePropertySetDto**](MapiContactTelephonePropertySetDto.md) | Specify telephone numbers for the contact. | [optional] 

 Parent class: [MapiMessageItemBaseDto](MapiMessageItemBaseDto.md)


## Example
```php
$mapiContactDto = Models::mapiContactDto()
    ->electronicAddresses(Models::mapiContactElectronicAddressPropertySetDto()
        ->defaultEmailAddress(Models::mapiContactElectronicAddressDto()
            ->emailAddress('email@aspose.com')
            ->build())
        ->build())
    ->nameInfo(Models::mapiContactNamePropertySetDto()
        ->givenName('Alex')
        ->surname('Thomas')
        ->build())
    ->personalInfo(Models::mapiContactPersonalInfoPropertySetDto()
        ->businessHomePage('www.aspose.com')
        ->build())
    ->professionalInfo(Models::mapiContactProfessionalPropertySetDto()
        ->profession('GENERAL DIRECTOR')
        ->build())
    ->telephones(Models::mapiContactTelephonePropertySetDto()
        ->primaryTelephoneNumber('+49 211 4247 21')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

