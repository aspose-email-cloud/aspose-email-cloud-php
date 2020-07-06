<?php


namespace Test;


use Aspose\Email\Model\ContactDto;
use Aspose\Email\Model\EmailAddress;
use Aspose\Email\Model\HierarchicalObject;
use Aspose\Email\Model\HierarchicalObjectRequest;
use Aspose\Email\Model\PhoneNumber;
use Aspose\Email\Model\Requests\convertContactModelToFileRequest;
use Aspose\Email\Model\Requests\convertContactModelToMapiModelRequest;
use Aspose\Email\Model\Requests\convertContactRequest;
use Aspose\Email\Model\Requests\createContactRequest;
use Aspose\Email\Model\Requests\getContactFileAsModelRequest;
use Aspose\Email\Model\Requests\objectExistsRequest;
use Aspose\Email\Model\StorageFolderLocation;

class ContactTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testContactFormat(): void
    {
        foreach (array("vcard", "msg") as $format) {
            $extension = $format == "vcard" ? ".vcf" : ".msg";
            $file = uniqid() . $extension;
            self::getApi()->createContact(new CreateContactRequest(
                $format,
                $file,
                new HierarchicalObjectRequest(
                    new HierarchicalObject("CONTACT", null, []),
                    new StorageFolderLocation(self::$storage, self::$folder)
                )
            ));
            $exist =
                self::getApi()->objectExists(new ObjectExistsRequest(
                    self::$folder . "/" . $file,
                    self::$storage
                ));
            $this->assertTrue($exist->getExists());
        }
    }

    /**
     * @group pipeline
     */
    public function testContactConverter(): void
    {
        $api = self::getApi();
        $contactDto = $this->getContactDto();
        $mapi = $api->convertContactModelToFile(new ConvertContactModelToFileRequest(
            'Msg',
            $contactDto
        ));
        $vcard = $api->convertContact(new ConvertContactRequest('VCard', 'Msg', $mapi));
        $fileContent = $vcard->fread($vcard->getSize());
        $this->assertRegExp("/" . $contactDto->getSurname() . "/", $fileContent);
        $dto = $api->getContactFileAsModel(new GetContactFileAsModelRequest('VCard', $vcard));
        $this->assertEquals($contactDto->getSurname(), $dto->getSurname());
    }

    /**
     * @group pipeline
     */
    public function testConvertModelToMapiModel()
    {
        $api = self::getApi();
        $contactDto = self::getContactDto();
        $mapiContact = $api->convertContactModelToMapiModel(
            new ConvertContactModelToMapiModelRequest($contactDto)
        );
        $this->assertEquals($contactDto->getSurname(), $mapiContact->getNameInfo()->getSurname());
    }

    /**
     * @return ContactDto
     */
    private static function getContactDto(): ContactDto
    {
        return (new ContactDto())
            ->setSurname('Cane')
            ->setGivenName('John')
            ->setGender('Male')
            ->setEmailAddresses(array((new EmailAddress())->setAddress('address@aspose.com')))
            ->setPhoneNumbers(array((new PhoneNumber())->setNumber('+47235456456')));
    }

}