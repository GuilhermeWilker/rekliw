<?php

namespace app\classes;

class Flash
{
    public static function setMessage(string $key, string $message, string $alert = 'text-green-400')
    {
        if (!isset($_SESSION[$key])) {
            $_SESSION[$key] = [
                'message' => $message,
                'alert' => $alert,
            ];
        }
    }

    public static function getMessage(string $key)
    {
        if (isset($_SESSION[$key])) {
            $flash = $_SESSION[$key];
            unset($_SESSION[$key]);

            return $flash;
        }
    }
}
