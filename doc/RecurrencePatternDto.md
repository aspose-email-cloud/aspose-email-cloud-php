# RecurrencePatternDto

iCalendar recurrence pattern.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**interval** | **int** | Number of recurrence units. | 
**occurs** | **int** | Number of occurrences of the recurrence pattern. | 
**end_date** | [**\DateTime**](\DateTime.md) | End date. | 
**week_start** | **string** | Represents the day of the week. Enum, available values: None, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, Day, WeekDay, WeekendDay | 
**discriminator** | **string** |  | 



## Example
```php
$recurrencePatternDto = Models::recurrencePatternDto()
    ->interval(-1)
    ->weekStart('Monday')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

