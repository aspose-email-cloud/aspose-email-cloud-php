# MapiPropertyDto

Mapi property

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**descriptor** | [**\Aspose\Email\Model\MapiPropertyDescriptor**](MapiPropertyDescriptor.md) | Property descriptor | [optional] 
**discriminator** | **string** |  | 



## Example
```php
$mapiPropertyDto = Models::mapiPropertyDto()
    ->descriptor(Models::mapiKnownPropertyDescriptor()
        ->name('DisplayName')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

