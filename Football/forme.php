<?php
class Form {
    private $data;
    public $surround='p';

    public function __construct ($data=array()){
        
        $this->data = $data;
    }

    private function  surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
    
    private function getValue($index){
        return isset($this->data[$index]) ? ($this->data[$index]):null;
    }
    public function input($name){
        return $this->surround('<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
    }

    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}