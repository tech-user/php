<?php
class Image {

    public function Image(){
        echo "this is an object <br><br>";
    }

}

$image = new Image(); //this will print

//another way to create function



class Images {

    function __construct() {

        echo "This is construct function" . "<br>" . "<b>NOTE:</b> A class constructor is always public.";
    }
         
}

$images = new Images(); //this is will print

