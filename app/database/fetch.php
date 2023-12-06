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

function find_last_inserted(string $field, string $table)
{
    try {
        $db = connect_database();
        $query = $db->prepare("SELECT $field FROM $table ORDER BY $field DESC LIMIT 1");
        $query->execute();

        return $query->fetchColumn();
    } catch (\PDOException $e) {
        dd($e->getMessage());
    }
}

function find_associated_data_by(string $table, string $pivot_table, string $column, $pivot_column, $user_id)
{
    $db = connect_database();

    $sql = "SELECT $table.* FROM $table
            JOIN $pivot_table ON $table.$column = $pivot_table.$pivot_column
            WHERE $pivot_table.freelancer_id = :user_id";

    $prepare = $db->prepare($sql);
    $prepare->bindParam(':user_id', $user_id);
    $prepare->execute();

    return $prepare->fetchAll(\PDO::FETCH_OBJ);
}
