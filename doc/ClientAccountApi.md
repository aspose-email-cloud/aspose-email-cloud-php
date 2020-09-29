# ClientAccountApi (EmailCloud.client()->account())

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

See parameter model documentation at [ClientAccountGetRequest](ClientAccountGetRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientAccountGetRequest()
    ->file_name('email.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: Email client account from storage.

Return type: [**EmailClientAccount**](EmailClientAccount.md)

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
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->client()->account().get($request);

// Result example:
$result = ;
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

See parameter model documentation at [ClientAccountGetMultiRequest](ClientAccountGetMultiRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientAccountGetMultiRequest()
    ->file_name('email.multi.account')
    ->folder('email/account/location/on/storage')
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: Email client multi account from storage

Return type: [**EmailClientMultiAccount**](EmailClientMultiAccount.md)

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
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->client()->account().getMulti($request);

// Result example:
$result = ;
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
$request = ;
```

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$api->client()->account().save($request);
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
$request = ;
```

</details>


### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$api->client()->account().saveMulti($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
