<?php
require_once "Person.php";

class Employe extends Person
{
    public function __construct(string $name, int $age, private string $jobTitle)
    {
        parent::__construct($name, $age);
    }

    public function getEmploye(): void
    {
        echo "{$this->name} {$this->age} {$this->jobTitle}";
    }
}
