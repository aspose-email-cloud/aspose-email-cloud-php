<?php


namespace Test;

use Aspose\Email\Model\MapiCalendarAttendeesDto;
use Aspose\Email\Model\MapiCalendarDailyRecurrencePatternDto;
use Aspose\Email\Model\MapiCalendarDto;
use Aspose\Email\Model\MapiCalendarEventRecurrenceDto;
use Aspose\Email\Model\MapiElectronicAddressDto;
use Aspose\Email\Model\MapiRecipientDto;
use Aspose\Email\Model\Requests\convertMapiCalendarModelToCalendarModelRequest;
use Aspose\Email\Model\Requests\convertMapiCalendarModelToFileRequest;
use Aspose\Email\Model\Requests\getCalendarFileAsMapiModelRequest;
use Aspose\Email\Model\Requests\getMapiCalendarModelRequest;
use Aspose\Email\Model\Requests\saveMapiCalendarModelRequest;
use Aspose\Email\Model\StorageFolderLocation;
use Aspose\Email\Model\StorageModelRqOfMapiCalendarDto;
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
        $calendarDto = $api->convertMapiCalendarModelToCalendarModel(
            new ConvertMapiCalendarModelToCalendarModelRequest(
                $mapiCalendar
            )
        );
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
        $ics = $api->convertMapiCalendarModelToFile(
            new ConvertMapiCalendarModelToFileRequest(
                "Ics",
                $mapiCalendar
            )
        );
        $fileContent = $ics->fread($ics->getSize());
        $this->assertRegExp("/" . $mapiCalendar->getLocation() . "/", $fileContent);

        $mapiCalendarConverted = $api->getCalendarFileAsMapiModel(
            new GetCalendarFileAsMapiModelRequest($ics)
        );
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
        $api->saveMapiCalendarModel(
            new SaveMapiCalendarModelRequest(
                $fileName,
                "Msg",
                new StorageModelRqOfMapiCalendarDto(
                    $mapiCalendar,
                    new StorageFolderLocation(self::$storage, self::$folder)
                )
            )
        );
        $mapiCalendarFromStorage = $api->getMapiCalendarModel(
            new GetMapiCalendarModelRequest(
                $fileName,
                self::$folder,
                self::$storage
            )
        );
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
