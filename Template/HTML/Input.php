<?php
require_once 'HTMLElement.php';

class Input extends HTMLElement
{
    public function __construct (private string $type, private ? string $name, private ? string $value = null, private array $attributs = [])
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->attributs = $attributs;
    }
	
    private function attribut() : string
    {
        $html = '';
        foreach($this->attributs as $key => $value)
        {
            $html .= sprintf('%s="%s" ', $key, $value);
        }
        return $html;
    }

    public function render(): string
    {
        return sprintf('<input type="%s" name="%s" value="%s" %s>', $this->type, $this->name, $this->value, $this->attribut());
    }
}

