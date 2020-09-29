# ClientAccountSaveRequest

Email client account save request

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [StorageModelOfEmailClientAccount](StorageModelOfEmailClientAccount.md)


## Example
```php
$clientAccountSaveRequest = new ClientAccountSaveRequest
{
    StorageFile = new StorageFileLocation
    {
        FileName = "email.account",
        Storage = "First Storage",
        FolderPath = "file/location/folder/on/storage"
    },
    Value = new EmailClientAccount
    {
        Host = "smtp.example.com",
        Port = 465,
        SecurityOptions = "SSLAuto",
        ProtocolType = "SMTP",
        Credentials = new EmailClientAccountOauthCredentials
        {
            ClientId = "clientId",
            ClientSecret = "clientSecret",
            RefreshToken = "refreshToken",
            Login = "example@example.com"
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

