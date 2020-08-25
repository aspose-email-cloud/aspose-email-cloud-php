# Aspose\Email\MapiContactApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mapiContactAsContactDto**](MapiContactApi.md#mapiContactAsContactDto) | **PUT** /email/MapiContact/as-contact-dto | Converts MAPI contact model to ContactDto model.
[**mapiContactAsFile**](MapiContactApi.md#mapiContactAsFile) | **PUT** /email/MapiContact/as-file | Converts MAPI contact model to specified format and returns as file.
[**mapiContactFromFile**](MapiContactApi.md#mapiContactFromFile) | **PUT** /email/MapiContact/from-file | Converts contact file to a MAPI model representation.
[**mapiContactGet**](MapiContactApi.md#mapiContactGet) | **GET** /email/MapiContact | Get MAPI contact document.
[**mapiContactSave**](MapiContactApi.md#mapiContactSave) | **PUT** /email/MapiContact | Save MAPI Contact to storage.


# **mapiContactAsContactDto**
```php
function \Aspose\Email\Model\ContactDto mapiContactAsContactDto(MapiContactAsContactDtoRequest $request)
```
Converts MAPI contact model to ContactDto model.

### Return type

[**\Aspose\Email\Model\ContactDto**](ContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\MapiContactAsContactDtoRequest(
    $mapi_contact_dto)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mapi_contact_dto** | [**\Aspose\Email\Model\MapiContactDto**](MapiContactDto.md)| MAPI contact model to convert. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiContactAsFile**
```php
function \SplFileObject mapiContactAsFile(MapiContactAsFileRequest $request)
```
Converts MAPI contact model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\MapiContactAsFileRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\MapiContactAsFileRequest**](MapiContactAsFileRequest.md)| MAPI contact model to convert. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiContactFromFile**
```php
function \Aspose\Email\Model\MapiContactDto mapiContactFromFile(MapiContactFromFileRequest $request)
```
Converts contact file to a MAPI model representation.

### Return type

[**\Aspose\Email\Model\MapiContactDto**](MapiContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\MapiContactFromFileRequest(
    $format,
    $file)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **mapiContactGet**
```php
function \Aspose\Email\Model\MapiContactDto mapiContactGet(MapiContactGetRequest $request)
```
Get MAPI contact document.

### Return type

[**\Aspose\Email\Model\MapiContactDto**](MapiContactDto.md)

### Request parameters
```php
new Aspose\Email\Model\MapiContactGetRequest(
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

# **mapiContactSave**
```php
function mapiContactSave(MapiContactSaveRequest $request)
```
Save MAPI Contact to storage.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\MapiContactSaveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\MapiContactSaveRequest**](MapiContactSaveRequest.md)| Create/Update contact request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

