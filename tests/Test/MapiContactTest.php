<?php


namespace Test;

use Aspose\Email\Model\MapiContactDto;
use Aspose\Email\Model\MapiContactElectronicAddressDto;
use Aspose\Email\Model\MapiContactElectronicAddressPropertySetDto;
use Aspose\Email\Model\MapiContactNamePropertySetDto;
use Aspose\Email\Model\MapiContactPersonalInfoPropertySetDto;
use Aspose\Email\Model\MapiContactProfessionalPropertySetDto;
use Aspose\Email\Model\MapiContactTelephonePropertySetDto;
use Aspose\Email\Model\Requests\convertMapiContactModelToContactModelRequest;
use Aspose\Email\Model\Requests\convertMapiContactModelToFileRequest;
use Aspose\Email\Model\Requests\getContactFileAsMapiModelRequest;
use Aspose\Email\Model\Requests\getMapiContactModelRequest;
use Aspose\Email\Model\Requests\saveMapiContactModelRequest;
use Aspose\Email\Model\StorageFolderLocation;
use Aspose\Email\Model\StorageModelRqOfMapiContactDto;

class MapiContactTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testModelToContactDto(): void
    {
        $api = self::getApi();
        $mapiContact = self::getMapiContactDto();
        $contactDto = $api->convertMapiContactModelToContactModel(
            new ConvertMapiContactModelToContactModelRequest(
                $mapiContact
            )
        );
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
        $api = self::getApi();
        $mapiContact = self::getMapiContactDto();
        $vcardFile = $api->convertMapiContactModelToFile(
            new ConvertMapiContactModelToFileRequest(
                "VCard",
                $mapiContact
            )
        );
        $fileContent = $vcardFile->fread($vcardFile->getSize());
        $this->assertRegExp("/" . $mapiContact->getNameInfo()->getGivenName() . "/", $fileContent);
        $mapiContactConverted = $api->getContactFileAsMapiModel(
            new GetContactFileAsMapiModelRequest("VCard", $vcardFile)
        );
        $this->assertEquals($mapiContact->getNameInfo()->getSurname(), $mapiContactConverted
            ->getNameInfo()->getSurname());
    }

    /**
     * @group pipeline
     */
    public function testStorage(): void
    {
        $api = self::getApi();
        $mapiContact = self::getMapiContactDto();
        $fileName = uniqid() . ".msg";
        $api->saveMapiContactModel(
            new SaveMapiContactModelRequest(
                "Msg",
                $fileName,
                new StorageModelRqOfMapiContactDto(
                    $mapiContact,
                    new StorageFolderLocation(self::$storage, self::$folder)
                )
            )
        );
        $mapiContactFromStorage = $api->getMapiContactModel(
            new GetMapiContactModelRequest(
                "Msg",
                $fileName,
                self::$folder,
                self::$storage
            )
        );
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
