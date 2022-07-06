<?php

class Student
{
    private $seatNo, $name, $course;

    function __construct()
    {
        $this->seatNo = (int)readline("Enter the student seat number : ");
        $this->name = readline("Enter the student name : ");
        $this->course = readline("Enter Student course : ");
    }

    function get_seatno()
    {
        return $this->seatNo;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_course()
    {
        return $this->course;
    }
}

class Exam extends Student
{
    private $phy, $chem, $maths;

    function __construct()
    {
        $this->phy = (int)readline("Enter the physics marks : ");
        $this->chem = (int)readline("Enter the chemistry marks : ");
        $this->maths = (int)readline("Enter the maths marks : ");
    }

    function get_phy()
    {
        return $this->phy;
    }

    function get_chem()
    {
        return $this->chem;
    }

    function get_math()
    {
        return $this->maths;
    }
}

class Result extends Exam
{
    private $per, $grade;

    function __construct()
    {
        Student::__construct();
        Exam::__construct();
    }

    function cal_resutl()
    {
        $total_marks = $this->get_phy() + $this->get_chem() + $this->get_math();
        $this->per = $total_marks / 3;

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
    }

    function display()
    {
        echo "\n Studnet seat number is = " . $this->get_seatno();
        echo "\n Student name is = " . $this->get_name();
        echo "\n Student physics marks = " . $this->get_phy();
        echo "\n Student chemistry marks = " . $this->get_chem();
        echo "\n Studnet maths marks = " . $this->get_math();
        echo "\n Student percentage is = $this->per" . " %";
        echo "\n Student Greade is = $this->grade";
    }
}

$s1 = new Result();
$s1->cal_resutl();
$s1->display();



/*

OUTPUT:-


Enter the student seat number : 101021
Enter the student name : Aryaman
Enter Student course : SYBBACA
Enter the physics marks : 45
Enter the chemistry marks : 88
Enter the maths marks : 40

 Studnet seat number is = 101021
 Student name is = Aryaman
 Student physics marks = 45
 Student chemistry marks = 88
 Studnet maths marks = 40
 Student percentage is = 57.666666666667 %
 Student Greade is = B

*/