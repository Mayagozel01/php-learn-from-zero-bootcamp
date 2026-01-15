# Параметр — это переменная, объявленная в списке параметров функции. Аргумент — это конкретное значение, которое передается в этот параметр при вызове функции.

```php
// Functions in PHP

function greet($name)
{

    return "Hello, " . $name . "!";

}

echo greet("World");
```

## Anonymous function

```php
$square = function ($x) {

    return $x * $x;

};

echo $square(5);
```

You can say:

declare(strict_types=1) prevents scalar type coercion in function arguments and return values, but it does not eliminate type juggling in PHP as a whole.

Or shorter:

strict_types enforces strict typing only at function boundaries, not for assignments, comparisons, or internal functions.

## static, global variables

```php
function counter()
{
    static $count = 0; // Static variable to retain its value between function calls
    $count++;
    return $count;
}
echo counter(); // Outputs: 1
echo counter(); // Outputs: 2
echo counter(); // Outputs: 3

$globalVar = 10;
function addToGlobal($value)
{
    global $globalVar; // Accessing the global variable
    $globalVar += $value;
}
addToGlobal(5);
echo $globalVar; // Outputs: 15
```

## Anonymous functions

```php
$factorial = function ($n) use (&$factorial) {
    if ($n <= 1) {
        return 1;
    }
    return $n * $factorial($n - 1);
};
echo $factorial(5); // Outputs: 120

$multiplier = 3;
$multiply = function ($value) use ($multiplier) {
    return $value * $multiplier;
};
echo $multiply(10); // Outputs: 30
```

## Arrow Functions (callback)

```php
$numbers = [1, 2, 3, 4, 5];
$squared = array_map(fn($n) => $n * $n, $numbers);
print_r($squared); // Outputs: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
$multiplier = 2;
$multiply = fn($value) => $value * $multiplier;
echo $multiply(10); // Outputs: 20
$multiply = fn($a, $b) => $a * $b;
function sum($a, $b, $multiply)
{
    return $multiply($a, $b);
}
echo sum(5, 10, $multiply); // Outputs: 50