# CalendarGetRequest

Request model for CalendarApi::get

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| iCalendar file name in storage. |
**folder** | **string**| Path to folder in storage. | [optional]
**storage** | **string**| Storage name. | [optional]

## Example
```php
$request = Models::calendarGetRequest()
    ->file_name('calendar.ics')
    ->folder('calendar/location/on/storage')
    ->storage('First Storage')
    ->build();
```

