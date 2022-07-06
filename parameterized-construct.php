<?php

class Student
{
    var $roll, $name, $per;

    function __construct($r, $n, $p)
    {
        $this->roll = $r;
        $this->name = $n;
        $this->per = $p;
    }

    function display()
    {
        echo "The student roll number = $this->roll" . "\n";
        echo "The student name = $this->name" . "\n";
        echo "The student percentage = $this->per" . "\n";
    }
}

$s1 = new Student(101, "Aryaman", 68.55);
$s1->display();
