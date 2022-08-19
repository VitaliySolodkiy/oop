<?php

namespace Classes;

class Teacher extends User
{

    private $groups = [];
    public function __construct(string $name, string $email, array $groups = [])
    {
        parent::__construct($name, $email);
        $this->groups = $groups;
    }
    public function addGroup($group)
    {
        $this->groups[] = $group;
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
            <td>Groups:</td>
            <td>
        ";
        foreach ($this->groups as $index => $group) {
            if ($index < count($this->groups) - 1) {
                echo "$group, ";
            } else {
                echo "$group";
            }
        }
        echo "</></tr></table>";
    }
}
