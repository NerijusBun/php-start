<?php

abstract class AddH1 {
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    abstract function getColor(): string;

    public function print(): void 
    {
        echo '<h1 style="color:'. $this->getColor() .';">'.$this->text.'</h1>';
    }
}