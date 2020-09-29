# WeeklyRecurrencePatternDto

Weekly recurrence pattern.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**start_days** | **string[]** | Start days Items: Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay | [optional] 

 Parent class: [RecurrencePatternDto](RecurrencePatternDto.md)


## Example
```php
$weeklyRecurrencePatternDto = new WeeklyRecurrencePatternDto
{
    StartDays = new List<CalendarDay>
    {
        "Tuesday",
        "Thursday"
    },
    Interval = -1,
    Occurs = 10,
    WeekStart = "Sunday"
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

