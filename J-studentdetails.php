<?php
/*  
Create a class Student with data member roll_no,name,PRN number.
Derive class Marks from student with data member M_PHP,M_OS,M_CPP,M_Net and 
derive a class Result from class Marks with members(Total_Marks,Percentage,Grade).
(User Intface concept)
Write a menu driven program in PHP to perfrom the following operation:
i. Accept student information.
ii. Display student information with its result.
*/


interface details
{
    function getData();
    function display();
}

class Student
{
    protected $roll, $name, $prn;
}
class Marks extends Student
{
    protected $m_php, $m_os, $m_cpp, $m_cn;
}
class Result extends Marks implements details
{
    private $tm, $per, $grade;

    function getData()
    {
        $this->roll = (int)readline("Enter the student roll number : ");
        $this->name = readline("Enter the student name : ");
        $this->prn = (int)readline("Enter Student Personal Number : ");
        $this->m_php = (int)readline("Enter the PHP marks : ");
        $this->m_os = (int)readline("Enter the OS marks : ");
        $this->m_cpp = (int)readline("Enter the CPP marks : ");
        $this->m_cn = (int)readline("Enter the Networking marks : ");
    }

    function display()
    {

        $this->tm = $this->m_php + $this->m_os + $this->m_cpp + $this->m_cn;
        $this->per = $this->tm / 4;

        if ($this->per >= 70) {
            $this->grade = 'O';
        } elseif (($this->per >= 60) and ($this->per < 70)) {
            $this->grade = 'A';
        } elseif (($this->per >= 50) and ($this->per < 60)) {
            $this->grade = 'B';
        } elseif (($this->per >= 40) and ($this->per < 50)) {
            $this->grade = 'C';
        } else {
            $this->grade = 'D';
        }

        echo "\n Studnet roll number is = $this->roll";
        echo "\n Student name is = $this->name";
        echo "\n Student PHP marks = $this->m_php";
        echo "\n Student OS marks = $this->m_os";
        echo "\n Studnet CPP marks = $this->m_cpp";
        echo "\n Studnet Networking marks = $this->m_cn";
        echo "\n Student percentage is = $this->per" . " %";
        echo "\n Student Greade is = $this->grade";
    }
}

$s1 = new Result();

while (1) {
    echo "\n\n**** MENU ****\n\n";
    echo "1. Accept student information. \n";
    echo "2. Display student information with its result.\n";

    $ch = (int)readline("Enter Your choice : ");

    switch ($ch) {
        case 1:
            $s1->getData();
            break;

        case 2:
            $s1->display();
            break;
        default:
            echo "\n Please enter a valid choice...\n";
            break;
    }
}
