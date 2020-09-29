# MailMessageBase64

Email message represented as file, encoded to Base64 format.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value_base64** | **string** | Email message file data encoded to Base64 string. | 
**format** | **string** | Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft | 

 Parent class: [MailMessageBase](MailMessageBase.md)


## Example
```php
$mailMessageBase64 = Models::mailMessageBase64()
    ->valueBase64('RnJvbTogZkBmLnVzClRvOiB0QHQudXMKU3ViamVjdDogUwoKQm9keQ==')
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

