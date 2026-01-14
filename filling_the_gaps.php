<h1>Difference between Define and Const</h1>
<p>Define is a function that can be used to define constants at runtime, while const is a language construct that
    defines constants at compile time.</p>
<p>for example:
    const PI = 3.14;
    <br>
    <br>
    define('E', 2.71);
</p>


<?php
if (!defined('FOO')) {
    define('FOO', 'hello world');
}

echo FOO;


echo "<h1>Unset- for deleting variables values</h1>";
echo "<p>for example:
    \$var = \"Hello, World!\";
    <br>
    echo \$var; // Outputs: Hello, World!
    <br>
    unset(\$var);
    <br>
    echo \$var; // Generates a notice: Undefined variable: var  </p>";
$names = ["Alice", "Bob", "Charlie"];
print_r($names);
unset($names[1]); // Удаляем элемент с индексом 1 (Bob
echo "<br>";
echo __LINE__ . '   --it is number of line--     ' . __FILE__;
echo "<br>";
echo "<h1>" . __DIR__ . '   --it is directory--     </h1>';
echo "<br>";
print_r($names); // Выводим массив после удаления
echo "<br>";
echo "<p> after deleting element array indexes is missed</p>
<p> to reindex the array use array_values() function</p>";
$names = array_values($names);  // Reindex the array
print_r($names);
