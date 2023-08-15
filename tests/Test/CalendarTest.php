<?php


namespace Test;

use Aspose\Email\Model\CalendarAsAlternateRequest;
use Aspose\Email\Model\CalendarAsFileRequest;
use Aspose\Email\Model\CalendarConvertRequest;
use Aspose\Email\Model\CalendarDto;
use Aspose\Email\Model\CalendarFromFileRequest;
use Aspose\Email\Model\CalendarSaveRequest;
use Aspose\Email\Model\DailyRecurrencePatternDto;
use Aspose\Email\Model\DownloadFileRequest;
use Aspose\Email\Model\EmailDto;
use Aspose\Email\Model\EmailSaveRequest;
use Aspose\Email\Model\MailAddress;
use Aspose\Email\Model\ObjectExistsRequest;
use Aspose\Email\Model\StorageFileLocation;
use DateInterval;
use DateTime;

class CalendarTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testCreateCalendarEmail(): void
    {
        $calendar = $this->getCalendarDto();
        $calendarFile = uniqid() . ".ics";
        self::api()->calendar()->save(new CalendarSaveRequest(
            new StorageFileLocation(self::$storage, self::$folder, $calendarFile),
            $calendar,
            "Ics"
        ));

        $exist = self::api()->cloudStorage()->storage()->objectExists(
            new ObjectExistsRequest(self::$folder . "/" . $calendarFile, self::$storage)
        );
        $this->assertTrue($exist->getExists());

        $alternate = self::api()->calendar()->asAlternate(
            new CalendarAsAlternateRequest($calendar, "Create")
        );
        $email = (new EmailDto())
            ->setAlternateViews(array($alternate))
            ->setFrom(new MailAddress("Organizer Name", "organizer@aspose.com"))
            ->setTo(array(new MailAddress("Attendee Name", "attendee@aspose.com")))
            ->setSubject("Some subject")
            ->setBody("Some body");
        $emailFile = uniqid() . ".eml";
        self::api()->email()->save(new EmailSaveRequest(
            new StorageFileLocation(self::$storage, self::$folder, $emailFile),
            $email,
            "Eml"
        ));
        $downloaded = self::api()->cloudStorage()->file()->downloadFile(
            new DownloadFileRequest(self::$folder . "/" . $emailFile, self::$storage)
        );
        $downloadedContent = $downloaded->fread($downloaded->getSize());
        $this->assertMatchesRegularExpression("/organizer@aspose.com/", $downloadedContent);
    }

    /**
     * @group pipeline
     */
    public function testCalendarConverter(): void
    {
        $api = self::api();
        //Create DTO with specified location:
        $calendarDto = $this->getCalendarDto();
        //We can convert this DTO to a MAPI or ICS file:
        $mapi = $api->calendar()->asFile(new CalendarAsFileRequest('Msg', $calendarDto));
        //Let's convert this file to an ICS format:
        $ics = $api->calendar()->convert(new CalendarConvertRequest('Ics', $mapi));
        //ICS is a text format. We can read it to a string and check that it
        //contains specified location as a substring:
        $fileContent = $ics->fread($ics->getSize());
        $this->assertMatchesRegularExpression("/" . $calendarDto->getLocation() . "/", $fileContent);
        //We can also convert the file back to a CalendarDto
        $dto = $api->calendar()->fromFile(new CalendarFromFileRequest($ics));
        $this->assertEquals($calendarDto->getLocation(), $dto->getLocation());
    }

    /**
     * @group pipeline
     */
    public function testConvertModelToMapiModel()
    {
        $api = self::api();
        $calendar = self::getCalendarDto();
        $mapiCalendar = $api->calendar()->asMapi($calendar);
        $this->assertEquals($calendar->getLocation(), $mapiCalendar->getLocation());
        $this->assertEquals(
            'MapiCalendarDailyRecurrencePatternDto',
            $mapiCalendar->getRecurrence()->getRecurrencePattern()->getDiscriminator()
        );
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
            ->setLocation("Some location")
            ->setRecurrence((new DailyRecurrencePatternDto())
                ->setOccurs(10)
                ->setWeekStart("Monday"));
    }
}
