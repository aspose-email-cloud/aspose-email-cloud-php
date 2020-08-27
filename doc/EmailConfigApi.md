# Aspose\Email\EmailConfigApi

            
# **discover**
```php
function discover(
    EmailConfigDiscoverRequest $request
): EmailAccountConfigList 
```
Discover email accounts by email address. Does not validate discovered accounts.

### Return type

[**EmailAccountConfigList**](EmailAccountConfigList.md)

### Request parameters
```php
$request = new EmailConfigDiscoverRequest(
    $address,
    $fast_processing
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Email address. |
 **fast_processing** | **bool**| Turns on fast processing. All discover systems will run in parallel. First discovered result will be returned. | [optional] [default to false]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# discoverOauth

```php
function discoverOauth(
    EmailConfigDiscoverOauthRequest $request
): EmailAccountConfigList 
```

Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.

### Return type

[**EmailAccountConfigList**](EmailAccountConfigList.md)

### request Parameter

See parameter model documentation at [EmailConfigDiscoverOauthRequest](EmailConfigDiscoverOauthRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
            
# discoverPassword

```php
function discoverPassword(
    EmailConfigDiscoverPasswordRequest $request
): EmailAccountConfigList 
```

Discover email accounts by email address. Validates discovered accounts using login and password.

### Return type

[**EmailAccountConfigList**](EmailAccountConfigList.md)

### request Parameter

See parameter model documentation at [EmailConfigDiscoverPasswordRequest](EmailConfigDiscoverPasswordRequest.md)

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
