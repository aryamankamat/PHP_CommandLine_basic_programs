<?php

function show()
{
    echo "Hello from show function!!!";
}

$ans = function_exists("show");

if ($ans == TRUE) {
    echo "This function exists and giving a call to it !!!!! \n";
    show();
} else {
    echo "This function does not exists!!!";
}
