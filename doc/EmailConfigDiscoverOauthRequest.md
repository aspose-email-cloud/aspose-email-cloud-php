# EmailConfigDiscoverOauthRequest


## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**client_id** | **string** | OAuth client id. | 
**client_secret** | **string** | OAuth client secret. | 
**refresh_token** | **string** | OAuth refresh token. | 
**request_url** | **string** | The url to obtain access token. If not specified, will be discovered from email configuration. | [optional] 

 Parent class: [DiscoverEmailConfigRequest](DiscoverEmailConfigRequest.md)


## Example
```php
$emailConfigDiscoverOauthRequest = new EmailConfigDiscoverOauthRequest
{
    ClientId = "ClientId",
    ClientSecret = "ClientSecret",
    RefreshToken = "RefreshToken",
    Address = "example@aspose.com",
    FastProcessing = true
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

