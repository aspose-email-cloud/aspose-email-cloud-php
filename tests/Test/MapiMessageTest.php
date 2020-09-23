<?php


namespace Test;

use Aspose\Email\Model\MapiAttachmentDto;
use Aspose\Email\Model\MapiMessageAsFileRequest;
use Aspose\Email\Model\MapiMessageDto;
use Aspose\Email\Model\MapiMessageFromFileRequest;
use Aspose\Email\Model\MapiRecipientDto;
use Aspose\Email\Model\Models;
use DateTime;

class MapiMessageTest extends TestBase
{

    /**
     * @group pipeline
     */
    public function testModelToEmailDto(): void
    {
        $api = self::api();
        $mapiMessage = self::getMapiMessageDto();
        $emailDto = $api->mapi()->message()->asEmailDto($mapiMessage);
        $this->assertEquals($mapiMessage->getSubject(), $emailDto->getSubject());
        $this->assertEquals($mapiMessage->getBody(), $emailDto->getBody());
    }

    /**
     * @group pipeline
     */
    public function testModelToFile(): void
    {
        $api = self::api();
        $mapiMessage = self::getMapiMessageDto();
        $emlFile = $api->mapi()->message()->asFile(new MapiMessageAsFileRequest(
            "Eml",
            $mapiMessage
        ));
        $fileContent = $emlFile->fread($emlFile->getSize());
        $this->assertRegExp("/" . $mapiMessage->getSubject() . "/", $fileContent);

        $mapiMessageConverted = $api->mapi()->message()->fromFile(new MapiMessageFromFileRequest("Eml", $emlFile));
        $this->assertEquals($mapiMessage->getSubject(), $mapiMessageConverted->getSubject());
        //Subject is also available as MapiPropertyDto:
        //There are different Property descriptors supported.
        //Some properties are known to the service:
        $knownPropertiesArray =
            array_filter($mapiMessageConverted->getProperties(), function ($var) {
                return $var->getDescriptor()->getDiscriminator() == "MapiKnownPropertyDescriptor";
            });
        //We know, that subject is stored in known property with name TagSubject:
        $subjectProperty = array_values(
            array_filter($knownPropertiesArray, function ($var) {
                /** @noinspection PhpPossiblePolymorphicInvocationInspection */
                return $var->getDescriptor()->getName() == 'TagSubject';
            })
        )[0];
        $this->assertEquals($mapiMessage->getSubject(), $subjectProperty->getValue());
    }

    /**
     * @group pipeline
     */
    public function testStorage(): void
    {
        $api = self::api();
        $mapiMessage = self::getMapiMessageDto();
        $fileName = uniqid() . ".msg";
        $api->mapi()->message()->save(Models::mapiMessageSaveRequest()
            ->storageFile(Models::storageFileLocation()
                ->storage(self::$storage)
                ->folderPath(self::$folder)
                ->fileName($fileName)
                ->build())
            ->value($mapiMessage)
            ->format('Msg')
            ->build());
        $mapiMessageFromStorage = $api->mapi()->message()->get(Models::mapiMessageGetRequest()
            ->format('Msg')
            ->storage(self::$storage)
            ->folder(self::$folder)
            ->file_name($fileName)
            ->build());
        $this->assertEquals($mapiMessage->getSubject(), $mapiMessageFromStorage->getSubject());
    }


    private static function getMapiMessageDto(): MapiMessageDto
    {
        return (new MapiMessageDto())
            ->setClientSubmitTime(new DateTime())
            ->setSenderAddressType("SMTP")
            ->setSenderEmailAddress("from@aspose.com")
            ->setSenderSmtpAddress("from@aspose.com")
            ->setMessageFormat("Ascii")
            ->setSenderName("From Address")
            ->setMessageBody("Some body")
            ->setDisplayTo("To Address")
            ->setDeliveryTime(new DateTime())
            ->setNormalizedSubject("Some subject")
            ->setFlags(array("MsgFlagRead", "MsgFlagUnsent", "MsgFlagHasAttach"))
            ->setRecipients(array((new MapiRecipientDto())
                ->setAddressType("SMTP")
                ->setDisplayName("To address")
                ->setEmailAddress("to@aspose.com")
                ->setRecipientType("MapiTo")))
            ->setAttachments(array((new MapiAttachmentDto())
                ->setDataBase64(base64_encode("Some file text"))
                ->setName("some-file.txt")))
            ->setSubjectPrefix("Re: ")
            ->setMessageClass("IPM.Note")
            ->setBody("Some body")
            ->setSubject("Re: Some subject")
            ->setBodyType("PlainText");
    }
}
