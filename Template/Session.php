<?php

namespace App;

class Session
{
    public static function start(): void
    {
        session_start();
    }

    public static function set(string $type, string $name, string $mail): void
    {
        $_SESSION['type'] = $type;
        $_SESSION['username'] = $name;
        $_SESSION['mail'] = $mail;
    }

    public static function get(string $type, string $name): array|string
    {
        if (isset($_SESSION['type'],$_SESSION['username'], $_SESSION['mail'])) {
            return $session = [$_SESSION['type'], $_SESSION['username'], $_SESSION['mail']];
        }

        return '';
    }
}
