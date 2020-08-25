# Aspose\Email\AiNameApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aiNameComplete**](AiNameApi.md#aiNameComplete) | **GET** /email/AiName/complete | The call proposes k most probable names for given starting characters.
[**aiNameExpand**](AiNameApi.md#aiNameExpand) | **GET** /email/AiName/expand | Expands a person&#39;s name into a list of possible alternatives using options for expanding instructions.
[**aiNameExpandParsed**](AiNameApi.md#aiNameExpandParsed) | **PUT** /email/AiName/expand-parsed | Expands a person&#39;s parsed name into a list of possible alternatives using options for expanding instructions.
[**aiNameFormat**](AiNameApi.md#aiNameFormat) | **GET** /email/AiName/format | Formats a person&#39;s name in correct case and name order using options for formatting instructions.
[**aiNameFormatParsed**](AiNameApi.md#aiNameFormatParsed) | **PUT** /email/AiName/format-parsed | Formats a person&#39;s parsed name in correct case and name order using options for formatting instructions.
[**aiNameGenderize**](AiNameApi.md#aiNameGenderize) | **GET** /email/AiName/genderize | Detect person&#39;s gender from name string.
[**aiNameGenderizeParsed**](AiNameApi.md#aiNameGenderizeParsed) | **PUT** /email/AiName/genderize-parsed | Detect person&#39;s gender from parsed name.
[**aiNameMatch**](AiNameApi.md#aiNameMatch) | **GET** /email/AiName/match | Compare people&#39;s names. Uses options for comparing instructions.
[**aiNameMatchParsed**](AiNameApi.md#aiNameMatchParsed) | **PUT** /email/AiName/match-parsed | Compare people&#39;s parsed names and attributes. Uses options for comparing instructions.
[**aiNameParse**](AiNameApi.md#aiNameParse) | **GET** /email/AiName/parse | Parse name to components.
[**aiNameParseEmailAddress**](AiNameApi.md#aiNameParseEmailAddress) | **GET** /email/AiName/parse-email-address | Parse person&#39;s name out of an email address.


# **aiNameComplete**
```php
function \Aspose\Email\Model\AiNameWeightedVariants aiNameComplete(AiNameCompleteRequest $request)
```
The call proposes k most probable names for given starting characters.

### Return type

[**\Aspose\Email\Model\AiNameWeightedVariants**](AiNameWeightedVariants.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameCompleteRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to complete. |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian). | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France. | [optional] [default to ]
 **encoding** | **string**| A character encoding name. | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name. | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameExpand**
```php
function \Aspose\Email\Model\AiNameWeightedVariants aiNameExpand(AiNameExpandRequest $request)
```
Expands a person's name into a list of possible alternatives using options for expanding instructions.

### Return type

[**\Aspose\Email\Model\AiNameWeightedVariants**](AiNameWeightedVariants.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameExpandRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to expand. |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian). | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France. | [optional] [default to ]
 **encoding** | **string**| A character encoding name. | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name. | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameExpandParsed**
```php
function \Aspose\Email\Model\AiNameWeightedVariants aiNameExpandParsed(AiNameExpandParsedRequest $request)
```
Expands a person's parsed name into a list of possible alternatives using options for expanding instructions.

### Return type

[**\Aspose\Email\Model\AiNameWeightedVariants**](AiNameWeightedVariants.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameExpandParsedRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\AiNameParsedRequest**](AiNameParsedRequest.md)| Parsed name with options. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameFormat**
```php
function \Aspose\Email\Model\AiNameFormatted aiNameFormat(AiNameFormatRequest $request)
```
Formats a person's name in correct case and name order using options for formatting instructions.

### Return type

[**\Aspose\Email\Model\AiNameFormatted**](AiNameFormatted.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameFormatRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $format,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to format. |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian). | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France. | [optional] [default to ]
 **encoding** | **string**| A character encoding name. | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name. | [optional] [default to ]
 **format** | **string**| Format of the name. Predefined format can be used by ID, or custom format can be specified. Predefined formats:      /format/default/ (&#x3D; &#39;%t%F%m%N%L%p&#39;)     /format/FN+LN/ (&#x3D; &#39;%F%L&#39;)     /format/title+FN+LN/ (&#x3D; &#39;%t%F%L&#39;)     /format/FN+MN+LN/ (&#x3D; &#39;%F%M%N%L&#39;)     /format/title+FN+MN+LN/ (&#x3D; &#39;%t%F%M%N%L&#39;)     /format/FN+MI+LN/ (&#x3D; &#39;%F%m%N%L&#39;)     /format/title+FN+MI+LN/ (&#x3D; &#39;%t%F%m%N%L&#39;)     /format/LN/ (&#x3D; &#39;%L&#39;)     /format/title+LN/ (&#x3D; &#39;%t%L&#39;)     /format/LN+FN+MN/ (&#x3D; &#39;%L,%F%M%N&#39;)     /format/LN+title+FN+MN/ (&#x3D; &#39;%L,%t%F%M%N&#39;)     /format/LN+FN+MI/ (&#x3D; &#39;%L,%F%m%N&#39;)     /format/LN+title+FN+MI/ (&#x3D; &#39;%L,%t%F%m%N&#39;)  Custom format string - custom combination of characters and the next term placeholders:      &#39;%t&#39; - Title (prefix)     &#39;%F&#39; - First name     &#39;%f&#39; - First initial     &#39;%M&#39; - Middle name(s)     &#39;%m&#39; - Middle initial(s)     &#39;%N&#39; - Nickname     &#39;%L&#39; - Last name     &#39;%l&#39; - Last initial     &#39;%p&#39; - Postfix  If no value for format option was provided, its default value is &#39;%t%F%m%N%L%p&#39; | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameFormatParsed**
```php
function \Aspose\Email\Model\AiNameFormatted aiNameFormatParsed(AiNameFormatParsedRequest $request)
```
Formats a person's parsed name in correct case and name order using options for formatting instructions.

### Return type

[**\Aspose\Email\Model\AiNameFormatted**](AiNameFormatted.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameFormatParsedRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\AiNameParsedRequest**](AiNameParsedRequest.md)| Parsed name with options. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameGenderize**
```php
function \Aspose\Email\Model\AiNameGenderHypothesisList aiNameGenderize(AiNameGenderizeRequest $request)
```
Detect person's gender from name string.

### Return type

[**\Aspose\Email\Model\AiNameGenderHypothesisList**](AiNameGenderHypothesisList.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameGenderizeRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to genderize. |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian). | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France. | [optional] [default to ]
 **encoding** | **string**| A character encoding name. | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name. | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameGenderizeParsed**
```php
function \Aspose\Email\Model\AiNameGenderHypothesisList aiNameGenderizeParsed(AiNameGenderizeParsedRequest $request)
```
Detect person's gender from parsed name.

### Return type

[**\Aspose\Email\Model\AiNameGenderHypothesisList**](AiNameGenderHypothesisList.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameGenderizeParsedRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\AiNameParsedRequest**](AiNameParsedRequest.md)| Gender detection request data. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameMatch**
```php
function \Aspose\Email\Model\AiNameMatchResult aiNameMatch(AiNameMatchRequest $request)
```
Compare people's names. Uses options for comparing instructions.

### Return type

[**\Aspose\Email\Model\AiNameMatchResult**](AiNameMatchResult.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameMatchRequest(
    $name,
    $other_name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to match. |
 **other_name** | **string**| Another name to match. |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian). | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France. | [optional] [default to ]
 **encoding** | **string**| A character encoding name. | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name. | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameMatchParsed**
```php
function \Aspose\Email\Model\AiNameMatchResult aiNameMatchParsed(AiNameMatchParsedRequest $request)
```
Compare people's parsed names and attributes. Uses options for comparing instructions.

### Return type

[**\Aspose\Email\Model\AiNameMatchResult**](AiNameMatchResult.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameMatchParsedRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\AiNameMatchParsedRequest**](AiNameMatchParsedRequest.md)| Parsed names to match. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameParse**
```php
function \Aspose\Email\Model\AiNameComponentList aiNameParse(AiNameParseRequest $request)
```
Parse name to components.

### Return type

[**\Aspose\Email\Model\AiNameComponentList**](AiNameComponentList.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameParseRequest(
    $name,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| A name to parse. |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian). | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France. | [optional] [default to ]
 **encoding** | **string**| A character encoding name. | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name. | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **aiNameParseEmailAddress**
```php
function \Aspose\Email\Model\AiNameExtractedList aiNameParseEmailAddress(AiNameParseEmailAddressRequest $request)
```
Parse person's name out of an email address.

### Return type

[**\Aspose\Email\Model\AiNameExtractedList**](AiNameExtractedList.md)

### Request parameters
```php
new Aspose\Email\Model\AiNameParseEmailAddressRequest(
    $email_address,
    $language,
    $location,
    $encoding,
    $script,
    $style)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**| Email address to parse. |
 **language** | **string**| An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \&quot;it\&quot; or \&quot;ita\&quot; for Italian). | [optional] [default to ]
 **location** | **string**| A geographic code such as an ISO-3166 two letter country code, for example \&quot;FR\&quot; for France. | [optional] [default to ]
 **encoding** | **string**| A character encoding name. | [optional] [default to ]
 **script** | **string**| A writing system code; starts with the ISO-15924 script name. | [optional] [default to ]
 **style** | **string**| Name writing style. Enum, available values: Formal, Informal, Legal, Academic | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

