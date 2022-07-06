<?php

class Student
{
    var $roll, $name;

    function __construct($r, $n)
    {
        $this->roll = $r;
        $this->name = $n;
    }
}

$s1 = new Student(15, "Aryaman");
$s2 = new Student(1, "Kamat");
$s3 = new Student(14, "Chetan");

$stud = array($s1, $s2, $s3);

// print_r($stud);
// var_dump($stud);
echo "Roll      Name \n";
foreach ($stud as $record) {
    echo "$record->roll  \t  $record->name" . "\n";
}
