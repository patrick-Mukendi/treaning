<?php
 class HTMLElement {

    private string $tag;
    private  $attributes;
    private string $content;

    public function __construct($tag, $attributs = [], $content = '')
    {
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->content = $content;
    } 
}