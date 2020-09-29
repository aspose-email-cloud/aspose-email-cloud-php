# MapiMessageApi (EmailCloud.mapi()->message())

MAPI message operations

## asEmailDto

Description: Converts MAPI message model to EmailDto model

Returns: EmailDto model

Method call example:
```php
$result = $api->mapi()->message()->asEmailDto($mapi_message);
```

### Parameter: mapi_message

Description: MAPI message model to convert

See parameter model documentation at [MapiMessageDto](MapiMessageDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$mapi_message = ;
```

</details>


### Result

Description: EmailDto model

Return type: [**EmailDto**](EmailDto.md)

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
$mapi_message = ;

// Call method:
$result = $api->mapi()->message().asEmailDto($mapi_message);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asFile

Description: Converts MAPI message model to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->mapi()->message()->asFile($request);
```

### Parameter: request

Description: MAPI message model to convert.

See parameter model documentation at [MapiMessageAsFileRequest](MapiMessageAsFileRequest.md)

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
$result = $api->mapi()->message().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **fromFile**

Description: Converts email file to a MAPI model representation

Returns: MAPI model

Method call example:
```php
$result = $api->mapi()->message()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [MapiMessageFromFileRequest](MapiMessageFromFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiMessageFromFileRequest()
    ->format('Msg')
    ->file(new SplFileObject('/path/to/message.msg'))
    .build();
```

</details>

### Result

Description: MAPI model

Return type: [**MapiMessageDto**](MapiMessageDto.md)

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
$result = $api->mapi()->message().fromFile($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get MAPI message document.

Returns: MAPI message document.

Method call example:
```php
$result = $api->mapi()->message()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [MapiMessageGetRequest](MapiMessageGetRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiMessageGetRequest()
    ->format('Eml')
    ->file_name('email.eml')
    ->folder('folder/on/storage')
    ->storage('First Storage')
    .build();
```

</details>

### Result

Description: MAPI message document.

Return type: [**MapiMessageDto**](MapiMessageDto.md)

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
$result = $api->mapi()->message().get($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save MAPI message to storage.


Method call example:
```php
$api->mapi()->message()->save($request);
```

### Parameter: request

Description: Message create/update request.

See parameter model documentation at [MapiMessageSaveRequest](MapiMessageSaveRequest.md)

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
$api->mapi()->message().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
