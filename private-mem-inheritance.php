<?php

#Single level inheritance with private members from the Base class.

class Human
{
    private $name, $gender;

    function __construct()
    {
        $this->name =  readline("Enter the student name : ");
        $this->gender = readline("Enter the Studnet gender : ");
    }

    function get_name()
    {
        return $this->name;
    }

    function get_gender()
    {
        return $this->gender;
    }
}

class Student extends Human
{
    private $roll, $collge, $per;

    function __construct()
    {
        Human::__construct();   //resolving the method overriding.
        #parent::__construct(); //resolving the method overriding. 
        $this->roll = (int)readline("Enter the student roll number : ");
        $this->college = readline("Enter the student collge name : ");
        $this->per = (float)readline("Enter the student percentage : ");
    }

    function display()
    {
        echo "\n Student name is = " . $this->get_name();
        echo "\n Student gender is = " . $this->get_gender();
        echo "\n Student roll number is = " . $this->roll;
        echo "\n Student college name is = " . $this->college;
        echo "\n Student percentage is = " . $this->per;
    }
}

$s1 = new Student();
$s1->display();
