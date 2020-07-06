<?php


namespace Test;

use Aspose\Email\Model\CalendarDto;
use Aspose\Email\Model\CalendarDtoAlternateRq;
use Aspose\Email\Model\ContactDto;
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
use Aspose\Email\Model\Requests\convertCalendarModelToAlternateRequest;
use Aspose\Email\Model\Requests\convertCalendarModelToFileRequest;
use Aspose\Email\Model\Requests\convertCalendarRequest;
use Aspose\Email\Model\Requests\createCalendarRequest;
use Aspose\Email\Model\Requests\downloadFileRequest;
use Aspose\Email\Model\Requests\getCalendarFileAsModelRequest;
use Aspose\Email\Model\Requests\getCalendarRequest;
use Aspose\Email\Model\Requests\objectExistsRequest;
use Aspose\Email\Model\Requests\saveCalendarModelRequest;
use Aspose\Email\Model\Requests\saveContactModelRequest;
use Aspose\Email\Model\Requests\saveEmailModelRequest;
use Aspose\Email\Model\StorageFolderLocation;
use Aspose\Email\Model\StorageModelRqOfCalendarDto;
use Aspose\Email\Model\StorageModelRqOfContactDto;
use Aspose\Email\Model\StorageModelRqOfEmailDto;
use DateInterval;
use DateTime;

class CalendarTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testHierarchical(): void
    {
        $calendarFile = $this->createCalendar();
        $calendar = self::getApi()->getCalendar(new GetCalendarRequest(
            $calendarFile,
            self::$folder,
            self::$storage
        ));
        $filtered = array_values(array_filter($calendar->getInternalProperties(), function ($var) {
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
        $promise =
            self::getApi()->getCalendarAsync(new GetCalendarRequest(
                $calendarFile,
                self::$folder,
                self::$storage
            ));
        $result = $promise->wait();
        $this->assertTrue(count($result->getInternalProperties()) >= 5);
    }

    /**
     * @group pipeline
     */
    public function testDateTime(): void
    {
        $startDate = new DateTime();
        $calendarFile = $this->createCalendar($startDate);
        $calendarData =
            self::getApi()->getCalendar(new GetCalendarRequest(
                $calendarFile,
                self::$folder,
                self::$storage
            ));
        $propertiesArray = array_filter($calendarData->getInternalProperties(), function ($var) {
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
    public function testCreateCalendarEmail(): void
    {
        $calendar = $this->getCalendarDto();
        $folderLocation = new StorageFolderLocation(self::$storage, self::$folder);
        $calendarFile = uniqid() . ".ics";
        self::getApi()->saveCalendarModel(
            new SaveCalendarModelRequest(
                $calendarFile,
                new StorageModelRqOfCalendarDto($calendar, $folderLocation)
            )
        );

        $exist = self::getApi()->objectExists(
            new ObjectExistsRequest(self::$folder . "/" . $calendarFile, self::$storage)
        );
        $this->assertTrue($exist->getExists());

        $alternate = self::getApi()->convertCalendarModelToAlternate(
            new ConvertCalendarModelToAlternateRequest(
                new CalendarDtoAlternateRq($calendar, "Create")
            )
        );
        $email = (new EmailDto())
            ->setAlternateViews(array($alternate))
            ->setFrom(new MailAddress("Organizer Name", "organizer@aspose.com"))
            ->setTo(array(new MailAddress("Attendee Name", "attendee@aspose.com")))
            ->setSubject("Some subject")
            ->setBody("Some body");
        $emailFile = uniqid() . ".eml";
        self::getApi()->saveEmailModel(
            new SaveEmailModelRequest(
                "Eml",
                $emailFile,
                new StorageModelRqOfEmailDto($email, $folderLocation)
            )
        );
        $downloaded = self::getApi()->downloadFile(
            new DownloadFileRequest(self::$folder . "/" . $emailFile, self::$storage)
        );
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
                "Alex Thomas",
                true,
                null,
                "alex.thomas@work.com"
            )))
            ->setPhoneNumbers(array(new PhoneNumber(
                new EnumWithCustomOfPhoneNumberCategory("Work"),
                "+49211424721",
                true
            )));
        $contactFile = uniqid() . ".vcf";
        self::getApi()->saveContactModel(
            new SaveContactModelRequest(
                "VCard",
                $contactFile,
                new StorageModelRqOfContactDto(
                    $contact,
                    new StorageFolderLocation(self::$storage, self::$folder)
                )
            )
        );
        $exist = self::getApi()->objectExists(
            new ObjectExistsRequest(self::$folder . "/" . $contactFile, self::$storage)
        );
        $this->assertTrue($exist->getExists());
    }

    /**
     * @group pipeline
     */
    public function testCalendarConverter(): void
    {
        $api = self::getApi();
        //Create DTO with specified location:
        $calendarDto = $this->getCalendarDto();
        //We can convert this DTO to a MAPI or ICS file:
        $mapi = $api->convertCalendarModelToFile(new ConvertCalendarModelToFileRequest(
            'Msg',
            $calendarDto
        ));
        //Let's convert this file to an ICS format:
        $ics = $api->convertCalendar(new ConvertCalendarRequest('Ics', $mapi));
        //ICS is a text format. We can read it to a string and check that it
        //contains specified location as a substring:
        $fileContent = $ics->fread($ics->getSize());
        $this->assertRegExp("/" . $calendarDto->getLocation() . "/", $fileContent);
        //We can also convert the file back to a CalendarDto
        $dto = $api->getCalendarFileAsModel(new GetCalendarFileAsModelRequest($ics));
        $this->assertEquals($calendarDto->getLocation(), $dto->getLocation());
    }

    private function createCalendar(DateTime $startDate = null): string
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
                new StorageFolderLocation(self::$storage, self::$folder)
            )
        ));
        return $fileName;
    }

    /**
     * @return CalendarDto
     */
    private static function getCalendarDto(): CalendarDto
    {
        return (new CalendarDto())
            ->setAttendees(array(new MailAddress(
                "Attendee Name",
                "attendee@aspose.com",
                "Accepted"
            )))
            ->setDescription("Some description")
            ->setSummary("Some summary")
            ->setOrganizer(new MailAddress("Organizer Name", "organizer@aspose.com", "Accepted"))
            ->setStartDate(new DateTime())
            ->setEndDate((new DateTime())->add(new DateInterval("PT1H")))
            ->setLocation("Some location");
    }
}