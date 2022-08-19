<?php

namespace Classes;

class Student extends User
{
    private $group;
    private $marks = [];
    public function __construct(string $name, string $email, string $group, array $marks = [])
    {
        parent::__construct($name, $email);
        $this->group = $group;
        $this->marks = $marks;
    }
    public function addMark($mark)
    {
        $this->marks[] = $mark;
    }
    public function show()
    {
        echo "<table class='table'>
        <tr>
            <td>Name:</td>
            <td>$this->name</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>$this->email</td>
        </tr>
        <tr>
            <td>Group:</td>
            <td>$this->group</td>
        </tr>
        <tr>
            <td>Marks:</td>
            <td>
        ";
        foreach ($this->marks as $index => $mark) {
            if ($index < count($this->marks) - 1) {
                echo "$mark, ";
            } else {
                echo "$mark";
            }
        }
        echo "</></tr></table>";
    }
}
