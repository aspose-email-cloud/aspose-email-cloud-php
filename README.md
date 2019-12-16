Aspose.Email Cloud is a REST API for creating email applications that work with standard email file formats. This SDK:
- Lets developers manipulate different emails’ formats such as Outlook MSG, EML, VCard, and iCalendar files
- Has a built-in email client
- Supports AI functionalities:
    - The Business card recognition
    - The Name API for parsing and handling personal names

To use this SDK, you need an App SID and an App Key; they can be looked up at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/#/apps) (it requires free registration in Aspose Cloud for this).

## How to use the SDK?
The complete source code is available in the GIT repository.

### Usage examples
To use the API, you should create an EmailApi object:
```php
$configuration = new Configuration(); // Aspose\Email\Configuration
$configuration
    ->setAppKey($_ENV["Your App Key"])
    ->setAppSid($_ENV["Your App SID"]);
$api = new EmailApi(
    null, //GuzzleHttp client, will be created automatically if parameter is null
    $configuration);
```

API calls can be synchronous or asynchronous (GuzzleHttp\Promise is used):
```php
$file = "iCalendarFileName.ics"; //iCalendar file name on storage
$folder = "path/to/iCalendar/file/on/storage";
$storage = "First Storage"; //Storage name

$result = $api->getCalendar(new getCalendarRequest($file, $folder, $storage));
// or
$promise = $api->getCalendarAsync(new getCalendarRequest($file, $folder, $storage));
$result = $promise->wait();
```

#### Business cards recognition API
See examples below:

<details open>
    <summary>Parse business card images to VCard contact files</summary>

```php
$folder = "some/folder/on/storage";
$storage = "First Storage"; //Storage name
$path = "C:\\path\\to\\business\\card\\image\\on\\file\\system";
$imageFile = "someFileName.png"; //Supports different image formats: PNG, JPEG, BMP, TIFF, GIF, etc.
$storagePath = $folder."/".$imageFile;
// Upload business card image to storage
$api->uploadFile(new uploadFileRequest($storagePath, $path, $storage));
$outFolderPath = "some/folder/on/storage"; //Business card recognition results will be saved here
$api->createFolder(new createFolderRequest($outFolderPath, $storage));
// Call business card recognition action
$result = $api->aiBcrParseStorage(new aiBcrParseStorageRequest(
    (new AiBcrParseStorageRq())
        ->setOutFolder(
            (new StorageFolderLocation())
                ->setFolderPath($outFolderPath)
                ->setStorage($storage))
        ->setImages(array( //We can process multiple images in one request
            (new AiBcrImageStorageFile())
                ->setIsSingle(true) //the image contains only one business card (you can upload image with multiple cards on it)
                ->setFile(
                    (new StorageFileLocation())
                        ->setFileName($imageFile)
                        ->setFolderPath($folder)
                        ->setStorage($storage))
                ))));
// Get file name from recognition result
$contactFile = $result->getValue()[0]; //$result->getValue() can contain multiple files, if we sent multicard images or multiple images
// You can download the VCard file, which produced by the recognition method ...
$contactTempFile = $api->downloadFile(new downloadFileRequest(
    $contactFile->getFolderPath()."/".$contactFile->getFileName(),
    $storage));
// ... read content and print it
$fileContent = $contactTempFile->fread($contactTempFile->getSize());
echo $fileContent;
// Also, you can get VCard object properties’ list using Contact API
$contactProperties = $api->getContactProperties(
    new getContactPropertiesRequest(
        'vcard',
        $contactFile->getFileName(),
        $contactFile->getFolderPath(),
        $storage));
//All VCard’s properties are available as a list. Complex properties are represented as hierarchical structures.
//Let's print all primitive properties’ values:
$filtered = array_filter(
    $contactProperties->getInternalProperties(),
    function($var) {
        return $var->getType() == "PrimitiveObject";
    });
foreach($filtered as $property)
{
    echo "Property name: ".$property->getName().", value: ".$property->getValue();
}
```
</details>


<details>
    <summary>Parse images directly, without the using of a storage</summary>

```php
//Read image from file and convert it to Base64 string
$path = "C:\\path\\to\\business\\card\\image\\on\\file\\system";
$content = file_get_contents($path);
$imageBase64 = base64_encode($content);
$result = $api->aiBcrParse(new aiBcrParseRequest(
    (new AiBcrBase64Rq())
        ->setImages(array(
            (new AiBcrBase64Image())
                ->setIsSingle(true)
                ->setBase64Data($imageBase64)))));
//Result contains all recognized VCard objects (only the one in our case)
$contactProperties = $result->getValue()[0];
//VCard object is available as a list of properties, without any external calls:
$filtered = array_filter(
    $contactProperties->getInternalProperties(),
    function($var) {
        return $var->getType() == "PrimitiveObject";
    });
foreach($filtered as $property)
{
    echo "Property name: ".$property->getName().", value: ".$property->getValue();
}
```
</details>

