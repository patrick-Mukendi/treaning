<?php 
class Session
{
    static function start(): void
    {
        session_start();
    }

    static function set(string $type, string $name, string $mail): void
    {
        $_SESSION['type'] = $type;
        $_SESSION['username'] = $name;
        $_SESSION['mail'] = $mail;
    }

    static function get(string $type, string $name): array
    {
        return $session = [$_SESSION[$type],$_SESSION['username'], $_SESSION['mail']];
    }
}