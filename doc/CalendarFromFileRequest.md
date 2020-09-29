# CalendarFromFileRequest

Request model for CalendarApi::fromFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::calendarFromFileRequest()
    ->file(new SplFileObject('/path/to/calendar.ics'))
    ->build();
```

