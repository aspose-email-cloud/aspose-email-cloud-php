<?php

namespace Test;

use Aspose\Email\Configuration;
use Aspose\Email\EmailApi;
use Aspose\Email\Model\Requests\createFolderRequest;
use Aspose\Email\Model\Requests\deleteFolderRequest;
use PHPUnit\Framework\TestCase;

class TestBase extends TestCase
{
    protected static $api;
    protected static $folder;
    protected static $storage = "First Storage";

    protected static function getApi(): EmailApi
    {
        return self::$api;
    }

    public static function setUpBeforeClass(): void
    {
        self::$folder = uniqid();
        $configuration = new Configuration();
        $configuration
            ->setAppKey($_ENV["appKey"])
            ->setAppSid($_ENV["appSid"])
            ->setHost($_ENV["apiBaseUrl"]);
        if (array_key_exists("authUrl", $_ENV)) {
            $configuration->setAuthUrl($_ENV["authUrl"]);
        }
        self::$api = new EmailApi(null, $configuration);
        self::$api->createFolder(new CreateFolderRequest(self::$folder, self::$storage));
    }

    public static function tearDownAfterClass(): void
    {
        self::getApi()->deleteFolder(new DeleteFolderRequest(self::$folder, self::$storage, true));
    }

    public static function getTestDataPath($fileName): string
    {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR .
            $fileName;
    }
}
