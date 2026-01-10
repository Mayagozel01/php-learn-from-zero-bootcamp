<?php
echo '<h1>Welcome to the Syntax Page</h1>';
echo "<p>This page demonstrates PHP syntax.</p>";
var_dump(29);
var_dump("Hello, PHP!");
echo "<p>End of syntax demonstration.</p>";
// This is a single-line comment
/* This is a
   multi-line comment */
# This is another single-line comment
#comparising operators
// ==, ===, !=, <>, !==, >, <, >=, <=
var_dump(5 == '5'); // true
echo "<br>";
var_dump(5 == 5); // true
echo "<br>";
var_dump(5 === '5'); // false
echo "<br>";
//logical operators
// and, or, xor, &&, ||, ||, !
//super global variables    

echo "<br>";
echo "<br>";
echo "Ваш браузер: " . $_SERVER['HTTP_USER_AGENT'];
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    echo "<p>You are using Google Chrome.</p>";
} else {
    echo "<p>You are not using Google Chrome.</p>";
}
?>
<h2>When to Use Switch:</h2>
<ul>
    <li>Comparing the same variable/expression against multiple values</li>
    <li>When you have many conditions to check</li>
    <li>When code readability is improved over long if-else chains</li>
</ul>

<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
switch (true) {
    case str_contains($userAgent, 'Chrome'):
        echo "<p>Switch: You are using Google Chrome.</p>";
        break;
    case str_contains($userAgent, 'Firefox'):
        echo "<p>Switch: You are using Mozilla Firefox.</p>";
        break;
    case str_contains($userAgent, 'Opera'):
        echo "<p>Switch: You are using Opera.</p>";
        break;

    default:
        echo "<p>Switch: Browser not recognized.</p>";
}

?>

<a href="https://www.php.net/manual/ru/langref.php">Справочник</a>