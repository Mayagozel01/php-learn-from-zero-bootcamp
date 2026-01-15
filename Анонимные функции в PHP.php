<?php
include "nav.php";
?>

# Анонимные функции в PHP

## Введение
Анонимные функции — это функции без имени. В этой лекции мы изучим эту концепцию и покажем, как эффективно использовать
их в PHP.

## Базовая анонимная функция

### Традиционная функция
```php
function multiply($num) {
return $num * 2;
}

echo multiply(5);
```

### Преобразование в анонимную функцию
Чтобы создать анонимную функцию:
1. Удалите имя функции
2. Присвойте её переменной
3. Добавьте точку с запятой в конце (анонимные функции являются выражениями)

```php
$multiply = function($num) {
return $num * 2;
};

echo $multiply(5);
```

**Важно:** Используйте знак `$` при вызове функции, хранящейся в переменной.

## Преимущества анонимных функций

### 1. Заменяемые функции
Переменные могут обновляться, что позволяет легко заменять функции:

```php
$multiply = function($num) {
return $num * 2;
};

// Позже заменяем другой логикой
$multiply = function($num) {
return $num * 3;
};
```

### 2. Функции обратного вызова (Callback)

**Что такое Callback?**
Callback — это функция, переданная в другую функцию для вызова позже. Это как дать кому-то свой номер телефона, чтобы он
мог позвонить вам позже.

**Пример:**
```php
function sum($a, $b, $callback) {
return $callback($a + $b);
}

$multiply = function($num) {
return $num * 2;
};

echo sum(5, 10, $multiply); // Выводит: 30
```

**Стандартная практика:** Называйте параметры callback как `$callback` для ясности.

## Ключевое слово `use`

### Доступ к внешним переменным
В отличие от ключевого слова `global`, `use` обеспечивает более безопасный доступ к переменным вне функции:

```php
$multiplier = 2;

$multiply = function($num) use ($multiplier) {
return $num * $multiplier;
};
```

**Ключевое преимущество:** Ключевое слово `use` создаёт **копию** переменной, а не ссылку. Это предотвращает
непреднамеренные побочные эффекты на исходную переменную.

```php
$multiplier = 2;

$multiply = function($num) use ($multiplier) {
$multiplier = 5; // Изменяет только копию
return $num * $multiplier;
};

echo $multiply(10); // 50
echo $multiplier; // Всё ещё 2
```

## Стрелочные функции (PHP 7.4+)

Стрелочные функции предоставляют более короткий синтаксис для анонимных функций.

### Преобразование синтаксиса
**Обычная анонимная функция:**
```php
$multiply = function($num) use ($multiplier) {
return $num * $multiplier;
};
```

**Стрелочная функция:**
```php
$multiply = fn($num) => $num * $multiplier;
```

### Особенности стрелочных функций
- Используйте ключевое слово `fn` вместо `function`
- Используйте `=>` (толстая стрелка) вместо ключевого слова `use`
- Не нужны фигурные скобки и ключевое слово `return`
- Автоматически возвращает результат выражения
- Автоматически имеет доступ к переменным родительской области видимости

### Ограничения стрелочных функций
1. **Должны возвращать значение** - не могут быть void
2. **Только одно выражение** - не могут содержать несколько операторов или фигурные скобки
3. **Одна строка кода** - ограничены выражением после стрелки

## Резюме

Анонимные функции обеспечивают гибкость в PHP, позволяя:
- Хранить функции в переменных
- Динамически заменять функции
- Передавать функции как callback
- Безопасный доступ к переменным с ключевым словом `use`
- Лаконичный синтаксис со стрелочными функциями (PHP 7.4+)

Выбирайте стрелочные функции для простых операций с одним выражением, и обычные анонимные функции, когда вам нужна более
сложная логика или не требуется возвращать значение.

---

# Anonymous Functions in PHP

## Introduction
Anonymous functions are functions without a name. This lecture explores this concept and demonstrates how to use them
effectively in PHP.

## Basic Anonymous Function

### Traditional Function
```php
function multiply($num) {
return $num * 2;
}

echo multiply(5);
```

### Converting to Anonymous Function
To create an anonymous function:
1. Remove the function name
2. Assign it to a variable
3. Add a semicolon at the end (anonymous functions are expressions)

```php
$multiply = function($num) {
return $num * 2;
};

echo $multiply(5);
```

**Important:** Use the `$` sign when invoking the function stored in a variable.

## Advantages of Anonymous Functions

### 1. Swappable Functions
Variables can be updated, allowing easy function replacement:

```php
$multiply = function($num) {
return $num * 2;
};

// Later, swap with different logic
$multiply = function($num) {
return $num * 3;
};
```

### 2. Callback Functions

**What is a Callback?**
A callback is a function passed into another function to be called later - like giving someone your phone number so they
can call you later.

**Example:**
```php
function sum($a, $b, $callback) {
return $callback($a + $b);
}

$multiply = function($num) {
return $num * 2;
};

echo sum(5, 10, $multiply); // Outputs: 30
```

**Standard Practice:** Name callback parameters as `$callback` for clarity.

## The `use` Keyword

### Accessing External Variables
Unlike the `global` keyword, `use` provides safer access to variables outside the function:

```php
$multiplier = 2;

$multiply = function($num) use ($multiplier) {
return $num * $multiplier;
};
```

**Key Benefit:** The `use` keyword creates a **copy** of the variable, not a reference. This prevents unintended side
effects on the original variable.

```php
$multiplier = 2;

$multiply = function($num) use ($multiplier) {
$multiplier = 5; // Only modifies the copy
return $num * $multiplier;
};

echo $multiply(10); // 50
echo $multiplier; // Still 2
```

## Arrow Functions (PHP 7.4+)

Arrow functions provide a shorter syntax for anonymous functions.

### Syntax Conversion
**Regular Anonymous Function:**
```php
$multiply = function($num) use ($multiplier) {
return $num * $multiplier;
};
```

**Arrow Function:**
```php
$multiply = fn($num) => $num * $multiplier;
```

### Arrow Function Features
- Use `fn` keyword instead of `function`
- Use `=>` (fat arrow) instead of `use` keyword
- No curly brackets or `return` keyword needed
- Automatically returns the expression result
- Automatically has access to parent scope variables

### Arrow Function Limitations
1. **Must return a value** - cannot be void
2. **Single expression only** - cannot contain multiple statements or curly brackets
3. **One line of code** - restricted to the expression after the arrow

## Summary

Anonymous functions provide flexibility in PHP by allowing:
- Functions to be stored in variables
- Functions to be swapped dynamically
- Functions to be passed as callbacks
- Safer variable access with the `use` keyword
- Concise syntax with arrow functions (PHP 7.4+)

Choose arrow functions for simple, single-expression operations, and regular anonymous functions when you need more
complex logic or don't need to return a value.
<?php
include "home.php";
?>