# MapiCalendarExceptionInfoDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\Aspose\Email\Model\MapiAttachmentDto[]**](MapiAttachmentDto.md) | Attachments in the recurrence exception. | [optional] 
**body** | **string** | Body. | [optional] 
**busy_status** | **string** | Enumerates the mapi calendar possible busy status Enum, available values: Free, Tentative, Busy, OutOfOffice | 
**end_date_time** | [**\DateTime**](\DateTime.md) | End date. | 
**has_attachment** | **bool** | Value of this field specifies whether the Exception Embedded Message object contains attachments. | 
**location** | **string** | Location. | [optional] 
**meeting_type** | **string** | Enumerates the appointment state Enum, available values: Meeting, Received, Canceled | 
**original_start_date** | [**\DateTime**](\DateTime.md) | Original start date. | 
**override_flags** | **string[]** | Override flags. Items: Specifies what data in the MapiCalendarOverride structure has a value different from the recurring series. Enum, available values: Subject, MeetingType, ReminderDelta, Reminder, Location, BusyStatus, Attachment, Subtype, AppointmentColor, ExceptionalBody | [optional] 
**reminder_delta** | **int** | Reminder delta. | 
**reminder_set** | **bool** | Value for the PidLidReminderSet property. | 
**start_date_time** | [**\DateTime**](\DateTime.md) | Start date. | 
**subject** | **string** | Subject. | [optional] 
**sub_type** | **int** | SubType. | 



[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)


