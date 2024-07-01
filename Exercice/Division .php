<?php
class Division
{
    public function __construct(private float $nombre, private float $diviseur)
    {
        $this->nombre = $nombre;
        $this->diviseur = $diviseur;
    }

    public function divide(): void 
    {
        if($this->diviseur == 0)
        {
          throw new \Exception("Division par 0 impossible"); 
        }
    }
}