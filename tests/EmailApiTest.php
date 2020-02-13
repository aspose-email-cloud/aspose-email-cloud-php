<?php

use Aspose\Email\Configuration;
use PHPUnit\Framework\TestCase;
use Aspose\Email\EmailApi;
use Aspose\Email\Model\AiBcrBase64Image;
use Aspose\Email\Model\AiBcrBase64Rq;
use Aspose\Email\Model\AiBcrImageStorageFile;
use Aspose\Email\Model\AiBcrParseStorageRq;
use Aspose\Email\Model\CalendarDto;
use Aspose\Email\Model\CalendarDtoAlternateRq;
use Aspose\Email\Model\ContactDto;
use Aspose\Email\Model\EmailAccountConfig;
use Aspose\Email\Model\EmailAddress;
use Aspose\Email\Model\EmailDto;
use Aspose\Email\Model\EnumWithCustomOfEmailAddressCategory;
use Aspose\Email\Model\EnumWithCustomOfPhoneNumberCategory;
use Aspose\Email\Model\HierarchicalObject;
use Aspose\Email\Model\HierarchicalObjectRequest;
use Aspose\Email\Model\IndexedHierarchicalObject;
use Aspose\Email\Model\MailAddress;
use Aspose\Email\Model\PhoneNumber;
use Aspose\Email\Model\PrimitiveObject;
use Aspose\Email\Model\Requests\AiBcrParseModelRequest;
use Aspose\Email\Model\Requests\aiBcrParseRequest;
use Aspose\Email\Model\Requests\aiBcrParseStorageRequest;
use Aspose\Email\Model\Requests\aiNameCompleteRequest;
use Aspose\Email\Model\Requests\aiNameExpandRequest;
use Aspose\Email\Model\Requests\aiNameFormatRequest;
use Aspose\Email\Model\Requests\aiNameGenderizeRequest;
use Aspose\Email\Model\Requests\aiNameMatchRequest;
use Aspose\Email\Model\Requests\aiNameParseEmailAddressRequest;
use Aspose\Email\Model\Requests\ConvertCalendarModelToAlternateRequest;
use Aspose\Email\Model\Requests\createCalendarRequest;
use Aspose\Email\Model\Requests\createContactRequest;
use Aspose\Email\Model\Requests\createFolderRequest;
use Aspose\Email\Model\Requests\deleteFolderRequest;
use Aspose\Email\Model\Requests\DiscoverEmailConfigRequest;
use Aspose\Email\Model\Requests\DownloadFileRequest;
use Aspose\Email\Model\Requests\getCalendarRequest;
use Aspose\Email\Model\Requests\getContactPropertiesRequest;
use Aspose\Email\Model\Requests\ObjectExistsRequest;
use Aspose\Email\Model\Requests\SaveCalendarModelRequest;
use Aspose\Email\Model\Requests\SaveContactModelRequest;
use Aspose\Email\Model\Requests\SaveEmailModelRequest;
use Aspose\Email\Model\Requests\SaveMailAccountRequest;
use Aspose\Email\Model\Requests\SendEmailModelRequest;
use Aspose\Email\Model\Requests\uploadFileRequest;
use Aspose\Email\Model\SaveEmailAccountRequest;
use Aspose\Email\Model\SendEmailModelRq;
use Aspose\Email\Model\StorageFileLocation;
use Aspose\Email\Model\StorageFolderLocation;
use Aspose\Email\Model\StorageModelRqOfCalendarDto;
use Aspose\Email\Model\StorageModelRqOfContactDto;
use Aspose\Email\Model\StorageModelRqOfEmailDto;

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
        self::$api->createFolder(new CreateFolderRequest(self::$folder, self::$storage));
    }

    public static function tearDownAfterClass(): void
    {
        self::getApi()->deleteFolder(new DeleteFolderRequest(self::$folder, self::$storage, true));
    }

    /**
     * @group pipeline
     */
    public function testHierarchical(): void
    {
        $calendarFile = $this->createCalendar();
        $calendar = self::getApi()->getCalendar(new GetCalendarRequest($calendarFile, self::$folder, self::$storage));
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
        $promise = self::getApi()->getCalendarAsync(new GetCalendarRequest($calendarFile, self::$folder, self::$storage));
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
        self::getApi()->uploadFile(new UploadFileRequest($storagePath, $path, self::$storage));
        $exists = self::getApi()
            ->objectExists(new ObjectExistsRequest($storagePath, self::$storage));
        $this->assertTrue(
            $exists->getExists());
        $calendarTempFile = self::getApi()->downloadFile(new DownloadFileRequest($storagePath, self::$storage));
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
            self::getApi()->createContact(new CreateContactRequest($format, $file, new HierarchicalObjectRequest(
                new HierarchicalObject("CONTACT", null, []),
                new StorageFolderLocation(self::$storage, self::$folder))));
            $exist = self::getApi()->objectExists(new ObjectExistsRequest(self::$folder."/".$file, self::$storage));
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
        $calendarData = self::getApi()->getCalendar(new GetCalendarRequest($calendarFile, self::$folder, self::$storage));
        $propertiesArray = array_filter($calendarData->getInternalProperties(), function($var) {
            return $var->getName() == "STARTDATE";
        });
        $property = array_values($propertiesArray)[0];
        $format = "Y-m-d H:i:sZ";
        $factStartDate = DateTime::createFromFormat($format, $property->getValue());
        $this->assertEqualsWithDelta($startDate->getTimestamp(), $factStartDate->getTimestamp(), 1);
    }

    /**
     * @group pipeline
     */
    public function testAiNameGenderize(): void
    {
        $result = self::getApi()->aiNameGenderize(new AiNameGenderizeRequest("John Cane"));
        $this->assertGreaterThanOrEqual(1, count($result->getValue()));
        $this->assertEquals('Male', $result->getValue()[0]->getGender());
    }

    /**
     * @group pipeline
     */
    public function testAiNameFormat(): void
    {
        $result = self::getApi()->aiNameFormat(new AiNameFormatRequest("Mr. John Michael Cane", null, null, null, null, "%t%L%f%m"));
        $this->assertEquals("Mr. Cane J. M.", $result->getName());
    }

    /**
     * @group pipeline
     */
    public function testAiNameMatch(): void
    {
        $first = "John Michael Cane";
        $second = "Cane J.";
        $result = self::getApi()->aiNameMatch(new AiNameMatchRequest($first, $second));
        $this->assertGreaterThan(0.5, $result->getSimilarity());
    }

    /**
     * @group pipeline
     */
    public function testAiNameExpand(): void
    {
        $name = "Smith Bobby";
        $result = self::getApi()->aiNameExpand(new AiNameExpandRequest($name));
        $expandedNames = array_map(function($weightedName) {
            return $weightedName->getName();
        }, $result->getNames());
        $this->assertContains("Mr. Smith", $expandedNames);
        $this->assertContains("B. Smith", $expandedNames);
    }

    /**
     * @group pipeline
     */
    public function testAiNameComplete(): void
    {
        $prefix = "Dav";
        $result = self::getApi()->aiNameComplete(new AiNameCompleteRequest($prefix));
        $names = array_map(function ($weightedName) use ($prefix) {
            return $prefix.$weightedName->getName();
        }, $result->getNames());
        $this->assertContains("David", $names);
        $this->assertContains("Dave", $names);
        $this->assertContains("Davis", $names);
    }

    /**
     * @group pipeline
     */
    public function testAiNameParseEmailAddress(): void
    {
        $address = "john-cane@gmail.com";
        $result = self::getApi()->aiNameParseEmailAddress(new AiNameParseEmailAddressRequest($address));
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
    }

    /**
     * @group pipeline
     */
    public function testAiBcrParseStorage(): void
    {
        $path = dirname(__FILE__)."\\data\\test_single_0001.png";
        $imageFile = uniqid().".png";
        $storagePath = self::$folder."/".$imageFile;
        // 1) Upload business card image to storage
        self::getApi()->uploadFile(new UploadFileRequest($storagePath, $path, self::$storage));
        $outFolder = uniqid();
        $outFolderPath = self::$folder."/".$outFolder;
        self::getApi()->createFolder(new CreateFolderRequest($outFolderPath, self::$storage));
        // 2) Call business card recognition action
        $result = self::getApi()->aiBcrParseStorage(new AiBcrParseStorageRequest(
            new AiBcrParseStorageRq(
                null,
                array(new AiBcrImageStorageFile(true, new StorageFileLocation(self::$storage, self::$folder, $imageFile))),
                new StorageFolderLocation(self::$storage, $outFolderPath))));
        //Check that only one file produced
        $this->assertEquals(1, count($result->getValue()));
        // 3) Get file name from recognition result
        $contactFile = $result->getValue()[0];
        // 4) Download VCard file, produced by recognition method, check it contains text "Thomas"
        $contactTempFile = self::getApi()->downloadFile(new DownloadFileRequest(
            $contactFile->getFolderPath()."/".$contactFile->getFileName(),
            self::$storage));
        $fileContent = $contactTempFile->fread($contactTempFile->getSize());
        $this->assertRegExp("/Thomas/", $fileContent);
        // 5) Get VCard object properties list, check that there are 3 properties or more
        $contactProperties = self::getApi()->getContactProperties(
            new GetContactPropertiesRequest('vcard', $contactFile->getFileName(), $contactFile->getFolderPath(), self::$storage));
        $this->assertGreaterThanOrEqual(3, count($contactProperties->getInternalProperties()));
    }

    /**
     * @group pipeline
     */
    public function testAiBcrParse(): void
    {
        $path = dirname(__FILE__)."\\data\\test_single_0001.png";
        $content = file_get_contents($path);
        $imageBase64 = base64_encode($content);
        $result = self::getApi()->aiBcrParse(new AiBcrParseRequest(
            new AiBcrBase64Rq(null, array(new AiBcrBase64Image(true, $imageBase64)))));
        $this->assertEquals(1, count($result->getValue()));
        $displayName = array_values(array_filter($result->getValue()[0]->getInternalProperties(), function($var) {
            return $var->getName() == "DISPLAYNAME";
        }))[0];
        $this->assertRegExp("/Thomas/", $displayName->getValue());
    }

    /**
     * @group pipeline
     */
    public function testCreateCalendarEmail(): void
    {
        $calendar = (new CalendarDto())
            ->setAttendees(array(new MailAddress("Attendee Name", "attendee@aspose.com", "Accepted")))
            ->setDescription("Some description")
            ->setSummary("Some summary")
            ->setOrganizer(new MailAddress("Organizer Name", "organizer@aspose.com", "Accepted"))
            ->setStartDate(new DateTime())
            ->setEndDate((new DateTime())->add(new DateInterval("PT1H")))
            ->setLocation("Some location");
        $folderLocation = new StorageFolderLocation(self::$storage, self::$folder);
        $calendarFile = uniqid() . ".ics";
        self::getApi()->saveCalendarModel(
            new SaveCalendarModelRequest(
                $calendarFile,
                new StorageModelRqOfCalendarDto($calendar, $folderLocation)));

        $exist = self::getApi()->objectExists(
            new ObjectExistsRequest(self::$folder . "/" . $calendarFile, self::$storage));
        $this->assertTrue($exist->getExists());

        $alternate = self::getApi()->convertCalendarModelToAlternate(
            new ConvertCalendarModelToAlternateRequest(
                new CalendarDtoAlternateRq($calendar, "Create")));
        $email = (new EmailDto())
            ->setAlternateViews(array($alternate))
            ->setFrom(new MailAddress("Organizer Name", "organizer@aspose.com"))
            ->setTo(array(new MailAddress("Attendee Name", "attendee@aspose.com")))
            ->setSubject("Some subject")
            ->setBody("Some body");
        $emailFile = uniqid() . ".eml";
        self::getApi()->saveEmailModel(
            new SaveEmailModelRequest(
                "Eml", $emailFile,
                new StorageModelRqOfEmailDto($email, $folderLocation)));
        $downloaded = self::getApi()->downloadFile(
            new DownloadFileRequest(self::$folder . "/" . $emailFile, self::$storage));
        $downloadedContent = $downloaded->fread($downloaded->getSize());
        $this->assertRegExp("/organizer@aspose.com/", $downloadedContent);
    }

    /**
     * @group pipeline
     */
    public function testCreateContactModel(): void
    {
        $contact = (new ContactDto())
            ->setGender("Male")
            ->setSurname("Thomas")
            ->setGivenName("Alex")
            ->setEmailAddresses(array(new EmailAddress(
                new EnumWithCustomOfEmailAddressCategory("Work"),
                "Alex Thomas", true, null, "alex.thomas@work.com")))
            ->setPhoneNumbers(array(new PhoneNumber(
                new EnumWithCustomOfPhoneNumberCategory("Work"),
                "+49211424721", true)));
        $contactFile = uniqid() . ".vcf";
        self::getApi()->saveContactModel(
            new SaveContactModelRequest(
                "VCard", $contactFile,
                new StorageModelRqOfContactDto(
                    $contact,
                    new StorageFolderLocation(self::$storage, self::$folder))));
        $exist = self::getApi()->objectExists(
            new ObjectExistsRequest(self::$folder . "/" . $contactFile, self::$storage));
        $this->assertTrue($exist->getExists());
    }

    /**
     * @group pipeline
     */
    public function testAiBcrParseModel(): void
    {
        $path = dirname(__FILE__)."\\data\\test_single_0001.png";
        $content = file_get_contents($path);
        $imageBase64 = base64_encode($content);
        $result = self::getApi()->aiBcrParseModel(new AiBcrParseModelRequest(
            new AiBcrBase64Rq(null, array(new AiBcrBase64Image(true, $imageBase64)))));
        $this->assertEquals(1, count($result->getValue()));
        $displayName = $result->getValue()[0]->getDisplayName();
        $this->assertRegExp("/Thomas/", $displayName);
    }

    /**
     * @group pipeline
     */
    public function testDiscoverEmailConfig(): void
    {
        $configs = self::getApi()->discoverEmailConfig(new DiscoverEmailConfigRequest(
            "example@gmail.com", true));
        $this->assertGreaterThanOrEqual(2, count($configs->getValue()));
        $smtp = array_values(array_filter($configs->getValue(), function(EmailAccountConfig $var) {
            return $var->getProtocolType() == "SMTP";
        }))[0];
        $this->assertEquals("smtp.gmail.com", $smtp->getHost());
    }

    private function createCalendar(DateTime $startDate = null) : string
    {
        $startDate = $startDate == null ? new DateTime() : $startDate;
        $endDate = $startDate->add(new DateInterval("PT1H"));
        $fileName = uniqid() . ".ics";
        self::getApi()->createCalendar(new CreateCalendarRequest(
            $fileName,
            new HierarchicalObjectRequest(
                new HierarchicalObject("CALENDAR", null, array(
                    new PrimitiveObject("LOCATION", null, "location"),
                    new PrimitiveObject("STARTDATE", null, $startDate->format(DateTime::ATOM)),
                    new PrimitiveObject("ENDDATE", null, $endDate->format(DateTime::ATOM)),
                    new HierarchicalObject("ORGANIZER", null, array(
                        new PrimitiveObject("ADDRESS", null, "organizer@am.ru"),
                        new PrimitiveObject("DISPLAYNAME", null, "Organizer Man"))),
                    new HierarchicalObject("ATTENDEES", null, array(
                        new IndexedHierarchicalObject("ATTENDEE", null, 0, array(
                            new PrimitiveObject("ADDRESS", null, "attendee@am.ru"),
                            new PrimitiveObject("DISPLAYNAME", null, "Attendee Man"))))))),
                new StorageFolderLocation(self::$storage, self::$folder))));
        return $fileName;
    }
}


?>