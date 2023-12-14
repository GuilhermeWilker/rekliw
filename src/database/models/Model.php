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
}
