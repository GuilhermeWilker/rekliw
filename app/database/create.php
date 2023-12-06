<?php

function create_data(string $table, array $data)
{
    try {
        if (!is_arr_associative($data)) {
            throw new Exception('The array must be associative..');
        }

        $db = connect_database();

        $sql = "insert into {$table}(";
        $sql .= implode(',', array_keys($data)).') values(';
        $sql .= ':'.implode(', :', array_keys($data)).')';

        $prepare = $db->prepare($sql);

        return $prepare->execute($data);
    } catch (PDOException $e) {
        dd($e->getMessage());
    }
}

function insert_data(string $table, string $column, $value)
{
    try {
        $db = connect_database();

        $sql = "INSERT INTO {$table} ({$column}) VALUES (:value)";
        $prepare = $db->prepare($sql);
        $prepare->bindParam(':value', $value);

        return $prepare->execute();
    } catch (PDOException $e) {
        dd($e->getMessage());
    }
}

function associate_data(string $pivot_table, array $data)
{
    try {
        if (!is_arr_associative($data)) {
            throw new Exception('The array must be associative.');
        }

        $db = connect_database();

        $columns = implode(', ', array_keys($data));
        $values = ':'.implode(', :', array_keys($data));

        $sql = "INSERT INTO {$pivot_table} ({$columns}) VALUES ({$values})";
        $prepare = $db->prepare($sql);

        foreach ($data as $key => $value) {
            $prepare->bindValue(":{$key}", $value);
        }

        return $prepare->execute();
    } catch (PDOException $e) {
        dd($e->getMessage());
    }
}
