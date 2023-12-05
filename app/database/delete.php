<?php

function delete_data(string $table, array $where)
{
    if (!is_arr_associative($where)) {
        throw new Exception('The array must be associative on delete_data()');
    }

    $db = connect_database();
    $where_field = array_keys($where);

    $sql = "delete from {$table} where";
    $sql .= " {$where_field[0]} = :{$where_field[0]}";

    $prepare = $db->prepare($sql);
    $prepare->execute($where);

    return $prepare->rowCount();
}
