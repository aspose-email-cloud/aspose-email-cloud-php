<?php

namespace Test;

use Aspose\Email\Model\AiBcrImageStorageFile;
use Aspose\Email\Model\AiBcrParseRequest;
use Aspose\Email\Model\AiBcrParseStorageRequest;
use Aspose\Email\Model\AiNameCompleteRequest;
use Aspose\Email\Model\AiNameExpandRequest;
use Aspose\Email\Model\AiNameFormatRequest;
use Aspose\Email\Model\AiNameGenderizeRequest;
use Aspose\Email\Model\AiNameMatchRequest;
use Aspose\Email\Model\AiNameParseEmailAddressRequest;
use Aspose\Email\Model\CreateFolderRequest;
use Aspose\Email\Model\DownloadFileRequest;
use Aspose\Email\Model\StorageFileLocation;
use Aspose\Email\Model\StorageFolderLocation;
use Aspose\Email\Model\UploadFileRequest;
use SplFileObject;

class AiTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testAiNameGenderize(): void
    {
        $result = self::api()->ai()->name()->genderize(new AiNameGenderizeRequest("John Cane"));
        $this->assertGreaterThanOrEqual(1, count($result->getValue()));
        $this->assertEquals('Male', $result->getValue()[0]->getGender());
    }

    /**
     * @group pipeline
     */
    public function testAiNameFormat(): void
    {
        $result =
            self::api()->ai()->name()->format(new AiNameFormatRequest(
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
        $result = self::api()->ai()->name()->match(new AiNameMatchRequest($first, $second));
        $this->assertGreaterThan(0.5, $result->getSimilarity());
    }

    /**
     * @group pipeline
     */
    public function testAiNameExpand(): void
    {
        $name = "Smith Bobby";
        $result = self::api()->ai()->name()->expand(new AiNameExpandRequest($name));
        $expandedNames = array_map(function ($weightedName) {
            return $weightedName->getName();
        }, $result->getNames());
        $this->assertContains("Mr. Smith", $expandedNames);
        $this->assertContains("B. Smith", $expandedNames);
    }

    /**
     * @group pipeline
     */
    public function testAiNameComplete(): void
    {
        $prefix = "Dav";
        $result = self::api()->ai()->name()->complete(new AiNameCompleteRequest($prefix));
        $names = array_map(function ($weightedName) use ($prefix) {
            return $prefix . $weightedName->getName();
        }, $result->getNames());
        $this->assertContains("David", $names);
        $this->assertContains("Dave", $names);
        $this->assertContains("Davis", $names);
    }

    /**
     * @group pipeline
     */
    public function testAiNameParseEmailAddress(): void
    {
        $address = "john-cane@gmail.com";
        $result =
            self::api()->ai()->name()->parseEmailAddress(new AiNameParseEmailAddressRequest($address));
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
        self::api()->cloudStorage()->file()->uploadFile(new UploadFileRequest(
            $storagePath,
            new SplFileObject($path),
            self::$storage
        ));
        $outFolder = uniqid();
        $outFolderPath = self::$folder . "/" . $outFolder;
        self::api()->cloudStorage()->folder()->createFolder(
            new CreateFolderRequest($outFolderPath, self::$storage)
        );
        // 2) Call business card recognition action
        $result = self::api()->ai()->bcr()->parseStorage(new AiBcrParseStorageRequest(
            new StorageFolderLocation(self::$storage, $outFolderPath),
            array(new AiBcrImageStorageFile(
                true,
                new StorageFileLocation(self::$storage, self::$folder, $imageFile)
            ))
        ));
        //Check that only one file produced
        $this->assertEquals(1, count($result->getValue()));
        // 3) Get file name from recognition result
        $contactFile = $result->getValue()[0];
        // 4) Download VCard file, produced by recognition method, check it contains text "Thomas"
        $contactTempFile = self::api()->cloudStorage()->file()->downloadFile(new DownloadFileRequest(
            $contactFile->getFolderPath() . "/" . $contactFile->getFileName(),
            self::$storage
        ));
        $fileContent = $contactTempFile->fread($contactTempFile->getSize());
        $this->assertRegExp("/Thomas/", $fileContent);
    }

    /**
     * @group aiBcr
     */
    public function testAiBcrParse(): void
    {
        $path = self::getTestDataPath("test_single_0001.png");
        $result = self::api()->ai()->bcr()->parse(new AiBcrParseRequest(
            new SplFileObject($path),
            null,
            null,
            true
        ));
        $this->assertEquals(1, count($result->getValue()));
        $displayName = $result->getValue()[0]->getDisplayName();
        $this->assertRegExp("/Thomas/", $displayName);
    }
}
