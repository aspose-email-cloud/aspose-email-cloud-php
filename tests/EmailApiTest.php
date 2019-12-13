<?php

use Aspose\Email\Configuration;
use PHPUnit\Framework\TestCase;
use Aspose\Email\EmailApi;
use Aspose\Email\Model\AiBcrBase64Image;
use Aspose\Email\Model\AiBcrBase64Rq;
use Aspose\Email\Model\AiBcrImageStorageFile;
use Aspose\Email\Model\AiBcrParseStorageRq;
use Aspose\Email\Model\HierarchicalObject;
use Aspose\Email\Model\HierarchicalObjectRequest;
use Aspose\Email\Model\IndexedHierarchicalObject;
use Aspose\Email\Model\PrimitiveObject;
use Aspose\Email\Model\Requests\aiBcrParseRequest;
use Aspose\Email\Model\Requests\aiBcrParseStorageRequest;
use Aspose\Email\Model\Requests\aiNameCompleteRequest;
use Aspose\Email\Model\Requests\aiNameExpandRequest;
use Aspose\Email\Model\Requests\aiNameFormatRequest;
use Aspose\Email\Model\Requests\aiNameGenderizeRequest;
use Aspose\Email\Model\Requests\aiNameMatchRequest;
use Aspose\Email\Model\Requests\aiNameParseEmailAddressRequest;
use Aspose\Email\Model\Requests\createCalendarRequest;
use Aspose\Email\Model\Requests\createContactRequest;
use Aspose\Email\Model\Requests\createFolderRequest;
use Aspose\Email\Model\Requests\deleteFolderRequest;
use Aspose\Email\Model\Requests\downloadFileRequest;
use Aspose\Email\Model\Requests\getCalendarRequest;
use Aspose\Email\Model\Requests\getContactPropertiesRequest;
use Aspose\Email\Model\Requests\objectExistsRequest;
use Aspose\Email\Model\Requests\uploadFileRequest;
use Aspose\Email\Model\StorageFileLocation;
use Aspose\Email\Model\StorageFolderLocation;

class EmailApiTest extends TestCase
{
    private static $api;
    private static $folder;
    private static $storage = "First Storage";

    private static function getApi() : EmailApi
    {
        return self::$api;
    }

    public static function setUpBeforeClass(): void
    {
        self::$folder = uniqid();
        $configuration = new Configuration();
        $configuration
            ->setAppKey($_ENV["appKey"])
            ->setAppSid($_ENV["appSid"])
            ->setHost($_ENV["apiBaseUrl"]);
        if (array_key_exists("authUrl", $_ENV))
        {
            $configuration->setAuthUrl($_ENV["authUrl"]);
        }
        //$configuration->setDebug(true);
        self::$api = new EmailApi(null, $configuration);
        self::$api->createFolder(new createFolderRequest(self::$folder, self::$storage));
    }

    public static function tearDownAfterClass(): void
    {
        self::getApi()->deleteFolder(new deleteFolderRequest(self::$folder, self::$storage, true));
    }

    /**
     * @group pipeline
     */
    public function testHierarchical(): void
    {
        $calendarFile = $this->createCalendar();
        $calendar = self::getApi()->getCalendar(new getCalendarRequest($calendarFile, self::$folder, self::$storage));
        $filtered = array_values(array_filter($calendar->getInternalProperties(), function($var) {
            return $var->getType() == "PrimitiveObject";
        }));
        $count = count($filtered);
        $this->assertTrue($count >= 3);
        $firstValue = array_values($filtered)[0]->getValue();
        $this->assertNotNull($firstValue);
    }

    /**
     * @group pipeline
     */
    public function testAsync(): void
    {
        $calendarFile = $this->createCalendar();
        $promise = self::getApi()->getCalendarAsync(new getCalendarRequest($calendarFile, self::$folder, self::$storage));
        $result = $promise->wait();
        $this->assertTrue(count($result->getInternalProperties()) >= 5);
    }

    /**
     * @group pipeline
     */
    public function testFile(): void
    {
        $path = dirname(__FILE__)."\\data\\sample.ics";
        $storagePath = self::$folder."/".uniqid().".ics";
        self::getApi()->uploadFile(new uploadFileRequest($storagePath, $path, self::$storage));
        $exists = self::getApi()
            ->objectExists(new objectExistsRequest($storagePath, self::$storage));
        $this->assertTrue(
            $exists->getExists());
        $calendarTempFile = self::getApi()->downloadFile(new downloadFileRequest($storagePath, self::$storage));
        $fileContent = $calendarTempFile->fread($calendarTempFile->getSize());
        $this->assertRegExp("/Access-A-Ride/", $fileContent);
    }

