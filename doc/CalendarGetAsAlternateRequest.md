# CalendarGetAsAlternateRequest

Request model for CalendarApi::getAsAlternate

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| iCalendar file name in storage |
**calendar_action** | **string**| iCalendar method type Enum, available values: Create, Update, Cancel |
**sequence_id** | **string**| The sequence id | [optional]
**folder** | **string**| Path to folder in storage | [optional]
**storage** | **string**| Storage name | [optional]

## Example
```php
$request = Models::calendarGetAsAlternateRequest()
    ->file_name('calendar.ics')
    ->calendar_action('Create')
    ->folder('calendar/location/on/storage')
    ->storage('First Storage')
    ->build();
```

