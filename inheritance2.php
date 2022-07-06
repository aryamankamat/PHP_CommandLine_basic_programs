<?php
class Base
{
    public $x = 10;
    private $y = 20;
    protected $z = 30;
    var $abc = 99;
}

class Derived extends Base
{

    function display()
    {
        echo "\n Hello from the Derived ka display function!!! \n";
        $ans = get_object_vars($this);
        var_dump($ans);
    }
}

$d1 = new Derived();
echo "\n Accessible attribute of object \n";
$ans = get_object_vars($d1);
var_dump($ans);
echo "\n\n";
$d1->display();
