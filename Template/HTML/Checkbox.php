<?php

namespace App\HTML;

class Checkbox extends HTMLElement
{
    public function __construct(private string $name, private string $value, private bool $checked = true, private array $attributs = [])
    {
        $this->name = $name;
        $this->value = $value;
        $this->checked = $checked;
        $this->attributs = $attributs;
    }

    private function attributs(): string
    {
        $attribut = '';

        foreach ($this->attributs as $key => $values) {
            $attribut .= sprintf('%s="%s" ', $key, $values);
        }

        return $attribut;
    }

    public function render(): string
    {
        $checked = $this->checked ? 'checked' : null;

        return sprintf('<input type="checkbox"  %s %s %s %s/><label for="%s">%s</label>', $this->name, $this->value, $checked, $this->attributs(), $this->value, $this->value);
    }
}
