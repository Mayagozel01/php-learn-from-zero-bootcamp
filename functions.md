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
    // «Чтобы функция что-то помнила, нужны static переменные»
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
1️⃣ Что делает PHP в реальности

PHP использует CALL STACK (стек вызовов)
➡️ LIFO: последний вошёл — первый вышел

Каждый вызов функции:

кладётся в стек

ждёт, пока вложенный вызов вернёт значение

2️⃣ ПОШАГОВО: что лежит в стеке
🔽 Шаг 1 — вызываем factorial(5)

Стек:

factorial(5)   ← ждёт результат


Код:

return 5 * factorial(4);

🔽 Шаг 2 — вызываем factorial(4)

Стек:

factorial(5)
factorial(4)   ← ждёт результат


Код:

return 4 * factorial(3);

🔽 Шаг 3 — вызываем factorial(3)

Стек:

factorial(5)
factorial(4)
factorial(3)   ← ждёт результат

🔽 Шаг 4 — вызываем factorial(2)

Стек:

factorial(5)
factorial(4)
factorial(3)
factorial(2)   ← ждёт результат

🔽 Шаг 5 — вызываем factorial(1)

Стек:

factorial(5)
factorial(4)
factorial(3)
factorial(2)
factorial(1)   ← ВЕРХ СТЕКА

3️⃣ КЛЮЧЕВОЙ МОМЕНТ — условие выхода
if ($n <= 1) {
    return 1;
}


factorial(1):

НЕ вызывает себя

возвращает 1

удаляется из стека

4️⃣ Стек начинает СВОРАЧИВАТЬСЯ ⬆️
🔼 Возврат в factorial(2)
return 2 * 1;


Стек:

factorial(5)
factorial(4)
factorial(3)
factorial(2) ← возвращает 2


factorial(2) завершён → удаляется

🔼 Возврат в factorial(3)
return 3 * 2;


Стек:

factorial(5)
factorial(4)
factorial(3) ← возвращает 6

🔼 Возврат в factorial(4)
return 4 * 6;


Стек:

factorial(5)
factorial(4) ← возвращает 24

🔼 Возврат в factorial(5)
return 5 * 24;


Стек:

factorial(5) ← возвращает 120

5️⃣ Только ТЕПЕРЬ выполняется echo
echo 120;


📌 До этого момента echo вообще ничего не выводит
Он ждал, пока стек полностью схлопнется.

6️⃣ Псевдокод «под капотом»

Можно представить, что PHP делает что-то вроде:

call factorial(5)
  wait for factorial(4)
    wait for factorial(3)
      wait for factorial(2)
        wait for factorial(1)
          return 1
        return 2
      return 6
    return 24
  return 120
print 120

7️⃣ Почему без use (&$factorial) это невозможно

Анонимная функция:

не знает своего имени

переменная $factorial не видна внутри неё

use (&$factorial)


👉 передаёт ссылку на саму функцию внутрь себя
👉 делает самовызов возможным

8️⃣ Ментальная модель (запомни!)

💡 Рекурсия = два этапа

Погружение (вызовы идут вниз)

Разворачивание (результаты идут вверх)

Если ты не видишь условие выхода — рекурсия опасна
Если видишь стек — рекурсия становится логичной

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
8️⃣ Очень короткое правило 🧠

🔹 static — когда функция должна помнить что-то о себе

🔹 closure — когда функция помнит что-то извне

9️⃣ Ментальный якорь

static → память функции

use → память окружения

рекурсия → стек вызовов

замыкание → функция + данные