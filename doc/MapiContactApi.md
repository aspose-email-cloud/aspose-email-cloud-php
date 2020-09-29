# MapiContactApi (EmailCloud.mapi()->contact())

MAPI contact operations

## asContactDto

Description: Converts MAPI contact model to ContactDto model.

Returns: Contact model.

Method call example:
```php
$result = $api->mapi()->contact()->asContactDto($mapi_contact_dto);
```

### Parameter: mapi_contact_dto

Description: MAPI contact model to convert.

See parameter model documentation at [MapiContactDto](MapiContactDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$mapi_contact_dto = ;
```

</details>


### Result

Description: Contact model.

Return type: [**ContactDto**](ContactDto.md)

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
$mapi_contact_dto = ;

// Call method:
$result = $api->mapi()->contact().asContactDto($mapi_contact_dto);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asFile

Description: Converts MAPI contact model to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->mapi()->contact()->asFile($request);
```

### Parameter: request

Description: MAPI contact model to convert.

See parameter model documentation at [MapiContactAsFileRequest](MapiContactAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: File stream in specified format.

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$result = $api->mapi()->contact().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **fromFile**

Description: Converts contact file to a MAPI model representation.

Returns: MAPI model

Method call example:
```php
$result = $api->mapi()->contact()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [MapiContactFromFileRequest](MapiContactFromFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiContactFromFileRequest()
    ->format('Msg')
    ->file(new SplFileObject('/path/to/contact.msg'))
    .build();
```

</details>

### Result

Description: MAPI model

Return type: [**MapiContactDto**](MapiContactDto.md)

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
$format = ;
$file = ;

// Call method:
$result = $api->mapi()->contact().fromFile($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get MAPI contact document.

Returns: Contact model.

Method call example:
```php
$result = $api->mapi()->contact()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [MapiContactGetRequest](MapiContactGetRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiContactGetRequest()
    ->format('VCard')
    ->file_name('contact.vcf')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: Contact model.

Return type: [**MapiContactDto**](MapiContactDto.md)

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
$format = ;
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->mapi()->contact().get($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save MAPI Contact to storage.


Method call example:
```php
$api->mapi()->contact()->save($request);
```

### Parameter: request

Description: Create/Update contact request.

See parameter model documentation at [MapiContactSaveRequest](MapiContactSaveRequest.md)

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
$api->mapi()->contact().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
