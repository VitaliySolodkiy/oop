<?php
require_once "classes/Mark.php";

class Lesson extends Post
{
    use Mark; //подключаем использование trait из Mark.php. Если хотим использовать несколько trait, они перечисляются через запятую
    private $homework;
    public function __construct($title, $content, $homework)
    {
        parent::__construct($title, $content);
        $this->homework = $homework;
    }

    public function getPost(): string
    {
        $parentGetPost = parent::getPost();
        return $parentGetPost . "<small>$this->homework</small>";
    }
    public function getInfo()
    {
        echo "Lesson";
    }
}
