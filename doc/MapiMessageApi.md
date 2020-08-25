# Aspose\Email\MapiMessageApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mapiMessageAsEmailDto**](MapiMessageApi.md#mapiMessageAsEmailDto) | **PUT** /email/MapiMessage/as-email-dto | Converts MAPI message model to EmailDto model
[**mapiMessageAsFile**](MapiMessageApi.md#mapiMessageAsFile) | **PUT** /email/MapiMessage/as-file | Converts MAPI message model to specified format and returns as file.
[**mapiMessageFromFile**](MapiMessageApi.md#mapiMessageFromFile) | **PUT** /email/MapiMessage/from-file | Converts email file to a MAPI model representation
[**mapiMessageGet**](MapiMessageApi.md#mapiMessageGet) | **GET** /email/MapiMessage | Get MAPI message document.
[**mapiMessageSave**](MapiMessageApi.md#mapiMessageSave) | **PUT** /email/MapiMessage | Save MAPI message to storage.


# **mapiMessageAsEmailDto**
```php
function \Aspose\Email\Model\EmailDto mapiMessageAsEmailDto(Requests\MapiMessageAsEmailDtoRequest $request)
```
Converts MAPI message model to EmailDto model

### Return type

[**\Aspose\Email\Model\EmailDto**](EmailDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiMessageAsEmailDtoRequest(
    $mapi_message)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapi_message** | [**\Aspose\Email\Model\MapiMessageDto**](MapiMessageDto.md)| MAPI message model to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiMessageAsFile**
```php
function \SplFileObject mapiMessageAsFile(Requests\MapiMessageAsFileRequest $request)
```
Converts MAPI message model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiMessageAsFileRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\MapiMessageAsFileRequest**](MapiMessageAsFileRequest.md)| MAPI message model to convert. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiMessageFromFile**
```php
function \Aspose\Email\Model\MapiMessageDto mapiMessageFromFile(Requests\MapiMessageFromFileRequest $request)
```
Converts email file to a MAPI model representation

### Return type

[**\Aspose\Email\Model\MapiMessageDto**](MapiMessageDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiMessageFromFileRequest(
    $format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiMessageGet**
```php
function \Aspose\Email\Model\MapiMessageDto mapiMessageGet(Requests\MapiMessageGetRequest $request)
```
Get MAPI message document.

### Return type

[**\Aspose\Email\Model\MapiMessageDto**](MapiMessageDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiMessageGetRequest(
    $format,
    $file_name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef |
 **file_name** | **string**| Email document file name. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiMessageSave**
```php
function mapiMessageSave(Requests\MapiMessageSaveRequest $request)
```
Save MAPI message to storage.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\MapiMessageSaveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\MapiMessageSaveRequest**](MapiMessageSaveRequest.md)| Message create/update request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

