# MapiContactFromFileRequest

Request model for MapiContactApi::fromFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::mapiContactFromFileRequest()
    ->format('Msg')
    ->file(new SplFileObject('/path/to/contact.msg'))
    ->build();
```

