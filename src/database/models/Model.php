<?php

namespace app\database\models;

use app\database\Connection;

abstract class Model
{
    protected static $table;

    public static function all()
    {
        $connection = new Connection();
        $query = $connection->getConnection()->createQueryBuilder();

        return $query->select('*')
            ->from(static::$table)
            ->executeQuery()
            ->fetchAllAssociative();
    }

    public static function create(array $data)
    {
        $connection = new Connection();
        $query = $connection->getConnection()->createQueryBuilder();

        $queryBuilder = $query->insert(static::$table);

        foreach ($data as $key => $value) {
            $queryBuilder->setValue($key, $query->createNamedParameter($value));
        }

        return $queryBuilder->executeStatement();
    }

    public static function insert(string $column, $value)
    {
        $connection = new Connection();
        $query = $connection->getConnection()->createQueryBuilder();

        $query
            ->insert(static::$table)
            ->setValue($column, $query->createNamedParameter($value))
            ->executeStatement();
    }
}
