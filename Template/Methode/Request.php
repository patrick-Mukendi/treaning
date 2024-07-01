<?php
class Request
{
    public static function get(string $key, string $user): string
    {
        return isset($_GET[$key]) ? $_GET[$key] : "";
    }

    public static function post(string $key, string $user ): string
    {
        return isset($_POST[$key]) ? $_POST[$key] : "";
    }
}