# MapiMessageFromFileRequest

Request model for MapiMessageApi::fromFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::mapiMessageFromFileRequest()
    ->format('Msg')
    ->file(new SplFileObject('/path/to/message.msg'))
    ->build();
```

