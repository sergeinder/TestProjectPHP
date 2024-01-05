<?php


class Human
{
    private $name;

    public function __construct(){
        $this->name = "Noname";
    }

    public function getName(){ return $this->name; }

    public function setName($name){ $this->name = $name; }

    public function sayMyName(){
        print_r("My name is " . $this->name . "\n");
    }

}