# EmailClientMultiAccount

Email client virtual account, which contains several accounts

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**receive_accounts** | [**\Aspose\Email\Model\EmailClientAccount[]**](EmailClientAccount.md) | Email client receive accounts | 
**send_account** | [**\Aspose\Email\Model\EmailClientAccount**](EmailClientAccount.md) | Email client send account | [optional] 



## Example
```php
$emailClientMultiAccount = Models::emailClientMultiAccount()
    ->receiveAccounts(array(
        Models::emailClientAccount()
            ->host('imap.gmail.com')
            ->port(993)
            ->securityOptions('SSLAuto')
            ->credentials(Models::emailClientAccountPasswordCredentials()
                ->password('password')
                ->login('example@gmail.com')
                ->build())
            ->build(),
        Models::emailClientAccount()
            ->host('exchange@outlook.com')
            ->port(443)
            ->protocolType('EWS')
            ->credentials(Models::emailClientAccountOauthCredentials()
                ->clientId('clientId')
                ->clientSecret('clientSecret')
                ->refreshToken('refreshToken')
                ->login('example@outlook.com')
                ->build())
            ->build()))
    ->sendAccount(Models::emailClientAccount()
        ->host('smtp.gmail.com')
        ->port(465)
        ->securityOptions('SSLAuto')
        ->protocolType('SMTP')
        ->credentials(Models::emailClientAccountPasswordCredentials()
            ->password('password')
            ->login('example@gmail.com')
            ->build())
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

