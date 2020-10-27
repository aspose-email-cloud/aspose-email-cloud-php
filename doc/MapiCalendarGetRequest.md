# MapiCalendarGetRequest

Request model for MapiCalendarApi::get

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| Calendar file name in storage. |
**folder** | **string**| Path to folder in storage. | [optional]
**storage** | **string**| Storage name. | [optional]

## Example
```php
$request = Models::mapiCalendarGetRequest()
    ->file_name('calendar.msg')
    ->folder('calendar/location/on/storage')
    ->storage('First Storage')
    ->build();
```

