<?php

class Student
{


    const FEES = 45000;  // method 1 : declaring constant inside the class using "const" keyword.

    // *ERROR* // define("CONTI", "ASIA");   // method 2 : declaring constant inside the class using define() function.

    function setData()
    {
        $this->roll = (int)readline("Enter student roll number : ");
        $this->name = readline("Enter student name : ");
    }

    function putData()
    {
        echo "roll    name    STATE     CITY    FEES    CONTINENT" . "\n";
        echo "$this->roll  " . "$this->name     " . STATE  . "    " . CITY . "    " . Student::FEES;
    }
}



const STATE = "MH";    // method 1 : to declaring constant outside the class using "const" keyword.
define("CITY", "PUNE");  // method 2 : to declare constant outside the class using define() function.

$s1 = new Student;

$s1->setData();

echo "\n Student details are displayed below : \n\n";

$s1->putData();
