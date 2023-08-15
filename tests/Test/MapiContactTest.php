<?php


namespace Test;

use Aspose\Email\Model\MapiContactAsFileRequest;
use Aspose\Email\Model\MapiContactDto;
use Aspose\Email\Model\MapiContactElectronicAddressDto;
use Aspose\Email\Model\MapiContactElectronicAddressPropertySetDto;
use Aspose\Email\Model\MapiContactFromFileRequest;
use Aspose\Email\Model\MapiContactGetRequest;
use Aspose\Email\Model\MapiContactNamePropertySetDto;
use Aspose\Email\Model\MapiContactPersonalInfoPropertySetDto;
use Aspose\Email\Model\MapiContactProfessionalPropertySetDto;
use Aspose\Email\Model\MapiContactSaveRequest;
use Aspose\Email\Model\MapiContactTelephonePropertySetDto;
use Aspose\Email\Model\StorageFileLocation;

class MapiContactTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testModelToContactDto(): void
    {
        $api = self::api();
        $mapiContact = self::getMapiContactDto();
        $contactDto = $api->mapi()->contact()->asContactDto($mapiContact);
        $this->assertEquals(
            $mapiContact->getNameInfo()->getGivenName(),
            $contactDto->getGivenName()
        );
        $this->assertEquals($mapiContact->getNameInfo()->getSurname(), $contactDto->getSurname());
    }

    /**
     * @group pipeline
     */
    public function testModelToFile(): void
    {
        $api = self::api();
        $mapiContact = self::getMapiContactDto();
        $vcardFile = $api->mapi()->contact()->asFile(new MapiContactAsFileRequest(
            "VCard",
            $mapiContact
        ));
        $fileContent = $vcardFile->fread($vcardFile->getSize());
        $this->assertMatchesRegularExpression("/" . $mapiContact->getNameInfo()->getGivenName() . "/", $fileContent);
        $mapiContactConverted = $api->mapi()->contact()->fromFile(new MapiContactFromFileRequest("VCard", $vcardFile));
        $this->assertEquals($mapiContact->getNameInfo()->getSurname(), $mapiContactConverted
            ->getNameInfo()->getSurname());
    }

    /**
     * @group pipeline
     */
    public function testStorage(): void
    {
        $api = self::api();
        $mapiContact = self::getMapiContactDto();
        $fileName = uniqid() . ".msg";
        $api->mapi()->contact()->save(new MapiContactSaveRequest(
            new StorageFileLocation(self::$storage, self::$folder, $fileName),
            $mapiContact,
            "Msg"
        ));
        $mapiContactFromStorage = $api->mapi()->contact()->get(new MapiContactGetRequest(
            "Msg",
            $fileName,
            self::$folder,
            self::$storage
        ));
        $this->assertEquals($mapiContact->getNameInfo()->getSurname(), $mapiContactFromStorage
            ->getNameInfo()->getSurname());
    }


    /**
     * @return MapiContactDto
     */
    private static function getMapiContactDto(): MapiContactDto
    {
        return (new MapiContactDto())
            ->setElectronicAddresses((new MapiContactElectronicAddressPropertySetDto())
                ->setDefaultEmailAddress((new MapiContactElectronicAddressDto())
                    ->setEmailAddress("email@aspose.com")))
            ->setNameInfo((new MapiContactNamePropertySetDto())
                ->setGivenName("Alex")
                ->setSurname("Thomas"))
            ->setPersonalInfo((new MapiContactPersonalInfoPropertySetDto())
                ->setBusinessHomePage("www.aspose.com"))
            ->setProfessionalInfo((new MapiContactProfessionalPropertySetDto())
                ->setProfession("GENERAL DIRECTOR"))
            ->setTelephones((new MapiContactTelephonePropertySetDto())
                ->setPrimaryTelephoneNumber("+49 211 4247 21"));
    }
}
