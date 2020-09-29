# EmailConvertRequest

Request model for EmailApi::convert

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**from_format** | **string**| File format to convert to Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
**to_format** | **string**| File format to convert from Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::emailConvertRequest()
    ->from_format('Msg')
    ->to_format('Mhtml')
    ->file(new SplFileObject('/path/to/message.msg'))
    ->build();
```

