<?php

class Person
{
    protected static $defaultName = 'John Doe';
    protected static $defaultAge = 30;

    protected $name;
    protected $age;

    public function __construct($name = null, $age = null)
    {
        $this->name = $name ?? self::$defaultName;
        $this->age = $age ?? self::$defaultAge;
    }

    public function greet(): string
    {
        return "Olá, meu nome é {$this->name} e tenho {$this->age} anos.";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

