<?php

# WAY - 1


class Demo
{
    function __construct()
    {
        echo "Hello Constructor !!! \n";
        echo "Constructing the object with ID:" . spl_object_id($this) . "\n";
    }

    #object destruction happens in reverse order.
    function __destruct()
    {
        echo "Destroying the object with ID:" . spl_object_id($this) . "\n";
    }
}

$d1 = new Demo();
$d2 = new Demo();
