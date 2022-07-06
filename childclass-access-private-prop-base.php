<?php

class Base
{
    private $x = 10;

    function show()
    {
        return $this->x;
    }
}

class Derived extends Base
{

    function printx()
    {
        echo "The value of x is = " . $this->show();
    }

}

$d1 = new Derived();
$d1->printx();
