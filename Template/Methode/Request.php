<?php
class Request
{
    public static function get( $key,  $user )
    {
        return isset($_GET[$key])??NULL;
    }

    public static function post( $key,  $user )
    {
        return isset($_POST[$key])??NULL;
    }
}