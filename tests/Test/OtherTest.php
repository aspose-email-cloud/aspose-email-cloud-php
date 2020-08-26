<?php

namespace Test;

use Aspose\Email\Model\EmailAccountConfig;
use Aspose\Email\Model\EmailClientAccount;
use Aspose\Email\Model\EmailClientAccountOauthCredentials;
use Aspose\Email\Model\EmailClientAccountPasswordCredentials;
use Aspose\Email\Model\EmailClientMultiAccount;
use Aspose\Email\Model\Requests\discoverEmailConfigRequest;
use Aspose\Email\Model\Requests\downloadFileRequest;
use Aspose\Email\Model\Requests\getEmailClientAccountRequest;
use Aspose\Email\Model\Requests\getEmailClientMultiAccountRequest;
use Aspose\Email\Model\Requests\isEmailAddressDisposableRequest;
use Aspose\Email\Model\Requests\objectExistsRequest;
use Aspose\Email\Model\Requests\saveEmailClientAccountRequest;
use Aspose\Email\Model\Requests\saveEmailClientMultiAccountRequest;
use Aspose\Email\Model\Requests\uploadFileRequest;
use Aspose\Email\Model\StorageFileLocation;
use Aspose\Email\Model\StorageFileRqOfEmailClientAccount;
use Aspose\Email\Model\StorageFileRqOfEmailClientMultiAccount;
use SplFileObject;

class OtherTest extends TestBase
{
    /**
     * @group pipeline
     */
    public function testFile(): void
    {
        $path = self::getTestDataPath("sample.ics");
        $storagePath = self::$folder . "/" . uniqid() . ".ics";
        self::api()->uploadFile(new UploadFileRequest(
            $storagePath,
            new SplFileObject($path),
            self::$storage
        ));
        $exists = self::api()
            ->objectExists(new ObjectExistsRequest($storagePath, self::$storage));
        $this->assertTrue(
            $exists->getExists()
        );
        $calendarTempFile =
            self::api()->downloadFile(new DownloadFileRequest($storagePath, self::$storage));
        $fileContent = $calendarTempFile->fread($calendarTempFile->getSize());
        $this->assertRegExp("/Access-A-Ride/", $fileContent);
    }

    /**
     * @group pipeline
     */
    public function testDiscoverEmailConfig(): void
    {
        $configs = self::api()->discoverEmailConfig(new DiscoverEmailConfigRequest(
            "example@gmail.com",
            true
        ));
        $this->assertGreaterThanOrEqual(2, count($configs->getValue()));
        $smtp = array_values(array_filter($configs->getValue(), function (EmailAccountConfig $var) {
            return $var->getProtocolType() == "SMTP";
        }))[0];
        $this->assertEquals("smtp.gmail.com", $smtp->getHost());
    }

    /**
     * @group pipeline
     */
    public function testIsDisposableEmail(): void
    {
        $disposable = self::api()->isEmailAddressDisposable(
            new IsEmailAddressDisposableRequest("example@mailcatch.com")
        );
        $this->assertTrue($disposable->getValue());
        $regular = self::api()->isEmailAddressDisposable(
            new IsEmailAddressDisposableRequest("example@gmail.com")
        );
        $this->assertFalse($regular->getValue());
    }

    /**
     * @group pipeline
     */
    public function testEmailClientAccount(): void
    {
        $account = new EmailClientAccount(
            "smtp.gmail.com",
            551,
            "SSLAuto",
            "SMTP",
            new EmailClientAccountPasswordCredentials(
                "login",
                null,
                "password"
            )
        );
        $fileName = uniqid() . ".account";
        self::api()->saveEmailClientAccount(new SaveEmailClientAccountRequest(
            new StorageFileRqOfEmailClientAccount(
                $account,
                new StorageFileLocation(self::$storage, self::$folder, $fileName)
            )
        ));
        $result = self::api()->getEmailClientAccount(new GetEmailClientAccountRequest(
            $fileName,
            self::$folder,
            self::$storage
        ));
        $this->assertEquals(
            "EmailClientAccountPasswordCredentials",
            $result->getCredentials()->getDiscriminator()
        );
        $this->assertEquals(
            ((object)$account->getCredentials())->getPassword(),
            ((object)$result->getCredentials())->getPassword()
        );
        $this->assertEquals($account->getHost(), $result->getHost());
    }

    /**
     * @group pipeline
     */
    public function testEmailClientMultiAccount(): void
    {
        // Create multi account object
        $multiAccount = new EmailClientMultiAccount(
            array(
                new EmailClientAccount(
                    'imap.gmail.com',
                    993,
                    'SSLAuto',
                    'IMAP',
                    new EmailClientAccountPasswordCredentials(
                        'example@gmail.com',
                        null,
                        'password'
                    )
                ),
                new EmailClientAccount(
                    'exchange.outlook.com',
                    443,
                    'SSLAuto',
                    'EWS',
                    new EmailClientAccountOauthCredentials(
                        'example@outlook.com',
                        null,
                        'clientId',
                        'clientSecret',
                        'refreshToken'
                    )
                )),
            new EmailClientAccount(
                'smtp.gmail.com',
                465,
                'SSLAuto',
                'SMTP',
                new EmailClientAccountPasswordCredentials(
                    'example@gmail.com',
                    null,
                    'password'
                )
            )
        );
        $api = self::api();
        $folder = self::$folder;
        $storage = self::$storage;
        $fileName = uniqid() . ".multi.account";
        // Save multi account
        $api->saveEmailClientMultiAccount(new SaveEmailClientMultiAccountRequest(
            new StorageFileRqOfEmailClientMultiAccount(
                $multiAccount,
                new StorageFileLocation($storage, $folder, $fileName)
            )
        ));
        // Get multi account object from storage
        $multiAccountFromStorage = $api->getEmailClientMultiAccount(
            new GetEmailClientMultiAccountRequest($fileName, $folder, $storage)
        );

        $this->assertEquals(2, count($multiAccountFromStorage->getReceiveAccounts()));
        $this->assertEquals(
            $multiAccount->getSendAccount()->getCredentials()->getDiscriminator(),
            $multiAccountFromStorage->getSendAccount()->getCredentials()->getDiscriminator()
        );
    }
}
