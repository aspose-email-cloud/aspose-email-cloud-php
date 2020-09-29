# EmailConfigDiscoverRequest

Request model for EmailConfigApi::discover

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**address** | **string**| Email address. |
**fast_processing** | **bool**| Turns on fast processing. All discover systems will run in parallel. First discovered result will be returned. | [optional] [default to false]

## Example
```php
$request = Models::emailConfigDiscoverRequest()
    ->build();
```

