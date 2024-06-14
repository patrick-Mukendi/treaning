<?php
require_once 'HTMLElement.php';
require_once 'Template/Interface/Render.php';

class Input extends HTMLElement implements Render
{
    public function __construct (private string $type, private string $name, private string $value = '')
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->render();
    }
	
    public function render(): string
    {
        return sprintf('<input type="%s" name="%s" value="%s">', $this->type, $this->name, $this->value);
    }
}