    /**
     * @group pipeline
     */
    public function testContactFormat(): void
    {
        foreach(array("vcard", "msg") as $format)
        {
            $extension = $format == "vcard" ? ".vcf" : ".msg";
            $file = uniqid().$extension;
            self::getApi()->createContact(new createContactRequest($format, $file, (new HierarchicalObjectRequest())
                ->setStorageFolder((new StorageFolderLocation())
                    ->setFolderPath(self::$folder)
                    ->setStorage(self::$storage))
                ->setHierarchicalObject((new HierarchicalObject())
                    ->setName("CONTACT")
                    ->setInternalProperties([]))));
            $exist = self::getApi()->objectExists(new objectExistsRequest(self::$folder."/".$file, self::$storage));
            $this->assertTrue($exist->getExists());
        }
    }

    /**
     * @group pipeline
     */
    public function testDateTime(): void
    {
        $startDate = new DateTime();
        $calendarFile = $this->createCalendar($startDate);
        $calendarData = self::getApi()->getCalendar(new getCalendarRequest($calendarFile, self::$folder, self::$storage));
        $propertiesArray = array_filter($calendarData->getInternalProperties(), function($var) {
            return $var->getName() == "STARTDATE";
        });
        $property = array_values($propertiesArray)[0];
        $format = "Y-m-d H:i:sZ";
        $factStartDate = DateTime::createFromFormat($format, $property->getValue());
        $this->assertEqualsWithDelta($startDate->getTimestamp(), $factStartDate->getTimestamp(), 1);
    }

    public function testAiNameGenderize(): void
    {
        $result = self::getApi()->aiNameGenderize(new aiNameGenderizeRequest("John Cane"));
        $this->assertGreaterThanOrEqual(1, count($result->getValue()));
        $this->assertEquals('Male', $result->getValue()[0]->getGender());
    }

    public function testAiNameFormat(): void
    {
        $result = self::getApi()->aiNameFormat(new aiNameFormatRequest("Mr. John Michael Cane", null, null, null, null, "%t%L%f%m"));
        $this->assertEquals("Mr. Cane J. M.", $result->getName());
    }

    public function testAiNameMatch(): void
    {
        $first = "John Michael Cane";
        $second = "Cane J.";
        $result = self::getApi()->aiNameMatch(new aiNameMatchRequest($first, $second));
        $this->assertGreaterThan(0.5, $result->getSimilarity());
    }

    public function testAiNameExpand(): void
    {
        $name = "Smith Bobby";
        $result = self::getApi()->aiNameExpand(new aiNameExpandRequest($name));
        $expandedNames = array_map(function($weightedName) {
            return $weightedName->getName();
        }, $result->getNames());
        $this->assertContains("Mr. Smith", $expandedNames);
        $this->assertContains("B. Smith", $expandedNames);
    }

    public function testAiNameComplete(): void
    {
        $prefix = "Dav";
        $result = self::getApi()->aiNameComplete(new aiNameCompleteRequest($prefix));
        $names = array_map(function ($weightedName) use ($prefix) {
            return $prefix.$weightedName->getName();
        }, $result->getNames());
        $this->assertContains("David", $names);
        $this->assertContains("Dave", $names);
        $this->assertContains("Davis", $names);
    }

    public function testAiNameParseEmailAddress(): void
    {
        $address = "john-cane@gmail.com";
        $result = self::getApi()->aiNameParseEmailAddress(new aiNameParseEmailAddressRequest(
            $address));
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
        $this->assertEquals("John", $givenName->getValue());
        $this->assertEquals("Cane", $surname->getValue());

        // const string address = "john-cane@gmail.com";
        // var result = await emailApi.AiNameParseEmailAddressAsync(
        //     new AiNameParseEmailAddressRequest(address));
        // var extractedValues = result.Value
        //     .SelectMany(value => value.Name)
        //     .ToList();
        // var givenName = extractedValues.First(value => value.Category == "GivenName");
        // var surName = extractedValues.First(value => value.Category == "Surname");
        // Assert.AreEqual("John", givenName.Value);
        // Assert.AreEqual("Cane", surName.Value);
    }

