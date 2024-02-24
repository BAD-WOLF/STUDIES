<?php
require_once __DIR__ . '/../abs/Animal.php';

// Definition of the Cat class, which inherits from the Animal class
class Cat extends Animal
{
    // Implementation of the abstract makeSound method
    public function makeSound(): string
    {
        return 'Miau!' . PHP_EOL;
    }
}
