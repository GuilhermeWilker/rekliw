<?php

function set_flash_message($index, $message)
{
    if (!isset($_SESSION['flash_message'][$index])) {
        $_SESSION['flash_message'][$index] = $message;
    }
}

function get_flash_message($index, $style = 'text-red-400')
{
    if (isset($_SESSION['flash_message'][$index])) {
        $flash_message = $_SESSION['flash_message'][$index];
        unset($_SESSION['flash_message'][$index]);

        return "<span class='$style'>{$flash_message}</span>";
    }
}
