# StorageApi ($emailCloud->cloudStorage()->storage())

Storage operations controller

## **getDiscUsage**

Description: Get disc usage

Returns: Disc usage.

Method call example:
```php
$result = $api->cloudStorage()->storage()->getDiscUsage($request);
```

### Parameter: request

Description: getDiscUsage method request.

See parameter model documentation at [GetDiscUsageRequest](GetDiscUsageRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::GetDiscUsageRequest()
    ->storage_name('First Storage')
    ->build();
```

</details>

### Result

Description: Disc usage.

Return type: [**DiscUsage**](DiscUsage.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::discUsage()
    ->usedSize(1048576)
    ->totalSize(3145728)
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$storage_name = ;

// Call method:
$result = $api->cloudStorage()->storage().getDiscUsage($request);

// Result example:
$result = Models::discUsage()
    ->usedSize(1048576)
    ->totalSize(3145728)
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getFileVersions**

Description: Get file versions

Returns: File versions.

Method call example:
```php
$result = $api->cloudStorage()->storage()->getFileVersions($request);
```

### Parameter: request

Description: getFileVersions method request.

See parameter model documentation at [GetFileVersionsRequest](GetFileVersionsRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::GetFileVersionsRequest()
    ->path('/storage/path/to/file.ext')
    ->storage_name('First Storage')
    ->build();
```

</details>

### Result

Description: File versions.

Return type: [**FileVersions**](FileVersions.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::fileVersions()
    ->value(array(
        Models::fileVersion()
            ->versionId('d5afd857-8797-4ca0-b806-a03fdfc3831f')
            ->isLatest(true)
            ->name('file.ext')
            ->modifiedDate(new DateTime())
            ->size(4096)
            ->path('/storage/path/to')
            ->build()))
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$path = ;
$storage_name = ;

// Call method:
$result = $api->cloudStorage()->storage().getFileVersions($request);

// Result example:
$result = Models::fileVersions()
    ->value(array(
        Models::fileVersion()
            ->versionId('d5afd857-8797-4ca0-b806-a03fdfc3831f')
            ->isLatest(true)
            ->name('file.ext')
            ->modifiedDate(new DateTime())
            ->size(4096)
            ->path('/storage/path/to')
            ->build()))
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **objectExists**

Description: Check if file or folder exists

Returns: Object exist result.

Method call example:
```php
$result = $api->cloudStorage()->storage()->objectExists($request);
```

### Parameter: request

Description: objectExists method request.

See parameter model documentation at [ObjectExistsRequest](ObjectExistsRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ObjectExistsRequest()
    ->path('/storage/path/to/folder/or/file.ext')
    ->storage_name('First Storage')
    ->build();
```

</details>

### Result

Description: Object exist result.

Return type: [**ObjectExist**](ObjectExist.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::objectExist()
    ->exists(true)
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$path = ;
$storage_name = ;
$version_id = ;

// Call method:
$result = $api->cloudStorage()->storage().objectExists($request);

// Result example:
$result = Models::objectExist()
    ->exists(true)
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **exists**

Description: Check if storage exists

Returns: Storage exist result.

Method call example:
```php
$result = $api->cloudStorage()->storage()->exists($request);
```

### Parameter: request

Description: exists method request.

See parameter model documentation at [StorageExistsRequest](StorageExistsRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::StorageExistsRequest()
    ->storage_name('First Storage')
    ->build();
```

</details>

### Result

Description: Storage exist result.

Return type: [**StorageExist**](StorageExist.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::storageExist()
    ->exists(true)
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$storage_name = ;

// Call method:
$result = $api->cloudStorage()->storage().exists($request);

// Result example:
$result = Models::storageExist()
    ->exists(true)
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

