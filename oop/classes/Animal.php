<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 2018-12-18
 * Time: 14:44
 */


class Animal
{
    private $family;
    private $food;

    public function __construct($family, $food)
    {
        $this->family = $family;
        $this->food = $food;
    }

    public function get_family()
    {
        return $this->family;
    }

    public function set_family($family)
    {
        $this->family = $family;
    }

    public function get_food()
    {
        return $this->food;
    }

    public function set_food($food)
    {
        $this->food = $food;
    }


}//Class animal
