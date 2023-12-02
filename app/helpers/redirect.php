<?php

function redirect($to)
{
    return header("Location: {$to}");
}

function redirect_with_error_message($index, $message, $to)
{
    set_flash_message($index, $message);

    return redirect($to);
}
