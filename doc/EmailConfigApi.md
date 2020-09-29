# EmailConfigApi (EmailCloud.emailConfig())

Email server configuration discovery.

## **discover**

Description: Discover email accounts by email address. Does not validate discovered accounts.

Returns: Discovered account configurations.

Method call example:
```php
$result = $api->emailConfig()->discover($request);
```

### Parameter: request

Description: discover method request.

See parameter model documentation at [EmailConfigDiscoverRequest](EmailConfigDiscoverRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::EmailConfigDiscoverRequest()
    .build();
```

</details>

### Result

Description: Discovered account configurations.

Return type: [**EmailAccountConfigList**](EmailAccountConfigList.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$address = ;
$fast_processing = ;

// Call method:
$result = $api->emailConfig().discover($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## discoverOauth

Description: Discover email accounts by email address. Validates discovered accounts using OAuth 2.0.

Returns: Discovered account configurations.

Method call example:
```php
$result = $api->emailConfig()->discoverOauth($request);
```

### Parameter: request

Description: Discover email configuration request.

See parameter model documentation at [EmailConfigDiscoverOauthRequest](EmailConfigDiscoverOauthRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: Discovered account configurations.

Return type: [**EmailAccountConfigList**](EmailAccountConfigList.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$result = $api->emailConfig().discoverOauth($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## discoverPassword

Description: Discover email accounts by email address. Validates discovered accounts using login and password.

Returns: Discovered account configurations.

Method call example:
```php
$result = $api->emailConfig()->discoverPassword($request);
```

### Parameter: request

Description: Discover email configuration request.

See parameter model documentation at [EmailConfigDiscoverPasswordRequest](EmailConfigDiscoverPasswordRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: Discovered account configurations.

Return type: [**EmailAccountConfigList**](EmailAccountConfigList.md)

<details>
    <summary>Result example</summary>

```php
$result = ;
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$result = $api->emailConfig().discoverPassword($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
