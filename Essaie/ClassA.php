<?php

require_once 'Data.php';

class A
{
    
    public function getAge(): int
    {
        $data = Data::getInstance();
       return $data->getAge();
    }

    public function getName(): string
    {
        $data = Data::getInstance();
       return $data->getName();
    }

    public function setName(string $name): void
    {
        $data = Data::getInstance();
        $data->setName($name);
    }

    public function setAge(int $age): void
    {
        $data = Data::getInstance();
        $data->setAge($age);
    }
}
