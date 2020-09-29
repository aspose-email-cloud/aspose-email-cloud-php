# MapiCalendarApi (EmailCloud.mapi()->calendar())

MAPI calendar operations.

## asCalendarDto

Description: Converts MAPI calendar model to CalendarDto model.

Returns: CalendarDto model.

Method call example:
```php
$result = $api->mapi()->calendar()->asCalendarDto($mapi_calendar_dto);
```

### Parameter: mapi_calendar_dto

Description: MAPI calendar model to convert.

See parameter model documentation at [MapiCalendarDto](MapiCalendarDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$mapi_calendar_dto = ;
```

</details>


### Result

Description: CalendarDto model.

Return type: [**CalendarDto**](CalendarDto.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$mapi_calendar_dto = ;

// Call method:
$result = $api->mapi()->calendar().asCalendarDto($mapi_calendar_dto);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asFile

Description: Converts MAPI calendar model to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->mapi()->calendar()->asFile($request);
```

### Parameter: request

Description: MAPI calendar model to convert.

See parameter model documentation at [MapiCalendarAsFileRequest](MapiCalendarAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: File stream in specified format.

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$result = $api->mapi()->calendar().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **fromFile**

Description: Converts calendar file to a MAPI model representation.

Returns: MAPI model.

Method call example:
```php
$result = $api->mapi()->calendar()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [MapiCalendarFromFileRequest](MapiCalendarFromFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiCalendarFromFileRequest()
    ->file(new SplFileObject('/path/to/calendar.msg'))
    .build();
```

</details>

### Result

Description: MAPI model.

Return type: [**MapiCalendarDto**](MapiCalendarDto.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$file = ;

// Call method:
$result = $api->mapi()->calendar().fromFile($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get MAPI calendar document.

Returns: MAPI Calendar model.

Method call example:
```php
$result = $api->mapi()->calendar()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [MapiCalendarGetRequest](MapiCalendarGetRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiCalendarGetRequest()
    ->file_name('calendar.msg')
    ->folder('calendar/location/on/storage')
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: MAPI Calendar model.

Return type: [**MapiCalendarDto**](MapiCalendarDto.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->mapi()->calendar().get($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save MAPI Calendar to storage.


Method call example:
```php
$api->mapi()->calendar()->save($request);
```

### Parameter: request

Description: Calendar create/update request.

See parameter model documentation at [MapiCalendarSaveRequest](MapiCalendarSaveRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$api->mapi()->calendar().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
