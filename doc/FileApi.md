# FileApi ($emailCloud->cloudStorage()->file())

File operations controller

## **copyFile**

Description: Copy file


Method call example:
```php
$api->cloudStorage()->file()->copyFile($request);
```

### Parameter: request

Description: copyFile method request.

See parameter model documentation at [CopyFileRequest](CopyFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CopyFileRequest()
    ->src_path('/storage/path/to/source/file.ext')
    ->dest_path('/storage/path/to/destination/file.ext')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
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
$request = Models::CopyFileRequest()
    ->src_path('/storage/path/to/source/file.ext')
    ->dest_path('/storage/path/to/destination/file.ext')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
    ->build();

// Call method:
$api->cloudStorage()->file()->copyFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **deleteFile**

Description: Delete file


Method call example:
```php
$api->cloudStorage()->file()->deleteFile($request);
```

### Parameter: request

Description: deleteFile method request.

See parameter model documentation at [DeleteFileRequest](DeleteFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::DeleteFileRequest()
    ->path('/storage/path/to/file.ext')
    ->storage_name('First Storage')
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
$request = Models::DeleteFileRequest()
    ->path('/storage/path/to/file.ext')
    ->storage_name('First Storage')
    ->build();

// Call method:
$api->cloudStorage()->file()->deleteFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **downloadFile**

Description: Download file

Returns: The raw data of the file.

Method call example:
```php
$result = $api->cloudStorage()->file()->downloadFile($request);
```

### Parameter: request

Description: downloadFile method request.

See parameter model documentation at [DownloadFileRequest](DownloadFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::DownloadFileRequest()
    ->path('/storage/path/to/file.ext')
    ->storage_name('First Storage')
    ->build();
```

</details>

### Result

Description: The raw data of the file.

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::DownloadFileRequest()
    ->path('/storage/path/to/file.ext')
    ->storage_name('First Storage')
    ->build();

// Call method:
$result = $api->cloudStorage()->file()->downloadFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **moveFile**

Description: Move file


Method call example:
```php
$api->cloudStorage()->file()->moveFile($request);
```

### Parameter: request

Description: moveFile method request.

See parameter model documentation at [MoveFileRequest](MoveFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MoveFileRequest()
    ->src_path('/storage/path/to/source/file.ext')
    ->dest_path('/storage/path/to/destination/file.ext')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
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
$request = Models::MoveFileRequest()
    ->src_path('/storage/path/to/source/file.ext')
    ->dest_path('/storage/path/to/destination/file.ext')
    ->src_storage_name('First Storage')
    ->dest_storage_name('Other Storage')
    ->build();

// Call method:
$api->cloudStorage()->file()->moveFile($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **uploadFile**

Description: Upload file

Returns: Empty error list if the upload is successful.

Method call example:
```php
$result = $api->cloudStorage()->file()->uploadFile($request);
```

### Parameter: request

Description: uploadFile method request.

See parameter model documentation at [UploadFileRequest](UploadFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::UploadFileRequest()
    ->path('/storage/path/to/file.ext')
    ->file(new SplFileObject('/local/file/system/path/to/file.ext'))
    ->storage_name('First Storage')
    ->build();
```

</details>

### Result

Description: Empty error list if the upload is successful.

Return type: [**FilesUploadResult**](FilesUploadResult.md)

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
$api = new EmailCloud($clientSecret, $clientId);

// Prepare parameters:
$request = Models::UploadFileRequest()
    ->path('/storage/path/to/file.ext')
    ->file(new SplFileObject('/local/file/system/path/to/file.ext'))
    ->storage_name('First Storage')
    ->build();

// Call method:
$result = $api->cloudStorage()->file()->uploadFile($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

