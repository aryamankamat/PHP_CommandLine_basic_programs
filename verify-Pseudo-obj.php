<?php

class Student
{
    var $roll;
    var $name;

    function show()
    {
        echo "\n ID of the object in show function = " . spl_object_id($this) . "\n";
    }

    static function display()
    {
        //Pseudo object is not availabe with static methods.
        #echo "\n ID of the object in show function = " . spl_object_id($this) . "\n";
    }
};

$s1 = new Student;

var_dump($s1);

echo "ID of the object is = " . spl_object_id($s1) . "";

$s1->show();
