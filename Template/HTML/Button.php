<?php
require_once 'HTMLElement.php';

class Button extends HTMLElement {
   
    public function __construct( private string $contenus, private string $attributs = "submit", private string $tag = 'p')
    {
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->contenus = $contenus;
    }

    private function  tag($tag){
        return "<{$this->tag}>{$tag}</{$this->tag}>";
    }

    public function submit(){
        return $this->tag("<button type={$this->attributs}>{$this->contenus}</button>");
    }
}