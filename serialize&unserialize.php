<?php

class Demo
{
    private $name;

    function __construct()
    {
        $this->name = readline("Enter your name : ");
    }
}

$d1 = new Demo();

$str = serialize($d1);
var_dump($str);
echo "\n";
$str1 = unserialize($str);
var_dump($str1);
// $fd=fopen("obj.txt","w");
// fwrite($fd, $str);
// fclose($fd);
