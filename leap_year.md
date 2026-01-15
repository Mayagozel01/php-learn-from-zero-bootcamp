# Leap year exercise with solution

What is leap_year?

A leap year is a year that is divisible by 4, but not by 100, unless it is also divisible by 400.

```php
function isLeapYear($year)
{
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}
```

### Input year

To check if a year is a leap year, you can call the function with a year value.

For example, if you input 2024, it would return true.