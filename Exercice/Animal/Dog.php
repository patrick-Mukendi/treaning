<?php
require_once "Animal.php";

class Dog extends Animal
{
    public function makeSound(): void
    {
        echo 'Im a dog';
    }
}
