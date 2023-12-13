<?php

namespace app\database;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection as DBALConnection;
use Doctrine\DBAL\DriverManager;

class Connection
{
    public static function getConnection(): DBALConnection
    {
        $config = new Configuration();

        return DriverManager::getConnection([
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
            'host' => $_ENV['DB_HOST'],
            'driver' => $_ENV['DB_DRIVER'],
        ], $config);
    }
}
