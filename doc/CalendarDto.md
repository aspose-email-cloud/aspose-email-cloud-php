# CalendarDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\Aspose\Email\Model\Attachment[]**](Attachment.md) | Document attachments | [optional] 
**attendees** | [**\Aspose\Email\Model\MailAddress[]**](MailAddress.md) | Event attendees | 
**description** | **string** | Description | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date | 
**end_time_zone** | **string** | End time zone | [optional] 
**flags** | **string[]** | Appointment flags | [optional] 
**is_description_html** | **bool** | Indicates if description is in HTML format | 
**location** | **string** | Location | 
**method** | **string** | Defines the iCalendar object method type associated with the calendar document. Enum, available values: None, Publish, Request, Reply, Add, Cancel, Refresh, Counter, DeclineCounter | 
**microsoft_busy_status** | **string** | Specifies the BUSY status. Enum, available values: NotDefined, Free, Tentative, Busy, Oof | 
**microsoft_intended_status** | **string** | Specifies the INTENDED status. Enum, available values: NotDefined, Free, Tentative, Busy, Oof | 
**optional_attendees** | [**\Aspose\Email\Model\MailAddress[]**](MailAddress.md) | Optional attendees | [optional] 
**organizer** | [**\Aspose\Email\Model\MailAddress**](MailAddress.md) | Event organizer | 
**recurrence_string** | **string** | String representation of recurrence pattern (See iCalendar RFC, \"Recurrence rule\" section). For example:               For daily recurrence:         \"FREQ=DAILY;COUNT=10;WKST=MO\"                   For monthly recurrence:         \"BYSETPOS=1;BYDAY=MO,TU,WE,TH,FR;FREQ=MONTHLY;INTERVAL=10;WKST=MO\"                   For yearly recurrence:         \"BYMONTHDAY=30;BYMONTH=1;FREQ=YEARLY;WKST=MO\" | [optional] 
**reminders** | [**\Aspose\Email\Model\CalendarReminder[]**](CalendarReminder.md) | Reminders | [optional] 
**sequence_id** | **string** | The sequence id. Read only. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date | 
**start_time_zone** | **string** | Start time zone | [optional] 
**status** | **string** | Defines the overall status or confirmation for the calendar document. Enum, available values: NotDefined, Cancelled, Tentative, Confirmed | 
**summary** | **string** | Summary | [optional] 
**transparency** | **string** | Specifies whether or not this appointment is intended to be visible in availability searches. Enum, available values: NotDefined, Transparent, Opaque | 



[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)


