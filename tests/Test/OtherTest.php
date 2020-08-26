<?php

namespace Test;

use Aspose\Email\Model\ClientAccountGetMultiRequest;
use Aspose\Email\Model\ClientAccountGetRequest;
use Aspose\Email\Model\ClientAccountSaveMultiRequest;
use Aspose\Email\Model\ClientAccountSaveRequest;
use Aspose\Email\Model\DisposableEmailIsDisposableRequest;
use Aspose\Email\Model\DownloadFileRequest;
use Aspose\Email\Model\EmailAccountConfig;
use Aspose\Email\Model\EmailClientAccount;
use Aspose\Email\Model\EmailClientAccountOauthCredentials;
use Aspose\Email\Model\EmailClientAccountPasswordCredentials;
use Aspose\Email\Model\EmailClientMultiAccount;
use Aspose\Email\Model\EmailConfigDiscoverRequest;
use Aspose\Email\Model\ObjectExistsRequest;
use Aspose\Email\Model\StorageFileLocation;
use Aspose\Email\Model\UploadFileRequest;
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
        self::api()->cloudStorage()->file()->uploadFile(new UploadFileRequest(
            $storagePath,
            new SplFileObject($path),
            self::$storage
        ));
        $exists = self::api()->cloudStorage()->storage()
            ->objectExists(new ObjectExistsRequest($storagePath, self::$storage));
        $this->assertTrue(
            $exists->getExists()
        );
        $calendarTempFile =
            self::api()->cloudStorage()->file()->downloadFile(new DownloadFileRequest($storagePath, self::$storage));
        $fileContent = $calendarTempFile->fread($calendarTempFile->getSize());
        $this->assertRegExp("/Access-A-Ride/", $fileContent);
    }

    /**
     * @group pipeline
     */
    public function testDiscoverEmailConfig(): void
    {
        $configs = self::api()->emailConfig()->discover(new EmailConfigDiscoverRequest(
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
        $disposable = self::api()->disposableEmail()->isDisposable(
            new DisposableEmailIsDisposableRequest("example@mailcatch.com")
        );
        $this->assertTrue($disposable->getValue());
        $regular = self::api()->disposableEmail()->isDisposable(
            new DisposableEmailIsDisposableRequest("example@gmail.com")
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
        self::api()->client()->account()->save(new ClientAccountSaveRequest(
            new StorageFileLocation(self::$storage, self::$folder, $fileName),
            $account
        ));
        $result = self::api()->client()->account()->get(new ClientAccountGetRequest(
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
        $api->client()->account()->saveMulti(new ClientAccountSaveMultiRequest(
            new StorageFileLocation($storage, $folder, $fileName),
            $multiAccount
        ));
        // Get multi account object from storage
        $multiAccountFromStorage = $api->client()->account()->getMulti(new ClientAccountGetMultiRequest(
            $fileName,
            $folder,
            $storage
        ));

        $this->assertEquals(2, count($multiAccountFromStorage->getReceiveAccounts()));
        $this->assertEquals(
            $multiAccount->getSendAccount()->getCredentials()->getDiscriminator(),
            $multiAccountFromStorage->getSendAccount()->getCredentials()->getDiscriminator()
        );
    }
}
