<?php

class Triangle
{
     private $height;
     private $base;
     var $area;

     function getData()
     {
         $this->height = (int)readline("Enter the height of the triangle : ");
         $this->base = (int)readline("Enter the base of the triangle : ");
     }

     function area()
     {
         $this->area = 1/2 * ($this->height * $this->base);
         echo "The area of Triangle is = $this->area"; 
     }
}

$t1 = new Triangle();
$t1->getData();
$t1->area();
