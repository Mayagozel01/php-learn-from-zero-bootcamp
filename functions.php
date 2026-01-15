<h1>Параметр — это переменная, объявленная в списке параметров функции.
    Аргумент — это конкретное значение, которое передается в этот параметр при вызове функции.</h1>
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
<p>You can say:

    declare(strict_types=1) prevents scalar type coercion in function arguments and return values, but it does not
    eliminate type juggling in PHP as a whole.

    Or shorter:

    strict_types enforces strict typing only at function boundaries, not for assignments, comparisons, or internal
    functions.</p>
<h2>static, global variables</h2>
<?php
function counter()
{
    static $count = 0; // Static variable to retain its value between function calls
    $count++;
    return $count;
}
echo "<br>" . counter(); // Outputs: 1
echo "<br>" . counter(); // Outputs: 2   
echo "<br>" . counter(); // Outputs: 3

$globalVar = 10;
function addToGlobal($value)
{
    global $globalVar; // Accessing the global variable
    $globalVar += $value;
}
addToGlobal(5);
echo "<br>" . $globalVar; // Outputs: 15
?>
<h2>Anonymous functions</h2>
<?php
$factorial = function ($n) use (&$factorial) {
    if ($n <= 1) {
        return 1;
    }
    return $n * $factorial($n - 1);
};
echo "<br>" . $factorial(5); // Outputs: 120

$multiplier = 3;
$multiply = function ($value) use ($multiplier) {
    return $value * $multiplier;
};
echo "<br>" . $multiply(10); // Outputs: 30

?>
<h2>Arrow Functions (callback)</h2>
<?php
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(fn($n) => $n * $n, $numbers);
print_r($squared); // Outputs: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
$multiplier = 2;
$multiply = fn($value) => $value * $multiplier;
echo "<br>" . $multiply(10); // Outputs: 20
$multiply = fn($a, $b) => $a * $b;
function sum($a, $b, $multiply)
{
    return $multiply($a, $b);
}
echo "<br>" . sum(5, 10, $multiply); // Outputs: 50
?>