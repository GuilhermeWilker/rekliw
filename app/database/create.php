<?php

function create($table, $data)
{
    try {
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
