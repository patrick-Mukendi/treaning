<?php
require_once 'HTMLElement.php';
require_once 'Template/Interface/Render.php';

class Button extends HTMLElement {
     
    public function __construct($tag, $attributs = [], $content = '')
    {
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->content = $content;
    }
    
    private function attribut()
    {
        $attributs = '';
        
        foreach($this->attributs as $key=>$values)
        {
            $attributs .= sprintf('%s="%s"', htmlspecialchars($key0), htmlspecialchars($values));
        }
        return $attributs;
    }

    public function render()
    {
        return sprintf('<button type="%s" %s >%s</button>', $this->tag, $this->attribut(), $this->content);
    }
}