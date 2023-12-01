<?php

function dd()
{
    echo '<pre>';
    echo '<h3>';

    $args = func_get_args();

    foreach ($args as $arg) {
        var_dump($arg);
    }
    echo '<h3>';

    echo '</pre>';
    exit;
}
