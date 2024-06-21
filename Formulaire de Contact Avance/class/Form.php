<?php
use App\HTML\HTMLElement;


class Form 
{
    private array $attributs;
    private array $content;

    public function __construct ($attributs = [] )
    {
        $this->attributs= $attributs;
    }
    private function attribut() : string
    {
        $attributs = '';
        foreach($this->attributs as $key => $value)
        {
            $attributs .= sprintf('%s="%s" ', $key, $value);
        }
        return $attributs;
    }

    public function addElement($element)
    {
        $elements = $element;
        $this->content[] =  $elements->render();
    }

    private function contents(): string
    {
        $content = '';

        foreach($this->attributs as $key => $values)
        {
            $content .= sprintf('%s="%s"',  $key, $values);
        }
        return $content;
    }

    public function render(): string
    {
        $element = sprintf('<form %s >', $this->attribut());

        foreach ($this->content as $values )
        {
            $element .= $values;
        }
        $element .= '</form>';
        
        return $element;
    }
}