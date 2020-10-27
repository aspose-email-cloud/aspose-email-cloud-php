# MapiCalendarFromFileRequest

Request model for MapiCalendarApi::fromFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::mapiCalendarFromFileRequest()
    ->file(new SplFileObject('/path/to/calendar.msg'))
    ->build();
```

