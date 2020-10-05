# FolderApi ($emailCloud->cloudStorage()->folder())

Folder operations controller

## **copyFolder**

Description: Copy folder


Method call example:
```php
$api->cloudStorage()->folder()->copyFolder($request);
```

### Parameter: request

Description: copyFolder method request.

See parameter model documentation at [CopyFolderRequest](CopyFolderRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CopyFolderRequest()
    ->src_path('/storage/path/to/source/folder')
    ->dest_path('/storage/path/to/destination/folder')
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
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$src_path = ;
$dest_path = ;
$src_storage_name = ;
$dest_storage_name = ;

// Call method:
$api->cloudStorage()->folder().copyFolder($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **createFolder**

Description: Create the folder


Method call example:
```php
$api->cloudStorage()->folder()->createFolder($request);
```

### Parameter: request

Description: createFolder method request.

See parameter model documentation at [CreateFolderRequest](CreateFolderRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::CreateFolderRequest()
    ->path('/storage/path/to/new/folder')
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
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$path = ;
$storage_name = ;

// Call method:
$api->cloudStorage()->folder().createFolder($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **deleteFolder**

Description: Delete folder


Method call example:
```php
$api->cloudStorage()->folder()->deleteFolder($request);
```

### Parameter: request

Description: deleteFolder method request.

See parameter model documentation at [DeleteFolderRequest](DeleteFolderRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::DeleteFolderRequest()
    ->path('/storage/path/to/folder')
    ->storage_name('First Storage')
    ->recursive(true)
    ->build();
```

</details>

### Result

Return type: void (empty response body)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$path = ;
$storage_name = ;
$recursive = ;

// Call method:
$api->cloudStorage()->folder().deleteFolder($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **getFilesList**

Description: Get all files and folders within a folder

Returns: Returns all files and folders contained by the folder.

Method call example:
```php
$result = $api->cloudStorage()->folder()->getFilesList($request);
```

### Parameter: request

Description: getFilesList method request.

See parameter model documentation at [GetFilesListRequest](GetFilesListRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::GetFilesListRequest()
    ->path('/storage/path/to/folder')
    ->storage_name('First Storage')
    ->build();
```

</details>

### Result

Description: Returns all files and folders contained by the folder.

Return type: [**FilesList**](FilesList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::filesList()
    ->value(array(
        Models::storageFile()
            ->name('file.ext')
            ->modifiedDate(new DateTime())
            ->size(1024)
            ->path('/path/to/file/on/storage')
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
$result = $api->cloudStorage()->folder().getFilesList($request);

// Result example:
$result = Models::filesList()
    ->value(array(
        Models::storageFile()
            ->name('file.ext')
            ->modifiedDate(new DateTime())
            ->size(1024)
            ->path('/path/to/file/on/storage')
            ->build()))
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **moveFolder**

Description: Move folder


Method call example:
```php
$api->cloudStorage()->folder()->moveFolder($request);
```

### Parameter: request

Description: moveFolder method request.

See parameter model documentation at [MoveFolderRequest](MoveFolderRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MoveFolderRequest()
    ->src_path('/storage/path/to/source/folder')
    ->dest_path('/storage/path/to/destination/folder')
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
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$src_path = ;
$dest_path = ;
$src_storage_name = ;
$dest_storage_name = ;

// Call method:
$api->cloudStorage()->folder().moveFolder($request);
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

