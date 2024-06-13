<?php
require_once 'Interface/Render.php';

class Select implements Render
{
    private string $name;
    private $options;
    private $attributs;

    public function __construct(string $name,  $options = [],  $attributs = [])
    {
        $this->name = $name;
        $this->options = $options;
        $this->attributs = $attributs;
    }
	
    private function option()
    {
        $option ='';

        foreach($this->options as $key => $values)
        {
            $option .= sprintf('%s="%s"', $key, $values);
        }
        return $option;
    }

    private function attribut()
    {
        $attribut ='';

        foreach($this->attributs as $key => $values)
        {
            $attribut .= sprintf('<option value="%s">%s</option>', $key, $values);
        }
        return $attribut;
    }

    public function render()
    {
        return sprintf('<select name="%s" %s>%s</select>',$this->name, $this->attribut(), $this->option() );
    }
}