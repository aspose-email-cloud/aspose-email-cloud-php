# MapiContactSaveRequest

MapiContact save to storage request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string** | Enumerates contact formats. Enum, available values: VCard, WebDav, Msg | 

 Parent class: [StorageModelOfMapiContactDto](StorageModelOfMapiContactDto.md)


## Example
```php
$mapiContactSaveRequest = new MapiContactSaveRequest
{
    Format = "Msg",
    StorageFile = new StorageFileLocation
    {
        FileName = "contact.msg",
        Storage = "First Storage",
        FolderPath = "file/location/folder/on/storage"
    },
    Value = new MapiContactDto
    {
        ElectronicAddresses = new MapiContactElectronicAddressPropertySetDto
        {
            DefaultEmailAddress = new MapiContactElectronicAddressDto
            {
                EmailAddress = "email@aspose.com"
            }
        },
        NameInfo = new MapiContactNamePropertySetDto
        {
            GivenName = "Alex",
            Surname = "Thomas"
        },
        PersonalInfo = new MapiContactPersonalInfoPropertySetDto
        {
            BusinessHomePage = "www.aspose.com"
        },
        ProfessionalInfo = new MapiContactProfessionalPropertySetDto
        {
            Profession = "GENERAL DIRECTOR"
        },
        Telephones = new MapiContactTelephonePropertySetDto
        {
            PrimaryTelephoneNumber = "+49 211 4247 21"
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

