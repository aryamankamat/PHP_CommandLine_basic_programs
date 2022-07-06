<?php

$name = readline("\n Enter your name : ");
$age = (int)readline("\n Enter you age : ");

// echo "\n Welcome $name";
// echo "\n Welcome $age";

# verifiying the type of varibale.

echo "\n Type of name = " . gettype($name); 
echo "\n Type of age = " . gettype($age);
# default values are in string format , to avoid the loss of intigrity of the values we do typecasting.
?>