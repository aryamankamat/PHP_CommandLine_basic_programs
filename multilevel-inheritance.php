<?php

class Student
{
    protected $seatNo, $name, $course;
}

class Exam extends Student
{
    protected $phy, $chem, $maths;
}

class Result extends Exam
{
    private $per, $grade;

    function __construct()
    {
        $this->seatNo = (int)readline("Enter the student seat number : ");
        $this->name = readline("Enter the student name : ");
        $this->course = readline("Enter Student course : ");
        $this->phy = (int)readline("Enter the physics marks : ");
        $this->chem = (int)readline("Enter the chemistry marks : ");
        $this->maths = (int)readline("Enter the maths marks : ");
    }

    function cal_resutl()
    {
        $total_marks = $this->phy + $this->chem + $this->maths;
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
        echo "\n Studnet seat number is = $this->seatNo";
        echo "\n Student name is = $this->name";
        echo "\n Student physics marks = $this->phy";
        echo "\n Student chemistry marks = $this->chem";
        echo "\n Studnet maths marks = $this->maths";
        echo "\n Student percentage is = $this->per" . " %";
        echo "\n Student Greade is = $this->grade";
    }
}

$s1 = new Result();
$s1->cal_resutl();
$s1->display();
