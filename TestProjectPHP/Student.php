<?php

require_once "Human.php";

class Student extends Human
{
    private $group;
    private $yearOfComming = 2024;

    public function __construct()
    {
        $this->group = 0;
        $this->name = "Noname";
    }

    public function info()
    {
        print_r("Information about student\nName: {$this->name}\nGroup: {$this->group}\nYear of comming: {$this->yearOfComming}\n");
    }
}