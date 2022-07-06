<?php

use Student as GlobalStudent;

class Student
{

    static $college = "iccs";

    function setData()
    {
        $this->roll = (int)readline("Enter student roll number : ");
        $this->name = readline("Enter student name : ");
    }

    function putData()
    {
        echo "$this->roll " . "\n";
        echo "$this->name " . "\n";
        // echo Student::$college;  // method 1 : to access the static attribute into non-static methods of the same class.
        echo SELF::$college;    //method 2 : to access the static attribute into non-static methods of the same class.
    }
}


$s1 = new Student;

$s1->setData();
echo "Student details are displyed below \n\n";
$s1->putData();
