<?php
class Division
{
    private float $nombre;
    private float $diviseur;

    public function __construct(float $nombre, float $diviseur)
    {
        $this->nombre = $nombre;
        $this->diviseur = $diviseur;
    }

    public function divide(): never 
    {
        if($this->diviseur == 0)
        {
            throw new \Exception("Division par 0 impossible");
        }
    }
}