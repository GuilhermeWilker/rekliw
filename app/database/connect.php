<?php

function connect_database()
{
    return new \PDO('mysql:host=127.0.0.1;dbname='.$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], [
        PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
    ]);
}
