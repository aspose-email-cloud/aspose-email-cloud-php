[![Packagist](https://img.shields.io/packagist/v/aspose/aspose-email-cloud)](https://packagist.org/packages/aspose/aspose-email-cloud) [![License](https://img.shields.io/github/license/aspose-email-cloud/aspose-email-cloud-php)](https://packagist.org/packages/aspose/aspose-email-cloud) [![PHP](https://img.shields.io/packagist/php-v/aspose/aspose-email-cloud)](https://packagist.org/packages/aspose/aspose-email-cloud) ![tests](https://github.com/aspose-email-cloud/aspose-email-cloud-php/workflows/tests/badge.svg)

# Manage Emails in Cloud via PHP REST SDK

[Aspose.Email Cloud SDK for PHP](https://products.aspose.cloud/email/php) is a REST API SDK for creating email applications that work with standard email file formats such as Outlook MSG, EML, iCalendar files and VCard.

This SDK allows you to work with Aspose.Email Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.

[Aspose.Email Cloud home](https://products.aspose.cloud/email/family)

[Swagger UI](https://apireference.aspose.cloud/email/)

# Cloud Email Processing Features
Aspose.Email Cloud is a REST API for creating email applications that work with standard email file formats. This SDK:
- Lets developers manipulate different emails' formats such as Outlook MSG, EML, VCard, and iCalendar files.
- Supports AI functions:
    - The Business card recognition.
    - The Name API for parsing and handling personal names.
- Has a built-in email client. This client provides:
    - Unified REST API for different email protocols: IMAP, POP3, SMTP, EWS, WebDav.
    - Virtual multi-account.
    - Message threads (POP3 accounts are also supported).
- Email configuration discovery.
- Disposable email address detection.

## Improvements in version 21.9

Aspose.Email Cloud 21.9.0 comes with improvements described below:

- `EmailCloud.Email.Convert` method documentation fixed.
- Some documentation improvements.
- SDK dependencies updated.

See [Release notes](https://docs.aspose.cloud/email/aspose-email-cloud-21-9-release-notes/).


## How to use the SDK?
The complete source code is available in the [GIT repository](https://github.com/aspose-email-cloud/aspose-email-cloud-php/tree/master/src/Aspose/Email).

Use [SDK tutorials](https://docs.aspose.cloud/email/sdk-tutorials/) and [SDK reference documentation](https://docs.aspose.cloud/email/reference-api/).

### Prerequisites
To use this SDK, you need a Client id and a Client secret; they can be looked up at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/#/apps) (it requires free registration in Aspose Cloud for this).

### Installation
You can either directly use SDK in your project via source code or get [Packagegist distribution](https://packagist.org/packages/aspose/aspose-email-cloud).
From the command line:

    composer require aspose/aspose-email-cloud

See more details about SDK installation in this tutorial: [SDK setup](https://docs.aspose.cloud/email/sdk-setup/).

### Usage examples
To use the API, you should create an EmailCloud object:
```php
$configuration = new Configuration(); // Aspose\Email\Configuration
$configuration
    ->setClientSecret("Your Client secret")
    ->setClientId("Your Client id");
$api = new EmailCloud($configuration);
```

#### Business cards recognition API

Use `AiBcrApi::parse` method to parse business card image to VCard DTO:

```php
$file = new SplFileObject("path/to/image/to/parse.png");
$result = $api->ai()->bcr()->parse(
    Models::AiBcrParseRequest()
            ->file($file)
            ->is_single(true)
        ->build()
);
$contact = $result->getValue()[0];
$parsedDisplayName = $contact->getDisplayName();
```

## Aspose.Email Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js |
|------|------|-----|--------|------|---------|
| [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-dotnet) | [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-java) | [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-php) | [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-python) | [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-ruby)  | [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-node) | [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-android) | [GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-swift)|[GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-dart) |[GitHub](https://github.com/aspose-email-cloud/aspose-email-cloud-go) |
| [NuGet](https://www.nuget.org/packages/Aspose.Email-Cloud/) | [Maven](https://repository.aspose.cloud/webapp/#/artifacts/browse/tree/General/repo/com/aspose/aspose-email-cloud) | [Composer](https://packagist.org/packages/aspose/aspose-email-cloud) | [PIP](https://pypi.org/project/aspose.email-cloud/) | [GEM](https://rubygems.org/gems/aspose_email_cloud)  | [NPM](https://www.npmjs.com/package/@asposecloud/aspose-email-cloud) |

[Product Page](https://products.aspose.cloud/email/php) | [Documentation](https://docs.aspose.cloud/email/) | [Demo](https://products.aspose.app/email/family) | [Swagger UI](https://apireference.aspose.cloud/email/) | [Blog](https://blog.aspose.cloud/category/email/) | [Free support](https://forum.aspose.cloud/c/email) | [Free trial](https://dashboard.aspose.cloud/#/apps) | [SDK reference documentation](https://docs.aspose.cloud/email/reference-api)