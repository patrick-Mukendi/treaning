<?php

namespace App;

use App\HTML\HTMLElement;

class Form extends HTMLElement
{
    private array $content;

    public function __construct(private array $attributs = [])
    {
        $this->attributs = $attributs;
    }

    private function attribut(): string
    {
        $attributs = '';

        foreach ($this->attributs as $key => $value) {
            $attributs .= sprintf('%s="%s" ', $key, $value);
        }

        return $attributs;
    }

    public function addElement(object $element): void
    {
        $this->content[] = $element;
    }

    public function render(): string
    {
        $element = sprintf('<form %s >', $this->attribut());

        foreach ($this->content as $values) {
            $element .= $values->render();
        }
        $element .= '</form>';

        return $element;
    }
}
