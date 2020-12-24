# Reference documentation for Aspose.Email Cloud API

`EmailCloud` is the main API class. It provides an access to all of Aspose.Email Cloud functions.
`ClientSecret` and `ClientId` credentials should be obtained from [dashboard](https://dashboard.aspose.cloud/#/) to use `EmailCloud`:

```php
$configuration = (new \Aspose\Email\Configuration())
    ->setClientSecret("Your Client secret")
    ->setClientId("Your Client id");

$emailCloud = new \Aspose\Email\EmailCloud($configuration);
```

All Aspose.Email Cloud functions are divided into groups and represented as `EmailCloud` fields:

API | Description
--- | -----------
[$emailCloud->**mapi()**](MapiGroup.md) | MAPI operations.
[$emailCloud->**client()**](ClientGroup.md) | Builtin Email client operations.
[$emailCloud->**ai()**](AiGroup.md) | AI powered operations.
[$emailCloud->**cloudStorage()**](CloudStorageGroup.md) | Cloud file storage operations.
[$emailCloud->**calendar()**](CalendarApi_list.md) | iCalendar document operations.
[$emailCloud->**contact()**](ContactApi_list.md) | Contact document operations. Supported formats: VCard, MSG, WebDav
[$emailCloud->**email()**](EmailApi_list.md) | Email document (*.eml) operations.
[$emailCloud->**disposableEmail()**](DisposableEmailApi_list.md) | Checks if an email is a disposable one
[$emailCloud->**emailConfig()**](EmailConfigApi_list.md) | Email server configuration discovery.


List of all available models is available in [Models.md](Models.md) file.