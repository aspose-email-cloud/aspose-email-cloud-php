# EmailFromFileRequest

Request model for EmailApi::fromFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string**| Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::emailFromFileRequest()
    ->format('Eml')
    ->file(new SplFileObject('/path/to/message.eml'))
    ->build();
```

