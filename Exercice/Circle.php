<?php
class Circle {
    const PI=3.14;
    private int $rayon;

    public function calculAirCercle(int $rayon): int {
        return PI * $rayon**2; 
    }
}