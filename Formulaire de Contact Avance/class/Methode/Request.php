<?php
class Request
{
    public static function get(string $key, string $user): string
    {
        return isset($_GET[$key])??NULL; 
    }

    public static function post(string $key, string $user ): string
    {
        return isset($_POST[$key])??NULL;
    }
}