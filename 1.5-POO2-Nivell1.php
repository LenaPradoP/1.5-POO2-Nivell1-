<?php
require("ClassCat.php");
require("ClassDog.php");

echo "Ejercicio 1.5 - POO2" .PHP_EOL;

$cat1 = new Cat('Olivia');
echo "El gato suena: " . $cat1->makeSound() .PHP_EOL;
$dog1 = new Dog('Polka');
echo 'El perro suena: ' . $dog1->makeSound();

?>