# ReminderTrigger

Specifies when an alarm will trigger.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**date_time** | [**\DateTime**](\DateTime.md) | A trigger set to an absolute date/time. | 
**duration** | **int** | Specifies a relative time in ticks for the trigger of the alarm. | [optional] 
**related** | **string** | Specify the relationship of the alarm trigger with respect to the start or end of the event. Enum, available values: Start, End | 



## Example
```php
$reminderTrigger = new ReminderTrigger
{
    DateTime = DateTime.Today,
    Duration = 600000000
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

