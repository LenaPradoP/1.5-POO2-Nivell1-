<?php
require("ClassAnimal.php");
require("ClassCat.php");
require("ClassDog.php");

echo "<h1><u>Ejercicio 1.5 - POO2 </h1></u>";

$cat1 = new Cat('Olivia');
echo "El gato suena: " . $cat1->makeSound() . "<br>";
$dog1 = new Dog('Polka');
echo 'El perro suena: ' . $dog1->makeSound();

?>