<?php

class Demo
{
    public $a = 10;
    private $b = 20;
    protected $c = 30;

    private function showData()
    {
        echo "a = $this->a" . "\n";
        echo "b = $this->b" . "\n";
        echo "c = $this->c" . "\n";
    }

    function display()
    {
        echo "Inside the display function!!! \n";
        $this->showData();
    }
}

$d1 = new Demo();
$d1->display();
