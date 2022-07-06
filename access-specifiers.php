<?php

class Demo
{
    public $a = 10;
    private $b = 20;
    protected $c = 30;
}

$d1 = new Demo();

#echo "The value of a = $d1->a";
#echo "The value of b = $d1->b";  # ERROR
#echo "The value of c = $d1->c";  # ERROR

$ans = get_object_vars($d1);
var_dump($ans);
