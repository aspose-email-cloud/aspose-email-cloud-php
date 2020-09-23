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
    /**
     * Image for recognition
     */
    public static function aiBcrImage()
    {
        return new AiBcrImageBuilder(new AiBcrImage());
    }

    /**
     * Recognition options.
     */
    public static function aiBcrOptions()
    {
        return new AiBcrOptionsBuilder(new AiBcrOptions());
    }

    /**
     * Parse business card images from Storage request
     */
    public static function aiBcrParseStorageRequest()
    {
        return new AiBcrParseStorageRequestBuilder(new AiBcrParseStorageRequest());
    }

    /**
     * Parsed name component
     */
    public static function aiNameComponent()
    {
        return new AiNameComponentBuilder(new AiNameComponent());
    }

    /**
     * AiName cultural context
     */
    public static function aiNameCulturalContext()
    {
        return new AiNameCulturalContextBuilder(new AiNameCulturalContext());
    }

    /**
     * Extracted name
     */
    public static function aiNameExtracted()
    {
        return new AiNameExtractedBuilder(new AiNameExtracted());
    }

    /**
     * Extracted name component
     */
    public static function aiNameExtractedComponent()
    {
        return new AiNameExtractedComponentBuilder(new AiNameExtractedComponent());
    }

    /**
     * Formatted name
     */
    public static function aiNameFormatted()
    {
        return new AiNameFormattedBuilder(new AiNameFormatted());
    }

    /**
     * Name gender hypothesis
     */
    public static function aiNameGenderHypothesis()
    {
        return new AiNameGenderHypothesisBuilder(new AiNameGenderHypothesis());
    }

    /**
     * Two names match result
     */
    public static function aiNameMatchResult()
    {
        return new AiNameMatchResultBuilder(new AiNameMatchResult());
    }

    /**
     * Names mismatch detailed description
     */
    public static function aiNameMismatch()
    {
        return new AiNameMismatchBuilder(new AiNameMismatch());
    }

    /**
     * Parsed name request model
     */
    public static function aiNameParsedRequest()
    {
        return new AiNameParsedRequestBuilder(new AiNameParsedRequest());
    }

    /**
     * Name with score
     */
    public static function aiNameWeighted()
    {
        return new AiNameWeightedBuilder(new AiNameWeighted());
    }

    /**
     * Name variants
     */
    public static function aiNameWeightedVariants()
    {
        return new AiNameWeightedVariantsBuilder(new AiNameWeightedVariants());
    }

    /**
     * Describes associated person.
     */
    public static function associatedPerson()
    {
        return new AssociatedPersonBuilder(new AssociatedPerson());
    }

    /**
     * AttachmentBase class
     */
    public static function attachmentBase()
    {
        return new AttachmentBaseBuilder(new AttachmentBase());
    }

    /**
     * Convert iCalendar to AlternateView request
     */
    public static function calendarAsAlternateRequest()
    {
        return new CalendarAsAlternateRequestBuilder(new CalendarAsAlternateRequest());
    }

    /**
     * iCalendar model to file request.
     */
    public static function calendarAsFileRequest()
    {
        return new CalendarAsFileRequestBuilder(new CalendarAsFileRequest());
    }

    /**
     * iCalendar document representation.
     */
    public static function calendarDto()
    {
        return new CalendarDtoBuilder(new CalendarDto());
    }

    /**
     * Provides a grouping of component properties that define an alarm.
     */
    public static function calendarReminder()
    {
        return new CalendarReminderBuilder(new CalendarReminder());
    }

    /**
     * Base request for Email client. Stores information about email account location.
     */
    public static function clientAccountBaseRequest()
    {
        return new ClientAccountBaseRequestBuilder(new ClientAccountBaseRequest());
    }

    /**
     * Convert contact model to file request.
     */
    public static function contactAsFileRequest()
    {
        return new ContactAsFileRequestBuilder(new ContactAsFileRequest());
    }

    /**
     * VCard document representation.
     */
    public static function contactDto()
    {
        return new ContactDtoBuilder(new ContactDto());
    }

    /**
     * Person&#39;s photo.
     */
    public static function contactPhoto()
    {
        return new ContactPhotoBuilder(new ContactPhoto());
    }

    /**
     * Represents a Content-Type header.
     */
    public static function contentType()
    {
        return new ContentTypeBuilder(new ContentType());
    }

    /**
     * Content-Type header parameter
     */
    public static function contentTypeParameter()
    {
        return new ContentTypeParameterBuilder(new ContentTypeParameter());
    }

    /**
     * Event.
     */
    public static function customerEvent()
    {
        return new CustomerEventBuilder(new CustomerEvent());
    }

    /**
     * Class for disc space information.
     */
    public static function discUsage()
    {
        return new DiscUsageBuilder(new DiscUsage());
    }

    /**
     * Discover email configuration request.
     */
    public static function discoverEmailConfigRequest()
    {
        return new DiscoverEmailConfigRequestBuilder(new DiscoverEmailConfigRequest());
    }

    /**
     * Email account configuration.
     */
    public static function emailAccountConfig()
    {
        return new EmailAccountConfigBuilder(new EmailAccountConfig());
    }

    /**
     * Email address.
     */
    public static function emailAddress()
    {
        return new EmailAddressBuilder(new EmailAddress());
    }

    /**
     * Convert email model to file request.
     */
    public static function emailAsFileRequest()
    {
        return new EmailAsFileRequestBuilder(new EmailAsFileRequest());
    }

    /**
     * A universal email client account
     */
    public static function emailClientAccount()
    {
        return new EmailClientAccountBuilder(new EmailClientAccount());
    }

    /**
     * Represents email client account credentials
     */
    public static function emailClientAccountCredentials()
    {
        return new EmailClientAccountCredentialsBuilder(new EmailClientAccountCredentials());
    }

    /**
     * Email client virtual account, which contains several accounts
     */
    public static function emailClientMultiAccount()
    {
        return new EmailClientMultiAccountBuilder(new EmailClientMultiAccount());
    }

    /**
     * Email message representation.
     */
    public static function emailDto()
    {
        return new EmailDtoBuilder(new EmailDto());
    }

    /**
     * Email messages thread
     */
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

    /**
     * Error
     */
    public static function error()
    {
        return new ErrorBuilder(new Error());
    }

    /**
     * The error details
     */
    public static function errorDetails()
    {
        return new ErrorDetailsBuilder(new ErrorDetails());
    }

    /**
     * File versions FileVersion.
     */
    public static function fileVersions()
    {
        return new FileVersionsBuilder(new FileVersions());
    }

    /**
     * Files list
     */
    public static function filesList()
    {
        return new FilesListBuilder(new FilesList());
    }

    /**
     * File upload result
     */
    public static function filesUploadResult()
    {
        return new FilesUploadResultBuilder(new FilesUploadResult());
    }

    /**
     * Instant messenger address.
     */
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

    /**
     * Represents the address of a message.
     */
    public static function mailAddress()
    {
        return new MailAddressBuilder(new MailAddress());
    }

    /**
     * Universal object that stores email messages in different formats.
     */
    public static function mailMessageBase()
    {
        return new MailMessageBaseBuilder(new MailMessageBase());
    }

    /**
     * Email account folder
     */
    public static function mailServerFolder()
    {
        return new MailServerFolderBuilder(new MailServerFolder());
    }

    /**
     * Mapi attachment
     */
    public static function mapiAttachmentDto()
    {
        return new MapiAttachmentDtoBuilder(new MapiAttachmentDto());
    }

    /**
     * Convert MapiCalendar to file request.
     */
    public static function mapiCalendarAsFileRequest()
    {
        return new MapiCalendarAsFileRequestBuilder(new MapiCalendarAsFileRequest());
    }

    /**
     * Mapi calendar attendees.
     */
    public static function mapiCalendarAttendeesDto()
    {
        return new MapiCalendarAttendeesDtoBuilder(new MapiCalendarAttendeesDto());
    }

    /**
     * Recurrence properties of calendar object.
     */
    public static function mapiCalendarEventRecurrenceDto()
    {
        return new MapiCalendarEventRecurrenceDtoBuilder(new MapiCalendarEventRecurrenceDto());
    }

    /**
     * An exception specifies changes to an instance of a recurring series.
     */
    public static function mapiCalendarExceptionInfoDto()
    {
        return new MapiCalendarExceptionInfoDtoBuilder(new MapiCalendarExceptionInfoDto());
    }

    /**
     * Mapi recurrence pattern.
     */
    public static function mapiCalendarRecurrencePatternDto()
    {
        return new MapiCalendarRecurrencePatternDtoBuilder(new MapiCalendarRecurrencePatternDto());
    }

    /**
     * Represents the mapi calendar time zone information.
     */
    public static function mapiCalendarTimeZoneDto()
    {
        return new MapiCalendarTimeZoneDtoBuilder(new MapiCalendarTimeZoneDto());
    }

    /**
     * Represents the mapi calendar time zone rule.
     */
    public static function mapiCalendarTimeZoneInfoDto()
    {
        return new MapiCalendarTimeZoneInfoDtoBuilder(new MapiCalendarTimeZoneInfoDto());
    }

    /**
     * Represents time zone rule that indicate when to begin using the Standard/Daylight time.
     */
    public static function mapiCalendarTimeZoneRuleDto()
    {
        return new MapiCalendarTimeZoneRuleDtoBuilder(new MapiCalendarTimeZoneRuleDto());
    }

    /**
     * Convert MapiContact to file request.
     */
    public static function mapiContactAsFileRequest()
    {
        return new MapiContactAsFileRequestBuilder(new MapiContactAsFileRequest());
    }

    /**
     * Refers to the group of properties that define the e-mail address or fax address for a contact.
     */
    public static function mapiContactElectronicAddressDto()
    {
        return new MapiContactElectronicAddressDtoBuilder(new MapiContactElectronicAddressDto());
    }

    /**
     * Specify properties for up to three different e-mail addresses (Email1, Email2, and Email3) and three different fax addresses (Primary Fax, Business Fax, and Home Fax)
     */
    public static function mapiContactElectronicAddressPropertySetDto()
    {
        return new MapiContactElectronicAddressPropertySetDtoBuilder(new MapiContactElectronicAddressPropertySetDto());
    }

    /**
     * Specify events associated with a contact.
     */
    public static function mapiContactEventPropertySetDto()
    {
        return new MapiContactEventPropertySetDtoBuilder(new MapiContactEventPropertySetDto());
    }

    /**
     * The properties are used to specify the name of the person represented by the contact
     */
    public static function mapiContactNamePropertySetDto()
    {
        return new MapiContactNamePropertySetDtoBuilder(new MapiContactNamePropertySetDto());
    }

    /**
     * The properties are used to specify additional properties of contact.
     */
    public static function mapiContactOtherPropertySetDto()
    {
        return new MapiContactOtherPropertySetDtoBuilder(new MapiContactOtherPropertySetDto());
    }

    /**
     * Specify other additional contact information.
     */
    public static function mapiContactPersonalInfoPropertySetDto()
    {
        return new MapiContactPersonalInfoPropertySetDtoBuilder(new MapiContactPersonalInfoPropertySetDto());
    }

    /**
     * Refers to the group of properties that define physical address for a contact.
     */
    public static function mapiContactPhysicalAddressDto()
    {
        return new MapiContactPhysicalAddressDtoBuilder(new MapiContactPhysicalAddressDto());
    }

    /**
     * Specify three physical addresses: Home Address, Work Address, and Other Address. One of the addresses can be marked as the Mailing Address
     */
    public static function mapiContactPhysicalAddressPropertySetDto()
    {
        return new MapiContactPhysicalAddressPropertySetDtoBuilder(new MapiContactPhysicalAddressPropertySetDto());
    }

    /**
     * Properties are used to store professional details for the person represented by the contact
     */
    public static function mapiContactProfessionalPropertySetDto()
    {
        return new MapiContactProfessionalPropertySetDtoBuilder(new MapiContactProfessionalPropertySetDto());
    }

    /**
     * Specify optional telephone numbers for the contact.
     */
    public static function mapiContactTelephonePropertySetDto()
    {
        return new MapiContactTelephonePropertySetDtoBuilder(new MapiContactTelephonePropertySetDto());
    }

    /**
     * Refers to the group of properties that define the e-mail address or fax address.
     */
    public static function mapiElectronicAddressDto()
    {
        return new MapiElectronicAddressDtoBuilder(new MapiElectronicAddressDto());
    }

    /**
     * Convert MapiMessage to file request.
     */
    public static function mapiMessageAsFileRequest()
    {
        return new MapiMessageAsFileRequestBuilder(new MapiMessageAsFileRequest());
    }

    /**
     * Base Dto for MapiMessage, MapiCalendar or MapiContact
     */
    public static function mapiMessageItemBaseDto()
    {
        return new MapiMessageItemBaseDtoBuilder(new MapiMessageItemBaseDto());
    }

    /**
     * Mapi property descriptor
     */
    public static function mapiPropertyDescriptor()
    {
        return new MapiPropertyDescriptorBuilder(new MapiPropertyDescriptor());
    }

    /**
     * Mapi property
     */
    public static function mapiPropertyDto()
    {
        return new MapiPropertyDtoBuilder(new MapiPropertyDto());
    }

    /**
     * Represents the recipient information in the Microsoft Outlook Message.
     */
    public static function mapiRecipientDto()
    {
        return new MapiRecipientDtoBuilder(new MapiRecipientDto());
    }

    /**
     * Name-Value property
     */
    public static function nameValuePair()
    {
        return new NameValuePairBuilder(new NameValuePair());
    }

    /**
     * Object exists
     */
    public static function objectExist()
    {
        return new ObjectExistBuilder(new ObjectExist());
    }

    /**
     * A phone number.
     */
    public static function phoneNumber()
    {
        return new PhoneNumberBuilder(new PhoneNumber());
    }

    /**
     * A postal address
     */
    public static function postalAddress()
    {
        return new PostalAddressBuilder(new PostalAddress());
    }

    /**
     * iCalendar recurrence pattern.
     */
    public static function recurrencePatternDto()
    {
        return new RecurrencePatternDtoBuilder(new RecurrencePatternDto());
    }

    /**
     * Defines an \&quot;Attendee\&quot; within a alarm.
     */
    public static function reminderAttendee()
    {
        return new ReminderAttendeeBuilder(new ReminderAttendee());
    }

    /**
     * Specifies when an alarm will trigger.
     */
    public static function reminderTrigger()
    {
        return new ReminderTriggerBuilder(new ReminderTrigger());
    }

    /**
     * Storage exists
     */
    public static function storageExist()
    {
        return new StorageExistBuilder(new StorageExist());
    }

    /**
     * File or folder information
     */
    public static function storageFile()
    {
        return new StorageFileBuilder(new StorageFile());
    }

    /**
     * A storage folder location information
     */
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

    /**
     * Url and its category.
     */
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

    /**
     * Image from storage for recognition
     */
    public static function aiBcrImageStorageFile()
    {
        return new AiBcrImageStorageFileBuilder(new AiBcrImageStorageFile());
    }

    /**
     * List of name components
     */
    public static function aiNameComponentList()
    {
        return new AiNameComponentListBuilder(new AiNameComponentList());
    }

    /**
     * Extracted name list.
     */
    public static function aiNameExtractedList()
    {
        return new AiNameExtractedListBuilder(new AiNameExtractedList());
    }

    /**
     * Hypotheses about person&#39;s gender
     */
    public static function aiNameGenderHypothesisList()
    {
        return new AiNameGenderHypothesisListBuilder(new AiNameGenderHypothesisList());
    }

    /**
     * Two parsed names to match request
     */
    public static function aiNameMatchParsedRequest()
    {
        return new AiNameMatchParsedRequestBuilder(new AiNameMatchParsedRequest());
    }

    /**
     * Represents the format to view a message.
     */
    public static function alternateView()
    {
        return new AlternateViewBuilder(new AlternateView());
    }

    /**
     * Document attachment.
     */
    public static function attachment()
    {
        return new AttachmentBuilder(new Attachment());
    }

    /**
     * Save iCalendar to storage request.
     */
    public static function calendarSaveRequest()
    {
        return new CalendarSaveRequestBuilder(new CalendarSaveRequest());
    }

    /**
     * iCalendar models list with corresponding storage locations.
     */
    public static function calendarStorageList()
    {
        return new CalendarStorageListBuilder(new CalendarStorageList());
    }

    /**
     * Email client multi account save request.
     */
    public static function clientAccountSaveMultiRequest()
    {
        return new ClientAccountSaveMultiRequestBuilder(new ClientAccountSaveMultiRequest());
    }

    /**
     * Email client account save request
     */
    public static function clientAccountSaveRequest()
    {
        return new ClientAccountSaveRequestBuilder(new ClientAccountSaveRequest());
    }

    /**
     * Email Client create folder request.
     */
    public static function clientFolderCreateRequest()
    {
        return new ClientFolderCreateRequestBuilder(new ClientFolderCreateRequest());
    }

    /**
     * Email client delete folder request.
     */
    public static function clientFolderDeleteRequest()
    {
        return new ClientFolderDeleteRequestBuilder(new ClientFolderDeleteRequest());
    }

    /**
     * Email client append message request.
     */
    public static function clientMessageAppendRequest()
    {
        return new ClientMessageAppendRequestBuilder(new ClientMessageAppendRequest());
    }

    /**
     * Email client message request.
     */
    public static function clientMessageBaseRequest()
    {
        return new ClientMessageBaseRequestBuilder(new ClientMessageBaseRequest());
    }

    /**
     * Email client send message request.
     */
    public static function clientMessageSendRequest()
    {
        return new ClientMessageSendRequestBuilder(new ClientMessageSendRequest());
    }

    /**
     * Email client thread request.
     */
    public static function clientThreadBaseRequest()
    {
        return new ClientThreadBaseRequestBuilder(new ClientThreadBaseRequest());
    }

    /**
     * List of VCard documents
     */
    public static function contactList()
    {
        return new ContactListBuilder(new ContactList());
    }

    /**
     * Contact save to storage request
     */
    public static function contactSaveRequest()
    {
        return new ContactSaveRequestBuilder(new ContactSaveRequest());
    }

    /**
     * Contact models list with corresponding storage locations.
     */
    public static function contactStorageList()
    {
        return new ContactStorageListBuilder(new ContactStorageList());
    }

    /**
     * Daily recurrence.
     */
    public static function dailyRecurrencePatternDto()
    {
        return new DailyRecurrencePatternDtoBuilder(new DailyRecurrencePatternDto());
    }

    /**
     * List of email accounts
     */
    public static function emailAccountConfigList()
    {
        return new EmailAccountConfigListBuilder(new EmailAccountConfigList());
    }

    /**
     * Represents email client account OAuth 2.0 credentials
     */
    public static function emailClientAccountOauthCredentials()
    {
        return new EmailClientAccountOauthCredentialsBuilder(new EmailClientAccountOauthCredentials());
    }

    /**
     * Represents email client account password credentials
     */
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

    /**
     * Email document list.
     */
    public static function emailList()
    {
        return new EmailListBuilder(new EmailList());
    }

    /**
     * Email save to storage request
     */
    public static function emailSaveRequest()
    {
        return new EmailSaveRequestBuilder(new EmailSaveRequest());
    }

    /**
     * Email models list with corresponding storage locations.
     */
    public static function emailStorageList()
    {
        return new EmailStorageListBuilder(new EmailStorageList());
    }

    /**
     * List of email threads
     */
    public static function emailThreadList()
    {
        return new EmailThreadListBuilder(new EmailThreadList());
    }

    /**
     * File Version
     */
    public static function fileVersion()
    {
        return new FileVersionBuilder(new FileVersion());
    }

    /**
     * Represents an embedded resource in a message.
     */
    public static function linkedResource()
    {
        return new LinkedResourceBuilder(new LinkedResource());
    }

    /**
     * Email message represented as file, encoded to Base64 format.
     */
    public static function mailMessageBase64()
    {
        return new MailMessageBase64Builder(new MailMessageBase64());
    }

    /**
     * List of messages.
     */
    public static function mailMessageBaseList()
    {
        return new MailMessageBaseListBuilder(new MailMessageBaseList());
    }

    /**
     * Represents email message, stored as an EmailDto object.
     */
    public static function mailMessageDto()
    {
        return new MailMessageDtoBuilder(new MailMessageDto());
    }

    /**
     * Email message represented as MAPI object.
     */
    public static function mailMessageMapi()
    {
        return new MailMessageMapiBuilder(new MailMessageMapi());
    }

    /**
     * List of email client folders.
     */
    public static function mailServerFolderList()
    {
        return new MailServerFolderListBuilder(new MailServerFolderList());
    }

    /**
     * Mapi property with Binary value represented as a Base64 string
     */
    public static function mapiBinaryPropertyDto()
    {
        return new MapiBinaryPropertyDtoBuilder(new MapiBinaryPropertyDto());
    }

    /**
     * Mapi property with Boolean value
     */
    public static function mapiBooleanPropertyDto()
    {
        return new MapiBooleanPropertyDtoBuilder(new MapiBooleanPropertyDto());
    }

    /**
     * Represents the daily recurrence pattern of the mapi calendar.
     */
    public static function mapiCalendarDailyRecurrencePatternDto()
    {
        return new MapiCalendarDailyRecurrencePatternDtoBuilder(new MapiCalendarDailyRecurrencePatternDto());
    }

    /**
     * Represents the mapi calendar object
     */
    public static function mapiCalendarDto()
    {
        return new MapiCalendarDtoBuilder(new MapiCalendarDto());
    }

    /**
     * Save MapiCalendar to storage request.
     */
    public static function mapiCalendarSaveRequest()
    {
        return new MapiCalendarSaveRequestBuilder(new MapiCalendarSaveRequest());
    }

    /**
     * Represents the weekly recurrence pattern of the mapi calendar
     */
    public static function mapiCalendarWeeklyRecurrencePatternDto()
    {
        return new MapiCalendarWeeklyRecurrencePatternDtoBuilder(new MapiCalendarWeeklyRecurrencePatternDto());
    }

    /**
     * Represents the yearly and monthly recurrence pattern of the mapi calendar
     */
    public static function mapiCalendarYearlyAndMonthlyRecurrencePatternDto()
    {
        return new MapiCalendarYearlyAndMonthlyRecurrencePatternDtoBuilder(new MapiCalendarYearlyAndMonthlyRecurrencePatternDto());
    }

    /**
     * Represents outlook contact information.
     */
    public static function mapiContactDto()
    {
        return new MapiContactDtoBuilder(new MapiContactDto());
    }

    /**
     * Contains data and type of contact&#39;s photo.
     */
    public static function mapiContactPhotoDto()
    {
        return new MapiContactPhotoDtoBuilder(new MapiContactPhotoDto());
    }

    /**
     * MapiContact save to storage request.
     */
    public static function mapiContactSaveRequest()
    {
        return new MapiContactSaveRequestBuilder(new MapiContactSaveRequest());
    }

    /**
     * Mapi property with DateTime value
     */
    public static function mapiDateTimePropertyDto()
    {
        return new MapiDateTimePropertyDtoBuilder(new MapiDateTimePropertyDto());
    }

    /**
     * Mapi property with FileAsMapping value
     */
    public static function mapiFileAsPropertyDto()
    {
        return new MapiFileAsPropertyDtoBuilder(new MapiFileAsPropertyDto());
    }

    /**
     * Mapi property with ImportanceChoicesType value
     */
    public static function mapiImportancePropertyDto()
    {
        return new MapiImportancePropertyDtoBuilder(new MapiImportancePropertyDto());
    }

    /**
     * Mapi property with Integer value
     */
    public static function mapiIntPropertyDto()
    {
        return new MapiIntPropertyDtoBuilder(new MapiIntPropertyDto());
    }

    /**
     * Known Mapi Property descriptor
     */
    public static function mapiKnownPropertyDescriptor()
    {
        return new MapiKnownPropertyDescriptorBuilder(new MapiKnownPropertyDescriptor());
    }

    /**
     * Mapi property with LegacyFreeBusyType value
     */
    public static function mapiLegacyFreeBusyPropertyDto()
    {
        return new MapiLegacyFreeBusyPropertyDtoBuilder(new MapiLegacyFreeBusyPropertyDto());
    }

    /**
     * Represents an Outlook Message format document.
     */
    public static function mapiMessageDto()
    {
        return new MapiMessageDtoBuilder(new MapiMessageDto());
    }

    /**
     * MapiMessage save to storage request.
     */
    public static function mapiMessageSaveRequest()
    {
        return new MapiMessageSaveRequestBuilder(new MapiMessageSaveRequest());
    }

    /**
     * Mapi property with Multiple Integer values
     */
    public static function mapiMultiIntPropertyDto()
    {
        return new MapiMultiIntPropertyDtoBuilder(new MapiMultiIntPropertyDto());
    }

    /**
     * Mapi property with Multiple String values
     */
    public static function mapiMultiStringPropertyDto()
    {
        return new MapiMultiStringPropertyDtoBuilder(new MapiMultiStringPropertyDto());
    }

    /**
     * Mapi property with PhysicalAddressIndexType value
     */
    public static function mapiPhysicalAddressIndexPropertyDto()
    {
        return new MapiPhysicalAddressIndexPropertyDtoBuilder(new MapiPhysicalAddressIndexPropertyDto());
    }

    /**
     * Mapi pid property descriptor base class
     */
    public static function mapiPidPropertyDescriptor()
    {
        return new MapiPidPropertyDescriptorBuilder(new MapiPidPropertyDescriptor());
    }

    /**
     * Mapi property with response type value
     */
    public static function mapiResponseTypePropertyDto()
    {
        return new MapiResponseTypePropertyDtoBuilder(new MapiResponseTypePropertyDto());
    }

    /**
     * Mapi property with string value
     */
    public static function mapiStringPropertyDto()
    {
        return new MapiStringPropertyDtoBuilder(new MapiStringPropertyDto());
    }

    /**
     * Monthly recurrence pattern.
     */
    public static function monthlyRecurrencePatternDto()
    {
        return new MonthlyRecurrencePatternDtoBuilder(new MonthlyRecurrencePatternDto());
    }

    /**
     * A storage file location information
     */
    public static function storageFileLocation()
    {
        return new StorageFileLocationBuilder(new StorageFileLocation());
    }

    /**
     * List of files located on storage.
     */
    public static function storageFileLocationList()
    {
        return new StorageFileLocationListBuilder(new StorageFileLocationList());
    }

    /**
     * Represents the regenerating recurrence pattern that specifies how many days, weeks, months or years after the completion of the current task the next occurrence will be due.
     */
    public static function taskRegeneratingPatternDto()
    {
        return new TaskRegeneratingPatternDtoBuilder(new TaskRegeneratingPatternDto());
    }

    /**
     * Weekly recurrence pattern.
     */
    public static function weeklyRecurrencePatternDto()
    {
        return new WeeklyRecurrencePatternDtoBuilder(new WeeklyRecurrencePatternDto());
    }

    /**
     * Yearly recurrence pattern.
     */
    public static function yearlyRecurrencePatternDto()
    {
        return new YearlyRecurrencePatternDtoBuilder(new YearlyRecurrencePatternDto());
    }

    /**
     * Email client delete message request.
     */
    public static function clientMessageDeleteRequest()
    {
        return new ClientMessageDeleteRequestBuilder(new ClientMessageDeleteRequest());
    }

    /**
     * Email client move message request.
     */
    public static function clientMessageMoveRequest()
    {
        return new ClientMessageMoveRequestBuilder(new ClientMessageMoveRequest());
    }

    /**
     * Email client mark message is read/unread request.
     */
    public static function clientMessageSetIsReadRequest()
    {
        return new ClientMessageSetIsReadRequestBuilder(new ClientMessageSetIsReadRequest());
    }

    /**
     * Delete email client thread request.
     */
    public static function clientThreadDeleteRequest()
    {
        return new ClientThreadDeleteRequestBuilder(new ClientThreadDeleteRequest());
    }

    /**
     * Email client move thread request.
     */
    public static function clientThreadMoveRequest()
    {
        return new ClientThreadMoveRequestBuilder(new ClientThreadMoveRequest());
    }

    /**
     * Mark thread messages as read or unread request.
     */
    public static function clientThreadSetIsReadRequest()
    {
        return new ClientThreadSetIsReadRequestBuilder(new ClientThreadSetIsReadRequest());
    }

    /**
     * Property identified by an unsigned 32-bit quantity along with a property set
     */
    public static function mapiPidLidPropertyDescriptor()
    {
        return new MapiPidLidPropertyDescriptorBuilder(new MapiPidLidPropertyDescriptor());
    }

    /**
     * Property identified by a string name along with a property set
     */
    public static function mapiPidNamePropertyDescriptor()
    {
        return new MapiPidNamePropertyDescriptorBuilder(new MapiPidNamePropertyDescriptor());
    }

    /**
     * A property that is defined by a 16-bit property ID and a 16-bit property type. The property ID for a tagged property is in the range 0x001 - 0x7FFF. Property IDs in the range 0x8000 - 0x8FFF are reserved for assignment to named properties
     */
    public static function mapiPidTagPropertyDescriptor()
    {
        return new MapiPidTagPropertyDescriptorBuilder(new MapiPidTagPropertyDescriptor());
    }

    /**
     * Request model for AiBcrApi::parse operation.
     */
    public static function aiBcrParseRequest()
    {
        return new AiBcrParseRequestBuilder(new AiBcrParseRequest());
    }

    /**
     * Request model for AiNameApi::complete operation.
     */
    public static function aiNameCompleteRequest()
    {
        return new AiNameCompleteRequestBuilder(new AiNameCompleteRequest());
    }

    /**
     * Request model for AiNameApi::expand operation.
     */
    public static function aiNameExpandRequest()
    {
        return new AiNameExpandRequestBuilder(new AiNameExpandRequest());
    }

    /**
     * Request model for AiNameApi::format operation.
     */
    public static function aiNameFormatRequest()
    {
        return new AiNameFormatRequestBuilder(new AiNameFormatRequest());
    }

    /**
     * Request model for AiNameApi::genderize operation.
     */
    public static function aiNameGenderizeRequest()
    {
        return new AiNameGenderizeRequestBuilder(new AiNameGenderizeRequest());
    }

    /**
     * Request model for AiNameApi::match operation.
     */
    public static function aiNameMatchRequest()
    {
        return new AiNameMatchRequestBuilder(new AiNameMatchRequest());
    }

    /**
     * Request model for AiNameApi::parse operation.
     */
    public static function aiNameParseRequest()
    {
        return new AiNameParseRequestBuilder(new AiNameParseRequest());
    }

    /**
     * Request model for AiNameApi::parseEmailAddress operation.
     */
    public static function aiNameParseEmailAddressRequest()
    {
        return new AiNameParseEmailAddressRequestBuilder(new AiNameParseEmailAddressRequest());
    }
    /**
     * Request model for CalendarApi::convert operation.
     */
    public static function calendarConvertRequest()
    {
        return new CalendarConvertRequestBuilder(new CalendarConvertRequest());
    }

    /**
     * Request model for CalendarApi::fromFile operation.
     */
    public static function calendarFromFileRequest()
    {
        return new CalendarFromFileRequestBuilder(new CalendarFromFileRequest());
    }

    /**
     * Request model for CalendarApi::get operation.
     */
    public static function calendarGetRequest()
    {
        return new CalendarGetRequestBuilder(new CalendarGetRequest());
    }

    /**
     * Request model for CalendarApi::getAsAlternate operation.
     */
    public static function calendarGetAsAlternateRequest()
    {
        return new CalendarGetAsAlternateRequestBuilder(new CalendarGetAsAlternateRequest());
    }

    /**
     * Request model for CalendarApi::getAsFile operation.
     */
    public static function calendarGetAsFileRequest()
    {
        return new CalendarGetAsFileRequestBuilder(new CalendarGetAsFileRequest());
    }

    /**
     * Request model for CalendarApi::getList operation.
     */
    public static function calendarGetListRequest()
    {
        return new CalendarGetListRequestBuilder(new CalendarGetListRequest());
    }

    /**
     * Request model for ClientAccountApi::get operation.
     */
    public static function clientAccountGetRequest()
    {
        return new ClientAccountGetRequestBuilder(new ClientAccountGetRequest());
    }

    /**
     * Request model for ClientAccountApi::getMulti operation.
     */
    public static function clientAccountGetMultiRequest()
    {
        return new ClientAccountGetMultiRequestBuilder(new ClientAccountGetMultiRequest());
    }

    /**
     * Request model for ClientFolderApi::getList operation.
     */
    public static function clientFolderGetListRequest()
    {
        return new ClientFolderGetListRequestBuilder(new ClientFolderGetListRequest());
    }
    /**
     * Request model for ClientMessageApi::appendFile operation.
     */
    public static function clientMessageAppendFileRequest()
    {
        return new ClientMessageAppendFileRequestBuilder(new ClientMessageAppendFileRequest());
    }

    /**
     * Request model for ClientMessageApi::fetch operation.
     */
    public static function clientMessageFetchRequest()
    {
        return new ClientMessageFetchRequestBuilder(new ClientMessageFetchRequest());
    }

    /**
     * Request model for ClientMessageApi::fetchFile operation.
     */
    public static function clientMessageFetchFileRequest()
    {
        return new ClientMessageFetchFileRequestBuilder(new ClientMessageFetchFileRequest());
    }

    /**
     * Request model for ClientMessageApi::list operation.
     */
    public static function clientMessageListRequest()
    {
        return new ClientMessageListRequestBuilder(new ClientMessageListRequest());
    }

    /**
     * Request model for ClientMessageApi::sendFile operation.
     */
    public static function clientMessageSendFileRequest()
    {
        return new ClientMessageSendFileRequestBuilder(new ClientMessageSendFileRequest());
    }

    /**
     * Request model for ClientThreadApi::getList operation.
     */
    public static function clientThreadGetListRequest()
    {
        return new ClientThreadGetListRequestBuilder(new ClientThreadGetListRequest());
    }

    /**
     * Request model for ClientThreadApi::getMessages operation.
     */
    public static function clientThreadGetMessagesRequest()
    {
        return new ClientThreadGetMessagesRequestBuilder(new ClientThreadGetMessagesRequest());
    }

    /**
     * Request model for ContactApi::convert operation.
     */
    public static function contactConvertRequest()
    {
        return new ContactConvertRequestBuilder(new ContactConvertRequest());
    }

    /**
     * Request model for ContactApi::fromFile operation.
     */
    public static function contactFromFileRequest()
    {
        return new ContactFromFileRequestBuilder(new ContactFromFileRequest());
    }

    /**
     * Request model for ContactApi::get operation.
     */
    public static function contactGetRequest()
    {
        return new ContactGetRequestBuilder(new ContactGetRequest());
    }

    /**
     * Request model for ContactApi::getAsFile operation.
     */
    public static function contactGetAsFileRequest()
    {
        return new ContactGetAsFileRequestBuilder(new ContactGetAsFileRequest());
    }

    /**
     * Request model for ContactApi::getList operation.
     */
    public static function contactGetListRequest()
    {
        return new ContactGetListRequestBuilder(new ContactGetListRequest());
    }

    /**
     * Request model for DisposableEmailApi::isDisposable operation.
     */
    public static function disposableEmailIsDisposableRequest()
    {
        return new DisposableEmailIsDisposableRequestBuilder(new DisposableEmailIsDisposableRequest());
    }
    /**
     * Request model for EmailApi::convert operation.
     */
    public static function emailConvertRequest()
    {
        return new EmailConvertRequestBuilder(new EmailConvertRequest());
    }

    /**
     * Request model for EmailApi::fromFile operation.
     */
    public static function emailFromFileRequest()
    {
        return new EmailFromFileRequestBuilder(new EmailFromFileRequest());
    }

    /**
     * Request model for EmailApi::get operation.
     */
    public static function emailGetRequest()
    {
        return new EmailGetRequestBuilder(new EmailGetRequest());
    }

    /**
     * Request model for EmailApi::getAsFile operation.
     */
    public static function emailGetAsFileRequest()
    {
        return new EmailGetAsFileRequestBuilder(new EmailGetAsFileRequest());
    }

    /**
     * Request model for EmailApi::getList operation.
     */
    public static function emailGetListRequest()
    {
        return new EmailGetListRequestBuilder(new EmailGetListRequest());
    }

    /**
     * Request model for EmailConfigApi::discover operation.
     */
    public static function emailConfigDiscoverRequest()
    {
        return new EmailConfigDiscoverRequestBuilder(new EmailConfigDiscoverRequest());
    }

    /**
     * Request model for FileApi::copyFile operation.
     */
    public static function copyFileRequest()
    {
        return new CopyFileRequestBuilder(new CopyFileRequest());
    }

    /**
     * Request model for FileApi::deleteFile operation.
     */
    public static function deleteFileRequest()
    {
        return new DeleteFileRequestBuilder(new DeleteFileRequest());
    }

    /**
     * Request model for FileApi::downloadFile operation.
     */
    public static function downloadFileRequest()
    {
        return new DownloadFileRequestBuilder(new DownloadFileRequest());
    }

    /**
     * Request model for FileApi::moveFile operation.
     */
    public static function moveFileRequest()
    {
        return new MoveFileRequestBuilder(new MoveFileRequest());
    }

    /**
     * Request model for FileApi::uploadFile operation.
     */
    public static function uploadFileRequest()
    {
        return new UploadFileRequestBuilder(new UploadFileRequest());
    }
    /**
     * Request model for FolderApi::copyFolder operation.
     */
    public static function copyFolderRequest()
    {
        return new CopyFolderRequestBuilder(new CopyFolderRequest());
    }

    /**
     * Request model for FolderApi::createFolder operation.
     */
    public static function createFolderRequest()
    {
        return new CreateFolderRequestBuilder(new CreateFolderRequest());
    }

    /**
     * Request model for FolderApi::deleteFolder operation.
     */
    public static function deleteFolderRequest()
    {
        return new DeleteFolderRequestBuilder(new DeleteFolderRequest());
    }

    /**
     * Request model for FolderApi::getFilesList operation.
     */
    public static function getFilesListRequest()
    {
        return new GetFilesListRequestBuilder(new GetFilesListRequest());
    }

    /**
     * Request model for FolderApi::moveFolder operation.
     */
    public static function moveFolderRequest()
    {
        return new MoveFolderRequestBuilder(new MoveFolderRequest());
    }
    /**
     * Request model for MapiCalendarApi::fromFile operation.
     */
    public static function mapiCalendarFromFileRequest()
    {
        return new MapiCalendarFromFileRequestBuilder(new MapiCalendarFromFileRequest());
    }

    /**
     * Request model for MapiCalendarApi::get operation.
     */
    public static function mapiCalendarGetRequest()
    {
        return new MapiCalendarGetRequestBuilder(new MapiCalendarGetRequest());
    }

    /**
     * Request model for MapiContactApi::fromFile operation.
     */
    public static function mapiContactFromFileRequest()
    {
        return new MapiContactFromFileRequestBuilder(new MapiContactFromFileRequest());
    }

    /**
     * Request model for MapiContactApi::get operation.
     */
    public static function mapiContactGetRequest()
    {
        return new MapiContactGetRequestBuilder(new MapiContactGetRequest());
    }

    /**
     * Request model for MapiMessageApi::fromFile operation.
     */
    public static function mapiMessageFromFileRequest()
    {
        return new MapiMessageFromFileRequestBuilder(new MapiMessageFromFileRequest());
    }

    /**
     * Request model for MapiMessageApi::get operation.
     */
    public static function mapiMessageGetRequest()
    {
        return new MapiMessageGetRequestBuilder(new MapiMessageGetRequest());
    }

    /**
     * Request model for StorageApi::getDiscUsage operation.
     */
    public static function getDiscUsageRequest()
    {
        return new GetDiscUsageRequestBuilder(new GetDiscUsageRequest());
    }

    /**
     * Request model for StorageApi::getFileVersions operation.
     */
    public static function getFileVersionsRequest()
    {
        return new GetFileVersionsRequestBuilder(new GetFileVersionsRequest());
    }

    /**
     * Request model for StorageApi::objectExists operation.
     */
    public static function objectExistsRequest()
    {
        return new ObjectExistsRequestBuilder(new ObjectExistsRequest());
    }

    /**
     * Request model for StorageApi::exists operation.
     */
    public static function storageExistsRequest()
    {
        return new StorageExistsRequestBuilder(new StorageExistsRequest());
    }
}
