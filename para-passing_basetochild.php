<?php
# Passing parameters to Base class constructor from child class constructor in sigle level inheritance.
class Human
{
    private $name, $gender;

    function __construct($n, $g)
    {
        $this->name = $n;
        $this->gender = $g;
    }

    function getName()
    {
        return $this->name;
    }

    function getGenter()
    {
        return $this->gender;
    }
}

class Student extends Human
{
    private $roll, $course, $per;

    function __construct($n, $g, $r, $c, $p)
    {
        // Human::__construct();  #both are valid!
        parent::__construct($n, $g);

        $this->roll = $r;
        $this->course = $c;
        $this->per = $p;
    }

    function display()
    {
        echo "Student roll number is = $this->roll" . "\n";
        echo "Student name is = ", $this->getName() . "\n";
        echo "Student gender is = ", $this->getGenter() . "\n";
        echo "Student course is = $this->course" . "\n";
        echo "Student percentage is = $this->per" . "\n";
    }
}


main();
function main()
{
    $name = readline("Enter the student name : ");
    $roll = (int)readline("Enter the student roll number : ");
    $gender = readline("Enter the student Gender : ");
    $course = readline("Enter the studetn course name : ");
    $per = (float)readline("Enter the Student percentage : ");

    $s1 = new Student($name, $gender, $roll, $course, $per);
    echo "\n\n The Student Details are displayed below ... \n";
    $s1->display();
}
