# Aspose\Email\MapiContactApi

            
# asContactDto

```php
function asContactDto(
    MapiContactDto $mapi_contact_dto
): ContactDto 
```

Converts MAPI contact model to ContactDto model.

### Return type

[**ContactDto**](ContactDto.md)

### mapi_contact_dto Parameter

See parameter model documentation at [MapiContactDto](MapiContactDto.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# asFile

```php
function asFile(
    MapiContactAsFileRequest $request
): \SplFileObject 
```

Converts MAPI contact model to specified format and returns as file.

### Return type

[**\SplFileObject**](\SplFileObject.md)

### request Parameter

See parameter model documentation at [MapiContactAsFileRequest](MapiContactAsFileRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# **fromFile**
```php
function fromFile(
    MapiContactFromFileRequest $request
): MapiContactDto 
```
Converts contact file to a MAPI model representation.

### Return type

[**MapiContactDto**](MapiContactDto.md)

### Request parameters
```php
$request = new MapiContactFromFileRequest(
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
    MapiContactGetRequest $request
): MapiContactDto 
```
Get MAPI contact document.

### Return type

[**MapiContactDto**](MapiContactDto.md)

### Request parameters
```php
$request = new MapiContactGetRequest(
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

            
# save

```php
function save(
    MapiContactSaveRequest $request
): 
```

Save MAPI Contact to storage.

### Return type

void (empty response body)

### request Parameter

See parameter model documentation at [MapiContactSaveRequest](MapiContactSaveRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
