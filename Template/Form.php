<?php
require_once 'Interface/Render.php';

class Form implements Render 
{
    private $attributs;
    private $content;

    public function __construct ($attributs = [], $content = [])
    {
        $this->attributs = $attributs;
        $this->content = $content;
    }

    public function addElement($element)
    {
        $this->content[] = $element;
    }

    private function contents()
    {
        $attribut = '';

        foreach($this->attributs as $key => $values)
        {
            $attribut .= sprintf('%s="%s"', htmlspecialchars($key), htmlspecialchars($values));
        }
        return $attribut;
    }

    public function render()
    {
        $element = '<form' . $this->contents().'>';

        foreach ($this->contents as $values )
        {
            $element .= $values;
        }
        $element .= '</form>';

        return $element;
    }
}