<?php
require_once 'HTMLElement.php';

class Textarea extends HTMLElement implements Render
{
    public function __construct($name, $content, $attributs = [] )
    {
        $this->name = $name;
        $this->attributs = $attributs;
        $this->content = $content;
    }

    private function attribut()
    {
        $attributs = '';
        
        foreach($this->attributs as $key=>$values)
        {
            $attributs .= sprintf('%s="%s"', htmlspecialchars($key), htmlspecialchars($values));
        }
        return $attributs;
    }

    private function  render()
    {
        return sprintf(
            '<textarea name="%s" %s>%s</textarea>', 
            $this->name, 
            $this->attribut(),
            $this->content);
    }
}
