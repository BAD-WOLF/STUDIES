<?php

require_once __DIR__ . '/Models/Student.php';

// Creating a student object
$student = new Student('Maria', 25, 'ABC School');

// Displaying the student's introduction
echo $student->introduce();
