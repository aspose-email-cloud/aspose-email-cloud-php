# AiBcrApi (EmailCloud.ai()->bcr())

AI Business card recognition operations.

## **parse**

Description: Parse images to vCard document models

Returns: List of vCards

Method call example:
```php
$result = $api->ai()->bcr()->parse($request);
```

### Parameter: request

Description: parse method request.

See parameter model documentation at [AiBcrParseRequest](AiBcrParseRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiBcrParseRequest()
    ->file(new SplFileObject('/path/to/image.png'))
    ->countries('us')
    ->languages('en')
    ->is_single(true)
    .build();
```

</details>

### Result

Description: List of vCards

Return type: [**ContactList**](ContactList.md)

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
$file = ;
$countries = ;
$languages = ;
$is_single = ;

// Call method:
$result = $api->ai()->bcr().parse($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## parseStorage

Description: Parse images from storage to vCard files

Returns: List of vCard files located on storage

Method call example:
```php
$result = $api->ai()->bcr()->parseStorage($request);
```

### Parameter: request

Description: Request with images located on storage

See parameter model documentation at [AiBcrParseStorageRequest](AiBcrParseStorageRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: List of vCard files located on storage

Return type: [**StorageFileLocationList**](StorageFileLocationList.md)

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
$request = ;

// Call method:
$result = $api->ai()->bcr().parseStorage($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
