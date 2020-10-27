# CalendarGetListRequest

Request model for CalendarApi::getList

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**folder** | **string**| Path to folder in storage. |
**items_per_page** | **int**| Count of items on page. | [optional] [default to 10]
**page_number** | **int**| Page number. | [optional] [default to 0]
**storage** | **string**| Storage name. | [optional]

## Example
```php
$request = Models::calendarGetListRequest()
    ->folder('some/folder/on/storage')
    ->items_per_page(10)
    ->page_number(0)
    ->storage('First Storage')
    ->build();
```

