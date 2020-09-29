# ContactGetListRequest

Request model for ContactApi::getList

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string**| Contact document format. Enum, available values: VCard, WebDav, Msg |
**folder** | **string**| Path to folder in storage. | [optional]
**storage** | **string**| Storage name. | [optional]
**items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
**page_number** | **int**| Page number. | [optional] [default to 0]

## Example
```php
$request = Models::contactGetListRequest()
    ->format('VCard')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    ->items_per_page(10)
    ->page_number(0)
    ->build();
```

