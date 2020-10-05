# MapiCalendarApi ($emailCloud->mapi()->calendar())

MAPI calendar operations.

## asCalendarDto

Description: Converts MAPI calendar model to CalendarDto model.

Returns: CalendarDto model.

Method call example:
```php
$result = $api->mapi()->calendar()->asCalendarDto($mapi_calendar_dto);
```

### Parameter: mapi_calendar_dto

Description: MAPI calendar model to convert.

See parameter model documentation at [MapiCalendarDto](MapiCalendarDto.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$mapi_calendar_dto = Models::mapiCalendarDto()
    ->attendees(Models::mapiCalendarAttendeesDto()
        ->appointmentRecipients(array(
            Models::mapiRecipientDto()
                ->emailAddress('organizer@aspose.com')
                ->addressType('SMTP')
                ->displayName('Organizer Name')
                ->recipientType('MapiTo')
                ->build(),
            Models::mapiRecipientDto()
                ->emailAddress('attendee@aspose.com')
                ->addressType('SMTP')
                ->displayName('Attendee Name')
                ->recipientType('MapiTo')
                ->build()))
        ->build())
    ->busyStatus('Tentative')
    ->clientIntent(array(
        'Manager'))
    ->endDate(new DateTime())
    ->location('Some location')
    ->recurrence(Models::mapiCalendarEventRecurrenceDto()
        ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
            ->frequency('Daily')
            ->occurrenceCount(10)
            ->weekStartDay('Monday')
            ->build())
        ->build())
    ->startDate(new DateTime())
    ->organizer(Models::mapiElectronicAddressDto()
        ->emailAddress('organizer@aspose.com')
        ->build())
    ->body('Some description')
    ->subject('Some summary')
    ->build();
```

</details>


### Result

Description: CalendarDto model.

Return type: [**CalendarDto**](CalendarDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::calendarDto()
    ->attendees(array(
        Models::mailAddress()
            ->displayName('Attendee Name')
            ->address('attendee@aspose.com')
            ->participationStatus('Accepted')
            ->build()))
    ->description('Some description')
    ->endDate(new DateTime())
    ->location('Some location')
    ->organizer(Models::mailAddress()
        ->displayName('Organizer Name')
        ->address('organizer@aspose.com')
        ->build())
    ->recurrence(Models::dailyRecurrencePatternDto()
        ->interval(-1)
        ->occurs(10)
        ->weekStart('Monday')
        ->build())
    ->startDate(new DateTime())
    ->summary('Some summary')
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$mapi_calendar_dto = Models::mapiCalendarDto()
    ->attendees(Models::mapiCalendarAttendeesDto()
        ->appointmentRecipients(array(
            Models::mapiRecipientDto()
                ->emailAddress('organizer@aspose.com')
                ->addressType('SMTP')
                ->displayName('Organizer Name')
                ->recipientType('MapiTo')
                ->build(),
            Models::mapiRecipientDto()
                ->emailAddress('attendee@aspose.com')
                ->addressType('SMTP')
                ->displayName('Attendee Name')
                ->recipientType('MapiTo')
                ->build()))
        ->build())
    ->busyStatus('Tentative')
    ->clientIntent(array(
        'Manager'))
    ->endDate(new DateTime())
    ->location('Some location')
    ->recurrence(Models::mapiCalendarEventRecurrenceDto()
        ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
            ->frequency('Daily')
            ->occurrenceCount(10)
            ->weekStartDay('Monday')
            ->build())
        ->build())
    ->startDate(new DateTime())
    ->organizer(Models::mapiElectronicAddressDto()
        ->emailAddress('organizer@aspose.com')
        ->build())
    ->body('Some description')
    ->subject('Some summary')
    ->build();

// Call method:
$result = $api->mapi()->calendar().asCalendarDto($mapi_calendar_dto);

// Result example:
$result = Models::calendarDto()
    ->attendees(array(
        Models::mailAddress()
            ->displayName('Attendee Name')
            ->address('attendee@aspose.com')
            ->participationStatus('Accepted')
            ->build()))
    ->description('Some description')
    ->endDate(new DateTime())
    ->location('Some location')
    ->organizer(Models::mailAddress()
        ->displayName('Organizer Name')
        ->address('organizer@aspose.com')
        ->build())
    ->recurrence(Models::dailyRecurrencePatternDto()
        ->interval(-1)
        ->occurs(10)
        ->weekStart('Monday')
        ->build())
    ->startDate(new DateTime())
    ->summary('Some summary')
    ->build();
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## asFile

Description: Converts MAPI calendar model to specified format and returns as file.

Returns: File stream in specified format.

Method call example:
```php
$result = $api->mapi()->calendar()->asFile($request);
```

### Parameter: request

Description: MAPI calendar model to convert.

See parameter model documentation at [MapiCalendarAsFileRequest](MapiCalendarAsFileRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::mapiCalendarAsFileRequest()
    ->format('Msg')
    ->value(Models::mapiCalendarDto()
        ->attendees(Models::mapiCalendarAttendeesDto()
            ->appointmentRecipients(array(
                Models::mapiRecipientDto()
                    ->emailAddress('organizer@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Organizer Name')
                    ->recipientType('MapiTo')
                    ->build(),
                Models::mapiRecipientDto()
                    ->emailAddress('attendee@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Attendee Name')
                    ->recipientType('MapiTo')
                    ->build()))
            ->build())
        ->busyStatus('Tentative')
        ->clientIntent(array(
            'Manager'))
        ->endDate(new DateTime())
        ->location('Some location')
        ->recurrence(Models::mapiCalendarEventRecurrenceDto()
            ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
                ->frequency('Daily')
                ->occurrenceCount(10)
                ->weekStartDay('Monday')
                ->build())
            ->build())
        ->startDate(new DateTime())
        ->organizer(Models::mapiElectronicAddressDto()
            ->emailAddress('organizer@aspose.com')
            ->build())
        ->body('Some description')
        ->subject('Some summary')
        ->build())
    ->build();
```

