# Aspose\Email\MapiCalendarApi

            
# asCalendarDto

```php
function asCalendarDto(
    MapiCalendarDto $mapi_calendar_dto
): CalendarDto 
```

Converts MAPI calendar model to CalendarDto model.

### Return type

[**CalendarDto**](CalendarDto.md)

### mapi_calendar_dto Parameter

See parameter model documentation at [MapiCalendarDto](MapiCalendarDto.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# asFile

```php
function asFile(
    MapiCalendarAsFileRequest $request
): \SplFileObject 
```

Converts MAPI calendar model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### request Parameter

See parameter model documentation at [MapiCalendarAsFileRequest](MapiCalendarAsFileRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **fromFile**
```php
function fromFile(
    MapiCalendarFromFileRequest $request
): MapiCalendarDto 
```
Converts calendar file to a MAPI model representation.

### Return type

[**MapiCalendarDto**](MapiCalendarDto.md)

### Request parameters
```php
$request = new MapiCalendarFromFileRequest(
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
    MapiCalendarGetRequest $request
): MapiCalendarDto 
```
Get MAPI calendar document.

### Return type

[**MapiCalendarDto**](MapiCalendarDto.md)

### Request parameters
```php
$request = new MapiCalendarGetRequest(
    $file_name,
    $folder,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Calendar file name in storage. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# save

```php
function save(
    MapiCalendarSaveRequest $request
): 
```

Save MAPI Calendar to storage.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [MapiCalendarSaveRequest](MapiCalendarSaveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
