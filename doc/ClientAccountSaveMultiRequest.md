# ClientAccountSaveMultiRequest

Email client multi account save request.

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [StorageModelOfEmailClientMultiAccount](StorageModelOfEmailClientMultiAccount.md)


## Example
```php
$clientAccountSaveMultiRequest = new ClientAccountSaveMultiRequest
{
    StorageFile = new StorageFileLocation
    {
        FileName = "email.multi.account",
        Storage = "First Storage",
        FolderPath = "file/location/folder/on/storage"
    },
    Value = new EmailClientMultiAccount
    {
        ReceiveAccounts = new List<EmailClientAccount>
        {
            new EmailClientAccount
            {
                Host = "imap.gmail.com",
                Port = 993,
                SecurityOptions = "SSLAuto",
                Credentials = new EmailClientAccountPasswordCredentials
                {
                    Password = "password",
                    Login = "example@gmail.com"
                }
            },
            new EmailClientAccount
            {
                Host = "exchange@outlook.com",
                Port = 443,
                ProtocolType = "EWS",
                Credentials = new EmailClientAccountOauthCredentials
                {
                    ClientId = "clientId",
                    ClientSecret = "clientSecret",
                    RefreshToken = "refreshToken",
                    Login = "example@outlook.com"
                }
            }
        },
        SendAccount = new EmailClientAccount
        {
            Host = "smtp.gmail.com",
            Port = 465,
            SecurityOptions = "SSLAuto",
            ProtocolType = "SMTP",
            Credentials = new EmailClientAccountPasswordCredentials
            {
                Password = "password",
                Login = "example@gmail.com"
            }
        }
    }
};
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

