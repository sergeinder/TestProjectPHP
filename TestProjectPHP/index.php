<?php

include "includeTest.php";
include "Student.php";
require_once "Human.php";


//$newArray = ["t", "rrr", "some"];
//$printArray($newArray);

$firstHuman = new Human();

$firstHuman->sayMyName();

$newStudent = new Student();

$newStudent->info();


$newStudent->group = 5;
$newStudent->name = "Igor";

$newStudent->info();



