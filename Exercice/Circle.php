<?php

class Circle
{
    private float $rayon;
    public const PI = 3.14;

    public function __construct(float $rayon)
    {
        $this->rayon = $rayon;
    }

    public function calculAirCercle(): float
    {
        return self::PI * $this->rayon ** 2;
    }
}
