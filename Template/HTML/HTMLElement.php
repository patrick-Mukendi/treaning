<?php
require_once 'Template/Interface/Render.php';

 class HTMLElement implements Render{

    private string $tag;
    private  $attributes;
    private string $content;

    public function __construct($tag, $attributs = [], $content = '')
    {
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->content = $content;
    }
    
    private function attribut()
    {
        $attributs = '';
        
        foreach($this->attributs as $key=>$values)
        {
            $attributs .= sprintf('%s="%s"', $key, $values);
        }
        return $attributs;
    }

    public function render()
    {
        return sprintf('<%s %s >%s</%s>', $this->tag, $this->attribut(), $this->content, $this->tag);
    }
	
   
}