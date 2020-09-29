# ContactStorageList

Contact models list with corresponding storage locations.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfStorageModelOfContactDto](ListResponseOfStorageModelOfContactDto.md)


## Example
```php
$contactStorageList = Models::contactStorageList()
    ->value(array(
        Models::storageModel<ContactDto>()
            ->storageFile(Models::storageFileLocation()
                ->fileName('contact.vcf')
                ->storage('First Storage')
                ->folderPath('file/location/folder/on/storage')
                ->build())
            ->value(Models::contactDto()
                ->attachments(array(
                    Models::attachment()
                        ->name('attachment.txt')
                        ->base64Data('U29tZSBmaWxlIGNvbnRlbnQ=')
                        ->build()))
                ->displayName('Alex Thomas')
                ->emailAddresses(array(
                    Models::emailAddress()
                        ->category(Models::enumWithCustom<EmailAddressCategory>()
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
                        ->category(Models::enumWithCustom<PhoneNumberCategory>()
                            ->value('Office')
                            ->build())
                        ->number('+49 211 4247 21')
                        ->preferred(true)
                        ->build()))
                ->profession('GENERAL DIRECTOR')
                ->surname('Thomas')
                ->urls(array(
                    Models::url()
                        ->category(Models::enumWithCustom<UrlCategory>()
                            ->value('Work')
                            ->build())
                        ->preferred(true)
                        ->href('www.aspose.com')
                        ->build()))
                ->build())
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

