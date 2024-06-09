<?php
require_once "Interface\Renderable.php";

class Render implements Renderable
{
    #[\Override]
    public function render(): void
    {
        echo 'Je suis Render';
    }
}