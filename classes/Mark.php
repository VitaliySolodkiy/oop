<?php

trait Mark
{
    private $mark = 0;
    public function setMark($m) // $m = 1 or -1
    {
        $this->mark += $m;
    }

    public function getMark()
    {
        return $this->mark;
    }
}
