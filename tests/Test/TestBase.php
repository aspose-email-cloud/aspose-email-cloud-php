<?php

namespace Test;

use Aspose\Email\Configuration;
use Aspose\Email\EmailCloud;
use Aspose\Email\Model\CreateFolderRequest;
use Aspose\Email\Model\DeleteFolderRequest;
use PHPUnit\Framework\TestCase;

class TestBase extends TestCase
{
    /**
     * @var EmailCloud
     */
    private static $api;
    protected static $folder;
    protected static $storage = "First Storage";

    protected static function api(): EmailCloud
    {
        return self::$api;
    }

    public static function setUpBeforeClass(): void
    {
        self::$folder = uniqid();
        $configuration = new Configuration();
        $configuration
            ->setClientSecret($_ENV["clientSecret"])
            ->setClientId($_ENV["clientId"])
            ->setHost($_ENV["apiBaseUrl"]);
        if (array_key_exists("authUrl", $_ENV)) {
            $configuration->setAuthUrl($_ENV["authUrl"]);
        }
        self::$api = new EmailCloud($configuration);
        self::api()->cloudStorage()->folder()->createFolder(new CreateFolderRequest(self::$folder, self::$storage));
    }

    public static function tearDownAfterClass(): void
    {
        self::api()->cloudStorage()->folder()->deleteFolder(
            new DeleteFolderRequest(self::$folder, self::$storage, true)
        );
    }

    public static function getTestDataPath($fileName): string
    {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR .
            $fileName;
    }
}
