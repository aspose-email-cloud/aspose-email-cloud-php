# Aspose\Email\ContactApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactAsFile**](ContactApi.md#contactAsFile) | **PUT** /email/Contact/as-file | Converts contact model to specified format and returns as file
[**contactAsMapi**](ContactApi.md#contactAsMapi) | **PUT** /email/Contact/as-mapi | Converts ContactDto to MapiContactDto.
[**contactConvert**](ContactApi.md#contactConvert) | **PUT** /email/Contact/convert | Converts contact document to specified format and returns as file
[**contactFromFile**](ContactApi.md#contactFromFile) | **PUT** /email/Contact/from-file | Converts contact document to a model representation
[**contactGet**](ContactApi.md#contactGet) | **GET** /email/Contact | Get contact document from storage.
[**contactGetAsFile**](ContactApi.md#contactGetAsFile) | **GET** /email/Contact/as-file | Converts contact document from storage to specified format and returns as file
[**contactGetList**](ContactApi.md#contactGetList) | **GET** /email/Contact/list | Get contact list from storage folder.
[**contactSave**](ContactApi.md#contactSave) | **PUT** /email/Contact | Save contact to storage.


# **contactAsFile**
```php
function \SplFileObject contactAsFile(Requests\ContactAsFileRequest $request)
```
Converts contact model to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactAsFileRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ContactAsFileRequest**](ContactAsFileRequest.md)| Contact model and format to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **contactAsMapi**
```php
function \Aspose\Email\Model\MapiContactDto contactAsMapi(Requests\ContactAsMapiRequest $request)
```
Converts ContactDto to MapiContactDto.

### Return type

[**\Aspose\Email\Model\MapiContactDto**](MapiContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactAsMapiRequest(
    $contact_dto)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_dto** | [**\Aspose\Email\Model\ContactDto**](ContactDto.md)| Contact model to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **contactConvert**
```php
function \SplFileObject contactConvert(Requests\ContactConvertRequest $request)
```
Converts contact document to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactConvertRequest(
    $to_format,
    $from_format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_format** | **string**| File format to convert to Enum, available values: VCard, WebDav, Msg |
 **from_format** | **string**| File format to convert from Enum, available values: VCard, WebDav, Msg |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **contactFromFile**
```php
function \Aspose\Email\Model\ContactDto contactFromFile(Requests\ContactFromFileRequest $request)
```
Converts contact document to a model representation

### Return type

[**\Aspose\Email\Model\ContactDto**](ContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactFromFileRequest(
    $format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **contactGet**
```php
function \Aspose\Email\Model\ContactDto contactGet(Requests\ContactGetRequest $request)
```
Get contact document from storage.

### Return type

[**\Aspose\Email\Model\ContactDto**](ContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactGetRequest(
    $format,
    $file_name,
    $folder,
    $storage)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **file_name** | **string**| Contact document file name. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **contactGetAsFile**
```php
function \SplFileObject contactGetAsFile(Requests\ContactGetAsFileRequest $request)
```
Converts contact document from storage to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactGetAsFileRequest(
    $file_name,
    $to_format,
    $from_format,
    $storage,
    $folder)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Calendar document file name |
 **to_format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
 **from_format** | **string**| File format to convert from Enum, available values: VCard, WebDav, Msg |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **contactGetList**
```php
function \Aspose\Email\Model\ContactStorageList contactGetList(Requests\ContactGetListRequest $request)
```
Get contact list from storage folder.

### Return type

[**\Aspose\Email\Model\ContactStorageList**](ContactStorageList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactGetListRequest(
    $format,
    $folder,
    $storage,
    $items_per_page,
    $page_number)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **contactSave**
```php
function contactSave(Requests\ContactSaveRequest $request)
```
Save contact to storage.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\Requests\ContactSaveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ContactSaveRequest**](ContactSaveRequest.md)| Create/Update contact request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

