<?php

class Rectangle {

   //Declare Properties

   public $length = 0;
   public $width = 0;


   // Method to get parameter

   public function getPerimeter(){
      return(2 * ($this->length + $this->width));
   }

   // Method to get the area

   public function getArea(){
      return ($this->length * $this->width);
   }


}




?>
