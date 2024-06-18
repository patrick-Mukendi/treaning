<?php
require_once 'HTML/HTMLElement.php';

class Textarea extends HTMLElement 
{
    public function __construct(private string $name, private string $content, private array $attributs = [] )
    {
        $this->name = $name;
        $this->attributs = $attributs;
        $this->content = $content;
    }

    private function attribut(): string
    {
        $attributs = '';
        
        foreach($this->attributs as $key => $values)
        {
            $attributs .= sprintf('%s="%s"', htmlspecialchars($key), htmlspecialchars($values));
        }
        return $attributs;
    }

    public function  render(): string
    {
        return sprintf(
            '<textarea name="%s" %s placeholder="%s" ></textarea>', 
            $this->name, 
            $this->attribut(),
            $this->content);
    }
}
