<?php
namespace App;
use App\HTML\HTMLElement;

class Form extends  HTMLElement
{
    private array $content;

    public function __construct (private array $attributs = [] )
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

    public function addElement($element): void
    {
        $elements = $element;
        $this->content[] =  $elements->render();
    }

    public function render(): string
    {
        $element = sprintf('<form %s >', $this->attribut());

        foreach ($this->content as $values)
        {
            $element .= $values;
        }
        $element .= '</form>';

        return $element;
    }
}