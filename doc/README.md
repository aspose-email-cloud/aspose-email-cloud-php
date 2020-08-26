## Documentation for API Endpoints

All URIs are relative to *https://api.aspose.cloud/v3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AiBcrApi* | [**aiBcrParse**](AiBcrApi.md#aibcrparse) | **PUT** /email/AiBcr/parse | Parse images to vCard document models
*AiBcrApi* | [**aiBcrParseStorage**](AiBcrApi.md#aibcrparsestorage) | **PUT** /email/AiBcr/parse-storage | Parse images from storage to vCard files
*AiNameApi* | [**aiNameComplete**](AiNameApi.md#ainamecomplete) | **GET** /email/AiName/complete | The call proposes k most probable names for given starting characters.
*AiNameApi* | [**aiNameExpand**](AiNameApi.md#ainameexpand) | **GET** /email/AiName/expand | Expands a person&#39;s name into a list of possible alternatives using options for expanding instructions.
*AiNameApi* | [**aiNameExpandParsed**](AiNameApi.md#ainameexpandparsed) | **PUT** /email/AiName/expand-parsed | Expands a person&#39;s parsed name into a list of possible alternatives using options for expanding instructions.
*AiNameApi* | [**aiNameFormat**](AiNameApi.md#ainameformat) | **GET** /email/AiName/format | Formats a person&#39;s name in correct case and name order using options for formatting instructions.
*AiNameApi* | [**aiNameFormatParsed**](AiNameApi.md#ainameformatparsed) | **PUT** /email/AiName/format-parsed | Formats a person&#39;s parsed name in correct case and name order using options for formatting instructions.
*AiNameApi* | [**aiNameGenderize**](AiNameApi.md#ainamegenderize) | **GET** /email/AiName/genderize | Detect person&#39;s gender from name string.
*AiNameApi* | [**aiNameGenderizeParsed**](AiNameApi.md#ainamegenderizeparsed) | **PUT** /email/AiName/genderize-parsed | Detect person&#39;s gender from parsed name.
*AiNameApi* | [**aiNameMatch**](AiNameApi.md#ainamematch) | **GET** /email/AiName/match | Compare people&#39;s names. Uses options for comparing instructions.
*AiNameApi* | [**aiNameMatchParsed**](AiNameApi.md#ainamematchparsed) | **PUT** /email/AiName/match-parsed | Compare people&#39;s parsed names and attributes. Uses options for comparing instructions.
*AiNameApi* | [**aiNameParse**](AiNameApi.md#ainameparse) | **GET** /email/AiName/parse | Parse name to components.
*AiNameApi* | [**aiNameParseEmailAddress**](AiNameApi.md#ainameparseemailaddress) | **GET** /email/AiName/parse-email-address | Parse person&#39;s name out of an email address.
*CalendarApi* | [**calendarAsAlternate**](CalendarApi.md#calendarasalternate) | **PUT** /email/Calendar/as-alternate | Convert iCalendar to AlternateView
*CalendarApi* | [**calendarAsFile**](CalendarApi.md#calendarasfile) | **PUT** /email/Calendar/as-file | Converts calendar model to specified format and returns as file.
*CalendarApi* | [**calendarAsMapi**](CalendarApi.md#calendarasmapi) | **PUT** /email/Calendar/as-mapi | Converts CalendarDto to MapiCalendarDto.
*CalendarApi* | [**calendarConvert**](CalendarApi.md#calendarconvert) | **PUT** /email/Calendar/convert | Converts calendar document to specified format and returns as file.
*CalendarApi* | [**calendarFromFile**](CalendarApi.md#calendarfromfile) | **PUT** /email/Calendar/from-file | Converts calendar document to a model representation.
*CalendarApi* | [**calendarGet**](CalendarApi.md#calendarget) | **GET** /email/Calendar | Get calendar file from storage.
*CalendarApi* | [**calendarGetAsAlternate**](CalendarApi.md#calendargetasalternate) | **GET** /email/Calendar/as-alternate | Get iCalendar from storage as AlternateView
*CalendarApi* | [**calendarGetAsFile**](CalendarApi.md#calendargetasfile) | **GET** /email/Calendar/as-file | Converts calendar document from storage to specified format and returns as file.
*CalendarApi* | [**calendarGetList**](CalendarApi.md#calendargetlist) | **GET** /email/Calendar/list | Get iCalendar list from storage folder.
*CalendarApi* | [**calendarSave**](CalendarApi.md#calendarsave) | **PUT** /email/Calendar | Save iCalendar
*ClientAccountApi* | [**clientAccountGet**](ClientAccountApi.md#clientaccountget) | **GET** /email/client/account | Get email client account from storage.
*ClientAccountApi* | [**clientAccountGetMulti**](ClientAccountApi.md#clientaccountgetmulti) | **GET** /email/client/account/multi | Get email client multi account file (*.multi.account). Will respond error if file extension is not \&quot;.multi.account\&quot;.
*ClientAccountApi* | [**clientAccountSave**](ClientAccountApi.md#clientaccountsave) | **PUT** /email/client/account | Create/update email client account file (*.account) with credentials
*ClientAccountApi* | [**clientAccountSaveMulti**](ClientAccountApi.md#clientaccountsavemulti) | **PUT** /email/client/account/multi | Create email client multi account file (*.multi.account). Will respond error if file extension is not \&quot;.multi.account\&quot;.
*ClientFolderApi* | [**clientFolderCreate**](ClientFolderApi.md#clientfoldercreate) | **PUT** /email/client/folder | Create new folder in email account
*ClientFolderApi* | [**clientFolderDelete**](ClientFolderApi.md#clientfolderdelete) | **DELETE** /email/client/folder | Delete a folder in email account
*ClientFolderApi* | [**clientFolderGetList**](ClientFolderApi.md#clientfoldergetlist) | **GET** /email/client/folder/list | Get folders list in email account
*ClientMessageApi* | [**clientMessageAppend**](ClientMessageApi.md#clientmessageappend) | **POST** /email/client/message/append | Add email message to specified folder in email account.
*ClientMessageApi* | [**clientMessageAppendFile**](ClientMessageApi.md#clientmessageappendfile) | **POST** /email/client/message/file/append | Add email message from file to specified folder in email account.
*ClientMessageApi* | [**clientMessageDelete**](ClientMessageApi.md#clientmessagedelete) | **DELETE** /email/client/message | Delete message.
*ClientMessageApi* | [**clientMessageFetch**](ClientMessageApi.md#clientmessagefetch) | **GET** /email/client/message | Fetch message from email account
*ClientMessageApi* | [**clientMessageFetchFile**](ClientMessageApi.md#clientmessagefetchfile) | **GET** /email/client/message/file | Fetch message as file from email account
*ClientMessageApi* | [**clientMessageList**](ClientMessageApi.md#clientmessagelist) | **GET** /email/client/message/list | Get messages from folder, filtered by query
*ClientMessageApi* | [**clientMessageMove**](ClientMessageApi.md#clientmessagemove) | **PUT** /email/client/message/move | Move message to another folder.
*ClientMessageApi* | [**clientMessageSend**](ClientMessageApi.md#clientmessagesend) | **POST** /email/client/message | Send an email specified by model in request.
*ClientMessageApi* | [**clientMessageSendFile**](ClientMessageApi.md#clientmessagesendfile) | **POST** /email/client/message/file | Send an email file.
*ClientMessageApi* | [**clientMessageSetIsRead**](ClientMessageApi.md#clientmessagesetisread) | **PUT** /email/client/message/set-is-read | Mark message as read or unread.
*ClientThreadApi* | [**clientThreadDelete**](ClientThreadApi.md#clientthreaddelete) | **DELETE** /email/client/thread | Delete thread by id. All messages from thread will also be deleted.
*ClientThreadApi* | [**clientThreadGetList**](ClientThreadApi.md#clientthreadgetlist) | **GET** /email/client/thread/list | Get message threads from folder. All messages are partly fetched (without email body and some other fields).
*ClientThreadApi* | [**clientThreadGetMessages**](ClientThreadApi.md#clientthreadgetmessages) | **GET** /email/client/thread/messages | Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
*ClientThreadApi* | [**clientThreadMove**](ClientThreadApi.md#clientthreadmove) | **PUT** /email/client/thread/move | Move thread to another folder.
*ClientThreadApi* | [**clientThreadSetIsRead**](ClientThreadApi.md#clientthreadsetisread) | **PUT** /email/client/thread/set-is-read | Mark all messages in thread as read or unread.
*ContactApi* | [**contactAsFile**](ContactApi.md#contactasfile) | **PUT** /email/Contact/as-file | Converts contact model to specified format and returns as file
*ContactApi* | [**contactAsMapi**](ContactApi.md#contactasmapi) | **PUT** /email/Contact/as-mapi | Converts ContactDto to MapiContactDto.
*ContactApi* | [**contactConvert**](ContactApi.md#contactconvert) | **PUT** /email/Contact/convert | Converts contact document to specified format and returns as file
*ContactApi* | [**contactFromFile**](ContactApi.md#contactfromfile) | **PUT** /email/Contact/from-file | Converts contact document to a model representation
*ContactApi* | [**contactGet**](ContactApi.md#contactget) | **GET** /email/Contact | Get contact document from storage.
*ContactApi* | [**contactGetAsFile**](ContactApi.md#contactgetasfile) | **GET** /email/Contact/as-file | Converts contact document from storage to specified format and returns as file
*ContactApi* | [**contactGetList**](ContactApi.md#contactgetlist) | **GET** /email/Contact/list | Get contact list from storage folder.
*ContactApi* | [**contactSave**](ContactApi.md#contactsave) | **PUT** /email/Contact | Save contact to storage.
*DisposableEmailApi* | [**disposableEmailIsDisposable**](DisposableEmailApi.md#disposableemailisdisposable) | **GET** /email/disposable/is-disposable | Check email address is disposable
*EmailApi* | [**emailAsFile**](EmailApi.md#emailasfile) | **PUT** /email/as-file | Converts Email model to specified format and returns as file.
*EmailApi* | [**emailAsMapi**](EmailApi.md#emailasmapi) | **PUT** /email/as-mapi | Converts EmailDto to MapiMessageDto.
*EmailApi* | [**emailConvert**](EmailApi.md#emailconvert) | **PUT** /email/convert | Converts email document to specified format and returns as file
*EmailApi* | [**emailFromFile**](EmailApi.md#emailfromfile) | **PUT** /email/from-file | Converts email document to a model representation
*EmailApi* | [**emailGet**](EmailApi.md#emailget) | **GET** /email | Get email document from storage.
*EmailApi* | [**emailGetAsFile**](EmailApi.md#emailgetasfile) | **GET** /email/as-file | Converts email document from storage to specified format and returns as file
*EmailApi* | [**emailGetList**](EmailApi.md#emailgetlist) | **GET** /email/list | Get email list from storage folder.
*EmailApi* | [**emailSave**](EmailApi.md#emailsave) | **PUT** /email | Save email document to storage.
*EmailConfigApi* | [**emailConfigDiscover**](EmailConfigApi.md#emailconfigdiscover) | **GET** /email/config/discover | Discover email accounts by email address. Does not validate discovered accounts.
*EmailConfigApi* | [**emailConfigDiscoverOauth**](EmailConfigApi.md#emailconfigdiscoveroauth) | **PUT** /email/config/discover/oauth | Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
*EmailConfigApi* | [**emailConfigDiscoverPassword**](EmailConfigApi.md#emailconfigdiscoverpassword) | **PUT** /email/config/discover/password | Discover email accounts by email address. Validates discovered accounts using login and password.
*FileApi* | [**copyFile**](FileApi.md#copyfile) | **PUT** /email/storage/file/copy/{srcPath} | 
*FileApi* | [**deleteFile**](FileApi.md#deletefile) | **DELETE** /email/storage/file/{path} | 
*FileApi* | [**downloadFile**](FileApi.md#downloadfile) | **GET** /email/storage/file/{path} | 
*FileApi* | [**moveFile**](FileApi.md#movefile) | **PUT** /email/storage/file/move/{srcPath} | 
*FileApi* | [**uploadFile**](FileApi.md#uploadfile) | **PUT** /email/storage/file/{path} | 
*FolderApi* | [**copyFolder**](FolderApi.md#copyfolder) | **PUT** /email/storage/folder/copy/{srcPath} | 
*FolderApi* | [**createFolder**](FolderApi.md#createfolder) | **PUT** /email/storage/folder/{path} | 
*FolderApi* | [**deleteFolder**](FolderApi.md#deletefolder) | **DELETE** /email/storage/folder/{path} | 
*FolderApi* | [**getFilesList**](FolderApi.md#getfileslist) | **GET** /email/storage/folder/{path} | 
*FolderApi* | [**moveFolder**](FolderApi.md#movefolder) | **PUT** /email/storage/folder/move/{srcPath} | 
*MapiCalendarApi* | [**mapiCalendarAsCalendarDto**](MapiCalendarApi.md#mapicalendarascalendardto) | **PUT** /email/MapiCalendar/as-calendar-dto | Converts MAPI calendar model to CalendarDto model.
*MapiCalendarApi* | [**mapiCalendarAsFile**](MapiCalendarApi.md#mapicalendarasfile) | **PUT** /email/MapiCalendar/as-file | Converts MAPI calendar model to specified format and returns as file.
*MapiCalendarApi* | [**mapiCalendarFromFile**](MapiCalendarApi.md#mapicalendarfromfile) | **PUT** /email/MapiCalendar/from-file | Converts calendar file to a MAPI model representation.
*MapiCalendarApi* | [**mapiCalendarGet**](MapiCalendarApi.md#mapicalendarget) | **GET** /email/MapiCalendar | Get MAPI calendar document.
*MapiCalendarApi* | [**mapiCalendarSave**](MapiCalendarApi.md#mapicalendarsave) | **PUT** /email/MapiCalendar | Save MAPI Calendar to storage.
*MapiContactApi* | [**mapiContactAsContactDto**](MapiContactApi.md#mapicontactascontactdto) | **PUT** /email/MapiContact/as-contact-dto | Converts MAPI contact model to ContactDto model.
*MapiContactApi* | [**mapiContactAsFile**](MapiContactApi.md#mapicontactasfile) | **PUT** /email/MapiContact/as-file | Converts MAPI contact model to specified format and returns as file.
*MapiContactApi* | [**mapiContactFromFile**](MapiContactApi.md#mapicontactfromfile) | **PUT** /email/MapiContact/from-file | Converts contact file to a MAPI model representation.
*MapiContactApi* | [**mapiContactGet**](MapiContactApi.md#mapicontactget) | **GET** /email/MapiContact | Get MAPI contact document.
*MapiContactApi* | [**mapiContactSave**](MapiContactApi.md#mapicontactsave) | **PUT** /email/MapiContact | Save MAPI Contact to storage.
*MapiMessageApi* | [**mapiMessageAsEmailDto**](MapiMessageApi.md#mapimessageasemaildto) | **PUT** /email/MapiMessage/as-email-dto | Converts MAPI message model to EmailDto model
*MapiMessageApi* | [**mapiMessageAsFile**](MapiMessageApi.md#mapimessageasfile) | **PUT** /email/MapiMessage/as-file | Converts MAPI message model to specified format and returns as file.
*MapiMessageApi* | [**mapiMessageFromFile**](MapiMessageApi.md#mapimessagefromfile) | **PUT** /email/MapiMessage/from-file | Converts email file to a MAPI model representation
*MapiMessageApi* | [**mapiMessageGet**](MapiMessageApi.md#mapimessageget) | **GET** /email/MapiMessage | Get MAPI message document.
*MapiMessageApi* | [**mapiMessageSave**](MapiMessageApi.md#mapimessagesave) | **PUT** /email/MapiMessage | Save MAPI message to storage.
*StorageApi* | [**getDiscUsage**](StorageApi.md#getdiscusage) | **GET** /email/storage/disc | 
*StorageApi* | [**getFileVersions**](StorageApi.md#getfileversions) | **GET** /email/storage/version/{path} | 
*StorageApi* | [**objectExists**](StorageApi.md#objectexists) | **GET** /email/storage/exist/{path} | 
*StorageApi* | [**storageExists**](StorageApi.md#storageexists) | **GET** /email/storage/{storageName}/exist | 


## Documentation For Models

 - [AiBcrImage](AiBcrImage.md)
 - [AiBcrOptions](AiBcrOptions.md)
 - [AiBcrParseStorageRequest](AiBcrParseStorageRequest.md)
 - [AiNameComponent](AiNameComponent.md)
 - [AiNameCulturalContext](AiNameCulturalContext.md)
 - [AiNameExtracted](AiNameExtracted.md)
 - [AiNameExtractedComponent](AiNameExtractedComponent.md)
 - [AiNameFormatted](AiNameFormatted.md)
 - [AiNameGenderHypothesis](AiNameGenderHypothesis.md)
 - [AiNameMatchResult](AiNameMatchResult.md)
 - [AiNameMismatch](AiNameMismatch.md)
 - [AiNameParsedRequest](AiNameParsedRequest.md)
 - [AiNameWeighted](AiNameWeighted.md)
 - [AiNameWeightedVariants](AiNameWeightedVariants.md)
 - [AssociatedPerson](AssociatedPerson.md)
 - [AttachmentBase](AttachmentBase.md)
 - [CalendarAsAlternateRequest](CalendarAsAlternateRequest.md)
 - [CalendarAsFileRequest](CalendarAsFileRequest.md)
 - [CalendarDto](CalendarDto.md)
 - [CalendarReminder](CalendarReminder.md)
 - [ClientAccountBaseRequest](ClientAccountBaseRequest.md)
 - [ContactAsFileRequest](ContactAsFileRequest.md)
 - [ContactDto](ContactDto.md)
 - [ContactPhoto](ContactPhoto.md)
 - [ContentType](ContentType.md)
 - [ContentTypeParameter](ContentTypeParameter.md)
 - [CustomerEvent](CustomerEvent.md)
 - [DiscUsage](DiscUsage.md)
 - [DiscoverEmailConfigRequest](DiscoverEmailConfigRequest.md)
 - [EmailAccountConfig](EmailAccountConfig.md)
 - [EmailAddress](EmailAddress.md)
 - [EmailAsFileRequest](EmailAsFileRequest.md)
 - [EmailClientAccount](EmailClientAccount.md)
 - [EmailClientAccountCredentials](EmailClientAccountCredentials.md)
 - [EmailClientMultiAccount](EmailClientMultiAccount.md)
 - [EmailDto](EmailDto.md)
 - [EmailThread](EmailThread.md)
 - [EnumWithCustomOfAssociatedPersonCategory](EnumWithCustomOfAssociatedPersonCategory.md)
 - [EnumWithCustomOfEmailAddressCategory](EnumWithCustomOfEmailAddressCategory.md)
 - [EnumWithCustomOfEventCategory](EnumWithCustomOfEventCategory.md)
 - [EnumWithCustomOfInstantMessengerCategory](EnumWithCustomOfInstantMessengerCategory.md)
 - [EnumWithCustomOfPhoneNumberCategory](EnumWithCustomOfPhoneNumberCategory.md)
 - [EnumWithCustomOfPostalAddressCategory](EnumWithCustomOfPostalAddressCategory.md)
 - [EnumWithCustomOfUrlCategory](EnumWithCustomOfUrlCategory.md)
 - [Error](Error.md)
 - [ErrorDetails](ErrorDetails.md)
 - [FileVersions](FileVersions.md)
 - [FilesList](FilesList.md)
 - [FilesUploadResult](FilesUploadResult.md)
 - [InstantMessengerAddress](InstantMessengerAddress.md)
 - [ListResponseOfAiNameComponent](ListResponseOfAiNameComponent.md)
 - [ListResponseOfAiNameExtracted](ListResponseOfAiNameExtracted.md)
 - [ListResponseOfAiNameGenderHypothesis](ListResponseOfAiNameGenderHypothesis.md)
 - [ListResponseOfContactDto](ListResponseOfContactDto.md)
 - [ListResponseOfEmailAccountConfig](ListResponseOfEmailAccountConfig.md)
 - [ListResponseOfEmailDto](ListResponseOfEmailDto.md)
 - [ListResponseOfEmailThread](ListResponseOfEmailThread.md)
 - [ListResponseOfMailMessageBase](ListResponseOfMailMessageBase.md)
 - [ListResponseOfMailServerFolder](ListResponseOfMailServerFolder.md)
 - [ListResponseOfStorageFileLocation](ListResponseOfStorageFileLocation.md)
 - [ListResponseOfStorageModelOfCalendarDto](ListResponseOfStorageModelOfCalendarDto.md)
 - [ListResponseOfStorageModelOfContactDto](ListResponseOfStorageModelOfContactDto.md)
 - [ListResponseOfStorageModelOfEmailDto](ListResponseOfStorageModelOfEmailDto.md)
 - [MailAddress](MailAddress.md)
 - [MailMessageBase](MailMessageBase.md)
 - [MailServerFolder](MailServerFolder.md)
 - [MapiAttachmentDto](MapiAttachmentDto.md)
 - [MapiCalendarAsFileRequest](MapiCalendarAsFileRequest.md)
 - [MapiCalendarAttendeesDto](MapiCalendarAttendeesDto.md)
 - [MapiCalendarEventRecurrenceDto](MapiCalendarEventRecurrenceDto.md)
 - [MapiCalendarExceptionInfoDto](MapiCalendarExceptionInfoDto.md)
 - [MapiCalendarRecurrencePatternDto](MapiCalendarRecurrencePatternDto.md)
 - [MapiCalendarTimeZoneDto](MapiCalendarTimeZoneDto.md)
 - [MapiCalendarTimeZoneInfoDto](MapiCalendarTimeZoneInfoDto.md)
 - [MapiCalendarTimeZoneRuleDto](MapiCalendarTimeZoneRuleDto.md)
 - [MapiContactAsFileRequest](MapiContactAsFileRequest.md)
 - [MapiContactElectronicAddressDto](MapiContactElectronicAddressDto.md)
 - [MapiContactElectronicAddressPropertySetDto](MapiContactElectronicAddressPropertySetDto.md)
 - [MapiContactEventPropertySetDto](MapiContactEventPropertySetDto.md)
 - [MapiContactNamePropertySetDto](MapiContactNamePropertySetDto.md)
 - [MapiContactOtherPropertySetDto](MapiContactOtherPropertySetDto.md)
 - [MapiContactPersonalInfoPropertySetDto](MapiContactPersonalInfoPropertySetDto.md)
 - [MapiContactPhysicalAddressDto](MapiContactPhysicalAddressDto.md)
 - [MapiContactPhysicalAddressPropertySetDto](MapiContactPhysicalAddressPropertySetDto.md)
 - [MapiContactProfessionalPropertySetDto](MapiContactProfessionalPropertySetDto.md)
 - [MapiContactTelephonePropertySetDto](MapiContactTelephonePropertySetDto.md)
 - [MapiElectronicAddressDto](MapiElectronicAddressDto.md)
 - [MapiMessageAsFileRequest](MapiMessageAsFileRequest.md)
 - [MapiMessageItemBaseDto](MapiMessageItemBaseDto.md)
 - [MapiPropertyDescriptor](MapiPropertyDescriptor.md)
 - [MapiPropertyDto](MapiPropertyDto.md)
 - [MapiRecipientDto](MapiRecipientDto.md)
 - [NameValuePair](NameValuePair.md)
 - [ObjectExist](ObjectExist.md)
 - [PhoneNumber](PhoneNumber.md)
 - [PostalAddress](PostalAddress.md)
 - [RecurrencePatternDto](RecurrencePatternDto.md)
 - [ReminderAttendee](ReminderAttendee.md)
 - [ReminderTrigger](ReminderTrigger.md)
 - [StorageExist](StorageExist.md)
 - [StorageFile](StorageFile.md)
 - [StorageFolderLocation](StorageFolderLocation.md)
 - [StorageModelOfCalendarDto](StorageModelOfCalendarDto.md)
 - [StorageModelOfContactDto](StorageModelOfContactDto.md)
 - [StorageModelOfEmailClientAccount](StorageModelOfEmailClientAccount.md)
 - [StorageModelOfEmailClientMultiAccount](StorageModelOfEmailClientMultiAccount.md)
 - [StorageModelOfEmailDto](StorageModelOfEmailDto.md)
 - [StorageModelOfMapiCalendarDto](StorageModelOfMapiCalendarDto.md)
 - [StorageModelOfMapiContactDto](StorageModelOfMapiContactDto.md)
 - [StorageModelOfMapiMessageDto](StorageModelOfMapiMessageDto.md)
 - [Url](Url.md)
 - [ValueTOfBoolean](ValueTOfBoolean.md)
 - [ValueTOfString](ValueTOfString.md)
 - [AiBcrImageStorageFile](AiBcrImageStorageFile.md)
 - [AiNameComponentList](AiNameComponentList.md)
 - [AiNameExtractedList](AiNameExtractedList.md)
 - [AiNameGenderHypothesisList](AiNameGenderHypothesisList.md)
 - [AiNameMatchParsedRequest](AiNameMatchParsedRequest.md)
 - [AlternateView](AlternateView.md)
 - [Attachment](Attachment.md)
 - [CalendarSaveRequest](CalendarSaveRequest.md)
 - [CalendarStorageList](CalendarStorageList.md)
 - [ClientAccountSaveMultiRequest](ClientAccountSaveMultiRequest.md)
 - [ClientAccountSaveRequest](ClientAccountSaveRequest.md)
 - [ClientFolderCreateRequest](ClientFolderCreateRequest.md)
 - [ClientFolderDeleteRequest](ClientFolderDeleteRequest.md)
 - [ClientMessageAppendRequest](ClientMessageAppendRequest.md)
 - [ClientMessageBaseRequest](ClientMessageBaseRequest.md)
 - [ClientMessageSendRequest](ClientMessageSendRequest.md)
 - [ClientThreadBaseRequest](ClientThreadBaseRequest.md)
 - [ContactList](ContactList.md)
 - [ContactSaveRequest](ContactSaveRequest.md)
 - [ContactStorageList](ContactStorageList.md)
 - [DailyRecurrencePatternDto](DailyRecurrencePatternDto.md)
 - [EmailAccountConfigList](EmailAccountConfigList.md)
 - [EmailClientAccountOauthCredentials](EmailClientAccountOauthCredentials.md)
 - [EmailClientAccountPasswordCredentials](EmailClientAccountPasswordCredentials.md)
 - [EmailConfigDiscoverOauthRequest](EmailConfigDiscoverOauthRequest.md)
 - [EmailConfigDiscoverPasswordRequest](EmailConfigDiscoverPasswordRequest.md)
 - [EmailList](EmailList.md)
 - [EmailSaveRequest](EmailSaveRequest.md)
 - [EmailStorageList](EmailStorageList.md)
 - [EmailThreadList](EmailThreadList.md)
 - [FileVersion](FileVersion.md)
 - [LinkedResource](LinkedResource.md)
 - [MailMessageBase64](MailMessageBase64.md)
 - [MailMessageBaseList](MailMessageBaseList.md)
 - [MailMessageDto](MailMessageDto.md)
 - [MailMessageMapi](MailMessageMapi.md)
 - [MailServerFolderList](MailServerFolderList.md)
 - [MapiBinaryPropertyDto](MapiBinaryPropertyDto.md)
 - [MapiBooleanPropertyDto](MapiBooleanPropertyDto.md)
 - [MapiCalendarDailyRecurrencePatternDto](MapiCalendarDailyRecurrencePatternDto.md)
 - [MapiCalendarDto](MapiCalendarDto.md)
 - [MapiCalendarSaveRequest](MapiCalendarSaveRequest.md)
 - [MapiCalendarWeeklyRecurrencePatternDto](MapiCalendarWeeklyRecurrencePatternDto.md)
 - [MapiCalendarYearlyAndMonthlyRecurrencePatternDto](MapiCalendarYearlyAndMonthlyRecurrencePatternDto.md)
 - [MapiContactDto](MapiContactDto.md)
 - [MapiContactPhotoDto](MapiContactPhotoDto.md)
 - [MapiContactSaveRequest](MapiContactSaveRequest.md)
 - [MapiDateTimePropertyDto](MapiDateTimePropertyDto.md)
 - [MapiFileAsPropertyDto](MapiFileAsPropertyDto.md)
 - [MapiImportancePropertyDto](MapiImportancePropertyDto.md)
 - [MapiIntPropertyDto](MapiIntPropertyDto.md)
 - [MapiKnownPropertyDescriptor](MapiKnownPropertyDescriptor.md)
 - [MapiLegacyFreeBusyPropertyDto](MapiLegacyFreeBusyPropertyDto.md)
 - [MapiMessageDto](MapiMessageDto.md)
 - [MapiMessageSaveRequest](MapiMessageSaveRequest.md)
 - [MapiMultiIntPropertyDto](MapiMultiIntPropertyDto.md)
 - [MapiMultiStringPropertyDto](MapiMultiStringPropertyDto.md)
 - [MapiPhysicalAddressIndexPropertyDto](MapiPhysicalAddressIndexPropertyDto.md)
 - [MapiPidPropertyDescriptor](MapiPidPropertyDescriptor.md)
 - [MapiResponseTypePropertyDto](MapiResponseTypePropertyDto.md)
 - [MapiStringPropertyDto](MapiStringPropertyDto.md)
 - [MonthlyRecurrencePatternDto](MonthlyRecurrencePatternDto.md)
 - [StorageFileLocation](StorageFileLocation.md)
 - [StorageFileLocationList](StorageFileLocationList.md)
 - [TaskRegeneratingPatternDto](TaskRegeneratingPatternDto.md)
 - [WeeklyRecurrencePatternDto](WeeklyRecurrencePatternDto.md)
 - [YearlyRecurrencePatternDto](YearlyRecurrencePatternDto.md)
 - [ClientMessageDeleteRequest](ClientMessageDeleteRequest.md)
 - [ClientMessageMoveRequest](ClientMessageMoveRequest.md)
 - [ClientMessageSetIsReadRequest](ClientMessageSetIsReadRequest.md)
 - [ClientThreadDeleteRequest](ClientThreadDeleteRequest.md)
 - [ClientThreadMoveRequest](ClientThreadMoveRequest.md)
 - [ClientThreadSetIsReadRequest](ClientThreadSetIsReadRequest.md)
 - [MapiPidLidPropertyDescriptor](MapiPidLidPropertyDescriptor.md)
 - [MapiPidNamePropertyDescriptor](MapiPidNamePropertyDescriptor.md)
 - [MapiPidTagPropertyDescriptor](MapiPidTagPropertyDescriptor.md)
