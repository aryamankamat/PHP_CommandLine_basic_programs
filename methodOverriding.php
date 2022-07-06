<?php

class Base
{
    function show()
    {
        echo "\nHello from Base ka show() function\n";
    }
}

class Derived extends Base
{
    function show()
    {
        echo "\n Hello from Derived ka show function!!!\n";
        #Base::show(); //to resolve the confusion and call the base ka show() function.
        parent::show(); //to resolve the confusion and call the base ka show() function.
    }
}

$d1 = new Derived();

$d1->show();
