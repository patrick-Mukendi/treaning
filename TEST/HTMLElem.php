<?php

class HTMLElement {
    private $tag;
    private $attributes;
    private $content;

    public function __construct($tag, $attributes = [], $content = '') {
        $this->tag = $tag;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    private function renderAttributes() {
        $html = '';
        foreach ($this->attributes as $key => $value) {
            $html .= sprintf(' %s="%s"', htmlspecialchars($key), htmlspecialchars($value));
        }
        return $html;
    }

    public function render() {
        return sprintf(
            '<%s%s>%s</%s>',
            $this->tag,
            $this->renderAttributes(),
            htmlspecialchars($this->content),
            $this->tag
        );
    }
}
?>
