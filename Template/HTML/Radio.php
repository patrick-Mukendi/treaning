<?php
require_once 'HTMLElement.php';
require_once 'Template/Interface/Render.php';

class Radio extends HTMLElement implements Render
{ 
    public function __construct (private string $name, private $content = '', private bool $checked=true, private array $attributs = [])
    { 
        $this->name = $name;
        $this->attributs = $attributs;
        $this->content = $content;
        $this->checked = $checked;
    }

    private function attributs(): string
    {
        $attribut='';

        foreach($this->attributs as $key => $values)
        {
            $attribut .= sprintf('%s="%s" ', $key, $values);
        }
        return $attribut;
    }

    public function render()
    {
        $checked =  $this->checked ? "checked" : "";
        return sprintf('<input  %s %s/><label for="%s">%s</label> ', $this->attributs(), $checked, $this->name, $this->content);
    }
} 
