# ClientAccountSaveRequest

Email client account save request

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [StorageModelOfEmailClientAccount](StorageModelOfEmailClientAccount.md)


## Example
```php
$clientAccountSaveRequest = Models::clientAccountSaveRequest()
    ->storageFile(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->value(Models::emailClientAccount()
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
        ->build())
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

