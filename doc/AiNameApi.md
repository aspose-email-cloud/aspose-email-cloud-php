# AiNameApi ($emailCloud->ai()->name())

AI Name operations.

## **complete**

Description: The call proposes k most probable names for given starting characters.

Returns: List of name variations.

Method call example:
```php
$result = $api->ai()->name()->complete($request);
```

### Parameter: request

Description: complete method request.

See parameter model documentation at [AiNameCompleteRequest](AiNameCompleteRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiNameCompleteRequest()
    ->name('Dav')
    ->build();
```

</details>

### Result

Description: List of name variations.

Return type: [**AiNameWeightedVariants**](AiNameWeightedVariants.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::aiNameWeightedVariants()
    ->names(array(
        Models::aiNameWeighted()
            ->name('J. Cane')
            ->score(1)
            ->build(),
        Models::aiNameWeighted()
            ->name('Mr. Cane')
            ->score(0.75)
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
$name = ;
$language = ;
$location = ;
$encoding = ;
$script = ;
$style = ;

// Call method:
$result = $api->ai()->name().complete($request);

// Result example:
$result = Models::aiNameWeightedVariants()
    ->names(array(
        Models::aiNameWeighted()
            ->name('J. Cane')
            ->score(1)
            ->build(),
        Models::aiNameWeighted()
            ->name('Mr. Cane')
            ->score(0.75)
            ->build()))
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **expand**

Description: Expands a person's name into a list of possible alternatives using options for expanding instructions.

Returns: List of name variations.

Method call example:
```php
$result = $api->ai()->name()->expand($request);
```

### Parameter: request

Description: expand method request.

See parameter model documentation at [AiNameExpandRequest](AiNameExpandRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiNameExpandRequest()
    ->name('John Cane')
    ->build();
```

</details>

### Result

Description: List of name variations.

Return type: [**AiNameWeightedVariants**](AiNameWeightedVariants.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::aiNameWeightedVariants()
    ->names(array(
        Models::aiNameWeighted()
            ->name('J. Cane')
            ->score(1)
            ->build(),
        Models::aiNameWeighted()
            ->name('Mr. Cane')
            ->score(0.75)
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
$name = ;
$language = ;
$location = ;
$encoding = ;
$script = ;
$style = ;

// Call method:
$result = $api->ai()->name().expand($request);

// Result example:
$result = Models::aiNameWeightedVariants()
    ->names(array(
        Models::aiNameWeighted()
            ->name('J. Cane')
            ->score(1)
            ->build(),
        Models::aiNameWeighted()
            ->name('Mr. Cane')
            ->score(0.75)
            ->build()))
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## expandParsed

Description: Expands a person's parsed name into a list of possible alternatives using options for expanding instructions.

Returns: List of name variations.

Method call example:
```php
$result = $api->ai()->name()->expandParsed($request);
```

### Parameter: request

Description: Parsed name with options.

See parameter model documentation at [AiNameParsedRequest](AiNameParsedRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: List of name variations.

Return type: [**AiNameWeightedVariants**](AiNameWeightedVariants.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::aiNameWeightedVariants()
    ->names(array(
        Models::aiNameWeighted()
            ->name('J. Cane')
            ->score(1)
            ->build(),
        Models::aiNameWeighted()
            ->name('Mr. Cane')
            ->score(0.75)
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
$request = ;

// Call method:
$result = $api->ai()->name().expandParsed($request);

// Result example:
$result = Models::aiNameWeightedVariants()
    ->names(array(
        Models::aiNameWeighted()
            ->name('J. Cane')
            ->score(1)
            ->build(),
        Models::aiNameWeighted()
            ->name('Mr. Cane')
            ->score(0.75)
            ->build()))
    ->build();
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **format**

Description: Formats a person's name in correct case and name order using options for formatting instructions.

Returns: Formatted name.

Method call example:
```php
$result = $api->ai()->name()->format($request);
```

### Parameter: request

Description: format method request.

See parameter model documentation at [AiNameFormatRequest](AiNameFormatRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiNameFormatRequest()
    ->name('Mr. John Michael Cane')
    ->format('%t%L%f%m')
    ->build();
```

</details>

### Result

Description: Formatted name.

Return type: [**AiNameFormatted**](AiNameFormatted.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::aiNameFormatted()
    ->name('Mr. Cane J. M.')
    ->comments('format: %t%L%f%m; source: parsed format')
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$name = ;
$language = ;
$location = ;
$encoding = ;
$script = ;
$format = ;
$style = ;

// Call method:
$result = $api->ai()->name().format($request);

// Result example:
$result = Models::aiNameFormatted()
    ->name('Mr. Cane J. M.')
    ->comments('format: %t%L%f%m; source: parsed format')
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## formatParsed

Description: Formats a person's parsed name in correct case and name order using options for formatting instructions.

Returns: Formatted name.

Method call example:
```php
$result = $api->ai()->name()->formatParsed($request);
```

### Parameter: request

Description: Parsed name with options.

See parameter model documentation at [AiNameParsedRequest](AiNameParsedRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: Formatted name.

Return type: [**AiNameFormatted**](AiNameFormatted.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::aiNameFormatted()
    ->name('Mr. Cane J. M.')
    ->comments('format: %t%L%f%m; source: parsed format')
    ->build();
```
</details>

### Complete example

<details>
    <summary>Method call example:</summary>

```php
$api = new EmailCloud(appKey, appSid);

// Prepare parameters:
$request = ;

// Call method:
$result = $api->ai()->name().formatParsed($request);

// Result example:
$result = Models::aiNameFormatted()
    ->name('Mr. Cane J. M.')
    ->comments('format: %t%L%f%m; source: parsed format')
    ->build();
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **genderize**

Description: Detect person's gender from name string.

Returns: Hypotheses about person&#39;s gender.

Method call example:
```php
$result = $api->ai()->name()->genderize($request);
```

### Parameter: request

Description: genderize method request.

See parameter model documentation at [AiNameGenderizeRequest](AiNameGenderizeRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiNameGenderizeRequest()
    ->name('John Cane')
    ->build();
```

</details>

### Result

Description: Hypotheses about person&#39;s gender.

Return type: [**AiNameGenderHypothesisList**](AiNameGenderHypothesisList.md)

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
$name = ;
$language = ;
$location = ;
$encoding = ;
$script = ;
$style = ;

// Call method:
$result = $api->ai()->name().genderize($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## genderizeParsed

Description: Detect person's gender from parsed name.

Returns: Hypotheses about person&#39;s gender.

Method call example:
```php
$result = $api->ai()->name()->genderizeParsed($request);
```

### Parameter: request

Description: Gender detection request data.

See parameter model documentation at [AiNameParsedRequest](AiNameParsedRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: Hypotheses about person&#39;s gender.

Return type: [**AiNameGenderHypothesisList**](AiNameGenderHypothesisList.md)

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
$request = ;

// Call method:
$result = $api->ai()->name().genderizeParsed($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **match**

Description: Compare people's names. Uses options for comparing instructions.

Returns: Match result.

Method call example:
```php
$result = $api->ai()->name()->match($request);
```

### Parameter: request

Description: match method request.

See parameter model documentation at [AiNameMatchRequest](AiNameMatchRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiNameMatchRequest()
    ->name('John Michael Cane')
    ->other_name('Cane J.')
    ->build();
```

</details>

### Result

Description: Match result.

Return type: [**AiNameMatchResult**](AiNameMatchResult.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::aiNameMatchResult()
    ->similarity(0.6)
    ->mismatches(array(
        Models::aiNameMismatch()
            ->category('Gender')
            ->explanation('no_match')
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
$name = ;
$other_name = ;
$language = ;
$location = ;
$encoding = ;
$script = ;
$style = ;

// Call method:
$result = $api->ai()->name().match($request);

// Result example:
$result = Models::aiNameMatchResult()
    ->similarity(0.6)
    ->mismatches(array(
        Models::aiNameMismatch()
            ->category('Gender')
            ->explanation('no_match')
            ->build()))
    ->build();
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## matchParsed

Description: Compare people's parsed names and attributes. Uses options for comparing instructions.

Returns: Match result.

Method call example:
```php
$result = $api->ai()->name()->matchParsed($request);
```

### Parameter: request

Description: Parsed names to match.

See parameter model documentation at [AiNameMatchParsedRequest](AiNameMatchParsedRequest.md)

<details>
    <summary>Parameter initialization example:</summary>
    
```php
$request = ;
```

</details>


### Result

Description: Match result.

Return type: [**AiNameMatchResult**](AiNameMatchResult.md)

<details>
    <summary>Result example</summary>

```php
$result = Models::aiNameMatchResult()
    ->similarity(0.6)
    ->mismatches(array(
        Models::aiNameMismatch()
            ->category('Gender')
            ->explanation('no_match')
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
$request = ;

// Call method:
$result = $api->ai()->name().matchParsed($request);

// Result example:
$result = Models::aiNameMatchResult()
    ->similarity(0.6)
    ->mismatches(array(
        Models::aiNameMismatch()
            ->category('Gender')
            ->explanation('no_match')
            ->build()))
    ->build();
```

</details>

[[Back to top]](#) [[Back to Model list]](Models.md) [[Back to README]](README.md)
## **parse**

Description: Parse name to components.

Returns: List of name components.

Method call example:
```php
$result = $api->ai()->name()->parse($request);
```

### Parameter: request

Description: parse method request.

See parameter model documentation at [AiNameParseRequest](AiNameParseRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiNameParseRequest()
    ->name('John Cane')
    ->language('eng')
    ->location('USA')
    ->build();
```

</details>

### Result

Description: List of name components.

Return type: [**AiNameComponentList**](AiNameComponentList.md)

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
$name = ;
$language = ;
$location = ;
$encoding = ;
$script = ;
$style = ;

// Call method:
$result = $api->ai()->name().parse($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

## **parseEmailAddress**

Description: Parse person's name out of an email address.

Returns: Match result.

Method call example:
```php
$result = $api->ai()->name()->parseEmailAddress($request);
```

### Parameter: request

Description: parseEmailAddress method request.

See parameter model documentation at [AiNameParseEmailAddressRequest](AiNameParseEmailAddressRequest.md)

<details>
    <summary>Parameter initialization example:</summary>

```php
$request = Models::AiNameParseEmailAddressRequest()
    ->email_address('john-cane@gmail.com')
    ->build();
```

</details>

### Result

Description: Match result.

Return type: [**AiNameExtractedList**](AiNameExtractedList.md)

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
$email_address = ;
$language = ;
$location = ;
$encoding = ;
$script = ;
$style = ;

// Call method:
$result = $api->ai()->name().parseEmailAddress($request);

// Result example:
$result = ;
```

</details>

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

