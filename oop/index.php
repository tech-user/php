<?php


require 'classes/Animal.php';
require 'classes/cow.php';
require 'classes/lion.php';

$cow = new Cow('Herbivore', 'Grass');
$lion = new Lion('Carnival', 'Meat');

echo '<b>Cow Object </b></br>';
echo 'The Cow Belongs to the ' . $cow->get_family() . 'family and eats' . $cow->get_food() . '<br><br>';
echo '<b>Lion Object </b></br>';
echo 'The lion belongs to the' .$lion->get_family() . 'family and eats' . $lion->get_food();



