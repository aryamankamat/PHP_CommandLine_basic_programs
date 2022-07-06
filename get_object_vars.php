<?php

class Base
{
    public $x = 10;
    private $y = 20;
    protected $z = 30;

    function show()
    {
        echo "\nInside the Base ka show function\n";
        $ans = get_object_vars($this);
        var_dump($ans);
    }
}

$b1 = new Base();

$ans = get_object_vars($b1);
echo "\noutside the Base class\n";
var_dump($ans);
$b1->show();
