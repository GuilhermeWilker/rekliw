<?php

function dd($dump)
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    exit;
}

function redirect($response, $to)
{
    return $response
        ->withHeader('Location', $to)
        ->withStatus(302);
}
