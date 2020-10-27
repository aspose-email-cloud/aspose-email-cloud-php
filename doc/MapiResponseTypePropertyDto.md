# MapiResponseTypePropertyDto

Mapi property with response type value

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**value** | **string** | Represents the types of recipient responses that are received for a meeting. Enum, available values: Unknown, Organizer, Tentative, Accept, Decline, NoResponseReceived | 

 Parent class: [MapiPropertyDto](MapiPropertyDto.md)


## Example
```php
$mapiResponseTypePropertyDto = Models::mapiResponseTypePropertyDto()
    ->value('Accept')
    ->descriptor(Models::mapiKnownPropertyDescriptor()
        ->name('ResponseStatus')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

