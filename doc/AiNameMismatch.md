# AiNameMismatch

Names mismatch detailed description

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**category** | **string** | Mismatch type. Enum, available values: Unknown, FirstName, MiddleName, MiddleLastName, MiddleNickname, Gender, Context | 
**similarity** | **double** | Similarity score | 
**explanation** | **string** | Explanation or mismatch subtype | [optional] 



## Example
```php
$aiNameMismatch = new AiNameMismatch
{
    Category = "Gender",
    Explanation = "no_match"
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

