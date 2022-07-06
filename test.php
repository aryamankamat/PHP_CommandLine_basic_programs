<?php
#How to create object of a class and check the unique id assign to each class.
// class Demo
// {
//     //
// }

// $d1 = new Demo();
// var_dump($d1);
// $d2 = new Demo();
// var_dump($d2);


#Demonstration of class level properties and Instant level properties
// class Student
// {
//     var $roll; // instant level propertie
//     var $name;  // instant level propertie
//     static $college = "ICCS";  // class level propertie
// }

// $s1 =  new Student();
// var_dump($s1);


#Assigning values to the object
#method 1 :- setting the values to properties using objects outside the class.

// class Student
// {
//     var $roll;
//     var $name;
// }
// $s1 = new Student();
// echo "\n Before Assigning values!!!\n";
// var_dump($s1);
// $s1->roll = 15;
// $s1->name = "Aryaman";
// echo "\n After Assigning values!!!\n";
// var_dump($s1);

#method 2:- adding new properties and deleting existing properties during the run time from outside the class.
// class Student
// {
//     var $roll;
//     var $name;
// }
// $s1 = new Student();
// echo "\n Before Assigning values!!!\n";
// var_dump($s1);
// $s1->roll = 15;
// $s1->name = "Aryaman";
// $s1->per = 99.9;
// echo "\n After Assigning values!!!\n";
// var_dump($s1);
// unset($s1->name);
// echo "\n After deleting property!!!\n";
// var_dump($s1);

#method 3:- setting values to properties using the Pseudo object $this.
// class Student
// {
//     var $roll;
//     var $name;

//     function setData()
//     {
//         $this->roll = 15;
//         $this->name = "Aryaman";
//     }
//     function putData()
//     {
//         echo "Roll  Name \n";
//         echo "$this->roll  $this->name ";
//     }
// }

// $s1 = new Student();
// $s1->setData();
// $s1->putData();

#Availabilit of static and non-static methods to the object.
// class Student
// {
//     function setData()
//     {
//         echo "\n Hello from setData()!!!";
//     }
//     static function putData()
//     {
//         echo "\n Hello from putData()!!!";
//     }
// }
// $s1 = new Student();
// $s1->setData();
// #$s1->putData(); #calling a static method using object is not recommended.
// Student::putData(); #recommended way to call static function.


#Generation of Pseudo object when non-static method is called.
// class Student
// {

//     function setData()
//     {
//         echo "\n Id of Pseudo object is = " . spl_object_id($this);
//     }
// }
// $s1 = new Student();
// $s1->setData();
// echo "\n Id of the object outside class is = " . spl_object_id($s1);


#Accepting input from user.
// class Student
// {
//     var $roll, $name;

//     function setData()
//     {
//         $this->roll = (int)readline("Enter the roll number : ");
//         $this->name = readline("Enter the name of the Student : ");
//     }
//     function putData()
//     {
//         echo "$this->roll  $this->name";
//     }
// }
// $s1 = new Student();
// $s2 = new Student();

// $s1->setData();
// echo "\n";
// $s2->setData();
// echo "\n The student details are displayed below....\n";
// echo "Roll  Name \n";
// $s1->putData();
// echo "\n";
// $s2->putData();


#To access static properties inside a non-static method.
// class Student
// {
//     var $roll, $name;
//     static $college = "ICCS";

//     function setData()
//     {
//         $this->roll = 15;
//         $this->name = "Aryaman";
//     }
//     function putData()
//     {
//         // echo "$this->roll  $this->name" . "  " . Student::$college; #method1:- using class name.
//         echo "$this->roll  $this->name" . "  " . self::$college; #method2:- using self keyword.
//     }
// }
// $s1 = new Student();

// $s1->setData();
// echo "\n The student details are displayed below....\n";
// echo "Roll   Name   College\n";
// $s1->putData();



#Declare any property as constant throughout the program.
// class Student
// {
//     var $roll, $name;

//     const FEES = 50000;
//     #define("CONTI","ASIA"); #using define function inside the class will through an error.
//     function setData()
//     {
//         $this->roll = (int)readline("Enter the roll number : ");
//         $this->name = readline("Enter the name of the Student : ");
//     }
//     function putData()
//     {
//         echo "$this->roll  $this->name" . "  " . STATE . "  " . CITY . "  " . self::FEES;
//     }
// }

