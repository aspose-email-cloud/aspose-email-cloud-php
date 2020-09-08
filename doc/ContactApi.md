# Aspose\Email\ContactApi

            
# asFile

```php
function asFile(
    ContactAsFileRequest $request
): \SplFileObject 
```

Converts contact model to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### request Parameter

See parameter model documentation at [ContactAsFileRequest](ContactAsFileRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# asMapi

```php
function asMapi(
    ContactDto $contact_dto
): MapiContactDto 
```

Converts ContactDto to MapiContactDto.

### Return type

[**MapiContactDto**](MapiContactDto.md)

### contact_dto Parameter

See parameter model documentation at [ContactDto](ContactDto.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **convert**
```php
function convert(
    ContactConvertRequest $request
): \SplFileObject 
```
Converts contact document to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
$request = new ContactConvertRequest(
    $to_format,
    $from_format,
    $file
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_format** | **string**| File format to convert to Enum, available values: VCard, WebDav, Msg |
 **from_format** | **string**| File format to convert from Enum, available values: VCard, WebDav, Msg |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **fromFile**
```php
function fromFile(
    ContactFromFileRequest $request
): ContactDto 
```
Converts contact document to a model representation

### Return type

[**ContactDto**](ContactDto.md)

### Request parameters
```php
$request = new ContactFromFileRequest(
    $format,
    $file
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **get**
```php
function get(
    ContactGetRequest $request
): ContactDto 
```
Get contact document from storage.

### Return type

[**ContactDto**](ContactDto.md)

### Request parameters
```php
$request = new ContactGetRequest(
    $format,
    $file_name,
    $folder,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **file_name** | **string**| Contact document file name. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getAsFile**
```php
function getAsFile(
    ContactGetAsFileRequest $request
): \SplFileObject 
```
Converts contact document from storage to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
$request = new ContactGetAsFileRequest(
    $file_name,
    $to_format,
    $from_format,
    $storage,
    $folder
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Calendar document file name |
 **to_format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
 **from_format** | **string**| File format to convert from Enum, available values: VCard, WebDav, Msg |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getList**
```php
function getList(
    ContactGetListRequest $request
): ContactStorageList 
```
Get contact list from storage folder.

### Return type

[**ContactStorageList**](ContactStorageList.md)

### Request parameters
```php
$request = new ContactGetListRequest(
    $format,
    $folder,
    $storage,
    $items_per_page,
    $page_number
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# save

```php
function save(
    ContactSaveRequest $request
): 
```

Save contact to storage.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [ContactSaveRequest](ContactSaveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
