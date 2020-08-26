<?php


namespace Test;

use Aspose\Email\Model\EmailAsFileRequest;
use Aspose\Email\Model\EmailConvertRequest;
use Aspose\Email\Model\EmailDto;
use Aspose\Email\Model\EmailFromFileRequest;
use Aspose\Email\Model\MailAddress;
use DateTime;

class EmailTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testEmailConverter(): void
    {
        $api = self::api();
        $emailDto = $this->getEmailDto();
        $mapi = $api->email()->asFile(new EmailAsFileRequest('Msg', $emailDto));
        $eml = $api->email()->convert(new EmailConvertRequest('Msg', 'Eml', $mapi));
        $fileContent = $eml->fread($eml->getSize());
        $this->assertRegExp("/" . $emailDto->getFrom()->getAddress() . "/", $fileContent);
        $dto = $api->email()->fromFile(new EmailFromFileRequest('Eml', $eml));
        $this->assertEquals($emailDto->getFrom()->getAddress(), $dto->getFrom()->getAddress());
    }

    /**
     * @group pipeline
     */
    public function testConvertModelToMapiModel()
    {
        $api = self::api();
        $emailDto = self::getEmailDto();
        $mapiMessage = $api->email()->asMapi($emailDto);
        $this->assertEquals($emailDto->getSubject(), $mapiMessage->getSubject());
    }

    /**
     * @return EmailDto
     */
    public function getEmailDto(): EmailDto
    {
        $emailDto = (new EmailDto())
            ->setFrom(new MailAddress(null, 'from@aspose.com'))
            ->setTo(array(new MailAddress(null, 'to@aspose.com')))
            ->setSubject('Some subject')
            ->setBody('Some body')
            ->setDate(new DateTime());
        return $emailDto;
    }
}