// const STATE = "MH";
// define("CITY", "Pune");

// $s1 = new Student();
// $s1->setData();
// echo "Roll   Name   State   City   Fees   Conti\n";
// $s1->putData();


#Area of circle
// class Circle
// {
//     var $radius;

//     function getData()
//     {
//         $this->radius = (int)readline("Enter the radius of a circle : ");
//     }

//     function Circumference()
//     {
//         $circum = 2 * 3.14 * $this->radius;
//         echo "\n Circumference of a circle is : $circum";
//     }

//     function Area()
//     {
//         $area = 3.14 * ($this->radius * $this->radius);
//         echo "\n Area of a circle is : $area";
//     }
// }

// $c1 = new Circle();
// $c1->getData();
// $c1->Circumference();
// $c1->Area();



#Introspection of class and its Object.
#1)Examining the class
// class Demo
// {
// }
// $ans = class_exists("Demo");
// if ($ans == True) {
//     echo "\n This class exists";
// } else {
//     echo "\n This class do not exists.";
// }

#2)Examining the object
// class Demo
// {
// }
// $d1 =  new Demo();
// $ans = is_object($d1);
// if ($ans == true) {
//     echo "\n This is an object.";
// } else {
//     echo "\n This is not an Object.";
// }

#3)Examining the object, whether a perticular method belongs to object or not
// class Demo
// {
//     function show()
//     {
//         echo " ";
//     }
// }
// $d1 =  new Demo();
// $ans = method_exists($d1, "show");
// if ($ans == True) {
//     echo "\n This method belongs to the object";
// } else {
//     echo "\n This method does not belongs to the object";
// }

#4)Examining the object, whether properties of a class are available with to its object.
// class Demo
// {
//     public $a = 10;
//     private $b = 20;
//     protected $c = 30;
// }
// $d1 =  new Demo();
// $ans = get_object_vars($d1);
// var_dump($ans);


#5)Examining the whether class exists or not
// class Demo
// {
// }
// $ans = get_declared_classes();
// var_dump($ans);

#6)Examining methods exits in a class or not.
// class Demo
// {
//     function show()
//     {
//     }
//     function display()
//     {
//     }
// }
// $d1 = new Demo();
// $ans = get_class_methods("Demo");
// #echo count($ans);
// var_dump($ans);

#7)Examinig properties exists in a class or not.
// class Demo
// {
//     var $a, $b, $c;
// }
// $d1 = new Demo();
// $ans = get_class_vars("Demo");
// echo count($ans);
// #var_dump($ans);


#8)Examining a object belongs a particular class or not
// class Demo
// {
// }
// $d1 = new Demo();
// if ($d1 instanceof Demo) {
//     echo "yes, it is an instance of this class";
// } else {
//     echo "Sorry, this is not instance of this class";
// }


#9)Examining object to know to which class it belongs.
// class Demo
// {
// }
// $d1 = new Demo();
// $ans = get_class($d1);
// var_dump($ans);


#Access Specifiers(Visiblity of properties)
// class Demo
// {
//     public $a = 10;
//     private $b = 20;
//     protected $c = 30;
// }
// $d1 = new Demo();
// $ans = get_object_vars($d1);
// var_dump($ans);

#Methods of the same class can access any type of properties(public,private,protected)
// class Demo
// {
//     public $a = 10;
//     private $b = 20;
//     protected $c = 30;

//     function show()
//     {
//         echo "\n value of a = $this->a";
//         echo "\n Value of b = $this->b";
//         echo "\n Value of c = $this->c";
//     }
// }
// $d1 = new Demo();
// $d1->show();

#Call from one method to another Method
// class Demo
// {
//     public $a = 10;
//     private $b = 20;
//     protected $c = 30;

//     private function show()
//     {
//         echo "\n value of a = $this->a";
//         echo "\n Value of b = $this->b";
//         echo "\n Value of c = $this->c";
//     }

//     function display()
//     {
//         echo "\n Inside display function...\n";
//         $this->show();
//     }
// }
// $d1 = new Demo();
// $d1->display();


