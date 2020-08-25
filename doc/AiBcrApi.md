# Aspose\Email\AiBcrApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aiBcrParse**](AiBcrApi.md#aiBcrParse) | **PUT** /email/AiBcr/parse | Parse images to vCard document models
[**aiBcrParseStorage**](AiBcrApi.md#aiBcrParseStorage) | **PUT** /email/AiBcr/parse-storage | Parse images from storage to vCard files


# **aiBcrParse**
```php
function \Aspose\Email\Model\ContactList aiBcrParse(Requests\AiBcrParseRequest $request)
```
Parse images to vCard document models

### Return type

[**\Aspose\Email\Model\ContactList**](ContactList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrParseRequest(
    $file,
    $countries,
    $languages,
    $is_single)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to parse |
 **countries** | **string**| Comma-separated codes of countries. | [optional] [default to ]
 **languages** | **string**| Comma-separated ISO-639 codes of languages (either 639-1 or 639-3; i.e. \&quot;it\&quot; or \&quot;ita\&quot; for Italian); it&#39;s \&quot;\&quot; by default. | [optional] [default to ]
 **is_single** | **bool**| Determines that image contains single VCard or more. | [optional] [default to true]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiBcrParseStorage**
```php
function \Aspose\Email\Model\StorageFileLocationList aiBcrParseStorage(Requests\AiBcrParseStorageRequest $request)
```
Parse images from storage to vCard files

### Return type

[**\Aspose\Email\Model\StorageFileLocationList**](StorageFileLocationList.md)

### Request parameters
```php
new Aspose\Email\Model\Requests\AiBcrParseStorageRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\AiBcrParseStorageRequest**](AiBcrParseStorageRequest.md)| Request with images located on storage |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

