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