<?php
class Cookie
{ 
    public static function set(string $name, string $values, float $time = 3600) 
    {
        setcookie($name, $values, time() + $time, '/', '', true, true);
        
    }

    public static function get(string $name,  string $type): string
    {
        if(isset($_COOKIE[$name]))
        {
            return 'ID de session ' .$_COOKIE[$name]. 'type User ' .$type;
        }
        return 'Pas de thème préféré défini';
    }

    public static function delete(string $name)
    {
        setcookie($name, '', time()-3600, '/', '', false, false);
    }
}