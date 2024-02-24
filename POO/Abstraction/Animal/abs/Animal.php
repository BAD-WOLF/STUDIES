<?php

// Definition of the Abstract Class Animal
abstract class Animal
{

    // Constructor method
    public function __construct(
        // Properties
        protected $name,
        protected $age,
        protected $type
    )
    {
    }

    // Abstract method to emit a sound
    abstract public function makeSound();

    // Method to display animal information
    public function displayInfo(): string
    {
        return "Nome: {$this->name}, Idade: {$this->age}, Tipo: {$this->type}" . PHP_EOL;
    }
}
