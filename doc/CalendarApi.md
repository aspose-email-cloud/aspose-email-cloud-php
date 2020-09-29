# CalendarApi (EmailCloud.calendar())

iCalendar document operations.

## asAlternate

Description: Convert iCalendar to AlternateView

Returns: iCalendar document represented as AlternateView

Method call example:
```php
$result = $api->calendar()->asAlternate($request);
```

### Parameter: request

Description: iCalendar to AlternateView request

See parameter model documentation at [CalendarAsAlternateRequest](CalendarAsAlternateRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: iCalendar document represented as AlternateView

Return type: [**AlternateView**](AlternateView.md)

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
$request = ;

// Call method:
$result = $api->calendar().asAlternate($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asFile

Description: Converts calendar model to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->calendar()->asFile($request);
```

### Parameter: request

Description: Calendar model and format to convert.

See parameter model documentation at [CalendarAsFileRequest](CalendarAsFileRequest.md)

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
$result = $api->calendar().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asMapi

Description: Converts CalendarDto to MapiCalendarDto.

Returns: MAPI model calendar representation.

Method call example:
```php
$result = $api->calendar()->asMapi($calendar_dto);
```

### Parameter: calendar_dto

Description: iCalendar model calendar representation.

See parameter model documentation at [CalendarDto](CalendarDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$calendar_dto = ;
```

</details>


### Result

Description: MAPI model calendar representation.

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
$calendar_dto = ;

// Call method:
$result = $api->calendar().asMapi($calendar_dto);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **convert**

Description: Converts calendar document to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->calendar()->convert($request);
```

### Parameter: request

Description: convert method request.

See parameter model documentation at [CalendarConvertRequest](CalendarConvertRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CalendarConvertRequest()
    ->format('Ics')
    ->file(new SplFileObject('/path/to/calendar.msg'))
    .build();
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
$format = ;
$file = ;

// Call method:
$result = $api->calendar().convert($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **fromFile**

Description: Converts calendar document to a model representation.

Returns: iCalendar model.

Method call example:
```php
$result = $api->calendar()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [CalendarFromFileRequest](CalendarFromFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CalendarFromFileRequest()
    ->file(new SplFileObject('/path/to/calendar.ics'))
    .build();
```

</details>

### Result

Description: iCalendar model.

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
$file = ;

// Call method:
$result = $api->calendar().fromFile($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get calendar file from storage.

Returns: iCalendar model.

Method call example:
```php
$result = $api->calendar()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [CalendarGetRequest](CalendarGetRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CalendarGetRequest()
    ->file_name('calendar.ics')
    ->folder('calendar/location/on/storage')
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: iCalendar model.

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
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->calendar().get($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getAsAlternate**

Description: Get iCalendar from storage as AlternateView

Returns: iCalendar document represented as AlternateView

Method call example:
```php
$result = $api->calendar()->getAsAlternate($request);
```

### Parameter: request

Description: getAsAlternate method request.

See parameter model documentation at [CalendarGetAsAlternateRequest](CalendarGetAsAlternateRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CalendarGetAsAlternateRequest()
    ->file_name('calendar.ics')
    ->calendar_action('Create')
    ->folder('calendar/location/on/storage')
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: iCalendar document represented as AlternateView

Return type: [**AlternateView**](AlternateView.md)

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
$calendar_action = ;
$sequence_id = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->calendar().getAsAlternate($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getAsFile**

Description: Converts calendar document from storage to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->calendar()->getAsFile($request);
```

### Parameter: request

Description: getAsFile method request.

See parameter model documentation at [CalendarGetAsFileRequest](CalendarGetAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CalendarGetAsFileRequest()
    ->file_name('calendar.msg')
    ->format('Ics')
    ->storage('First Storage')
    ->folder('calendar/file/location/on/storage')
    .build();
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
$file_name = ;
$format = ;
$storage = ;
$folder = ;

// Call method:
$result = $api->calendar().getAsFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getList**

Description: Get iCalendar list from storage folder.

Returns: iCalendar document list.

Method call example:
```php
$result = $api->calendar()->getList($request);
```

### Parameter: request

Description: getList method request.

See parameter model documentation at [CalendarGetListRequest](CalendarGetListRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CalendarGetListRequest()
    ->folder('some/folder/on/storage')
    ->items_per_page(10)
    ->page_number(0)
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: iCalendar document list.

Return type: [**CalendarStorageList**](CalendarStorageList.md)

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
$folder = ;
$items_per_page = ;
$page_number = ;
$storage = ;

// Call method:
$result = $api->calendar().getList($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save iCalendar


Method call example:
```php
$api->calendar()->save($request);
```

### Parameter: request

Description: iCalendar create/update request

See parameter model documentation at [CalendarSaveRequest](CalendarSaveRequest.md)

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
$api->calendar().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
