# Loops in PHP

## For loop

```php
for ($i = 0; $i < 5; $i++) {

    echo $i . "<br>";

}
```

## While loop

```php
$j = 0;

while ($j < 5) {

    echo $j . "<br>";

    $j++;

}
```

## Foreach loop

```php
$colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {

    echo $color . "<br>";

}