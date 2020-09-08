# Aspose\Email\CalendarApi

            
# asAlternate

```php
function asAlternate(
    CalendarAsAlternateRequest $request
): AlternateView 
```

Convert iCalendar to AlternateView

### Return type

[**AlternateView**](AlternateView.md)

### request Parameter

See parameter model documentation at [CalendarAsAlternateRequest](CalendarAsAlternateRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# asFile

```php
function asFile(
    CalendarAsFileRequest $request
): \SplFileObject 
```

Converts calendar model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### request Parameter

See parameter model documentation at [CalendarAsFileRequest](CalendarAsFileRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# asMapi

```php
function asMapi(
    CalendarDto $calendar_dto
): MapiCalendarDto 
```

Converts CalendarDto to MapiCalendarDto.

### Return type

[**MapiCalendarDto**](MapiCalendarDto.md)

### calendar_dto Parameter

See parameter model documentation at [CalendarDto](CalendarDto.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **convert**
```php
function convert(
    CalendarConvertRequest $request
): \SplFileObject 
```
Converts calendar document to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
$request = new CalendarConvertRequest(
    $format,
    $file
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format. Enum, available values: Ics, Msg |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **fromFile**
```php
function fromFile(
    CalendarFromFileRequest $request
): CalendarDto 
```
Converts calendar document to a model representation.

### Return type

[**CalendarDto**](CalendarDto.md)

### Request parameters
```php
$request = new CalendarFromFileRequest(
    $file
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **get**
```php
function get(
    CalendarGetRequest $request
): CalendarDto 
```
Get calendar file from storage.

### Return type

[**CalendarDto**](CalendarDto.md)

### Request parameters
```php
$request = new CalendarGetRequest(
    $file_name,
    $folder,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| iCalendar file name in storage. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getAsAlternate**
```php
function getAsAlternate(
    CalendarGetAsAlternateRequest $request
): AlternateView 
```
Get iCalendar from storage as AlternateView

### Return type

[**AlternateView**](AlternateView.md)

### Request parameters
```php
$request = new CalendarGetAsAlternateRequest(
    $file_name,
    $calendar_action,
    $sequence_id,
    $folder,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| iCalendar file name in storage |
 **calendar_action** | **string**| iCalendar method type Enum, available values: Create, Update, Cancel |
 **sequence_id** | **string**| The sequence id | [optional]
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getAsFile**
```php
function getAsFile(
    CalendarGetAsFileRequest $request
): \SplFileObject 
```
Converts calendar document from storage to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
$request = new CalendarGetAsFileRequest(
    $file_name,
    $format,
    $storage,
    $folder
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Calendar document file name. |
 **format** | **string**| File format. Enum, available values: Ics, Msg |
 **storage** | **string**| Storage name. | [optional]
 **folder** | **string**| Path to folder in storage. | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getList**
```php
function getList(
    CalendarGetListRequest $request
): CalendarStorageList 
```
Get iCalendar list from storage folder.

### Return type

[**CalendarStorageList**](CalendarStorageList.md)

### Request parameters
```php
$request = new CalendarGetListRequest(
    $folder,
    $items_per_page,
    $page_number,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| Path to folder in storage. |
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# save

```php
function save(
    CalendarSaveRequest $request
): 
```

Save iCalendar

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [CalendarSaveRequest](CalendarSaveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