#write a PHP script using class Triangle(heigh,base) which accepts the value of its attributes and calculate the are of triangle.
// class Triangle
// {
//     private $height;
//     private $base;
//     var $area;

//     function getData()
//     {
//         $this->height = (int)readline("Enter the height of the triangle : ");
//         $this->base = (int)readline("Enter the base of the triangle : ");
//     }

//     function area()
//     {
//         $this->area = 1 / 2 * ($this->height * $this->base);
//         echo "The area of Triangle is = $this->area";
//     }
// }

// $t1 = new Triangle();
// $t1->getData();
// $t1->area();



#Constructor
// class Demo
// {
//     function __construct()
//     {
//         echo "\n Hello from constructor...";
//     }
// }
// $d1 = new Demo();


#Create a class Student and assign values to the attributes using default constructor.
// class Student
// {
//     var $roll, $name;

//     function __construct() #default constructor
//     {
//         $this->roll = (int)readline("Enter the student roll nunmber : ");
//         $this->name = readline("Enter the student name :  ");
//     }

//     function display()
//     {
//         echo "\n The student roll number is = $this->roll";
//         echo "\n The student name is = $this->name";
//     }
// }

// $s1 = new Student();
// $s1->display();



#Create a class Student and assign values to the attributes using parameterized constructor.
// class Student
// {
//     var $roll, $name;

//     function __construct($r, $n) #parameterizes constructor
//     {
//         $this->roll = $r;
//         $this->name = $n;
//     }

//     function display()
//     {
//         echo "\n The student roll number is = $this->roll";
//         echo "\n The student name is = $this->name";
//     }
// }

// $s1 = new Student(15, "Aryaman");
// $s1->display();



#Destructor
// class Demo
// {
//     function __construct()
//     {
//         echo "\n Constructing the object with ID " . spl_object_id($this);
//     }
//     function __destruct()
//     {
//         echo "\n Destroying the object with ID " . spl_object_id($this);
//     }
// }
// $d1 = new Demo();
// $d2 = new Demo();



#Destructor is called when object goes out of scope.
// class Demo
// {
//     function __construct()
//     {
//         echo "\n Constructing the object with ID " . spl_object_id($this);
//     }
//     function __destruct()
//     {
//         echo "\n Destroying the object with ID " . spl_object_id($this);
//     }
// }

// function main()
// {
//     printf("\n Inside main function.\n");
//     $d3 = new Demo();
// }

// $d1 = new Demo();
// $d2 = new Demo();

// main();
// $d4 = new Demo();



#Single level Inheritance
// class Base
// {
//     var $x = 10;
//     public $y = 20;

//     function show()
//     {
//         printf("\nHello from the Base ka show function\n");
//     }
// }

// class Derived extends Base
// {
//     public $z = 30;

//     function display()
//     {
//         echo "\n Hello from the Derived ka display function!!! \n";
//     }
// }

// $d1 = new Derived();
// $ans = get_object_vars($d1);
// echo "\n Properties availabe with the object d1.\n";
// var_dump($ans);

// $ans1 = get_class_methods("Derived");
// echo "\n Methods availabe with the object d1.\n";
// var_dump($ans1);



#Methods of the child class can access protected data of the base class
// class Base
// {
//     public $x = 10;
//     private $y = 20;
//     protected $z = 30;
//     var $abc = 99;
// }

// class Derived extends Base
// {

//     function display()
//     {
//         echo "\n Hello from the Derived ka display function!!! \n";
//         $ans = get_object_vars($this);
//         var_dump($ans);
//     }
// }

// $d1 = new Derived();
// echo "\n Accessible attribute of object \n";
// $ans = get_object_vars($d1);
// var_dump($ans);
// echo "\n\n";
// $d1->display();




#Method Overriding
// class Base
// {
//     function show()
//     {
//         echo "\n Hello from Base ka show function.";
//     }
// }
// class Derived extends Base
// {
//     function show()
//     {
//         echo "\n Hello from Derived ka show function.";
//         #Base::show(); //to resolve the confusion and call the base ka show() function.
//         #parent::show(); //to resolve the confusion and call the base ka show() function.
//     }
// }
// $d1 = new Derived();
// $d1->show();
