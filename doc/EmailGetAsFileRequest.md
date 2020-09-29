# EmailGetAsFileRequest

Request model for EmailApi::getAsFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| Email document file name |
**format** | **string**| File format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef, Oft |
**storage** | **string**| Storage name | [optional]
**folder** | **string**| Path to folder in storage | [optional]

## Example
```php
$request = Models::emailGetAsFileRequest()
    ->file_name('email.eml')
    ->format('Mhtml')
    ->storage('First Storage')
    ->folder('folder/on/storage')
    ->build();
```

