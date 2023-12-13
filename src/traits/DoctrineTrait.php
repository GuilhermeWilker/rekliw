<?php

namespace app\traits;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

trait DoctrineTrait
{
    protected $connection;

    public function initDoctrine()
    {
        $this->connection = DriverManager::getConnection([
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
            'host' => $_ENV['DB_HOST'],
            'driver' => $_ENV['DB_DRIVER'],
        ], new Configuration());
    }

    public function getQueryBuilder(): QueryBuilder
    {
        try {
            if (!$this->connection) {
                $this->initDoctrine();
            }

            return new QueryBuilder($this->connection);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
