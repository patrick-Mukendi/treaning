<?php
require_once 'HTMLElement.php';


class Radio extends HTMLElement implements Render
{ 
    public function __construct ($tag,  $attributs = [], $content = '')
    { 
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->content = $content;
    }

    public function fieldset(...$valeur)
    {
            $content = implode('', $valeur);
            return "<fieldset>{$content}</fieldset>";
    }

    public function radio(string $name, string $value, string $label, string $checked = "")
    {        
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;

       return "<input type='radio'  name={$name}. value={$value} {$checked} /> 
                <label for={$label}>{$label}</label>";
    }
} 
