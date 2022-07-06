<?php

# WAY - 2


class Demo
{
    function __construct()
    {
        echo "Hello Constructor !!! \n";
        echo "Constructing the object with ID:" . spl_object_id($this) . "\n";
    }

    function __destruct()
    {
        echo "Destroying the object with ID:" . spl_object_id($this) . "\n";
    }
}

function main()
{
    printf("Inside the  main function !!!\n");
    $d3 = new Demo();
} #object will be destroyed as soon as it gets out of scope.

$d1 = new Demo();
$d2 = new Demo();

main();

$d4 = new Demo();
