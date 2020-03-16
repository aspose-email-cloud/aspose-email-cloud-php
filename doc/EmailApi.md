# Aspose\Email\EmailApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCalendarAttachment**](EmailApi.md#addCalendarAttachment) | **PUT** /email/Calendar/{name}/attachments/{attachment} | Adds an attachment to iCalendar file
[**addContactAttachment**](EmailApi.md#addContactAttachment) | **PUT** /email/Contact/{format}/{name}/attachments/{attachment} | Add attachment to contact document
[**addEmailAttachment**](EmailApi.md#addEmailAttachment) | **POST** /email/{fileName}/attachments/{attachmentName} | Adds an attachment to Email document
[**addMapiAttachment**](EmailApi.md#addMapiAttachment) | **PUT** /email/Mapi/{name}/attachments/{attachment} | Add attachment to document
[**aiBcrOcr**](EmailApi.md#aiBcrOcr) | **POST** /email/AiBcr/ocr | Ocr images
[**aiBcrOcrStorage**](EmailApi.md#aiBcrOcrStorage) | **POST** /email/AiBcr/ocr-storage | Ocr images from storage
[**aiBcrParse**](EmailApi.md#aiBcrParse) | **POST** /email/AiBcr/parse | Parse images to vCard properties
[**aiBcrParseModel**](EmailApi.md#aiBcrParseModel) | **POST** /email/AiBcr/parse-model | Parse images to vCard document models
[**aiBcrParseOcrDataModel**](EmailApi.md#aiBcrParseOcrDataModel) | **POST** /email/AiBcr/parse-ocr-data-model | Parse OCR data to vCard document models
[**aiBcrParseStorage**](EmailApi.md#aiBcrParseStorage) | **POST** /email/AiBcr/parse-storage | Parse images from storage to vCard files
[**aiNameComplete**](EmailApi.md#aiNameComplete) | **GET** /email/AiName/complete | The call proposes k most probable names for given starting characters
[**aiNameExpand**](EmailApi.md#aiNameExpand) | **GET** /email/AiName/expand | Expands a person&#39;s name into a list of possible alternatives using options for expanding instructions
[**aiNameExpandParsed**](EmailApi.md#aiNameExpandParsed) | **POST** /email/AiName/expand-parsed | Expands a person&#39;s parsed name into a list of possible alternatives using options for expanding instructions
[**aiNameFormat**](EmailApi.md#aiNameFormat) | **GET** /email/AiName/format | Formats a person&#39;s name in correct case and name order using options for formatting instructions
[**aiNameFormatParsed**](EmailApi.md#aiNameFormatParsed) | **POST** /email/AiName/format-parsed | Formats a person&#39;s parsed name in correct case and name order using options for formatting instructions
[**aiNameGenderize**](EmailApi.md#aiNameGenderize) | **GET** /email/AiName/genderize | Detect person&#39;s gender from name string
[**aiNameGenderizeParsed**](EmailApi.md#aiNameGenderizeParsed) | **POST** /email/AiName/genderize-parsed | Detect person&#39;s gender from parsed name
[**aiNameMatch**](EmailApi.md#aiNameMatch) | **GET** /email/AiName/match | Compare people&#39;s names. Uses options for comparing instructions
[**aiNameMatchParsed**](EmailApi.md#aiNameMatchParsed) | **POST** /email/AiName/match-parsed | Compare people&#39;s parsed names and attributes. Uses options for comparing instructions
[**aiNameParse**](EmailApi.md#aiNameParse) | **GET** /email/AiName/parse | Parse name to components
[**aiNameParseEmailAddress**](EmailApi.md#aiNameParseEmailAddress) | **GET** /email/AiName/parse-email-address | Parse person&#39;s name out of an email address
[**appendEmailMessage**](EmailApi.md#appendEmailMessage) | **PUT** /email/client/Append | Adds an email from *.eml file to specified folder in email account
[**appendEmailModelMessage**](EmailApi.md#appendEmailModelMessage) | **PUT** /email/client/AppendModel | Adds an email from model to specified folder in email account
[**appendMimeMessage**](EmailApi.md#appendMimeMessage) | **PUT** /email/client/AppendMime | Adds an email from MIME to specified folder in email account
[**convertCalendarModelToAlternate**](EmailApi.md#convertCalendarModelToAlternate) | **PUT** /email/CalendarModel/as-alternate | Convert iCalendar to AlternateView
[**convertEmail**](EmailApi.md#convertEmail) | **PUT** /email/convert/{format} | Converts email document to specified format and returns as file
[**copyFile**](EmailApi.md#copyFile) | **PUT** /email/storage/file/copy/{srcPath} | Copy file
[**copyFolder**](EmailApi.md#copyFolder) | **PUT** /email/storage/folder/copy/{srcPath} | Copy folder
[**createCalendar**](EmailApi.md#createCalendar) | **PUT** /email/Calendar/{name} | Create calendar file
[**createContact**](EmailApi.md#createContact) | **PUT** /email/Contact/{format}/{name} | Create contact document
[**createEmail**](EmailApi.md#createEmail) | **PUT** /email/{fileName} | Create an email document
[**createEmailFolder**](EmailApi.md#createEmailFolder) | **PUT** /email/client/CreateFolder | Create new folder in email account
[**createFolder**](EmailApi.md#createFolder) | **PUT** /email/storage/folder/{path} | Create the folder
[**createMapi**](EmailApi.md#createMapi) | **PUT** /email/Mapi/{name} | Create new document
[**deleteCalendarProperty**](EmailApi.md#deleteCalendarProperty) | **DELETE** /email/Calendar/{name}/properties/{memberName}/{index} | Deletes indexed property by index and name. To delete Reminder attachment, use path ReminderAttachment/{ReminderIndex}/{AttachmentIndex}
[**deleteContactProperty**](EmailApi.md#deleteContactProperty) | **DELETE** /email/Contact/{format}/{name}/properties/{memberName}/{index} | Delete property from indexed property list
[**deleteEmailFolder**](EmailApi.md#deleteEmailFolder) | **DELETE** /email/client/DeleteFolder | Delete a folder in email account
[**deleteEmailMessage**](EmailApi.md#deleteEmailMessage) | **DELETE** /email/client/DeleteMessage | Delete message from email account by id
[**deleteFile**](EmailApi.md#deleteFile) | **DELETE** /email/storage/file/{path} | Delete file
[**deleteFolder**](EmailApi.md#deleteFolder) | **DELETE** /email/storage/folder/{path} | Delete folder
[**deleteMapiAttachment**](EmailApi.md#deleteMapiAttachment) | **DELETE** /email/Mapi/{name}/attachments/{attachment} | Remove attachment from document
[**deleteMapiProperties**](EmailApi.md#deleteMapiProperties) | **DELETE** /email/Mapi/{name}/properties | Delete document properties
[**discoverEmailConfig**](EmailApi.md#discoverEmailConfig) | **GET** /email/config/discover | Discover email accounts by email address. Does not validate discovered accounts.
[**discoverEmailConfigOauth**](EmailApi.md#discoverEmailConfigOauth) | **POST** /email/config/discover/oauth | Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
[**discoverEmailConfigPassword**](EmailApi.md#discoverEmailConfigPassword) | **POST** /email/config/discover/password | Discover email accounts by email address. Validates discovered accounts using login and password.
[**downloadFile**](EmailApi.md#downloadFile) | **GET** /email/storage/file/{path} | Download file
[**fetchEmailMessage**](EmailApi.md#fetchEmailMessage) | **GET** /email/client/Fetch | Fetch message mime from email account
[**fetchEmailModel**](EmailApi.md#fetchEmailModel) | **GET** /email/client/FetchModel | Fetch message model from email account
[**getCalendar**](EmailApi.md#getCalendar) | **GET** /email/Calendar/{name}/properties | Get calendar file properties
[**getCalendarAttachment**](EmailApi.md#getCalendarAttachment) | **GET** /email/Calendar/{name}/attachments/{attachment} | Get iCalendar document attachment by name
[**getCalendarList**](EmailApi.md#getCalendarList) | **GET** /email/Calendar | Get iCalendar files list in folder on storage
[**getCalendarModel**](EmailApi.md#getCalendarModel) | **GET** /email/CalendarModel/{name} | Get calendar file
[**getCalendarModelAsAlternate**](EmailApi.md#getCalendarModelAsAlternate) | **GET** /email/CalendarModel/{name}/as-alternate/{calendarAction} | Get iCalendar from storage as AlternateView
[**getCalendarModelList**](EmailApi.md#getCalendarModelList) | **GET** /email/CalendarModel | Get iCalendar list from storage folder
[**getContactAttachment**](EmailApi.md#getContactAttachment) | **GET** /email/Contact/{format}/{name}/attachments/{attachment} | Get attachment file by name
[**getContactList**](EmailApi.md#getContactList) | **GET** /email/Contact/{format} | Get contact list from storage folder
[**getContactModel**](EmailApi.md#getContactModel) | **GET** /email/ContactModel/{format}/{name} | Get contact document.
[**getContactModelList**](EmailApi.md#getContactModelList) | **GET** /email/ContactModel/{format} | Get contact list from storage folder.
[**getContactProperties**](EmailApi.md#getContactProperties) | **GET** /email/Contact/{format}/{name}/properties | Get contact document properties
[**getDiscUsage**](EmailApi.md#getDiscUsage) | **GET** /email/storage/disc | Get disc usage
[**getEmail**](EmailApi.md#getEmail) | **GET** /email/{fileName} | Get email document
[**getEmailAsFile**](EmailApi.md#getEmailAsFile) | **GET** /email/{fileName}/as-file/{format} | Converts email document from storage to specified format and returns as file
[**getEmailAttachment**](EmailApi.md#getEmailAttachment) | **GET** /email/{fileName}/attachments/{attachment} | Get email attachment by name
[**getEmailClientAccount**](EmailApi.md#getEmailClientAccount) | **GET** /email/client/email-client-account | Get email client account from storage
[**getEmailClientMultiAccount**](EmailApi.md#getEmailClientMultiAccount) | **GET** /email/client/multi-account | Get email client multi account file (*.multi.account). Will respond error if file extension is not \&quot;.multi.account\&quot;.
[**getEmailModel**](EmailApi.md#getEmailModel) | **GET** /email/model/{format}/{name} | Get email document.
[**getEmailModelList**](EmailApi.md#getEmailModelList) | **GET** /email/model/{format} | Get email list from storage folder.
[**getEmailProperty**](EmailApi.md#getEmailProperty) | **GET** /email/{fileName}/properties/{propertyName} | Get an email document property by its name
[**getFileVersions**](EmailApi.md#getFileVersions) | **GET** /email/storage/version/{path} | Get file versions
[**getFilesList**](EmailApi.md#getFilesList) | **GET** /email/storage/folder/{path} | Get all files and folders within a folder
[**getMapiAttachment**](EmailApi.md#getMapiAttachment) | **GET** /email/Mapi/{name}/attachments/{attachment} | Get document attachment as file stream
[**getMapiAttachments**](EmailApi.md#getMapiAttachments) | **GET** /email/Mapi/{name}/attachments | Get document attachment list
[**getMapiList**](EmailApi.md#getMapiList) | **GET** /email/Mapi | Get document list from storage folder
[**getMapiProperties**](EmailApi.md#getMapiProperties) | **GET** /email/Mapi/{name}/properties | Get document properties
[**isEmailAddressDisposable**](EmailApi.md#isEmailAddressDisposable) | **GET** /email/disposable/isDisposable/{address} | Check email address is disposable
[**listEmailFolders**](EmailApi.md#listEmailFolders) | **GET** /email/client/ListFolders | Get folders list in email account
[**listEmailMessages**](EmailApi.md#listEmailMessages) | **GET** /email/client/ListMessages | Get messages from folder, filtered by query
[**listEmailModels**](EmailApi.md#listEmailModels) | **GET** /email/client/ListMessagesModel | Get messages from folder, filtered by query
[**moveFile**](EmailApi.md#moveFile) | **PUT** /email/storage/file/move/{srcPath} | Move file
[**moveFolder**](EmailApi.md#moveFolder) | **PUT** /email/storage/folder/move/{srcPath} | Move folder
[**objectExists**](EmailApi.md#objectExists) | **GET** /email/storage/exist/{path} | Check if file or folder exists
[**saveCalendarModel**](EmailApi.md#saveCalendarModel) | **PUT** /email/CalendarModel/{name} | Save iCalendar
[**saveContactModel**](EmailApi.md#saveContactModel) | **PUT** /email/ContactModel/{format}/{name} | Save contact.
[**saveEmailClientAccount**](EmailApi.md#saveEmailClientAccount) | **PUT** /email/client/email-client-account | Create email client account file (*.account) with any of supported credentials
[**saveEmailClientMultiAccount**](EmailApi.md#saveEmailClientMultiAccount) | **PUT** /email/client/multi-account | Create email client multi account file (*.multi.account). Will respond error if file extension is not \&quot;.multi.account\&quot;.
[**saveEmailModel**](EmailApi.md#saveEmailModel) | **PUT** /email/model/{format}/{name} | Save email document.
[**saveMailAccount**](EmailApi.md#saveMailAccount) | **POST** /email/client/SaveMailAccount | Create email account file (*.account) with login/password authentication
[**saveMailOAuthAccount**](EmailApi.md#saveMailOAuthAccount) | **POST** /email/client/SaveMailOAuthAccount | Create email account file (*.account) with OAuth
[**sendEmail**](EmailApi.md#sendEmail) | **POST** /email/client/Send | Send an email from *.eml file located on storage
[**sendEmailMime**](EmailApi.md#sendEmailMime) | **POST** /email/client/SendMime | Send an email specified by MIME in request
[**sendEmailModel**](EmailApi.md#sendEmailModel) | **POST** /email/client/SendModel | Send an email specified by model in request
[**setEmailProperty**](EmailApi.md#setEmailProperty) | **PUT** /email/{fileName}/properties/{propertyName} | Set email document property value
[**setEmailReadFlag**](EmailApi.md#setEmailReadFlag) | **POST** /email/client/SetReadFlag | Sets \&quot;Message is read\&quot; flag
[**storageExists**](EmailApi.md#storageExists) | **GET** /email/storage/{storageName}/exist | Check if storage exists
[**updateCalendarProperties**](EmailApi.md#updateCalendarProperties) | **PUT** /email/Calendar/{name}/properties | Update calendar file properties
[**updateContactProperties**](EmailApi.md#updateContactProperties) | **PUT** /email/Contact/{format}/{name}/properties | Update contact document properties
[**updateMapiProperties**](EmailApi.md#updateMapiProperties) | **PUT** /email/Mapi/{name}/properties | Update document properties
[**uploadFile**](EmailApi.md#uploadFile) | **PUT** /email/storage/file/{path} | Upload file


# **addCalendarAttachment**
```php
function addCalendarAttachment(Requests\AddCalendarAttachmentRequest $request)
```
Adds an attachment to iCalendar file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\AddCalendarAttachmentRequest(
    $name,
    $attachment,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Calendar file name in storage |
 **attachment** | **string**| Attachment file name in storage |
 **request** | [**\Aspose\Email\Model\AddAttachmentRequest**](AddAttachmentRequest.md)| Storage name and folder path for calendar and attachment files |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **addContactAttachment**
```php
function addContactAttachment(Requests\AddContactAttachmentRequest $request)
```
Add attachment to contact document

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\AddContactAttachmentRequest(
    $format,
    $name,
    $attachment,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name |
 **attachment** | **string**| Attachment name |
 **request** | [**\Aspose\Email\Model\AddAttachmentRequest**](AddAttachmentRequest.md)| Add attachment request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **addEmailAttachment**
```php
function \Aspose\Email\Model\EmailDocumentResponse addEmailAttachment(Requests\AddEmailAttachmentRequest $request)
```
Adds an attachment to Email document

### Return type

[**\Aspose\Email\Model\EmailDocumentResponse**](EmailDocumentResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AddEmailAttachmentRequest(
    $attachment_name,
    $file_name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_name** | **string**| Attachment file name |
 **file_name** | **string**| Email document file name |
 **request** | [**\Aspose\Email\Model\AddAttachmentRequest**](AddAttachmentRequest.md)| Storage info to specify location of email document and attachment files |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **addMapiAttachment**
```php
function addMapiAttachment(Requests\AddMapiAttachmentRequest $request)
```
Add attachment to document

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\AddMapiAttachmentRequest(
    $name,
    $attachment,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **attachment** | **string**| Attachment file name |
 **request** | [**\Aspose\Email\Model\AddAttachmentRequest**](AddAttachmentRequest.md)| Add attachment request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiBcrOcr**
```php
function \Aspose\Email\Model\ListResponseOfAiBcrOcrData aiBcrOcr(Requests\AiBcrOcrRequest $request)
```
Ocr images

### Return type

[**\Aspose\Email\Model\ListResponseOfAiBcrOcrData**](ListResponseOfAiBcrOcrData.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrOcrRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiBcrBase64Rq**](AiBcrBase64Rq.md)| Request with base64 images data |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiBcrOcrStorage**
```php
function \Aspose\Email\Model\ListResponseOfAiBcrOcrData aiBcrOcrStorage(Requests\AiBcrOcrStorageRequest $request)
```
Ocr images from storage

### Return type

[**\Aspose\Email\Model\ListResponseOfAiBcrOcrData**](ListResponseOfAiBcrOcrData.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrOcrStorageRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiBcrStorageImageRq**](AiBcrStorageImageRq.md)| Request with images located on storage |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiBcrParse**
```php
function \Aspose\Email\Model\ListResponseOfHierarchicalObject aiBcrParse(Requests\AiBcrParseRequest $request)
```
Parse images to vCard properties

### Return type

[**\Aspose\Email\Model\ListResponseOfHierarchicalObject**](ListResponseOfHierarchicalObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrParseRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiBcrBase64Rq**](AiBcrBase64Rq.md)| Request with base64 images data |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiBcrParseModel**
```php
function \Aspose\Email\Model\ListResponseOfContactDto aiBcrParseModel(Requests\AiBcrParseModelRequest $request)
```
Parse images to vCard document models

### Return type

[**\Aspose\Email\Model\ListResponseOfContactDto**](ListResponseOfContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrParseModelRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiBcrBase64Rq**](AiBcrBase64Rq.md)| Request with base64 images data |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiBcrParseOcrDataModel**
```php
function \Aspose\Email\Model\ListResponseOfContactDto aiBcrParseOcrDataModel(Requests\AiBcrParseOcrDataModelRequest $request)
```
Parse OCR data to vCard document models

### Return type

[**\Aspose\Email\Model\ListResponseOfContactDto**](ListResponseOfContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrParseOcrDataModelRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiBcrParseOcrDataRq**](AiBcrParseOcrDataRq.md)|  |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiBcrParseStorage**
```php
function \Aspose\Email\Model\ListResponseOfStorageFileLocation aiBcrParseStorage(Requests\AiBcrParseStorageRequest $request)
```
Parse images from storage to vCard files

### Return type

[**\Aspose\Email\Model\ListResponseOfStorageFileLocation**](ListResponseOfStorageFileLocation.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrParseStorageRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiBcrParseStorageRq**](AiBcrParseStorageRq.md)| Request with images located on storage |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameComplete**
```php
function \Aspose\Email\Model\AiNameWeightedVariants aiNameComplete(Requests\AiNameCompleteRequest $request)
```
The call proposes k most probable names for given starting characters

### Return type

[**\Aspose\Email\Model\AiNameWeightedVariants**](AiNameWeightedVariants.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameCompleteRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to complete (required) |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian) | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France | [optional] [default to ]
 **encoding** | **string**| A character encoding name | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameExpand**
```php
function \Aspose\Email\Model\AiNameWeightedVariants aiNameExpand(Requests\AiNameExpandRequest $request)
```
Expands a person's name into a list of possible alternatives using options for expanding instructions

### Return type

[**\Aspose\Email\Model\AiNameWeightedVariants**](AiNameWeightedVariants.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameExpandRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to format (required) |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian) | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France | [optional] [default to ]
 **encoding** | **string**| A character encoding name | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameExpandParsed**
```php
function \Aspose\Email\Model\AiNameWeightedVariants aiNameExpandParsed(Requests\AiNameExpandParsedRequest $request)
```
Expands a person's parsed name into a list of possible alternatives using options for expanding instructions

### Return type

[**\Aspose\Email\Model\AiNameWeightedVariants**](AiNameWeightedVariants.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameExpandParsedRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiNameParsedRq**](AiNameParsedRq.md)| Parsed name with options |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameFormat**
```php
function \Aspose\Email\Model\AiNameFormatted aiNameFormat(Requests\AiNameFormatRequest $request)
```
Formats a person's name in correct case and name order using options for formatting instructions

### Return type

[**\Aspose\Email\Model\AiNameFormatted**](AiNameFormatted.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameFormatRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $format,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to format (required) |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian) | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France | [optional] [default to ]
 **encoding** | **string**| A character encoding name | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name | [optional] [default to ]
 **format** | **string**| Format of the name. Predefined format can be used by ID, or custom format can be specified. Predefined formats:      /format/default/ (&#x3D; &#39;%t%F%m%N%L%p&#39;)     /format/FN+LN/ (&#x3D; &#39;%F%L&#39;)     /format/title+FN+LN/ (&#x3D; &#39;%t%F%L&#39;)     /format/FN+MN+LN/ (&#x3D; &#39;%F%M%N%L&#39;)     /format/title+FN+MN+LN/ (&#x3D; &#39;%t%F%M%N%L&#39;)     /format/FN+MI+LN/ (&#x3D; &#39;%F%m%N%L&#39;)     /format/title+FN+MI+LN/ (&#x3D; &#39;%t%F%m%N%L&#39;)     /format/LN/ (&#x3D; &#39;%L&#39;)     /format/title+LN/ (&#x3D; &#39;%t%L&#39;)     /format/LN+FN+MN/ (&#x3D; &#39;%L,%F%M%N&#39;)     /format/LN+title+FN+MN/ (&#x3D; &#39;%L,%t%F%M%N&#39;)     /format/LN+FN+MI/ (&#x3D; &#39;%L,%F%m%N&#39;)     /format/LN+title+FN+MI/ (&#x3D; &#39;%L,%t%F%m%N&#39;)  Custom format string - custom combination of characters and the next term placeholders:      &#39;%t&#39; - Title (prefix)     &#39;%F&#39; - First name     &#39;%f&#39; - First initial     &#39;%M&#39; - Middle name(s)     &#39;%m&#39; - Middle initial(s)     &#39;%N&#39; - Nickname     &#39;%L&#39; - Last name     &#39;%l&#39; - Last initial     &#39;%p&#39; - Postfix  If no value for format option was provided, its default value is &#39;%t%F%m%N%L%p&#39; | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameFormatParsed**
```php
function \Aspose\Email\Model\AiNameFormatted aiNameFormatParsed(Requests\AiNameFormatParsedRequest $request)
```
Formats a person's parsed name in correct case and name order using options for formatting instructions

### Return type

[**\Aspose\Email\Model\AiNameFormatted**](AiNameFormatted.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameFormatParsedRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiNameParsedRq**](AiNameParsedRq.md)| Parsed name with options |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameGenderize**
```php
function \Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis aiNameGenderize(Requests\AiNameGenderizeRequest $request)
```
Detect person's gender from name string

### Return type

[**\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis**](ListResponseOfAiNameGenderHypothesis.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameGenderizeRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to parse (required) |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian) | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France | [optional] [default to ]
 **encoding** | **string**| A character encoding name | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameGenderizeParsed**
```php
function \Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis aiNameGenderizeParsed(Requests\AiNameGenderizeParsedRequest $request)
```
Detect person's gender from parsed name

### Return type

[**\Aspose\Email\Model\ListResponseOfAiNameGenderHypothesis**](ListResponseOfAiNameGenderHypothesis.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameGenderizeParsedRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiNameParsedRq**](AiNameParsedRq.md)| Gender detection request data |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameMatch**
```php
function \Aspose\Email\Model\AiNameMatchResult aiNameMatch(Requests\AiNameMatchRequest $request)
```
Compare people's names. Uses options for comparing instructions

### Return type

[**\Aspose\Email\Model\AiNameMatchResult**](AiNameMatchResult.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameMatchRequest(
    $name,
    $other_name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to match (required) |
 **other_name** | **string**| Another name to match (required) |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian) | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France | [optional] [default to ]
 **encoding** | **string**| A character encoding name | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameMatchParsed**
```php
function \Aspose\Email\Model\AiNameMatchResult aiNameMatchParsed(Requests\AiNameMatchParsedRequest $request)
```
Compare people's parsed names and attributes. Uses options for comparing instructions

### Return type

[**\Aspose\Email\Model\AiNameMatchResult**](AiNameMatchResult.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameMatchParsedRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AiNameParsedMatchRq**](AiNameParsedMatchRq.md)| Parsed names to match |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameParse**
```php
function \Aspose\Email\Model\ListResponseOfAiNameComponent aiNameParse(Requests\AiNameParseRequest $request)
```
Parse name to components

### Return type

[**\Aspose\Email\Model\ListResponseOfAiNameComponent**](ListResponseOfAiNameComponent.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameParseRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to parse (required) |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian) | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France | [optional] [default to ]
 **encoding** | **string**| A character encoding name | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name | [optional] [default to ]
 **style** | **string**| Name writing style Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameParseEmailAddress**
```php
function \Aspose\Email\Model\ListResponseOfAiNameExtracted aiNameParseEmailAddress(Requests\AiNameParseEmailAddressRequest $request)
```
Parse person's name out of an email address

### Return type

[**\Aspose\Email\Model\ListResponseOfAiNameExtracted**](ListResponseOfAiNameExtracted.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiNameParseEmailAddressRequest(
    $email_address,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**| Email address to parse (required) |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian) | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France | [optional] [default to ]
 **encoding** | **string**| A character encoding name | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **appendEmailMessage**
```php
function \Aspose\Email\Model\EmailPropertyResponse appendEmailMessage(Requests\AppendEmailMessageRequest $request)
```
Adds an email from *.eml file to specified folder in email account

### Return type

[**\Aspose\Email\Model\EmailPropertyResponse**](EmailPropertyResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AppendEmailMessageRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\AppendEmailBaseRequest**](AppendEmailBaseRequest.md)| Append email request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **appendEmailModelMessage**
```php
function \Aspose\Email\Model\ValueResponse appendEmailModelMessage(Requests\AppendEmailModelMessageRequest $request)
```
Adds an email from model to specified folder in email account

### Return type

[**\Aspose\Email\Model\ValueResponse**](ValueResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AppendEmailModelMessageRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\AppendEmailModelRq**](AppendEmailModelRq.md)| Append email request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **appendMimeMessage**
```php
function \Aspose\Email\Model\ValueResponse appendMimeMessage(Requests\AppendMimeMessageRequest $request)
```
Adds an email from MIME to specified folder in email account

### Return type

[**\Aspose\Email\Model\ValueResponse**](ValueResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AppendMimeMessageRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\AppendEmailMimeBaseRequest**](AppendEmailMimeBaseRequest.md)| Append email request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **convertCalendarModelToAlternate**
```php
function \Aspose\Email\Model\AlternateView convertCalendarModelToAlternate(Requests\ConvertCalendarModelToAlternateRequest $request)
```
Convert iCalendar to AlternateView

### Return type

[**\Aspose\Email\Model\AlternateView**](AlternateView.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ConvertCalendarModelToAlternateRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\CalendarDtoAlternateRq**](CalendarDtoAlternateRq.md)| iCalendar to AlternateView request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **convertEmail**
```php
function \SplFileObject convertEmail(Requests\ConvertEmailRequest $request)
```
Converts email document to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ConvertEmailRequest(
    $format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html |
 **file** | **\SplFileObject**| File to upload |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **copyFile**
```php
function copyFile(Requests\CopyFileRequest $request)
```
Copy file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CopyFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/folder/file.ext&#39; |
 **dest_path** | **string**| Destination file path |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to copy | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **copyFolder**
```php
function copyFolder(Requests\CopyFolderRequest $request)
```
Copy folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CopyFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source folder path e.g. &#39;/src&#39; |
 **dest_path** | **string**| Destination folder path e.g. &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createCalendar**
```php
function createCalendar(Requests\CreateCalendarRequest $request)
```
Create calendar file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CreateCalendarRequest(
    $name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Calendar file name in storage |
 **request** | [**\Aspose\Email\Model\HierarchicalObjectRequest**](HierarchicalObjectRequest.md)|  |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createContact**
```php
function createContact(Requests\CreateContactRequest $request)
```
Create contact document

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CreateContactRequest(
    $format,
    $name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name |
 **request** | [**\Aspose\Email\Model\HierarchicalObjectRequest**](HierarchicalObjectRequest.md)| Create contact request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createEmail**
```php
function \Aspose\Email\Model\EmailDocumentResponse createEmail(Requests\CreateEmailRequest $request)
```
Create an email document

### Return type

[**\Aspose\Email\Model\EmailDocumentResponse**](EmailDocumentResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\CreateEmailRequest(
    $file_name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Email document file name in storage |
 **request** | [**\Aspose\Email\Model\CreateEmailRequest**](CreateEmailRequest.md)| An email document and optional Storage info to specify where the file should be located |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createEmailFolder**
```php
function createEmailFolder(Requests\CreateEmailFolderRequest $request)
```
Create new folder in email account

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CreateEmailFolderRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\CreateFolderBaseRequest**](CreateFolderBaseRequest.md)| Create folder request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createFolder**
```php
function createFolder(Requests\CreateFolderRequest $request)
```
Create the folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CreateFolderRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path to create e.g. &#39;folder_1/folder_2/&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **createMapi**
```php
function createMapi(Requests\CreateMapiRequest $request)
```
Create new document

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\CreateMapiRequest(
    $name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **request** | [**\Aspose\Email\Model\HierarchicalObjectRequest**](HierarchicalObjectRequest.md)| Create document request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteCalendarProperty**
```php
function deleteCalendarProperty(Requests\DeleteCalendarPropertyRequest $request)
```
Deletes indexed property by index and name. To delete Reminder attachment, use path ReminderAttachment/{ReminderIndex}/{AttachmentIndex}

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteCalendarPropertyRequest(
    $name,
    $member_name,
    $index,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| iCalendar file name in storage |
 **member_name** | **string**| Indexed property name |
 **index** | **string**| Property index path |
 **request** | [**\Aspose\Email\Model\StorageFolderLocation**](StorageFolderLocation.md)| Storage detail to specify iCalendar file location |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteContactProperty**
```php
function deleteContactProperty(Requests\DeleteContactPropertyRequest $request)
```
Delete property from indexed property list

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteContactPropertyRequest(
    $format,
    $name,
    $member_name,
    $index,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name |
 **member_name** | **string**| Indexed property name |
 **index** | **int**| Property index |
 **folder** | [**\Aspose\Email\Model\StorageFolderLocation**](StorageFolderLocation.md)| Calendar document location in storage information |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteEmailFolder**
```php
function deleteEmailFolder(Requests\DeleteEmailFolderRequest $request)
```
Delete a folder in email account

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteEmailFolderRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\DeleteFolderBaseRequest**](DeleteFolderBaseRequest.md)| Delete folder request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteEmailMessage**
```php
function deleteEmailMessage(Requests\DeleteEmailMessageRequest $request)
```
Delete message from email account by id

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteEmailMessageRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\DeleteMessageBaseRequest**](DeleteMessageBaseRequest.md)| Delete message request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteFile**
```php
function deleteFile(Requests\DeleteFileRequest $request)
```
Delete file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteFileRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to delete | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteFolder**
```php
function deleteFolder(Requests\DeleteFolderRequest $request)
```
Delete folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteFolderRequest(
    $path,
    $storage_name,
    $recursive)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **recursive** | **bool**| Enable to delete folders, subfolders and files | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteMapiAttachment**
```php
function deleteMapiAttachment(Requests\DeleteMapiAttachmentRequest $request)
```
Remove attachment from document

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteMapiAttachmentRequest(
    $name,
    $attachment,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **attachment** | **string**| Attachment name or index |
 **storage** | [**\Aspose\Email\Model\StorageFolderLocation**](StorageFolderLocation.md)| Document file storage location info |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **deleteMapiProperties**
```php
function deleteMapiProperties(Requests\DeleteMapiPropertiesRequest $request)
```
Delete document properties

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\DeleteMapiPropertiesRequest(
    $name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **request** | [**\Aspose\Email\Model\HierarchicalObjectRequest**](HierarchicalObjectRequest.md)| Properties that should be deleted |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **discoverEmailConfig**
```php
function \Aspose\Email\Model\EmailAccountConfigList discoverEmailConfig(Requests\DiscoverEmailConfigRequest $request)
```
Discover email accounts by email address. Does not validate discovered accounts.

### Return type

[**\Aspose\Email\Model\EmailAccountConfigList**](EmailAccountConfigList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\DiscoverEmailConfigRequest(
    $address,
    $fast_processing)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Email address |
 **fast_processing** | **bool**| Turns on fast processing. All discover systems will run in parallel. First discovered result will be returned | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **discoverEmailConfigOauth**
```php
function \Aspose\Email\Model\EmailAccountConfigList discoverEmailConfigOauth(Requests\DiscoverEmailConfigOauthRequest $request)
```
Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.

### Return type

[**\Aspose\Email\Model\EmailAccountConfigList**](EmailAccountConfigList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\DiscoverEmailConfigOauthRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\DiscoverEmailConfigOauth**](DiscoverEmailConfigOauth.md)| Discover email configuration request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **discoverEmailConfigPassword**
```php
function \Aspose\Email\Model\EmailAccountConfigList discoverEmailConfigPassword(Requests\DiscoverEmailConfigPasswordRequest $request)
```
Discover email accounts by email address. Validates discovered accounts using login and password.

### Return type

[**\Aspose\Email\Model\EmailAccountConfigList**](EmailAccountConfigList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\DiscoverEmailConfigPasswordRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\DiscoverEmailConfigPassword**](DiscoverEmailConfigPassword.md)| Discover email configuration request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **downloadFile**
```php
function \SplFileObject downloadFile(Requests\DownloadFileRequest $request)
```
Download file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\DownloadFileRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/folder/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID to download | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **fetchEmailMessage**
```php
function \Aspose\Email\Model\MimeResponse fetchEmailMessage(Requests\FetchEmailMessageRequest $request)
```
Fetch message mime from email account

### Return type

[**\Aspose\Email\Model\MimeResponse**](MimeResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\FetchEmailMessageRequest(
    $message_id,
    $first_account,
    $second_account,
    $storage,
    $storage_folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Message identifier |
 **first_account** | **string**| Email account |
 **second_account** | **string**| Additional email account (should be specified for POP/IMAP accounts and should be SMTP account) | [optional]
 **storage** | **string**| Storage name where account file(s) located | [optional]
 **storage_folder** | **string**| Folder in storage where account file(s) located | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **fetchEmailModel**
```php
function \Aspose\Email\Model\EmailDto fetchEmailModel(Requests\FetchEmailModelRequest $request)
```
Fetch message model from email account

### Return type

[**\Aspose\Email\Model\EmailDto**](EmailDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\FetchEmailModelRequest(
    $message_id,
    $first_account,
    $second_account,
    $storage,
    $storage_folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Message identifier |
 **first_account** | **string**| Email account |
 **second_account** | **string**| Additional email account (should be specified for POP/IMAP accounts and should be SMTP account) | [optional]
 **storage** | **string**| Storage name where account file(s) located | [optional]
 **storage_folder** | **string**| Folder in storage where account file(s) located | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getCalendar**
```php
function \Aspose\Email\Model\HierarchicalObject getCalendar(Requests\GetCalendarRequest $request)
```
Get calendar file properties

### Return type

[**\Aspose\Email\Model\HierarchicalObject**](HierarchicalObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetCalendarRequest(
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| iCalendar file name in storage |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getCalendarAttachment**
```php
function \SplFileObject getCalendarAttachment(Requests\GetCalendarAttachmentRequest $request)
```
Get iCalendar document attachment by name

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetCalendarAttachmentRequest(
    $name,
    $attachment,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| iCalendar document file name |
 **attachment** | **string**| Attachment name or index |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getCalendarList**
```php
function \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse getCalendarList(Requests\GetCalendarListRequest $request)
```
Get iCalendar files list in folder on storage

### Return type

[**\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse**](ListResponseOfHierarchicalObjectResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetCalendarListRequest(
    $folder,
    $items_per_page,
    $page_number,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| Path to folder in storage |
 **items_per_page** | **int**| Count of items on page |
 **page_number** | **int**| Page number |
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getCalendarModel**
```php
function \Aspose\Email\Model\CalendarDto getCalendarModel(Requests\GetCalendarModelRequest $request)
```
Get calendar file

### Return type

[**\Aspose\Email\Model\CalendarDto**](CalendarDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetCalendarModelRequest(
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| iCalendar file name in storage |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getCalendarModelAsAlternate**
```php
function \Aspose\Email\Model\AlternateView getCalendarModelAsAlternate(Requests\GetCalendarModelAsAlternateRequest $request)
```
Get iCalendar from storage as AlternateView

### Return type

[**\Aspose\Email\Model\AlternateView**](AlternateView.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetCalendarModelAsAlternateRequest(
    $name,
    $calendar_action,
    $sequence_id,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| iCalendar file name in storage |
 **calendar_action** | **string**| iCalendar method type Enum, available values: Create, Update, Cancel |
 **sequence_id** | **string**| The sequence id | [optional]
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getCalendarModelList**
```php
function \Aspose\Email\Model\CalendarDtoList getCalendarModelList(Requests\GetCalendarModelListRequest $request)
```
Get iCalendar list from storage folder

### Return type

[**\Aspose\Email\Model\CalendarDtoList**](CalendarDtoList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetCalendarModelListRequest(
    $folder,
    $items_per_page,
    $page_number,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| Path to folder in storage |
 **items_per_page** | **int**| Count of items on page | [optional] [default to 10]
 **page_number** | **int**| Page number | [optional] [default to 0]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getContactAttachment**
```php
function \SplFileObject getContactAttachment(Requests\GetContactAttachmentRequest $request)
```
Get attachment file by name

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetContactAttachmentRequest(
    $format,
    $name,
    $attachment,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name |
 **attachment** | **string**| Attachment name or index |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getContactList**
```php
function \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse getContactList(Requests\GetContactListRequest $request)
```
Get contact list from storage folder

### Return type

[**\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse**](ListResponseOfHierarchicalObjectResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetContactListRequest(
    $format,
    $folder,
    $storage,
    $items_per_page,
    $page_number)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]
 **items_per_page** | **int**| Count of items on page | [optional] [default to 10]
 **page_number** | **int**| Page number | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getContactModel**
```php
function \Aspose\Email\Model\ContactDto getContactModel(Requests\GetContactModelRequest $request)
```
Get contact document.

### Return type

[**\Aspose\Email\Model\ContactDto**](ContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetContactModelRequest(
    $format,
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getContactModelList**
```php
function \Aspose\Email\Model\ContactDtoList getContactModelList(Requests\GetContactModelListRequest $request)
```
Get contact list from storage folder.

### Return type

[**\Aspose\Email\Model\ContactDtoList**](ContactDtoList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetContactModelListRequest(
    $format,
    $folder,
    $storage,
    $items_per_page,
    $page_number)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getContactProperties**
```php
function \Aspose\Email\Model\HierarchicalObject getContactProperties(Requests\GetContactPropertiesRequest $request)
```
Get contact document properties

### Return type

[**\Aspose\Email\Model\HierarchicalObject**](HierarchicalObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetContactPropertiesRequest(
    $format,
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getDiscUsage**
```php
function \Aspose\Email\Model\DiscUsage getDiscUsage(Requests\GetDiscUsageRequest $request)
```
Get disc usage

### Return type

[**\Aspose\Email\Model\DiscUsage**](DiscUsage.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetDiscUsageRequest(
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmail**
```php
function \Aspose\Email\Model\EmailDocument getEmail(Requests\GetEmailRequest $request)
```
Get email document

### Return type

[**\Aspose\Email\Model\EmailDocument**](EmailDocument.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailRequest(
    $file_name,
    $storage,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Email document file name in storage |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmailAsFile**
```php
function \SplFileObject getEmailAsFile(Requests\GetEmailAsFileRequest $request)
```
Converts email document from storage to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailAsFileRequest(
    $file_name,
    $format,
    $storage,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Email document file name |
 **format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmailAttachment**
```php
function \SplFileObject getEmailAttachment(Requests\GetEmailAttachmentRequest $request)
```
Get email attachment by name

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailAttachmentRequest(
    $attachment,
    $file_name,
    $storage,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | **string**| Attachment name |
 **file_name** | **string**| Email document file name |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmailClientAccount**
```php
function \Aspose\Email\Model\EmailClientAccount getEmailClientAccount(Requests\GetEmailClientAccountRequest $request)
```
Get email client account from storage

### Return type

[**\Aspose\Email\Model\EmailClientAccount**](EmailClientAccount.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailClientAccountRequest(
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| File name on storage |
 **folder** | **string**| Folder on storage |
 **storage** | **string**| Storage name |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmailClientMultiAccount**
```php
function \Aspose\Email\Model\EmailClientMultiAccount getEmailClientMultiAccount(Requests\GetEmailClientMultiAccountRequest $request)
```
Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".

### Return type

[**\Aspose\Email\Model\EmailClientMultiAccount**](EmailClientMultiAccount.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailClientMultiAccountRequest(
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| File name on storage |
 **folder** | **string**| Folder on storage |
 **storage** | **string**| Storage name |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmailModel**
```php
function \Aspose\Email\Model\EmailDto getEmailModel(Requests\GetEmailModelRequest $request)
```
Get email document.

### Return type

[**\Aspose\Email\Model\EmailDto**](EmailDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailModelRequest(
    $format,
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html |
 **name** | **string**| Email document file name. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmailModelList**
```php
function \Aspose\Email\Model\EmailDtoList getEmailModelList(Requests\GetEmailModelListRequest $request)
```
Get email list from storage folder.

### Return type

[**\Aspose\Email\Model\EmailDtoList**](EmailDtoList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailModelListRequest(
    $format,
    $folder,
    $storage,
    $items_per_page,
    $page_number)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getEmailProperty**
```php
function \Aspose\Email\Model\EmailPropertyResponse getEmailProperty(Requests\GetEmailPropertyRequest $request)
```
Get an email document property by its name

### Return type

[**\Aspose\Email\Model\EmailPropertyResponse**](EmailPropertyResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetEmailPropertyRequest(
    $property_name,
    $file_name,
    $storage,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_name** | **string**| A property name |
 **file_name** | **string**| Email document file name |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getFileVersions**
```php
function \Aspose\Email\Model\FileVersions getFileVersions(Requests\GetFileVersionsRequest $request)
```
Get file versions

### Return type

[**\Aspose\Email\Model\FileVersions**](FileVersions.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetFileVersionsRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File path e.g. &#39;/file.ext&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getFilesList**
```php
function \Aspose\Email\Model\FilesList getFilesList(Requests\GetFilesListRequest $request)
```
Get all files and folders within a folder

### Return type

[**\Aspose\Email\Model\FilesList**](FilesList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetFilesListRequest(
    $path,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getMapiAttachment**
```php
function \SplFileObject getMapiAttachment(Requests\GetMapiAttachmentRequest $request)
```
Get document attachment as file stream

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetMapiAttachmentRequest(
    $name,
    $attachment,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **attachment** | **string**| Attachment name or index |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getMapiAttachments**
```php
function \Aspose\Email\Model\ListResponseOfString getMapiAttachments(Requests\GetMapiAttachmentsRequest $request)
```
Get document attachment list

### Return type

[**\Aspose\Email\Model\ListResponseOfString**](ListResponseOfString.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetMapiAttachmentsRequest(
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getMapiList**
```php
function \Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse getMapiList(Requests\GetMapiListRequest $request)
```
Get document list from storage folder

### Return type

[**\Aspose\Email\Model\ListResponseOfHierarchicalObjectResponse**](ListResponseOfHierarchicalObjectResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetMapiListRequest(
    $folder,
    $storage,
    $items_per_page,
    $page_number)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]
 **items_per_page** | **int**| Count of items on page | [optional] [default to 10]
 **page_number** | **int**| Page number | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **getMapiProperties**
```php
function \Aspose\Email\Model\HierarchicalObjectResponse getMapiProperties(Requests\GetMapiPropertiesRequest $request)
```
Get document properties

### Return type

[**\Aspose\Email\Model\HierarchicalObjectResponse**](HierarchicalObjectResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\GetMapiPropertiesRequest(
    $name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **isEmailAddressDisposable**
```php
function \Aspose\Email\Model\ValueTOfBoolean isEmailAddressDisposable(Requests\IsEmailAddressDisposableRequest $request)
```
Check email address is disposable

### Return type

[**\Aspose\Email\Model\ValueTOfBoolean**](ValueTOfBoolean.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\IsEmailAddressDisposableRequest(
    $address)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| An email address to check |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **listEmailFolders**
```php
function \Aspose\Email\Model\ListResponseOfMailServerFolder listEmailFolders(Requests\ListEmailFoldersRequest $request)
```
Get folders list in email account

### Return type

[**\Aspose\Email\Model\ListResponseOfMailServerFolder**](ListResponseOfMailServerFolder.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ListEmailFoldersRequest(
    $first_account,
    $second_account,
    $storage,
    $storage_folder,
    $parent_folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_account** | **string**| Email account |
 **second_account** | **string**| Additional email account (should be specified for POP/IMAP accounts and should be SMTP account) | [optional]
 **storage** | **string**| Storage name where account file(s) located | [optional]
 **storage_folder** | **string**| Folder in storage where account file(s) located | [optional]
 **parent_folder** | **string**| Folder in which subfolders should be listed | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **listEmailMessages**
```php
function \Aspose\Email\Model\ListResponseOfString listEmailMessages(Requests\ListEmailMessagesRequest $request)
```
Get messages from folder, filtered by query

The query string should have the following view.      The example of a simple expression:       '<Field name>' <Comparison operator> '<Field value>',  where &lt;Field Name&gt; - the name of a message field through which filtering is made, &lt;Comparison operator&gt; - comparison operators, as their name implies, allow to compare message field and specified value, &lt;Field value&gt; - value to be compared with a message field.      The number of simple expressions can make a compound one, ex.:     (<Simple expression 1> & <Simple expression 2>) | <Simple expression 3     >,  where \"&amp;\" - logical-AND operator, \"|\" - logical-OR operator      At present the following values are allowed as a field name (<Field name>):  \"To\" - represents a TO field of message, \"Text\" - represents string in the header or body of the message, \"Bcc\" - represents a BCC field of message, \"Body\" - represents a string in the body of message, \"Cc\" - represents a CC field of message, \"From\" - represents a From field of message, \"Subject\" - represents a string in the subject of message, \"InternalDate\" - represents an internal date of message, \"SentDate\" - represents a sent date of message      Additionally, the following field names are allowed for IMAP-protocol:  \"Answered\" - represents an /Answered flag of message \"Seen\" - represents a /Seen flag of message \"Flagged\" - represents a /Flagged flag of message \"Draft\" - represents a /Draft flag of message \"Deleted\" - represents a Deleted/ flag of message \"Recent\" - represents a Deleted/ flag of message \"MessageSize\" - represents a size (in bytes) of message      Additionally, the following field names are allowed for Exchange:  \"IsRead\" - Indicates whether the message has been read \"HasAttachment\" - Indicates whether or not the message has attachments \"IsSubmitted\" - Indicates whether the message has been submitted to the Outbox \"ContentClass\" - represents a content class of item      Additionally, the following field names are allowed for pst/ost files:  \"MessageClass\" - Represents a message class \"ContainerClass\" - Represents a folder container class \"Importance\" - Represents a message importance \"MessageSize\" - represents a size (in bytes) of message \"FolderName\" - represents a folder name \"ContentsCount\" - represents a total number of items in the folder \"UnreadContentsCount\" - represents the number of unread items in the folder. \"Subfolders\" - Indicates whether or not the folder has subfolders \"Read\" - the message is marked as having been read \"HasAttachment\" - the message has at least one attachment \"Unsent\" - the message is still being composed \"Unmodified\" - the message has not been modified since it was first saved (if unsent) or it was delivered (if sent) \"FromMe\" - the user receiving the message was also the user who sent the message \"Resend\" - the message includes a request for a resend operation with a non-delivery report \"NotifyRead\" - the user who sent the message has requested notification when a recipient first reads it \"NotifyUnread\" - the user who sent the message has requested notification when a recipient deletes it before reading or the Message object expires \"EverRead\" - the message has been read at least once      The field value (<Field value>) can take the following values:     For text fields - any string,     For date type fields - the string of \"d-MMM-yyy\" format, ex. \"10-Feb-2009\",     For flags (fields of boolean type) - either \"True\", or \"False\"

### Return type

[**\Aspose\Email\Model\ListResponseOfString**](ListResponseOfString.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ListEmailMessagesRequest(
    $folder,
    $query_string,
    $first_account,
    $second_account,
    $storage,
    $storage_folder,
    $recursive)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| A folder in email account |
 **query_string** | **string**| A MailQuery search string |
 **first_account** | **string**| Email account |
 **second_account** | **string**| Additional email account (should be specified for POP/IMAP accounts and should be SMTP account) | [optional]
 **storage** | **string**| Storage name where account file(s) located | [optional]
 **storage_folder** | **string**| Folder in storage where account file(s) located | [optional]
 **recursive** | **bool**| Specifies that should message be searched in subfolders recursively | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **listEmailModels**
```php
function \Aspose\Email\Model\ListResponseOfEmailDto listEmailModels(Requests\ListEmailModelsRequest $request)
```
Get messages from folder, filtered by query

The query string should have the following view.      The example of a simple expression:       '<Field name>' <Comparison operator> '<Field value>',  where &lt;Field Name&gt; - the name of a message field through which filtering is made, &lt;Comparison operator&gt; - comparison operators, as their name implies, allow to compare message field and specified value, &lt;Field value&gt; - value to be compared with a message field.      The number of simple expressions can make a compound one, ex.:     (<Simple expression 1> & <Simple expression 2>) | <Simple expression 3     >,  where \"&amp;\" - logical-AND operator, \"|\" - logical-OR operator      At present the following values are allowed as a field name (<Field name>):  \"To\" - represents a TO field of message, \"Text\" - represents string in the header or body of the message, \"Bcc\" - represents a BCC field of message, \"Body\" - represents a string in the body of message, \"Cc\" - represents a CC field of message, \"From\" - represents a From field of message, \"Subject\" - represents a string in the subject of message, \"InternalDate\" - represents an internal date of message, \"SentDate\" - represents a sent date of message      Additionally, the following field names are allowed for IMAP-protocol:  \"Answered\" - represents an /Answered flag of message \"Seen\" - represents a /Seen flag of message \"Flagged\" - represents a /Flagged flag of message \"Draft\" - represents a /Draft flag of message \"Deleted\" - represents a Deleted/ flag of message \"Recent\" - represents a Deleted/ flag of message \"MessageSize\" - represents a size (in bytes) of message      Additionally, the following field names are allowed for Exchange:  \"IsRead\" - Indicates whether the message has been read \"HasAttachment\" - Indicates whether or not the message has attachments \"IsSubmitted\" - Indicates whether the message has been submitted to the Outbox \"ContentClass\" - represents a content class of item      Additionally, the following field names are allowed for pst/ost files:  \"MessageClass\" - Represents a message class \"ContainerClass\" - Represents a folder container class \"Importance\" - Represents a message importance \"MessageSize\" - represents a size (in bytes) of message \"FolderName\" - represents a folder name \"ContentsCount\" - represents a total number of items in the folder \"UnreadContentsCount\" - represents the number of unread items in the folder. \"Subfolders\" - Indicates whether or not the folder has subfolders \"Read\" - the message is marked as having been read \"HasAttachment\" - the message has at least one attachment \"Unsent\" - the message is still being composed \"Unmodified\" - the message has not been modified since it was first saved (if unsent) or it was delivered (if sent) \"FromMe\" - the user receiving the message was also the user who sent the message \"Resend\" - the message includes a request for a resend operation with a non-delivery report \"NotifyRead\" - the user who sent the message has requested notification when a recipient first reads it \"NotifyUnread\" - the user who sent the message has requested notification when a recipient deletes it before reading or the Message object expires \"EverRead\" - the message has been read at least once      The field value (<Field value>) can take the following values:     For text fields - any string,     For date type fields - the string of \"d-MMM-yyy\" format, ex. \"10-Feb-2009\",     For flags (fields of boolean type) - either \"True\", or \"False\"

### Return type

[**\Aspose\Email\Model\ListResponseOfEmailDto**](ListResponseOfEmailDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ListEmailModelsRequest(
    $folder,
    $query_string,
    $first_account,
    $second_account,
    $storage,
    $storage_folder,
    $recursive)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| A folder in email account |
 **query_string** | **string**| A MailQuery search string |
 **first_account** | **string**| Email account |
 **second_account** | **string**| Additional email account (should be specified for POP/IMAP accounts and should be SMTP account) | [optional]
 **storage** | **string**| Storage name where account file(s) located | [optional]
 **storage_folder** | **string**| Folder in storage where account file(s) located | [optional]
 **recursive** | **bool**| Specifies that should message be searched in subfolders recursively | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **moveFile**
```php
function moveFile(Requests\MoveFileRequest $request)
```
Move file

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\MoveFileRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source file path e.g. &#39;/src.ext&#39; |
 **dest_path** | **string**| Destination file path e.g. &#39;/dest.ext&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]
 **version_id** | **string**| File version ID to move | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **moveFolder**
```php
function moveFolder(Requests\MoveFolderRequest $request)
```
Move folder

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\MoveFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Folder path to move e.g. &#39;/folder&#39; |
 **dest_path** | **string**| Destination folder path to move to e.g &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **objectExists**
```php
function \Aspose\Email\Model\ObjectExist objectExists(Requests\ObjectExistsRequest $request)
```
Check if file or folder exists

### Return type

[**\Aspose\Email\Model\ObjectExist**](ObjectExist.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ObjectExistsRequest(
    $path,
    $storage_name,
    $version_id)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| File or folder path e.g. &#39;/file.ext&#39; or &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **version_id** | **string**| File version ID | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **saveCalendarModel**
```php
function saveCalendarModel(Requests\SaveCalendarModelRequest $request)
```
Save iCalendar

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SaveCalendarModelRequest(
    $name,
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| iCalendar file name in storage |
 **rq** | [**\Aspose\Email\Model\StorageModelRqOfCalendarDto**](StorageModelRqOfCalendarDto.md)| Calendar properties update request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **saveContactModel**
```php
function saveContactModel(Requests\SaveContactModelRequest $request)
```
Save contact.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SaveContactModelRequest(
    $format,
    $name,
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name. |
 **rq** | [**\Aspose\Email\Model\StorageModelRqOfContactDto**](StorageModelRqOfContactDto.md)| Create contact request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **saveEmailClientAccount**
```php
function saveEmailClientAccount(Requests\SaveEmailClientAccountRequest $request)
```
Create email client account file (*.account) with any of supported credentials

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SaveEmailClientAccountRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\StorageFileRqOfEmailClientAccount**](StorageFileRqOfEmailClientAccount.md)| Email account information |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **saveEmailClientMultiAccount**
```php
function saveEmailClientMultiAccount(Requests\SaveEmailClientMultiAccountRequest $request)
```
Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SaveEmailClientMultiAccountRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\StorageFileRqOfEmailClientMultiAccount**](StorageFileRqOfEmailClientMultiAccount.md)| Email accounts information |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **saveEmailModel**
```php
function saveEmailModel(Requests\SaveEmailModelRequest $request)
```
Save email document.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SaveEmailModelRequest(
    $format,
    $name,
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html |
 **name** | **string**| iCalendar file name in storage. |
 **rq** | [**\Aspose\Email\Model\StorageModelRqOfEmailDto**](StorageModelRqOfEmailDto.md)| Calendar properties update request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **saveMailAccount**
```php
function saveMailAccount(Requests\SaveMailAccountRequest $request)
```
Create email account file (*.account) with login/password authentication

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SaveMailAccountRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\SaveEmailAccountRequest**](SaveEmailAccountRequest.md)| Email account information |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **saveMailOAuthAccount**
```php
function saveMailOAuthAccount(Requests\SaveMailOAuthAccountRequest $request)
```
Create email account file (*.account) with OAuth

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SaveMailOAuthAccountRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\SaveOAuthEmailAccountRequest**](SaveOAuthEmailAccountRequest.md)| Email account information |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **sendEmail**
```php
function sendEmail(Requests\SendEmailRequest $request)
```
Send an email from *.eml file located on storage

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SendEmailRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\SendEmailBaseRequest**](SendEmailBaseRequest.md)| Send email request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **sendEmailMime**
```php
function sendEmailMime(Requests\SendEmailMimeRequest $request)
```
Send an email specified by MIME in request

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SendEmailMimeRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\SendEmailMimeBaseRequest**](SendEmailMimeBaseRequest.md)| Send email request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **sendEmailModel**
```php
function sendEmailModel(Requests\SendEmailModelRequest $request)
```
Send an email specified by model in request

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SendEmailModelRequest(
    $rq)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rq** | [**\Aspose\Email\Model\SendEmailModelRq**](SendEmailModelRq.md)| Send email request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **setEmailProperty**
```php
function \Aspose\Email\Model\EmailPropertyResponse setEmailProperty(Requests\SetEmailPropertyRequest $request)
```
Set email document property value

### Return type

[**\Aspose\Email\Model\EmailPropertyResponse**](EmailPropertyResponse.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\SetEmailPropertyRequest(
    $property_name,
    $file_name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_name** | **string**| A property name that should be changed |
 **file_name** | **string**| Email document file name |
 **request** | [**\Aspose\Email\Model\SetEmailPropertyRequest**](SetEmailPropertyRequest.md)| A property that should be changed and optional Storage info to specify where the file located |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **setEmailReadFlag**
```php
function setEmailReadFlag(Requests\SetEmailReadFlagRequest $request)
```
Sets \"Message is read\" flag

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\SetEmailReadFlagRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\SetMessageReadFlagAccountBaseRequest**](SetMessageReadFlagAccountBaseRequest.md)| Message is read request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **storageExists**
```php
function \Aspose\Email\Model\StorageExist storageExists(Requests\StorageExistsRequest $request)
```
Check if storage exists

### Return type

[**\Aspose\Email\Model\StorageExist**](StorageExist.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\StorageExistsRequest(
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storage_name** | **string**| Storage name |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **updateCalendarProperties**
```php
function updateCalendarProperties(Requests\UpdateCalendarPropertiesRequest $request)
```
Update calendar file properties

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\UpdateCalendarPropertiesRequest(
    $name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| iCalendar file name in storage |
 **request** | [**\Aspose\Email\Model\HierarchicalObjectRequest**](HierarchicalObjectRequest.md)| Calendar properties update request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **updateContactProperties**
```php
function updateContactProperties(Requests\UpdateContactPropertiesRequest $request)
```
Update contact document properties

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\UpdateContactPropertiesRequest(
    $format,
    $name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format Enum, available values: VCard, WebDav, Msg |
 **name** | **string**| Contact document file name |
 **request** | [**\Aspose\Email\Model\HierarchicalObjectRequest**](HierarchicalObjectRequest.md)| Properties that should be updated/added |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **updateMapiProperties**
```php
function updateMapiProperties(Requests\UpdateMapiPropertiesRequest $request)
```
Update document properties

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\UpdateMapiPropertiesRequest(
    $name,
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document file name |
 **request** | [**\Aspose\Email\Model\HierarchicalObjectRequest**](HierarchicalObjectRequest.md)| Properties that should be updated/added |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **uploadFile**
```php
function \Aspose\Email\Model\FilesUploadResult uploadFile(Requests\UploadFileRequest $request)
```
Upload file

### Return type

[**\Aspose\Email\Model\FilesUploadResult**](FilesUploadResult.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\UploadFileRequest(
    $path,
    $file,
    $storage_name)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header. |
 **file** | **\SplFileObject**| File to upload |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