    public function testAiBcrParseStorage(): void
    {
        $path = dirname(__FILE__)."\\data\\test_single_0001.png";
        $imageFile = uniqid().".png";
        $storagePath = self::$folder."/".$imageFile;
        // 1) Upload business card image to storage
        self::getApi()->uploadFile(new uploadFileRequest($storagePath, $path, self::$storage));
        $outFolder = uniqid();
        $outFolderPath = self::$folder."/".$outFolder;
        self::getApi()->createFolder(new createFolderRequest($outFolderPath, self::$storage));
        // 2) Call business card recognition action
        $result = self::getApi()->aiBcrParseStorage(new aiBcrParseStorageRequest(
            (new AiBcrParseStorageRq())
                ->setOutFolder(
                    (new StorageFolderLocation())
                        ->setFolderPath($outFolderPath)
                        ->setStorage(self::$storage))
                ->setImages(array(
                    (new AiBcrImageStorageFile())
                        ->setIsSingle(true)
                        ->setFile(
                            (new StorageFileLocation())
                                ->setFileName($imageFile)
                                ->setFolderPath(self::$folder)
                                ->setStorage(self::$storage))
                        ))));
        //Check that only one file produced
        $this->assertEquals(1, count($result->getValue()));
        // 3) Get file name from recognition result
        $contactFile = $result->getValue()[0];
        // 4) Download VCard file, produced by recognition method, check it contains text "Thomas"
        $contactTempFile = self::getApi()->downloadFile(new downloadFileRequest(
            $contactFile->getFolderPath()."/".$contactFile->getFileName(),
            self::$storage));
        $fileContent = $contactTempFile->fread($contactTempFile->getSize());
        $this->assertRegExp("/Thomas/", $fileContent);
        // 5) Get VCard object properties list, check that there are 3 properties or more
        $contactProperties = self::getApi()->getContactProperties(
            new getContactPropertiesRequest('vcard', $contactFile->getFileName(), $contactFile->getFolderPath(), self::$storage));
        $this->assertGreaterThanOrEqual(3, count($contactProperties->getInternalProperties()));
    }

    public function testAiBcrParse(): void
    {
        $path = dirname(__FILE__)."\\data\\test_single_0001.png";
        $content = file_get_contents($path);
        $imageBase64 = base64_encode($content);
        $result = self::getApi()->aiBcrParse(new aiBcrParseRequest(
            (new AiBcrBase64Rq())
                ->setImages(array(
                    (new AiBcrBase64Image())
                        ->setIsSingle(true)
                        ->setBase64Data($imageBase64)))));
        $this->assertEquals(1, count($result->getValue()));
        $displayName = array_values(array_filter($result->getValue()[0]->getInternalProperties(), function($var) {
            return $var->getName() == "DISPLAYNAME";
        }))[0];
        $this->assertRegExp("/Thomas/", $displayName->getValue());
    }

    private function createCalendar(DateTime $startDate = null) : string
    {
        $startDate = $startDate == null ? new DateTime() : $startDate;
        $endDate = $startDate->add(new DateInterval("PT1H"));
        $fileName = uniqid() . ".ics";
        self::getApi()->createCalendar(new createCalendarRequest(
            $fileName,
            (new HierarchicalObjectRequest())
                ->setStorageFolder((new StorageFolderLocation())
                    ->setFolderPath(self::$folder)
                    ->setStorage(self::$storage))
                ->setHierarchicalObject((new HierarchicalObject())
                    ->setName("CALENDAR")
                    ->setInternalProperties(array(
                        (new PrimitiveObject())->setName("LOCATION")->setValue("location"),
                        (new PrimitiveObject())->setName("STARTDATE")->setValue($startDate->format(DateTime::ATOM)),
                        (new PrimitiveObject())->setName("ENDDATE")->setValue($endDate->format(DateTime::ATOM)),
                        (new HierarchicalObject())->setName("ORGANIZER")->setInternalProperties(array(
                            (new PrimitiveObject())->setName("ADDRESS")->setValue("organizer@am.ru"),
                            (new PrimitiveObject())->setName("DISPLAYNAME")->setValue("Organizer Man")
                        )),
                        (new HierarchicalObject())->setName("ATTENDEES")->setInternalProperties(array(
                            (new IndexedHierarchicalObject())->setName("ATTENDEE")->setIndex(0)->setInternalProperties(array(
                                (new PrimitiveObject())->setName("ADDRESS")->setValue("attendee@am.ru"),
                                (new PrimitiveObject())->setName("DISPLAYNAME")->setValue("Attendee Man")
                            ))
                        ))
                    )))));
        return $fileName;
    }
}


?>