## Documentation for API Endpoints

All URIs are relative to *https://api.aspose.cloud/v3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EmailApi* | [**addCalendarAttachment**](EmailApi.md#addcalendarattachment) | **PUT** /email/Calendar/{name}/attachments/{attachment} | Adds an attachment to iCalendar file
*EmailApi* | [**addContactAttachment**](EmailApi.md#addcontactattachment) | **PUT** /email/Contact/{format}/{name}/attachments/{attachment} | Add attachment to contact document
*EmailApi* | [**addEmailAttachment**](EmailApi.md#addemailattachment) | **POST** /email/{fileName}/attachments/{attachmentName} | Adds an attachment to Email document
*EmailApi* | [**addMapiAttachment**](EmailApi.md#addmapiattachment) | **PUT** /email/Mapi/{name}/attachments/{attachment} | Add attachment to document
*EmailApi* | [**aiBcrOcr**](EmailApi.md#aibcrocr) | **POST** /email/AiBcr/ocr | Ocr images
*EmailApi* | [**aiBcrOcrStorage**](EmailApi.md#aibcrocrstorage) | **POST** /email/AiBcr/ocr-storage | Ocr images from storage
*EmailApi* | [**aiBcrParse**](EmailApi.md#aibcrparse) | **POST** /email/AiBcr/parse | Parse images to vCard properties
*EmailApi* | [**aiBcrParseOcrData**](EmailApi.md#aibcrparseocrdata) | **POST** /email/AiBcr/parse-ocr-data | Parse OCR data to vCard properties
*EmailApi* | [**aiBcrParseOcrDataStorage**](EmailApi.md#aibcrparseocrdatastorage) | **POST** /email/AiBcr/parse-ocr-data-storage | Parse vCards from OCR data and save them to Storage
*EmailApi* | [**aiBcrParseStorage**](EmailApi.md#aibcrparsestorage) | **POST** /email/AiBcr/parse-storage | Parse images from storage to vCard files
*EmailApi* | [**aiNameComplete**](EmailApi.md#ainamecomplete) | **GET** /email/AiName/complete | The call proposes k most probable names for given starting characters
*EmailApi* | [**aiNameExpand**](EmailApi.md#ainameexpand) | **GET** /email/AiName/expand | Expands a person&#39;s name into a list of possible alternatives using options for expanding instructions
*EmailApi* | [**aiNameExpandParsed**](EmailApi.md#ainameexpandparsed) | **POST** /email/AiName/expand-parsed | Expands a person&#39;s parsed name into a list of possible alternatives using options for expanding instructions
*EmailApi* | [**aiNameFormat**](EmailApi.md#ainameformat) | **GET** /email/AiName/format | Formats a person&#39;s name in correct case and name order using options for formatting instructions
*EmailApi* | [**aiNameFormatParsed**](EmailApi.md#ainameformatparsed) | **POST** /email/AiName/format-parsed | Formats a person&#39;s parsed name in correct case and name order using options for formatting instructions
*EmailApi* | [**aiNameGenderize**](EmailApi.md#ainamegenderize) | **GET** /email/AiName/genderize | Detect person&#39;s gender from name string
*EmailApi* | [**aiNameGenderizeParsed**](EmailApi.md#ainamegenderizeparsed) | **POST** /email/AiName/genderize-parsed | Detect person&#39;s gender from parsed name
*EmailApi* | [**aiNameMatch**](EmailApi.md#ainamematch) | **GET** /email/AiName/match | Compare people&#39;s names. Uses options for comparing instructions
*EmailApi* | [**aiNameMatchParsed**](EmailApi.md#ainamematchparsed) | **POST** /email/AiName/match-parsed | Compare people&#39;s parsed names and attributes. Uses options for comparing instructions
*EmailApi* | [**aiNameParse**](EmailApi.md#ainameparse) | **GET** /email/AiName/parse | Parse name to components
*EmailApi* | [**aiNameParseEmailAddress**](EmailApi.md#ainameparseemailaddress) | **GET** /email/AiName/parse-email-address | Parse person&#39;s name out of an email address
*EmailApi* | [**appendEmailMessage**](EmailApi.md#appendemailmessage) | **PUT** /email/client/Append | Adds an email from *.eml file to specified folder in email account
*EmailApi* | [**appendMimeMessage**](EmailApi.md#appendmimemessage) | **PUT** /email/client/AppendMime | Adds an email from MIME to specified folder in email account
*EmailApi* | [**copyFile**](EmailApi.md#copyfile) | **PUT** /email/storage/file/copy/{srcPath} | Copy file
*EmailApi* | [**copyFolder**](EmailApi.md#copyfolder) | **PUT** /email/storage/folder/copy/{srcPath} | Copy folder
*EmailApi* | [**createCalendar**](EmailApi.md#createcalendar) | **PUT** /email/Calendar/{name} | Create calendar file
*EmailApi* | [**createContact**](EmailApi.md#createcontact) | **PUT** /email/Contact/{format}/{name} | Create contact document
*EmailApi* | [**createEmail**](EmailApi.md#createemail) | **PUT** /email/{fileName} | Create an email document
*EmailApi* | [**createEmailFolder**](EmailApi.md#createemailfolder) | **PUT** /email/client/CreateFolder | Create new folder in email account
*EmailApi* | [**createFolder**](EmailApi.md#createfolder) | **PUT** /email/storage/folder/{path} | Create the folder
*EmailApi* | [**createMapi**](EmailApi.md#createmapi) | **PUT** /email/Mapi/{name} | Create new document
*EmailApi* | [**deleteCalendarProperty**](EmailApi.md#deletecalendarproperty) | **DELETE** /email/Calendar/{name}/properties/{memberName}/{index} | Deletes indexed property by index and name. To delete Reminder attachment, use path ReminderAttachment/{ReminderIndex}/{AttachmentIndex}
*EmailApi* | [**deleteContactProperty**](EmailApi.md#deletecontactproperty) | **DELETE** /email/Contact/{format}/{name}/properties/{memberName}/{index} | Delete property from indexed property list
*EmailApi* | [**deleteEmailFolder**](EmailApi.md#deleteemailfolder) | **DELETE** /email/client/DeleteFolder | Delete a folder in email account
*EmailApi* | [**deleteEmailMessage**](EmailApi.md#deleteemailmessage) | **DELETE** /email/client/DeleteMessage | Delete message from email account by id
*EmailApi* | [**deleteFile**](EmailApi.md#deletefile) | **DELETE** /email/storage/file/{path} | Delete file
*EmailApi* | [**deleteFolder**](EmailApi.md#deletefolder) | **DELETE** /email/storage/folder/{path} | Delete folder
*EmailApi* | [**deleteMapiAttachment**](EmailApi.md#deletemapiattachment) | **DELETE** /email/Mapi/{name}/attachments/{attachment} | Remove attachment from document
*EmailApi* | [**deleteMapiProperties**](EmailApi.md#deletemapiproperties) | **DELETE** /email/Mapi/{name}/properties | Delete document properties
*EmailApi* | [**downloadFile**](EmailApi.md#downloadfile) | **GET** /email/storage/file/{path} | Download file
*EmailApi* | [**fetchEmailMessage**](EmailApi.md#fetchemailmessage) | **GET** /email/client/Fetch | Fetch message mime from email account
*EmailApi* | [**getCalendar**](EmailApi.md#getcalendar) | **GET** /email/Calendar/{name}/properties | Get calendar file properties
*EmailApi* | [**getCalendarAttachment**](EmailApi.md#getcalendarattachment) | **GET** /email/Calendar/{name}/attachments/{attachment} | Get iCalendar document attachment by name
*EmailApi* | [**getCalendarList**](EmailApi.md#getcalendarlist) | **GET** /email/Calendar | Get iCalendar files list in folder on storage
*EmailApi* | [**getContactAttachment**](EmailApi.md#getcontactattachment) | **GET** /email/Contact/{format}/{name}/attachments/{attachment} | Get attachment file by name
*EmailApi* | [**getContactList**](EmailApi.md#getcontactlist) | **GET** /email/Contact/{format} | Get contact list from storage folder
*EmailApi* | [**getContactProperties**](EmailApi.md#getcontactproperties) | **GET** /email/Contact/{format}/{name}/properties | Get contact document properties
*EmailApi* | [**getDiscUsage**](EmailApi.md#getdiscusage) | **GET** /email/storage/disc | Get disc usage
*EmailApi* | [**getEmail**](EmailApi.md#getemail) | **GET** /email/{fileName} | Get email document
*EmailApi* | [**getEmailAttachment**](EmailApi.md#getemailattachment) | **GET** /email/{fileName}/attachments/{attachment} | Get email attachment by name
*EmailApi* | [**getEmailProperty**](EmailApi.md#getemailproperty) | **GET** /email/{fileName}/properties/{propertyName} | Get an email document property by its name
*EmailApi* | [**getFileVersions**](EmailApi.md#getfileversions) | **GET** /email/storage/version/{path} | Get file versions
*EmailApi* | [**getFilesList**](EmailApi.md#getfileslist) | **GET** /email/storage/folder/{path} | Get all files and folders within a folder
*EmailApi* | [**getMapiAttachment**](EmailApi.md#getmapiattachment) | **GET** /email/Mapi/{name}/attachments/{attachment} | Get document attachment as file stream
*EmailApi* | [**getMapiAttachments**](EmailApi.md#getmapiattachments) | **GET** /email/Mapi/{name}/attachments | Get document attachment list
*EmailApi* | [**getMapiList**](EmailApi.md#getmapilist) | **GET** /email/Mapi | Get document list from storage folder
*EmailApi* | [**getMapiProperties**](EmailApi.md#getmapiproperties) | **GET** /email/Mapi/{name}/properties | Get document properties
*EmailApi* | [**listEmailFolders**](EmailApi.md#listemailfolders) | **GET** /email/client/ListFolders | Get folders list in email account
*EmailApi* | [**listEmailMessages**](EmailApi.md#listemailmessages) | **GET** /email/client/ListMessages | Get messages from folder, filtered by query
*EmailApi* | [**moveFile**](EmailApi.md#movefile) | **PUT** /email/storage/file/move/{srcPath} | Move file
*EmailApi* | [**moveFolder**](EmailApi.md#movefolder) | **PUT** /email/storage/folder/move/{srcPath} | Move folder
*EmailApi* | [**objectExists**](EmailApi.md#objectexists) | **GET** /email/storage/exist/{path} | Check if file or folder exists
*EmailApi* | [**saveMailAccount**](EmailApi.md#savemailaccount) | **POST** /email/client/SaveMailAccount | Create email account file (*.account) with login/password authentication
*EmailApi* | [**saveMailOAuthAccount**](EmailApi.md#savemailoauthaccount) | **POST** /email/client/SaveMailOAuthAccount | Create email account file (*.account) with OAuth
*EmailApi* | [**sendEmail**](EmailApi.md#sendemail) | **POST** /email/client/Send | Send an email from *.eml file located on storage
*EmailApi* | [**sendEmailMime**](EmailApi.md#sendemailmime) | **POST** /email/client/SendMime | Send an email specified by MIME in request
*EmailApi* | [**setEmailProperty**](EmailApi.md#setemailproperty) | **PUT** /email/{fileName}/properties/{propertyName} | Set email document property value
*EmailApi* | [**setEmailReadFlag**](EmailApi.md#setemailreadflag) | **POST** /email/client/SetReadFlag | Sets \&quot;Message is read\&quot; flag
*EmailApi* | [**storageExists**](EmailApi.md#storageexists) | **GET** /email/storage/{storageName}/exist | Check if storage exists
*EmailApi* | [**updateCalendarProperties**](EmailApi.md#updatecalendarproperties) | **PUT** /email/Calendar/{name}/properties | Update calendar file properties
*EmailApi* | [**updateContactProperties**](EmailApi.md#updatecontactproperties) | **PUT** /email/Contact/{format}/{name}/properties | Update contact document properties
*EmailApi* | [**updateMapiProperties**](EmailApi.md#updatemapiproperties) | **PUT** /email/Mapi/{name}/properties | Update document properties
*EmailApi* | [**uploadFile**](EmailApi.md#uploadfile) | **PUT** /email/storage/file/{path} | Upload file


## Documentation For Models

 - [AccountBaseRequest](AccountBaseRequest.md)
 - [AddAttachmentRequest](AddAttachmentRequest.md)
 - [AiBcrImage](AiBcrImage.md)
 - [AiBcrOcrData](AiBcrOcrData.md)
 - [AiBcrOcrDataPart](AiBcrOcrDataPart.md)
 - [AiBcrOptions](AiBcrOptions.md)
 - [AiBcrRq](AiBcrRq.md)
 - [AiNameComponent](AiNameComponent.md)
 - [AiNameCulturalContext](AiNameCulturalContext.md)
 - [AiNameExtracted](AiNameExtracted.md)
 - [AiNameExtractedComponent](AiNameExtractedComponent.md)
 - [AiNameFormatted](AiNameFormatted.md)
 - [AiNameGenderHypothesis](AiNameGenderHypothesis.md)
 - [AiNameMatchResult](AiNameMatchResult.md)
 - [AiNameMismatch](AiNameMismatch.md)
 - [AiNameParsedRq](AiNameParsedRq.md)
 - [AiNameWeighted](AiNameWeighted.md)
 - [AiNameWeightedVariants](AiNameWeightedVariants.md)
 - [BaseObject](BaseObject.md)
 - [CreateEmailRequest](CreateEmailRequest.md)
 - [DiscUsage](DiscUsage.md)
 - [EmailAccountRequest](EmailAccountRequest.md)
 - [EmailDocument](EmailDocument.md)
 - [EmailDocumentResponse](EmailDocumentResponse.md)
 - [EmailProperties](EmailProperties.md)
 - [EmailProperty](EmailProperty.md)
 - [EmailPropertyResponse](EmailPropertyResponse.md)
 - [Error](Error.md)
 - [ErrorDetails](ErrorDetails.md)
 - [FileVersions](FileVersions.md)
 - [FilesList](FilesList.md)
 - [FilesUploadResult](FilesUploadResult.md)
 - [HierarchicalObjectRequest](HierarchicalObjectRequest.md)
 - [HierarchicalObjectResponse](HierarchicalObjectResponse.md)
 - [Link](Link.md)
 - [ListResponseOfAiBcrOcrData](ListResponseOfAiBcrOcrData.md)
 - [ListResponseOfAiNameComponent](ListResponseOfAiNameComponent.md)
 - [ListResponseOfAiNameExtracted](ListResponseOfAiNameExtracted.md)
 - [ListResponseOfAiNameGenderHypothesis](ListResponseOfAiNameGenderHypothesis.md)
 - [ListResponseOfHierarchicalObject](ListResponseOfHierarchicalObject.md)
 - [ListResponseOfHierarchicalObjectResponse](ListResponseOfHierarchicalObjectResponse.md)
 - [ListResponseOfMailServerFolder](ListResponseOfMailServerFolder.md)
 - [ListResponseOfStorageFileLocation](ListResponseOfStorageFileLocation.md)
 - [ListResponseOfString](ListResponseOfString.md)
 - [MailServerFolder](MailServerFolder.md)
 - [MimeResponse](MimeResponse.md)
 - [ObjectExist](ObjectExist.md)
 - [SetEmailPropertyRequest](SetEmailPropertyRequest.md)
 - [StorageExist](StorageExist.md)
 - [StorageFile](StorageFile.md)
 - [StorageFolderLocation](StorageFolderLocation.md)
 - [ValueResponse](ValueResponse.md)
 - [AiBcrBase64Image](AiBcrBase64Image.md)
 - [AiBcrBase64Rq](AiBcrBase64Rq.md)
 - [AiBcrImageStorageFile](AiBcrImageStorageFile.md)
 - [AiBcrParseOcrDataRq](AiBcrParseOcrDataRq.md)
 - [AiBcrStorageImageRq](AiBcrStorageImageRq.md)
 - [AiNameParsedMatchRq](AiNameParsedMatchRq.md)
 - [AppendEmailAccountBaseRequest](AppendEmailAccountBaseRequest.md)
 - [CreateFolderBaseRequest](CreateFolderBaseRequest.md)
 - [DeleteFolderBaseRequest](DeleteFolderBaseRequest.md)
 - [DeleteMessageBaseRequest](DeleteMessageBaseRequest.md)
 - [FileVersion](FileVersion.md)
 - [HierarchicalObject](HierarchicalObject.md)
 - [IndexedHierarchicalObject](IndexedHierarchicalObject.md)
 - [IndexedPrimitiveObject](IndexedPrimitiveObject.md)
 - [PrimitiveObject](PrimitiveObject.md)
 - [SaveEmailAccountRequest](SaveEmailAccountRequest.md)
 - [SaveOAuthEmailAccountRequest](SaveOAuthEmailAccountRequest.md)
 - [SendEmailBaseRequest](SendEmailBaseRequest.md)
 - [SendEmailMimeBaseRequest](SendEmailMimeBaseRequest.md)
 - [SetMessageReadFlagAccountBaseRequest](SetMessageReadFlagAccountBaseRequest.md)
 - [StorageFileLocation](StorageFileLocation.md)
 - [AiBcrParseOcrDataStorageRq](AiBcrParseOcrDataStorageRq.md)
 - [AiBcrParseStorageRq](AiBcrParseStorageRq.md)
 - [AppendEmailBaseRequest](AppendEmailBaseRequest.md)
 - [AppendEmailMimeBaseRequest](AppendEmailMimeBaseRequest.md)
