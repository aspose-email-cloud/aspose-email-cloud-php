# DisposableEmailApi (EmailCloud.disposableEmail())

Check email address is disposable operations

## **isDisposable**

Description: Check email address is disposable

Returns: true if address is disposable

Method call example:
```php
$result = $api->disposableEmail()->isDisposable($request);
```

### Parameter: request

Description: isDisposable method request.

See parameter model documentation at [DisposableEmailIsDisposableRequest](DisposableEmailIsDisposableRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::DisposableEmailIsDisposableRequest()
    ->address('example@mailcatch.com')
    ->build();
```

</details>

### Result

Description: true if address is disposable

Return type: [**ValueTOfBoolean**](ValueTOfBoolean.md)

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

// Call method:
$result = $api->disposableEmail().isDisposable($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

