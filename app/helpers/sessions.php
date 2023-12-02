<?php

function user()
{
    if (isset($_SESSION[LOGGED])) {
        return $_SESSION[LOGGED];
    }
}

function is_logged()
{
    return isset($_SESSION[LOGGED]);
}
