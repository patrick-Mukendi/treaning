<?php
require_once 'HTMLElement.php';

class Textarea extends HTMLElement{
    public function __construct(private string $tag = 'p', private string $name, private int $rows, private int $cols)
    {
        $this->name = $name;
        $this->rows = $rows;
        $this->cols = $cols;
        $this->tag = $tag;
    }

    private function  tag($tag)
    {
        return "<{$this->tag}>{$tag}</{$this->tag}>";
    }

    public function textarea()
    {
        return $this->tag("<textarea name='{$this->name}' rows='{$this->rows}' cols='{$this->cols}'>{$this->content}</textarea>");
    }
}
