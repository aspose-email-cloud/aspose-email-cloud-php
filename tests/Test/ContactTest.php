<?php


namespace Test;

use Aspose\Email\Model\ContactAsFileRequest;
use Aspose\Email\Model\ContactConvertRequest;
use Aspose\Email\Model\ContactDto;
use Aspose\Email\Model\ContactFromFileRequest;
use Aspose\Email\Model\ContactSaveRequest;
use Aspose\Email\Model\EmailAddress;
use Aspose\Email\Model\ObjectExistsRequest;
use Aspose\Email\Model\PhoneNumber;
use Aspose\Email\Model\StorageFileLocation;

class ContactTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testCreateContact(): void
    {
        $contact = self::getContactDto();
        $contactFile = uniqid() . ".vcf";
        self::api()->contact()->save(new ContactSaveRequest(
            new StorageFileLocation(self::$storage, self::$folder, $contactFile),
            $contact,
            "VCard"
        ));
        $exist = self::api()->cloudStorage()->storage()->objectExists(
            new ObjectExistsRequest(self::$folder . "/" . $contactFile, self::$storage)
        );
        $this->assertTrue($exist->getExists());
    }

    /**
     * @group pipeline
     */
    public function testContactConverter(): void
    {
        $api = self::api();
        $contactDto = $this->getContactDto();
        $mapi = $api->contact()->asFile(new ContactAsFileRequest('Msg', $contactDto));
        $vcard = $api->contact()->convert(new ContactConvertRequest('VCard', 'Msg', $mapi));
        $fileContent = $vcard->fread($vcard->getSize());
        $this->assertRegExp("/" . $contactDto->getSurname() . "/", $fileContent);
        $dto = $api->contact()->fromFile(new ContactFromFileRequest('VCard', $vcard));
        $this->assertEquals($contactDto->getSurname(), $dto->getSurname());
    }

    /**
     * @group pipeline
     */
    public function testConvertModelToMapiModel()
    {
        $api = self::api();
        $contactDto = self::getContactDto();
        $mapiContact = $api->contact()->asMapi($contactDto);
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