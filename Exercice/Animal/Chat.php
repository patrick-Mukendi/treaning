<?php

require_once 'Animal.php';

class Chat extends Animal
{
    public function makeSound(): void
    {
        echo 'Im a Cat';
    }
}
