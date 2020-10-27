# CalendarGetAsFileRequest

Request model for CalendarApi::getAsFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| Calendar document file name. |
**format** | **string**| File format. Enum, available values: Ics, Msg |
**storage** | **string**| Storage name. | [optional]
**folder** | **string**| Path to folder in storage. | [optional]

## Example
```php
$request = Models::calendarGetAsFileRequest()
    ->file_name('calendar.msg')
    ->format('Ics')
    ->storage('First Storage')
    ->folder('calendar/file/location/on/storage')
    ->build();
```

