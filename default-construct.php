<?php

class Student
{
    var $roll, $name, $per;

    function __construct()
    {
        $this->roll = (int)readline("Enter the Student roll number : ");
        $this->name = readline("Enter Student name : ");
        $this->per = (float)readline("Enter the Student percentage : ");
    }

    function display()
    {
        echo " \n The student roll = $this->roll";
        echo " \n The student name = $this->name";
        echo " \n The student percentage = $this->per";
    }
}

$s1 = new Student();
$s1->display();
