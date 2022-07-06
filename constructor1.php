<?php 

class Demo
{
    function __construct()  
    {
        echo "The ID of the object inside the constructor is = " . spl_object_id($this) . "\n";
    }
}

$d1 = new Demo();

echo "The ID of the object outside the constructor is = " . spl_object_id($d1) . "\n";
