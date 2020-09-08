# Aspose\Email\MapiMessageApi

            
# asEmailDto

```php
function asEmailDto(
    MapiMessageDto $mapi_message
): EmailDto 
```

Converts MAPI message model to EmailDto model

### Return type

[**EmailDto**](EmailDto.md)

### mapi_message Parameter

See parameter model documentation at [MapiMessageDto](MapiMessageDto.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# asFile

```php
function asFile(
    MapiMessageAsFileRequest $request
): \SplFileObject 
```

Converts MAPI message model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### request Parameter

See parameter model documentation at [MapiMessageAsFileRequest](MapiMessageAsFileRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **fromFile**
```php
function fromFile(
    MapiMessageFromFileRequest $request
): MapiMessageDto 
```
Converts email file to a MAPI model representation

### Return type

[**MapiMessageDto**](MapiMessageDto.md)

### Request parameters
```php
$request = new MapiMessageFromFileRequest(
    $format,
    $file
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
 **file** | **\SplFileObject**| File to convert |

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **get**
```php
function get(
    MapiMessageGetRequest $request
): MapiMessageDto 
```
Get MAPI message document.

### Return type

[**MapiMessageDto**](MapiMessageDto.md)

### Request parameters
```php
$request = new MapiMessageGetRequest(
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

            
# save

```php
function save(
    MapiMessageSaveRequest $request
): 
```

Save MAPI message to storage.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [MapiMessageSaveRequest](MapiMessageSaveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
