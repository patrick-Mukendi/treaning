<?php
/**
 * J'utilise le modèle de conception Singleton pour s'assurer qu'il n'y a qu'une seule
 * instance de la classe qui gère les données.
 */
class Data
{
    private static ?self $instance = null;
    private string $name;
    private int $age;

    private function __construct()
    {
        // Constructeur privé pour empêcher l'instanciation directe
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}
