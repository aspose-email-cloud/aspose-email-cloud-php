# MonthlyRecurrencePatternDto

Monthly recurrence pattern.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**start_day** | **string** | Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay | 
**start_offset** | **int** | Start offset. | 
**start_position** | **string** | Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last | 

 Parent class: [RecurrencePatternDto](RecurrencePatternDto.md)


## Example
```php
$monthlyRecurrencePatternDto = Models::monthlyRecurrencePatternDto()
    ->startDay('Monday')
    ->startPosition('First')
    ->interval(-1)
    ->weekStart('Monday')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

