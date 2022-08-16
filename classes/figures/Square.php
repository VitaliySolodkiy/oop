<?php
require_once "classes/figures/CalcSquare.php";
class Square implements CalcSquare
{
    public $w;
    public function __construct($w)
    {
        $this->w = $w;
    }
    public function calcSquare()
    {
        return $this->w * $this->w;
    }
}
