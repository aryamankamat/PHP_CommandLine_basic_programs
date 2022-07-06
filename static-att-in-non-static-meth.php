<?php

use Student as GlobalStudent;

class Student
{
    static $collage = "ICCS";

    function setData()
    {
        $this->roll = (int)readline("Enter the Student roll number : ");
        $this->name = readline("Enter the Student name : ");
    }

    function putData()
    {
        echo "rollno    Name    Collage" . "\n";
        #echo "$this->roll   $this->name" . "    " . Student::$collage;
        echo "$this->roll      $this->name" . "    " . self::$collage;
    }
}

$s1 = new Student;
$s1->setData();
echo "\nStudent summery:\n";
$s1->putData();
