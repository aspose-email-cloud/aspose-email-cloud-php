# EmailClientAccount

A universal email client account

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----
**host** | **string** | Mail server host name or IP address | 
**port** | **int** | Mail server port | 
**security_options** | **string** | Email account security mode Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto | 
**protocol_type** | **string** | Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav | 
**credentials** | [**\Aspose\Email\Model\EmailClientAccountCredentials**](EmailClientAccountCredentials.md) | Email client account credentials | 
**cache_file** | [**\Aspose\Email\Model\StorageFileLocation**](StorageFileLocation.md) | File with messages cache. Used to provide extra functions, which are not supported by account | [optional] 



## Example
```php
$emailClientAccount = Models::emailClientAccount()
    ->host('smtp.example.com')
    ->port(465)
    ->securityOptions('SSLAuto')
    ->protocolType('SMTP')
    ->credentials(Models::emailClientAccountOauthCredentials()
        ->clientId('clientId')
        ->clientSecret('clientSecret')
        ->refreshToken('refreshToken')
        ->login('example@example.com')
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

