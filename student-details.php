<?php

use Student as GlobalStudent;

class Student
{
    var $roll;
    var $name;
    var $m1 , $m2 , $m3;
    var $per;

    function getData()
    {
        $this->roll = (int)readline("Enter the student roll number : ");
        $this->name = readline("Enter the student name : ");
        $this->m1 = (int)readline("Enter the phy marks : ");
        $this->m2 = (int)readline("Enter the chem marks : ");
        $this->m3 = (int)readline("Enter the math marks : ");
    }

    function calc()
    {
        $this->per = ($this->m1 + $this->m2 + $this->m3)/3;
    }

    function display()
    {
        echo "Student roll number is = $this->roll" . "\n";
        echo "Student name is = $this->name" . "\n";
        echo "Student Percentage is = $this->per" . "\n";
    }
}

$s1 = new Student();

$s1->getData();
$s1->calc();
$s1->display();
