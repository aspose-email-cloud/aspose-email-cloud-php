# ContactDto

VCard document representation.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**associated_persons** | [**\Aspose\Email\Model\AssociatedPerson[]**](AssociatedPerson.md) | Associated persons. | [optional] 
**attachments** | [**\Aspose\Email\Model\Attachment[]**](Attachment.md) | Document attachments. | [optional] 
**company_name** | **string** | Company name. | [optional] 
**computer_network_name** | **string** | Computer network. | [optional] 
**customer_id** | **string** | Customer id. | [optional] 
**department_name** | **string** | Department name. | [optional] 
**display_name** | **string** | Display name. | [optional] 
**email_addresses** | [**\Aspose\Email\Model\EmailAddress[]**](EmailAddress.md) | Person's email addresses. | [optional] 
**events** | [**\Aspose\Email\Model\CustomerEvent[]**](CustomerEvent.md) | Person's events. | [optional] 
**file_as** | **string** | A name used for sorting. | [optional] 
**file_as_mapping** | **string** | Specifies how to generate and recompute the value of the dispidFileAs property when other contact name properties change. Coincides MS-OXPROPS revision 16.2 from 7/31/2014. Enum, available values: Empty, DisplayName, FirstName, LastName, Organization, LastFirstMiddle, OrgLastFirstMiddle, LastFirstMiddleOrg, LastFirstMiddle2, LastFirstMiddle3, OrgLastFirstMiddle2, OrgLastFirstMiddle3, LastFirstMiddleOrg2, LastFirstMiddleOrg3, LastFirstMiddleGen, FirstMiddleLastGen, LastFirstMiddleGen2, BestMatch, AccordingToLocale, None | 
**free_busy_location** | **string** | URL path from which a client can retrieve free/busy information for the contact as an iCal file. | [optional] 
**gender** | **string** | Enum defines gender of a person. Enum, available values: Unspecified, Female, Male | 
**given_name** | **string** | Person's given name. | [optional] 
**government_id_number** | **string** | Government id number. | [optional] 
**hobbies** | **string** | Person's hobbies. | [optional] 
**initials** | **string** | Person's initials. | [optional] 
**instant_messengers** | [**\Aspose\Email\Model\InstantMessengerAddress[]**](InstantMessengerAddress.md) | Person's instant messenger addresses. | [optional] 
**job_title** | **string** | Person's job title. | [optional] 
**language** | **string** | Language. | [optional] 
**location** | **string** | Person's location. | [optional] 
**middle_name** | **string** | Person's middle name. | [optional] 
**nickname** | **string** | Person's nickname. | [optional] 
**notes** | **string** | Notes. | [optional] 
**notes_format** | **string** | Defines format of a text. Enum, available values: Text, Html | 
**office_location** | **string** | Office location. | [optional] 
**organizational_id_number** | **string** | Contains an identifier for the mail user used within the mail user's organization. | [optional] 
**phone_numbers** | [**\Aspose\Email\Model\PhoneNumber[]**](PhoneNumber.md) | Person's phone numbers. | [optional] 
**photo** | [**\Aspose\Email\Model\ContactPhoto**](ContactPhoto.md) | Person's photo. | [optional] 
**physical_addresses** | [**\Aspose\Email\Model\PostalAddress[]**](PostalAddress.md) | Person's physical addresses. | [optional] 
**preferred_text_encoding** | **string** | Encoding for all text properties. | [optional] 
**prefix** | **string** | A prefix of a full name such like Mr.(mister), Dr.(doctor) and so on. | [optional] 
**profession** | **string** | A job position of a person in a company. | [optional] 
**suffix** | **string** | A suffix of a full name such like Jr.(junior), Sr.(senior) and so on. | [optional] 
**surname** | **string** | Person's surname. | [optional] 
**urls** | [**\Aspose\Email\Model\Url[]**](Url.md) | Person's urls. | [optional] 



## Example
```php
$contactDto = Models::contactDto()
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
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