</details>


### Result

Description: File stream in specified format.

Return type: [**\SplFileObject**](\SplFileObject.md)

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$request = Models::mapiCalendarAsFileRequest()
    ->format('Msg')
    ->value(Models::mapiCalendarDto()
        ->attendees(Models::mapiCalendarAttendeesDto()
            ->appointmentRecipients(array(
                Models::mapiRecipientDto()
                    ->emailAddress('organizer@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Organizer Name')
                    ->recipientType('MapiTo')
                    ->build(),
                Models::mapiRecipientDto()
                    ->emailAddress('attendee@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Attendee Name')
                    ->recipientType('MapiTo')
                    ->build()))
            ->build())
        ->busyStatus('Tentative')
        ->clientIntent(array(
            'Manager'))
        ->endDate(new DateTime())
        ->location('Some location')
        ->recurrence(Models::mapiCalendarEventRecurrenceDto()
            ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
                ->frequency('Daily')
                ->occurrenceCount(10)
                ->weekStartDay('Monday')
                ->build())
            ->build())
        ->startDate(new DateTime())
        ->organizer(Models::mapiElectronicAddressDto()
            ->emailAddress('organizer@aspose.com')
            ->build())
        ->body('Some description')
        ->subject('Some summary')
        ->build())
    ->build();

