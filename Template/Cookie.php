<?php

namespace App;

class Cookie
{
    public static function set(string $name, string $values, int $time = 3600): void
    {
        setcookie($name, $values, time() + $time, '/', '', true, true);
    }

    public static function get(string $name, string $type): string
    {
        if (isset($_COOKIE[$name])) {
            return $_COOKIE[$name];
        }

        return '';
    }

    public static function delete(string $name): void
    {
        setcookie($name, '', time() - 3600, '/', '', false, false);
    }
}
