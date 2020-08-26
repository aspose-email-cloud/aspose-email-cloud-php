<?php


namespace Test;

use Aspose\Email\Model\EmailDto;
use Aspose\Email\Model\MailAddress;
use Aspose\Email\Model\Requests\convertEmailModelToFileRequest;
use Aspose\Email\Model\Requests\convertEmailModelToMapiModelRequest;
use Aspose\Email\Model\Requests\convertEmailRequest;
use Aspose\Email\Model\Requests\getEmailFileAsModelRequest;
use DateTime;

class EmailModelTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testEmailConverter(): void
    {
        $api = self::api();
        $emailDto = $this->getEmailDto();
        $mapi = $api->convertEmailModelToFile(new ConvertEmailModelToFileRequest(
            'Msg',
            $emailDto
        ));
        $eml = $api->convertEmail(new ConvertEmailRequest('Eml', $mapi));
        $fileContent = $eml->fread($eml->getSize());
        $this->assertRegExp("/" . $emailDto->getFrom()->getAddress() . "/", $fileContent);
        $dto = $api->getEmailFileAsModel(new GetEmailFileAsModelRequest($eml));
        $this->assertEquals($emailDto->getFrom()->getAddress(), $dto->getFrom()->getAddress());
    }

    /**
     * @group pipeline
     */
    public function testConvertModelToMapiModel()
    {
        $api = self::api();
        $emailDto = self::getEmailDto();
        $mapiMessage = $api->convertEmailModelToMapiModel(
            new ConvertEmailModelToMapiModelRequest($emailDto)
        );
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