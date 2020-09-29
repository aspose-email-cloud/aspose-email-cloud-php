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
    ->build();
```

</details>

### Result

Description: Discovered account configurations.

Return type: [**EmailAccountConfigList**](EmailAccountConfigList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::emailAccountConfigList()
    ->value(array(
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->host('imap.gmail.com')
            ->port(993)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('SMTP')
            ->host('smtp.gmail.com')
            ->port(465)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('POP3')
            ->host('pop.gmail.com')
            ->port(995)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build()))
    ->build();
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
$result = Models::emailAccountConfigList()
    ->value(array(
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->host('imap.gmail.com')
            ->port(993)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('SMTP')
            ->host('smtp.gmail.com')
            ->port(465)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('POP3')
            ->host('pop.gmail.com')
            ->port(995)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build()))
    ->build();
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
$request = Models::emailConfigDiscoverOauthRequest()
    ->clientId('ClientId')
    ->clientSecret('ClientSecret')
    ->refreshToken('RefreshToken')
    ->address('example@aspose.com')
    ->fastProcessing(true)
    ->build();
```

</details>


### Result

Description: Discovered account configurations.

Return type: [**EmailAccountConfigList**](EmailAccountConfigList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::emailAccountConfigList()
    ->value(array(
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->host('imap.gmail.com')
            ->port(993)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('SMTP')
            ->host('smtp.gmail.com')
            ->port(465)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('POP3')
            ->host('pop.gmail.com')
            ->port(995)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build()))
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = Models::emailConfigDiscoverOauthRequest()
    ->clientId('ClientId')
    ->clientSecret('ClientSecret')
    ->refreshToken('RefreshToken')
    ->address('example@aspose.com')
    ->fastProcessing(true)
    ->build();

// Call method:
$result = $api->emailConfig().discoverOauth($request);

// Result example:
$result = Models::emailAccountConfigList()
    ->value(array(
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->host('imap.gmail.com')
            ->port(993)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('SMTP')
            ->host('smtp.gmail.com')
            ->port(465)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('POP3')
            ->host('pop.gmail.com')
            ->port(995)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build()))
    ->build();
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
$request = Models::emailConfigDiscoverPasswordRequest()
    ->password('password')
    ->address('example@aspose.com')
    ->fastProcessing(true)
    ->build();
```

</details>


### Result

Description: Discovered account configurations.

Return type: [**EmailAccountConfigList**](EmailAccountConfigList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::emailAccountConfigList()
    ->value(array(
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->host('imap.gmail.com')
            ->port(993)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('SMTP')
            ->host('smtp.gmail.com')
            ->port(465)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('POP3')
            ->host('pop.gmail.com')
            ->port(995)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build()))
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = Models::emailConfigDiscoverPasswordRequest()
    ->password('password')
    ->address('example@aspose.com')
    ->fastProcessing(true)
    ->build();

// Call method:
$result = $api->emailConfig().discoverPassword($request);

// Result example:
$result = Models::emailAccountConfigList()
    ->value(array(
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->host('imap.gmail.com')
            ->port(993)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('SMTP')
            ->host('smtp.gmail.com')
            ->port(465)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build(),
        Models::emailAccountConfig()
            ->displayName('Google Mail')
            ->protocolType('POP3')
            ->host('pop.gmail.com')
            ->port(995)
            ->socketType('SSLAuto')
            ->authenticationTypes(array(
                'PasswordCleartext',
                'OAuth2'))
            ->extraInfo(array(
                Models::nameValuePair()
                    ->name('Enable: You need to enable IMAP access')
                    ->value('https://mail.google.com/mail/?ui=2&shva=1#settings/fwdandpop')
                    ->build()))
            ->build()))
    ->build();
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
