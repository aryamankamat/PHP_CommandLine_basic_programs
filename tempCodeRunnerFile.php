<?php
class Student
{

    function setData()
    {
        echo "\n Id of Pseudo object is = " . spl_object_id($this);
    }
}
$s1 = new Student();
$s1->setData();
echo "\n Id of the object outside class is = " . spl_object_id($s1);