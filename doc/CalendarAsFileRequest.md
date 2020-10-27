# CalendarAsFileRequest

iCalendar model to file request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string** | Calendar file format Enum, available values: Ics, Msg | 
**value** | [**\Aspose\Email\Model\CalendarDto**](CalendarDto.md) | iCalendar model | 



## Example
```php
$calendarAsFileRequest = Models::calendarAsFileRequest()
    ->value(Models::calendarDto()
        ->attendees(array(
            Models::mailAddress()
                ->displayName('Attendee Name')
                ->address('attendee@aspose.com')
                ->participationStatus('Accepted')
                ->build()))
        ->description('Some description')
        ->endDate(new DateTime())
        ->location('Some location')
        ->organizer(Models::mailAddress()
            ->displayName('Organizer Name')
            ->address('organizer@aspose.com')
            ->build())
        ->recurrence(Models::dailyRecurrencePatternDto()
            ->interval(-1)
            ->occurs(10)
            ->weekStart('Monday')
            ->build())
        ->startDate(new DateTime())
        ->summary('Some summary')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

