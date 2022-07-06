<?php

$age = (int)readline("Enter your age : ");


/*  If-else */

// if ($age > 18) {
//     echo "Indivisual is eligible to vote !";
// } else {
//     echo "Indivisual is not eligible to vote!";
// }




/*  if - elseif  */

if ($age > 20) {
    echo "eligible to drink alchole!";
} elseif ($age > 18) {
    echo "eligible to drink alchole and water";
} else {
    echo "drink only water.";
}
