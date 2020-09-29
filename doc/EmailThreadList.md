# EmailThreadList

List of email threads

## Properties
Name | Type | Description | Notes
---- | ---- | ----------- | -----

 Parent class: [ListResponseOfEmailThread](ListResponseOfEmailThread.md)


## Example
```php
$emailThreadList = Models::emailThreadList()
    ->value(array(
        Models::emailThread()
            ->id('123')
            ->subject('Some email subject')
            ->messages(array(
                Models::emailDto()
                    ->date(new DateTime())
                    ->from(Models::mailAddress()
                        ->address('from@aspose.com')
                        ->build())
                    ->messageId('1')
                    ->subject('Some email subject')
                    ->to(array(
                        Models::mailAddress()
                            ->address('to@aspose.com')
                            ->build()))
                    ->build(),
                Models::emailDto()
                    ->date(new DateTime())
                    ->from(Models::mailAddress()
                        ->address('from@aspose.com')
                        ->build())
                    ->messageId('3')
                    ->subject('Re: Some email subject')
                    ->to(array(
                        Models::mailAddress()
                            ->address('to@aspose.com')
                            ->build()))
                    ->build()))
            ->build()))
    ->build();
```


[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)

