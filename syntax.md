# Welcome to the Syntax Page

This page demonstrates PHP syntax.

```php
var_dump(29);
var_dump("Hello, PHP!");
```

End of syntax demonstration.

```php
// This is a single-line comment
/* This is a
   multi-line comment */
# This is another single-line comment
#comparising operators
// ==, ===, !=, <>, !==, >, <, >=, <=
var_dump(5 == '5'); // true
var_dump(5 == 5); // true
var_dump(5 === '5'); // false
//logical operators
// and, or, xor, &&, ||, ||, !
//super global variables

echo "Ваш браузер: " . $_SERVER['HTTP_USER_AGENT'];
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    echo "You are using Google Chrome.";
} else {
    echo "You are not using Google Chrome.";
}
```

## When to Use Switch

- Comparing the same variable/expression against multiple values
- When you have many conditions to check
- When code readability is improved over long if-else chains

```php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
switch (true) {
    case str_contains($userAgent, 'Chrome'):
        echo "Switch: You are using Google Chrome.";
        break;
    case str_contains($userAgent, 'Firefox'):
        echo "Switch: You are using Mozilla Firefox.";
        break;
    case str_contains($userAgent, 'Opera'):
        echo "Switch: You are using Opera.";
        break;

    default:
        echo "Switch: Browser not recognized.";
}
```

[Справочник](https://www.php.net/manual/ru/langref.php)

## String

```php
$str = 'Hello, World! ';
$str2 = "$str Hello, PHP!";
$str3 = "{$str} Hello, PHP!";
echo $str;
echo $str2;
echo $str3;
```

## Arrays

```php
$array = ['salad', 'burger', 'pizza'];
var_dump($array);
echo $array[1];
$array[3] = 'Tomato soup';
var_dump($array);
// associative array
$arrayAssoc = [
    "john" => 'salad',
    "doe" => 'burger',
    "smith" => 'pizza'
];
//match expression
$paymentStatus = '2';
var_dump($message = match ($paymentStatus) {
    1 => 'status',
    2 => 'denied',
    '2' => 'pending',
    default => 'unknown status',
});