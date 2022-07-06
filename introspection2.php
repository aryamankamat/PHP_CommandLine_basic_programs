<?php

class Demo
{

    function show()
    {
        echo "Hello from show function !!! \n";
    }
}

$ans = class_exists("Demo");

if ($ans == TRUE) {
    echo "This class exits ans now creating an object of this class !!!\n";
    $d1 = new Demo();
    $d1->show();
} else {
    echo "This class dose not exists !!!!\n";
}
