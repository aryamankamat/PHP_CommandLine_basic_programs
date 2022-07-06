<?php
#single level Inheritance
class Base
{
    var $x = 10;
    public $y = 20;

    function show()
    {
        printf("\nHello from the Base ka show function\n");
    }
}

class Derived extends Base
{
    public $z = 30;

    function display()
    {
        echo "\n Hello from the Derived ka display function!!! \n";
    }
}

$d1 = new Derived();
$ans = get_object_vars($d1);
echo "\n Properties availabe with the object d1.\n";
var_dump($ans);

$ans1 = get_class_methods("Derived");
echo "\n Methods availabe with the object d1.\n";
var_dump($ans1);