#### Name API
See examples below:
<details open>
    <summary>Detect a person's gender by name</summary>

```php
$result = $api->aiNameGenderize(new aiNameGenderizeRequest("John Cane"));
// the result contains a list of hypothesis about a person's gender.
// all hypothesis include score, so you can use the most scored version,
// which will be the first in a list:
echo $result->getValue()[0]->getGender(); //prints "Male"
```
</details>

<details>
    <summary>Format person's name using defined format</summary>

```php
$result = $api->aiNameFormat(new aiNameFormatRequest(
    "Mr. John Michael Cane", null, null, null, null, "%t%L%f%m"));
echo $result->getName(); //prints "Mr. Cane J. M."
```
</details>

<details>
    <summary>Compare the names to find out if they belong to the same person or not</summary>

```php
$first = "John Michael Cane";
$second = "Cane J.";
$result = $api->aiNameMatch(new aiNameMatchRequest($first, $second));
echo $result->getSimilarity() >= 0.5 ? "true" : "false"; //prints "true", names look similar
```
</details>

<details>
    <summary>Expand a person's name into a list of possible alternatives</summary>

```php
$name = "Smith Bobby";
$result = $api->aiNameExpand(new aiNameExpandRequest($name));
$expandedNames = array_map(function($weightedName) {
    return $weightedName->getName();
}, $result->getNames());
foreach($expandedNames as $name)
{
    echo $name; //prints "Mr. Smith", "B. Smith", etc.
}
```
</details>

<details>
    <summary>Get k most probable names for given starting characters</summary>

```php
$prefix = "Dav";
$result = $api->aiNameComplete(new aiNameCompleteRequest($prefix));
$names = array_map(function ($weightedName) use ($prefix) {
    return $prefix.$weightedName->getName();
}, $result->getNames());
foreach($names as $name)
{
    echo $name; //prints "David", "Dave", "Davis", etc.
}
```
</details>

<details>
    <summary>Parse out a person's name from an email address.</summary>

```php
$address = "john-cane@gmail.com";
$result = $api->aiNameParseEmailAddress(
    new aiNameParseEmailAddressRequest($address));
$extractedNames = array_map(function ($value) {
    return $value->getName();
}, $result->getValue());
$reduced = array_reduce($extractedNames, 'array_merge', array());
$givenName = array_values(array_filter($reduced, function ($value) {
    return $value->getCategory() == "GivenName";
}))[0];
$surname = array_values(array_filter($reduced, function ($value) {
    return $value->getCategory() == "Surname";
}))[0];
echo $givenName; //John
echo $surname; //Cane
```
</details>

### Install Aspose.Email for Cloud via Composer
You can either directly use it in your project via source code or get [Packagegist distribution](https://packagist.org/packages/aspose/aspose-email-cloud).
From the command line:

    composer require aspose/aspose-email-cloud

# Licensing
All Aspose.Email for Cloud SDKs, helper scripts and templates are licensed under [MIT License](LICENSE).

# Resources
+ [**Website**](https://www.aspose.cloud)
+ [**Product Home**](https://products.aspose.cloud/Email/cloud)
+ [**Documentation**](https://docs.aspose.cloud/display/Emailcloud/Home)
+ [**API Reference**](https://apireference.aspose.cloud/email/)
+ [**Free Support Forum**](https://forum.aspose.cloud/c/email)
+ [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)
+ [**Blog**](https://blog.aspose.cloud/category/aspose-products/aspose-email-cloud/)
+ [**Git repository: Aspose.Email Cloud SDK for .Net**](https://github.com/aspose-email-cloud/aspose-email-cloud-dotnet)
+ [**Git repository: Aspose.Email Cloud SDK for Ruby**](https://github.com/aspose-email-cloud/aspose-email-cloud-ruby)
+ [**Git repository: Aspose.Email Cloud SDK for Python**](https://github.com/aspose-email-cloud/aspose-email-cloud-python)
+ [**Git repository: Aspose.Email Cloud SDK for PHP**](https://github.com/aspose-email-cloud/aspose-email-cloud-php)
+ [**Git repository: Aspose.Email Cloud SDK for Typescript**](https://github.com/aspose-email-cloud/aspose-email-cloud-node)
+ [**Git repository: Aspose.Email Cloud SDK for Java**](https://github.com/aspose-email-cloud/aspose-email-cloud-java)
