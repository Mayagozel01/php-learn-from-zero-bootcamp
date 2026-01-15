# Difference between Define and Const

Define is a function that can be used to define constants at runtime, while const is a language construct that defines constants at compile time.

For example:

```php
const PI = 3.14;

define('E', 2.71);
```

```php
if (!defined('FOO')) {
    define('FOO', 'hello world');
}

echo FOO;
```

# Unset- for deleting variables values

For example:

```php
$var = "Hello, World!";
echo $var; // Outputs: Hello, World!
unset($var);
echo $var; // Generates a notice: Undefined variable: var
```

```php
$names = ["Alice", "Bob", "Charlie"];
print_r($names);
unset($names[1]); // Удаляем элемент с индексом 1 (Bob)
```

```php
echo __LINE__ . '   --it is number of line--     ' . __FILE__;
```

```php
echo __DIR__ . '   --it is directory--     ';
```

```php
print_r($names); // Выводим массив после удаления
```

After deleting element array indexes is missed

To reindex the array use array_values() function

```php
$names = array_values($names);  // Reindex the array
print_r($names);