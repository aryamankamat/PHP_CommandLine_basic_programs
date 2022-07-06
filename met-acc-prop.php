<?php

class Demo
{
    public $a = 10;
    private $b = 20;
    protected $c = 30;

    function showData()  # methods of the same class can access any type of data.
    {
        echo "a = $this->a" . "\n";
        echo "b = $this->b" . "\n";
        echo "c = $this->c" . "\n";
    }
}

$d1 = new Demo();
$d1->showData();
