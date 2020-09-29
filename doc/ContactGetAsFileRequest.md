# ContactGetAsFileRequest

Request model for ContactApi::getAsFile

## Properties

Name | Type | Description | Notes
---- | ---- | ----------- | -----
**file_name** | **string**| Calendar document file name |
**to_format** | **string**| File format Enum, available values: VCard, WebDav, Msg |
**from_format** | **string**| File format to convert from Enum, available values: VCard, WebDav, Msg |
**storage** | **string**| Storage name | [optional]
**folder** | **string**| Path to folder in storage | [optional]

## Example
```php
$request = Models::contactGetAsFileRequest()
    ->file_name('contact.msg')
    ->to_format('VCard')
    ->from_format('Msg')
    ->storage('First Storage')
    ->folder('folder/on/storage')
    ->build();
```

