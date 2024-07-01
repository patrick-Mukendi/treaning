<?php
namespace App\HTML;
use App\HTML\HTMLElement;

class Button extends HTMLElement 
{
    public function __construct(private string $tag, private array $attributs = [], private string $content = '')
    {
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->content = $content;
    }
    
    private function attribut(): string
    {
        $attributs = '';
    
        foreach($this->attributs as $key=>$values)
        {
            $attributs .= sprintf('%s="%s" ]', htmlspecialchars($key), htmlspecialchars($values));
        }
        return $attributs;
    }

    public function render() : string
    {
        return sprintf('<%s %s >%s</%s>', $this->tag, $this->attribut(), $this->content, $this->tag);
    }
}