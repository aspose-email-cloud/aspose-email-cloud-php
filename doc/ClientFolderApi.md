# ClientFolderApi ($emailCloud->client()->folder())

Email client folder operations.

## create

Description: Create new folder in email account


Method call example:
```php
$api->client()->folder()->create($request);
```

### Parameter: request

Description: Create folder request

See parameter model documentation at [ClientFolderCreateRequest](ClientFolderCreateRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientFolderCreateRequest()
    ->parentFolder('INBOX/SubFolder/ParentFolder')
    ->folderName('NewFolder')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
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
$request = Models::clientFolderCreateRequest()
    ->parentFolder('INBOX/SubFolder/ParentFolder')
    ->folderName('NewFolder')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();

// Call method:
$api->client()->folder()->create($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## delete

Description: Delete a folder in email account


Method call example:
```php
$api->client()->folder()->delete($request);
```

### Parameter: request

Description: Delete folder request

See parameter model documentation at [ClientFolderDeleteRequest](ClientFolderDeleteRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::clientFolderDeleteRequest()
    ->folder('INBOX/SubFolder/FolderToDelete')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
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
$request = Models::clientFolderDeleteRequest()
    ->folder('INBOX/SubFolder/FolderToDelete')
    ->accountLocation(Models::storageFileLocation()
        ->fileName('email.account')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->build();

// Call method:
$api->client()->folder()->delete($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **getList**

Description: Get folders list in email account

Returns: Folders list

Method call example:
```php
$result = $api->client()->folder()->getList($request);
```

### Parameter: request

Description: getList method request.

See parameter model documentation at [ClientFolderGetListRequest](ClientFolderGetListRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::ClientFolderGetListRequest()
    ->account('email.multi.account')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->parent_folder('INBOX')
    ->build();
```

</details>

### Result

Description: Folders list

Return type: [**MailServerFolderList**](MailServerFolderList.md)

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
$request = Models::ClientFolderGetListRequest()
    ->account('email.multi.account')
    ->storage('First Storage')
    ->account_storage_folder('email/account/location/on/storage')
    ->parent_folder('INBOX')
    ->build();

// Call method:
$result = $api->client()->folder()->getList($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

