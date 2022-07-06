<?php

class Student
{

    function setData()
    {
        $this->roll = (int)readline("Enter student roll number : ");
        $this->name = readline("Enter student name : ");
    }

    function putData()
    {
        echo "\n Student roll number is : " . $this->roll . "\n\n";
        echo "Student name is : " . $this->name . "\n\n";
    }
}

$s1 = new Student;
$s2 = new Student;

$s1->setData();
echo "\n ------------------------- \n";
$s2->setData();

echo "\nstudent details are displayed below : \n";
$s1->putData();
echo "\n ------------------------- \n";
$s2->putData();
