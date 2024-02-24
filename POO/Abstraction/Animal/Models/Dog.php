<?php
require_once __DIR__ . '/../abs/Animal.php';

// Definition of the Dog class, which inherits from the Animal class
class Dog extends Animal
{
    // Implementation of the abstract makeSound method
    public function makeSound(): string
    {
        return 'Au Au!' . PHP_EOL;
    }
}

?>
