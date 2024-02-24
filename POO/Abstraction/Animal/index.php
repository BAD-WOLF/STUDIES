<?php

require_once __DIR__ . "/Models/Dog.php";
require_once __DIR__ . "/Models/Cat.php";

// Example of using the classes
$dog = new Dog('Rex', 3, 'Cachorro');
echo $dog->displayInfo();
echo 'Ele faz: ' . $dog->makeSound();

$cat = new Cat('Garfield', 5, 'Gato');
echo $cat->displayInfo();
echo "Ele faz: " . $cat->makeSound();

