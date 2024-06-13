<?php
abstract class HTMLElement{

    protected function button()
    {
        return 'Button';
    }
	
    protected function input()
    {
        return 'input';
    }
	
    protected function textarea()
    {
        return 'Textarea';
    }

    protected function checkbox()
    {
        return 'checkbox';
    }

    protected function radio(string $name, string $value, string $label, string $checked = "")
    {
        return "radio";
    }
   
}