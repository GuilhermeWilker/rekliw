<?php

function update_data(string $table, array $fields, array $where)
{
    if (!is_arr_associative($fields) or !is_arr_associative($where)) {
        throw new Exception('The array must be associative, on update_data()');
    }

    $db = connect_database();

    $sql = "update {$table} set ";

    foreach (array_keys($fields) as $field) {
        $sql .= "{$field} = :{$field}, ";
    }

    $sql = trim($sql, ', ');

    $where_fields = array_keys($where);
    $sql .= " where {$where_fields[0]} = :{$where_fields[0]}";

    $data = array_merge($fields, $where);

    $prepare = $db->prepare($sql);
    $prepare->execute($data);

    return $prepare->rowCount();
}
