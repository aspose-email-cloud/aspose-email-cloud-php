<?php


namespace Test;

use Aspose\Email\Model\MapiMessageAsFileRequest;
use Aspose\Email\Model\MapiMessageDto;
use Aspose\Email\Model\MapiMessageFromFileRequest;
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
        return Models::MapiMessageDto()
            ->messageBody('Some body')
            ->clientSubmitTime(new DateTime())
            ->deliveryTime(new DateTime())
            ->displayTo('To Address')
            ->flags(array(
                'MsgFlagRead',
                'MsgFlagUnsent',
                'MsgFlagHasAttach'))
            ->normalizedSubject('Some subject')
            ->senderAddressType('SMTP')
            ->senderEmailAddress('from@aspose.com')
            ->senderName('From Address')
            ->senderSmtpAddress('from@aspose.com')
            ->attachments(array(
                Models::MapiAttachmentDto()
                    ->name('some-file.txt')
                    ->dataBase64('U29tZSBmaWxlIHRleHQ=')
                    ->build()))
            ->body('Some body')
            ->messageClass('IPM.Note')
            ->recipients(array(
                Models::MapiRecipientDto()
                    ->emailAddress('to@aspose.com')
                    ->addressType('SMTP')
                    ->displayName('To Address')
                    ->recipientType('MapiTo')
                    ->build()))
            ->subject('Re: Some subject')
            ->subjectPrefix('Re: ')
            ->build();
    }
}
