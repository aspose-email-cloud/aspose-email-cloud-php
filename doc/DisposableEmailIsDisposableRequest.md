# DisposableEmailIsDisposableRequest

Request model for DisposableEmailApi::isDisposable

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**address** | **string**| An email address to check |

## Example
```php
$request = Models::disposableEmailIsDisposableRequest()
    ->address('example@mailcatch.com')
    ->build();
```

