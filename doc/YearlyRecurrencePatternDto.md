# YearlyRecurrencePatternDto

Yearly recurrence pattern.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**start_day** | **string** | Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay | 
**start_month** | **string** | Represents a calendar month. Enum, available values: None, January, February, March, April, May, June, July, August, September, October, November, December | 
**start_offset** | **int** | Start offset. | 
**start_position** | **string** | Day positions, typically found in a month. Enum, available values: None, First, Second, Third, Fourth, Last | 

 Parent class: [RecurrencePatternDto](RecurrencePatternDto.md)


## Example
```php
$yearlyRecurrencePatternDto = Models::yearlyRecurrencePatternDto()
    ->startMonth('January')
    ->startOffset(30)
    ->interval(-1)
    ->weekStart('Monday')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

