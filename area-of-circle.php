<?php

class Circle
{
    var $radius;


    function getData()
    {
        $this->radius = (int)readline("Enter the radius of a circle : ");
    }

    function Circumference()
    {
        $circum = 2 * 3.14 * $this->radius;
        echo "\n The circumference of a circle is = $circum" . "\n";
    }

    function area()
    {
        $area = 3.14 * ($this->radius * $this->radius);
        echo "\n The Area of a circle is = $area" . "\n";
    }
}

$c1 = new Circle();

$c1->getData();
echo "\n";

while (1) {
    echo "\nSelect the MENU as per the choice : " . "\n";
    echo "1. Calculate Circumference of a circle \n";
    echo "2. Calculate Area of a circle \n";
    echo "3 . EXIT \n";

    $choice = (int)readline("Enter your choice : ");

    switch ($choice) {
        case 1:
            $c1->Circumference();
            break;

        case 2:
            $c1->area();
            break;
        case 3:
            die("\nProgram is terminated\n");
            break;
        default:
            echo "\nPlease select a valid choice!\n";
    }
}
