<?php
require_once 'HTMLElement.php';


class Input extends HTMLElement implements Render
{
    /* public function __construct ($tag,  $attributs = [], $content = '')
    {
        $this->tag = $tag;
        $this->attributs = $attributs;
        $this->content = $content;
    }
	*/
    public function __construct (private string $type, private string $name, private string $value = '')
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }
	
   /* private function attributs()
    {
        $attributs = '';
        
        foreach($this->attributs as $key=>$values)
        {
            $attributs .= sprintf('%s="%s"', $key, $values);
        }
        return $attributs;
    }
    */
    public function render()
    {
        return sprintf('<input type="%s" name="%s" value="%s">', $this->type, $this->name, $this->value);
    }
}