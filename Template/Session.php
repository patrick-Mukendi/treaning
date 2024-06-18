<?php
class Session
{
    static function start()
    {
        session_start();
    }

    static function set(string $type, string $name, string $mail)
    {
        $_SESSION[$type] = $type;
        $_SESSION['name'] = $name;
        $_SESSION['mail'] = $mail;
    }

    static function get(string $type, string $name) : array
    {
        return $session = [$_SESSION[$type],$_SESSION['name'], $_SESSION['mail']];
    }
}