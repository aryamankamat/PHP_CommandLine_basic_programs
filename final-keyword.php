<?php
// class Base
// {


//     #1st use of "final" keyword.
//     #'final' keyword helps to avoid method overriding.
//     final function show()
//     {
//         echo "Hello from Base ka show function\n";
//     }

//     # Normal function leads to method overriding!!!!
//     //  function show()
//     //  {
//     //      echo "Hello from Base ka show function\n";
//     //  }
// }

// class Derived extends Base
// {
//     function show()
//     {
//         echo "Hello from Derived ka show function\n";
//     }
// }

// $d1 = new Derived();
// $d1->show();


#2nd use of "final" keyword.
// final class Base
// {
// }
// class Derived extends Base
// {
// }

// $d1 = new Derived();




#3rd use of "final" keyword.

// class Base
// {
//     const num = 55;
//     #final const num = 55;  #ERROR
// }
// class Derived extends Base
// {
//     const num = 100;
// }
// echo "Value of num = " . Derived::num . "\n";
// echo "Value of num = " . Base::num . "\n";
