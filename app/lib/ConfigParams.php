<?php
namespace App\lib;

class ConfigParams
{
    const DATE_FORMAT = 'd/m/Y';
    const STATUS_SUCCESS = 'ok';
    const STATUS_FAILED = 'failed';
    const IMAGE_DIR_PRODUCTS = 'products';

    private string $dbHost;
    private string $dbName;
    private string $dbUser;
    private string $dbPassword;

    public function __construct()
    {
        $this->dbHost = 'localhost';
        $this->dbName = 'eli_shop';
        $this->dbUser = 'iintoo';
        $this->dbPassword = '123456';
    }

    public function getDbHost(): string
    {
        return $this->dbHost;
    }

    public function getDbName(): string
    {
        return $this->dbName;
    }

    public function getDbUser(): string
    {
        return $this->dbUser;
    }

    public function getDbPassword(): string
    {
        return $this->dbPassword;
    }

}