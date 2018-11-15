<?php 

// Include class definition
require "rectangle.php";

//Create multiple objects from the Rectangle class
$obj1  = new Rectangle;
$obj2 = new Rectangle;

//Call the methods of both objects
echo $obj1->getArea();
echo $obj2->getArea();


// Set $object1 properties values
$obj1->length = 30;
$obj1->width  = 20;


// Set $obj2 properties values
$obj2->length = 35;
$obj2->width = 50;

//Call the methods of both objects again

echo $obj1->getArea();
echo $obj2->getArea();


?>
