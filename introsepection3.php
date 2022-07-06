<?php

class Demo
{
    function show()
    {
        echo "Hello from show function! \n";
    }
}

$d1 = new Demo();

$ans = method_exists($d1, "show");

if ($ans) {
    echo "THis function is avaliable to the object ! \n";
    $d1->show();
} else {
    echo "This function is not avaliable to the object ! \n";
}
