<?php
trait Logger
{
    public function log(string $message): void
    {
        echo "Logging " . $message;
    }
}
