<?php
require_once "Person.php";

class Employe extends Person {
   	private string $jobTitle;
    
    public function __construct(string $jobTitle, string $name, int $age)
    {
        parent::__construct($name, $age);
    }

	public function getJobTitle(): string 
    {
        return $this->jobTitle;
    }

	public function getName(): string 
    {
        return $this->name;
    }

	public function getAge(): int 
    {
        return $this->age;
    }
}
