<?php

function findAll($table, $fields = '*')
{
    try {
        $db = connect_database();

        $query = $db->query("select {$fields} from {$table}");

        return $query->fetchAll();
    } catch (\PDOException $e) {
        dd($e->getMessage());
    }
}

function findBy($table, $field, $value, $fields = '*')
{
    try {
        $db = connect_database();

        $prepare = $db->prepare("select {$fields} from {$table} where {$field} = :{$field}");
        $prepare->execute([
            $field => $value,
        ]);

        return $prepare->fetch();
    } catch (\PDOException $e) {
        dd($e->getMessage());
    }
}
