# CalendarConvertRequest

Request model for CalendarApi::convert

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string**| File format. Enum, available values: Ics, Msg |
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::calendarConvertRequest()
    ->format('Ics')
    ->file(new SplFileObject('/path/to/calendar.msg'))
    ->build();
```

