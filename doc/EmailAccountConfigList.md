# EmailAccountConfigList

List of email accounts

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfEmailAccountConfig](ListResponseOfEmailAccountConfig.md)


## Example
```php
$emailAccountConfigList = Models::emailAccountConfigList()
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


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

