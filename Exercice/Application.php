<?php
require_once "Traits\Logger.php";

class Application
{
    use Logger;

    public function getUser(string $user): void
    {
        $this->log($user);
    }
}
