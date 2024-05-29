<?php
class Formation {
    

    public function __construct(
        public string $nom,
        public string $description,
        public int $duree,
        public string $dateDeFin
    ){

    }
   
} 

$webFullStack=new Formation("Patrick","Web dev fullstack",90,"9-9-24");

    
