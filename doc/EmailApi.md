# Aspose\Email\EmailApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailAsFile**](EmailApi.md#emailAsFile) | **PUT** /email/as-file | Converts Email model to specified format and returns as file.
[**emailAsMapi**](EmailApi.md#emailAsMapi) | **PUT** /email/as-mapi | Converts EmailDto to MapiMessageDto.
[**emailConvert**](EmailApi.md#emailConvert) | **PUT** /email/convert | Converts email document to specified format and returns as file
[**emailFromFile**](EmailApi.md#emailFromFile) | **PUT** /email/from-file | Converts email document to a model representation
[**emailGet**](EmailApi.md#emailGet) | **GET** /email | Get email document from storage.
[**emailGetAsFile**](EmailApi.md#emailGetAsFile) | **GET** /email/as-file | Converts email document from storage to specified format and returns as file
[**emailGetList**](EmailApi.md#emailGetList) | **GET** /email/list | Get email list from storage folder.
[**emailSave**](EmailApi.md#emailSave) | **PUT** /email | Save email document to storage.


# **emailAsFile**
```php
function \SplFileObject emailAsFile(Requests\EmailAsFileRequest $request)
```
Converts Email model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailAsFileRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\EmailAsFileRequest**](EmailAsFileRequest.md)| Email model and format to convert. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailAsMapi**
```php
function \Aspose\Email\Model\MapiMessageDto emailAsMapi(Requests\EmailAsMapiRequest $request)
```
Converts EmailDto to MapiMessageDto.

### Return type

[**\Aspose\Email\Model\MapiMessageDto**](MapiMessageDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailAsMapiRequest(
    $email_dto)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_dto** | [**\Aspose\Email\Model\EmailDto**](EmailDto.md)| Email model to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailConvert**
```php
function \SplFileObject emailConvert(Requests\EmailConvertRequest $request)
```
Converts email document to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailConvertRequest(
    $format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailFromFile**
```php
function \Aspose\Email\Model\EmailDto emailFromFile(Requests\EmailFromFileRequest $request)
```
Converts email document to a model representation

### Return type

[**\Aspose\Email\Model\EmailDto**](EmailDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailFromFileRequest(
    $format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailGet**
```php
function \Aspose\Email\Model\EmailDto emailGet(Requests\EmailGetRequest $request)
```
Get email document from storage.

### Return type

[**\Aspose\Email\Model\EmailDto**](EmailDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailGetRequest(
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

# **emailGetAsFile**
```php
function \SplFileObject emailGetAsFile(Requests\EmailGetAsFileRequest $request)
```
Converts email document from storage to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailGetAsFileRequest(
    $file_name,
    $format,
    $storage,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Email document file name |
 **format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailGetList**
```php
function \Aspose\Email\Model\EmailStorageList emailGetList(Requests\EmailGetListRequest $request)
```
Get email list from storage folder.

### Return type

[**\Aspose\Email\Model\EmailStorageList**](EmailStorageList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailGetListRequest(
    $format,
    $folder,
    $storage,
    $items_per_page,
    $page_number)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailSave**
```php
function emailSave(Requests\EmailSaveRequest $request)
```
Save email document to storage.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\EmailSaveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\EmailSaveRequest**](EmailSaveRequest.md)| Email document create/update request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

