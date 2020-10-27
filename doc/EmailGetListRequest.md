# EmailGetListRequest

Request model for EmailApi::getList

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**format** | **string**| Email document format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
**folder** | **string**| Path to folder in storage. | [optional]
**storage** | **string**| Storage name. | [optional]
**items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
**page_number** | **int**| Page number. | [optional] [default to 0]

## Example
```php
$request = Models::emailGetListRequest()
    ->format('Eml')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    ->items_per_page(10)
    ->page_number(0)
    ->build();
```

