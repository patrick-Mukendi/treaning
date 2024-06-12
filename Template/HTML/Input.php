<?php
require_once 'HTMLElement.php';

class Input extends HTMLElement{
    public function __construct (private string $tag = 'p', private string $type, private string $name, private string $value = "", private string $content)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->content = $content;
        $this->tag = $tag;
    }

    private function  tag($tag)
    {
        return "<{$this->tag}>{$tag}</{$this->tag}>";
    }

    public function input()
    {
        return $this->tag("<input type='{$this->type}' name='{$this->name}' value='{$this->value}'>{$this->content}</input>");
    } 
}