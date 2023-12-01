<?php

function connect_database()
{
    return new \PDO('mysql:host=127.0.0.1;dbname='.DB_NAME, DB_USER, DB_PASSWORD, [
        PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
    ]);
}
