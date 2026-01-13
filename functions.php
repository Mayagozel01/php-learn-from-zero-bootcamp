<?php

// Functions in PHP

function greet($name)
{

    return "Hello, " . $name . "!";

}

echo greet("World");

// Anonymous function

$square = function ($x) {

    return $x * $x;

};

echo $square(5);

?>