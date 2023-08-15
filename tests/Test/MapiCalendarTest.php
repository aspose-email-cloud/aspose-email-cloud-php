<?php


namespace Test;

use Aspose\Email\Model\MapiCalendarAsFileRequest;
use Aspose\Email\Model\MapiCalendarAttendeesDto;
use Aspose\Email\Model\MapiCalendarDailyRecurrencePatternDto;
use Aspose\Email\Model\MapiCalendarDto;
use Aspose\Email\Model\MapiCalendarEventRecurrenceDto;
use Aspose\Email\Model\MapiCalendarFromFileRequest;
use Aspose\Email\Model\MapiCalendarGetRequest;
use Aspose\Email\Model\MapiCalendarSaveRequest;
use Aspose\Email\Model\MapiElectronicAddressDto;
use Aspose\Email\Model\MapiRecipientDto;
use Aspose\Email\Model\StorageFileLocation;
use DateTime;

class MapiCalendarTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testModelToCalendarDto(): void
    {
        $api = self::api();
        $mapiCalendar = self::getMapiCalendarDto();
        $calendarDto = $api->mapi()->calendar()->asCalendarDto($mapiCalendar);
        $this->assertEquals($mapiCalendar->getSubject(), $calendarDto->getSummary());
        $this->assertEquals($mapiCalendar->getLocation(), $calendarDto->getLocation());
    }

    /**
     * @group pipeline
     */
    public function testModelToFile(): void
    {
        $api = self::api();
        $mapiCalendar = self::getMapiCalendarDto();
        $ics = $api->mapi()->calendar()->asFile(new MapiCalendarAsFileRequest(
            "Ics",
            $mapiCalendar
        ));
        $fileContent = $ics->fread($ics->getSize());
        $this->assertMatchesRegularExpression("/" . $mapiCalendar->getLocation() . "/", $fileContent);

        $mapiCalendarConverted = $api->mapi()->calendar()->fromFile(new MapiCalendarFromFileRequest($ics));
        $this->assertEquals($mapiCalendar->getLocation(), $mapiCalendarConverted->getLocation());
    }

    /**
     * @group pipeline
     */
    public function testStorage(): void
    {
        $api = self::api();
        $mapiCalendar = self::getMapiCalendarDto();
        $fileName = uniqid() . ".msg";
        $api->mapi()->calendar()->save(new MapiCalendarSaveRequest(
            new StorageFileLocation(self::$storage, self::$folder, $fileName),
            $mapiCalendar,
            "Msg"
        ));
        $mapiCalendarFromStorage = $api->mapi()->calendar()->get(new MapiCalendarGetRequest(
            $fileName,
            self::$folder,
            self::$storage
        ));
        $this->assertEquals($mapiCalendar->getLocation(), $mapiCalendarFromStorage->getLocation());
    }


    private static function getMapiCalendarDto(): MapiCalendarDto
    {
        return (new MapiCalendarDto())
            ->setAttendees((new MapiCalendarAttendeesDto())
                ->setAppointmentRecipients(array((new MapiRecipientDto())
                    ->setAddressType("SMTP")
                    ->setDisplayName("Organizer Name")
                    ->setEmailAddress("organizer@aspose.com")
                    ->setRecipientType("MapiTo")))
                ->setAppointmentRecipients(array((new MapiRecipientDto())
                    ->setAddressType("SMTP")
                    ->setDisplayName("Attendee Name")
                    ->setEmailAddress("attendee@aspose.com")
                    ->setRecipientType("MapiTo"))))
            ->setClientIntent(array("Manager"))
            ->setRecurrence((new MapiCalendarEventRecurrenceDto())
                ->setRecurrencePattern((new MapiCalendarDailyRecurrencePatternDto())
                    ->setOccurrenceCount(10)
                    ->setWeekStartDay("Monday")))
            ->setOrganizer((new MapiElectronicAddressDto())
                ->setEmailAddress("organizer@aspose.com"))
            ->setBusyStatus("Tentative")
            ->setStartDate(new DateTime())
            ->setEndDate(new DateTime())
            ->setLocation("Some location")
            ->setBody("Some description")
            ->setBodyType("PlainText")
            ->setSubject("Some summary");
    }
}
