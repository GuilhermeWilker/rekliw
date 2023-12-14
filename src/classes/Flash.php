<?php

namespace app\classes;

class Flash
{
    public static function setMessage(string $key, string $message, string $alert = 'text-green-400')
    {
        if (!isset($_SESSION['messages'][$key])) {
            $_SESSION['messages'][$key] = [
                'message' => $message,
                'alert' => $alert,
            ];
        }
    }

    public static function getMessage(string $key)
    {
        if (isset($_SESSION['messages'][$key])) {
            $flash = $_SESSION['messages'][$key];
            unset($_SESSION['messages'][$key]);

            return $flash;
        }
    }

    public static function flashes(array $flashes)
    {
        foreach ($flashes as $key => $message) {
            self::setMessage($key, $message, 'text-red-400');
        }
    }

    public static function getAll()
    {
        if (isset($_SESSION['messages'])) {
            $messages = [];
            foreach ($_SESSION['messages'] as $key => $message) {
                $messages['messages'][$key] = $message;
                unset($_SESSION['messages'][$key]);
            }

            return $messages['messages'] ?? [];
        }
    }
}
