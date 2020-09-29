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
    ->build();
```

</details>

### Result

Description: List of vCards

Return type: [**ContactList**](ContactList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::contactList()
    ->value(array(
        Models::contactDto()
            ->attachments(array(
                Models::attachment()
                    ->name('attachment.txt')
                    ->base64Data('U29tZSBmaWxlIGNvbnRlbnQ=')
                    ->build()))
            ->displayName('Alex Thomas')
            ->emailAddresses(array(
                Models::emailAddress()
                    ->category(Models::enumWithCustom<EmailAddressCategory>()
                        ->value('Custom')
                        ->description('Partners')
                        ->build())
                    ->displayName('Alex Thomas Partners')
                    ->preferred(true)
                    ->address('email@aspose.com')
                    ->build()))
            ->gender('Male')
            ->givenName('Alex')
            ->phoneNumbers(array(
                Models::phoneNumber()
                    ->category(Models::enumWithCustom<PhoneNumberCategory>()
                        ->value('Office')
                        ->build())
                    ->number('+49 211 4247 21')
                    ->preferred(true)
                    ->build()))
            ->profession('GENERAL DIRECTOR')
            ->surname('Thomas')
            ->urls(array(
                Models::url()
                    ->category(Models::enumWithCustom<UrlCategory>()
                        ->value('Work')
                        ->build())
                    ->preferred(true)
                    ->href('www.aspose.com')
                    ->build()))
            ->build()))
    ->build();
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
$result = Models::contactList()
    ->value(array(
        Models::contactDto()
            ->attachments(array(
                Models::attachment()
                    ->name('attachment.txt')
                    ->base64Data('U29tZSBmaWxlIGNvbnRlbnQ=')
                    ->build()))
            ->displayName('Alex Thomas')
            ->emailAddresses(array(
                Models::emailAddress()
                    ->category(Models::enumWithCustom<EmailAddressCategory>()
                        ->value('Custom')
                        ->description('Partners')
                        ->build())
                    ->displayName('Alex Thomas Partners')
                    ->preferred(true)
                    ->address('email@aspose.com')
                    ->build()))
            ->gender('Male')
            ->givenName('Alex')
            ->phoneNumbers(array(
                Models::phoneNumber()
                    ->category(Models::enumWithCustom<PhoneNumberCategory>()
                        ->value('Office')
                        ->build())
                    ->number('+49 211 4247 21')
                    ->preferred(true)
                    ->build()))
            ->profession('GENERAL DIRECTOR')
            ->surname('Thomas')
            ->urls(array(
                Models::url()
                    ->category(Models::enumWithCustom<UrlCategory>()
                        ->value('Work')
                        ->build())
                    ->preferred(true)
                    ->href('www.aspose.com')
                    ->build()))
            ->build()))
    ->build();
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
$request = Models::aiBcrParseStorageRequest()
    ->outFolder(Models::storageFolderLocation()
        ->storage('First Storage')
        ->folderPath('VCard/files/produced/by/parser/will/be/placed/here')
        ->build())
    ->images(array(
        Models::aiBcrImageStorageFile()
            ->file(Models::storageFileLocation()
                ->fileName('VCardScanImage.jpg')
                ->storage('First Storage')
                ->folderPath('image/location/on/storage')
                ->build())
            ->isSingle(true)
            ->build()))
    ->build();
```

</details>


### Result

Description: List of vCard files located on storage

Return type: [**StorageFileLocationList**](StorageFileLocationList.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::storageFileLocationList()
    ->value(array(
        Models::storageFileLocation()
            ->fileName('fileOnStorage.txt')
            ->storage('First Storage')
            ->folderPath('file/location/folder/on/storage')
            ->build()))
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = Models::aiBcrParseStorageRequest()
    ->outFolder(Models::storageFolderLocation()
        ->storage('First Storage')
        ->folderPath('VCard/files/produced/by/parser/will/be/placed/here')
        ->build())
    ->images(array(
        Models::aiBcrImageStorageFile()
            ->file(Models::storageFileLocation()
                ->fileName('VCardScanImage.jpg')
                ->storage('First Storage')
                ->folderPath('image/location/on/storage')
                ->build())
            ->isSingle(true)
            ->build()))
    ->build();

// Call method:
$result = $api->ai()->bcr().parseStorage($request);

// Result example:
$result = Models::storageFileLocationList()
    ->value(array(
        Models::storageFileLocation()
            ->fileName('fileOnStorage.txt')
            ->storage('First Storage')
            ->folderPath('file/location/folder/on/storage')
            ->build()))
    ->build();
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
