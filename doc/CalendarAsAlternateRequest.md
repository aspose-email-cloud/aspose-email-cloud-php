# CalendarAsAlternateRequest

Convert iCalendar to AlternateView request

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | [**\Aspose\Email\Model\CalendarDto**](CalendarDto.md) | iCalendar document model | 
**action** | **string** | iCalendar actions. Enum, available values: Create, Update, Cancel | 
**sequence_id** | **string** | iCalendar sequence id | [optional] 



## Example
```php
$calendarAsAlternateRequest = Models::calendarAsAlternateRequest()
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
    ->sequenceId('cf4ffb6c-895d-4e58-bdb4-0a3918e96a43')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

