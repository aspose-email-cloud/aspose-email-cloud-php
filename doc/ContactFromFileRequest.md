# ContactFromFileRequest

Request model for ContactApi::fromFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::contactFromFileRequest()
    ->format('Msg')
    ->file(new SplFileObject('/path/to/contact.msg'))
    ->build();
```

