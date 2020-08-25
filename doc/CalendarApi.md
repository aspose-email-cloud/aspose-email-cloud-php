# Aspose\Email\CalendarApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calendarAsAlternate**](CalendarApi.md#calendarAsAlternate) | **PUT** /email/Calendar/as-alternate | Convert iCalendar to AlternateView
[**calendarAsFile**](CalendarApi.md#calendarAsFile) | **PUT** /email/Calendar/as-file | Converts calendar model to specified format and returns as file.
[**calendarAsMapi**](CalendarApi.md#calendarAsMapi) | **PUT** /email/Calendar/as-mapi | Converts CalendarDto to MapiCalendarDto.
[**calendarConvert**](CalendarApi.md#calendarConvert) | **PUT** /email/Calendar/convert | Converts calendar document to specified format and returns as file.
[**calendarFromFile**](CalendarApi.md#calendarFromFile) | **PUT** /email/Calendar/from-file | Converts calendar document to a model representation.
[**calendarGet**](CalendarApi.md#calendarGet) | **GET** /email/Calendar | Get calendar file from storage.
[**calendarGetAsAlternate**](CalendarApi.md#calendarGetAsAlternate) | **GET** /email/Calendar/as-alternate | Get iCalendar from storage as AlternateView
[**calendarGetAsFile**](CalendarApi.md#calendarGetAsFile) | **GET** /email/Calendar/as-file | Converts calendar document from storage to specified format and returns as file.
[**calendarGetList**](CalendarApi.md#calendarGetList) | **GET** /email/Calendar/list | Get iCalendar list from storage folder.
[**calendarSave**](CalendarApi.md#calendarSave) | **PUT** /email/Calendar | Save iCalendar


# **calendarAsAlternate**
```php
function \Aspose\Email\Model\AlternateView calendarAsAlternate(CalendarAsAlternateRequest $request)
```
Convert iCalendar to AlternateView

### Return type

[**\Aspose\Email\Model\AlternateView**](AlternateView.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarAsAlternateRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\CalendarAsAlternateRequest**](CalendarAsAlternateRequest.md)| iCalendar to AlternateView request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarAsFile**
```php
function \SplFileObject calendarAsFile(CalendarAsFileRequest $request)
```
Converts calendar model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarAsFileRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\CalendarAsFileRequest**](CalendarAsFileRequest.md)| Calendar model and format to convert. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarAsMapi**
```php
function \Aspose\Email\Model\MapiCalendarDto calendarAsMapi(CalendarAsMapiRequest $request)
```
Converts CalendarDto to MapiCalendarDto.

### Return type

[**\Aspose\Email\Model\MapiCalendarDto**](MapiCalendarDto.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarAsMapiRequest(
    $calendar_dto)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calendar_dto** | [**\Aspose\Email\Model\CalendarDto**](CalendarDto.md)| iCalendar model calendar representation. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarConvert**
```php
function \SplFileObject calendarConvert(CalendarConvertRequest $request)
```
Converts calendar document to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarConvertRequest(
    $format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format. Enum, available values: Ics, Msg |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarFromFile**
```php
function \Aspose\Email\Model\CalendarDto calendarFromFile(CalendarFromFileRequest $request)
```
Converts calendar document to a model representation.

### Return type

[**\Aspose\Email\Model\CalendarDto**](CalendarDto.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarFromFileRequest(
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarGet**
```php
function \Aspose\Email\Model\CalendarDto calendarGet(CalendarGetRequest $request)
```
Get calendar file from storage.

### Return type

[**\Aspose\Email\Model\CalendarDto**](CalendarDto.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarGetRequest(
    $file_name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| iCalendar file name in storage. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarGetAsAlternate**
```php
function \Aspose\Email\Model\AlternateView calendarGetAsAlternate(CalendarGetAsAlternateRequest $request)
```
Get iCalendar from storage as AlternateView

### Return type

[**\Aspose\Email\Model\AlternateView**](AlternateView.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarGetAsAlternateRequest(
    $file_name,
    $calendar_action,
    $sequence_id,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| iCalendar file name in storage |
 **calendar_action** | **string**| iCalendar method type Enum, available values: Create, Update, Cancel |
 **sequence_id** | **string**| The sequence id | [optional]
 **folder** | **string**| Path to folder in storage | [optional]
 **storage** | **string**| Storage name | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarGetAsFile**
```php
function \SplFileObject calendarGetAsFile(CalendarGetAsFileRequest $request)
```
Converts calendar document from storage to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarGetAsFileRequest(
    $file_name,
    $format,
    $storage,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Calendar document file name. |
 **format** | **string**| File format. Enum, available values: Ics, Msg |
 **storage** | **string**| Storage name. | [optional]
 **folder** | **string**| Path to folder in storage. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarGetList**
```php
function \Aspose\Email\Model\CalendarStorageList calendarGetList(CalendarGetListRequest $request)
```
Get iCalendar list from storage folder.

### Return type

[**\Aspose\Email\Model\CalendarStorageList**](CalendarStorageList.md)

### Request parameters
```php
new Aspose\Email\Model\CalendarGetListRequest(
    $folder,
    $items_per_page,
    $page_number,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| Path to folder in storage. |
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **calendarSave**
```php
function calendarSave(CalendarSaveRequest $request)
```
Save iCalendar

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\CalendarSaveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\CalendarSaveRequest**](CalendarSaveRequest.md)| iCalendar create/update request |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

