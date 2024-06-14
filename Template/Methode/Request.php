<?php
class Request
{
    static function get( $key,  $methode )
    {
        return match (true) 
        {
             $methode = 'Guest'=> isset($_GET[$key])??NULL ,
             $methode = 'POST'=> isset($_POST[$key])??NULL,
             default
                    => NULL
        };
    }

    static function get( $key,  $methode )
    {
        return match (true) 
        {
             $methode = 'Guest'=> isset($_GET[$key])??NULL ,
             $methode = 'POST'=> isset($_POST[$key])??NULL,
             default
                    => NULL
        };
    }
}