<?php
require_once 'HTMLElement.php';

class Button extends HTMLElement {
   
    public function __construct( private string $tag = 'p', private string $attributs, private string $contenus)
    {
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->contenus = $contenus;
    }

    private function  tag($tag){
        return "<{$this->tag}>{$tag}</{$this->tag}>";
    }

    public function submit(){
        return $this->tag("<{$this->attributs} type='submit'>{$this->contenus}</{$this->attributs}>");
    }
}