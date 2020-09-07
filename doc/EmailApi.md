# Aspose\Email\EmailApi

            
# asFile

```php
function asFile(
    EmailAsFileRequest $request
): \SplFileObject 
```

Converts Email model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### request Parameter

See parameter model documentation at [EmailAsFileRequest](EmailAsFileRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# asMapi

```php
function asMapi(
    EmailDto $email_dto
): MapiMessageDto 
```

Converts EmailDto to MapiMessageDto.

### Return type

[**MapiMessageDto**](MapiMessageDto.md)

### email_dto Parameter

See parameter model documentation at [EmailDto](EmailDto.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **convert**
```php
function convert(
    EmailConvertRequest $request
): \SplFileObject 
```
Converts email document to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
$request = new EmailConvertRequest(
    $from_format,
    $to_format,
    $file
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_format** | **string**| File format to convert to Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
 **to_format** | **string**| File format to convert from Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **fromFile**
```php
function fromFile(
    EmailFromFileRequest $request
): EmailDto 
```
Converts email document to a model representation

### Return type

[**EmailDto**](EmailDto.md)

### Request parameters
```php
$request = new EmailFromFileRequest(
    $format,
    $file
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **get**
```php
function get(
    EmailGetRequest $request
): EmailDto 
```
Get email document from storage.

### Return type

[**EmailDto**](EmailDto.md)

### Request parameters
```php
$request = new EmailGetRequest(
    $format,
    $file_name,
    $folder,
    $storage
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
 **file_name** | **string**| Email document file name. |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getAsFile**
```php
function getAsFile(
    EmailGetAsFileRequest $request
): \SplFileObject 
```
Converts email document from storage to specified format and returns as file

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
$request = new EmailGetAsFileRequest(
    $file_name,
    $format,
    $storage,
    $folder
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Email document file name |
 **format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
 **storage** | **string**| Storage name | [optional]
 **folder** | **string**| Path to folder in storage | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getList**
```php
function getList(
    EmailGetListRequest $request
): EmailStorageList 
```
Get email list from storage folder.

### Return type

[**EmailStorageList**](EmailStorageList.md)

### Request parameters
```php
$request = new EmailGetListRequest(
    $format,
    $folder,
    $storage,
    $items_per_page,
    $page_number
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
 **folder** | **string**| Path to folder in storage. | [optional]
 **storage** | **string**| Storage name. | [optional]
 **items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
 **page_number** | **int**| Page number. | [optional] [default to 0]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# save

```php
function save(
    EmailSaveRequest $request
): 
```

Save email document to storage.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [EmailSaveRequest](EmailSaveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
