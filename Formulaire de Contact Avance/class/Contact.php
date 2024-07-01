<?php
namespace Contact\Class;

class Contact
{
    public function __construct(private ?string $id = null, private ?string $name = null, private ?string $email = null, private ?string $phone = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getId(): string | null
    {
        return $this->id;
    }

    public function getName(): string | null
    {
        return $this->name;
    }

    public function getEmail(): string | null
    {
        return $this->email;
    }

    public function getPhone(): string | null
    {
        return $this->phone;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}
