<?php
require_once "Traits\Logger.php";

class Application
{
    use Logger;

    public function getUser(string $user)
    {
        $this->log($user);
    }
}
