<?php

require_once 'Person.php';

class Student extends Person
{
    protected static $defaultSchool = 'XYZ School';
    protected $school;

    public function __construct($name = null, $age = null, $school = null)
    {
        parent::__construct($name, $age);
        $this->school = $school ?? self::$defaultSchool;
    }

    public function introduce(): string
    {
        return "Olá, meu nome é {$this->name}, tenho {$this->age} anos e estudo na escola {$this->school}.";
    }

    public function getSchool(): string
    {
        return $this->school;
    }
}
