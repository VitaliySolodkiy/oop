<?php

namespace Classes;
//=================Task 1==============
class Tag
{
    private $tag;
    private $text;
    private $styleArr;
    public function __construct(string $tag)
    {
        $this->tag = $tag;
        $this->styleArr = [];
    }
    public function setText(string $text)
    {
        $this->text = $text;
    }
    public function setStyle(array $styleArr = [])
    {
        $this->styleArr = $styleArr;
    }
    public function show()
    {
        $style = "";
        foreach ($this->styleArr as $key => $value) {
            $style .= "$key:$value;";
        }
        echo "<$this->tag style='$style'> $this->text </$this->tag>";
    }
}
