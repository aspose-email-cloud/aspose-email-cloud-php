# ContactApi ($emailCloud->contact())

Contact document operations. Supported formats: VCard, MSG, WebDav

## asFile

Description: Converts contact model to specified format and returns as file

Returns: File stream in specified format

Method call example:
```php
$result = $api->contact()->asFile($request);
```

### Parameter: request

Description: Contact model and format to convert

See parameter model documentation at [ContactAsFileRequest](ContactAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::contactAsFileRequest()
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
    ->build();
```

</details>


### Result

Description: File stream in specified format

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$request = Models::contactAsFileRequest()
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
    ->build();

// Call method:
$result = $api->contact().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asMapi

Description: Converts ContactDto to MapiContactDto.

Returns: MAPI model contact representation

Method call example:
```php
$result = $api->contact()->asMapi($contact_dto);
```

### Parameter: contact_dto

Description: Contact model to convert

See parameter model documentation at [ContactDto](ContactDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$contact_dto = Models::contactDto()
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
    ->build();
```

</details>


### Result

Description: MAPI model contact representation

Return type: [**MapiContactDto**](MapiContactDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::mapiContactDto()
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
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$contact_dto = Models::contactDto()
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
    ->build();

// Call method:
$result = $api->contact().asMapi($contact_dto);

// Result example:
$result = Models::mapiContactDto()
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

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **convert**

Description: Converts contact document to specified format and returns as file

Returns: File stream in specified destination format

Method call example:
```php
$result = $api->contact()->convert($request);
```

### Parameter: request

Description: convert method request.

See parameter model documentation at [ContactConvertRequest](ContactConvertRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ContactConvertRequest()
    ->to_format('VCard')
    ->from_format('Msg')
    ->file(new SplFileObject('/path/to/contact.msg'))
    ->build();
```

</details>

### Result

Description: File stream in specified destination format

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$to_format = ;
$from_format = ;
$file = ;

// Call method:
$result = $api->contact().convert($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **fromFile**

Description: Converts contact document to a model representation

Returns: Contact model

Method call example:
```php
$result = $api->contact()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [ContactFromFileRequest](ContactFromFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ContactFromFileRequest()
    ->format('Msg')
    ->file(new SplFileObject('/path/to/contact.msg'))
    ->build();
```

</details>

### Result

Description: Contact model

Return type: [**ContactDto**](ContactDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::contactDto()
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
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$format = ;
$file = ;

// Call method:
$result = $api->contact().fromFile($request);

// Result example:
$result = Models::contactDto()
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
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get contact document from storage.

Returns: Contact document.

Method call example:
```php
$result = $api->contact()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [ContactGetRequest](ContactGetRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ContactGetRequest()
    ->format('VCard')
    ->file_name('contact.vcf')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    ->build();
```

</details>

### Result

Description: Contact document.

Return type: [**ContactDto**](ContactDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::contactDto()
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
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$format = ;
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->contact().get($request);

// Result example:
$result = Models::contactDto()
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
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getAsFile**

Description: Converts contact document from storage to specified format and returns as file

Returns: File stream in specified format

Method call example:
```php
$result = $api->contact()->getAsFile($request);
```

### Parameter: request

Description: getAsFile method request.

See parameter model documentation at [ContactGetAsFileRequest](ContactGetAsFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ContactGetAsFileRequest()
    ->file_name('contact.msg')
    ->to_format('VCard')
    ->from_format('Msg')
    ->storage('First Storage')
    ->folder('folder/on/storage')
    ->build();
```

</details>

### Result

Description: File stream in specified format

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$file_name = ;
$to_format = ;
$from_format = ;
$storage = ;
$folder = ;

// Call method:
$result = $api->contact().getAsFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getList**

Description: Get contact list from storage folder.

Returns: Contact list.

Method call example:
```php
$result = $api->contact()->getList($request);
```

### Parameter: request

Description: getList method request.

See parameter model documentation at [ContactGetListRequest](ContactGetListRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ContactGetListRequest()
    ->format('VCard')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    ->items_per_page(10)
    ->page_number(0)
    ->build();
```

</details>

### Result

Description: Contact list.

Return type: [**ContactStorageList**](ContactStorageList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::contactStorageList()
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
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$format = ;
$folder = ;
$storage = ;
$items_per_page = ;
$page_number = ;

// Call method:
$result = $api->contact().getList($request);

// Result example:
$result = Models::contactStorageList()
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

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save contact to storage.


Method call example:
```php
$api->contact()->save($request);
```

### Parameter: request

Description: Create/Update contact request.

See parameter model documentation at [ContactSaveRequest](ContactSaveRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::contactSaveRequest()
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
    ->build();
```

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$request = Models::contactSaveRequest()
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
    ->build();

// Call method:
$api->contact().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
