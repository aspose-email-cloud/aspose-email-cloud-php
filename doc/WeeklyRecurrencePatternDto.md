# WeeklyRecurrencePatternDto

Weekly recurrence pattern.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**start_days** | **string[]** | Start days Items: Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay | [optional] 

 Parent class: [RecurrencePatternDto](RecurrencePatternDto.md)


## Example
```php
$weeklyRecurrencePatternDto = Models::weeklyRecurrencePatternDto()
    ->startDays(array(
        'Tuesday',
        'Thursday'))
    ->interval(-1)
    ->occurs(10)
    ->weekStart('Sunday')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

