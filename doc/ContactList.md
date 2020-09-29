# ContactList

List of VCard documents

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfContactDto](ListResponseOfContactDto.md)


## Example
```php
$contactList = new ContactList
{
    Value = new List<ContactDto>
    {
        new ContactDto
        {
            Attachments = new List<Attachment>
            {
                new Attachment
                {
                    Name = "attachment.txt",
                    Base64Data = "U29tZSBmaWxlIGNvbnRlbnQ="
                }
            },
            DisplayName = "Alex Thomas",
            EmailAddresses = new List<EmailAddress>
            {
                new EmailAddress
                {
                    Category = new EnumWithCustom<EmailAddressCategory>
                    {
                        Value = "Custom",
                        Description = "Partners"
                    },
                    DisplayName = "Alex Thomas Partners",
                    Preferred = true,
                    Address = "email@aspose.com"
                }
            },
            Gender = "Male",
            GivenName = "Alex",
            PhoneNumbers = new List<PhoneNumber>
            {
                new PhoneNumber
                {
                    Category = new EnumWithCustom<PhoneNumberCategory>
                    {
                        Value = "Office"
                    },
                    Number = "+49 211 4247 21",
                    Preferred = true
                }
            },
            Profession = "GENERAL DIRECTOR",
            Surname = "Thomas",
            Urls = new List<Url>
            {
                new Url
                {
                    Category = new EnumWithCustom<UrlCategory>
                    {
                        Value = "Work"
                    },
                    Preferred = true,
                    Href = "www.aspose.com"
                }
            }
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

