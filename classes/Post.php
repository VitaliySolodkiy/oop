<?php
class Post
{
    private $title;
    private $content;
    public static $tagTitle = 'h2';
    public const TAG_CONTENT = 'div';



    public function __construct($title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getPost()
    {
        return "<" . self::$tagTitle . ">$this->title</" . self::$tagTitle . "><" . self::TAG_CONTENT . ">$this->content</" . self::TAG_CONTENT . ">";
    }

    public function __toString()
    {
        // return json_encode([
        //     'title' => $this->title,
        //     'content' => $this->content,
        // ]);
        return 1;
    }
}

/* 
Спецификаторы доступа:
    public - к свойству можно обращаться везде
    protected - за пределеами класса свойство или метод недоступен, но доступен в калссах наследниках
    private - за пределами класса недоступен

У свойства спецификатор доступа обязателен. У метода - нет. Но лучше писать везде.
*/