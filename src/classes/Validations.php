<?php

namespace app\classes;

use app\database\Connection;

class Validations
{
    private $connection;
    private $errors = [];

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function required(array $fields)
    {
        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                $this->errors[$field] = 'Este campo é obrigatório!';
            }
        }

        return $this;
    }

    public function email($table, $field, $value)
    {
        $query = $this->connection
            ->getConnection()
            ->createQueryBuilder();

        $result = $query->select($field)
            ->from($table)
            ->where("$field = :value")
            ->setParameter('value', $value)
            ->executeQuery()
            ->fetchAllAssociative();

        if ($result) {
            $this->errors[$field] = 'Este email já esta cadastrado..';
        }

        return $result;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
