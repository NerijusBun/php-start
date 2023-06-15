<?php

class H1WithRandomColor extends AddH1 {

    public function getColor(): string
    {
        return 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';
    }
}