<?php

use Aspose\Email\Configuration;
use PHPUnit\Framework\TestCase;
use Aspose\Email\EmailApi;
use Aspose\Email\Model\HierarchicalObject;
use Aspose\Email\Model\HierarchicalObjectRequest;
use Aspose\Email\Model\IndexedHierarchicalObject;
use Aspose\Email\Model\PrimitiveObject;
use Aspose\Email\Model\Requests\createCalendarRequest;
use Aspose\Email\Model\Requests\createFolderRequest;
use Aspose\Email\Model\Requests\deleteFolderRequest;
use Aspose\Email\Model\Requests\downloadFileRequest;
use Aspose\Email\Model\Requests\getCalendarRequest;
use Aspose\Email\Model\Requests\objectExistsRequest;
use Aspose\Email\Model\Requests\uploadFileRequest;
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
        self::$folder = uniqid("", true);
        $configuration = new Configuration();
        $configuration->setAppKey($_ENV["appKey"]);
        $configuration->setAppSid($_ENV["appSid"]);
        $configuration->setHost($_ENV["apiBaseUrl"]);
        //$configuration->setDebug(true);
        self::$api = new EmailApi(null, $configuration);
        self::$api->createFolder(new createFolderRequest(self::$folder, self::$storage));
    }

    public static function tearDownAfterClass(): void
    {
        self::getApi()->deleteFolder(new deleteFolderRequest(self::$folder, self::$storage, true));
    }

    public function testHierarchical(): void
    {
        $calendarFile = $this->createCalendar();
        $calendar = self::getApi()->getCalendar(new getCalendarRequest($calendarFile, self::$folder, self::$storage));
        $filtered = array_filter($calendar->getInternalProperties(), function($var) {
            return $var->getType() == "PrimitiveObject";
        });
        $count = count($filtered);
        $this->assertTrue($count >= 3);
        $firstValue = array_values($filtered)[0]->getValue();
        $this->assertNotNull($firstValue);
    }

    public function testAsync(): void
    {
        $calendarFile = $this->createCalendar();
        $promise = self::getApi()->getCalendarAsync(new getCalendarRequest($calendarFile, self::$folder, self::$storage));
        $result = $promise->wait();
        $this->assertTrue(count($result->getInternalProperties()) >= 5);
    }

    public function testFile(): void
    {
        $path = dirname(__FILE__)."\\data\\sample.ics";
        $storagePath = self::$folder."/".uniqid().".ics";
        $what = self::getApi()->uploadFile(new uploadFileRequest($storagePath, $path, self::$storage));
        $exists = self::getApi()
            ->objectExists(new objectExistsRequest($storagePath, self::$storage));
        $this->assertTrue(
            $exists->getExists());
        $calendarTempFile = self::getApi()->downloadFile(new downloadFileRequest($storagePath, self::$storage));
        $fileContent = $calendarTempFile->fread($calendarTempFile->getSize());
        $this->assertRegExp("/Access-A-Ride/", $fileContent);
    }

    private function createCalendar(DateTime $startDate = null) : string
    {
        $startDate = $startDate == null ? new DateTime() : $startDate;
        $endDate = $startDate->add(new DateInterval("PT1H"));
        $fileName = uniqid("", true) . ".ics";
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