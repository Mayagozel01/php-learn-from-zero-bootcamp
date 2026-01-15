<?php
include "nav.php";
?>


<?php

// Classes in PHP

class Person
{

    public $name;

    public $age;

    public function __construct($name, $age)
    {

        $this->name = $name;

        $this->age = $age;

    }

    public function greet()
    {

        return "Hello, my name is " . $this->name;

    }

}

$person = new Person("John", 30);

echo $person->greet();
include "home.php";
?>