# MapiAttachmentDto

Mapi attachment

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**name** | **string** | Attachment's name | [optional] 
**data_base64** | **string** | Attachment data represented as Base64 string. | [optional] 



## Example
```php
$mapiAttachmentDto = new MapiAttachmentDto
{
    Name = "some-file.txt",
    DataBase64 = "U29tZSBmaWxlIHRleHQ="
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

