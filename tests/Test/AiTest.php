<?php

namespace Test;

use Aspose\Email\Model\AiBcrBase64Image;
use Aspose\Email\Model\AiBcrBase64Rq;
use Aspose\Email\Model\AiBcrImageStorageFile;
use Aspose\Email\Model\AiBcrParseStorageRq;
use Aspose\Email\Model\Requests\aiBcrParseModelRequest;
use Aspose\Email\Model\Requests\aiBcrParseRequest;
use Aspose\Email\Model\Requests\aiBcrParseStorageRequest;
use Aspose\Email\Model\Requests\aiNameCompleteRequest;
use Aspose\Email\Model\Requests\aiNameExpandRequest;
use Aspose\Email\Model\Requests\aiNameFormatRequest;
use Aspose\Email\Model\Requests\aiNameGenderizeRequest;
use Aspose\Email\Model\Requests\aiNameMatchRequest;
use Aspose\Email\Model\Requests\aiNameParseEmailAddressRequest;
use Aspose\Email\Model\Requests\createFolderRequest;
use Aspose\Email\Model\Requests\downloadFileRequest;
use Aspose\Email\Model\Requests\getContactPropertiesRequest;
use Aspose\Email\Model\Requests\uploadFileRequest;
use Aspose\Email\Model\StorageFileLocation;
use Aspose\Email\Model\StorageFolderLocation;
use SplFileObject;

class AiTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testAiNameGenderize(): void
    {
        $result = self::getApi()->aiNameGenderize(new AiNameGenderizeRequest("John Cane"));
        $this->assertGreaterThanOrEqual(1, count($result->getValue()));
        $this->assertEquals('Male', $result->getValue()[0]->getGender());
    }

    /**
     * @group pipeline
     */
    public function testAiNameFormat(): void
    {
        $result =
            self::getApi()->aiNameFormat(new AiNameFormatRequest(
                "Mr. John Michael Cane",
                null,
                null,
                null,
                null,
                "%t%L%f%m"
            ));
        $this->assertEquals("Mr. Cane J. M.", $result->getName());
    }

    /**
     * @group pipeline
     */
    public function testAiNameMatch(): void
    {
        $first = "John Michael Cane";
        $second = "Cane J.";
        $result = self::getApi()->aiNameMatch(new AiNameMatchRequest($first, $second));
        $this->assertGreaterThan(0.5, $result->getSimilarity());
    }

    /**
     * @group pipeline
     */
    public function testAiNameExpand(): void
    {
        $name = "Smith Bobby";
        $result = self::getApi()->aiNameExpand(new AiNameExpandRequest($name));
        $expandedNames = array_map(function ($weightedName) {
            return $weightedName->getName();
        }, $result->getNames());
        /** @noinspection PhpUnitAssertContainsInspection */
        $this->assertContains("Mr. Smith", $expandedNames);
        /** @noinspection PhpUnitAssertContainsInspection */
        $this->assertContains("B. Smith", $expandedNames);
    }

    /**
     * @group pipeline
     */
    public function testAiNameComplete(): void
    {
        $prefix = "Dav";
        $result = self::getApi()->aiNameComplete(new AiNameCompleteRequest($prefix));
        $names = array_map(function ($weightedName) use ($prefix) {
            return $prefix . $weightedName->getName();
        }, $result->getNames());
        /** @noinspection PhpUnitAssertContainsInspection */
        $this->assertContains("David", $names);
        /** @noinspection PhpUnitAssertContainsInspection */
        $this->assertContains("Dave", $names);
        /** @noinspection PhpUnitAssertContainsInspection */
        $this->assertContains("Davis", $names);
    }

    /**
     * @group pipeline
     */
    public function testAiNameParseEmailAddress(): void
    {
        $address = "john-cane@gmail.com";
        $result =
            self::getApi()->aiNameParseEmailAddress(new AiNameParseEmailAddressRequest($address));
        $extractedNames = array_map(function ($value) {
            return $value->getName();
        }, $result->getValue());
        $reduced = array_reduce($extractedNames, 'array_merge', array());
        $givenName = array_values(array_filter($reduced, function ($value) {
            return $value->getCategory() == "GivenName";
        }))[0];
        $surname = array_values(array_filter($reduced, function ($value) {
            return $value->getCategory() == "Surname";
        }))[0];
        $this->assertEquals("John", $givenName->getValue());
        $this->assertEquals("Cane", $surname->getValue());
    }

    /**
     * @group aiBcr
     */
    public function testAiBcrParseStorage(): void
    {
        $path = self::getTestDataPath("test_single_0001.png");
        $imageFile = uniqid() . ".png";
        $storagePath = self::$folder . "/" . $imageFile;
        // 1) Upload business card image to storage
        self::getApi()->uploadFile(new UploadFileRequest(
            $storagePath,
            new SplFileObject($path),
            self::$storage
        ));
        $outFolder = uniqid();
        $outFolderPath = self::$folder . "/" . $outFolder;
        self::getApi()->createFolder(new CreateFolderRequest($outFolderPath, self::$storage));
        // 2) Call business card recognition action
        $result = self::getApi()->aiBcrParseStorage(new AiBcrParseStorageRequest(
            new AiBcrParseStorageRq(
                null,
                array(new AiBcrImageStorageFile(
                    true,
                    new StorageFileLocation(self::$storage, self::$folder, $imageFile)
                )),
                new StorageFolderLocation(self::$storage, $outFolderPath)
            )
        ));
        //Check that only one file produced
        $this->assertEquals(1, count($result->getValue()));
        // 3) Get file name from recognition result
        $contactFile = $result->getValue()[0];
        // 4) Download VCard file, produced by recognition method, check it contains text "Thomas"
        $contactTempFile = self::getApi()->downloadFile(new DownloadFileRequest(
            $contactFile->getFolderPath() . "/" . $contactFile->getFileName(),
            self::$storage
        ));
        $fileContent = $contactTempFile->fread($contactTempFile->getSize());
        $this->assertRegExp("/Thomas/", $fileContent);
        // 5) Get VCard object properties list, check that there are 3 properties or more
        $contactProperties = self::getApi()->getContactProperties(
            new GetContactPropertiesRequest(
                'vcard',
                $contactFile->getFileName(),
                $contactFile->getFolderPath(),
                self::$storage
            )
        );
        $this->assertGreaterThanOrEqual(3, count($contactProperties->getInternalProperties()));
    }

    /**
     * @group aiBcr
     */
    public function testAiBcrParse(): void
    {
        $path = self::getTestDataPath("test_single_0001.png");
        $content = file_get_contents($path);
        $imageBase64 = base64_encode($content);
        $result = self::getApi()->aiBcrParse(new AiBcrParseRequest(
            new AiBcrBase64Rq(null, array(new AiBcrBase64Image(true, $imageBase64)))
        ));
        $this->assertEquals(1, count($result->getValue()));
        $displayName = array_values(array_filter(
            $result->getValue()[0]->getInternalProperties(),
            function ($var) {
                return $var->getName() == "DISPLAYNAME";
            }
        ))[0];
        $this->assertRegExp("/Thomas/", $displayName->getValue());
    }

    /**
     * @group aiBcr
     */
    public function testAiBcrParseModel(): void
    {
        $path = self::getTestDataPath("test_single_0001.png");
        $content = file_get_contents($path);
        $imageBase64 = base64_encode($content);
        $result = self::getApi()->aiBcrParseModel(new AiBcrParseModelRequest(
            new AiBcrBase64Rq(null, array(new AiBcrBase64Image(true, $imageBase64)))
        ));
        $this->assertEquals(1, count($result->getValue()));
        $displayName = $result->getValue()[0]->getDisplayName();
        $this->assertRegExp("/Thomas/", $displayName);
    }
}
