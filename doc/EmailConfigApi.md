# Aspose\Email\EmailConfigApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailConfigDiscover**](EmailConfigApi.md#emailConfigDiscover) | **GET** /email/config/discover | Discover email accounts by email address. Does not validate discovered accounts.
[**emailConfigDiscoverOauth**](EmailConfigApi.md#emailConfigDiscoverOauth) | **PUT** /email/config/discover/oauth | Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.
[**emailConfigDiscoverPassword**](EmailConfigApi.md#emailConfigDiscoverPassword) | **PUT** /email/config/discover/password | Discover email accounts by email address. Validates discovered accounts using login and password.


# **emailConfigDiscover**
```php
function \Aspose\Email\Model\EmailAccountConfigList emailConfigDiscover(EmailConfigDiscoverRequest $request)
```
Discover email accounts by email address. Does not validate discovered accounts.

### Return type

[**\Aspose\Email\Model\EmailAccountConfigList**](EmailAccountConfigList.md)

### Request parameters
```php
new Aspose\Email\Model\EmailConfigDiscoverRequest(
    $address,
    $fast_processing)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Email address. |
 **fast_processing** | **bool**| Turns on fast processing. All discover systems will run in parallel. First discovered result will be returned. | [optional] [default to false]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailConfigDiscoverOauth**
```php
function \Aspose\Email\Model\EmailAccountConfigList emailConfigDiscoverOauth(EmailConfigDiscoverOauthRequest $request)
```
Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.

### Return type

[**\Aspose\Email\Model\EmailAccountConfigList**](EmailAccountConfigList.md)

### Request parameters
```php
new Aspose\Email\Model\EmailConfigDiscoverOauthRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\EmailConfigDiscoverOauthRequest**](EmailConfigDiscoverOauthRequest.md)| Discover email configuration request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **emailConfigDiscoverPassword**
```php
function \Aspose\Email\Model\EmailAccountConfigList emailConfigDiscoverPassword(EmailConfigDiscoverPasswordRequest $request)
```
Discover email accounts by email address. Validates discovered accounts using login and password.

### Return type

[**\Aspose\Email\Model\EmailAccountConfigList**](EmailAccountConfigList.md)

### Request parameters
```php
new Aspose\Email\Model\EmailConfigDiscoverPasswordRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\EmailConfigDiscoverPasswordRequest**](EmailConfigDiscoverPasswordRequest.md)| Discover email configuration request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

