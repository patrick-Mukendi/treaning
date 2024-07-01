<?php
namespace App;
use App\HTML\HTMLElement;

class Select extends HTMLElement
{
    public function __construct(private string $name,  private array $options = [],  private array $attributs = [])
    {
        $this->name = $name;
        $this->options = $options;
        $this->attributs = $attributs;
    }
	
    private function attribut(): string
    {
        $attribut ='';

        foreach($this->attributs as $key => $values)
        {
            $attribut .= sprintf('%s="%s" ', htmlspecialchars($key), htmlspecialchars($values));
        }
        return $attribut;
    }

    private function option(): string
    {
        $option ='';

        foreach($this->options as $key => $values)
        {
            $option .= sprintf('<option value="%s">%s</option>', $key, $values);
        }
        return $option;
    }

    public function render(): string
    {
        return sprintf('<select name="%s" %s>%s</select>',$this->name, $this->attribut(), $this->option() );
    }
}