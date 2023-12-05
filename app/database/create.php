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
