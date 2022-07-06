<?php

#Single level inheritance with public members from the Base class.
#Single level inheritance with protected members from the Base class.

class Human
{
    // public $name,$gender;
    protected $name, $gender;
}

class Student extends Human
{

    // public $roll , $college , $per;
    protected $roll, $college, $per;

    function __construct()
    {
        $this->roll = (int)readline("Enter the student roll number : ");
        $this->name = readline("Enter the student name : ");
        $this->gender = readline("Enter the student Gender : ");
        $this->college = readline("Enter the student college name : ");
        $this->per = (float)readline("Enter the student percentage : ");
    }

    function putData()
    {
        echo "\n Studnet roll number is = $this->roll \n";
        echo "\n Studnet name is = $this->name \n";
        echo "\n Studnet Gender is = $this->gender \n";
        echo "\n Studnet Collage name is = $this->college \n";
        echo "\n Studnet Percentage is = $this->per \n";
    }
}

$s1 =  new Student();
$s1->putData();

// if the properties are declared as "public" then they can be accessed outside the class which will make out script vulnarable to threats.

// echo "\n Studnet roll number is = $s1->roll \n";
// echo "\n Studnet name is = $s1->name \n";
// echo "\n Studnet Gender is = $s1->gender \n";
// echo "\n Studnet Collage name is = $s1->college \n";
// echo "\n Studnet Percentage is = $s1->per \n";
