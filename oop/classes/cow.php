<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 2018-12-18
 * Time: 17:48
 */

class cow extends Animal
{

    private $owner;

    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }

        public function set_owner($owner)
        {
            $this->owner = $owner;
        }

        public function get_owner()
        {
            return $this->owner;
        }

}
