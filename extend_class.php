<?php 

// Include class definition

require "rectangle.php";

//Define a new class based on an existing class
class Square extends Rectangle
{
    // Method to test if the rectangle is also a square
    public function isSqure(){
        if ($this->length == $this->width) {
                return true; // Square
        } else {
            return flase; // not a square
        }
    }
}

// Create a new object from squre class

$obj = new Square;

//Set object properties values

$obj->length = 20;
$obj->width = 20;

//Call the object methods
if ($obj->isSqure()) {
        echo "The area of the square is ";
} else {
    echo "The area of the rectangle is ";
};

echo $obj->getArea();



?>