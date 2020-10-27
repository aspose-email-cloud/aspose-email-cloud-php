# ContactList

List of VCard documents

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfContactDto](ListResponseOfContactDto.md)


## Example
```php
$contactList = Models::contactList()
    ->value(array(
        Models::contactDto()
            ->attachments(array(
                Models::attachment()
                    ->name('attachment.txt')
                    ->base64Data('U29tZSBmaWxlIGNvbnRlbnQ=')
                    ->build()))
            ->displayName('Alex Thomas')
            ->emailAddresses(array(
                Models::emailAddress()
                    ->category(Models::enumWithCustomOfEmailAddressCategory()
                        ->value('Custom')
                        ->description('Partners')
                        ->build())
                    ->displayName('Alex Thomas Partners')
                    ->preferred(true)
                    ->address('email@aspose.com')
                    ->build()))
            ->gender('Male')
            ->givenName('Alex')
            ->phoneNumbers(array(
                Models::phoneNumber()
                    ->category(Models::enumWithCustomOfPhoneNumberCategory()
                        ->value('Office')
                        ->build())
                    ->number('+49 211 4247 21')
                    ->preferred(true)
                    ->build()))
            ->profession('GENERAL DIRECTOR')
            ->surname('Thomas')
            ->urls(array(
                Models::url()
                    ->category(Models::enumWithCustomOfUrlCategory()
                        ->value('Work')
                        ->build())
                    ->preferred(true)
                    ->href('www.aspose.com')
                    ->build()))
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

