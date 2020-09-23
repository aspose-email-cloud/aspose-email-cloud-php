<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Models.php">
 *  Copyright (c) 2018-2020 Aspose.Email for Cloud
 * </copyright>
 * <summary>
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Email\Model;

/**
 * Provides model builders
 */
class Models
{
    public static function aiBcrImage()
    {
        return new AiBcrImageBuilder(new AiBcrImage());
    }
    public static function aiBcrOptions()
    {
        return new AiBcrOptionsBuilder(new AiBcrOptions());
    }
    public static function aiBcrParseStorageRequest()
    {
        return new AiBcrParseStorageRequestBuilder(new AiBcrParseStorageRequest());
    }
    public static function aiNameComponent()
    {
        return new AiNameComponentBuilder(new AiNameComponent());
    }
    public static function aiNameCulturalContext()
    {
        return new AiNameCulturalContextBuilder(new AiNameCulturalContext());
    }
    public static function aiNameExtracted()
    {
        return new AiNameExtractedBuilder(new AiNameExtracted());
    }
    public static function aiNameExtractedComponent()
    {
        return new AiNameExtractedComponentBuilder(new AiNameExtractedComponent());
    }
    public static function aiNameFormatted()
    {
        return new AiNameFormattedBuilder(new AiNameFormatted());
    }
    public static function aiNameGenderHypothesis()
    {
        return new AiNameGenderHypothesisBuilder(new AiNameGenderHypothesis());
    }
    public static function aiNameMatchResult()
    {
        return new AiNameMatchResultBuilder(new AiNameMatchResult());
    }
    public static function aiNameMismatch()
    {
        return new AiNameMismatchBuilder(new AiNameMismatch());
    }
    public static function aiNameParsedRequest()
    {
        return new AiNameParsedRequestBuilder(new AiNameParsedRequest());
    }
    public static function aiNameWeighted()
    {
        return new AiNameWeightedBuilder(new AiNameWeighted());
    }
    public static function aiNameWeightedVariants()
    {
        return new AiNameWeightedVariantsBuilder(new AiNameWeightedVariants());
    }
    public static function associatedPerson()
    {
        return new AssociatedPersonBuilder(new AssociatedPerson());
    }
    public static function attachmentBase()
    {
        return new AttachmentBaseBuilder(new AttachmentBase());
    }
    public static function calendarAsAlternateRequest()
    {
        return new CalendarAsAlternateRequestBuilder(new CalendarAsAlternateRequest());
    }
    public static function calendarAsFileRequest()
    {
        return new CalendarAsFileRequestBuilder(new CalendarAsFileRequest());
    }
    public static function calendarDto()
    {
        return new CalendarDtoBuilder(new CalendarDto());
    }
    public static function calendarReminder()
    {
        return new CalendarReminderBuilder(new CalendarReminder());
    }
    public static function clientAccountBaseRequest()
    {
        return new ClientAccountBaseRequestBuilder(new ClientAccountBaseRequest());
    }
    public static function contactAsFileRequest()
    {
        return new ContactAsFileRequestBuilder(new ContactAsFileRequest());
    }
    public static function contactDto()
    {
        return new ContactDtoBuilder(new ContactDto());
    }
    public static function contactPhoto()
    {
        return new ContactPhotoBuilder(new ContactPhoto());
    }
    public static function contentType()
    {
        return new ContentTypeBuilder(new ContentType());
    }
    public static function contentTypeParameter()
    {
        return new ContentTypeParameterBuilder(new ContentTypeParameter());
    }
    public static function customerEvent()
    {
        return new CustomerEventBuilder(new CustomerEvent());
    }
    public static function discUsage()
    {
        return new DiscUsageBuilder(new DiscUsage());
    }
    public static function discoverEmailConfigRequest()
    {
        return new DiscoverEmailConfigRequestBuilder(new DiscoverEmailConfigRequest());
    }
    public static function emailAccountConfig()
    {
        return new EmailAccountConfigBuilder(new EmailAccountConfig());
    }
    public static function emailAddress()
    {
        return new EmailAddressBuilder(new EmailAddress());
    }
    public static function emailAsFileRequest()
    {
        return new EmailAsFileRequestBuilder(new EmailAsFileRequest());
    }
    public static function emailClientAccount()
    {
        return new EmailClientAccountBuilder(new EmailClientAccount());
    }
    public static function emailClientAccountCredentials()
    {
        return new EmailClientAccountCredentialsBuilder(new EmailClientAccountCredentials());
    }
    public static function emailClientMultiAccount()
    {
        return new EmailClientMultiAccountBuilder(new EmailClientMultiAccount());
    }
    public static function emailDto()
    {
        return new EmailDtoBuilder(new EmailDto());
    }
    public static function emailThread()
    {
        return new EmailThreadBuilder(new EmailThread());
    }
    public static function enumWithCustomOfAssociatedPersonCategory()
    {
        return new EnumWithCustomOfAssociatedPersonCategoryBuilder(new EnumWithCustomOfAssociatedPersonCategory());
    }
    public static function enumWithCustomOfEmailAddressCategory()
    {
        return new EnumWithCustomOfEmailAddressCategoryBuilder(new EnumWithCustomOfEmailAddressCategory());
    }
    public static function enumWithCustomOfEventCategory()
    {
        return new EnumWithCustomOfEventCategoryBuilder(new EnumWithCustomOfEventCategory());
    }
    public static function enumWithCustomOfInstantMessengerCategory()
    {
        return new EnumWithCustomOfInstantMessengerCategoryBuilder(new EnumWithCustomOfInstantMessengerCategory());
    }
    public static function enumWithCustomOfPhoneNumberCategory()
    {
        return new EnumWithCustomOfPhoneNumberCategoryBuilder(new EnumWithCustomOfPhoneNumberCategory());
    }
    public static function enumWithCustomOfPostalAddressCategory()
    {
        return new EnumWithCustomOfPostalAddressCategoryBuilder(new EnumWithCustomOfPostalAddressCategory());
    }
    public static function enumWithCustomOfUrlCategory()
    {
        return new EnumWithCustomOfUrlCategoryBuilder(new EnumWithCustomOfUrlCategory());
    }
    public static function error()
    {
        return new ErrorBuilder(new Error());
    }
    public static function errorDetails()
    {
        return new ErrorDetailsBuilder(new ErrorDetails());
    }
    public static function fileVersions()
    {
        return new FileVersionsBuilder(new FileVersions());
    }
    public static function filesList()
    {
        return new FilesListBuilder(new FilesList());
    }
    public static function filesUploadResult()
    {
        return new FilesUploadResultBuilder(new FilesUploadResult());
    }
    public static function instantMessengerAddress()
    {
        return new InstantMessengerAddressBuilder(new InstantMessengerAddress());
    }
    public static function listResponseOfAiNameComponent()
    {
        return new ListResponseOfAiNameComponentBuilder(new ListResponseOfAiNameComponent());
    }
    public static function listResponseOfAiNameExtracted()
    {
        return new ListResponseOfAiNameExtractedBuilder(new ListResponseOfAiNameExtracted());
    }
    public static function listResponseOfAiNameGenderHypothesis()
    {
        return new ListResponseOfAiNameGenderHypothesisBuilder(new ListResponseOfAiNameGenderHypothesis());
    }
    public static function listResponseOfContactDto()
    {
        return new ListResponseOfContactDtoBuilder(new ListResponseOfContactDto());
    }
    public static function listResponseOfEmailAccountConfig()
    {
        return new ListResponseOfEmailAccountConfigBuilder(new ListResponseOfEmailAccountConfig());
    }
    public static function listResponseOfEmailDto()
    {
        return new ListResponseOfEmailDtoBuilder(new ListResponseOfEmailDto());
    }
    public static function listResponseOfEmailThread()
    {
        return new ListResponseOfEmailThreadBuilder(new ListResponseOfEmailThread());
    }
    public static function listResponseOfMailMessageBase()
    {
        return new ListResponseOfMailMessageBaseBuilder(new ListResponseOfMailMessageBase());
    }
    public static function listResponseOfMailServerFolder()
    {
        return new ListResponseOfMailServerFolderBuilder(new ListResponseOfMailServerFolder());
    }
    public static function listResponseOfStorageFileLocation()
    {
        return new ListResponseOfStorageFileLocationBuilder(new ListResponseOfStorageFileLocation());
    }
    public static function listResponseOfStorageModelOfCalendarDto()
    {
        return new ListResponseOfStorageModelOfCalendarDtoBuilder(new ListResponseOfStorageModelOfCalendarDto());
    }
    public static function listResponseOfStorageModelOfContactDto()
    {
        return new ListResponseOfStorageModelOfContactDtoBuilder(new ListResponseOfStorageModelOfContactDto());
    }
    public static function listResponseOfStorageModelOfEmailDto()
    {
        return new ListResponseOfStorageModelOfEmailDtoBuilder(new ListResponseOfStorageModelOfEmailDto());
    }
    public static function mailAddress()
    {
        return new MailAddressBuilder(new MailAddress());
    }
    public static function mailMessageBase()
    {
        return new MailMessageBaseBuilder(new MailMessageBase());
    }
    public static function mailServerFolder()
    {
        return new MailServerFolderBuilder(new MailServerFolder());
    }
    public static function mapiAttachmentDto()
    {
        return new MapiAttachmentDtoBuilder(new MapiAttachmentDto());
    }
    public static function mapiCalendarAsFileRequest()
    {
        return new MapiCalendarAsFileRequestBuilder(new MapiCalendarAsFileRequest());
    }
    public static function mapiCalendarAttendeesDto()
    {
        return new MapiCalendarAttendeesDtoBuilder(new MapiCalendarAttendeesDto());
    }
    public static function mapiCalendarEventRecurrenceDto()
    {
        return new MapiCalendarEventRecurrenceDtoBuilder(new MapiCalendarEventRecurrenceDto());
    }
    public static function mapiCalendarExceptionInfoDto()
    {
        return new MapiCalendarExceptionInfoDtoBuilder(new MapiCalendarExceptionInfoDto());
    }
    public static function mapiCalendarRecurrencePatternDto()
    {
        return new MapiCalendarRecurrencePatternDtoBuilder(new MapiCalendarRecurrencePatternDto());
    }
    public static function mapiCalendarTimeZoneDto()
    {
        return new MapiCalendarTimeZoneDtoBuilder(new MapiCalendarTimeZoneDto());
    }
    public static function mapiCalendarTimeZoneInfoDto()
    {
        return new MapiCalendarTimeZoneInfoDtoBuilder(new MapiCalendarTimeZoneInfoDto());
    }
    public static function mapiCalendarTimeZoneRuleDto()
    {
        return new MapiCalendarTimeZoneRuleDtoBuilder(new MapiCalendarTimeZoneRuleDto());
    }
    public static function mapiContactAsFileRequest()
    {
        return new MapiContactAsFileRequestBuilder(new MapiContactAsFileRequest());
    }
    public static function mapiContactElectronicAddressDto()
    {
        return new MapiContactElectronicAddressDtoBuilder(new MapiContactElectronicAddressDto());
    }
    public static function mapiContactElectronicAddressPropertySetDto()
    {
        return new MapiContactElectronicAddressPropertySetDtoBuilder(new MapiContactElectronicAddressPropertySetDto());
    }
    public static function mapiContactEventPropertySetDto()
    {
        return new MapiContactEventPropertySetDtoBuilder(new MapiContactEventPropertySetDto());
    }
    public static function mapiContactNamePropertySetDto()
    {
        return new MapiContactNamePropertySetDtoBuilder(new MapiContactNamePropertySetDto());
    }
    public static function mapiContactOtherPropertySetDto()
    {
        return new MapiContactOtherPropertySetDtoBuilder(new MapiContactOtherPropertySetDto());
    }
    public static function mapiContactPersonalInfoPropertySetDto()
    {
        return new MapiContactPersonalInfoPropertySetDtoBuilder(new MapiContactPersonalInfoPropertySetDto());
    }
    public static function mapiContactPhysicalAddressDto()
    {
        return new MapiContactPhysicalAddressDtoBuilder(new MapiContactPhysicalAddressDto());
    }
    public static function mapiContactPhysicalAddressPropertySetDto()
    {
        return new MapiContactPhysicalAddressPropertySetDtoBuilder(new MapiContactPhysicalAddressPropertySetDto());
    }
    public static function mapiContactProfessionalPropertySetDto()
    {
        return new MapiContactProfessionalPropertySetDtoBuilder(new MapiContactProfessionalPropertySetDto());
    }
    public static function mapiContactTelephonePropertySetDto()
    {
        return new MapiContactTelephonePropertySetDtoBuilder(new MapiContactTelephonePropertySetDto());
    }
    public static function mapiElectronicAddressDto()
    {
        return new MapiElectronicAddressDtoBuilder(new MapiElectronicAddressDto());
    }
    public static function mapiMessageAsFileRequest()
    {
        return new MapiMessageAsFileRequestBuilder(new MapiMessageAsFileRequest());
    }
    public static function mapiMessageItemBaseDto()
    {
        return new MapiMessageItemBaseDtoBuilder(new MapiMessageItemBaseDto());
    }
    public static function mapiPropertyDescriptor()
    {
        return new MapiPropertyDescriptorBuilder(new MapiPropertyDescriptor());
    }
    public static function mapiPropertyDto()
    {
        return new MapiPropertyDtoBuilder(new MapiPropertyDto());
    }
    public static function mapiRecipientDto()
    {
        return new MapiRecipientDtoBuilder(new MapiRecipientDto());
    }
    public static function nameValuePair()
    {
        return new NameValuePairBuilder(new NameValuePair());
    }
    public static function objectExist()
    {
        return new ObjectExistBuilder(new ObjectExist());
    }
    public static function phoneNumber()
    {
        return new PhoneNumberBuilder(new PhoneNumber());
    }
    public static function postalAddress()
    {
        return new PostalAddressBuilder(new PostalAddress());
    }
    public static function recurrencePatternDto()
    {
        return new RecurrencePatternDtoBuilder(new RecurrencePatternDto());
    }
    public static function reminderAttendee()
    {
        return new ReminderAttendeeBuilder(new ReminderAttendee());
    }
    public static function reminderTrigger()
    {
        return new ReminderTriggerBuilder(new ReminderTrigger());
    }
    public static function storageExist()
    {
        return new StorageExistBuilder(new StorageExist());
    }
    public static function storageFile()
    {
        return new StorageFileBuilder(new StorageFile());
    }
    public static function storageFolderLocation()
    {
        return new StorageFolderLocationBuilder(new StorageFolderLocation());
    }
    public static function storageModelOfCalendarDto()
    {
        return new StorageModelOfCalendarDtoBuilder(new StorageModelOfCalendarDto());
    }
    public static function storageModelOfContactDto()
    {
        return new StorageModelOfContactDtoBuilder(new StorageModelOfContactDto());
    }
    public static function storageModelOfEmailClientAccount()
    {
        return new StorageModelOfEmailClientAccountBuilder(new StorageModelOfEmailClientAccount());
    }
    public static function storageModelOfEmailClientMultiAccount()
    {
        return new StorageModelOfEmailClientMultiAccountBuilder(new StorageModelOfEmailClientMultiAccount());
    }
    public static function storageModelOfEmailDto()
    {
        return new StorageModelOfEmailDtoBuilder(new StorageModelOfEmailDto());
    }
    public static function storageModelOfMapiCalendarDto()
    {
        return new StorageModelOfMapiCalendarDtoBuilder(new StorageModelOfMapiCalendarDto());
    }
    public static function storageModelOfMapiContactDto()
    {
        return new StorageModelOfMapiContactDtoBuilder(new StorageModelOfMapiContactDto());
    }
    public static function storageModelOfMapiMessageDto()
    {
        return new StorageModelOfMapiMessageDtoBuilder(new StorageModelOfMapiMessageDto());
    }
    public static function url()
    {
        return new UrlBuilder(new Url());
    }
    public static function valueTOfBoolean()
    {
        return new ValueTOfBooleanBuilder(new ValueTOfBoolean());
    }
    public static function valueTOfString()
    {
        return new ValueTOfStringBuilder(new ValueTOfString());
    }
    public static function aiBcrImageStorageFile()
    {
        return new AiBcrImageStorageFileBuilder(new AiBcrImageStorageFile());
    }
    public static function aiNameComponentList()
    {
        return new AiNameComponentListBuilder(new AiNameComponentList());
    }
    public static function aiNameExtractedList()
    {
        return new AiNameExtractedListBuilder(new AiNameExtractedList());
    }
    public static function aiNameGenderHypothesisList()
    {
        return new AiNameGenderHypothesisListBuilder(new AiNameGenderHypothesisList());
    }
    public static function aiNameMatchParsedRequest()
    {
        return new AiNameMatchParsedRequestBuilder(new AiNameMatchParsedRequest());
    }
    public static function alternateView()
    {
        return new AlternateViewBuilder(new AlternateView());
    }
    public static function attachment()
    {
        return new AttachmentBuilder(new Attachment());
    }
    public static function calendarSaveRequest()
    {
        return new CalendarSaveRequestBuilder(new CalendarSaveRequest());
    }
    public static function calendarStorageList()
    {
        return new CalendarStorageListBuilder(new CalendarStorageList());
    }
    public static function clientAccountSaveMultiRequest()
    {
        return new ClientAccountSaveMultiRequestBuilder(new ClientAccountSaveMultiRequest());
    }
    public static function clientAccountSaveRequest()
    {
        return new ClientAccountSaveRequestBuilder(new ClientAccountSaveRequest());
    }
    public static function clientFolderCreateRequest()
    {
        return new ClientFolderCreateRequestBuilder(new ClientFolderCreateRequest());
    }
    public static function clientFolderDeleteRequest()
    {
        return new ClientFolderDeleteRequestBuilder(new ClientFolderDeleteRequest());
    }
    public static function clientMessageAppendRequest()
    {
        return new ClientMessageAppendRequestBuilder(new ClientMessageAppendRequest());
    }
    public static function clientMessageBaseRequest()
    {
        return new ClientMessageBaseRequestBuilder(new ClientMessageBaseRequest());
    }
    public static function clientMessageSendRequest()
    {
        return new ClientMessageSendRequestBuilder(new ClientMessageSendRequest());
    }
    public static function clientThreadBaseRequest()
    {
        return new ClientThreadBaseRequestBuilder(new ClientThreadBaseRequest());
    }
    public static function contactList()
    {
        return new ContactListBuilder(new ContactList());
    }
    public static function contactSaveRequest()
    {
        return new ContactSaveRequestBuilder(new ContactSaveRequest());
    }
    public static function contactStorageList()
    {
        return new ContactStorageListBuilder(new ContactStorageList());
    }
    public static function dailyRecurrencePatternDto()
    {
        return new DailyRecurrencePatternDtoBuilder(new DailyRecurrencePatternDto());
    }
    public static function emailAccountConfigList()
    {
        return new EmailAccountConfigListBuilder(new EmailAccountConfigList());
    }
    public static function emailClientAccountOauthCredentials()
    {
        return new EmailClientAccountOauthCredentialsBuilder(new EmailClientAccountOauthCredentials());
    }
    public static function emailClientAccountPasswordCredentials()
    {
        return new EmailClientAccountPasswordCredentialsBuilder(new EmailClientAccountPasswordCredentials());
    }
    public static function emailConfigDiscoverOauthRequest()
    {
        return new EmailConfigDiscoverOauthRequestBuilder(new EmailConfigDiscoverOauthRequest());
    }
    public static function emailConfigDiscoverPasswordRequest()
    {
        return new EmailConfigDiscoverPasswordRequestBuilder(new EmailConfigDiscoverPasswordRequest());
    }
    public static function emailList()
    {
        return new EmailListBuilder(new EmailList());
    }
    public static function emailSaveRequest()
    {
        return new EmailSaveRequestBuilder(new EmailSaveRequest());
    }
    public static function emailStorageList()
    {
        return new EmailStorageListBuilder(new EmailStorageList());
    }
    public static function emailThreadList()
    {
        return new EmailThreadListBuilder(new EmailThreadList());
    }
    public static function fileVersion()
    {
        return new FileVersionBuilder(new FileVersion());
    }
    public static function linkedResource()
    {
        return new LinkedResourceBuilder(new LinkedResource());
    }
    public static function mailMessageBase64()
    {
        return new MailMessageBase64Builder(new MailMessageBase64());
    }
    public static function mailMessageBaseList()
    {
        return new MailMessageBaseListBuilder(new MailMessageBaseList());
    }
    public static function mailMessageDto()
    {
        return new MailMessageDtoBuilder(new MailMessageDto());
    }
    public static function mailMessageMapi()
    {
        return new MailMessageMapiBuilder(new MailMessageMapi());
    }
    public static function mailServerFolderList()
    {
        return new MailServerFolderListBuilder(new MailServerFolderList());
    }
    public static function mapiBinaryPropertyDto()
    {
        return new MapiBinaryPropertyDtoBuilder(new MapiBinaryPropertyDto());
    }
    public static function mapiBooleanPropertyDto()
    {
        return new MapiBooleanPropertyDtoBuilder(new MapiBooleanPropertyDto());
    }
    public static function mapiCalendarDailyRecurrencePatternDto()
    {
        return new MapiCalendarDailyRecurrencePatternDtoBuilder(new MapiCalendarDailyRecurrencePatternDto());
    }
    public static function mapiCalendarDto()
    {
        return new MapiCalendarDtoBuilder(new MapiCalendarDto());
    }
    public static function mapiCalendarSaveRequest()
    {
        return new MapiCalendarSaveRequestBuilder(new MapiCalendarSaveRequest());
    }
    public static function mapiCalendarWeeklyRecurrencePatternDto()
    {
        return new MapiCalendarWeeklyRecurrencePatternDtoBuilder(new MapiCalendarWeeklyRecurrencePatternDto());
    }
    public static function mapiCalendarYearlyAndMonthlyRecurrencePatternDto()
    {
        return new MapiCalendarYearlyAndMonthlyRecurrencePatternDtoBuilder(new MapiCalendarYearlyAndMonthlyRecurrencePatternDto());
    }
    public static function mapiContactDto()
    {
        return new MapiContactDtoBuilder(new MapiContactDto());
    }
    public static function mapiContactPhotoDto()
    {
        return new MapiContactPhotoDtoBuilder(new MapiContactPhotoDto());
    }
    public static function mapiContactSaveRequest()
    {
        return new MapiContactSaveRequestBuilder(new MapiContactSaveRequest());
    }
    public static function mapiDateTimePropertyDto()
    {
        return new MapiDateTimePropertyDtoBuilder(new MapiDateTimePropertyDto());
    }
    public static function mapiFileAsPropertyDto()
    {
        return new MapiFileAsPropertyDtoBuilder(new MapiFileAsPropertyDto());
    }
    public static function mapiImportancePropertyDto()
    {
        return new MapiImportancePropertyDtoBuilder(new MapiImportancePropertyDto());
    }
    public static function mapiIntPropertyDto()
    {
        return new MapiIntPropertyDtoBuilder(new MapiIntPropertyDto());
    }
    public static function mapiKnownPropertyDescriptor()
    {
        return new MapiKnownPropertyDescriptorBuilder(new MapiKnownPropertyDescriptor());
    }
    public static function mapiLegacyFreeBusyPropertyDto()
    {
        return new MapiLegacyFreeBusyPropertyDtoBuilder(new MapiLegacyFreeBusyPropertyDto());
    }
    public static function mapiMessageDto()
    {
        return new MapiMessageDtoBuilder(new MapiMessageDto());
    }
    public static function mapiMessageSaveRequest()
    {
        return new MapiMessageSaveRequestBuilder(new MapiMessageSaveRequest());
    }
    public static function mapiMultiIntPropertyDto()
    {
        return new MapiMultiIntPropertyDtoBuilder(new MapiMultiIntPropertyDto());
    }
    public static function mapiMultiStringPropertyDto()
    {
        return new MapiMultiStringPropertyDtoBuilder(new MapiMultiStringPropertyDto());
    }
    public static function mapiPhysicalAddressIndexPropertyDto()
    {
        return new MapiPhysicalAddressIndexPropertyDtoBuilder(new MapiPhysicalAddressIndexPropertyDto());
    }
    public static function mapiPidPropertyDescriptor()
    {
        return new MapiPidPropertyDescriptorBuilder(new MapiPidPropertyDescriptor());
    }
    public static function mapiResponseTypePropertyDto()
    {
        return new MapiResponseTypePropertyDtoBuilder(new MapiResponseTypePropertyDto());
    }
    public static function mapiStringPropertyDto()
    {
        return new MapiStringPropertyDtoBuilder(new MapiStringPropertyDto());
    }
    public static function monthlyRecurrencePatternDto()
    {
        return new MonthlyRecurrencePatternDtoBuilder(new MonthlyRecurrencePatternDto());
    }
    public static function storageFileLocation()
    {
        return new StorageFileLocationBuilder(new StorageFileLocation());
    }
    public static function storageFileLocationList()
    {
        return new StorageFileLocationListBuilder(new StorageFileLocationList());
    }
    public static function taskRegeneratingPatternDto()
    {
        return new TaskRegeneratingPatternDtoBuilder(new TaskRegeneratingPatternDto());
    }
    public static function weeklyRecurrencePatternDto()
    {
        return new WeeklyRecurrencePatternDtoBuilder(new WeeklyRecurrencePatternDto());
    }
    public static function yearlyRecurrencePatternDto()
    {
        return new YearlyRecurrencePatternDtoBuilder(new YearlyRecurrencePatternDto());
    }
    public static function clientMessageDeleteRequest()
    {
        return new ClientMessageDeleteRequestBuilder(new ClientMessageDeleteRequest());
    }
    public static function clientMessageMoveRequest()
    {
        return new ClientMessageMoveRequestBuilder(new ClientMessageMoveRequest());
    }
    public static function clientMessageSetIsReadRequest()
    {
        return new ClientMessageSetIsReadRequestBuilder(new ClientMessageSetIsReadRequest());
    }
    public static function clientThreadDeleteRequest()
    {
        return new ClientThreadDeleteRequestBuilder(new ClientThreadDeleteRequest());
    }
    public static function clientThreadMoveRequest()
    {
        return new ClientThreadMoveRequestBuilder(new ClientThreadMoveRequest());
    }
    public static function clientThreadSetIsReadRequest()
    {
        return new ClientThreadSetIsReadRequestBuilder(new ClientThreadSetIsReadRequest());
    }
    public static function mapiPidLidPropertyDescriptor()
    {
        return new MapiPidLidPropertyDescriptorBuilder(new MapiPidLidPropertyDescriptor());
    }
    public static function mapiPidNamePropertyDescriptor()
    {
        return new MapiPidNamePropertyDescriptorBuilder(new MapiPidNamePropertyDescriptor());
    }
    public static function mapiPidTagPropertyDescriptor()
    {
        return new MapiPidTagPropertyDescriptorBuilder(new MapiPidTagPropertyDescriptor());
    }
}