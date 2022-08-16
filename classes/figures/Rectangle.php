<?php

namespace Classes\Figures;

// require_once "classes/figures/CalcSquare.php";
class Rectangle implements CalcSquare
{
    public $w;
    public $h;
    public function __construct($w, $h)
    {
        $this->w = $w;
        $this->h = $h;
    }
    public function calcSquare()
    {
        return $this->w * $this->h;
    }
}
