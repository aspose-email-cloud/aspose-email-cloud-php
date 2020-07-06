<?php


namespace Test;

use Aspose\Email\Model\EmailDto;
use Aspose\Email\Model\MailAddress;
use Aspose\Email\Model\Requests\convertEmailModelToFileRequest;
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
        $api = self::getApi();
        $from = 'from@aspose.com';
        $emailDto = (new EmailDto())
            ->setFrom(new MailAddress(null, $from))
            ->setTo(array(new MailAddress(null, 'to@aspose.com')))
            ->setSubject('Some subject')
            ->setBody('Some body')
            ->setDate(new DateTime());
        $mapi = $api->convertEmailModelToFile(new ConvertEmailModelToFileRequest(
            'Msg',
            $emailDto
        ));
        $eml = $api->convertEmail(new ConvertEmailRequest('Eml', $mapi));
        $fileContent = $eml->fread($eml->getSize());
        $this->assertRegExp("/" . $from . "/", $fileContent);
        $dto = $api->getEmailFileAsModel(new GetEmailFileAsModelRequest($eml));
        $this->assertEquals($from, $dto->getFrom()->getAddress());
    }
}