// Call method:
$result = $api->mapi()->calendar().asFile($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **fromFile**

Description: Converts calendar file to a MAPI model representation.

Returns: MAPI model.

Method call example:
```php
$result = $api->mapi()->calendar()->fromFile($request);
```

### Parameter: request

Description: fromFile method request.

See parameter model documentation at [MapiCalendarFromFileRequest](MapiCalendarFromFileRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiCalendarFromFileRequest()
    ->file(new SplFileObject('/path/to/calendar.msg'))
    ->build();
```

</details>

### Result

Description: MAPI model.

Return type: [**MapiCalendarDto**](MapiCalendarDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::mapiCalendarDto()
    ->attendees(Models::mapiCalendarAttendeesDto()
        ->appointmentRecipients(array(
            Models::mapiRecipientDto()
                ->emailAddress('organizer@aspose.com')
                ->addressType('SMTP')
                ->displayName('Organizer Name')
                ->recipientType('MapiTo')
                ->build(),
            Models::mapiRecipientDto()
                ->emailAddress('attendee@aspose.com')
                ->addressType('SMTP')
                ->displayName('Attendee Name')
                ->recipientType('MapiTo')
                ->build()))
        ->build())
    ->busyStatus('Tentative')
    ->clientIntent(array(
        'Manager'))
    ->endDate(new DateTime())
    ->location('Some location')
    ->recurrence(Models::mapiCalendarEventRecurrenceDto()
        ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
            ->frequency('Daily')
            ->occurrenceCount(10)
            ->weekStartDay('Monday')
            ->build())
        ->build())
    ->startDate(new DateTime())
    ->organizer(Models::mapiElectronicAddressDto()
        ->emailAddress('organizer@aspose.com')
        ->build())
    ->body('Some description')
    ->subject('Some summary')
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$file = ;

// Call method:
$result = $api->mapi()->calendar().fromFile($request);

// Result example:
$result = Models::mapiCalendarDto()
    ->attendees(Models::mapiCalendarAttendeesDto()
        ->appointmentRecipients(array(
            Models::mapiRecipientDto()
                ->emailAddress('organizer@aspose.com')
                ->addressType('SMTP')
                ->displayName('Organizer Name')
                ->recipientType('MapiTo')
                ->build(),
            Models::mapiRecipientDto()
                ->emailAddress('attendee@aspose.com')
                ->addressType('SMTP')
                ->displayName('Attendee Name')
                ->recipientType('MapiTo')
                ->build()))
        ->build())
    ->busyStatus('Tentative')
    ->clientIntent(array(
        'Manager'))
    ->endDate(new DateTime())
    ->location('Some location')
    ->recurrence(Models::mapiCalendarEventRecurrenceDto()
        ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
            ->frequency('Daily')
            ->occurrenceCount(10)
            ->weekStartDay('Monday')
            ->build())
        ->build())
    ->startDate(new DateTime())
    ->organizer(Models::mapiElectronicAddressDto()
        ->emailAddress('organizer@aspose.com')
        ->build())
    ->body('Some description')
    ->subject('Some summary')
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **get**

Description: Get MAPI calendar document.

Returns: MAPI Calendar model.

Method call example:
```php
$result = $api->mapi()->calendar()->get($request);
```

### Parameter: request

Description: get method request.

See parameter model documentation at [MapiCalendarGetRequest](MapiCalendarGetRequest.md).

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::MapiCalendarGetRequest()
    ->file_name('calendar.msg')
    ->folder('calendar/location/on/storage')
    ->storage('First Storage')
    ->build();
```

</details>

### Result

Description: MAPI Calendar model.

Return type: [**MapiCalendarDto**](MapiCalendarDto.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::mapiCalendarDto()
    ->attendees(Models::mapiCalendarAttendeesDto()
        ->appointmentRecipients(array(
            Models::mapiRecipientDto()
                ->emailAddress('organizer@aspose.com')
                ->addressType('SMTP')
                ->displayName('Organizer Name')
                ->recipientType('MapiTo')
                ->build(),
            Models::mapiRecipientDto()
                ->emailAddress('attendee@aspose.com')
                ->addressType('SMTP')
                ->displayName('Attendee Name')
                ->recipientType('MapiTo')
                ->build()))
        ->build())
    ->busyStatus('Tentative')
    ->clientIntent(array(
        'Manager'))
    ->endDate(new DateTime())
    ->location('Some location')
    ->recurrence(Models::mapiCalendarEventRecurrenceDto()
        ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
            ->frequency('Daily')
            ->occurrenceCount(10)
            ->weekStartDay('Monday')
            ->build())
        ->build())
    ->startDate(new DateTime())
    ->organizer(Models::mapiElectronicAddressDto()
        ->emailAddress('organizer@aspose.com')
        ->build())
    ->body('Some description')
    ->subject('Some summary')
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$file_name = ;
$folder = ;
$storage = ;

// Call method:
$result = $api->mapi()->calendar().get($request);

// Result example:
$result = Models::mapiCalendarDto()
    ->attendees(Models::mapiCalendarAttendeesDto()
        ->appointmentRecipients(array(
            Models::mapiRecipientDto()
                ->emailAddress('organizer@aspose.com')
                ->addressType('SMTP')
                ->displayName('Organizer Name')
                ->recipientType('MapiTo')
                ->build(),
            Models::mapiRecipientDto()
                ->emailAddress('attendee@aspose.com')
                ->addressType('SMTP')
                ->displayName('Attendee Name')
                ->recipientType('MapiTo')
                ->build()))
        ->build())
    ->busyStatus('Tentative')
    ->clientIntent(array(
        'Manager'))
    ->endDate(new DateTime())
    ->location('Some location')
    ->recurrence(Models::mapiCalendarEventRecurrenceDto()
        ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
            ->frequency('Daily')
            ->occurrenceCount(10)
            ->weekStartDay('Monday')
            ->build())
        ->build())
    ->startDate(new DateTime())
    ->organizer(Models::mapiElectronicAddressDto()
        ->emailAddress('organizer@aspose.com')
        ->build())
    ->body('Some description')
    ->subject('Some summary')
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## save

Description: Save MAPI Calendar to storage.


Method call example:
```php
$api->mapi()->calendar()->save($request);
```

### Parameter: request

Description: Calendar create/update request.

See parameter model documentation at [MapiCalendarSaveRequest](MapiCalendarSaveRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = Models::mapiCalendarSaveRequest()
    ->format('Msg')
    ->storageFile(Models::storageFileLocation()
        ->fileName('calendar.msg')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->value(Models::mapiCalendarDto()
        ->attendees(Models::mapiCalendarAttendeesDto()
            ->appointmentRecipients(array(
                Models::mapiRecipientDto()
                    ->emailAddress('organizer@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Organizer Name')
                    ->recipientType('MapiTo')
                    ->build(),
                Models::mapiRecipientDto()
                    ->emailAddress('attendee@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Attendee Name')
                    ->recipientType('MapiTo')
                    ->build()))
            ->build())
        ->busyStatus('Tentative')
        ->clientIntent(array(
            'Manager'))
        ->endDate(new DateTime())
        ->location('Some location')
        ->recurrence(Models::mapiCalendarEventRecurrenceDto()
            ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
                ->frequency('Daily')
                ->occurrenceCount(10)
                ->weekStartDay('Monday')
                ->build())
            ->build())
        ->startDate(new DateTime())
        ->organizer(Models::mapiElectronicAddressDto()
            ->emailAddress('organizer@aspose.com')
            ->build())
        ->body('Some description')
        ->subject('Some summary')
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
$api = new EmailCloud($appKey, $appSid);

// Prepare parameters:
$request = Models::mapiCalendarSaveRequest()
    ->format('Msg')
    ->storageFile(Models::storageFileLocation()
        ->fileName('calendar.msg')
        ->storage('First Storage')
        ->folderPath('file/location/folder/on/storage')
        ->build())
    ->value(Models::mapiCalendarDto()
        ->attendees(Models::mapiCalendarAttendeesDto()
            ->appointmentRecipients(array(
                Models::mapiRecipientDto()
                    ->emailAddress('organizer@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Organizer Name')
                    ->recipientType('MapiTo')
                    ->build(),
                Models::mapiRecipientDto()
                    ->emailAddress('attendee@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('Attendee Name')
                    ->recipientType('MapiTo')
                    ->build()))
            ->build())
        ->busyStatus('Tentative')
        ->clientIntent(array(
            'Manager'))
        ->endDate(new DateTime())
        ->location('Some location')
        ->recurrence(Models::mapiCalendarEventRecurrenceDto()
            ->recurrencePattern(Models::mapiCalendarDailyRecurrencePatternDto()
                ->frequency('Daily')
                ->occurrenceCount(10)
                ->weekStartDay('Monday')
                ->build())
            ->build())
        ->startDate(new DateTime())
        ->organizer(Models::mapiElectronicAddressDto()
            ->emailAddress('organizer@aspose.com')
            ->build())
        ->body('Some description')
        ->subject('Some summary')
        ->build())
    ->build();

// Call method:
$api->mapi()->calendar().save($request);
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
