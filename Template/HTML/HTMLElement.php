<?php

namespace App\HTML;

abstract class HTMLElement
{
    abstract public function render(): string;
}
