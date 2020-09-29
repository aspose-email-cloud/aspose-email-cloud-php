# StorageExistsRequest

Request model for StorageApi::exists

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**storage_name** | **string**| Storage name |

## Example
```php
$request = Models::storageExistsRequest()
    ->storage_name('First Storage')
    ->build();
```

