# ContactConvertRequest

Request model for ContactApi::convert

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**to_format** | **string**| File format to convert to Enum, available values: VCard, WebDav, Msg |
**from_format** | **string**| File format to convert from Enum, available values: VCard, WebDav, Msg |
**file** | **\SplFileObject**| File to convert |

## Example
```php
$request = Models::contactConvertRequest()
    ->to_format('VCard')
    ->from_format('Msg')
    ->file(new SplFileObject('/path/to/contact.msg'))
    ->build();
```

