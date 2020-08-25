# Aspose\Email\MapiCalendarApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mapiCalendarAsCalendarDto**](MapiCalendarApi.md#mapiCalendarAsCalendarDto) | **PUT** /email/MapiCalendar/as-calendar-dto | Converts MAPI calendar model to CalendarDto model.
[**mapiCalendarAsFile**](MapiCalendarApi.md#mapiCalendarAsFile) | **PUT** /email/MapiCalendar/as-file | Converts MAPI calendar model to specified format and returns as file.
[**mapiCalendarFromFile**](MapiCalendarApi.md#mapiCalendarFromFile) | **PUT** /email/MapiCalendar/from-file | Converts calendar file to a MAPI model representation.
[**mapiCalendarGet**](MapiCalendarApi.md#mapiCalendarGet) | **GET** /email/MapiCalendar | Get MAPI calendar document.
[**mapiCalendarSave**](MapiCalendarApi.md#mapiCalendarSave) | **PUT** /email/MapiCalendar | Save MAPI Calendar to storage.


# **mapiCalendarAsCalendarDto**
```php
function \Aspose\Email\Model\CalendarDto mapiCalendarAsCalendarDto(Requests\MapiCalendarAsCalendarDtoRequest $request)
```
Converts MAPI calendar model to CalendarDto model.

### Return type

[**\Aspose\Email\Model\CalendarDto**](CalendarDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiCalendarAsCalendarDtoRequest(
    $mapi_calendar_dto)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapi_calendar_dto** | [**\Aspose\Email\Model\MapiCalendarDto**](MapiCalendarDto.md)| MAPI calendar model to convert. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiCalendarAsFile**
```php
function \SplFileObject mapiCalendarAsFile(Requests\MapiCalendarAsFileRequest $request)
```
Converts MAPI calendar model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiCalendarAsFileRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\MapiCalendarAsFileRequest**](MapiCalendarAsFileRequest.md)| MAPI calendar model to convert. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiCalendarFromFile**
```php
function \Aspose\Email\Model\MapiCalendarDto mapiCalendarFromFile(Requests\MapiCalendarFromFileRequest $request)
```
Converts calendar file to a MAPI model representation.

### Return type

[**\Aspose\Email\Model\MapiCalendarDto**](MapiCalendarDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiCalendarFromFileRequest(
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiCalendarGet**
```php
function \Aspose\Email\Model\MapiCalendarDto mapiCalendarGet(Requests\MapiCalendarGetRequest $request)
```
Get MAPI calendar document.

### Return type

[**\Aspose\Email\Model\MapiCalendarDto**](MapiCalendarDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiCalendarGetRequest(
    $file_name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Calendar file name in storage. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiCalendarSave**
```php
function mapiCalendarSave(Requests\MapiCalendarSaveRequest $request)
```
Save MAPI Calendar to storage.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiCalendarSaveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\MapiCalendarSaveRequest**](MapiCalendarSaveRequest.md)| Calendar create/update request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

