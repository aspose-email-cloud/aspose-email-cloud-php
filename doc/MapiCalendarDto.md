# MapiCalendarDto

Represents the mapi calendar object

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**appointment_counter_proposal** | **bool** | Value indicating whether a Meeting Response object is a counter proposal. | 
**attendees** | [**\Aspose\Email\Model\MapiCalendarAttendeesDto**](MapiCalendarAttendeesDto.md) | Attendees | [optional] 
**busy_status** | **string** | Enumerates the mapi calendar possible busy status Enum, available values: Free, Tentative, Busy, OutOfOffice | 
**client_intent** | **string[]** | Actions the user has taken on this Meeting object. Items: Enumerates the actions the user can taken on the Meeting object Enum, available values: Manager, Delegate, DeletedWithNoResponse, DeletedExceptionWithNoResponse, RespondedTentative, RespondedAccept, RespondedDecline, ModifiedStartTime, ModifiedEndTime, ModifiedLocation, RespondedExceptionDecline, Canceled, ExceptionCanceled | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date and time of the event. If the date is not set, default value for DateTime is returned. | 
**end_date_time_zone** | [**\Aspose\Email\Model\MapiCalendarTimeZoneDto**](MapiCalendarTimeZoneDto.md) | Time zone information that indicates the time zone of the EndDate property. | [optional] 
**is_all_day** | **bool** | Value indicating whether the event is an all-day event. | 
**key_words** | **string** | Categories of the calendar object. | [optional] 
**location** | **string** | Location of the event. | [optional] 
**recurrence** | [**\Aspose\Email\Model\MapiCalendarEventRecurrenceDto**](MapiCalendarEventRecurrenceDto.md) | Recurrence properties. | [optional] 
**reminder_delta** | **int** | Interval, in minutes, between the time at which the reminder first becomes overdue and the start time of the Calendar object. | 
**reminder_file_parameter** | **string** | Full path of the sound that a client SHOULD play when the reminder becomes overdue. | [optional] 
**reminder_set** | **bool** | Value indicating whether a reminder is set on the object. | 
**sequence** | **int** | Sequence number. | 
**start_date** | [**\DateTime**](\DateTime.md) | Start date and time of the event. If the date is not set, default value for DateTime is returned. | 
**start_date_time_zone** | [**\Aspose\Email\Model\MapiCalendarTimeZoneDto**](MapiCalendarTimeZoneDto.md) | Time zone information that indicates the time zone of the StartDate property. | [optional] 
**uid** | **string** | Unique identifier. | [optional] 
**organizer** | [**\Aspose\Email\Model\MapiElectronicAddressDto**](MapiElectronicAddressDto.md) | Organizer | [optional] 

 Parent class: [MapiMessageItemBaseDto](MapiMessageItemBaseDto.md)


## Example
```php
$mapiCalendarDto = new MapiCalendarDto
{
    Attendees = new MapiCalendarAttendeesDto
    {
        AppointmentRecipients = new List<MapiRecipientDto>
        {
            new MapiRecipientDto
            {
                EmailAddress = "organizer@aspose.com",
                AddressType = "SMTP",
                DisplayName = "Organizer Name",
                RecipientType = "MapiTo"
            },
            new MapiRecipientDto
            {
                EmailAddress = "attendee@aspose.com",
                AddressType = "SMTP",
                DisplayName = "Attendee Name",
                RecipientType = "MapiTo"
            }
        }
    },
    BusyStatus = "Tentative",
    ClientIntent = new List<MapiCalendarClientIntent>
    {
        "Manager"
    },
    EndDate = DateTime.Today,
    Location = "Some location",
    Recurrence = new MapiCalendarEventRecurrenceDto
    {
        RecurrencePattern = new MapiCalendarDailyRecurrencePatternDto
        {
            Frequency = "Daily",
            OccurrenceCount = 10,
            WeekStartDay = "Monday"
        }
    },
    StartDate = DateTime.Today,
    Organizer = new MapiElectronicAddressDto
    {
        EmailAddress = "organizer@aspose.com"
    },
    Body = "Some description",
    Subject = "Some summary"
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

