# ClientAccountApi ($emailCloud->client()->account())

Email server account for built-in client operations.

## **get**

Description: Get email client account from storage.

Returns: Email client account from storage.

Method call example:
```php
$result = $api->client()->account()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [ClientAccountGetRequest](ClientAccountGetRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientAccountGetRequest()
    ->file_name('email.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    ->build();
```

</details>

### Result

Description: Email client account from storage.

Return type: [**EmailClientAccount**](EmailClientAccount.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::emailClientAccount()
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
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::ClientAccountGetRequest()
    ->file_name('email.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    ->build();

// Call method:
$result = $api->client()->account()->get($request);

// Result example:
$result = Models::emailClientAccount()
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

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getMulti**

Description: Get email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".

Returns: Email client multi account from storage

Method call example:
```php
$result = $api->client()->account()->getMulti($request);
```

### Parameter: request

Description: getMulti method request.

See parameter model documentation at [ClientAccountGetMultiRequest](ClientAccountGetMultiRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientAccountGetMultiRequest()
    ->file_name('email.multi.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    ->build();
```

</details>

### Result

Description: Email client multi account from storage

Return type: [**EmailClientMultiAccount**](EmailClientMultiAccount.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::emailClientMultiAccount()
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
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::ClientAccountGetMultiRequest()
    ->file_name('email.multi.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    ->build();

// Call method:
$result = $api->client()->account()->getMulti($request);

// Result example:
$result = Models::emailClientMultiAccount()
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

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Create/update email client account file (*.account) with credentials


Method call example:
```php
$api->client()->account()->save($request);
```

### Parameter: request

Description: Email account information

See parameter model documentation at [ClientAccountSaveRequest](ClientAccountSaveRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientAccountSaveRequest()
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

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::clientAccountSaveRequest()
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

// Call method:
$api->client()->account()->save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## saveMulti

Description: Create email client multi account file (*.multi.account). Will respond error if file extension is not \".multi.account\".


Method call example:
```php
$api->client()->account()->saveMulti($request);
```

### Parameter: request

Description: Email accounts information.

See parameter model documentation at [ClientAccountSaveMultiRequest](ClientAccountSaveMultiRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientAccountSaveMultiRequest()
    ->storageFile(Models::storageFileLocation()
        ->fileName('email.multi.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->value(Models::emailClientMultiAccount()
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
        ->build())
    ->build();
```

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::clientAccountSaveMultiRequest()
    ->storageFile(Models::storageFileLocation()
        ->fileName('email.multi.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->value(Models::emailClientMultiAccount()
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
        ->build())
    ->build();

// Call method:
$api->client()->account()->saveMulti($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
