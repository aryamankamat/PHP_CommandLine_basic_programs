<?php
#interface 1
interface Demo
{
    function show();
}
#interface 2
interface Demo2 extends Demo, Demo3
{ #  A interface can extend multiple interface at a time.
    function display();
}
#interface 3
interface Demo3
{
    function flash();
}

class Base
{
    function visible()
    {
        echo "Hello from Visible function\n";
    }
}

# a class can implement multiple interface and can only extend one class at a time.
class child extends Base implements Demo2
{
    function show()
    {
        echo "Hello from show function\n";
    }

    function display()
    {
        echo "Hello from display function\n";
    }

    function flash()
    {
        echo "Hello from flash function\n";
    }
}

$c1 = new child();
$c1->show();
$c1->display();
$c1->visible();  // base class method.
$c1->flash();
