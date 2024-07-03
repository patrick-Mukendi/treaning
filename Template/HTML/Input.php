<?php

namespace App\HTML;

class Input extends HTMLElement
{
    public function __construct(private string $type, private ?string $name, private ?string $placeHolder = null, private array $attributs = [])
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeHolder = $placeHolder;
        $this->attributs = $attributs;
    }

    private function attribut(): string
    {
        $html = '';
        foreach ($this->attributs as $key => $placeHolder) {
            $html .= sprintf('%s="%s" ', $key, $placeHolder);
        }

        return $html;
    }

    public function render(): string
    {
        return sprintf('<div class="row"><input type="%s" name="%s" placeHolder="%s" %s></div>', $this->type, $this->name, $this->placeHolder, $this->attribut());
    }
}
