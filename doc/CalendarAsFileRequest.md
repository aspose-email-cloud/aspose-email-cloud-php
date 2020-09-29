# CalendarAsFileRequest

iCalendar model to file request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string** | Calendar file format Enum, available values: Ics, Msg | 
**value** | [**\Aspose\Email\Model\CalendarDto**](CalendarDto.md) | iCalendar model | 



## Example
```php
$calendarAsFileRequest = new CalendarAsFileRequest
{
    Value = new CalendarDto
    {
        Attendees = new List<MailAddress>
        {
            new MailAddress
            {
                DisplayName = "Attendee Name",
                Address = "attendee@aspose.com",
                ParticipationStatus = "Accepted"
            }
        },
        Description = "Some description",
        EndDate = DateTime.Today,
        Location = "Some location",
        Organizer = new MailAddress
        {
            DisplayName = "Organizer Name",
            Address = "organizer@aspose.com"
        },
        Recurrence = new DailyRecurrencePatternDto
        {
            Interval = -1,
            Occurs = 10,
            WeekStart = "Monday"
        },
        StartDate = DateTime.Today,
        Summary = "Some summary"
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

