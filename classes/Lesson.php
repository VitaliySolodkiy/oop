<?php
class Lesson extends Post
{
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
}
